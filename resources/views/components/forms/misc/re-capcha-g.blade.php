@php
    $gKey = config('reCapchaKey.public');
@endphp
<div class="g-recaptcha" data-sitekey="{{$gKey}}"></div>
