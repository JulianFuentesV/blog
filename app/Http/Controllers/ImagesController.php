<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

class ImagesController extends Controller
{
    public function index()
    {
    	//$images = Image::all();
    	$images = Image::orderBy('name', 'DESC')->paginate(6);
    	$images->each(function($images){
    		$images->article;
    	});
    	return view('admin.images.index')->with('images', $images);
    }
}