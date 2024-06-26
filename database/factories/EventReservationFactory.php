<?php
namespace Database\Factories;

use App\Models\EventReservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventReservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_id' => function () {
                return \App\Models\Event::factory()->create()->id;
            },
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'comment' => $this->faker->sentence,
        ];
    }
}
