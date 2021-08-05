<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // user_id itu sama dengan author (alias), karena foreignKey yang ada di tabel Posts yaitu user_id bukan author_id. Yang disorot adalah bisa menggunakan alias
        return $this->belongsTo(User::class, 'user_id');
    }
}
