<?php

namespace Database\Factories;

use App\Models\Candidacy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CandidacyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidacy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),

            'surname' => $this->faker->name(),
            'father' => $this->faker->name(),
            'mother' => $this->faker->name(),
            'bi' => Str::random(14),
            'birth' => '2000-01-01',
            'residence' => 'teste de residencia',
            'tel' => '922162462',
            'email' => $this->faker->unique()->safeEmail(),

            'qualifications' => 'teste de habilitações',
            'ocupation' => 'Administrador de Sistemas',

            'doc_bi' => Str::random(10),
            'doc_covid' => Str::random(10),
            'doc_qualifications' => Str::random(10),

            'province_id' => 'P11',
            'county' => 'Cazenga', //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'placeregion' => 'Comissão Provincial Eleitoral',


            'perpage' => 'Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022',
            'state' => 'Recebida',

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
