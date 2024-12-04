@extends('layouts.app')
@section('title', "Pàgina equip Femení" )
@section('content')
    <x-estadi
        :nom="$estadi->nom"
        :capacitat="$estadi->capacitat"
    />
@endsection