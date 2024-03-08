<x-layouts.layout>

    <div class="flex flex-col justify-center items-center p-8">
        <div class="card w-2/3 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Datos del alumno</h2>
                <div class="grid grid-cols-3 gap-4 ">
                    {{-- Primer bloque: Nombre, Apellidos y Dirección --}}
                    <div>
                        <fieldset class="border border-blue-500 p-4">
                            <legend class="text-red-500 font-bold">Nombre y Apellidos</legend>
                            <p>{{$alumno->nombre}} {{$alumno->apellidos}}</p>
                            <p>{{$alumno->direccion}}</p>
                        </fieldset>
                    </div>
                    {{-- Segundo bloque: Teléfono y Email --}}
                    <div>
                        <fieldset class="border border-blue-500 p-4">
                            <legend class="text-red-500 font-bold">Teléfono y Email</legend>
                            <p>{{$alumno->telefono}}</p>
                            <p>{{$alumno->email}}</p>
                        </fieldset>
                    </div>
                    {{-- Tercer bloque: Idiomas --}}
                    <div>
                        <fieldset class="border border-blue-500 p-4">
                            <legend class="text-red-500 font-bold">Idiomas que habla {{$alumno->nombre}}</legend>
                            @foreach($alumno->idiomas as $idioma)
                                <p>{{$idioma->idioma}}</p>
                            @endforeach
                        </fieldset>
                    </div>




</x-layouts.layout>







