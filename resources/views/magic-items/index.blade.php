<x-app-layout>
  <div class="max-w-4xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-6">Magic Items</h1>

    @if (empty($items))
      <p class="text-gray-500">No magic items found.</p>

    @else
      <ul class="space-y-4">
        @foreach ($items as $item)
          <li class="p-4 bg-white rounded shadow">
            <h2 class="text-xl font-semibold">{{ $item['name'] ?? 'Unnamed Item' }}</h2>
            <p class="text-sm text-gray-600">
              {{ $item['desc'][0] ?? 'No description available.' }}
            </p>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</x-app-layout>
