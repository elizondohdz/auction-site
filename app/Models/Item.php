<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Item extends Model
{
    use HasFactory;

    public static array $conditions = ['new','used'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bids(): HasMany
    {
        return $this->hasMany(Bid::class);
    }

    public function scopeFilter(Builder|QueryBuilder $query, array $filters): Builder|QueryBuilder
    {
        return $query->when($filters['search'] ?? null, function($query, $search){
            $query->where(function($query) use($search) {
                $query->where('name', 'like', '%'. $search .'%')
                ->orWhere('description', 'like', '%'. $search .'%')
                ->orWhere('location', 'like', '%'. $search .'%');
                });
            })
            ->when($filters['name'] ?? null, function($query, $name){
                $query->where('name', 'like', '%'. $name .'%');
            })
            ->when($filters['condition'] ?? null, function($query, $condition){
                $query->where('condition', $condition);
            })
            ->when($filters['location'] ?? null, function($query, $location){
                $query->where('location', 'like' ,'%' . $location . '%');
            });
    }
}
