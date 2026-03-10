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
    <!-- this forms is a good place to try htmx / alpine-ajax -->
    <form class="bg-amber-300 text-center p-4" action="logout" method="POST">
      @csrf
      <button type="submit">You are logged in!</button>
    </form>
  @else
    <div class="bg-emerald-300 text-center p-4">
      <a href="/login">You should log in...</a>
    </div>
  @endauth
  <main>
    {{ $slot }}
  </main>
</body>
</html>