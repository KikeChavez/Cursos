<x-app-layout>

    <!-- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/home/agricultor.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl">
                Educación para que el campo tenga futuro
            </h1>
            <p class="text-white text-lg mt-2 mb-4">Creemos que la educación de los agroproductores y de los consumidores es la clave para una industria agropecuaria más fuerte y próspera</p>
            <!-- component -->
              <!-- This is an example component -->
            @livewire('search');
        </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/agriculture-2382176_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Titulo</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum animi, veniam impedit voluptatibus libero nemo facilis laboriosam quae rerum sed ad itaque nihil</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/autumn-965347_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Titulo</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum animi, veniam impedit voluptatibus libero nemo facilis laboriosam quae rerum sed ad itaque nihil</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/peasants-2425936_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Titulo</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum animi, veniam impedit voluptatibus libero nemo facilis laboriosam quae rerum sed ad itaque nihil</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/peasants-2425936_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Titulo</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum animi, veniam impedit voluptatibus libero nemo facilis laboriosam quae rerum sed ad itaque nihil</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirigite al catálogo de cursos y filtralos por categoría o nivel</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Catalogo de cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 mb-6">Apoyando al campo</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach

        </div>
    </section>


</x-app-layout>