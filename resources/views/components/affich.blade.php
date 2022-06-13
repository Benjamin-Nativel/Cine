<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-20 text-center">
            <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Derniere nouveauté
            </h1>
            
        </div>
        <div class="flex flex-wrap -m-4">
            @foreach($film as $film)
            <div class="p-4 lg:w-1/3 sm:w-1/2">
                <div class="relative flex">
                    <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full"
                        src="{{ Storage::url($film->image)}}">
                    <div
                        class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                        <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">{{$film->titre}}
                        </h2>
                        
                        <p class="leading-relaxed">{{$film->resume}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
