@extends('index')
@section('main')
    <div class="main ">
        <div class="header h-[15rem] bg-[#0f172b] flex flex-col justify-center text-white p-5 w-full ">
            <div class="text sm:w-[75%]">
                <h2 class="text-[50px] font-[700]">Contact Us</h2>
                <p class="text-[22px] text-gray-300 block">Get in touch with us for legal consultation. We're here to answer
                    your questions and provide the support you need.</p>
            </div>
        </div>
        @if(session('message'))
        <div class="message w-full bg-green-300 text-green-800 p-5 ">
            {{session('message')}}
        </div>
        @endif
        <div class="content w-full min-h-[100vh] bg-[#f8fafc] px-5 py-10">
            <div class="grid sm:grid-cols-2 gap-10">
                <div class="border-1 border-gray-300 rounded-2xl p-5">
                    <div class="header my-5">
                        <h2 class="text-[25px] font-[700]">Send Us Message</h2>
                    </div>
                    <form action="/contact/submit" method="post" id="appointment-form">
                        @csrf
                        <div class="flex flex-col gap-5">
                            {{-- name --}}
                            <div class="">
                                <label for="" class="text-[14px] font-bold">Your Name *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <input type="text" name="name" id="" class="w-[100%] outline-0 px-2"
                                        placeholder="Enter Your Name">
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="">
                                <label for="" class="text-[14px] font-bold">Email Address *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <input type="text" name="email" id="" class="w-[100%] outline-0 px-2"
                                        placeholder="your@gmail.com">
                                </div>
                            </div>
                            {{-- subject --}}
                            <div class="">
                                <label for="" class="text-[14px] font-bold">Subject *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <input type="text" name="subject" id="" class="w-[100%] outline-0 px-2"
                                        placeholder="What is this regarding?">
                                </div>
                            </div>
                            {{-- message --}}
                            <div class="">
                                <label for="" class="text-[14px] font-bold">Message *</label>
                                <div class="inp bg-gray-100 py-1 px-3 rounded-lg flex gap-5">
                                    <textarea name="message" id="" cols="100" rows="5" placeholder="Write Your Message Here..."
                                        class="w-[100%] outline-0 px-2"></textarea>
                                </div>
                            </div>
                             <div class="submit-btn justify-center flex justify-center">
                                <div class="svg">
                                    
                                </div>
                                <button type="submit"
                                class="bg-[#fe9a00] w-full py-2 text-white rounded-xl cursor-pointer hover:bg-amber-600 submit-appoinment flex justify-center items-center">
                                <span>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-5 h-5 mr-2"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path><path d="m21.854 2.147-10.94 10.939"></path></svg>

                                 </span>
                                 <p>Send Message</p>
                                    
                                </button>
                            </div>
                        </div>
                        <div class=""></div>
                </div>
            </div>
        </div>
    @endsection
