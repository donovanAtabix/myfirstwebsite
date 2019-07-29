<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>.is-complete {text-decoration: line-through;}</style>

    <title>@yield('title')</title>

</head>

<body>


    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Donovan</a> </li>
        <li><a href="/projects/">Project</a></a> </li>
        <li><a href="/projects/create">Create</a> </li>
        <li> <a href="/contact">Contact</a> us to learn more.</li>
    </ul>

     @yield('content')
     @yield('body')

</body>

</html>
