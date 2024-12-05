@extends('layouts.base')


@section('conteudo')
<form action="{{ url('trainer/' .$trainer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="sm:col-span-4">
        <label for="name" class="block text-sm/6 font-medium text-black">Nome</label>
        <div class="mt-2">
        <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" type="text" name="name"placeholder="Nome" value="{{$trainer->name }} "required">
        </div>

    <button type="submit" class="rounded-md bg-red-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Editar Treinador</button>
</form>

@endsection
