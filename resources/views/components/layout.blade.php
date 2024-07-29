<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Home</title>
<style>
    body{
        background-color: white;
    }
    </style>
</head>
<body>
<div class="min-h-full">
 <x-navbar>{{ $title }}</x-navbar>

 
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     {{$slot}}
    </div>
  </main>
</div>
</body>
</html>