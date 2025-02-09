<?php

namespace App\Http\Controllers\admin;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('delete_status', 0)->paginate(10);
        return view('admin.services.index',compact('services'),['page_title'=>'Service List']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $services = new Service;
        $services->name = $request->name;
        $services->short_desc = $request->short_desc;
        $services->description = $request->description;
        if($request->has('image')){
            $services->image = imageUpload($request->file('image'),'backend/images/service/','1');
        }
        $services->save();
        return redirect()->route('admin.services.index')->with('success', 'Data Save Successfully !!');
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
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        $service->short_desc = $request->short_desc;
        $service->description = $request->description;
        if($request->has('image')){
            $service->image = imageUpload($request->file('image'),'backend/images/service/','1');
        }
        $service->save();
        return redirect()->route('admin.services.index')->with('success', 'Data Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete_status = 1;
        $service->save();
        return redirect()->route('admin.services.index')->with('success', 'Data Delete Successfully !!');
    }
}
