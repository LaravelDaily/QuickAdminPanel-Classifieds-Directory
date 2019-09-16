<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Company extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'companies';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'address',
        'city_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function scopeFilterByRequest($query, Request $request)
    {
        if ($request->input('city_id')) {
            $query->where('city_id', $request->input('city_id'));
        }

        if ($request->input('categories')) {
            $query->whereHas('categories',
                function ($query) use ($request) {
                    $query->where('id', $request->input('categories'));
                });
        }

        if ($request->input('search')) {
            $query->where('name', 'LIKE', '%'.$request->input('search').'%');
        }

        return $query;
    }

}
