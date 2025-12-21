@props(["highlight" => false])  {{-- When accepting a prop value i.e highlight, we should first call the "@props([...])", passing in the name of the sent props value --}}

{{-- <div class="card"> --}}
    
{{-- or --}}

{{-- we apply a dynamic class styling, where we use a "@class()" directive, which takes in an array, where by if I need to condition a particular class style, I simply do this, i.e "@class['highlight' => $highlight]"; where the highlight in a string is the styling, while the highlight called like a variable, is the condition[which is always a boolean].  --}}
<div @class([ 'highlight' => $highlight, 'card' ])>
    {{-- slot is a global variable that represents wrapped children --}}
    {{ $slot }}
    {{-- "$attributes" is a dynamic global variable that gives access to passed attribute prop data, with a "get" method which allows you to then call on the said props  --}}
    {{-- <a href="{{ $attributes->get('href') }}" class="btn">  --}}

    {{-- or  --}}
    {{-- I can just say "attributes", and this outputs all the passed attribute props here --}}

    <a {{ $attributes }} class="btn"> 
        View Details
     </a>
</div>