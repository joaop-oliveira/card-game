<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function deck()
    {
        return $this->belongsTo(Deck::class);
    }
}
