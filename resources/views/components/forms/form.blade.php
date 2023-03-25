<form id="ArmorFiberGenForm" name="engine" action="sendBasicForm" method="POST" onsubmit="//formGoing()"
    class="flex flex-col mx-auto py-10 px-10 lg:max-w-2xl">
    @csrf
    <x-forms.parts.gen-info></x-forms.parts.gen-info>

    <x-forms.parts.notes></x-forms.parts.notes>

    <h3 id="formResponse" class="hidden mt-10 font-lemon text-lg text-grey">Thanks for your time! we wil reach
        soon!</h3>
    <button class="btn-sender uppercase font-bold text-yellow bg-white-true w-40 py-1 my-16 mx-auto shadow-btn rounded"
        type="submit">send</button>
</form>
