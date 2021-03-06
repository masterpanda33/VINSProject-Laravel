<?php

use Faker\Generator as Faker;

$factory->define(App\CompleteNursingAssessment::class, function (Faker $faker) {
    return [
        //
        'unit' => $faker->word,
        'date' => $faker->date,
        'time' => $faker->time,
        'idbandno' => $faker->word,
        'call_bell' => $faker->word,
        'height' => $faker->word,
        'weight' => $faker->word,
        'allergies' => $faker->word,
        'allergies_other' => $faker->word,
        'history_informant' => $faker->word,
        'history_informant_other' => $faker->word,
        'patient_arrived' => $faker->word,
        'patient_arrived_other' => $faker->word,
        'patient_arrived_from' => $faker->word,
        'patient_arrived_from_other' => $faker->word,
        'temperature' => $faker->word,
        'temperature_type' => $faker->word,
        'pulse' => $faker->word,
        'rr' => $faker->word,
        'blood_pressure' => $faker->word,
        'spo2' => $faker->word,
        'pain' => $faker->word,
        'feeding_usual' => $faker->word,
        'feeding_admission' => $faker->word,
        'bathing_usual' => $faker->word,
        'bathing_admission' => $faker->word,
        'toileting_usual' => $faker->word,
        'toileting_admission' => $faker->word,
        'mobility_usual' => $faker->word,
        'mobility_admission' => $faker->word,
        'dressing_usual' => $faker->word,
        'dressing_admission' => $faker->word,
        'hallucinating' => $faker->word,
        'post_op_condition' => $faker->word,
        'narcotics' => $faker->word,
        'weakness' => $faker->word,
        'drug_or_alcohol_withdrawal' => $faker->word,
        'bowel_bladder' => $faker->word,
        'seizures' => $faker->word,
        'walker' => $faker->word,
        'age_60' => $faker->word,
        'recent_hx_falls' => $faker->word,
        'postural_hypo_tension' => $faker->word,
        'uncooperative' => $faker->word,
        'age_12' => $faker->word,
        'poor_eyesight' => $faker->word,
        'language_barrier' => $faker->word,
        'paralysis_stroke' => $faker->word,
        'new_medications' => $faker->word,
        'poor_hearing' => $faker->word,
        'relative_name' => $faker->word,
        'relation' => $faker->word,
    ];
});
