<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
public $id;
    public $title;
    public $start;
    public $end;

    /**
     * @param $id
     * @param $title
     * @param $start
     * @param $end
     */
    public function __construct($id, $title, $start, $end=null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->start = $start;
        $this->end = $end;

    }


    use HasFactory;
}
