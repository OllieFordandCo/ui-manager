<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    @include('uiManager::actions.head')
</head>
<body class="bg-primary">
<div class="bg-half"></div>
@yield('content')
@include('uiManager::actions.footer')
</body>
</html>