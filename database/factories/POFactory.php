<?php

namespace Database\Factories;

use App\Models\PO;
use Illuminate\Database\Eloquent\Factories\Factory;

class POFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PO::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'PurchaseOrderCode' => $this->faker->word,
        'PurchaseOrderDate' => $this->faker->word,
        'PurchaseOrderSPKNo' => $this->faker->word,
        'PurchaseOrderSPKDate' => $this->faker->word,
        'PurchaseOrderVehicleName' => $this->faker->word,
        'PurchaseOrderVehicleType' => $this->faker->word,
        'PurchaseOrderPrice' => $this->faker->word,
        'PurchaseOrderTaxPrice' => $this->faker->word,
        'PurchaseOrderTotalPrice' => $this->faker->word,
        'PurchaseOrderNotes' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'IsActive' => $this->faker->word
        ];
    }
}
