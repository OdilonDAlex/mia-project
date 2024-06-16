@vite('resources/css/input.css')

<div class="input-container">
    @if($label != "")
        <label 
            for="{{ $id }}"
            >{{ $label }}
        </label>
    @endif
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        value="{{ $value }}"
    >
</div>