<x-app-layout>

    <div class="container bg-red-500 py-8">
        
        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6'>
            @foreach ($reportes as $reporte)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($reporte->image->url)}})">
               <div class="W-full h-full px-8 flex flex-col justify-center">
                   
                {{-- <div>
                    {{$reporte->tags}}
                </div> --}}
                    
                
                <h1 class="text-4xl text-white leading-8 font-bold">
                        <a href="{{route('reportes.show', $reporte)}}">
                            {{$reporte->nombre}}
                        </a>
                    </h1>
               </div>
                
            </article>
                
            @endforeach

        </div>

        <div class="mb-4">
            {{$reportes->links()}}
        </div>

    </div>
</x-app-layout>