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

$factory->define(\App\Entities\Plan::class, function(Faker\Generator $faker){
    return [
        'id'    => 'a',
    ];
});

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->unique()->email,
        'role'   => 'user',
        'password' => bcrypt('sexto'),
        'remember_token' => str_random(10),
        'unity_id'  => '1',
        'grade_id'  => $faker->numberBetween($min = 1, $max = 17),
        'especialty_id' => $faker->numberBetween($min = 1, $max = 11),
        'active' => true
    ];
});

$factory->define(\App\Entities\Grade::class, function(Faker\Generator $faker){
    return [
        'grade' => $faker->name
    ];
});

$factory->define(\App\Entities\Especialty::class, function(Faker\Generator $faker){
    return [
        'especialty' => $faker->name
    ];
});

$factory->define(\App\Entities\City::class, function(Faker\Generator $faker){
    return [
        'id'   => 'SC',
        'city' => $faker->city
    ];
});

$factory->define(\App\Entities\Unity::class, function(Faker\Generator $faker){
    return [
        'unity' => $faker->name
    ];
});

$factory->define(\App\Entities\Course::class, function(Faker\Generator $faker){
    return [
        'course' => $faker->name,
        'unity_id' => '2'
    ];
});

$factory->define(\App\Entities\Month::class, function(Faker\Generator $faker){
    return [
        'month' => $faker->monthName
    ];
});

$factory->define(\App\Entities\Topic::class, function(Faker\Generator $faker){
    return [
        'topic' => $faker->name,
        'unity_id' => '2',
        'user_id' => 200
    ];
});

$factory->define(\App\Entities\Cargo::class, function(Faker\Generator $faker){
    return [
        'grade_id'  => $faker->numberBetween($min = 1, $max = 17),
        'especialty_id' => $faker->numberBetween($min = 1, $max = 11),
        'year'  => $faker->year
    ];
});

$factory->define(\App\Entities\Person::class, function(Faker\Generator $faker){
    return [
        'paterno'   => $faker->lastName,
        'materno'   => $faker->lastName,
        'nombres'   => $faker->firstName,
        'city_id'   => 'LP'
    ];
});

$factory->define(\App\Entities\Kardex::class, function(Faker\Generator $faker) {
    return [
        'person_id' => 6132540,
        'active'    => true,
        'year'      => $faker->year,
        'course_id' => 1,
        'user_id'   => 100,
        'grade_id'  => $faker->numberBetween($min = 1, $max = 17),
        'especialty_id' => $faker->numberBetween($min = 1, $max = 11)
    ];
});

$factory->define(\App\Entities\Record::class, function(Faker\Generator $faker){
    return [
        'topic_id'  => $faker->numberBetween($min = 1, $max = 10),
        'nota'      => $faker->numberBetween($min = 1, $max = 100),
        'user_id'   => 100
    ];
});

$factory->define(\App\Entities\Document::class, function(Faker\Generator $faker){
    return [
        'dia'       => $faker->dayOfMonth,
        'month_id'  => $faker->numberBetween($min = 1, $max = 12),
        'year'      => $faker->year,
        'numero'    => $faker->unique()->numberBetween($min = 1, $max = 1000000),
        'user_id'   => 100
    ];
});