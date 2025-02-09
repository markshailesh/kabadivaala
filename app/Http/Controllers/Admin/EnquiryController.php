<?php

namespace App\Http\Controllers\admin;
use App\Models\Enquiry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquirys = Enquiry::where('delete_status', 0)->paginate(10);
        return view('admin.enquiry.index',compact('enquirys'),['page_title'=>'Enquiry List']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete_status = 1;
        $enquiry->save();
        return redirect()->route('admin.enquiry.index')->with('success', 'Data Delete Successfully !!');
    }
}
