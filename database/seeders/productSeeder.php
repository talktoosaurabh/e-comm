<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class productSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [ 'product_tittle'=>'NIKE AIR VAPORMAX 2019',
              'product_image'=>'https://github.com/talktoosaurabh/test-image/blob/main/image1.png?raw=true',
              'Product_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum ex vitae ultricies imperdiet.',
              'Product_size'=>'5,7,8,9,10',
              'Product_price'=>'500',
              'base_color'=>'#e5e1e0',
              'swoosh_color'=>'#f1743c',
              'lace_color'=>'#8d898a',
              'airbag_color'=>'#c5d0ca',
            ],

            [ 'product_tittle'=>'NIKE AIR VAPORMAX 2019',
              'product_image'=>'https://github.com/talktoosaurabh/test-image/blob/main/image2.png?raw=true',
              'Product_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum ex vitae ultricies imperdiet.',
              'Product_size'=>'8,9,10',
              'Product_price'=>'500' ,
              'base_color'=>'#e8eae7',
              'swoosh_color'=>'#222222',
              'lace_color'=>'#292b29',
              'airbag_color'=>'#22837e',
            ],

            [ 'product_tittle'=>'NIKE AIR VAPORMAX 2019',
              'product_image'=>'https://github.com/talktoosaurabh/test-image/blob/main/image3.png?raw=true',
              'Product_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum ex vitae ultricies imperdiet.',
              'Product_size'=>'5,7,9,10',
              'Product_price'=>'500' ,
              'base_color'=>'#aeb7c8',
              'swoosh_color'=>'#3b3b43',
              'lace_color'=>'#c4deef',
              'airbag_color'=>'#f7b76f',
            ],

            [ 'product_tittle'=>'NIKE AIR VAPORMAX 2019',
              'product_image'=>'https://github.com/talktoosaurabh/test-image/blob/main/image4.png?raw=true',
              'Product_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum ex vitae ultricies imperdiet.',
              'Product_size'=>'7,10',
              'Product_price'=>'500' ,
              'base_color'=>'#eef3ef',
              'swoosh_color'=>'#1d1c22',
              'lace_color'=>'#2c2f34',
              'airbag_color'=>'#117278',
            ]
         ]);
    }
}
