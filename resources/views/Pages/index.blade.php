@extends('layouts.app')

@section('title', 'Sinalizar')

@section('content')

    {{-- Seções separadas --}}
    @include('components.index.Hero')
    @include('components.index.sobre-nos')
    @include('components.index.Servico')
    @include('components.index.videos')
    @include('components.index.Portifolio')
    @include('components.index.contato')

@endsection
