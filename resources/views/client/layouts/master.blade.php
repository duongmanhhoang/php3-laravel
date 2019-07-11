<!DOCTYPE html>
<html lang="en">
@include('client.layouts.head')
<body>
<div class="main-page-wrapper">
    <div id="loader-wrapper">
        <div id="loader">
            <span class="loader-inner"></span>
        </div>
    </div>
    @include('client.layouts.nav')
    @yield('content')
    @include('client.layouts.script')
</div>
</body>
</html>
