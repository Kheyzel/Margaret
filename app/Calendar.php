<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Calendar extends Model
{
    protected $table = 'calendars';
    public $guarded = [];

    public function getFormattedDateAttribute(){
        return Carbon::parse($this->act_date)->format('F d, Y');
    }

    public function getFormattedDateMonthAttribute(){
        return Carbon::parse($this->act_date)->format('F');
    }
}
