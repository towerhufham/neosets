<x-layouts.app title="Home">
  <h1 class="w-full text-center text-xl">Welcome, {{ Auth::user()->name }}.</h1>
  <h2 class="w-full text-center text-md text-gray-300 italic">{{time()}}</h2>
  <div class="max-w-4xl mx-auto">
    <h2 class="text-xl font-bold text-center">For Sale:</h2>
    <div class="grid grid-cols-6 gap-4">
      @foreach ($offers as $offer)
        <div class="flex flex-col justify-center items-center">
          <img 
          class="border border-blue-500"
          src="https://images.neopets.com/items/{{$offer->item->img_name}}.gif" 
          alt="{{$offer->item->name}}"/>
          <p class="font-bold font-serif text-center">{{$offer->item->name}}</p>
          <p class="text-gray-500">{{number_format($offer->price)}} NP</p>
          @if ($offer->item->rarity === 100)
            <p class="text-amber-600 font-bold">(MEGA RARE)</p>
          @elseif ($offer->item->rarity === 99)
            <p class="text-green-600 font-bold">(ultra rare)</p>
          @elseif ($offer->item->rarity >= 95)
            <p class="text-green-600 font-bold">(super rare)</p>
          @elseif ($offer->item->rarity >= 90)
            <p class="text-green-600 font-bold">(very rare)</p>
          @elseif ($offer->item->rarity >= 85)
            <p class="text-green-600 font-bold">(rare)</p>
          @elseif ($offer->item->rarity >= 75)
            <p class="text-green-600 font-bold">(uncommon)</p>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</x-layouts.app>