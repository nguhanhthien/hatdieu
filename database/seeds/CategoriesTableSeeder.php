<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'cat_id'    => 1,
                'cat'       => 'Hạt Điều',
                'keywords'  => 'Hạt Điều',
                'description'=> 'Hạt Điều',
                'slug'      => 'hat-dieu',
                'parent_id' => 0,
                'm_img'     => 'f213f-breadcrumb_bg2.jpg',
                'f_img'     => '',
            ),
            1 => 
            array (
                'cat_id'    => 2,
                'cat'       => 'Hạt tiêu',
                'keywords'  => 'Hạt tiêu',
                'description'=> 'Hạt tiêu',
                'slug'      => 'hat-tieu',
                'parent_id' => 0,
                'm_img'     => 'b1d40-breadcrumb_bg1.jpg',
                'f_img'     => '',
            ),
        ));
        
        
    }
}