<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //mass assignment all field
    protected $guarded = [];

    //belongsTo table atau Model Album
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
    
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        
        if ( ! is_null($this->image))
        {
            $directory = config('cms.image.directoryPhotos');
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);
        }
        
        return $imageUrl;
    }
    
    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";
        
        if ( ! is_null($this->image))
        {
            $directory = config('cms.image.directoryPhotos');
            $ext       = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $thumbnail);
        }
        
        return $imageUrl;
    }
}
