@extends('bases.app')

@section('content')
    <div class="container">
        <h3 class="py-4 text-dark">@yield('title') @yield('edit')</h3>
        @yield('pages_setor')
    </div>  
@endsection

