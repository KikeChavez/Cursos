<x-app-layout>
    <!-- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/homeCourse/agroproductor.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl">
                Los mejores cursos para agroproductores y consimidores
            </h1>
            <p class="text-white text-lg mt-2 mb-4">Creemos que la educación de los agroproductores y de los consumidores es la clave para una industria agropecuaria más fuerte y próspera</p>
            <!-- component -->
              <!-- This is an example component -->
              @livewire('search');
        </div>
        </div>
    </section>

    @livewire('course-index')

</x-app-layout>