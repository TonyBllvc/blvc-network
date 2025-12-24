<x-layout> 
    {{-- "x-" is what you start with for a component ui, then go ahead and call the name of the ui, "layout" like so i.e "x-layout" --}}
    <h1>
        Currently available list 
    </h1>
    
    <ul>
        @foreach ( $black as $values )
            <li> 
                {{-- "href" behaves like props,  while the "highlight" acts like a prop --}}
                {{-- 
                    Now note, for the "highlight", when you use highlight without the colo, whatever the value is will be treated as a string, even if you passed it suing double curly braces, but with the colon before the word, "highlight", it then treats it like a dynamic data, even with the curly braces.
                --}}
                {{-- The href, is an actual attribute, but highlight isn't, but rather considered a prop --}}
                {{-- <x-card href="/black/{{ $values['id'] }}" :highlight="$values['skill'] > 70"> 
                    <h3 class="text-slate-600">{{ $values["name"] }}</h3>    
                </x-card>     --}}
                {{-- <x-card href="/black/{{ $values->id }}" :highlight="$values['skill'] > 70">  --}}
                {{-- <x-card href="{{ route('black.show', ['id' => $values->id]) }}" :highlight="$values['skill'] > 70">  --}}
                <x-card href="{{ route('black.show', $values->id) }}" :highlight="$values['skill'] > 70"> 
                    <div>
                        <h3 class="text-slate-600">{{ $values->name }}</h3>
                        <p> {{ $values->platform->name }}</p> 
                    </div>   
                </x-card>    
            </li>            
        @endforeach
    </ul>
    
    {{-- This handles pagination --}}
    {{ $black->links() }}
    
</x-layout>