<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{
    public function title1()
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='1'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='1'");

        return view('t1', ['categories' => $categories, 'subCat' => $subCat]);
    }

    public function show1($title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='1'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='1'");
        $category = (array)DB::select("SELECT * FROM categories WHERE title='$title' AND num='1'");
        
        return view('c1', ['category' => $category, 'categories' => $categories, 'subCat' => $subCat]);
    }
    
    public function showSubCat1($id, $title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='1'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='1'");
        $sub = (array)DB::select("SELECT * FROM subcategories WHERE title='$title' AND num='1' AND catId='$id'");
        
        return view('sub1', ['sub' => $sub, 'categories' => $categories, 'subCat' => $subCat]);
    }
    
    public function title2()
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='2'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='2'");
        
        return view('t2', ['categories' => $categories, 'subCat' => $subCat]);
    }

    public function show2($title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='2'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='2'");
        $category = (array)DB::select("SELECT * FROM categories WHERE title='$title' AND num='2'");

        return view('c2', ['category' => $category, 'categories' => $categories, 'subCat' => $subCat]);
    }

    public function showSubCat2($id, $title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='2'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='2'");
        $sub = (array)DB::select("SELECT * FROM subcategories WHERE title='$title'  AND num='2' AND catId='$id'");

        return view('sub2', ['sub' => $sub, 'categories' => $categories, 'subCat' => $subCat]);
    }
    
    public function title3()
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='3'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='3'");

        return view('t3', ['categories' => $categories, 'subCat' => $subCat]);
    }

    public function show3($title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='3'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='3'");
        $category = (array)DB::select("SELECT * FROM categories WHERE title='$title' AND num='3'");

        return view('c3', ['category' => $category, 'categories' => $categories, 'subCat' => $subCat]);
    }

    public function showSubCat3($id, $title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='3'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='3'");
        $sub = (array)DB::select("SELECT * FROM subcategories WHERE title='$title'  AND num='3' AND catId='$id'");

        return view('sub3', ['sub' => $sub, 'categories' => $categories, 'subCat' => $subCat]);
    }
    
    public function title4()
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='4'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='4'");

        return view('t4', ['categories' => $categories, 'subCat' => $subCat]);
    }

    public function show4($title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='4'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='4'");
        $category = (array)DB::select("SELECT * FROM categories WHERE title='$title' AND num='4'");

        return view('c4', ['category' => $category, 'categories' => $categories, 'subCat' => $subCat]);
    }

    public function showSubCat4($id, $title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='4'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='4'");
        $sub = (array)DB::select("SELECT * FROM subcategories WHERE title='$title'  AND num='4' AND catId='$id'");

        return view('sub4', ['sub' => $sub, 'categories' => $categories, 'subCat' => $subCat]);
    }
    
    public function title5()
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='5'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='5'");

        return view('t5', ['categories' => $categories, 'subCat' => $subCat]);
    }

    public function show5($title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='5'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='5'");
        $category = (array)DB::select("SELECT * FROM categories WHERE title='$title' AND num='5'");

        return view('c5', ['category' => $category, 'categories' => $categories, 'subCat' => $subCat]);
    }

    public function showSubCat5($id, $title)
    {
        $categories = (array)DB::select("SELECT * FROM categories WHERE num='5'");
        $subCat = (array)DB::select("SELECT * FROM subcategories WHERE num='5'");
        $sub = (array)DB::select("SELECT * FROM subcategories WHERE title='$title'  AND num='5' AND catId='$id'");

        return view('sub5', ['sub' => $sub, 'categories' => $categories, 'subCat' => $subCat]);
    }
    
    public function prashaj()
    {
        $questions = DB::select("SELECT * FROM questions ORDER BY created_at LIMIT 3");

        return view('prashaj', ['questions' => $questions]);
    }
    
    public function poseta()
    {
        return view('poseta');
    }

}