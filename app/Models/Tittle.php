<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tittle extends Model
{
    protected $fillable = ['name'];

    // Define the relationship with notes
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
