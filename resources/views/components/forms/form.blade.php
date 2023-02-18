        <form id="engineering" name="engine" action="//javascript:;" onsubmit="//formGoing()"
            class="flex flex-col mx-auto py-10 px-16 lg:max-w-2xl">
            @csrf
            <label for="inputName" class="text-grey-light pl-1 border-none">Name</label>
            <input
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white"
                type="text" name="name" id="inputName">

                <label for="inputEmail" class="text-grey-light pl-1">Email</label>
            <input
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white border-none"
                type="email" name="email" id="inputEmail">

            <label for="inputPhone" class="text-grey-light pl-1">Phone</label>
            <input
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white border-none"
                type="tel" name="phone" id="inputPhone">

            <label for="inputNotes" class="text-grey-light pl-1">Notes</label>
            <textarea
                class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none  bg-white"
                name="notes" id="inputNotes" cols="30" rows="10"></textarea>
            <h3 id="formResponse" class="hidden mt-10 font-lemon text-lg text-grey">Thanks for your time! we wil reach
                soon!</h3>
            <button
                class="btn-sender uppercase font-bold text-yellow bg-white-true w-40 py-1 my-16 mx-auto shadow-btn rounded"
                type="submit">send</button>
        </form>
        <script>
            //--------------- Form sender ajax
            const form = document.getElementById("engineering");
            const formButton = document.getElementById("engineering").querySelector('.btn-sender');

            const formGoing = async () => {
                console.log('iniciando el envio de email ->');
                const inputs = document.getElementById('engineering').querySelectorAll('input');
                const values = [];
                // --- lectura y guaramos en js los valores
                inputs.forEach(input => {
                    let value = input.value;
                    if (value != '') {
                        values.push(value);
                    }
                });
                values.push(document.getElementById('engineering').querySelector('textarea').value);

                console.log(values);

                // await fetch("{{ route('sendForm', []) }}", {
                await fetch("{{ route('sendForm', ['name' => 'nombre', 'email' => 'jpMatutino@gmail.com', 'phone' => 3054396542, 'message' => 'asfjrngjrbg'])}}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify("{'name': 'nombre', 'email': 'jpMatutino@gmail.com', 'phone': 3054396542, 'message': 'asfjrngjrbg' }"),
                }).then((msg) => {
                    // console.log(msg);

                    document.getElementById('formResponse').classList.remove('hidden');
                    document.getElementById('engineering').querySelector('textarea').value = '';
                    inputs.forEach(input => {
                        input.value = '';
                    });

                }).catch((err) => {

                });
            }
            // form.setAttribute('action',formGoing)
            // formButton.addEventListener('click', (e) => {
            //     e.preventDefault();
            //     console.log('yikeees!!!');
            // });
        </script>
