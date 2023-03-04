<!doctype html>
<html lang="en">
<head>
{{-- font link --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;1,100;1,200&display=swap" rel="stylesheet">
{{-- finish font link --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ospeopata</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-vh-100 bg_img text-center">
      <x-navbar />
      {{$slot}}
    </div>
<x-footer/>  
</body>
</html>
    