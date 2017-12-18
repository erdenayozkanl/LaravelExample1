<?php

use Faker\Generator as Faker;

$factory->define(App\Urun::class, function (Faker $faker) {
	return [
		'urun_adi' => $faker->name,
		'urun_aciklama' => $faker->text,
		'urun_fiyat' =>  $faker->numerify('###.##')
	];
});
