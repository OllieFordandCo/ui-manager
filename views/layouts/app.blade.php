<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    @include('uiManager::actions.head')
</head>
<body style="background-color:#4608aa">
<div class="bg-off-white lazyload" data-bg="{{asset('assets/images/esvibe-landing.jpg')}}">
    @yield('content')
</div>
@include('uiManager::actions.footer')
</body>
</html>