<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbcustomer;
use App\Models\Tbreview;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }

    public function abtUs()
    {
        return view('Frontend.about_us');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function getInfoCustomer($id)
    {
        $data = Tbcustomer::where('customerID', '=', $id)->first();
        return view('Frontend.editCustomer', compact('data'));
    }

    public function updateCustomer(Request $request)
    {
        $id = $request->id;
        Tbcustomer::where('customerID', '=', $id)->update([
            'customerName'=>$request->name,
            'customerPhone'=>$request->phone
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