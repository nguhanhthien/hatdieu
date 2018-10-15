<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'EShop eCommerce CMS',
                'keyword' => 'CMS, eCommerce, Bootstrap,Template, Theme, Responsive, Fluid, Retina',
                'description' => 'EShop eCommerce CMS',
            ),
        ));
        
=======
        \DB::table('settings')->delete();

        \DB::table('settings')->insert([
            [
                'id'        => 1,
                'title'     => 'eCommerce CMS',
                'keyword'   => 'eCommerce CMS',
                'description' => 'eCommerce CMS',
                'favicon'   => 'eCommerce CMS',
                'thumb'     => 'images/thumg.png',
                'image'     => 'images/images.jpg',
                'logo'      => 'images/logo.png',
                'author'    => 'Trần Danh Đại',
                'email'     => 'daihc2011@gmail.com',
                'hotline'   => '0976805225',
                'company'   => 'eCommerce CMS',
                'company_short'=> 'eCommerce CMS'
            ]
        ]);
>>>>>>> deab427e6ce793a57b310572a2f536b044f29099
        
    }
}