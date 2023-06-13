<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display the Users CRUD.
     */

    public function users()
    {      
     
        return view('admin.users');
    }  

    /**
     * Display the Articles CRUD.
     */
    public function articles()
    {
           
        return view('admin.articles');
    }
     

    /**
     * Display the categories CRUD.
     */
    public function categories()
    {
           
        return view('admin.categories');
    }


 
}
