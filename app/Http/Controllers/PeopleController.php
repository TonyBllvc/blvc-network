<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Platform;
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
        $platforms = Platform::all();

        return view('black.create', ['platforms' => $platforms]);
    }
    
    // public function show($id){
    //     // route --> /black/{id}
    //     // fetch a single record from the "people" table based on the id and pass into the show view
    //     $black = People::with('platform')->findOrFail($id);

    //     return view('black.show', ['black' => $black]);
    // }

    // OR (wildcard instance variable must be same as parameter variable in controller method)
    public function show(People $people){
        // route --> /black/{id}
        // fetch a single record from the "people" table based on the id and pass into the show view
        // route model binding automatically fetches the People model instance based on the {id} provided in the URL
        $black = $people->load('platform'); // eager load the related platform data
        return view('black.show', ['black' => $black]);
    }

    public function store(Request $request){ 
        // The Request object captures all the data submitted via the web form, where the first "Request" is the namespace(specifying the type of object) and the second "$request" is the variable name itself

        // route --> POST /black
        // validate and store the new record into the "people" table

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:people,name',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'platform_id' => 'required|exists:platforms,id'
        ]);

        People::create($validatedData);

        // return redirect()->route('black.show', ['id' => $people->id]);
        // return redirect()->route('black.index');
        // the with() method is used to flash a session variable that can be accessed in the next request (typically in the view) to show a success message
        return redirect()->route('black.index')->with('success', 'New person added successfully!');

    }

    // public function destroy($id){
    //     // route --> DELETE /black/{id}
    //     // delete a record from the "people" table based on the id
    
    //     $people = People::findOrFail($id);
    //     $people->delete();

    //     // return redirect()->route('black.index');
    //         // the with() method is used to flash a session variable that can be accessed in the next request (typically in the view) to show a success message
    //     return redirect()->route('black.index')->with('success', 'Person deleted successfully!');
    // }
    // OR (wildcard instance variable must be same as parameter variable in controller method)

    public function destroy(People $people){
        // route --> DELETE /black/{id}
        // delete a record from the "people" table based on the id
        $people->delete();

        // return redirect()->route('black.index');
            // the with() method is used to flash a session variable that can be accessed in the next request (typically in the view) to show a success message
        return redirect()->route('black.index')->with('success', 'Person deleted successfully!');
    }
}