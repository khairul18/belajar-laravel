<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class MPost 
{

    private static $type_cars = [
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

    public static function all()
    {
        return collect(self::$type_cars);  
    }

    

    public static function find($glu)

    {
    
        $type_cars = static::all();

        // $new_car = [];

        // foreach ($type_cars as $car) {
        //     if ($car["slug"] === $glu) {
        //         $new_car = $car;
        //     }
        // }
        return $type_cars->firstwhere('slug', $glu);

    }
}