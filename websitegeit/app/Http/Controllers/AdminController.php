<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbcategory;
use App\Models\Tbadmin;
use Session;

class AdminController extends Controller
{
    public function loginAdm()
    {
        return view('Admin.loginAdmin');
    }

    public function loginAdmin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:32',
        ]);

        $admin = Tbadmin::where('adminAccount', '=', $request->username)->first();
        if($admin){
            if($admin->adminPassword = $request->password){
                $request->session()->put('loginId', $admin->adminID);
                return redirect('Admin-Home');
            }else{
                return back()->with('fail','This passwords do not match');
            }
        }else{
            return back()->with('fail','This account does not exist');
        }
    }

    //Controller for Product
    public function indexAdmin()
    {
        $dataAdmin = array();
        if(Session::has('loginId')){
            $dataAdmin = Tbadmin::where('adminID', '=', Session::get('loginId'))->first();
            $data = Tbproduct::get();
        }
        // $data = Tbproduct::get();
        return view('Admin.admin', compact('data'));
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
        $image1 = $request->file('image1')->getClientOriginalName();
        $request->image1->move(public_path('Admin/assets/images/product-Image'),$image1);

        $image2 = $request->file('image2')->getClientOriginalName();
        $request->image2->move(public_path('Admin/assets/images/product-Image'),$image2);
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


    // Controller for Category Admin
    public function dataCat()
    {
        $data = Tbcategory::get();
        return view('Admin.dataCategory', compact('data'));
    }


    public function addCat()
    {
        return view('Admin.addCategory');   
    
    }

    public function saveCate(Request $request)
    {
        $name = $request->name;
        
        $cate = new Tbcategory();


        $cate->categoryName = $name;
        $cate->save();

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function deleteCate($id)
    {
        Tbcategory::where('categoryID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function getInfoCate($id)
    {
        $data = Tbcategory::where('categoryID', '=', $id)->first();
        return view('Admin.editCategory', compact('data'));
    }

    public function updateCategory(Request $request)
    {
        $id = $request->id;
        Tbcategory::where('categoryID', '=', $id)->update([
            'categoryName'=>$request->name,
        ]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    // Controller for Authentication Admin
    

    public function logoutAdmin(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login-adm');   
        }
    }
}
