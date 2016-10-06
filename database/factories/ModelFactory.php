<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'tipo' => 0,
        'saldo_pontos' => 0,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Categoria::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->name,
    ];
});
$factory->define(App\Models\Autor::class, function (Faker\Generator $faker) {
    return [
        'autor' => $faker->name,
    ];
});
$factory->define(App\Models\Livro::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->title,
        'n_paginas' => rand(1,1000),
        'desc_livro' => $faker->Text(),
    ];
});
$factory->define(App\Models\Livro_Categoria::class, function (Faker\Generator $faker) {
    return [
        'livro_id' => rand(1,6),
    ];
});
