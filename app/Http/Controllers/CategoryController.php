<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryServices;


class CategoryController extends Controller
{
    public function index(CategoryServices $services){
        $categories = $services->index();
        return response()->json(['categories'=> $categories], 200);
    }
}
