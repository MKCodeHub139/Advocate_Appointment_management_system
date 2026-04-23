@extends('admin.index')
@section('adminMain')
<div class="main p-5">
     <div class="header">
            <h2 class="text-3xl font-[500]">Dashboard</h2>
        </div>
        <div class="content my-10">
            <div class="cards flex flex-wrap grow-1 gap-3">
                {{--  unread-appointmenst--}}
                <div class="unread-appointments h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">Unread Appointments</p>
                    <h5 class="text-[25px] font-bold">{{$unreadAppointments}}</h5>
                </div>
                {{-- booked-appointments --}}
                <div class="booked-appointments h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">Booked Appointments</p>
                    <h5 class="text-[25px] font-bold">{{$bookedAppointments}}</h5>
                </div>
                {{-- cancelled-appointments --}}
                <div class="cancelled-appointments h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">Cancel Appointments</p>
                    <h5 class="text-[25px] font-bold">{{$cancelAppointments}}</h5>
                </div>
                {{-- all-appointments --}}
                <div class="all-appointments h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">All Appointments</p>
                    <h5 class="text-[25px] font-bold">{{$allAppointments}}</h5>
                </div>
                {{-- new-contacts --}}
                <div class="new-contacts h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">New Contacts</p>
                    <h5 class="text-[25px] font-bold">{{$newContacts}}</h5>
                </div>
                {{-- all-contacts --}}
                <div class="all-contacts h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">All Contacts</p>
                    <h5 class="text-[25px] font-bold">{{$allContacts}}</h5>
                </div>
                {{-- all-services --}}
                <div class="all-services h-[150px] w-[200px] border-1 border-gray-300 rounded-2xl bg-blue-50 hover:border-blue-500 flex flex-col items-center justify-center gap-3">
                    <p class="font-bold text-[14px] text-gray-600">All Services</p>
                    <h5 class="text-[25px] font-bold">{{$allServices}}</h5>
                </div>
            </div>
        </div>
</div>
@endsection
