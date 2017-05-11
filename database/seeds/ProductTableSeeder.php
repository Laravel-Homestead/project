<?php

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
      	$product = new \App\Product([
      		'imagePath' => 'https://arcorporation.files.wordpress.com/2012/11/bricksyellow2.jpg',
      		'title' =>'Brick',
      		'description' => 'A brick is building material used to make walls, pavements and other elements in masonry construction',
      		'price' => 100
      	]);
      	$product->save();

      	$product = new \App\Product([
      		'imagePath' => 'https://arcorporation.files.wordpress.com/2012/11/bricksyellow2.jpg',
      		'title' =>'Brick',
      		'description' => 'A brick is building material used to make walls, pavements and other elements in masonry construction',
      		'price' => 100
      	]);
      	$product->save();

      	$product = new \App\Product([
      		'imagePath' => 'https://arcorporation.files.wordpress.com/2012/11/bricksyellow2.jpg',
      		'title' =>'Brick',
      		'description' => 'A brick is building material used to make walls, pavements and other elements in masonry construction',
      		'price' => 100
      	]);
      	$product->save();

      	$product = new \App\Product([
      		'imagePath' => 'https://arcorporation.files.wordpress.com/2012/11/bricksyellow2.jpg',
      		'title' =>'Brick',
      		'description' => 'A brick is building material used to make walls, pavements and other elements in masonry construction',
      		'price' => 100
      	]);
      	$product->save();

      	$product = new \App\Product([
      		'imagePath' => 'https://arcorporation.files.wordpress.com/2012/11/bricksyellow2.jpg',
      		'title' =>'Brick',
      		'description' => 'A brick is building material used to make walls, pavements and other elements in masonry construction',
      		'price' => 100
      	]);
      	$product->save();
    }
}
