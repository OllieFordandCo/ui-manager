<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    @include('uiManager::actions.head')
</head>
<body>
<div class="bg-off-white">
    <div class="bg-half"></div>
    @yield('content')
</div>
@include('uiManager::actions.footer')
</body>
</html>