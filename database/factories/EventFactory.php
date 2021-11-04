<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_event' => $this->faker->sentence(2,3),
            'jenis_event' => $this->faker->word(),
            'tgl_event' => $this->faker->dateTime('2022-12-31'),
            'lokasi'=>$this->faker->city(),
            'harga'=>$this->faker->numberBetween(10000, 300000),
            'kuota'=> $this->faker->numberBetween(5, 1000),
            'poster_url'=>$this->faker->imageUrl(640, 480, null, true),
            'deskripsi'=>$this->faker->paragraphs(2, true),
            'penyelenggara'=>$this->faker->company(),
            'status_verifikasi'=> 'acc',
            'admin_id'=>mt_rand(1,3)
        ];
    }
}
