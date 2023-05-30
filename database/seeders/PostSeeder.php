<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create("id_ID");
        $type = ["Novel", "Comic", "Newspaper", "Article", "Web", "Anime", "Fiction", "Podcast", "Fantasy", "Mystery"];
        $vid = ["MxdnS0onFas", "ldiaiDt1w9g", "7BFOJnPLlCo", "6x1i0K4Eg1g", "Gg8_TA7U0Uw", "lclue5ny6ik"];

        for($i=0; $i<10; $i++){
            $body = $faker->paragraphs(mt_rand(5,12), true);
            if(strlen($body)<1000){
                $category_id = 1;
            }elseif(strlen($body)<1400){
                $category_id = 2;
            }elseif(strlen($body)>=1400){
                $category_id = 3;
            }

            Post::create([
                "category_id" => $category_id,
                "title" => $faker->sentence(mt_rand(4,12)),
                "description" => $faker->sentence(),
                "author" => $faker->name(),
                "date" => $faker->date(),
                "body" => $body,
                "image" => $type[array_rand($type)],
                "rating_count" => mt_rand(10,500),
                "video"=> $vid[array_rand($vid)]
            ]);
        }
    }
}
