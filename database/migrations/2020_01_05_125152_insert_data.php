<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use APP\Models;

class InsertData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('deliverycharges')->insert(array(
            'usd_delivery_charge' => 1.12,
            'eur_delivery_charge' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('productcategory')->insert(array(
            'name' => 'Pizza',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('productcategory')->insert(array(
            'name' => 'Beverage',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('size')->insert(array(
            'name' => 'Small',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('size')->insert(array(
            'name' => 'Medium',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('size')->insert(array(
            'name' => 'Large',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => 'BBQ Pizza',
            'product_category_id' => 1,
            'usd_price' => 10,
            'eur_price' => 11.16,
            'description' => 'Grilled chicken, fresh mushrooms, sweet corn, BBQ sauce and melting mozzarella cheese.',
            'photo' => 'images/BBQ-Chicken.png',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => 'Classic',
            'product_category_id' => 1,
            'usd_price' => 10,
            'eur_price' => 11.16,
            'description' => 'One of our all-time specialties. A meaty feast of double pepperoniand mozzarella cheese.',
            'photo' => 'images/CLASSIC-PEPPERONI.png',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => 'Deluxe',
            'product_category_id' => 1,
            'usd_price' => 13.39,
            'eur_price' => 12,
            'description' => 'Pizza sauce and extra Mozzarella cheese',
            'photo' => 'images/DELUXE-CHEESE.png',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => 'Pesto Margherita',
            'product_category_id' => 1,
            'usd_price' => 12.28,
            'eur_price' => 11,
            'description' => 'Go back to where it all began with Pizza sauce and the classic cheese, Topped with tomato diced and Pesto sauce.',
            'photo' => 'images/PESTO-MARGHERITA.png',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => 'Supreme',
            'product_category_id' => 1,
            'usd_price' => 13.39,
            'eur_price' => 12,
            'description' => 'Our famous combination of beef pepperoni, juicy beef topping, green peppers, onions, black olives and melting mozzarella cheese Supreme.',
            'photo' => 'images/SUPREME.png',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
        'name' => 'Very Veggie',
        'product_category_id' => 1,
        'usd_price' => 11.16,
        'eur_price' => 10,
        'description' => 'Mushrooms, green peppers, fresh tomatoes, onions and black olives loaded and topped with melting mozzarella cheese.',
        'photo' => 'images/VERY-VEGGIE.png',
        'size_id' => 1,
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
    ));
        DB::table('product')->insert(array(
            'name' => 'Chicken Legend - Ranch',
            'product_category_id' => 1,
            'usd_price' => 10.4,
            'eur_price' => 9,
            'description' => 'Grilled Chicken & Onions Slices Cheese, Oregano, with Ranch',
            'photo' => 'images/ChickenLegend-Ranch.jpg',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
        'name' => 'Italiano',
        'product_category_id' => 1,
        'usd_price' => 13.39,
        'eur_price' => 12,
        'description' => 'Beef Pepperoni, Fresh Mushrooms & Italian Sausage',
        'photo' => 'images/Italiano.jpg',
        'size_id' => 1,
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
    ));
        DB::table('product')->insert(array(
            'name' => 'Pepsi',
            'product_category_id' => 2,
            'usd_price' => 1.12,
            'eur_price' => 1,
            'description' => 'Pepsi',
            'photo' => 'images/pepsi.jpg',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => 'Mirinda',
            'product_category_id' => 2,
            'usd_price' => 1.12,
            'eur_price' => 1,
            'description' => 'Mirinda',
            'photo' => 'images/mirinda.jpg',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
        DB::table('product')->insert(array(
            'name' => '7up',
            'product_category_id' => 2,
            'usd_price' => 1.12,
            'eur_price' => 1,
            'description' => '7up',
            'photo' => 'images/7up.jpg',
            'size_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('deliverycharges')->where('id','>','0')->delete();
        DB::table('productcategory')->where('id','>','0')->delete();
        DB::table('size')->where('id','>','0')->delete();
        DB::table('product')->where('id','>','0')->delete();
    }
}
