<?php


use Illuminate\Database\Seeder;
use App\Question;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 3)->create()->each(function($u){
            $u->questions()->saveMany(factory(Question::class, rand(1, 5))->make());
        });
        //factory(Question::class, 10)->create();
    }
}
