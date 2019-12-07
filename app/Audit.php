<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'point_sale_id',
        'user_id',
        'basic_routine_id',
        'product_id',
        'platform_id',
        'visibility_id',
        'training_id',
        'another_factor_id',
        'observation_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function point_sale(){
        return $this->belongsTo(Point_sale::class);
    }

    public function basic_routine(){
        return $this->belongsTo(Basic_routine::class);
    }
    
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function platform(){
        return $this->belongsTo(Platform::class);
    }
    
    public function visibility(){
        return $this->belongsTo(Visibility::class);
    }
    
    public function training(){
        return $this->belongsTo(Training::class);
    }
    
    public function another_factor(){
        return $this->belongsTo(Another_factor::class);
    }
    
    public function observation(){
        return $this->belongsTo(Observation::class);
    }

}
