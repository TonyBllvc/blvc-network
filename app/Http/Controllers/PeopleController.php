<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        // route --> /black/
        // fetch all records from the "people" table and pass into the index view
        $black_list = People::with('platform')->orderBy('created_at', 'desc')->paginate(4); // handles pagination, 3 records per page
        
        return view('black.index', ["black" => $black_list]);
    }

    public function create(){
        // route --> /black/create
        // return the create view (with web form) to users

        return view('black.create');
    }
    
    public function show($id){
        // route --> /black/{id}
        // fetch a single record from the "people" table based on the id and pass into the show view
        $black = People::with('platform')->findOrFail($id);

        return view('black.show', ['black' => $black]);
    }

    public function store(Request $request){
        // route --> POST /black
        // validate and store the new record into the "people" table
    }
}