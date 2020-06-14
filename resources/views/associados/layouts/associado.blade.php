@extends('bases.app')

<style>
      body#page-top #wrapper>#content-wrapper>#content, footer.sticky-footer{
      background-color: #eef0f8 !important;
    }
    .container, .container-fluid{
      max-width: 90%;
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

    @media (min-width: 1200px) {
    .container, .container-fluid{
      max-width: 85%;
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

    @media (min-width: 2000px) {
    .container, .container-fluid{
      max-width: 70%;
      padding-left: 0 !important;
      padding-right: 0 !important;
    }
}
}
</style>

@section('content')
    <div class="container-fluid">
        <h3 class="py-4 text-dark">@yield('title') @yield('edit')</h3>
        @yield('pages_associado')
    </div>  
@endsection