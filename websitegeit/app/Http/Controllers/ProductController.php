<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbcategory;

class ProductController extends Controller
{
    public function index()
    {
        // $data = Tbproduct::get();
        $data = Tbproduct::paginate(9);
        $category = Tbcategory::orderBy('categoryName', 'ASC')->get();
        return view('Frontend.product', compact('data', 'category'));
    }

    public function category($id)
    {
        $data = Tbproduct::paginate(9);
        // $data = Tbproduct::get();
        $category1 = Tbcategory::orderBy('categoryName', 'ASC')->get();
        $category = Tbcategory::where('categoryID', '=', $id)->first();
        $product = Tbproduct::where('categoryID', '=', $id)->paginate(9);
        return view('Frontend.category', compact('data','product', 'category', 'category1'));
    }
    

    public function details($id)
    {
        $data = Tbproduct::where('productID', '=', $id)->first();
        return view('Frontend.singleProduct', compact('data'));
    }

    public function getSearch(Request $request)
    {
        $product = Tbproduct::where('productName', 'like', '%'.$request->search. '%')->paginate(9);
        $category = Tbcategory::orderBy('categoryName', 'ASC')->get();
        return view('Frontend.search', compact('product', 'category'));
    }
}
