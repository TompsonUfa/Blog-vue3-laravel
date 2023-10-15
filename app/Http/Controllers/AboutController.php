<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AboutServices;

class AboutController extends Controller
{
    public function index(AboutServices $services) {
        $data = $services->getAbout();
        return response()->json(['about' => $data], 200);
    }
    public function update(Request $request, AboutServices $services){
       $data = $request['data'];
      $services->createOrUpdate($data);
        return response()->json(['success' => "Данные обновлены"],200);
    }
}
