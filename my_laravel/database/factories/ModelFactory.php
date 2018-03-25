<?php

$factory->define(App\App\Http\Model\Test2::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Http\Model\Chapter::class, function (Faker\Generator $faker) {
    return [
        'xs_chaptername' => $faker->word,
        'xs_content' => $faker->text,
        'id_name' => function () {
             return factory(App\Http\Model\Memberss::class)->create()->id;
        },
        'num_id' => $faker->randomNumber(),
        'url' => $faker->url,
    ];
});

$factory->define(App\Http\Model\Index::class, function (Faker\Generator $faker) {
    return [
        'xs_name' => $faker->word,
        'xs_author' => $faker->word,
        'category' => $faker->word,
        'name_id' => $faker->word,
    ];
});

$factory->define(App\Http\Model\Memberss::class, function (Faker\Generator $faker) {
    return [
        'xs_name' => $faker->word,
        'xs_author' => $faker->word,
        'category' => $faker->word,
        'name_id' => $faker->word,
    ];
});

$factory->define(App\Http\Model\News::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Http\Model\Resour::class, function (Faker\Generator $faker) {
    return [
        'ip' => $faker->word,
        'port' => $faker->word,
        'speed' => $faker->randomFloat(),
        'proxy_type' => $faker->word,
    ];
});

$factory->define(App\Http\Model\User::class, function (Faker\Generator $faker) {
    return [
        'user_name' => $faker->userName,
        'user_pass' => $faker->randomNumber(),
    ];
});

