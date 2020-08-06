<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.includes.head')
<body>
    @include('admin.includes.navbar')
    <div class="content-wrapper px-4 py-2">
        <div class="content-header">
            <h1 class="text-dark">{{$page->title}}</h1>
        </div>

        <div class="content px-2">
            @yield('content')
        </div>
    </div>


</body>
</html>
