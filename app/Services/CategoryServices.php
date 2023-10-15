<?php
namespace App\Services;

use App\Models\Category;

class CategoryServices {
    public function index(){
        return Category::all();
    }
}
