<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController 
{
    public function index()
    {
        $page = Page::find(1);
        dd($page);
    }
};