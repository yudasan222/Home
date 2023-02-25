<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <div class="md:hidden absolute z-50 w-1/2 h-screen bg-white opacity-90" id="menu">
<ul class=" py-10 px-10 space-y-3 text-lg font-medium">
    <li>Home</li>
    <li>Profile</li>
    <li>Kegiatan</li>
    <li class="flex items-center">Galeri   <div class="w-7 h-7 ml-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"/></svg>        
            </div> </li>
    <li>Kontak</li>
</ul>
    </div>

    <div class="relative w-full h-screen ">
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
    <div class="absolute top-0 w-full h-full bg-gray-900 opacity-70">
        
    </div>
    {{-- nav --}}
    <div class="absolute top-0 flex items-center justify-between w-full px-10 py-3 ">
       <div class="flex items-center gap-3 ">
        <div class="w-14 h-14 ">
         <img src="{{ asset('image/log.png') }}" class="object-contain w-full h-full" alt="">
       </div>
       <h1 class="font-semibold tracking-widest text-white">Website Utama</h1>
       </div>
       <div class="items-center justify-between hidden gap-3 text-base md:flex lg:text-base lg:gap-8 xl:gap-10 ">
           <a href="" class="tracking-wide text-white transition-all hover:text-slate-300">
             Home
           </a>
           <a href="" class="tracking-wide text-white transition-all hover:text-slate-300">
             Profile
           </a>
           <a href="" class="tracking-wide text-white transition-all hover:text-slate-300">
             Kegiatan
           </a>
           <a href="" class="flex items-center tracking-wide text-white transition-all hover:text-slate-300">
            Galeri
            <div class="w-6 h-6 ml-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"/></svg>        
            </div>
           </a>
           <a href="" class="tracking-wide text-white transition-all hover:text-slate-300">
             Kontak
           </a>
           <a href="">
               <div class="flex items-center gap-2 px-4 py-2 font-medium transition-all bg-blue-200 rounded-md hover:bg-blue-300">Login
                   <div class="w-5 h-5 ">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13,21a1,1,0,0,0,0,2h8a1,1,0,0,0,1-1V2a1,1,0,0,0-1-1H13a1,1,0,0,0,0,2h7V21Z"/><path d="M2,12a1,1,0,0,0,1,1H14.586l-2.293,2.293a1,1,0,1,0,1.414,1.414l4-4a1,1,0,0,0,0-1.414l-4-4a1,1,0,1,0-1.414,1.414L14.586,11H3A1,1,0,0,0,2,12Z"/></svg>    
                    </div>
                </div>
                </a>
            </div>
            <div class="w-10 h-10 md:hidden block" id="hamburger">
         <img  class="object-contain w-full h-full" alt="" id="icon">
       </div>
        </div>
        {{-- nav --}}
{{-- hero --}}
        <div class="absolute left-0 right-0 max-w-xl mx-auto -translate-y-32 top-1/2 md:max-w-3xl xl:max-w-4xl">
            <h1 class="text-5xl font-bold tracking-wider text-center text-white font-poppins">Selamat Datang Di Website Utama</h1>
            <p class="mx-auto mt-4 text-base leading-7 text-center text-slate-300 md:mt-5 ">Pada website ini Lorem ipsum dolor sit amet consectetur adipisicing elit voluptate nesciunt. Ut reiciendis vitae quibusdam qui possimus laudantium numquam et exercitationem itaque eum? Harum laboriosam magni vitae quod impedit!  laboriosam magni vitae quod impedit!</p>
            <div class="flex md:flex-row flex-col px-10 md:px-0 justify-between max-w-xl mx-auto">
                <button  class="px-6 py-3 mt-8 text-base font-medium transition-all bg-green-400 rounded-md hover:bg-green-500 font-poppins">
                    <a href="">Pengumuman 1</a>
                </button>
                <button  class="px-6 py-3 mt-8 text-base font-medium transition-all bg-blue-400 rounded-md font-poppins hover:bg-blue-500">
                    <a href="">Pengumuman 1</a>
                </button>
                <button  class="px-6 py-3 mt-8 text-base font-medium transition-all bg-orange-400 rounded-md hover:bg-orange-500 font-poppins">
                    <a href="">Pengumuman 1</a>
                </button>
            </div>
            <button class="md:block hidden px-1 py-1 mx-auto mt-10 transition-all bg-white rounded-md lg:mt-20 opacity-30 animate-bounce hover:opacity-50 ">
                 <div class="w-12 h-12 md:w-20 md:h-20 ">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"/></svg>        
            </div>
            </button>
        </div>
        {{-- hero --}}
    </div>

    {{-- news header --}}
    <div class="container max-w-lg mx-auto mt-10 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl">
        <div class="block lg:flex lg:justify-between lg:items-center">
        {{-- L --}}
        <div class="w-full py-5 lg:w-6/12">
            <h1 class="text-xl font-extrabold tracking-wider text-blue-600 font-poppins">KABAR BERITA</h1>
            <p class="mt-3 text-justify indent-10">     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum in illum ducimus ut sapiente tempora placeat quod enim laudantium quam asperiores repellat sint, dolore molestiae, aliquid incidunt voluptates quasi omnis aperiam beatae soluta nobis ipsam. Voluptates fuga, molestias deleniti neque commodi ducimus ratione dolores illo eius facilis ipsa, error adipisci?</p>
            <div class="relative flex items-center justify-between w-9/12 mx-auto mt-5 overflow-hidden rounded-full lg:mx-0 lg:mt-7 h-11 lg:h-12 xl:h-14 bg-slate-200 ">
                 <div class="w-8 h-8 ml-3">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><path d="M63.3 59.9c3.8-4.6 6.2-10.5 6.2-17 0-14.6-11.9-26.5-26.5-26.5S16.5 28.3 16.5 42.9 28.4 69.4 43 69.4c6.4 0 12.4-2.3 17-6.2l20.6 20.6c.5.5 1.1.7 1.7.7.6 0 1.2-.2 1.7-.7.9-.9.9-2.5 0-3.4L63.3 59.9zm-20.4 4.7c-12 0-21.7-9.7-21.7-21.7s9.7-21.7 21.7-21.7 21.7 9.7 21.7 21.7-9.7 21.7-21.7 21.7z"/></svg>     
            </div>
                <input type="text" class="absolute w-full h-full bg-transparent rounded-full pl-14 focus:outline-none focus:outline-offset-1 focus:border-blue-300 focus:border-2 " placeholder="Cari Berita...">
            </div>
        </div>
        {{-- R --}}
        <div class="py-5 lg:w-6/12 h-80 lg:pl-14">
          
            
            <iframe  class="w-full h-full rounded-xl " src="https://www.youtube.com/embed/wnUfbW9wxsA" title="PANASS.. KEBIJAKAN JOKOWI GUNCANG SAWIT MALAYSIA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
        </div>
        
    </div>
