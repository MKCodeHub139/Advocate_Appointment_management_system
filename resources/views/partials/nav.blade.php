<nav class="z-[1111] sticky top-0">

       
    <div class="nav relative h-[5rem] flex justify-between items-center px-5 bg-[#0f172b] text-white">
        <div class="flex gap-2">
            <div class="svg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale w-8 h-8 text-amber-500" data-fg-d5jy5="3.22:3.2591:/src/app/components/Header.tsx:27:13:894:44:e:Scale::::::B8sC"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path><path d="M7 21h10"></path><path d="M12 3v18"></path><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path></svg>
            </div>
            <div class="logo-text">
                <h2 class="sm:text-2xl text-xl font-[500]">Sakib<span class="text-[#fe9a00]">Advocate</span> </h2>
                <p class="text-gray-400 text-[13px]">Legal Consultant</p>
            </div>
        </div>
        <div class="menu hidden md:flex">
            <ul class="flex gap-5 text-[17px]">
               <a href="/"> <li class="cursor-pointer hover:text-[#fe9a00]  {{ request()->is('/') ? 'text-[#fe9a00]' : '' }}">Home</li></a>
                <a href="/about"><li class="cursor-pointer hover:text-[#fe9a00] {{ request()->is('about') ? 'text-[#fe9a00]' : '' }}">About</li></a>
                <a href="/services"><li class="cursor-pointer hover:text-[#fe9a00] {{ request()->is('services') ? 'text-[#fe9a00]' : '' }}">Services</li></a>
                <a href="/appointment"><li class="cursor-pointer hover:text-[#fe9a00] {{ request()->is('appointment') ? 'text-[#fe9a00]' : '' }}">Appointment</li></a>
                <a href="/contact"><li class="cursor-pointer hover:text-[#fe9a00] {{ request()->is('contact') ? 'text-[#fe9a00]' : '' }}">Contact</li></a>
            </ul>
        </div>
        {{-- hamberger menu --}}
        <div class="ham h-[40px] w-[30px] gap-1 flex md:hidden  items-center flex-col justify-center">
            <div class="w-[30px] h-[3px] bg-gray-100 rounded"></div>
            <div class="w-[30px] h-[3px] bg-gray-100 rounded"></div>
            <div class="w-[30px] h-[3px] bg-gray-100 rounded"></span>
        </div>
    </div>
 <div class="ham-menu absolute top-0 left-0 h-[50vh] mt-[5rem] w-full  flex  py-10 px-5 bg-[#0f172b] text-white hidden z-[11111]">
            
            <ul class="flex flex-col gap-5 text-[17px] w-full">
               <a href="/"> <li class="cursor-pointer hover:text-[#fe9a00] text-[#fe9a00] py-1 px-5 rounded-xl bg-gray-700">Home</li></a>
               <a href="/about"><li class="cursor-pointer hover:text-[#ffd18b] py-1 px-5 rounded-xl">About</li></a> 
                <li class="cursor-pointer hover:text-[#fe9a00] py-1 px-5 rounded-xl">Services</li>
                <li class="cursor-pointer hover:text-[#fe9a00] py-1 px-5 rounded-xl">Appointment</li>
                <li class="cursor-pointer hover:text-[#fe9a00] py-1 px-5 rounded-xl">Contact</li>
            </ul>
    </div>
</nav>
@section('scripts')
<script>
    const ham =document.querySelector('.ham')
    const menu =document.querySelector('.ham-menu')
    ham.addEventListener('click',(e)=>{
        e.preventDefault()
        menu.classList.toggle('hidden');
    })
</script>
@endsection