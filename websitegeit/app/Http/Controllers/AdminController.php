<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbcategory;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        return view('Admin.admin');
    }

    public function dataTable()
    {
        $data = Tbproduct::get();
        return view('Admin.dataTable', compact('data'));
    }

    public function categoryShow()
    {
        $data = Tbcategory::get();
        return view('Admin.add', compact('data'));
    }

    public function addData(Request $request)
    {
        // $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $detail = $request->detail;
        $image1 = $request->image1;
        $image2 = $request->image2;
        $category = $request->category;

        $product = new Tbproduct();

        // $product->productID = $id;
        $product->productName = $name;
        $product->productPrice = $price;
        $product->productDetail = $detail;
        $product->productImage1 = $image1;
        $product->productImage2 = $image2;
        $product->categoryID = $category;
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');

    }

    public function delete($id)
    {
        Tbproduct::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function getInfo($id)
    {
        $categories = Tbcategory::get();
        $data = Tbproduct::where('productID', '=', $id)->first();
        return view('Admin.edit', compact('data', 'categories'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        Tbproduct::where('productID', '=', $id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productDetail'=>$request->detail,
            'productImage1'=>$request->image1,
            'productImage2'=>$request->image2,
            'categoryID'=>$request->category
        ]);

        return redirect()->back()->with('success', 'Product updated successfully!');
    }
}
