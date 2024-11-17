<?php

namespace App\Models;

use App\Trait\date_convert;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Viewpoint extends Model
{
    use HasFactory,SoftDeletes,date_convert;

    protected $fillable=[
        'title',
        'position',
        'alt_pic',
        'pic',
        'state',
        'state_main',
        'order',
        'note',
        'admin_id'
    ];

    protected $appends=["alt_image"];

    public function scopeFilter(Builder $builder, $params)
    {
        if (!empty($params['title'])) {
            $builder->where('title', 'like', '%' . $params['title'] . '%');
        }
        return $builder;
    }

    public function getAltImageAttribute(){
        if(empty($this->alt_pic)){
            return $this->title;
        }
        return $this->alt_pic;
    }
}
