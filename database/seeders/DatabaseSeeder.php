<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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


        // User::create([
        //     'name' => 'Jhon Michael Manik',
        //     'email' => 'jhonmichaelmanik@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Anggoro Sudirman',
        //     'email' => 'anggorosudirman@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // User::create([
        //     'name' => 'Greysia Poli',
        //     'email' => 'greysiapoli@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Artikel Pertama',
        //     'slug' => 'artikel-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam! Commodi mollitia nobis natus. Esse repellendus quis quisquam fugiat eveniet. Nihil ipsa tenetur commodi tempora unde! Nostrum, amet, delectus incidunt perspiciatis recusandae harum cumque exercitationem quidem tenetur possimus pariatur reiciendis facere, velit vel debitis totam? Natus deleniti dolores voluptas quis consectetur maxime pariatur. Quas odio nesciunt laudantium doloribus eaque necessitatibus assumenda, cumque neque aperiam illo debitis, ducimus quibusdam corrupti porro, itaque officiis quidem repellat. A adipisci consequuntur iusto eius unde tenetur temporibus deserunt cum at, quisquam assumenda ducimus rem est, sunt doloremque! Explicabo libero laborum eius odio modi iste architecto ea sed, perspiciatis doloribus, expedita aliquid assumenda temporibus reprehenderit!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Artikel Kedua',
        //     'slug' => 'artikel-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam! Commodi mollitia nobis natus. Esse repellendus quis quisquam fugiat eveniet. Nihil ipsa tenetur commodi tempora unde! Nostrum, amet, delectus incidunt perspiciatis recusandae harum cumque exercitationem quidem tenetur possimus pariatur reiciendis facere, velit vel debitis totam? Natus deleniti dolores voluptas quis consectetur maxime pariatur. Quas odio nesciunt laudantium doloribus eaque necessitatibus assumenda, cumque neque aperiam illo debitis, ducimus quibusdam corrupti porro, itaque officiis quidem repellat. A adipisci consequuntur iusto eius unde tenetur temporibus deserunt cum at, quisquam assumenda ducimus rem est, sunt doloremque! Explicabo libero laborum eius odio modi iste architecto ea sed, perspiciatis doloribus, expedita aliquid assumenda temporibus reprehenderit!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Artikel Ketiga',
        //     'slug' => 'artikel-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam! Commodi mollitia nobis natus. Esse repellendus quis quisquam fugiat eveniet. Nihil ipsa tenetur commodi tempora unde! Nostrum, amet, delectus incidunt perspiciatis recusandae harum cumque exercitationem quidem tenetur possimus pariatur reiciendis facere, velit vel debitis totam? Natus deleniti dolores voluptas quis consectetur maxime pariatur. Quas odio nesciunt laudantium doloribus eaque necessitatibus assumenda, cumque neque aperiam illo debitis, ducimus quibusdam corrupti porro, itaque officiis quidem repellat. A adipisci consequuntur iusto eius unde tenetur temporibus deserunt cum at, quisquam assumenda ducimus rem est, sunt doloremque! Explicabo libero laborum eius odio modi iste architecto ea sed, perspiciatis doloribus, expedita aliquid assumenda temporibus reprehenderit!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Artikel Keempat',
        //     'slug' => 'artikel-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam! Commodi mollitia nobis natus. Esse repellendus quis quisquam fugiat eveniet. Nihil ipsa tenetur commodi tempora unde! Nostrum, amet, delectus incidunt perspiciatis recusandae harum cumque exercitationem quidem tenetur possimus pariatur reiciendis facere, velit vel debitis totam? Natus deleniti dolores voluptas quis consectetur maxime pariatur. Quas odio nesciunt laudantium doloribus eaque necessitatibus assumenda, cumque neque aperiam illo debitis, ducimus quibusdam corrupti porro, itaque officiis quidem repellat. A adipisci consequuntur iusto eius unde tenetur temporibus deserunt cum at, quisquam assumenda ducimus rem est, sunt doloremque! Explicabo libero laborum eius odio modi iste architecto ea sed, perspiciatis doloribus, expedita aliquid assumenda temporibus reprehenderit!',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'title' => 'Artikel Kelima',
        //     'slug' => 'artikel-kelima',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, eaque deleniti natus sapiente, voluptatem atque cupiditate perspiciatis sunt ad quo quisquam! Commodi mollitia nobis natus. Esse repellendus quis quisquam fugiat eveniet. Nihil ipsa tenetur commodi tempora unde! Nostrum, amet, delectus incidunt perspiciatis recusandae harum cumque exercitationem quidem tenetur possimus pariatur reiciendis facere, velit vel debitis totam? Natus deleniti dolores voluptas quis consectetur maxime pariatur. Quas odio nesciunt laudantium doloribus eaque necessitatibus assumenda, cumque neque aperiam illo debitis, ducimus quibusdam corrupti porro, itaque officiis quidem repellat. A adipisci consequuntur iusto eius unde tenetur temporibus deserunt cum at, quisquam assumenda ducimus rem est, sunt doloremque! Explicabo libero laborum eius odio modi iste architecto ea sed, perspiciatis doloribus, expedita aliquid assumenda temporibus reprehenderit!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
