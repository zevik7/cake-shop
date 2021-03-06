<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cake;

class Image extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $table = 'images';
    protected $fillable = [
        'type',
        'url',
        'imageable_id',
        'imageable_type'
    ];
    // public $timestamp = true;

     /**
     * Get the parent imageable model;
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
