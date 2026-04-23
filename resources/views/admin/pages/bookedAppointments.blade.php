@extends('admin.index')
@section('adminStyle')
<style>
    #myTable_wrapper{
        margin: 3rem 0;
    }
</style>
@endsection
@section('adminMain')
    <div class="wrapper p-5">
        <div class="header">
            <h2 class="text-3xl font-[500]">Booked Appointments</h2>
            <p class="text-gray-500 text-[15px]">Check Your Booked Appointments Here..</p>
        </div>
        
        <table class="table overflow-x-auto max-w-[60vw] text-center" id="myTable">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Legal Matter</th>
                    <th>Preferred Date</th>
                    <th>Preferred Time</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
@section('adminScripts')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
             processing: true,
            serverSide: true,
            ajax:'/admin/booked-appointments',
             columns: [{
                        data: 'sr_no',
                        name: 'sr_no'
                    },
                     {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'legal_matter',
                        name: 'legal_matter'
                    },
                    {
                        data: 'preferred_date',
                        name: 'preferred_date'
                    },
                    {
                        data: 'preferred_time',
                        name: 'preferred_time'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable:false,searchable:false
                    },
                ]

        })
    })
</script>
@endsection
