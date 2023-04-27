<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">

    <form action="/choice"  method="POST" >
    @csrf
    <input type="hidden" name="machineNumber" value="{{ $machineNumber }}">
    <input type="hidden" name="tries" value="{{ $tries }}">
    <a><button type="submit" class="btn btn-success" >Try again</button></a>
    </form>
    </body>
</html>