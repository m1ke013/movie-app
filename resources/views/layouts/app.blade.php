@include('header.header')
@include('header.main-header')
<!-- MAIN CONTENT -->
{{-- <section id="main-content"> --}}
  @yield('content')
{{-- </section> --}}
@include('footer.main-footer')
@include('modals.modals')
@include('footer.footer')