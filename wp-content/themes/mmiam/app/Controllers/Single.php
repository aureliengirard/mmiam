<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function singlePost()
    {
        return(object) [
          'subtitle' => get_field('post_subtitle'),
          'author' => get_field('post_author'),
          'introduction' => get_field('post_introduction'),
        ];
    }
}
