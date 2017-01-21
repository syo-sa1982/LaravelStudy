<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Task::create([
            'id' => 1,
            'user_id' => 1,
            'name' => '飯を作る'
        ]);
        Task::create([
            'id' => 2,
            'user_id' => 1,
            'name' => '飯を食う'
        ]);
        Task::create([
            'id' => 3,
            'user_id' => 1,
            'name' => '支度をする'
        ]);
        Task::create([
            'id' => 4,
            'user_id' => 1,
            'name' => '現地に向かう'
        ]);
        Task::create([
            'id' => 5,
            'user_id' => 1,
            'name' => 'HALO降下して襲撃'
        ]);
    }
}
