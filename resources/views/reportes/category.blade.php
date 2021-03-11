<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">
    <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{$category->nombre}}</h1>

    @foreach ($reportes as $reporte)
    <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-72 object-cover object-center"src="{{Storage::url($reporte->image->url)}}" alt="">
        
        <div class="px-6 py-4">
            <h1 class="font-bold text-xl mb-2">
                    <a href="{{route('reportes.show', $reporte)}}">{{$reporte->nombre}}</a>
            </h1>

            <div class="text-gray-700 text-base">
                {{$reporte->extract}}
            </div>
        </div>

            {{-- <div class="px-6 pt-4 pb-2">
                @foreach ($reporte as $tag)
                    <a href="" class="inline-block bg-gray-200 rounded-full">{{$tag->nombre}}</a>
                @endforeach
            </div> --}}
    </article>
    @endforeach

    <div class="mt-4">
        {{$reportes->links()}}
    </div>

    </div>
</x-app-layout>