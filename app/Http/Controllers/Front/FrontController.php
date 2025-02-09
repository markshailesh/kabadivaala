<?php

namespace App\Http\Controllers\Front;
use App\Models\Product;
use App\Models\Service;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
class FrontController extends Controller
{
    public function index(){
        $products = Product::where('delete_status', 0)->get();
        return view('frontend.index',compact('products'));
    }
    public function services(){
        $services = Service::where('delete_status', 0)->get();
        return view('frontend.services',compact('services')); 
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function scrap_rate(){
        $products = Product::where('delete_status', 0)->get();
        return view('frontend.scrap_rate',compact('products'));
    }
    public function sell_scrap(){
        return view('frontend.sell_scrap');
    }
    public function enquiry_store(Request $request){
        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->phone = $request->phone;
        $enquiry->email = $request->email;
        $enquiry->scrap_type = $request->scrap_type;
        $enquiry->pickup_date = $request->pickup_date;
        $enquiry->pickup_time = $request->pickup_time;
        $enquiry->message = $request->message;
        $enquiry->save();
        return redirect()->route('index')->with('success', 'Enquiry Send Successfully !!');
    }

    public function contact_store(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success', 'Contact Send Successfully !!');
    }
}
