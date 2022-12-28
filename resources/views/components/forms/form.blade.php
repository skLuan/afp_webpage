        <form id="engineering" class="flex flex-col mx-auto py-5 px-16" action="{{ route('sendForm') }}" method="post">
            @csrf
            <label for="inputName" class="text-grey-light pl-1 border-none">Name</label>
            <input
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white"
                type="text" name="name" id="inputName">
            <label for="inputEmail" class="text-grey-light pl-1">Email</label>
            <input
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white"
                type="mail" name="email" id="inputEmail">
            <label for="inputPhone" class="text-grey-light pl-1">Phone</label>
            <input
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white"
                type="phone" name="phone" id="inputPhone">
            <label for="inputNotes" class="text-grey-light pl-1">Notes</label>
            <textarea
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none  bg-white"
                name="notes" id="inputNotes" cols="30" rows="10"></textarea>
            <button class="uppercase font-bold text-yellow bg-white-true w-40 py-1 my-16 mx-auto shadow-btn rounded"
                type="submit">send</button>
        </form>
