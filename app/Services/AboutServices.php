<?php
namespace App\Services;

use App\Models\About;

class AboutServices {
    public function getAbout(): string{
        return About::first();
    }
    public function createOrUpdate($data) {
        $about = About::first();
        if(isset($about)){
            $id = $about['id'];
            About::find($id)->update([
                'body' => $data,
            ]);
        } else {
            About::create([
                'body' => $data,
            ]);
        }
    }
}
