<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'platform_id']; // The fillable property is an essential tool for protecting your application from mass assignment vulnerabilities. By explicitly defining the attributes that can be mass assigned, you gain better control over what gets saved to the database
    
    // mass assignment is when you try to assign values to multi fields in a single step, with knowledge of which field or colons are being assigned such values to.

    /** @use HasFactory<\Database\Factories\PeopleFactory> */
    use HasFactory;

    // Tells Eloquent that a People belongs to a Platform
    public function platform() {
        return $this->belongsTo(Platform::class);
    }
}
