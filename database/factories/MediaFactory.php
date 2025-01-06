<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    public function definition(): array
    {
        $url  = $this->getUrl();
        $mime = $this->getMime($url);

       return [
           'url'           =>  $url,
           'mime'          =>  $mime,
           'mediable_id'   =>  Post::factory(),
           'mediable_type' =>  function (array $attributes) {
                return Post::query()->find($attributes['mediable_id'])->getMorphClass();
           }
       ];
    }

    function getUrl($type = 'post'): string
    {
        switch ($type){
            case 'post':
                    $url = [
                        "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4",
                        "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4",
                        'https://unsplash.com/photos/closeup-of-hands-holding-cash-rSyw7Qv0nFg'
                    ];

                    return $this->faker->randomElement($url);
                    break;
            case 'reel':
                $url = [
                    "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4",
                    "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
                    "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4"
                ];

                return $this->faker->randomElement($url);
                break;
            default:
                return 'https://example.com/default-url';
                break;
        }
    }

    function getMime($url) : string
    {
        if(str()->contains($url, 'gtv-videos-bucket')){
            return 'video';
        }else if(str()->contains($url, 'unsplash.com/photos')){
            return 'image';
        }else{
            return '';
        }
    }

    #chainable methods
    function reel() : Factory
    {
        $url = $this->getUrl('reel');
        $mine = $this->getMime($url);

        return $this->state(function (array $attributes) use ($url,$mine) {

            return [
              'mime'    => $mine,
              'url'     => $url
            ];
        });
    }


    #chainable methods
    function post() : Factory
    {
        $url = $this->getUrl('post');
        $mine = $this->getMime($url);

        return $this->state(function (array $attributes) use ($url,$mine) {

            return [
                'mime'    => $mine,
                'url'     => $url
            ];
        });
    }

}
