<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();



       /* User::create([
            'name' => 'Adi Saputra',
            'email' => 'adi.juve22@gmail.com',
            'password' =>bcrypt('rahasia')
        ]);

        User::create([
            'name' => 'Ayu Setianingsih',
            'email' => 'ayusn1810@gmail.com',
            'password' =>bcrypt('rahasia')
        ]);
        */
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        /*Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta, quisquam dolorem quidem fuga sapiente error? Sint beatae reiciendis cum quam ad error consequatur amet, itaque enim magnam praesentium debitis pariatur consectetur perspiciatis deleniti earum ratione odit nesciunt. Magni nam aliquid sit labore laborum expedita at sapiente vitae quam possimus enim iusto assumenda reprehenderit error nobis mollitia, amet molestias unde voluptatum eveniet repellat, odit vel pariatur? Possimus iure, magnam aut rerum dolore soluta esse exercitationem neque eaque, temporibus cupiditate? Laborum doloribus in, tempore qui repellendus delectus eos ea pariatur maxime optio. Animi, numquam rem!',
            'category_id' => '1',
            'user_id' => '1'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta, quisquam dolorem quidem fuga sapiente error? Sint beatae reiciendis cum quam ad error consequatur amet, itaque enim magnam praesentium debitis pariatur consectetur perspiciatis deleniti earum ratione odit nesciunt. Magni nam aliquid sit labore laborum expedita at sapiente vitae quam possimus enim iusto assumenda reprehenderit error nobis mollitia, amet molestias unde voluptatum eveniet repellat, odit vel pariatur? Possimus iure, magnam aut rerum dolore soluta esse exercitationem neque eaque, temporibus cupiditate? Laborum doloribus in, tempore qui repellendus delectus eos ea pariatur maxime optio. Animi, numquam rem!',
            'category_id' => '1',
            'user_id' => '2'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta, quisquam dolorem quidem fuga sapiente error? Sint beatae reiciendis cum quam ad error consequatur amet, itaque enim magnam praesentium debitis pariatur consectetur perspiciatis deleniti earum ratione odit nesciunt. Magni nam aliquid sit labore laborum expedita at sapiente vitae quam possimus enim iusto assumenda reprehenderit error nobis mollitia, amet molestias unde voluptatum eveniet repellat, odit vel pariatur? Possimus iure, magnam aut rerum dolore soluta esse exercitationem neque eaque, temporibus cupiditate? Laborum doloribus in, tempore qui repellendus delectus eos ea pariatur maxime optio. Animi, numquam rem!',
            'category_id' => '2',
            'user_id' => '1'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt recusandae suscipit dolorum culpa corrupti accusantium dicta, quisquam dolorem quidem fuga sapiente error? Sint beatae reiciendis cum quam ad error consequatur amet, itaque enim magnam praesentium debitis pariatur consectetur perspiciatis deleniti earum ratione odit nesciunt. Magni nam aliquid sit labore laborum expedita at sapiente vitae quam possimus enim iusto assumenda reprehenderit error nobis mollitia, amet molestias unde voluptatum eveniet repellat, odit vel pariatur? Possimus iure, magnam aut rerum dolore soluta esse exercitationem neque eaque, temporibus cupiditate? Laborum doloribus in, tempore qui repellendus delectus eos ea pariatur maxime optio. Animi, numquam rem!',
            'category_id' => '2',
            'user_id' => '2'
        ]);*/

    }
}