</div>
{{-- newsheader --}}
{{-- news1 --}}
<div class="container max-w-lg mx-auto mt-5 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl md:mt-20">
         <h1 class="text-xl font-extrabold tracking-wider text-blue-600 font-poppins">BERITA TERKINI</h1>
       <p class="mt-3 text-justify indent-10"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam quasi dolor explicabo iste tempore nulla veritatis velit aut alias deleniti! explicabo iste tempore nulla veritatis velit aut alias deleniti! </p>
        
       <div class="w-full mt-8 ">
        <ul class="flex gap-12 font-medium font-poppins">
            <li class="pt-1 font-bold text-blue-500 border-2 border-b-0 border-l-0 border-r-0 border-t-blue-500"><a href="">All</a></li>
            <li class="pt-1"><a href="">Sport</a></li>
            <li class="pt-1"><a href="">Politic</a></li>
            <li class="pt-1"><a href="">Games</a></li>
            <li class="pt-1"><a href="">Programming</a></li>
        </ul>
       </div>
       <div class="flex flex-wrap justify-between gap-10 mt-5 md:gap-0 ">
        {{-- card --}}
        <div class="w-full md:w-52 md:mb-16 lg:w-64 xl:w-80">
            <div class="w-full h-56 overflow-hidden bg-red-500 rounded-lg md:h-28 lg:h-36 xl:h-44">
                    <img class="object-cover w-full h-full" src="{{ asset('image/b1.jpeg') }}" alt="">
                </div>
            <h1 class="mt-4 text-lg font-bold text-blue-500 md:mt-2 md:text-sm xl:text-xl">Demo warga di XYZ</h1>
            <div class="flex gap-8 mt-1">
                <div class="flex gap-3 xl:gap-5">
                    <div class="w-3 h-3 md:w-1 md:h-1 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill-rule="evenodd" d="M9.504.014a.5.5 0 0 0-.492.507v1.49H7.514a.497.497 0 0 0-.498.499v1.799c.418-.011.998.382.998.382V3.01h1.38a.5.5 0 0 0 .233 0h3.76a.5.5 0 0 0 .232 0h1.383V8h-3.691c.28.287.291.658.373 1H15.5a.5.5 0 0 0 .5-.5V2.51a.499.499 0 0 0-.5-.498h-1.496V.522a.5.5 0 0 0-.508-.508.5.5 0 0 0-.492.507v1.49h-2.992V.522a.5.5 0 0 0-.508-.507zm-.492 3.994v.998h.998v-.998h-.998zm1.996 0v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zM5.492 5A5.5 5.5 0 0 0 0 10.494a5.498 5.498 0 0 0 5.492 5.492 5.5 5.5 0 0 0 5.494-5.492A5.502 5.502 0 0 0 5.492 5zm0 .998a4.489 4.489 0 0 1 4.496 4.496 4.487 4.487 0 0 1-4.496 4.494 4.485 4.485 0 0 1-4.494-4.494 4.487 4.487 0 0 1 4.494-4.496zm5.516.006v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zm-7.52.658a.5.5 0 0 0-.492.508v3.324a.5.5 0 0 0 .5.5h3.012a.5.5 0 1 0 0-1H5.994V7.17a.5.5 0 0 0-.508-.508z" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible"/></svg>  
                    </div>
                    <p class="text-xs text-slate-500">17 November 2022</p>
                </div>
                <div class="flex gap-2">
                    <div class="w-4 h-4 ">
                     <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 32 32"><polygon fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="4.48 15.38 17.62 28.52 27.52 18.62 14.38 5.48 5.19 6.19 4.48 15.38"/><polygon fill="#000" points="25.96 17.06 16.06 26.96 17.44 28.44 27.44 18.44 25.96 17.06"/><line x1="24.83" x2="14.93" y1="15.93" y2="25.83" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10"/><circle cx="10" cy="11" r="1.5" fill="#000"/></svg>
                    </div>
                    <p class="text-xs text-slate-500">Politic</p>
                </div>
            </div>
            <p class="mt-4 text-justify indent-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque vitae esse maxime quam distinctio laboriosam molestiae praesentium adipisci sequi in veritatis quidem officia cum harum, consequatur a nostrum magni...</p>
            <button class="px-4 py-2 mt-4 text-sm rounded-lg bg-sky-400"><a href="#">Baca Selengkapnya</a></button>
            </div>
            {{-- card --}}
                    {{-- card --}}
        <div class="w-full md:w-52 lg:w-64 xl:w-80">
            <div class="w-full h-56 overflow-hidden bg-red-500 rounded-lg md:h-28 lg:h-36 xl:h-44">
                    <img class="object-cover w-full h-full" src="{{ asset('image/b2.jpeg') }}" alt="">
                </div>
            <h1 class="mt-4 text-lg font-bold text-blue-500 md:text-sm md:mt-2 xl:text-xl">Perang semakin memanas antara x dan z</h1>
            <div class="flex gap-8 mt-1">
                <div class="flex gap-3 xl:gap-5">
                    <div class="w-3 h-3 md:w-1 md:h-1 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill-rule="evenodd" d="M9.504.014a.5.5 0 0 0-.492.507v1.49H7.514a.497.497 0 0 0-.498.499v1.799c.418-.011.998.382.998.382V3.01h1.38a.5.5 0 0 0 .233 0h3.76a.5.5 0 0 0 .232 0h1.383V8h-3.691c.28.287.291.658.373 1H15.5a.5.5 0 0 0 .5-.5V2.51a.499.499 0 0 0-.5-.498h-1.496V.522a.5.5 0 0 0-.508-.508.5.5 0 0 0-.492.507v1.49h-2.992V.522a.5.5 0 0 0-.508-.507zm-.492 3.994v.998h.998v-.998h-.998zm1.996 0v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zM5.492 5A5.5 5.5 0 0 0 0 10.494a5.498 5.498 0 0 0 5.492 5.492 5.5 5.5 0 0 0 5.494-5.492A5.502 5.502 0 0 0 5.492 5zm0 .998a4.489 4.489 0 0 1 4.496 4.496 4.487 4.487 0 0 1-4.496 4.494 4.485 4.485 0 0 1-4.494-4.494 4.487 4.487 0 0 1 4.494-4.496zm5.516.006v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zm-7.52.658a.5.5 0 0 0-.492.508v3.324a.5.5 0 0 0 .5.5h3.012a.5.5 0 1 0 0-1H5.994V7.17a.5.5 0 0 0-.508-.508z" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible"/></svg>  
                    </div>
                    <p class="text-xs text-slate-500">17 November 2022</p>
                </div>
                <div class="flex gap-2">
                    <div class="w-4 h-4 ">
                     <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 32 32"><polygon fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="4.48 15.38 17.62 28.52 27.52 18.62 14.38 5.48 5.19 6.19 4.48 15.38"/><polygon fill="#000" points="25.96 17.06 16.06 26.96 17.44 28.44 27.44 18.44 25.96 17.06"/><line x1="24.83" x2="14.93" y1="15.93" y2="25.83" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10"/><circle cx="10" cy="11" r="1.5" fill="#000"/></svg>
                    </div>
                    <p class="text-xs text-slate-500">Politic</p>
                </div>
            </div>
            <p class="mt-4 text-justify indent-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque vitae esse maxime quam distinctio laboriosam molestiae praesentium adipisci sequi in veritatis quidem officia cum harum, consequatur a nostrum magni...</p>
            <button class="px-4 py-2 mt-4 text-sm rounded-lg bg-sky-400"><a href="#">Baca Selengkapnya</a></button>
            </div>
            {{-- card --}}
                                 {{-- card --}}
        <div class="w-full md:w-52 lg:w-64 xl:w-80">
            <div class="w-full h-56 overflow-hidden bg-red-500 rounded-lg md:h-28 lg:h-36 xl:h-44">
                    <img class="object-cover w-full h-full" src="{{ asset('image/b3.jpeg') }}" alt="">
                </div>
            <h1 class="mt-4 text-lg font-bold text-blue-500 md:text-sm md:mt-2 xl:text-xl">Perang semakin memanas antara x dan z</h1>
            <div class="flex gap-8 mt-1">
                <div class="flex gap-3 xl:gap-5">
                    <div class="w-3 h-3 md:w-1 md:h-1 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill-rule="evenodd" d="M9.504.014a.5.5 0 0 0-.492.507v1.49H7.514a.497.497 0 0 0-.498.499v1.799c.418-.011.998.382.998.382V3.01h1.38a.5.5 0 0 0 .233 0h3.76a.5.5 0 0 0 .232 0h1.383V8h-3.691c.28.287.291.658.373 1H15.5a.5.5 0 0 0 .5-.5V2.51a.499.499 0 0 0-.5-.498h-1.496V.522a.5.5 0 0 0-.508-.508.5.5 0 0 0-.492.507v1.49h-2.992V.522a.5.5 0 0 0-.508-.507zm-.492 3.994v.998h.998v-.998h-.998zm1.996 0v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zM5.492 5A5.5 5.5 0 0 0 0 10.494a5.498 5.498 0 0 0 5.492 5.492 5.5 5.5 0 0 0 5.494-5.492A5.502 5.502 0 0 0 5.492 5zm0 .998a4.489 4.489 0 0 1 4.496 4.496 4.487 4.487 0 0 1-4.496 4.494 4.485 4.485 0 0 1-4.494-4.494 4.487 4.487 0 0 1 4.494-4.496zm5.516.006v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zm-7.52.658a.5.5 0 0 0-.492.508v3.324a.5.5 0 0 0 .5.5h3.012a.5.5 0 1 0 0-1H5.994V7.17a.5.5 0 0 0-.508-.508z" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible"/></svg>  
                    </div>
                    <p class="text-xs text-slate-500">17 November 2022</p>
                </div>
                <div class="flex gap-2">
                    <div class="w-4 h-4 ">
                     <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 32 32"><polygon fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="4.48 15.38 17.62 28.52 27.52 18.62 14.38 5.48 5.19 6.19 4.48 15.38"/><polygon fill="#000" points="25.96 17.06 16.06 26.96 17.44 28.44 27.44 18.44 25.96 17.06"/><line x1="24.83" x2="14.93" y1="15.93" y2="25.83" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10"/><circle cx="10" cy="11" r="1.5" fill="#000"/></svg>
                    </div>
                    <p class="text-xs text-slate-500">Politic</p>
                </div>
            </div>
            <p class="mt-4 text-justify indent-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque vitae esse maxime quam distinctio laboriosam molestiae praesentium adipisci sequi in veritatis quidem officia cum harum, consequatur a nostrum magni...</p>
            <button class="px-4 py-2 mt-4 text-sm rounded-lg bg-sky-400"><a href="#">Baca Selengkapnya</a></button>
            </div>
            {{-- card --}}
                           {{-- card --}}
        <div class="w-full md:w-52 lg:w-64 xl:w-80">
            <div class="w-full h-56 overflow-hidden bg-red-500 rounded-lg md:h-28 lg:h-36 xl:h-44">
                    <img class="object-cover w-full h-full" src="{{ asset('image/b4.jpeg') }}" alt="">
                </div>
            <h1 class="mt-4 text-lg font-bold text-blue-500 md:text-sm md:mt-2 xl:text-xl">Perang semakin memanas antara x dan z</h1>
            <div class="flex gap-8 mt-1">
                <div class="flex gap-3 xl:gap-5">
                    <div class="w-3 h-3 md:w-1 md:h-1 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill-rule="evenodd" d="M9.504.014a.5.5 0 0 0-.492.507v1.49H7.514a.497.497 0 0 0-.498.499v1.799c.418-.011.998.382.998.382V3.01h1.38a.5.5 0 0 0 .233 0h3.76a.5.5 0 0 0 .232 0h1.383V8h-3.691c.28.287.291.658.373 1H15.5a.5.5 0 0 0 .5-.5V2.51a.499.499 0 0 0-.5-.498h-1.496V.522a.5.5 0 0 0-.508-.508.5.5 0 0 0-.492.507v1.49h-2.992V.522a.5.5 0 0 0-.508-.507zm-.492 3.994v.998h.998v-.998h-.998zm1.996 0v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zM5.492 5A5.5 5.5 0 0 0 0 10.494a5.498 5.498 0 0 0 5.492 5.492 5.5 5.5 0 0 0 5.494-5.492A5.502 5.502 0 0 0 5.492 5zm0 .998a4.489 4.489 0 0 1 4.496 4.496 4.487 4.487 0 0 1-4.496 4.494 4.485 4.485 0 0 1-4.494-4.494 4.487 4.487 0 0 1 4.494-4.496zm5.516.006v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zm-7.52.658a.5.5 0 0 0-.492.508v3.324a.5.5 0 0 0 .5.5h3.012a.5.5 0 1 0 0-1H5.994V7.17a.5.5 0 0 0-.508-.508z" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible"/></svg>  
                    </div>
                    <p class="text-xs text-slate-500">17 November 2022</p>
                </div>
                <div class="flex gap-2">
                    <div class="w-4 h-4 ">
                     <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 32 32"><polygon fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="4.48 15.38 17.62 28.52 27.52 18.62 14.38 5.48 5.19 6.19 4.48 15.38"/><polygon fill="#000" points="25.96 17.06 16.06 26.96 17.44 28.44 27.44 18.44 25.96 17.06"/><line x1="24.83" x2="14.93" y1="15.93" y2="25.83" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10"/><circle cx="10" cy="11" r="1.5" fill="#000"/></svg>
                    </div>
                    <p class="text-xs text-slate-500">Politic</p>
                </div>
            </div>
            <p class="mt-4 text-justify indent-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque vitae esse maxime quam distinctio laboriosam molestiae praesentium adipisci sequi in veritatis quidem officia cum harum, consequatur a nostrum magni...</p>
            <button class="px-4 py-2 mt-4 text-sm rounded-lg bg-sky-400"><a href="#">Baca Selengkapnya</a></button>
            </div>
            {{-- card --}}
                           {{-- card --}}
        <div class="w-full md:w-52 lg:w-64 xl:w-80">
            <div class="w-full h-56 overflow-hidden bg-red-500 rounded-lg md:h-28 lg:h-36 xl:h-44">
                    <img class="object-cover w-full h-full" src="{{ asset('image/b5.jpeg') }}" alt="">
                </div>
            <h1 class="mt-4 text-lg font-bold text-blue-500 md:text-sm md:mt-2 xl:text-xl">Perang semakin memanas antara x dan z</h1>
            <div class="flex gap-8 mt-1">
                <div class="flex gap-3 xl:gap-5">
                    <div class="w-3 h-3 md:w-1 md:h-1 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill-rule="evenodd" d="M9.504.014a.5.5 0 0 0-.492.507v1.49H7.514a.497.497 0 0 0-.498.499v1.799c.418-.011.998.382.998.382V3.01h1.38a.5.5 0 0 0 .233 0h3.76a.5.5 0 0 0 .232 0h1.383V8h-3.691c.28.287.291.658.373 1H15.5a.5.5 0 0 0 .5-.5V2.51a.499.499 0 0 0-.5-.498h-1.496V.522a.5.5 0 0 0-.508-.508.5.5 0 0 0-.492.507v1.49h-2.992V.522a.5.5 0 0 0-.508-.507zm-.492 3.994v.998h.998v-.998h-.998zm1.996 0v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zM5.492 5A5.5 5.5 0 0 0 0 10.494a5.498 5.498 0 0 0 5.492 5.492 5.5 5.5 0 0 0 5.494-5.492A5.502 5.502 0 0 0 5.492 5zm0 .998a4.489 4.489 0 0 1 4.496 4.496 4.487 4.487 0 0 1-4.496 4.494 4.485 4.485 0 0 1-4.494-4.494 4.487 4.487 0 0 1 4.494-4.496zm5.516.006v.998h1v-.998h-1zm1.998 0v.998h.998v-.998h-.998zm-7.52.658a.5.5 0 0 0-.492.508v3.324a.5.5 0 0 0 .5.5h3.012a.5.5 0 1 0 0-1H5.994V7.17a.5.5 0 0 0-.508-.508z" color="#000" enable-background="accumulate" font-family="sans-serif" font-weight="400" overflow="visible"/></svg>  
                    </div>
                    <p class="text-xs text-slate-500">17 November 2022</p>
                </div>
                <div class="flex gap-2">
                    <div class="w-4 h-4 ">
                     <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 32 32"><polygon fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="4.48 15.38 17.62 28.52 27.52 18.62 14.38 5.48 5.19 6.19 4.48 15.38"/><polygon fill="#000" points="25.96 17.06 16.06 26.96 17.44 28.44 27.44 18.44 25.96 17.06"/><line x1="24.83" x2="14.93" y1="15.93" y2="25.83" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10"/><circle cx="10" cy="11" r="1.5" fill="#000"/></svg>
                    </div>
                    <p class="text-xs text-slate-500">Politic</p>
                </div>
            </div>
            <p class="mt-4 text-justify indent-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur itaque vitae esse maxime quam distinctio laboriosam molestiae praesentium adipisci sequi in veritatis quidem officia cum harum, consequatur a nostrum magni...</p>
            <button class="px-4 py-2 mt-4 text-sm rounded-lg bg-sky-400"><a href="#">Baca Selengkapnya</a></button>
            </div>
            {{-- card --}}
        </div>
