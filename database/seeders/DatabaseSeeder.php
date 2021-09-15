<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::factory(10)->create();
        Category::create([
            'name' => 'Genshin Impact',
            'slug' => 'genshin_impact'
        ]);
        Category::create([
            'name' => 'Producting Music',
            'slug' => 'producting_music'
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web_programming'
        ]);

        Author::factory(5)->create();
        Posts::factory(20)->create();


        // Author::create([
        //     'name' => 'Agus Chandra',
        //     'slug' => 'agus_chandra',
        //     'email' => 'aguschandravii4@gmail.com'
        // ]);

        // Posts::create([
        //     'title' => 'Tips Fishing in Genshin Impact',
        //     'slug' => 'tips_fishing_in_genshin_impact',
        //     'author' => 'Agus Chandra',
        //     'category_id' => 1, 
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, sint!',
        //     'body' => '<p>
        //     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro inventore quae, officia perspiciatis quaerat minima vel nisi eius, numquam voluptates aliquid aut voluptatibus consequuntur, laudantium similique? Ipsa veniam ut atque perspiciatis incidunt veritatis sint voluptate, animi, suscipit nostrum impedit. 
        //     </p>
        //     <p>
        //     Voluptatibus maiores fuga odit libero quis enim, dolorum dignissimos earum omnis ab, eos iste nisi, repellendus voluptatem magni eligendi recusandae. Placeat molestias ad unde harum debitis eligendi dolore nam ab accusantium, fuga, ipsum alias. 
        //     </p>
        //     <p>
        //     Facilis minus earum animi enim incidunt? Fugit delectus quasi similique at rerum alias repellendus debitis, minima, ipsum consectetur, molestias officia quo voluptas cupiditate. Necessitatibus, dolorem eius?
        //     </p>'
        // ]);
        // Posts::create([
        //     'title' => 'Testing Dubstep in Real Production',
        //     'slug' => 'testing_dubstep_in_real_production',
        //     'author' => 'Soru',
        //     'category_id' => 2, 
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, sint!',
        //     'body' => '<p>
        //     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro inventore quae, officia perspiciatis quaerat minima vel nisi eius, numquam voluptates aliquid aut voluptatibus consequuntur, laudantium similique? Ipsa veniam ut atque perspiciatis incidunt veritatis sint voluptate, animi, suscipit nostrum impedit. 
        //     </p>
        //     <p>
        //     Voluptatibus maiores fuga odit libero quis enim, dolorum dignissimos earum omnis ab, eos iste nisi, repellendus voluptatem magni eligendi recusandae. Placeat molestias ad unde harum debitis eligendi dolore nam ab accusantium, fuga, ipsum alias. 
        //     </p>
        //     <p>
        //     Facilis minus earum animi enim incidunt? Fugit delectus quasi similique at rerum alias repellendus debitis, minima, ipsum consectetur, molestias officia quo voluptas cupiditate. Necessitatibus, dolorem eius?
        //     </p>'
        // ]);
        // Posts::create([
        //     'title' => 'How To Future Bounce in FL Studio 20',
        //     'slug' => 'how_to_future_bounce_in_fl_studio_20',
        //     'author' => 'Agus Chandra',
        //     'category_id' => 2, 
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, sint!',
        //     'body' => '<p>
        //     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro inventore quae, officia perspiciatis quaerat minima vel nisi eius, numquam voluptates aliquid aut voluptatibus consequuntur, laudantium similique? Ipsa veniam ut atque perspiciatis incidunt veritatis sint voluptate, animi, suscipit nostrum impedit. 
        //     </p>
        //     <p>
        //     Voluptatibus maiores fuga odit libero quis enim, dolorum dignissimos earum omnis ab, eos iste nisi, repellendus voluptatem magni eligendi recusandae. Placeat molestias ad unde harum debitis eligendi dolore nam ab accusantium, fuga, ipsum alias. 
        //     </p>
        //     <p>
        //     Facilis minus earum animi enim incidunt? Fugit delectus quasi similique at rerum alias repellendus debitis, minima, ipsum consectetur, molestias officia quo voluptas cupiditate. Necessitatibus, dolorem eius? loemabso.
        //     </p>'
        // ]);
        // Posts::create([
        //     'title' => 'How to Backend Dev',
        //     'slug' => 'how_to_backend_dev',
        //     'author' => 'Agus Chandra',
        //     'category_id' => 3, 
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, sint!',
        //     'body' => '<p>
        //     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro inventore quae, officia perspiciatis quaerat minima vel nisi eius, numquam voluptates aliquid aut voluptatibus consequuntur, laudantium similique? Ipsa veniam ut atque perspiciatis incidunt veritatis sint voluptate, animi, suscipit nostrum impedit. 
        //     </p>
        //     <p>
        //     Voluptatibus maiores fuga odit libero quis enim, dolorum dignissimos earum omnis ab, eos iste nisi, repellendus voluptatem magni eligendi recusandae. Placeat molestias ad unde harum debitis eligendi dolore nam ab accusantium, fuga, ipsum alias. 
        //     </p>
        //     <p>
        //     Facilis minus earum animi enim incidunt? Fugit delectus quasi similique at rerum alias repellendus debitis, minima, ipsum consectetur, molestias officia quo voluptas cupiditate. Necessitatibus, dolorem eius? loemabso.
        //     </p>'
        // ]);
        // Posts::create([
        //     'title' => 'Laravel in 20 Minutes',
        //     'slug' => 'laravel_in_20_minutes',
        //     'author' => 'Dajel',
        //     'category_id' => 3, 
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, sint!',
        //     'body' => '<p>
        //     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro inventore quae, officia perspiciatis quaerat minima vel nisi eius, numquam voluptates aliquid aut voluptatibus consequuntur, laudantium similique? Ipsa veniam ut atque perspiciatis incidunt veritatis sint voluptate, animi, suscipit nostrum impedit. 
        //     </p>
        //     <p>
        //     Voluptatibus maiores fuga odit libero quis enim, dolorum dignissimos earum omnis ab, eos iste nisi, repellendus voluptatem magni eligendi recusandae. Placeat molestias ad unde harum debitis eligendi dolore nam ab accusantium, fuga, ipsum alias. 
        //     </p>
        //     <p>
        //     Facilis minus earum animi enim incidunt? Fugit delectus quasi similique at rerum alias repellendus debitis, minima, ipsum consectetur, molestias officia quo voluptas cupiditate. Necessitatibus, dolorem eius? loemabso.
        //     </p>'
        // ]);
    }
    
}
