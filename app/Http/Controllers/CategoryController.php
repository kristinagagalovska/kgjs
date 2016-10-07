<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $image = $request->file('image');
        $num = $request->get('num');
        $bool = $request->get('bool');
        if($bool == null) {
            $bool = FALSE;
        } else {
            $bool = TRUE;
        }

        $category = new Category();
        $category->setDescription($description);
        $category->setTitle($title);
        $category->setNum($num);
        $category->setBool($bool);

        if($image == null) {
            $category->setImage('null');
        } else {
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension;
        $directory = storage_path("uploads");
        $image = $image->move($directory, $fileName);
        $category->setImage($image->getFilename()); }
        $category->save();

        return redirect()->route('admin.index');
    }
    
    public function all()
    {
        $catT1 = (array)DB::select("SELECT * FROM categories WHERE num='1'");
        $catT2 = (array)DB::select("SELECT * FROM categories WHERE num='2'");
        $catT3 = (array)DB::select("SELECT * FROM categories WHERE num='3'");
        $catT4 = (array)DB::select("SELECT * FROM categories WHERE num='4'");
        $catT5 = (array)DB::select("SELECT * FROM categories WHERE num='5'");

        $subCatT1 = (array)DB::select("SELECT * FROM subcategories WHERE num='1'");
        $subCatT2 = (array)DB::select("SELECT * FROM subcategories WHERE num='2'");
        $subCatT3 = (array)DB::select("SELECT * FROM subcategories WHERE num='3'");
        $subCatT4 = (array)DB::select("SELECT * FROM subcategories WHERE num='4'");
        $subCatT5 = (array)DB::select("SELECT * FROM subcategories WHERE num='5'");
        
        return view('admin.categories')  ->with('catT1', $catT1)
                                         ->with('catT2', $catT2)
                                         ->with('catT3', $catT3)
                                         ->with('catT4', $catT4)
                                         ->with('catT5', $catT5)
                                         ->with('subCatT1', $subCatT1)
                                        ->with('subCatT2', $subCatT2)
                                        ->with('subCatT3', $subCatT3)
                                         ->with('subCatT4', $subCatT4)
                                        ->with('subCatT5', $subCatT5);
    }

    public function delete($id)
    {
        Category::destroy($id);

        return redirect()->route('admin.index');
    }

}