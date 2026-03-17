<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neosets {{ $title ? "— $title" : ''}}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body>
  @auth
    <form class="bg-amber-300 flex justify-center items-center gap-4 p-4" action="logout" method="POST" x-data>
      @csrf
      <button class="btn-main" type="submit">Log Out</button>
      <p class="text-xl font-bold mt-2">You have {{number_format(Auth::user()->np)}} NP.</p>
      <p>
        Your cart has 
        <span x-text="$store.cart.count.toLocaleString()"></span> items totaling 
        <span x-text="$store.cart.total.toLocaleString()"></span> NP.
      </p>
      <livewire:purchase-button/>
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
  @livewireScriptConfig
</body>
</html>