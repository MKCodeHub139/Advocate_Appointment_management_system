<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Datatable css --}}
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.7/css/dataTables.dataTables.min.css">
    @yield('adminStyle')
    <title>Document</title>
</head>

<body>
    @include('admin.partials.nav')
    <div class="main">
        <div class="grid grid-cols-4">
            <div
                class="sidebar col-span-1 min-h-[100vh] bg-blue-100 border-1 border-blue-300 shadow-xl sticky left-0 z-[111]">
                <ul class="flex flex-col text-blue-800">
                    <li class=""><a href="{{ route('admin.dashboard') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-200' : '' }}">Dashboard</a>
                    </li>
                    <li class=""><a href="{{ route('admin.unreadAppointments') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.unreadAppointments') ? 'bg-blue-200' : '' }}">Unread
                            Appointments</a></li>
                    <li class=""><a href="{{ route('admin.bookedAppointments') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.bookedAppointments') ? 'bg-blue-200' : '' }}">Booked
                            Appointments</a></li>
                    <li class=""><a href="{{ route('admin.cancelledAppointments') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.cancelledAppointments') ? 'bg-blue-200' : '' }}">Canceled
                            Appointments</a></li>
                    <li class=""><a href="{{ route('admin.allAppointments') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.allAppointments') ? 'bg-blue-200' : '' }}">All
                            Appoitnments</a></li>
                    <li class=""><a href="{{ route('admin.newContacts') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.newContacts') ? 'bg-blue-200' : '' }}">New
                            Contacts</a></li>
                    <li class=""><a href="{{ route('admin.allContacts') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.allContacts') ? 'bg-blue-200' : '' }}">All
                            Contacts</a></li>
                    <li class=""><a href="{{ route('admin.allServices') }} "
                            class="block py-4 px-2 cursor-pointer hover:bg-blue-200 {{ request()->routeIs('admin.allServices') ? 'bg-blue-200' : '' }}">All
                            Services</a></li>
                </ul>
            </div>
            <div class="content col-span-3 w-[72vw] overflow-x-auto">
                @yield('adminMain')
            </div>
        </div>
    </div>
    {{-- sm modal with close btn --}}
    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="serviceForm">

                {{-- @include('admin.partials.serviceForm') --}}
            </div>
        </div>
    </dialog>
    {{-- @include('partials.footer') --}}
    {{-- jquery link --}}
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    {{-- sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- datatable --}}
    <script src="//cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
    <script>
        // book appointment
        $(document).on('click', '.book-appointment', async function(e) {
            e.preventDefault()
            let id =$(this).data('id')
            const {
                value: text
            } = await Swal.fire({
                input: "textarea",
                inputLabel: "Message",
                inputPlaceholder: "Type your message here...",
                inputAttributes: {
                    "aria-label": "Type your message here"
                },
                showCancelButton: true
            });
            if (text) {
                $.ajax({
                    url: '/admin/book-appointment/submit',
                    type: 'POST',
                    data:{text:text,id:id},
                    success:function(res){
                        swal.fire(res.message)
                    }
                })
            }
        })
        // cancel appointment
        $(document).on('click', '.cancel-appointment', async function(e) {
            e.preventDefault()
            let id =$(this).data('id')
            const {
                value: text
            } = await Swal.fire({
                input: "textarea",
                inputLabel: "Message",
                inputPlaceholder: "Type your message here...",
                inputAttributes: {
                    "aria-label": "Type your message here"
                },
                showCancelButton: true
            });
            if (text) {
                $.ajax({
                    url: '/admin/cancel-appointment/submit',
                    type: 'POST',
                    data:{text:text,id:id},
                    success:function(res){
                        swal.fire(res.message)
                    }
                })
            }
        })
        // Read contacts
        $(document).on('click', '.read-contacts', async function(e) {
            e.preventDefault()
            let id =$(this).data('id')
            const {
                value: text
            } = await Swal.fire({
                input: "textarea",
                inputLabel: "Message",
                inputPlaceholder: "Type your message here...",
                inputAttributes: {
                    "aria-label": "Type your message here"
                },
                showCancelButton: true
            });
            if (text) {
                $.ajax({
                    url: '/admin/read-contacts/submit',
                    type: 'POST',
                    data:{text:text,id:id},
                    success:function(res){
                        swal.fire(res.message)
                    }
                })
            }
        })
    </script>
    @yield('adminScripts')
</body>

</html>
