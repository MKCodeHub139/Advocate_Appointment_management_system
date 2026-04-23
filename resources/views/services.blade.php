@extends('index')
@section('main')
    <div class="main ">
        <div class="header h-[15rem] bg-[#0f172b] flex flex-col justify-center text-white p-5 w-full ">
            <div class="text sm:w-[75%]">
                <h2 class="text-[50px] font-[700]">Our Services</h2>
                <p class="text-[22px] text-gray-300 block">Comprehensive legal services across multiple practice areas to
                    meet all your legal needs</p>
            </div>
        </div>
        <div class="content ">
            <div class="services-cards flex flex-wrap justify-center w-[95vw] gap-10 py-10 mx-auto p-5">
                @if ($services->count() > 0)
                    @foreach ($services as $service)
                        <div
                            class="service-card  w-[350px] max-w-[400px] border-1 grow-1  border-gray-300 rounded-2xl p-5 flex flex-col justify-start items-start hover:shadow-2xl">
                            <div class="img p-4 bg-[#fef3c6] rounded-xl">
                                <img src="{{ asset($service->imageUrl) }}" alt="">
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
            {{-- why choose our services --}}
            <div class="why-choose-our-services flex flex-col mx-auto justify-center min-h-[15rem] py-10 w-[95vw] bg-[#f8fafc]">
                <div class="title my-5 flex justify-center">
                    <h2 class="text-4xl font-bold">Why Choose Our Services?</h2>
                </div>
                <div class="cards p-5 grid grid-cols-2 gap-5">
{{-- experties-and-experience --}}
                    <div class="experties-and-experience card p-10 gap-3 border-1 border-gray-300 rounded-2xl">
                        <div class="card-title">
                            <h5>Expertise & Experience</h5>
                        </div>
                        <div class="card-description">
                            <p>With 15+ years of practice and 500+ successful cases, we bring deep expertise across all practice areas.</p>
                        </div>
                    </div>
                    {{-- personalized-attention --}}
                    <div class="personalized-attention card p-10 gap-3 border-1 border-gray-300 rounded-2xl">
                        <div class="card-title">
                            <h5>Personalized Attention</h5>
                        </div>
                        <div class="card-description">
                            <p>Every client receives dedicated attention and customized legal strategies tailored to their specific needs.</p>
                        </div>
                    </div>
                    {{-- transparent-pricing --}}
                    <div class="transparent-pricing card p-10 gap-3 border-1 border-gray-300 rounded-2xl">
                        <div class="card-title">
                            <h5>Transparent Pricing</h5>
                        </div>
                        <div class="card-description">
                            <p>Clear and upfront fee structures with no hidden charges. We believe in transparent communication about costs.</p>
                        </div>
                    </div>
                    {{-- result-oriented-approach --}}
                    <div class="result-oriented-approach card p-10 gap-3 border-1 border-gray-300 rounded-2xl">
                        <div class="card-title">
                            <h5>Result-Oriented Approach</h5>
                        </div>
                        <div class="card-description">
                            <p>We focus on achieving the best possible outcomes through thorough preparation and strategic planning.</p>
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
                    <button class="bg-white text-[#fe9a00] font-[600] py-2 px-4 rounded-lg my-5 flex items-center">Schedule
                        Consultation
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5"
                            data-fg-q5z15="3.28:4.11141:/src/app/pages/HomePage.tsx:79:19:3759:39:e:ArrowRight::::::s5N"
                            data-fgid-q5z15=":r10:">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></button>
                </div>
            </div>
        </div>
    </div>
@endsection
