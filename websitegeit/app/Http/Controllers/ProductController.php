<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbcategory;

class ProductController extends Controller
{
    public function index()
    {
        $data = Tbproduct::get();
        $category = Tbcategory::orderBy('categoryName', 'ASC')->get();
        return view('Frontend.product', compact('data', 'category'));
    }

    public function category($id)
    {
        // $data = Tbproduct::get();
        // $category = Tbcategory::orderBy('categoryName', 'ASC')->get();
        $category = Tbcategory::where('categoryID', '=', $id)->first();
        $product = Tbproduct::where('categoryID', '=', $id)->get();
        return view('Frontend.category', compact('product', 'category'));
    }
    

    public function details($id)
    {
        $data = Tbproduct::where('productID', '=', $id)->first();
        return view('Frontend.singleProduct', compact('data'));
    }
}
