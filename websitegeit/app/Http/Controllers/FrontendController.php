<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbcustomer;
use App\Models\Tbreview;
use App\Models\Tbproduct;
use App\Models\Tbcategory;

class FrontendController extends Controller
{
    public function index()
    {
        $data = Tbproduct::all();
        $category = Tbcategory::orderBy('categoryName', 'ASC')->get();
        return view('Frontend.index', compact('data', 'category'));
    }

    public function abtUs()
    {
        return view('Frontend.about_us');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    //update customer
    public function getInfoCustomer($id)
    {
        $data = Tbcustomer::where('customerID', '=', $id)->first();
        return view('Frontend.editCustomer', compact('data'));
    }

    public function updateCustomer(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $image = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('/Frontend/img/core-img'),$image);

        Tbcustomer::where('customerID', '=', $id)->update([
            'customerName'=>$name,
            'customerPhone'=>$phone,
            'customerImage' =>$image
        ]);

        return redirect()->back()->with('success', 'Customer updated successfully!');
    }


    public function addReview(Request $request)
    {
        // $id = $request->id;
        $name = $request->name;
        $review = $request->review;

        $rev = new Tbreview();

        $rev->reviewerName = $name;
        $rev->review = $review;
        $rev->save();

        return redirect()->back()->with('success', 'Review added successfully!');
        
    }
}

?>