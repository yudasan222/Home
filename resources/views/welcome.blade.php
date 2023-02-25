<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

<div class="fixed w-screen top-0  h-screen  bg-slate-500 ">
       <video
    autoplay
    loop
    muted
    class="object-cover w-full h-full" 
  >
    <source
      src="{{ asset('video/vid_bg.mp4') }}"
      type="video/mp4"
    />

  </video>
</div>
 




<div class=" absolute right-0 left-0 sm:translate-y-1/2 sm:bottom-1/2  container mx-auto xl:max-w-5xl ">
    <div class="rounded-xl sm:absolute fixed w-full h-full  opacity-20 bg-white md:opacity-50"></div>
    <div class=" mx-auto relative mt-10 sm:mt-0 pt-7 w-52 h-52 md:w-32 md:h-32 lg:h-40 lg:w-40 xl:w-48 xl:h-48 animate-logo">
        <img src="{{ asset('image/log.png') }}" class="object-contain w-full h-full" alt="">
    </div>
    <div class="max-w-xs tracking-widest mx-auto relative mt-5 text-lg font-bold text-center animate-text md:text-xl lg:text-2xl lg:max-w-md">
        <h1>SELAMAT DATANG DI WEBSITE KAB.SIMALUNGUN</h1>
    </div>
    <div class="pb-7 flex flex-wrap justify-center gap-6 mt-10  ">
        <a href="/web" class=" animate-show group " >
        <div class="border-white border-2 border-solid hover:animate-wiggle relative flex items-center px-5 bg-gradient-to-b from-blue-200 to to-white rounded-md shadow-lg h-28 w-72 overflow-hidden">
            <div class="flex px-3 w-28 h-28">
                <img src="{{ asset('icon/website.svg') }}" class="items-center object-contain transition-all  group-hover:blur-md" alt="">
            </div>
            <div class=" flex justify-center items-center absolute w-full h-full transition-all -translate-x-5 bg-white opacity-0 group-hover:opacity-70 ">
                <h1 class="font-bold ">WEBSITE UTAMA</h1>
            </div>
            <h1 class="mx-auto text-lg font-medium tracking-wider transition-all group-hover:blur-md">WEBSITE</h1>
        </div>
    </a>
     
     <a href="/web" class=" animate-show2 group " >
        <div class="border-white border-2 border-solid hover:animate-wiggle relative flex items-center px-5 bg-gradient-to-b from-yellow-200 to to-white rounded-md shadow-lg h-28 w-72 overflow-hidden">
            <div class="flex px-3 w-28 h-28">
                <img src="{{ asset('icon/website.svg') }}" class="items-center object-contain transition-all  group-hover:blur-md" alt="">
            </div>
            <div class=" flex justify-center items-center absolute w-full h-full transition-all -translate-x-5 bg-white opacity-0 group-hover:opacity-70 ">
                <h1 class="font-bold ">WEBSITE UTAMA</h1>
            </div>
            <h1 class="mx-auto text-lg font-medium tracking-wider transition-all group-hover:blur-md">WEBSITE</h1>
        </div>
    </a>
    <a href="/web" class=" animate-show3 group " >
        <div class="border-white border-2 border-solid hover:animate-wiggle relative flex items-center px-5 bg-gradient-to-b from-orange-200 to to-white rounded-md shadow-lg h-28 w-72 overflow-hidden">
            <div class="flex px-3 w-28 h-28">
                <img src="{{ asset('icon/website.svg') }}" class="items-center object-contain transition-all  group-hover:blur-md" alt="">
            </div>
            <div class=" flex justify-center items-center absolute w-full h-full transition-all -translate-x-5 bg-white opacity-0 group-hover:opacity-70 ">
                <h1 class="font-bold ">WEBSITE UTAMA</h1>
            </div>
            <h1 class="mx-auto text-lg font-medium tracking-wider transition-all group-hover:blur-md">WEBSITE</h1>
        </div>
    </a>
    <a href="/web" class=" animate-show4 group " >
        <div class="border-white border-2 border-solid hover:animate-wiggle relative flex items-center px-5 bg-gradient-to-b from-green-300 to to-white rounded-md shadow-lg h-28 w-72 overflow-hidden">
            <div class="flex px-3 w-28 h-28">
                <img src="{{ asset('icon/website.svg') }}" class="items-center object-contain transition-all  group-hover:blur-md" alt="">
            </div>
            <div class=" flex justify-center items-center absolute w-full h-full transition-all -translate-x-5 bg-white opacity-0 group-hover:opacity-70 ">
                <h1 class="font-bold ">WEBSITE UTAMA</h1>
            </div>
            <h1 class="mx-auto text-lg font-medium tracking-wider transition-all group-hover:blur-md">WEBSITE</h1>
        </div>
    </a>
    <a href="/web" class=" animate-show5 group " >
        <div class="border-white border-2 border-solid hover:animate-wiggle relative flex items-center px-5 bg-gradient-to-b from-purple-300 to to-white rounded-md shadow-lg h-28 w-72 overflow-hidden">
            <div class="flex px-3 w-28 h-28">
                <img src="{{ asset('icon/website.svg') }}" class="items-center object-contain transition-all  group-hover:blur-md" alt="">
            </div>
            <div class=" flex justify-center items-center absolute w-full h-full transition-all -translate-x-5 bg-white opacity-0 group-hover:opacity-70 ">
                <h1 class="font-bold ">WEBSITE UTAMA</h1>
            </div>
            <h1 class="mx-auto text-lg font-medium tracking-wider transition-all group-hover:blur-md">WEBSITE</h1>
        </div>
    </a>
    

      
    </div>
  
  </div>
  
</body>
</html>