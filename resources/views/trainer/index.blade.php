@extends('layouts.base')


@section('conteudo')
<div class="flex flex-wrap justify-center mt-10">
    @foreach($trainers as $trainer)
        <div class="p-4 max-w-sm">
            <div class="flex rounded-lg h-full bg-red-900 p-8 flex-col">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $trainer->name }}</h5>
                <div class="flex mt-4 md:mt-6">
                <a href="{{ url('trainer/'.$trainer->id.'/edit') }}" class="inline-flex items-center bg-white px-4 py-2 text-sm font-medium text-center text-black  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-300  ">Editar</a>
                <form action="{{ url('trainer/'.$trainer->id) }}" method="POST">
                @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-white focus:outline-none bg-black rounded-lg border border-black hover:bg-gray-800 hover:text-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-500  ">Deletar</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection