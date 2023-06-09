<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    protected $with = ['category','author'];


    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function scopeFilter($query,array $filter)
    {
        if(request('search'))
        {
            $query->when($filter['search'] ?? false,function($query,$search)
            {
                $query
                ->where('title', 'like', '%' . $search . '%')
                ->orwhere('body', 'like', '%' . $search . '%');

            });
            

        }
      
        
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
}
