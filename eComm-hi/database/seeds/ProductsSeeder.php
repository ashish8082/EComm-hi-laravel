<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
          [ 'name'=>'Opp Mobile',
            'price'=>'13000',
            'descripation'=>'A smartphone phone with 4 gb ram and much more feacture',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver'



        ],
        [
            'name'=>'Vivo Mobile',
            'price'=>'14000',
            'descripation'=>'A smartphone phone with 4 gb ram and much more feacture',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver'



        ],
        [
            'name'=>'Redmi Mobile',
            'price'=>'8000',
            'descripation'=>'A smartphone phone with 4 gb ram and much more feacture',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver'

        ]
        
        ]);
    }
}
