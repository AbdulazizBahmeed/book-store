<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Order extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'from' => 'datetime',
            'to' => 'datetime',
        ];
    }

    public function orderable(): MorphTo
    {
        return $this->morphTo();
    }

    public function calculateTotalPrice()
    {
        $borrowedDays =  date_diff($this->to,$this->from)->days;
        if($borrowedDays == 0) return $this->orderable->borrow_rate;
        else return $borrowedDays * $this->orderable->borrow_rate;
    }
}
