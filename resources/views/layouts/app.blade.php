<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style type="text/css">
 
table {
font-family: "Lato","sans-serif";   }       /* added custom font-family  */
 
table.one {                                  
margin-bottom: 3em; 
border-collapse:collapse;   }   
 
td {                            /* removed the border from the table data rows  */
text-align: center;     
width: 10em;                    
padding: 1em;       }       
 
th {                              /* removed the border from the table heading row  */
text-align: center;                 
padding: 1em;
background-color: #e8503a;       /* added a red background color to the heading cells  */
color: white;       }                 /* added a white font color to the heading text */
 
tr {    
height: 1em;    }
 
table tr:nth-child(even) {            /* added all even rows a #eee color  */
    background-color: #eee;     }
 
table tr:nth-child(odd) {            /* added all odd rows a #fff color  */
background-color:#fff;      }
 
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                @if(Auth::guard('Administrator')->user())
                <a href="{{ url('/logout') }}">Logout</a>
                @endif
            </div>
         </nav> 

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('script')
</body>
</html>
