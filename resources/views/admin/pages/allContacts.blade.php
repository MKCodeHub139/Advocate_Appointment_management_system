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
            <h2 class="text-3xl font-[500]">All Contact</h2>
            <p class="text-gray-500 text-[15px]">Check Your All Contact Here..</p>
        </div>
        
        <table class="table overflow-x-auto max-w-[60vw] text-center" id="myTable">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Date</th>
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
            ajax:'/admin/all-contacts',
             columns: [{
                        data: 'sr_no',
                        name: 'sr_no'
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
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'message',
                        name: 'message'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                ]

        })
    })
</script>
@endsection
