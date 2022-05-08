<?php

namespace App\Http\Controllers;

class PageController 
{
    public function pages()
    {
    return view('hello', ['name' => 'Linda']);
}
    };