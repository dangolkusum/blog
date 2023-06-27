<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::truncate();
        // Category::truncate();
        // Post::create([
        //     'category_id'=>1,
        //     'user_id'=>1,
        //     'slug'=>"my-first-post",
        //     'title'=>"MY First Post",
        //     'excerpt'=>"Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.",
        //     'body'=>"Naruto[a] is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village. The story is told in two parts—the first set in Naruto's pre-teen years, and the second in his teens. The series is based on two one-shot manga by Kishimoto: Karakuri (1995), which earned Kishimoto an honorable mention in Shueisha's monthly Hop Step Award the following year, and Naruto (1997).Naruto was serialized in Shueisha's shōnen manga magazine Weekly Shōnen Jump from 1999 to 2014, with its chapters collected in 72 tankōbon volumes. The manga was adapted into an anime television series produced by Pierrot and Aniplex, which broadcast 220 episodes from 2002 to 2007; the English dub of the series aired on Cartoon Network and YTV from 2005 to 2009. Naruto: Shippuden, a sequel to the original series, premiered in 2007, and ended in 2017, after 500 episodes. The English dub was broadcast on Disney XD from 2009 to 2011, airing the first 98 episodes, and then switched over to Adult Swim's Toonami programming block in January 2014, starting over from the first episode. The English dub is still airing weekly on Adult Swim to this day. Viz Media began streaming the anime series on their streaming service Neon Alley in December 2012 on 99 episodes, and ended in March 2016, after 338 episodes. Besides the anime series, Pierrot has developed eleven movies and twelve original video animations (OVAs). Other Naruto-related merchandise includes light novels, video games, and trading cards developed by several companies.",
            
        // ]);

       Post::factory(5)->create();
         

        

//         Category::create([
//             'name'=>'Family',
//             'slug'=>'family'
//         ]);

//         Category::create([
//             'name'=>'Work',
//             'slug'=>'work'
//         ]);
     }
 }
