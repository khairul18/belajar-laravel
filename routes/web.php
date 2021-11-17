<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "name" => "Khairul Ariandi Rida",
        "title" => "Home"
    ]);

});

Route::get('about', function () {
    return view('about', [
        "name" => "Khairul Ariandi Rida",
        "title" => "About"
    ]);

});


Route::get('article', function () {

    $type_cars = [
        
    ];

    return view('article', [
        "name" => "Khairul Ariandi Rida",
        "title" => "Article",
        "posts" => $type_cars
    ]);

});

Route::get('{slug}', function ($slug) {

    $type_cars = [
        [
        "title" => "first title",
        "slug" => "first-title",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam repellat ipsa blanditiis quaerat minima, 
        unde molestias fugit nihil voluptatibus aspernatur harum natus totam et minus! Voluptatibus, dignissimos? Quis vel 
        inventore saepe aut tenetur perspiciatis eos dolor modi eaque sit! Nihil doloremque nemo ex quisquam debitis eos iure 
        dolores impedit soluta quae, asperiores aliquid laborum, commodi quibusdam, laboriosam nisi corrupti quaerat incidunt eius 
        quo hic dolorem et facere. Magnam quaerat provident ipsum eligendi pariatur, libero nihil quos amet maiores. Officia, atque."
        ],
        [
        "title" => "second title",
        "slug" => "second-title",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus perferendis eveniet accusantium, libero soluta labore 
        rerum suscipit magni quod aut omnis ratione explicabo ut laborum similique cumque delectus officia asperiores eius at perspiciatis. 
        Rerum totam voluptates itaque officiis dolores eligendi a, expedita veniam quod neque ab. Recusandae vitae consectetur animi sit, 
        eos atque aperiam quas, quisquam voluptas at repellat tenetur ad earum iure delectus. Accusamus obcaecati mollitia magnam saepe itaque! 
        Vel incidunt mollitia sint nam quo aliquid iusto, asperiores provident repudiandae in cupiditate minima voluptatum libero tenetur, 
        labore voluptatibus impedit!"
        ]
    ];

    $new_car = [];

    foreach ($type_cars as $car) {
        if ($car["slug"] === $slug) {
            $new_car = $car;
        }
    }


    return view('post', [
        "name" => "Khairul Ariandi Rida",
        "title" => $slug,
        "post" => $new_car

    ]);

});