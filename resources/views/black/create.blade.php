<x-layout>

    <form action="{{ route('black.store') }}" method="POST">
        @csrf 
         {{-- "cross site request forgery" token --}}

        <h2>Create a Person</h2>
    
        <!-- Person Name -->
        <label for="name">Person Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          {{-- "old()" is a Laravel helper function that retrieves the value of a form field from the previous request, useful for repopulating forms after validation errors --}}
          value="{{ old('name') }}" 
          required
        >
    
        <!-- Person Strength -->
        <label for="skill">Person Strength (0-100):</label>
        <input 
          type="number" 
          id="skill" 
          name="skill" 
          value="{{ old('skill') }}"  
          required
        >
      
        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio" 
          name="bio" 
          required
        > {{ old('bio') }}</textarea>
    
        <!-- select a person -->
        <label for="platform_id">Person:</label>
        <select id="platform_id" name="platform_id" required>
          <option value="" disabled selected>Select a person</option>
          @foreach ($platforms as $platform)
            <option value="{{ $platform->id }}" {{ old('platform_id') == $platform->id ? 'selected' : '' }}>{{ $platform->name }}</option>
              
          @endforeach
        </select>
      
        <button type="submit" class="btn mt-4">Create Person</button>
      
        <!-- validation errors -->
        {{-- Laravel validation errors sends a default "error" variable message --}}
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        @endif
        
    </form>
</x-layout>