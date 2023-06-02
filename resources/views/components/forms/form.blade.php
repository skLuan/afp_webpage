<form id="ArmorFiberGenForm" name="engine" action="sendBasicForm" method="POST" onsubmit=""
    class="flex flex-col mx-auto py-10 px-10 lg:max-w-2xl">
    @csrf
    <x-forms.parts.gen-info></x-forms.parts.gen-info>

    <x-forms.parts.notes></x-forms.parts.notes>
    <div class="g-recaptcha" data-sitekey="6LdZHV0mAAAAAIBLyjqCdsZuHrNuzy82wuAfaFNX"></div>

    <h3 id="formResponse" class="mt-10 font-lemon text-lg text-grey">
        @if (session('success'))
            {{ __('Thanks for your time! we wil reach soon!') }}
        @elseif(session('error'))
            {{ __('Ups! We cant be sure you´re a human') }}
        @endif
    </h3>
    <button class="btn-sender uppercase font-bold text-yellow bg-white-true w-40 py-1 my-16 mx-auto shadow-btn rounded"
        type="submit">{{ __('Send') }}</button>
</form>
