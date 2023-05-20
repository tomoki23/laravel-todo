<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'category_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public static function searchTasks($keyword,$categoryId) {
        if ($keyword) {
            $tasks = Task::where('title', 'like', '%' . $keyword . '%')->orWhere('body', 'like', '%' . $keyword . '%')->paginate(10);
        } else if ($categoryId) {
            $tasks = Task::where('category_id', $categoryId)->orderBy('created_at', 'desc')->paginate(10);
        } else if ($keyword && $categoryId) {
            $tasks = Task::where('category_id', '=', $categoryId)->where('title', '%' . $keyword . '%')->orwhere('body', 'like', '%' . $keyword . '%')->paginate(10);
        } else {
            $tasks = Task::orderBy('created_at', 'desc')->paginate(10);
        }

        return $tasks;
    }
}
