<?php

namespace App\Helpers;

class ImageHelper
{
    public static function getRandomImage()
    {
        $images = [
            'assets/img/modelos/mod1.jpg',
            'assets/img/modelos/mod10.jpg',
            'assets/img/modelos/mod11.jpg',
            // Adicione aqui o caminho relativo para todas as suas imagens
        ];

        $randomIndex = array_rand($images);

        return asset($images[$randomIndex]);
    }
}