</div>
{{-- news1 --}}

<div class="container max-w-lg mx-auto mt-5 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl md:mt-20">
         <h1 class="text-xl font-extrabold tracking-wider text-blue-600 font-poppins">Gallery</h1>
       <p class="mt-3 text-justify indent-10"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam quasi dolor explicabo iste tempore nulla veritatis velit aut alias deleniti! explicabo iste tempore nulla veritatis velit aut alias deleniti! </p>
 <div class="w-full mt-8 ">
        <ul class="flex gap-12 font-medium font-poppins">
            <li class="pt-1 font-bold text-blue-500 border-2 border-b-0 border-l-0 border-r-0 border-t-blue-500"><a href="">All</a></li>
            <li class="pt-1"><a href="">Sport</a></li>
            <li class="pt-1"><a href="">Politic</a></li>
            <li class="pt-1"><a href="">Games</a></li>
            <li class="pt-1"><a href="">Programming</a></li>
        </ul>
       </div>
       <div class="flex flex-wrap w-full gap-5 mx-auto mt-5 justify-evenly ">
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?nature" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?gaming" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?water" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?glass" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?anime" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?galaxy" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?tree" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?teacher" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?color" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?programming" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?coffe" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
            <div class="w-5/12 h-32 overflow-hidden bg-red-500 rounded-lg md:w-52 md:h-32 xl:w-56">
                <img src="https://source.unsplash.com/1200x400/?snack" class="object-cover w-full h-full" onclick="window.open(this.src)" alt="">
            </div>
           
          
       </div>
      
           <button class=" flex items-center px-8 py-2 hover:bg-green-500 animate-bounce mx-auto mt-8 transition-all text-xl bg-green-300 rounded-lg font-poppins"><a href="">See ALL</a> <div class="w-8 h-8 ml-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"/></svg>        
            </div></button>
            
      
    </div>

{{-- footer --}}
<div class="w-full bg-[#021624] pt-10 mt-10">
    <div class="flex flex-wrap px-10 ">
        <div class="w-4/12 lg:w-2/12 ">
            <div class="mx-auto w-fit">
            <h1 class="text-xl font-bold text-white font-poppins lg:text-2xl">Overview</h1>
            <ul class="mt-3 space-y-2 text-sm text-slate-400 lg:text-lg">
                <li>Products</li>
                <li>Pricing & Plans</li>
                <li>What news</li>
                <li>Customers</li>
                <li>Term of us</li>
                <li>Contact Center</li>
            </ul>
            </div>
        </div>



         <div class="w-4/12 lg:w-2/12">
              <div class="mx-auto w-fit">
            <h1 class="text-xl font-bold text-white font-poppins lg:text-2xl">Company</h1>
            <ul class="mt-3 space-y-2 text-sm text-slate-400 lg:text-lg">
                <li>About Us</li>
                <li>Carrer</li>
                <li>Brands</li>
                <li>Blog</li>
                <li>Video & Tutorials</li>
            </ul>
              </div>
        </div>


         <div class="w-4/12 lg:w-2/12 ">
              <div class="mx-auto w-fit">
            <h1 class="text-xl font-bold text-white font-poppins lg:text-2xl">Solutions</h1>
            <ul class="mt-3 space-y-2 text-sm text-slate-400 lg:text-lg">
                <li>Enterprise</li>
                <li>Developers</li>
                <li>Contact SUport</li>
                <li>Help Center</li>
               
            </ul>
              </div>
        </div>
 <div class="w-full mt-5 lg:w-6/12 lg:mt-0">
             
            <h1 class="lg:hidden text-xl font-bold text-center text-white font-poppins">Maps</h1>
            
        <iframe class="w-full mt-5 lg:mt-0 rounded-lg h-72"  id="gmap_canvas" src="https://maps.google.com/maps?q=simalungun&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              
       
    </div>
