<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bioscoop extends Model
{
    /**
     * Tell laravel which table to use
     * @var string
     */
    protected $table = 'bioscopen';

    /**
     * Laravel will be able to edit data in these columns
     * @var array
     */
    protected $fillable = ['name', 'city', 'zip', 'address', 'description', 'slug', 'phone', 'reservations'];

    public function users()
    {
        return $this->hasMany(Editor::class, 'bioscoop_id', 'id')->get();
    }

    public function photos()
    {
        return $this->hasMany(BioscoopPhoto::class, 'bioscoop_id', 'id')->get();
    }

    public function zalen()
    {
        return $this->hasMany(Room::class, 'bioscoop_id', 'id')->get();
    }
}
