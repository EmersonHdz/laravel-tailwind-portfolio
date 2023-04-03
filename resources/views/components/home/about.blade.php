    <!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <picture>
                  <source srcset="{{ url('/image/about-fullstack.avif') }}" type="image/avif" >
                  <source srcset="{{ url('/image/about-fullstack.webp') }}" type="image/webp" >
                  <img class="rounded-2xl w-full" loading="lazy" width="200" height="300" src="{{ url('/image/about-fullstack.jpg') }}" alt="about-me" >
                  </picture>
              </div>
              <div class="py-3 sm:py-4">
                <picture>
                  <source srcset="{{ url('/image/about-js.avif') }}" type="image/avif" >
                  <source srcset="{{ url('/image/about-js.webp') }}" type="image/webp" >
                  <img class="rounded-2xl w-full" loading="lazy" width="200" height="300" src="{{ url('/image/about-js.jpg') }}" alt="about-me" >
                  </picture>
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <picture>
                  <source srcset="{{ url('/image/about-php.avif') }}" type="image/avif" >
                  <source srcset="{{ url('/image/about-php.webp') }}" type="image/webp" >
                  <img class="rounded-2xl w-full" loading="lazy" width="200" height="300" src="{{ url('/image/about-php.jpg') }}" alt="about-me" >
                  </picture>

                <x-about-dots></x-about-dots>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-gray mb-2 block">
               <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                   "Everything is achievable with hard work"
               </blockquote>
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl text-gray mb-8">
              About Me
            </h2>
            <p class="text-base text-gray mb-8 whitespace-pre-line leading-9 ">
                A little about me, I am 28 years old, I have dedicated myself to learning programming since I really like technology, I feel that we are facing 
                a very big change in humanity in which I would like to contribute, I have been studying WEB DEVELOPMENT for 2 years, I really like it the laravel framework since it can work as a full stack
            </p>
            <p class="text-base text-gray mb-8 whitespace-pre-line leading-9">
                An expert in Laravel, PHP and JavaScript is capable of building dynamic, scalable and efficient websites. His skill in Laravel allows him to build robust web 
                applications and his knowledge of <span class="text-amber-500 font-bold">PHP</span> and <span class="text-amber-500 font-bold">JavaScript</span>. <br /> allows him to write clean, modular code. Also, thanks to his experience in his JavaScript, he is able to create interactions in real time to improve the user experience.
              
             
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->