<?php

namespace Fully\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';

    protected $appends = ['url'];
    protected $dates = ['deleted_at'];


    public $fillable = [
        'is_available',
        'on_backorder',
        'name',
        'meta_title',
        'facebook_title',
        'google_plus_title',
        'meta_description',
        'short_description',
        'description',
        'category_id',
        'price',
        'sale_price',
        'sku',
        'mpn',
        'imageurl',
        'file_id',
        'created_at',
        'updated_at',
        'is_active',
        'status',
        'feature_1',
        'feature_2',
        'feature_3',
        'feature_4',
        'feature_5',
        'feature_6',
        'video_url',
        'bullet_1',
        'bullet_2',
        'bullet_3',
        'bullet_4',
        'bullet_5',
        'bullet_6'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_available' => 'boolean',
        'on_backorder' => 'boolean',
        'name' => 'string',
        'meta_title' => 'string',
        'facebook_title' => 'string',
        'google_plus_title' => 'string',
        'meta_description' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'category_id' => 'integer',
        'sku' => 'string',
        'mpn' => 'string',
        'imageurl' => 'string',
        'file_id' => 'string',
        'is_active' => 'boolean',
        'status' => 'string',
        'feature_1' => 'string',
        'feature_2' => 'string',
        'feature_3' => 'string',
        'feature_4' => 'string',
        'feature_5' => 'string',
        'feature_6' => 'string',
        'video_url' => 'string',
        'bullet_1' => 'string',
        'bullet_2' => 'string',
        'bullet_3' => 'string',
        'bullet_4' => 'string',
        'bullet_5' => 'string',
        'bullet_6' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    // public function tags() {

    //     return $this->belongsToMany('Fully\Models\Tag', 'products_tags');
    // }

    public function category()
    {
        return $this->hasMany(\Fully\Models\Category::class, 'id', 'category_id', 'title');
    }

    public function file()
    {
        return $this->belongsTo(\Fully\Models\File::class);
    }
}