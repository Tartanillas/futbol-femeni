<div>
@extends('layouts.app')

@section('title', "Crear un nou estadi")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Afegir un nou estadi</h1>
<form action="{{ route('estadis.store') }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-lg mx-auto">
    @csrf
    <div class="mb-4">
        <label for="nom" class="block text-gray-700 font-bold mb-2">Nom de l'estadi:</label>
        <input type="text" id="nom" name="nom" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-200" required>
    </div>
    <div class="mb-4">
        <label for="capacitat" class="block text-gray-700 font-bold mb-2">Capacitat:</label>
        <input type="number" id="capacitat" name="capacitat" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-200" required>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
    </div>
</form>
@endsection
</div>
