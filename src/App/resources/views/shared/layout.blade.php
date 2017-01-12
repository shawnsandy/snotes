<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Notes @yield('title') </title>
    <meta name="description" content="Summernote for laravel">
    <meta name="author" content="Shawn Sandy">
    <!-- Latest compiled and minified CSS -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    @stack('styles')
</head>

<body>
<header>
    <div class="layout">
        <div class="layout-center">
            <div class="container"  style="padding: 50px 0">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="text-capitalize">
                            <img src="/img/notes/notes@1x.png" alt="">
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
               <p><img src="/img/notes/notes-dark@0.5x.png" alt="Logo footer"></p>
                <p class="small attributions">Powered by LaravelPhp and Summertnote</p>
            </div>
        </div>
    </div>
</footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
@stack('scripts')
</html>
