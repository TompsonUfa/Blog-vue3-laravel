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
        $services->store($category);
        return response()->json(['success' => "Запись создана"], 200);
    }
    public function destroy($id, CategoryServices $services){
        $services->destroy($id);
        return response()->json(['success' => "Запись удалена"], 200);
    }
    public function update($id, Request $request, CategoryServices $services){
        $newValue = $request->newValue;
        $services->update($id, $newValue);
        return response()->json(['success' => "Запись обновлена"], 200);
    }
}
