<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\RiskCategory;
use App\Models\RiskOwner;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'risk_category_id' => RiskCategory::factory(),
            'risk_owner_id' => RiskOwner::factory(),
            'name' => $this->faker->name,
        ];
    }
}
