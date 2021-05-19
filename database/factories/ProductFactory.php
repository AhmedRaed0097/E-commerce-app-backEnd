<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productType = ['men', 'women', 'girls','boys','accessories'];
        $product_image='1.jpg';
        return [
            'product_name' => $this->faker->name(),
            'product_description' => $this->faker->name(),
            'product_description' => $this->faker->name(),
            'product_type' => $productType[rand(0,4)],
            'product_image'=>$product_image,
            'product_price' => $this->faker->randomFloat(2, 40, 300)
        ];
    }
}
