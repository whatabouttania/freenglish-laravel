<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrammarExample extends Model
{

    protected $table = 'grammar_examples';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'example', 
    ];

    public function section(){
        return $this->belongsTo(GrammarSection::class);
    }
}
