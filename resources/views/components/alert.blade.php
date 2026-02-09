@props([
    'type' =>'success',
    'message' =>''])
<div class="{{ $type === 'success' ?'success':'error'}}">
    {{$message}}
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

</div>