<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'color',
    ];

    public function getAvailableBackgroundColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/customization.json'))
        );
        return $elements;
    }
}
