{{-- --------------------------------------------------- --}}
{{-- for display validation error message for the given field --}}
{{-- --------------------------------------------------- --}}
@props(['name'])
@error($name)
    <p class="text-xs text-red-500 font-semibold mx-2 mt-1">{{ $message }}</p>
@enderror
