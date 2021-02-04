<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{config('app.name', 'maskify Back-end')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('js/ckeditor.js')}}"></script>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        
    </body>
</html>