<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/themes') }}/{{ session('theme', 'classic') }}/styles.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico"/>
    <title>@yield('title', 'Default Title')</title>

</head>

<body>
    <nav>
        <input type="checkbox" id="a">
        <label for="a"></label>
        <div class="animation start-home"></div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
<script>
    const input = document.querySelector('input')
    input.checked = window.location.pathname == '/contacts'
    input.addEventListener('change', function (e) {
        if (e.target.checked) {
            window.location.href = '/contacts'
        } else {
            window.location.href = '/'
        }
    })
</script>

</html>
</script>

</html>