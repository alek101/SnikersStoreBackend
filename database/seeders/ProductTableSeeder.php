<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1=new Product();
        $p1->store('patika1',100,'https://media.gq.com/photos/5ff8910fe3c625daa33f7a7f/16:9/w_2560%2Cc_limit/NIKE-Dunks.jpg');
        $p2=new Product();
        $p2->store('patika2',200,'https://dynaimage.cdn.cnn.com/cnn/q_auto,w_1865,c_fill,g_auto,h_1049,ar_16:9/http%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F200814092431-01b-michael-jordan-sneakers-auction.jpg');
        $p3=new Product();
        $p3->store('patika3',150,'https://rukminim1.flixcart.com/image/880/1056/jmwch3k0/shoe/j/y/n/dg-292-white-blue-patti-10-digitrendzz-white-original-imaf9p36fkykfjqt.jpeg?q=50');
    }
}
