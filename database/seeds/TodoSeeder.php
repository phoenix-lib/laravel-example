<?php

use App\Models\Todo;
use App\User;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all()->first();

        factory(Todo::class, rand(5, 10))->create([
            'user_id' => $user->id,
        ]);
    }
}
