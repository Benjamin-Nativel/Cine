@extends('layouts.app')
@section('main')
<!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />


<!-- ====== Blog Section Start -->
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
   <div class="container">
      <div class="flex flex-wrap justify-center -mx-4">
         <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
               
               <h2
                  class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                  "
                  >
                  Films recent
               </h2>
               <p class="text-base text-body-color">
                  Vous pouvez appercevoir ci-dessous les films sorti ces dernier mois!
               </p>
            </div>
         </div>
      </div>
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="max-w-[370px] mx-auto mb-10">
               <div class="mb-8 overflow-hidden rounded">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg"
                     alt="image"
                     class="w-full"
                     />
               </div>
               <div>
                  <span
                     class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                     >
                  Show
                  </span>
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                        >
                     {{film->titre}}
                     </a>
                  </h3>
                  <p class="text-base text-body-color">
                     {{film->resume}}
                  </p>
               </div>
            </div>
         </div>
        
</section>
<!-- ====== Blog Section End -->
@endsection