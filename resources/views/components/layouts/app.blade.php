<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neosets {{ $title ? "— $title" : ''}}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @auth
    <div class="bg-amber-300 text-center p-4 mb-4">
      You are logged in!
    </div>
  @else
    <div class="bg-emerald-300 text-center p-4 mb-4">
      You should log in...
    </div>
  @endauth
  <main>
    {{ $slot }}
  </main>
</body>
</html>