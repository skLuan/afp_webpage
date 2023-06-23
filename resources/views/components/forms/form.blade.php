<form id="ArmorFiberGenForm" name="engine" action="sendBasicForm" method="POST" onsubmit=""
    class="flex flex-col px-10 py-10 mx-auto lg:max-w-2xl">
    @csrf
    <x-forms.parts.gen-info></x-forms.parts.gen-info>

    <x-forms.parts.notes></x-forms.parts.notes>
    <div class="g-recaptcha" data-sitekey="{{env('RECAPCHA_SITE_KEY')}}"></div>

    <h3 id="formResponse" class="mt-10 text-lg font-lemon text-grey">
        @if (session('success'))
            {{ __('Thanks for your time! we wil reach soon!') }}
        @elseif(session('error'))
            {{ __('Ups! We cant be sure you´re a human') }}
        @endif
    </h3>
    <button class="w-40 py-1 mx-auto my-16 font-bold uppercase rounded btn-sender text-yellow bg-white-true shadow-btn"
        type="submit">{{ __('Send') }}</button>
</form>
