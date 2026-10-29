@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="container-fluid p-4">

        @include('partials.cards-dashboard')

        @include('partials.charts')

    </div>

</div>

@endsection