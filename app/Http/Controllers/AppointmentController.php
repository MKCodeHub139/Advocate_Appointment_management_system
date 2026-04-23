<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    //
    public function store(Request $request){
        if($request->ajax()){
            $validate =$request->validate([
                'name'=>'required |max:255',
                'email'=>'required|max:255|email',
                'phone'=>'required|digits:10',
                'legal_matter'=>'required|max:255',
                'date'=>'required|date',
                'time'=>'required|max:255',
                'description'=>'nullable|string'

            ]);

           $create= Appointment::create([
                'name'=>$validate['name'],
                'email'=>$validate['email'],
                'phone'=>$validate['phone'],
                'legal_matter'=>$validate['legal_matter'],
                'preferred_date'=>$validate['date'],
                'preferred_time'=>$validate['time'],
                'description'=>$validate['description'],
            ]);
            if($create){
                Mail::raw('New Appointment', function ($message) {
                $message->to('kaif76979@gmail.com')
                 ->subject('Open Dashboard To check Appointment');
});
                return response()->json([
                    'message'=>'Appointment request send successfully',
                ]);
            }
             return response()->json([
                    'message'=>'Appointment request failed',
                ],404);
        }
    }
}
