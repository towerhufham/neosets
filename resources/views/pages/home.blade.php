<x-layouts.app title="Home">
  <h1 class="w-full text-center text-xl">Welcome, {{ Auth::user()->name }}.</h1>
  <h2 class="w-full text-center text-md text-gray-300 italic">{{time()}}</h2>
  <div class="max-w-4xl mx-auto">
    <h2 class="text-xl font-bold text-center">For Sale:</h2>
    <div class="grid grid-cols-6 gap-4">
      @foreach ($offers as $offer)
        <livewire:item-for-sale :item="$offer->item" :price="$offer->price"/>
      @endforeach
    </div>
  </div>
</x-layouts.app>