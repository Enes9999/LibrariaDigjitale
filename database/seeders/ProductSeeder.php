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
        //
        DB::table('products')->insert([
            [
            'title'=>'Prilli i Thyer',
            'price'=>'3€',
            'category'=>'romance',
            'description'=>'Ne kete liber behet fjale per nje periudhe kohore ku cdo gje varej nga kanuni i Leke Dukagjinit',
            'photo'=>'http://bukinist.al/6810-thickbox_default/prilli-i-thyer.jpg',
            ],
            [
            'title'=>'Krimi Kibernetik',
            'price'=>'5€',
            'category'=>'science',
            'description'=>'Ne kete liber behet fjale per krimet qe jane shkaktuar nga krimi kibernetik',
            'photo'=>'https://b3c4r2f7.stackpathcdn.com/18630-thickbox_default/krimi-kibernetik.jpg',
            ]
        ]);
    }
}
