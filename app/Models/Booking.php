<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use Sluggable;
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'date_time',
        'number_of_persons',
        'special_request',
        'status',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getDateTime($date_time)
    {

        return date('m/d/Y h:i:s A',strtotime($date_time));
    }
}
