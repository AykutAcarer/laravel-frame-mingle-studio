<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Product::create([ 
            'product_name'=> '70 Reasons Why We Love You', 
            'product_description'=> 'Wedding Song Photo Collage | Wedding Gift\r\n\r\nKey Features:\r\n\r\nDigital 
                File:\r\n1. High resolution 300 DPI JPG file delivered\r\n2. No need to ship a 
                physical product\r\n3. Print at home or through your preferred printing 
                service\r\n\r\nUnframed Poster:\r\n1. Pre', 
            'product_type'=>'Digital', 
            'product_size'=> 'A4 21 x 29.7', 
            'product_category'=>  'Digital Prints', 
            'product_preis_from'=> 27.63, 
            'product_preis_now'=> 20.73
            ]);
        
        Product::create([
            'product_name'=>'Personalized Family Song Gift', 
            'product_description'=>'Ideal gift for Mary Christmas for the Family\r\n\r\nMake this Christmas season extra 
                special with our Personalized Family Song Gift, a heartwarming choice for an unforgettable 
                Christmas gift for family. Celebrate the spirit of togetherness, the magic of ', 
            'product_type'=>'Digital', 
            'product_size'=>'A4 21 x 29.7', 
            'product_category'=>'Digital Prints', 
            'product_preis_from'=>17.27, 
            'product_preis_now'=>12.96
        ]);
    }
}
