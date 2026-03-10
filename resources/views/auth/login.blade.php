<x-layouts.app title="Login">
  <h1 class="w-full text-center text-xl">Let's get you all logged in bruv!!!!!!</h1>
  <h2 class="w-full text-center text-md text-gray-300 italic">{{time()}}</h2>

  <form class="max-w-4xl bg-amber-100 rounded-3xl p-7 mx-auto" action="/login" method="POST">
    @csrf
    <div class="w-full justify-between flex">
      <div class="flex flex-col items-center justify-center mb-4">
        <label for="username">Username:</label>
        <input class="bg-white p-1 rounded-md border border-black" name="name" type="text"/>
      </div>
      <div class="flex flex-col items-center justify-center">
        <label for="password">Password:</label>
        <input class="bg-white p-1 rounded-md border border-black" name="password" type="password"/>
      </div>
    </div>
    <button class="bg-amber-400 rounded-lg shadow-lg p-2 cursor-pointer" type="submit">Submit</button>
  </form>
  <p class="text-red-500">{{ $errors }}</p>
</x-layouts.app>