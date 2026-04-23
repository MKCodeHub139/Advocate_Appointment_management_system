@extends('index')
@section('main')
    <div class="main ">
        <div class="header h-[16rem] bg-[#0f172b] flex flex-col justify-center text-white sm:p-5 w-full ">
            <div class="text sm:w-[75%]">
                <h2 class="text-[50px] font-[700]">Book an Appointment</h2>
                <p class="text-[22px] text-gray-300 block">Schedule a consultation to discuss your legal needs. We're here to
                    help you navigate your legal challenges.</p>
            </div>
        </div>
        <div class="content w-full min-h-[100vh] bg-[#f8fafc] px-5 py-10">
            <div class="grid grid-cols-6 gap-10">
                <div class="sm:col-span-4 col-span-6 border-1 border-gray-300 rounded-lg p-5 bg-white">
                    <div class="header my-5">
                        <h2 class="text-[25px] font-[700]">Consultation Request Form</h2>
                    </div>
                    <form action="" id="appointment-form">
                        <div class="grid grid-cols-2 gap-5">
                            <div class="col-span-2 flex flex-col gap-1 ">
                                <label for="" class="text-[14px] font-bold">Full Name *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-user absolute w-5 h-5 text-gray-400">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input type="text" name="name" id="" class="w-[100%] outline-0 px-7"
                                        placeholder="Enter Your Full Name">
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 sm:col-span-1 col-span-2">
                                <label for="" class="text-[14px] font-bold">Email Address *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-mail absolute w-5 h-5 text-gray-400">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    <input type="text" name="email" id="" class="w-[100%] outline-0 px-7"
                                        placeholder="your@gmail.com">
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 sm:col-span-1 col-span-2">
                                <label for="" class="text-[14px] font-bold">Phone Number *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-phone absolute w-5 h-5 text-gray-400">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <input type="text" name="phone" id="" class="w-[100%] outline-0 px-7"
                                        placeholder="+91 XXXXX XXXXX">
                                </div>
                            </div>

                            <div class="col-span-2 flex flex-col gap-1 ">
                                <label for="" class="text-[14px] font-bold">Type Of Legal Matter *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <select name="legal_matter" id="" class="w-full outline-0 text-gray-500">
                                        <option value="" class="">Select Case Type</option>
                                        <option value="Criminal Law">Criminal Law</option>
                                        <option value="Civil Law">Civil Law</option>
                                        <option value="Family Law">Family Law</option>
                                        <option value="Corpoate Law">Corpoate Law</option>
                                        <option value="Property Law">Property Law</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 sm:col-span-1 col-span-2">
                                <label for="" class="text-[14px] font-bold">Preferred Date *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar absolute w-5 h-5 text-gray-400">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    <input type="date" name="date" id="" class="w-[60%] outline-0 px-7"
                                        placeholder="your@gmail.com">
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 sm:col-span-1 col-span-2">
                                <label for="" class="text-[14px] font-bold">Preferred Time *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <select name="time" id="" class="w-full outline-0 text-gray-500">
                                        <option value="" class="">Select Time</option>
                                        <option value="9:00 AM">9:00 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                    </select>
                                </div>
                                <span></span>
                            </div>
                            <div class="flex flex-col gap-1 col-span-2">
                                <label for="" class="text-[14px] font-bold">Brief Description Of Your Case
                                    *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text absolute w-5 h-5 text-gray-400">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                    <textarea name="description" id="" cols="100" rows="5" class="outline-0 px-7"
                                        placeholder="Please provide a brief description of your legal matter..."></textarea>
                                </div>
                            </div>
                            <div class="submit-btn  col-span-2 justify-center">
                                <button
                                    class="bg-[#fe9a00] w-full py-2 text-white rounded-xl cursor-pointer hover:bg-amber-600 submit-appoinment">
                                    Submit Appointment Request
                                </button>
                            </div>
                        </div>
                        <div class="errors flex flex-col text-red-500 my-5">
                            <span id="name_error" class="text-danger"></span>
                            <span id="email_error" class="text-danger"></span>
                            <span id="legal_matter_error" class="text-danger"></span>
                            <span id="date_error" class="text-danger"></span>
                            <span id="time_error" class="text-danger"></span>

                        </div>
                        <p class="text-center my-5 text-gray-500 text-[14px]">
                            * All fields are required. We will contact you to confirm your appointment.</p>
                    </form>

                </div>
                <div class="sm:col-span-2 col-span-6">

                </div>

            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $(document).on('click', '.submit-appoinment', function(e) {
                e.preventDefault();
                let data = new FormData($('#appointment-form')[0])
                $.ajax({
                    url: '/appointment/submit',
                    type: "POST",
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(res) {
                        alert(res.message)
                    },
                    error: function(xhr) {

                        let errors = xhr.responseJSON.errors;

                        if (errors.name) {
                            $('#name_error').text('* '+errors.name[0]);
                        }

                        if (errors.email) {
                            $('#email_error').text('* '+errors.email[0]);
                        }

                        if (errors.phone) {
                            $('#phone_error').text('* '+errors.phone[0]);
                        }

                        if (errors.legal_matter) {
                            $('#legal_matter_error').text('* '+errors.legal_matter[0]);
                        }

                        if (errors.date) {
                            $('#date_error').text('* '+errors.date[0]);
                        }

                        if (errors.time) {
                            $('#time_error').text('* '+errors.time[0]);
                        }
                    }
                })
            })
        </script>
    @endsection
