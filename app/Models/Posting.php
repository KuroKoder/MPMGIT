<?php
namespace App\Models;
use App\Models\User;
use App\Models\Komen;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posting extends Model
{
    use HasFactory;
    Use Sluggable;
    protected $table = 'postings';
    protected $guarded = ['id'];
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id', 'user_id', 'image', 'status'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']??false, function($query, $search){
            return $query->where('title','like', '%'. $search.'%')
            ->orwhere('body','like', '%'.  $search.'%');
        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function komens()
    {
        return $this->hasMany(Komen::class, 'post_id', 'id')->whereNull('parent_id');
    }
}
