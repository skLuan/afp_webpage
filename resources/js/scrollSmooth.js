export default () => {
    try {
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();

                // Obtener el destino del enlace
                const target = document.querySelector(
                    this.getAttribute("href")
                );

                // Hacer scroll suave hacia el destino
                target.scrollIntoView({
                    behavior: "smooth",
                });
            });
        });
    } catch (error) {}
};
