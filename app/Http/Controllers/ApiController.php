<?php

namespace App\Plugin\Example\Http\Controllers;

use App\Plugin\Core\Libraries\Datagrid\Table;
use Faker\Factory;
use Illuminate\Support\Facades\Cache;

class ApiController extends AController
{
    public function gridProvider()
    {
        $data = Cache::remember('grid-data', 3600, function () {

            $faker = Factory::create('pt_BR');
            return array_map(fn () => [
                $faker->name,
                $faker->phoneNumber,
                $faker->company,
                $faker->city,
                $faker->cpf
            ], array_fill(0, 20, null));
        });

        return (new Table())->fromArray($data)->response();
    }

    public function store()
    {
        return [];
    }
}
