<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
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

    public static function searchTasks($keyword, $categoryId)
    {

        $tasks = Task::when($keyword && $categoryId, function (Builder $query) use ($keyword, $categoryId) {
            $query->where('category_id', '=', $categoryId)
                ->where(function (Builder $query) use ($keyword) {
                    $query->where('title', 'like', '%' . $keyword . '%')
                        ->orWhere('body', 'like', '%' . $keyword . '%')
                        ->orderBy('created_at', 'desc');
                });
        })->when($keyword, function (Builder $query, $keyword) {
            $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhere(
                    'body',
                    'like',
                    '%' . $keyword . '%'
                )->orderBy('created_at', 'desc');
        })->when($categoryId, function (Builder $query, $categoryId) {
            $query->where('category_id', $categoryId)
                ->orderBy('created_at', 'desc');
        })->orderBy('created_at', 'desc')
            ->paginate(10);

        return $tasks;
    }
}
