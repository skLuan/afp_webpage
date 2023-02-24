export default () => {
    try {
        const scrollToFibers = document.querySelector('a[href="#fibers"]');

        scrollToFibers.addEventListener("click", (event) => {
            // Evita que el enlace haga scroll hacia arriba por defecto
            event.preventDefault();
            // Encuentra el elemento con el id "fibers"
            const target = document.querySelector("#fibers");
            console.log(target);
            // Usa el método scrollIntoView para hacer scroll hacia abajo hasta el elemento
            target.scrollIntoView({ behavior: "smooth" });
        });

        const scrollToEngineering = document.querySelector(
            'a[href="#fiber-engineering"]'
        );

        scrollToEngineering.addEventListener("click", (event) => {
            // Evita que el enlace haga scroll hacia arriba por defecto
            event.preventDefault();
            // Encuentra el elemento con el id "fibers"
            const target = document.querySelector("#fiber-engineering");
            console.log(target);
            // Usa el método scrollIntoView para hacer scroll hacia abajo hasta el elemento
            target.scrollIntoView({ behavior: "smooth" });
        });
    } catch (error) {}
};
