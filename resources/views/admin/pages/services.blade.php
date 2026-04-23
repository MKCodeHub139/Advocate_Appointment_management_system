@extends('admin.index')
@section('adminStyle')
    <style>
        #myTable_wrapper {
            margin: 3rem 0;
        }
    </style>
@endsection
@section('adminMain')
    <div class="wrapper p-5">
        <div class="header flex justify-between">
            <div class="text">
                <h2 class="text-3xl font-[500]">All Contact</h2>
                <p class="text-gray-500 text-[15px]">Check Your All Contact Here..</p>
            </div>
            <div class="">
                <button
                    class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-2xl cursor-pointer text-white font-[500] create-service-btn"
                    onclick="my_modal_3.showModal()">Create Service +</button>
            </div>
        </div>
        <div class="content  p-5">
            <div class="services-cards flex flex-wrap gap-10 py-10 mx-auto">
                @if ($services->count() > 0)
                    @foreach ($services as $service)
                        <div
                            class="service-card w-[250px] min-h-[300px] border-1 border-gray-300 rounded-2xl grow-1 p-5 flex flex-col justify-start items-start hover:shadow-2xl">
                            <div class="header flex items-center justify-between w-full">
                                <div class="img p-4 bg-[#fef3c6] rounded-xl">
                                    <img src="{{ asset($service->imageUrl) }}" alt="">
                                </div>
                                <div class="actions flex flex-col gap-2 text-white text-[14px] font-[400]">
                                    <button
                                        class="bg-blue-400 hover:bg-blue-500 px-2 rounded-xl cursor-pointer edit-service"
                                        data-id="{{ $service->id }}" onclick="my_modal_3.showModal()">Edit</button>
                                    <button
                                        class="bg-red-400 hover:bg-red-500 px-2 rounded-xl cursor-pointer delete-service"
                                        data-id="{{ $service->id }}">Delete</button>
                                </div>
                            </div>
                            <div class="title my-5">
                                <h2 class="text-2xl font-[500]">{{ $service->title }}</h2>
                            </div>
                            <div class="description my-5 border-b-1 border-gray-300 pb-5">
                                <p>{{ $service->description }}</p>
                            </div>
                            <div class="service-include">
                                <h2 class="text-[14px] font-[500] text-gray-700">Services Include :</h2>
                                <ul>
                                    @php
                                        $cases = explode(',', $service->service);
                                    @endphp
                                    @foreach ($cases as $case)
                                        <li class="text-gray-600 text-[14px] my-2 flex gap-2 items-center">
                                            <div class="w-[7px] h-[7px] rounded-full bg-[#d0740f]"></div>
                                            {{ $case }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
@endsection
@section('adminScripts')
    <script>
        $(document).on('click', '.create-service-btn', function(e) {
            $.ajax({
                url: '/admin/services/create-service-form',
                type: "GET",
                success: function(res) {
                    $('.serviceForm').html(res)
                }
            })
        })
        $(document).on('click', '.create-or-update-service', function(e) {
            e.preventDefault()
            let $form = $(this).closest('form');
            let data = new FormData($form[0])
            let id = $form.find('input[name="id"]').val()
            $.ajax({
                url: id ? ('/admin/services/update/' + id) : '/admin/services/submit',
                type: 'POST',
                processData: false,
                contentType: false,
                data: data,
                success: function(res) {
                    $('#my_modal_3')[0].close()
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500,
                         didOpen: () => {
        const popup = document.querySelector('.swal2-container');
        if (popup) popup.style.zIndex = 9999;
    }
                    });
                },
            })
        })
        // open modal with data
        $(document).on('click', '.edit-service', function(e) {
            e.preventDefault()
            let id = $(this).data('id')
            $.ajax({
                url: '/admin/services/edit-sevice/' + id,
                type: "GET",

                data: id,
                success: function(res) {
                    $('.serviceForm').html(res)
                }
            })
        })
        // delete service
        $(document).on('click', '.delete-service', function(e) {
            e.preventDefault()
            let id = $(this).data('id')
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/services/delete-service/' + id,
                        type: 'GET',
                        success: function(res) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });
                        }
                    })
                }
            });
        })
    </script>
@endsection
