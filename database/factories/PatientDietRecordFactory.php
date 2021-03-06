<?php

use Faker\Generator as Faker;

$factory->define(App\PatientDietRecord::class, function (Faker $faker) {
    return [
        //
        'dietician_name' => $faker->word,
        'date' => $faker->date,
        'time' => $faker->time,
        'bed_no' => $faker->word,
        'uhid_no' => $faker->word,
        'patient_name' => $faker->word,
        'diagnosis' => $faker->word,
        'consultants_name' => $faker->word,
        'diet_to_be_given' => $faker->word,
        'remarks' => $faker->word,
    ];
});
