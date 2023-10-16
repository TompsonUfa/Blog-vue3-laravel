<?php
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryServices {
    public function index(){
        return Category::all();
    }

    public function store($category) {
        Category::create([
            'title' => $category,
            'slug' => Str::slug($category, '-'),
        ]);
    }

    public function destroy($id){
        Category::find($id)->delete();
    }

    public function update($id, $newValue){
       Category::find($id)->update([
           'title' => $newValue,
           'slug' => Str::slug($newValue, '-'),
       ]);
    }
}
