@extends('layouts.base')


@section('conteudo')
<form action="{{ url('pokemon/' .$pokemon->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="sm:col-span-4">
        <label for="name" class="block text-sm/6 font-medium text-black">Nome</label>
        <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" type="text" name="name"placeholder="Nome" value="{{$pokemon->name }} "required">
    </div>

    <div class="sm:col-span-4">
        <label for="type" class="block text-sm/6 font-medium text-black">Tipo</label>
        <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" type="text" name="type"placeholder="Tipo" value="{{$pokemon->type }} "required">
    </div>

    <div class="sm:col-span-4">
          <label for="strenght" class="block text-sm/6 font-medium text-black">Pontos de Força</label>
          <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" type="text" name="strenght"placeholder="Pontos de Poder" value="{{$pokemon->strenght }} "required">
    </div>

          <div class="sm:col-span-4">
            <img src="{{ asset('storage/' . $pokemon->image) }}" alt="">
            <label for="image" class="block text-sm/6 font-medium text-black">Imagem</label>
            <input type="file" name="image" id="image" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
          </div>


    <button type="submit" class="rounded-md bg-red-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Edit Pokemon</button>
</form>

@endsection
