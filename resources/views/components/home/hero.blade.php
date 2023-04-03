<!-- ====== Portfolio Hero start -->
<div>
  <div class="relative pt-[60px] lg:pt[80px] pb-[110px] bg-white dark:bg-slate-800">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4">
             <div class="hero-content">

            <h1 class=" text-white dark:text-gray-200 font-bold text-4xl sm:text-[45px] lg:text-[37px] xl:text-[40px] leading-snug mb-6" >
                I am Emerson Hernandez <br/>
                and I am <span class="rounded-md text-amber-600">Dev Laravel</span>
            </h1>
            <p class="text-xl text-white text-gray-200  mb-8 max-w-[720px]">
              I am a developer with 3 years of experencie. <br/>
              I love Laravel fullstack to create my projects
            </p>
            <ul class="flex flex-wrap items-center">
                <li>
                    <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                        My Projects
                    </x-button-link>
                </li>
            </ul>

            <div class="clients pt-16">
                <h5 class="text-sm flex items-center text-body-color dark:text-gray-300 mb-4">
                    Follow me on social media
                    <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
                </h5>
                <x-social-icons></x-social-icons>
              </div>
             </div>
            </div>

            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <picture>
                            <source  srcset="{{ url('/image/me_hero.avif') }}" type="image/avif" >
                            <source  srcset="{{ url('/image/me_hero.webp') }}" type="image/webp" >
                            <img class="max-w-full lg:ml-auto rounded-lg" loading="lazy" width="700" height="700" src="{{ url('/image/me_hero.jpg') }}" alt="hero-image" >
                            </picture>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>

  </div>
</div>
<!-- ====== Portfolio Section  hero end -->