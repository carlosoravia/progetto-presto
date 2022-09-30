<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'subtitle', 'body', 'price', 'is_accepted', 'user_id'];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $category,
            'price' => $this->price,
        ];
        return $array;
    }

    //! Article N : 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //! Article N : 1 Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //! Article 1 : N Images
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {
        return Article::where('is_accepted', null)->count();
    }
}
