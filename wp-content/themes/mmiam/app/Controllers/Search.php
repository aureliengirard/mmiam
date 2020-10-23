<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Search extends Controller
{
    public function pageExcerpt()
    {
        return(object) [
            'text' => get_field('page_excerpt'),
        ];
    }
}
