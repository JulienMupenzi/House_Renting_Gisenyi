<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
    public function getImage()
    {
        return asset(Storage::url($this->image));
    }

    public function getImages()
    {
        $images = [];

        foreach (explode(',', $this->images) as $image) {
           $images[] = asset(Storage::url($image));
        }
        return $images;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
