@extends('index')
@section('main')
    <div class="main">
        <div class="bg w-full h-[86vh] relative">

            <div class="carousel w-full ">
                <div id="slide1" class="carousel-item relative w-full">
                    <img src="{{ asset('images/premium_photo-1694476607276-41276bc573e5.avif') }}"
                        class="w-full h-[88vh] object-cover filter brightness-40 " />
                    <div class="absolute inset-0 bg-blue-700/15"></div>
                    <div class="absolute left-5 right-5 bottom-10 flex translate-y-1/2 transform justify-between">
                        <a href="#slide4"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black ">❮</a>
                        <a href="#slide2"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❯</a>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <img src="{{ asset('images/crousel 2.avif') }}"
                        class="w-full h-[88vh] object-cover filter brightness-40 " />
                    <div class="absolute inset-0 bg-blue-700/15"></div>

                    <div class="absolute left-5 right-5 bottom-10 flex translate-y-1/2 transform justify-between">
                        <a href="#slide1"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❮</a>
                        <a href="#slide3"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❯</a>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <img src="{{ asset('images/crousel 3.avif') }}"
                        class="w-full h-[88vh] object-cover filter brightness-40 " />
                    <div class="absolute inset-0 bg-blue-700/15"></div>

                    <div class="absolute left-5 right-5 bottom-10 flex translate-y-1/2 transform justify-between">
                        <a href="#slide2"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❮</a>
                        <a href="#slide4"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❯</a>
                    </div>
                </div>
                <div id="slide4" class="carousel-item relative w-full">
                    <img src="{{ asset('images/crousel 4.avif') }}"
                        class="w-full h-[88vh] object-cover filter brightness-40 " />
                    <div class="absolute inset-0 bg-blue-700/15"></div>
                    <div class="absolute left-5 right-5 bottom-10 flex translate-y-1/2 transform justify-between">
                        <a href="#slide3"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❮</a>
                        <a href="#slide1"
                            class="btn btn-circle bg-transparent text-white hover:bg-white hover:text-black">❯</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section absolute sm:top-1/3 top-1/6 left-0 text-white sm:w-[68vw] w-full px-5">
            <div class="hero-text">
                <h2 class="sm:text-[70px] text-[50px] sm:text-base/18 text-base/16 font-[500]">Professional Legal Services
                    You Can Trust</h2>
                <p class="my-5 text-[20px] text-gray-300">With over 15 years of experience, we provide expert legal
                    representation across multiple practice areas. Your justice is our priority.</p>
            </div>
            <div class="btns flex gap-5 py-5">
                <button class="px-5 py-2 bg-[#fe9a00] hover:bg-[#eb8e04] cursor-pointer rounded-xl flex items-center">Book
                    Appointment <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5" data-fg-q5z15="3.28:4.11141:/src/app/pages/HomePage.tsx:79:19:3759:39:e:ArrowRight::::::s5N" data-fgid-q5z15=":r10:"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                <button class="px-5 py-2 bg-white hover:text-black cursor-pointer rounded-xl">Our Services</button>
            </div>
        </div>

        {{-- about small carrier details --}}
        <div class="small-carrier-details">
            <div class="flex flex-wrap justify-center mx-auto gap-4 min-h-[15rem] p-5">
                <div class="cases-won w-[250px]  flex flex-col gap-3 justify-center items-center">
                    <div class="svg bg-[#fef3c6] p-3 rounded-full">
                        <img src="{{ asset('svgs/medal.svg') }}" alt="">
                    </div>
                    <div class="text text-center">
                        <h2 class="text-4xl font-[700]">300+</h2>
                        <p class="text-gray-600">Cases Won</p>
                    </div>


                </div>
                <div class="experience w-[250px]  flex flex-col gap-3 justify-center items-center">
                    <div class="svg bg-[#fef3c6] p-3 rounded-full">
                        <img src="{{ asset('svgs/clock.svg') }}" alt="">

                    </div>
                    <div class="text text-center">
                        <h2 class="text-4xl font-[700]">15+</h2>
                        <p class="text-gray-600">Years Experience</p>
                    </div>


                </div>
                <div class="happy-clients w-[250px]  flex flex-col gap-3 justify-center items-center">
                    <div class="svg bg-[#fef3c6] p-3 rounded-full">
                        <img src="{{ asset('svgs/double_user.svg') }}" alt="">

                    </div>
                    <div class="text text-center">
                        <h2 class="text-4xl font-[700]">1000+</h2>
                        <p class="text-gray-600">Happy Clients</p>
                    </div>


                </div>
                <div class="client-rating w-[250px]  flex flex-col gap-3 justify-center items-center">
                    <div class="svg bg-[#fef3c6] p-3 rounded-full">
                        <img src="{{ asset('svgs/star.svg') }}" alt="">

                    </div>
                    <div class="text text-center">
                        <h2 class="text-4xl font-[700]">4.9</h2>
                        <p class="text-gray-600">Client Rating</p>
                    </div>


                </div>
            </div>
        </div>
        <div class="why-choose-us bg-[#f8fafc] pb-10">
            <div class="text h-[15rem] sm:w-[50vw] mx-auto flex flex-col justify-center items-center gap-3 text-center">
                <h2 class="text-4xl font-[700]">Why Choose Us?</h2>
                <p class="text-gray-600 text-[16px]">We combine legal expertise with personalized attention to deliver the
                    best outcomes for our clients</p>
            </div>
            <div class="why-choose-us-cards">
                <div class="flex flex-wrap justify-center mx-auto gap-5 p-5">
                    <div
                        class="why-choose-us-card w-[300px] min-h-[200px] bg-white border-1 border-gray-300 rounded-xl shadow p-5 flex flex-col items-start gap-3">
                        <div class="svg bg-[#fef3c6] p-3 rounded-xl">
                            <img src="{{ asset('/svgs/check.svg') }}" alt="" class="y">

                        </div>
                        <div class="text flex flex-col gap-3">
                            <h2 class="text-xl font-[600]">Experienced Professionals</h2>
                            <p class="text-gray-600">Our team has over 15 years of experience handling complex legal
                                matters with a proven success rate.</p>
                        </div>
                    </div>
                    <div
                        class="why-choose-us-card w-[300px] min-h-[200px] bg-white border-1 border-gray-300 rounded-xl shadow p-5 flex flex-col items-start gap-3">
                        <div class="svg bg-[#fef3c6] p-3 rounded-xl">
                            <img src="{{ asset('/svgs/double_user.svg') }}" alt="" class="y">

                        </div>
                        <div class="text flex flex-col gap-3">
                            <h2 class="text-xl font-[600]">Experienced Professionals</h2>
                            <p class="text-gray-600">Our team has over 15 years of experience handling complex legal
                                matters with a proven success rate.</p>
                        </div>
                    </div>
                    <div
                        class="why-choose-us-card w-[300px] min-h-[200px] bg-white border-1 border-gray-300 rounded-xl shadow p-5 flex flex-col items-start gap-3">
                        <div class="svg bg-[#fef3c6] p-3 rounded-xl ">
                            <img src="{{ asset('/svgs/medal.svg') }}" alt="" class="y">
                        </div>
                        <div class="text flex flex-col gap-3">
                            <h2 class="text-xl font-[600]">Experienced Professionals</h2>
                            <p class="text-gray-600">Our team has over 15 years of experience handling complex legal
                                matters with a proven success rate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-practice-areas">
            <div class="text h-[15rem] sm:w-[50vw] mx-auto flex flex-col justify-center items-center gap-3 text-center">
                <h2 class="text-4xl font-[700]">Our Practice Areas</h2>
                <p class="text-gray-600 text-[16px]">Comprehensive legal services across multiple practice areas to meet
                    all your legal needs</p>
            </div>
            <div class="our-practice-areas-cards flex flex-wrap gap-10 p-5 justify-center">
                <div class="card border-1 border-gray-300 hover:shadow-xl bg-base-100 w-96 shadow-sm">
                    <figure>
                        <img src="{{ asset('images/criminal law.avif') }}" alt="Criminal law" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Criminal Law</h2>
                        <p>Expert defense in criminal cases with proven track record</p>
                        <div class="card-actions justify-start">
                            <button
                                class="text-[#fe9a00] font-[600] text-[17px] cursor-pointer hover:text-orange-800 flex items-center">Learn
                                More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5" data-fg-q5z15="3.28:4.11141:/src/app/pages/HomePage.tsx:79:19:3759:39:e:ArrowRight::::::s5N" data-fgid-q5z15=":r10:"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                        </div>
                    </div>
                </div>

                <div class="card border-1 border-gray-300 hover:shadow-xl bg-base-100 w-96 shadow-sm">
                    <figure>
                        <img src="{{ asset('images/civil law.avif') }}" alt="civil law" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Civil Law</h2>
                        <p>Comprehensive civil litigation and dispute resolution</p>
                        <div class="card-actions justify-start">
                            <button
                                class="text-[#fe9a00] font-[600] text-[17px] cursor-pointer hover:text-orange-800 flex items-center">Learn
                                More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5" data-fg-q5z15="3.28:4.11141:/src/app/pages/HomePage.tsx:79:19:3759:39:e:ArrowRight::::::s5N" data-fgid-q5z15=":r10:"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                        </div>
                    </div>
                </div>
                <div class="card border-1 border-gray-300 hover:shadow-xl bg-base-100 w-96 shadow-sm">
                    <figure>
                        <img src="{{ asset('images/corporate law.avif') }}" alt="Corporate law" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Corporate Law</h2>
                        <p>Business legal services and corporate compliance</p>
                        <div class="card-actions justify-start">
                            <button
                                class="text-[#fe9a00] font-[600] text-[17px] cursor-pointer hover:text-orange-800 flex items-center">Learn
                                More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5" data-fg-q5z15="3.28:4.11141:/src/app/pages/HomePage.tsx:79:19:3759:39:e:ArrowRight::::::s5N" data-fgid-q5z15=":r10:"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more-btn w-full flex justify-center py-10">
                <button class="border-1 border-gray-300 px-10 py-2 rounded-xl cursor-pointer hover:bg-gray-300">View All
                    Services</button>
            </div>

        </div>
        <div class="what-our-client-say bg-[#f8fafc] pb-10">
            <div class="text h-[15rem] sm:w-[50vw] mx-auto flex flex-col justify-center items-center gap-3 text-center">
                <h2 class="text-4xl font-[700]">What Our Clients Say</h2>
                <p class="text-gray-600 text-[16px]">Read testimonials from satisfied clients who have experienced our
                    exceptional legal services</p>
            </div>
            <div class="what-our-client-say-cards">
                <div class="flex flex-wrap gap-10 p-5">
                    <div
                        class="what-our-client-say-card w-[300px] justify-center mx-auto min-h-[200px] bg-white border-1 border-gray-300 rounded-xl shadow p-5 flex flex-col items-start gap-3">
                        <div class="svg flex gap-2">
                            @for ($i=1;$i<6;$i++)
                                <img src="{{asset('svgs/filled_star.svg')}}" alt="">
                            @endfor
                        </div>
                        <div class="text flex flex-col gap-3">
                            <p class="text-gray-600">"Excellent legal service! They handled my corporate case with utmost
                                professionalism. Highly recommended."</p>
                            <div class="client">
                                <h2 class="text-[17px] font-[600]">Rajesh Kumar</h2>
                                <p class="text-[13px] text-gray-600">Business Owner</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="what-our-client-say-card w-[300px] justify-center mx-auto min-h-[200px] bg-white border-1 border-gray-300 rounded-xl shadow p-5 flex flex-col items-start gap-3">
                        <div class="svg flex gap-2">
                             @for ($i=1;$i<6;$i++)
                                <img src="{{asset('svgs/filled_star.svg')}}" alt="">
                            @endfor
                        </div>
                        <div class="text flex flex-col gap-3">
                            <p class="text-gray-600">"Excellent legal service! They handled my corporate case with utmost
                                professionalism. Highly recommended."</p>
                            <div class="client">
                                <h2 class="text-[17px] font-[600]">Rajesh Kumar</h2>
                                <p class="text-[13px] text-gray-600">Business Owner</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="what-our-client-say-card w-[300px] justify-center mx-auto min-h-[200px] bg-white border-1 border-gray-300 rounded-xl shadow p-5 flex flex-col items-start gap-3">
                        <div class="svg flex gap-2">
                            @for ($i=1;$i<6;$i++)
                                <img src="{{asset('svgs/filled_star.svg')}}" alt="">
                            @endfor
                        </div>
                        <div class="text flex flex-col gap-3">
                            <p class="text-gray-600">"Excellent legal service! They handled my corporate case with utmost
                                professionalism. Highly recommended."</p>
                            <div class="client">
                                <h2 class="text-[17px] font-[600]">Rajesh Kumar</h2>
                                <p class="text-[13px] text-gray-600">Business Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- need legat assistance --}}
        <div class="need-legal-assistance py-10 bg-[#fe9a00] text-white">
            <div class="text h-[15rem] sm:w-[50vw] mx-auto flex flex-col justify-center items-center gap-3 text-center">
                <h2 class="text-4xl font-[700]">Need Legal Assistance?</h2>
                <p class="text-[20px] text-gray-200">Book a consultation today and let us help you navigate your legal
                    challenges</p>
                <button class="bg-white text-[#fe9a00] font-[600] py-2 px-4 rounded-lg my-5 flex items-center">Schedule Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5" data-fg-q5z15="3.28:4.11141:/src/app/pages/HomePage.tsx:79:19:3759:39:e:ArrowRight::::::s5N" data-fgid-q5z15=":r10:"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
            </div>
        </div>
    </div>
@endsection
