<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    $number = $faker->numberBetween(1,99);
    $gender = $faker->randomElement(['men', 'women']);
    gc_collect_cycles();

    return [
        'nik' => $faker->isbn13,
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'jk' => $faker->randomElement(['laki-laki', 'perempuan']),
        'tgl_lahir' => $faker->date,
        'image' => "https://randomuser.me/api/portraits/{$gender}/{$number}.jpg",
        'alamat' => $faker->address
    ];
});
