<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Service;
use Carbon\Traits\ToStringFormat;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //
    public function login(Request $request){
           if($request->email ==env('ADMIN_EMAIL') &&
           $request->password ==env('ADMIN_PASSWORD')
           ){
            session(['admin_logged_in'=>true]);
            return redirect()->route('admin.dashboard');
           }
           return back()->with('error','Invalid email or password');
    }
    public function logout()
{
    session()->forget('admin_logged_in');
    return redirect('/admin/login');
}
public function index(){
   $allAppointments=Appointment::count();
   $unreadAppointments=Appointment::where('status','unread')->count();
   $bookedAppointments=Appointment::where('status','booked')->count();
   $cancelAppointments=Appointment::where('status','cancelled')->count();
   $newContacts=Contact::where('status','unread')->count();
   $allContacts=Contact::count();
   $allServices=Service::count();
   return view('admin.dashboard',compact('allAppointments','unreadAppointments','bookedAppointments','cancelAppointments','newContacts','allContacts','allServices'));
}
public function unreadAppointments(Request $request){
    if($request->ajax()){
        $data=Appointment::where('status','unread');
        return DataTables::of($data)
         ->addColumn('sr_no',function($row){
            return $row->id;
         })
         ->addColumn('actions',function($row){
            return '
            <div class="flex gap-3">
                <button href="" class="bg-green-400 hover:bg-green-500 text-white px-3 py-1 rounded cursor-pointer book-appointment" data-id="'.$row->id.'">Book</button>
                <button href="" class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded cursor-pointer cancel-appointment" data-id="'.$row->id.'">Cancel</button>
            </div>
            ';
         })
           ->addColumn('created_at',function($row){
            return $row->created_at->format('d-m-Y');
         })
         ->rawColumns(['sr_no','actions','created_at'])
            ->make(true);

    }
    return view('admin.pages.unreadAppointments');
}
public function bookedAppointments(Request $request){
    if($request->ajax()){
        $data =Appointment::where('status','booked');
        return DataTables::of($data)
        ->addColumn('sr_no',function($row){
            return $row->id;
         })
         ->addColumn('actions',function($row){
            return '
            <div class="flex gap-3">
                <a href="" class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded cursor-pointer cancel-appointment" data-id="'.$row->id.'">Cancel</a href="">
            </div>
            ';
         })
           ->addColumn('created_at',function($row){
            return $row->created_at->format('d-m-Y');
         })
         ->rawColumns(['sr_no','actions','created_at'])
            ->make(true);
    }
    return view('admin.pages.bookedAppointments');
}
public function cancelledAppointments(Request $request){
     if($request->ajax()){
        $data =Appointment::where('status','cancelled');
        return DataTables::of($data)
        ->addColumn('sr_no',function($row){
            return $row->id;
         })
         ->addColumn('actions',function($row){
            return '
            <div class="flex gap-3">
                <a href="" class="bg-green-400 hover:bg-green-500 text-white px-3 py-1 rounded cursor-pointer book-appointment" data-id="'.$row->id.'">Book</a href="">
            </div>
            ';
         })
           ->addColumn('created_at',function($row){
            return $row->created_at->format('d-m-Y');
         })
         ->rawColumns(['sr_no','actions','created_at'])
            ->make(true);
    }
    return view('admin.pages.cancelledAppointments');
}
public function allAppointments(Request $request){
     if($request->ajax()){
        $data =Appointment::get();
        return DataTables::of($data)
        ->addColumn('sr_no',function($row){
            return $row->id;
         })
         ->addColumn('actions',function($row){
            return $row->status=="booked" ?('
            <div class="flex gap-3">
            <a href="" class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded cursor-pointer cancel-appointment" data-id="'.$row->id.'">Cancel</a href="">
            </div>'):('
            <div class="flex gap-3">
            <a href="" class="bg-green-400 hover:bg-green-500 text-white px-3 py-1 rounded cursor-pointer book-appointment" data-id="'.$row->id.'">Book</a href="">
            </div>
            ');
         })
           ->addColumn('created_at',function($row){
            return $row->created_at->format('d-m-Y');
         })
         ->rawColumns(['sr_no','actions','created_at'])
            ->make(true);
    }
    return view('admin.pages.allAppointments');
}
public function newContacts(Request $request){
      if($request->ajax()){
        $data =contact::where('status','unread');
        return DataTables::of($data)
        ->addColumn('sr_no',function($row){
            return $row->id;
         })
         ->addColumn('actions',function($row){
            return '
            <div class="flex gap-3">
                <a href="" class="bg-green-400 hover:bg-green-500 text-white px-3 py-1 rounded read-contacts" data-id="'.$row->id.'">Read</a href="">
            </div>
            ';
         })
          ->addColumn('created_at',function($row){
            return $row->created_at->format('d-m-Y');
         })
         ->rawColumns(['sr_no','actions','created_at'])
            ->make(true);
    }
    return view('admin.pages.newContacts');
}
public function allContacts(Request $request){
      if($request->ajax()){
        $data =contact::get();
        return DataTables::of($data)
        ->addColumn('sr_no',function($row){
            return $row->id;
         })
         ->addColumn('created_at',function($row){
            return $row->created_at->format('d-m-Y');
         })
         ->rawColumns(['sr_no','created_at'])
            ->make(true);
    }
    return view('admin.pages.allContacts');
}
public function allServices(Request $request){
    $services =Service::get();
    return view('admin.pages.services',compact('services'));
}

// bookAppointmentSubmit
public function bookAppointmentSubmit(Request $request){
$appointment = Appointment::find($request->id);
$appointment->status='booked';
if($appointment->save()){
    Mail::raw('Booked Appointment', function ($message) use($appointment,$request){
                $message->to('kaif76979@gmail.com')
                  ->subject($request->text);
});
}
return response()->json(['message'=>'Appointment is Booked and send email successfuly']);
}
// cancelAppointmentSubmit
public function cancelAppointmentSubmit(Request $request){
$appointment = Appointment::find($request->id);
$appointment->status='cancelled';
if($appointment->save()){
    Mail::raw('Cancel Appointment', function ($message) use($appointment,$request){
                $message->to('kaif76979@gmail.com')
                  ->subject($request->text);
});
}
return response()->json(['message'=>'Appointment is Cancelled and send email successfuly']);
}
// readContactsSubmit
public function readContactsSubmit(Request $request){
$contact = Contact::find($request->id);
$contact->status='read';
if($contact->save()){
    Mail::raw('Read Contact', function ($message) use($contact,$request){
                $message->to('kaif76979@gmail.com')
                  ->subject($request->text);
});
}
return response()->json(['message'=>'Contact Readed and send email successfuly']);
}
}
