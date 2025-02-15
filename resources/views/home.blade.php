{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Welcome to home page</h1>
        <x-alert2 type="warning">
            <x-slot name="title">Info </x-slot>
            Change a few things up and try submitting again.
        </x-alert2>
    </div>
</x-app-layout> --}}

@extends('layouts.app')

@section('title', 'Laravel 12')

@push('css')
    <style>
        body {
            background-color: #f3f3f3
        }
    </style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto px-4">
    <h1>Welcome to home page</h1>
    <x-alert2 type="warning">
        <x-slot name="title">Info </x-slot>
        Change a few things up and try submitting again.
    </x-alert2>
</div>
@endsection