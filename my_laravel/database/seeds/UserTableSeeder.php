<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Http\Model\Resour::class,10)->create()->each(function ($post){
            $post->save();
        });
        echo 'success';
    }
}
