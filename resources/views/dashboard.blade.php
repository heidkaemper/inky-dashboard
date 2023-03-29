<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main>
        <h1>Package Downloads</h1>

        @foreach ($packages as $package)
            {{ $package->short_name }}<br>
        @endforeach
    </main>
</body>

</html>
