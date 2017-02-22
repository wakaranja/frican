<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Post::class,20)->create();
        factory(App\Centre::class,4)->create();
        factory(App\Report::class,20)->create();
        factory(App\News::class,20)->create();
        factory(App\Partner::class,10)->create();
        factory(App\Network::class,10)->create();
        factory(App\Television::class,10)->create();
    }
}
