<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 50000,
            ],
            [
                'id' => 2,
                'title' => 'Manager',
                'salary' => 30000,
            ],
            [
                'id' => 3,
                'title' => 'Developer',
                'salary' => 20000,
            ]
        ];
    }
    public static function find(int $id)
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
