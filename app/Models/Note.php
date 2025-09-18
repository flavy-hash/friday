<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note_text',
        'customTitle'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class); // Use Category::class instead of Categories::class
    }
    public function tittle()
{
    return $this->belongsTo(Tittle::class);
}

// In App\Models\Note.php

public static function boot()
{
    parent::boot();

    static::saving(function ($note) {
        if ($note->tittle) {
            $note->tittle_name = $note->tittle->name;
        }
    });
}

}
