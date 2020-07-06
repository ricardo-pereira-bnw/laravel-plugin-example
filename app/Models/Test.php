<?php

declare(strict_types=1);

namespace App\Plugin\Example\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * Atributos que podem ser setados em massa pelo eloquent:
     * Ex: usando Test::create(), $test->fill() etc
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
