<x-layout>

    <h2> {{ $black->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill Level:</strong> {{ $black->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $black->bio }}</p>
    </div>
    

    {{-- platform info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
      <h3>Dojo Information</h3>
      <p><strong>Dojo name:</strong> {{ $black->platform->name }}</p>
      <p><strong>Location:</strong> {{ $black->platform->location }}</p>
      <p><strong>About the Dojo:</strong></p>
      <p>{{ $black->platform->description }}</p>
    </div>
  
</x-layout>