<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Container\Attributes\Storage;

class AdminServicesController extends Controller
{
    //
    public function createServiceForm(){
        $service =new Service();
        return view('admin.partials.serviceForm',compact('service'));
    }
    public function store(Request $request){
        
        $filename=null;
        if($request->hasFile('image')){
            $file =$request->file('image');
            $filename =time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/services'),$filename);
        }
        $service =Service::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'imageUrl'=>'/uploads/services/'.$filename,
            'service'=>$request->services,
        ]);
        return response()->json(['message'=>'Service Saved Successfuly']);
    }
    public function edit(Request $request){
        $service =Service::find($request->id);
         return view('admin.partials.serviceForm',compact('service'));
        
    }
    public function update(Request $request,$id){
        $oldService =Service::find($id);
        $fileUrl =$oldService->imageUrl;
        if($request->hasFile('image')){
             $oldfile =public_path($oldService->imageUrl);
             if(file_exists($oldfile)){
                unlink($oldfile);
             }
            $file =$request->file('image');
            $filename =time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/services'),$filename);
            $fileUrl ='/uploads/services/'.$filename;
             }
        $oldService->update([
            'name'=>$request->title,
            'description'=>$request->description,
            'imageUrl'=>$fileUrl,
            'service'=>$request->services
        ]);
        return response()->json(['message'=>'Service Updated Successfuly']);;
        
    }
    public function destroy($id){
        $service = Service::find($id);
         if (!$service) {
        return redirect('/admin/all-services')
            ->with(['message' => 'Service not found']);
    }
    if($service->imageUrl){
        $filepath =public_path($service->imageUrl);
        if(file_exists($filepath)){
            unlink($filepath);
        }
    }
     $service->delete();
        return redirect('/admin/all-services')->with(['message'=>'Service Deleted Successfuly']);
    }
}
