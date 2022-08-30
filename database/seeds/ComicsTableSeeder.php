<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config('comics');
        foreach ($comics_list as $item) {
            $new_comics = new Comic();
            $new_comics->title = $item['title'];
            $new_comics->description = $item['description'];
            $new_comics->thumb = $item['thumb'];
            $new_comics->price = $item['price'];
            $new_comics->series = $item['series'];
            $new_comics->sale_date = $item['sale_date'];
            $new_comics->type = $item['type'];
            $new_comics->save();
        }
    }
}