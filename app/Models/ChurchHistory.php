<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ChurchHistory extends Model
{
    protected $fillable = ['year', 'event', 'description'];

    public function scopeHistoricalPeriods(Builder $query)
    {
        return $query->selectRaw('
            CASE
                WHEN year < 313 THEN "Early Church"
                WHEN year BETWEEN 313 AND 590 THEN "Imperial Church"
                WHEN year BETWEEN 590 AND 1517 THEN "Medieval Period"
                ELSE "Modern Era"
            END as era,
            COUNT(*) as event_count'
        )
            ->groupBy('era')
            ->orderByRaw('MIN(year)');
    }
}
