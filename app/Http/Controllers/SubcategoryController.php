<?php

namespace App\Http\Controllers;


use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function create($id, $num)
    {
        return view('subcategories.create', ['id'=>$id, 'num'=>$num]);
        
    }
    
    public function store(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $image = $request->file('image');
        $num = $request->get('num');
        $bool = $request->get('bool');
        if($bool == null)
        {
            $bool = FALSE;
        } else {
            $bool = TRUE;
        }
        $catId = $request->get('catId');

        $category = new Subcategory();
        $category->setDescription($description);
        $category->setTitle($title);
        $category->setNum($num);
        $category->setBool($bool);
        $category->setCatId($catId);

        if($image == null) {
            $category->setImage('null');
        } else {
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension;
        //$directory = "jusutfed/public_html/Jusufi.website/images";
            //$directory = storage_path("uploads");
            $directory = "jusutfed/laravel/kgjs/storage/uploads";
        $image = $image->move($directory, $fileName);
        $category->setImage($image->getFilename()); }
        $category->save();

        return redirect()->route('category.all');
    }

    public function delete($id)
    {
        Subcategory::destroy($id);

        return redirect()->route('admin.index');
    }

}