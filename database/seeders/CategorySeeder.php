<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Silder;
use App\Models\SubCategory;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        DB::table('sub_categories')->truncate();
        DB::table('silders')->truncate();

        for ($i = 0; $i <= 2; $i++) {
            Silder::create([

                'name' => $faker->name(),
                'notes' => $faker->paragraph(),
                'price' => $faker->numberBetween(10,35),
                'discount' => $faker->numberBetween(20,60),
            ]);
        }

        for ($i = 0; $i <= Silder::count(); $i++) {
            Photo::insert([
                'Filename'     => rand(1,3) . '.jpg',
                'photoable_id' => rand(1,3),
                'photoable_type' => 'App\Models\Silder'
            ]);
        }

        for ($i = 0; $i <= 7; $i++) {
            Category::create([
                'name' => $faker->name,
                'notes' => $faker->name,
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".jpg",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Category'
            ]);
        }


        for ($i = 0; $i <= 50; $i++) {
            SubCategory::create([
                'name' => $faker->name,
                'notes' => $faker->name,
                'category_id'=> rand(1,2)
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".jpg",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\SubCategory'
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            Product::create([
                'name' => $faker->name,
                'notes' => $faker->paragraph,
                'price'=> $faker->numberBetween(10,35),
                'quantity'=> $faker->numberBetween(10,30),
                'type_product'=> $faker->randomElement([1,0]),
                'days'=>rand(100,600),
                'life_cycle'=>$faker->name,
                'disease'=>$faker->name,
                'hybrid'=>$faker->name,
                'section_one'=>$faker->paragraph,
                'section_two'=>$faker->paragraph,
                'section_there'=>$faker->paragraph,
                'discount' => $faker->numberBetween(20,60),
            ]);
        }



        $extras = Category::all();
        Product::all()->each(function ($trips) use ($extras) {
            $trips->categoryProdut()->attach($extras->random(rand(1, 4))->pluck('id')->toArray());
        });


        for ($i = 0; $i <= Product::count(); $i++) {
            Photo::insert([
                'Filename'     => rand(1,7) . '.jpg',
                'photoable_id' => rand(1,7),
                'photoable_type' => 'App\Models\Product'
            ]);
        }


        $user = User::create([
            'name' => 'test',
            'email'=> 'test@test.com',
            'password'=>Hash::make(123456789),
            'is_admin'=>0,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
