<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{config('app.name', 'amaranth')}}</title>

<!-- Base Js -->
<script>
    var
    baseConfig = {
        vendor_url: '{{ url('/assets/js/vendor/') }}/'
    },
    mikadoConfig = {
        vendor_url: '{{ url('/assets/js/vendor/') }}/',
        module_url: '{{ url('/assets/js/mikado/modules/') }}/'
    }
</script>
<script src="{{asset('/assets/js/base/base.js')}}"></script>

@include('uiManager::actions.fonts')

<!-- Stylesheets -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@uiCss()
<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>