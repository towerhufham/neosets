<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neosets {{ $title ? "— $title" : ''}}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @auth
    <form class="bg-amber-300 text-center p-4" action="logout" method="POST">
      @csrf
      <button class="btn-main" type="submit">Log Out</button>
    </form>
  @else
    <div class="bg-amber-300 flex justify-center items-center gap-4 p-4">
      <a class="btn-main" href="/login">Log In</a>
      <a class="btn-main" href="/register">Register</a>
    </div>
  @endauth
  <main>
    {{ $slot }}
  </main>
</body>
</html>