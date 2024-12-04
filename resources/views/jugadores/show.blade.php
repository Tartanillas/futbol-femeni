@extends('layouts.app')
@section('title', "Pàgina equip Femení" )
@section('content')
<x-jugador
        :nom="$jugador['nom']"
        :equip="$jugador['equip']"
        :posicio="$jugador['posicio']"
    />
@endsection  