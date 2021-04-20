<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Impact;
use App\Models\Likelihood;
use App\Models\RiskCause;
use App\Models\RiskDescription;

class RiskDescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RiskDescription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'risk_cause_id' => RiskCause::factory(),
            'likelihood_id' => Likelihood::factory(),
            'impact_id' => Impact::factory(),
            'description' => $this->faker->text,
        ];
    }
}
