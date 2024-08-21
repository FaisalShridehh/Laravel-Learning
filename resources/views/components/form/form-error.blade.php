@props(['name'])
  @error($name)
    <p {{$attributes->merge(['class' => 'text-sm text-red-600 font-semibold'])}} >{{ $message }}</p>
  @enderror
