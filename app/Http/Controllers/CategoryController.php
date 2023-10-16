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
    public function store(Request $request, CategoryServices $services){
        $category = $request->item;
        return $services->store($category);
    }
    public function destroy($id, CategoryServices $services){
        $services->destroy($id);
        return response()->json(['success' => "Запись удалена"], 200);
    }
}
