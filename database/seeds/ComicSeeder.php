<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *$
     * @return void
     */
    public function run()
    {
        $data = config('comics');
        foreach ($data as $item) {
            $comics = new Comic();
            $comics->title = $item['title'];
            $comics->description = $item['description'];
            $comics->thumb = $item['thumb'];
            $comics->price = $item['price'];
            $comics->series = $item['series'];
            $comics->sale_date = $item['sale_date'];
            $comics->type = $item['type'];
            $comics->save();
        }
    }
}
