<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        DB::table('products')->insert([
            [

                'name' => 'Oppo',
                'price' => '20000',
                'description' => 'A smart phone with 8GB ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://gadgets.ndtv.com/oppo-f9-5586'
            ],
            [
                'name' => 'Samsung',
                'price' => '50000',
                'description' => 'A smart phone with 16GB ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://www.digit.in/mobile-phones/samsung-galaxy-m21-price-194345.html'

            ],
            [
                'name' => 'Sony',
                'price' => '55000',
                'description' => 'A smart tv with vr support and much more features',
                'category' => 'tv',
                'gallery' => 'https://www.amazon.com/Sony-X800H-43-Inch-Compatibility/dp/B083R24RLN'

            ],
            [
                'name' => 'LG',
                'price' => '75000',
                'description' => 'LG 50 inch Class 4K Smart UHD TV w/AI ThinQ® (49.5 inch Diag)',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/us/tvs/lg-50UM7300PUA-4k-uhd-tv'
            ],
            [
                'name' => 'Panasonic',
                'price' => '100000',
                'description' => 'Gross/Net Capacity: 628/513 L',
                'category' => 'fridge',
                'gallery' => 'https://www.bdshop.com/panasonic-6-door-stainless-inverter-econavi-fridge-nr-f605tt'

            ]
            
          ]);
}
}
