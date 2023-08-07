<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            "https://media.istockphoto.com/id/1034587098/photo/tashkent-tv-tower-aerial-shot-during-sunset-in-uzbekistan.jpg?s=612x612&w=0&k=20&c=vos2bfAhLB8HuKgh91KnMkllxkZC6RYoXNt-F8Tz6Os=",
            "https://1.bp.blogspot.com/-kK7Fxm7U9o0/YN0bSIwSLvI/AAAAAAAACFk/aF4EI7XU_ashruTzTIpifBfNzb4thUivACLcBGAsYHQ/s1280/222.jpg",
            "https://cdn.motor1.com/images/mgl/P33NqL/s1/2022-bmw-m3-touring.jpg",
            "https://thumbs.dreamstime.com/b/red-bmw-m-car-black-background-72594621.jpg",
            "https://visor.ph/wp-content/uploads/2023/05/The-2024-Nissan-GT-R-costs-P12.445-million-thumb.jpg"
        ];

        for ($i = 1; $i <= 30; $i++){
            $data = json_decode(Http::get("https://jsonplaceholder.typicode.com/comments/$i")->body(), false, 512, JSON_THROW_ON_ERROR);

            Article::create([
                "title" => $data->name,
                "body" => $data->body,
                "slug" => Str::slug($data->name, '-'),
                "image" => $images[random_int(0, 4)],
                "views" => random_int(10, 2500),
            ]);
        }
    }
}
