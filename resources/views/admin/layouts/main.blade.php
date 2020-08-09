<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.includes.head')


<body  class="sidebar-mini layout-navbar-fixed sidebar-collapse" style="height: auto;">
    <div class="wrapper">
    @include('admin.includes.navbar')

            @yield('content')

  </div>

  @include('admin.includes.foot')</body>
</html>