</div>

 <div class="flex flex-wrap px-10 mt-10 lg:items-center ">
    
         <div class="flex items-center justify-center w-full gap-3 lg:w-6/12 lg:justify-start ">
        <div class="w-32 h-32 ">
         <img src="{{ asset('image/log.png') }}" class="object-contain w-full h-full" alt="">
       </div>
       <h1 class="text-4xl font-semibold tracking-widest text-white">TERIMAKASIH</h1>
       </div>

       <div class="w-full mt-10 lg:w-6/12  lg:mt-0">
        <div class="flex lg:justify-end justify-center">
        <div class="lg:w-fit ">
        <h1 class="text-xl font-bold text-center text-white font-poppins">Follow Us</h1>
        <div class="flex  mt-5 space-x-4 ">
            <div class="w-16 h-16  border-2 border-white rounded-xl ">
         <img src="{{ asset('icon/whatsapp.svg') }}" class="object-contain w-full h-full" alt="">
       </div>
        <div class="w-16 h-16 p-2 border-2 border-white rounded-xl ">
         <img src="{{ asset('icon/facebook.svg') }}" class="object-contain w-full h-full" alt="">
       </div>
        <div class="w-16 h-16 p-2 border-2 border-white rounded-xl ">
         <img src="{{ asset('icon/instagram.svg') }}" class="object-contain w-full h-full" alt="">
       </div>
        <div class="w-16 h-16 p-2 border-2 border-white rounded-xl ">
         <img src="{{ asset('icon/youtube.svg') }}" class="object-contain w-full h-full" alt="">
       </div>
        </div>
    </div>
    </div>
       </div>
   
 </div>
 <div class="border-t-[1px] mt-10  border-slate-400 opacity-70 lg:mx-10"></div>
 <div class="flex justify-center py-10">
    <h1 class="text-xs font-light tracking-widest text-white font-poppins">Copyright By Website SImalungun 2023</h1>
 </div>
</div>
{{-- footer --}}
</body>


<script>
  button=document.getElementById("hamburger");
  menu=document.getElementById("menu");
  icon=document.getElementById("icon");
  

  menu.style.display="none";
  icon.src="{{ asset('icon/menu-icon.svg') }}";
  button.addEventListener("click", show);

    function show() {
        if (menu.style.display=="none") {
            menu.style.display="block"
            icon.src="{{ asset('icon/close.svg') }}";
        }else{
            menu.style.display="none"
              icon.src="{{ asset('icon/menu-icon.svg') }}";
        }
    }

</script>

</html>