<?php
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryServices {
    public function index(){
        return Category::all();
    }

    public function store($category) {
        $categoryBd = Category::where('title', $category)->first();
        if($categoryBd){
            return response()->json(['error' => "Запись уже создана"], 409);
        } else {
            Category::create([
                'title' => $category,
                'slug' => Str::slug($category, '-'),
            ]);
            return response()->json(['success' => "Запись создана"], 200);
        }
    }

    public function destroy($id):void{
      Category::find($id)->delete();
    }
}
