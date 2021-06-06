<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->tag_name = "doannhanh";
        $tag->slug = "do-an-nhanh";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "doantrua";
        $tag->slug = "do-an-trua";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "doansang";
        $tag->slug = "do-an-sang";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "doantoi";
        $tag->slug = "do-an-toi";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "doanngon";
        $tag->slug = "do-an-ngon";
        $tag->save();
    }
}
