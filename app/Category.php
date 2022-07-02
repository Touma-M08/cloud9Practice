<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts() {
        return $this->hasMany("App\Post");
    }
    
    public function getByCategory(int $Limit_count = 5) {
        return $this->posts()->with("category")->orderBy("updated_at", "desc")->paginate($limit_count);
    }
}
