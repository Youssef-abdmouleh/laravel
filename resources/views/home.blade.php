<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(entrypoints: ['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @uppercase('larabel blade custom directive');
    <hr>
    <x-alert type="success" message="Operation reussie"/>
    <!-- <h1>Welcome {!!$name!!} to the Home Page</h1> -->
    <h1>Welcome {{ $name }} to the Home Page</h1>
    <p>This is the main landing page of the application.</p>
    <p>Today is {{ date('l, H:i:s') }}</p>
    <!-- <p>Today is {{ date('a||c||d||e||g||h||i||j||l||m||n||o||p||r||s||t||u||v||w||x||y||z') }}</p> -->
    <!-- <p>Today is {{ date('A||B||D||F||G||H||I||L||M||N||O||P||S||T||U||W||X||Y||Z') }}</p> -->
    
</body>
</html>