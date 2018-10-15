<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'slug' => 'CK-Blue-Schoolboy-Blazer',
                'name' => 'CK Blue Schoolboy Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ed60e-mpd000c.jpg',
                'b_img' => 'df7b4-mpd000t.jpg',
                'c_img' => '09a16-mpd000t_6.jpg',
                'brand_id' => 5,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 8,
                'price' => 25.0,
            ),
            1 => 
            array (
                'product_id' => 2,
                'slug' => 'Dior-Blue-Peacoat-Trench',
                'name' => 'Dior Blue Peacoat Trench',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '0c88d-mtk009a.jpg',
                'b_img' => '1d3f9-mtk009b.jpg',
                'c_img' => '604e7-mtk009t.jpg',
                'brand_id' => 2,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 5,
                'price' => 15.0,
            ),
            2 => 
            array (
                'product_id' => 3,
                'slug' => 'Fendi-Waxed-Blue-Jacket',
                'name' => 'Fendi Waxed Blue Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '51c1b-pmo000a.jpg',
                'b_img' => 'c10d9-pmo000b.jpg',
                'c_img' => 'bdb32-pmo000c.jpg',
                'brand_id' => 7,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 3,
                'price' => 80.0,
            ),
            3 => 
            array (
                'product_id' => 4,
                'slug' => 'Gucci-Red-Neck-Sweater',
                'name' => 'Gucci Red Neck Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '8d383-mtk006a.jpg',
                'b_img' => '07e30-mtk006b.jpg',
                'c_img' => '9cbb3-mtk006t.jpg',
                'brand_id' => 1,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 5,
                'price' => 12.0,
            ),
            4 => 
            array (
                'product_id' => 5,
                'slug' => 'Pepe-Jeans-Outwear-Jeans',
                'name' => 'Pepe Jeans Outwear Jeans',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px;">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</span></p>
',
                'a_img' => 'f0a95-mpd000a.jpg',
                'b_img' => '87131-mpd000b.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 23,
                'price' => 19.0,
            ),
            5 => 
            array (
                'product_id' => 6,
                'slug' => 'DKNY-Brown-Line-Jeans',
                'name' => 'DKNY Brown Line Jeans',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '94efc-mpd012a.jpg',
                'b_img' => '35a3f-mpd012b.jpg',
                'c_img' => 'aa423-mpd012t.jpg',
                'brand_id' => 6,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 45,
                'price' => 7.0,
            ),
            6 => 
            array (
                'product_id' => 7,
                'slug' => 'Moschino-Violet-Shirt ',
                'name' => 'Moschino Violet Shirt ',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'd4bfb-mtk000a.jpg',
                'b_img' => '0dfc6-mtk000b.jpg',
                'c_img' => '52d0c-mtk000t.jpg',
                'brand_id' => 3,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 67,
                'price' => 6.0,
            ),
            7 => 
            array (
                'product_id' => 8,
                'slug' => 'Pepe-Jeans-Blue-Retro',
                'name' => 'Pepe Jeans Blue Retro',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'e11b9-mpd006a.jpg',
                'b_img' => '01bc5-mpd006b.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 37.0,
            ),
            8 => 
            array (
                'product_id' => 9,
                'slug' => 'Gucci-Brown-Jeans',
                'name' => 'Gucci Brown Jeans',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '9e254-mpd003a.jpg',
                'b_img' => '80540-mpd003b.jpg',
                'c_img' => 'c4a7d-mpd003t.jpg',
                'brand_id' => 1,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 31,
                'price' => 32.0,
            ),
            9 => 
            array (
                'product_id' => 10,
                'slug' => 'Dior-Brown-Mens-Shirt',
                'name' => 'Dior Brown Mens Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '543ea-mtk004a.jpg',
                'b_img' => '97d6f-mtk004t.jpg',
                'c_img' => '',
                'brand_id' => 2,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 78,
                'price' => 5.0,
            ),
            10 => 
            array (
                'product_id' => 11,
                'slug' => 'Fendi-White-Jacket',
                'name' => 'Fendi White Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'c6b37-pmtk001c.jpg',
                'b_img' => '04ec4-pmtk001t.jpg',
                'c_img' => '',
                'brand_id' => 7,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 1,
                'price' => 99.0,
            ),
            11 => 
            array (
                'product_id' => 12,
                'slug' => 'Dior-Black-Long-Blazer',
                'name' => 'Dior Black Long Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'dd8f7-pmo001a.jpg',
                'b_img' => 'd071b-pmo001b.jpg',
                'c_img' => 'd4450-pmo001t.jpg',
                'brand_id' => 2,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 3,
                'price' => 89.0,
            ),
            12 => 
            array (
                'product_id' => 13,
                'slug' => 'CK-Shell-Black-Blazer',
                'name' => 'CK Shell Black Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '3a815-pmo002a.jpg',
                'b_img' => '6cb7c-pmo002b.jpg',
                'c_img' => '3e659-pmo002t.jpg',
                'brand_id' => 5,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 4,
                'price' => 94.0,
            ),
            13 => 
            array (
                'product_id' => 14,
                'slug' => 'Fendi-Brown-Skinny-Jeans',
                'name' => 'Fendi Brown Skinny Jeans',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '56245-pmp002a.jpg',
                'b_img' => '1f543-pmp002b.jpg',
                'c_img' => '892a5-pmp002t.jpg',
                'brand_id' => 7,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 42,
                'price' => 54.0,
            ),
            14 => 
            array (
                'product_id' => 15,
                'slug' => 'DKNY-Black-Neck-Sweater',
                'name' => 'DKNY Black Neck Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '10551-pmtk006a.jpg',
                'b_img' => '594d8-pmtk006t.jpg',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 23.0,
            ),
            15 => 
            array (
                'product_id' => 16,
                'slug' => 'Moschino-White-Hoodie',
                'name' => 'Moschino White Hoodie',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ebd78-pmtk004a.jpg',
                'b_img' => '74d1c-pmtk004b.jpg',
                'c_img' => '405b7-pmtk004t.jpg',
                'brand_id' => 3,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 34,
                'price' => 12.0,
            ),
            16 => 
            array (
                'product_id' => 17,
                'slug' => 'Pepe-Jeans-Stripe-Shirt',
                'name' => 'Pepe Jeans Stripe Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '57e1d-pmtk001a.jpg',
                'b_img' => '41715-pmtk001b.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 73,
                'price' => 10.0,
            ),
            17 => 
            array (
                'product_id' => 18,
                'slug' => 'Fendi-Blue-Neck-Shirt',
                'name' => 'Fendi Blue Neck Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'be78d-pms004a.jpg',
                'b_img' => 'ee0c7-pms004b.jpg',
                'c_img' => 'e84e4-pms004t.jpg',
                'brand_id' => 7,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 18,
                'price' => 32.0,
            ),
            18 => 
            array (
                'product_id' => 19,
                'slug' => 'Gucci-White-Sleeve-Shirt',
                'name' => 'Gucci White Sleeve Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '04776-pms000a.jpg',
                'b_img' => 'ef015-pms000b.jpg',
                'c_img' => 'bd7a2-pms000t.jpg',
                'brand_id' => 1,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 3,
                'price' => 32.0,
            ),
            19 => 
            array (
                'product_id' => 20,
                'slug' => 'CK-White-Heisen-Sweater',
                'name' => 'CK White Heisen Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'b2890-pmtk000a.jpg',
                'b_img' => 'd513f-pmtk000t.jpg',
                'c_img' => '',
                'brand_id' => 5,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 23.0,
            ),
            20 => 
            array (
                'product_id' => 21,
                'slug' => 'DKNY-Red-Neck-Shirt',
                'name' => 'DKNY Red Neck Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ea72e-mpd006t.jpg',
                'b_img' => '02090-pms003a.jpg',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 72,
                'price' => 19.0,
            ),
            21 => 
            array (
                'product_id' => 22,
                'slug' => 'Fendi-Navy-Front-Jacket',
                'name' => 'Fendi Navy Front Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'd52bb-pmtk005b.jpg',
                'b_img' => '93d69-pmtk005t.jpg',
                'c_img' => '',
                'brand_id' => 7,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 66,
                'price' => 21.0,
            ),
            22 => 
            array (
                'product_id' => 23,
                'slug' => 'Moschino-Shell-Viol-Shirt',
                'name' => 'Moschino Shell Viol Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ee72c-1.jpg',
                'b_img' => 'a35ee-1_2.jpg',
                'c_img' => '',
                'brand_id' => 3,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 28,
                'price' => 9.0,
            ),
            23 => 
            array (
                'product_id' => 24,
                'slug' => 'Pepe-Jeans-Blue-Shirt',
                'name' => 'Pepe Jeans Blue Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '1d60f-2.jpg',
                'b_img' => '43f35-2_2.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 1,
                'parent_id' => 1,
                'quantity' => 68,
                'price' => 27.0,
            ),
        ));
        
    }
}