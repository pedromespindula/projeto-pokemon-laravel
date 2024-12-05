@extends('layouts.base')


@section('conteudo')
<form action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
    @csrf 
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-black">Cadastro de Pokemon</h2>
      <p class="mt-1 text-sm/6 text-black">Adicione o Nome, Tipo, Poder, Adicione uma foto do Pokemon e Selecione Treinador</p>

      <div class="sm:col-span-4">
        <label for="name" class="block text-sm/6 font-medium text-black">Nome</label>
        <div class="mt-2">
          <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div class="sm:col-span-4">
        <label for="type" class="block text-sm/6 font-medium text-black">Tipo</label>
        <div class="mt-2">
          <input id="type" name="type" type="text" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
      </div>
    
        <div class="sm:col-span-4">
          <label for="strenght" class="block text-sm/6 font-medium text-black">Pontos de Força</label>
          <div class="mt-2">
            <input id="streght" name="strenght" type="text" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
          </div>

        <div class="sm:col-span-4">
        <label for="image" class="block text-sm/6 font-medium text-black">Imagem</label>
        <div class="mt-2">
          <input id="image" name="image" type="file" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
        </div>
      </div>

      <label for="trainer_id" class="block mb-2 text-sm font-medium text-black">Treinador</label>
        <select id="trainer_id" name="trainer_id"  class="bg-white-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option selected>Escolha um treinador</option>
                @foreach($trainers as $trainer)
            <option value="{{ $trainer->id}}">{{ $trainer->name }}</option>
                @endforeach
        </select>
        </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-black">Cancelar</button>
    <button type="submit" class="rounded-md bg-red-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Salvar</button>
  </div>
</form>
@endsection