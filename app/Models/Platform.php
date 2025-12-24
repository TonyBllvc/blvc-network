<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['name', 'location', 'description']; // The fillable property is an essential tool for protecting your application from mass assignment vulnerabilities. By explicitly defining the attributes that can be mass assigned, you gain better control over what gets saved to the database
    
    /** @use HasFactory<\Database\Factories\PlatformFactory> */
    use HasFactory;

    // Tells Eloquent that a Platform has many Peoples
    public function peoples() {
        return $this->hasMany(People::class);
    }
}
