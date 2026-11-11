<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Image;
use App\Model\Cmspage;

class GalleryController extends Controller
{
    public function index(){
        $images = Image::where('status','enable')->get();
        $pages_gallery = Cmspage::Where('url', 'like', '%' . 'gallery' . '%')->where('page_status','enable')->first();
        return view('gallery',compact('images','pages_gallery'));
    }
}
