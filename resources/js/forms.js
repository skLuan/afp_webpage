let formCountryState = () => {
    try {
        let selectStates = document.querySelectorAll(".selectState");
        let selecCountries = document.querySelectorAll(".countrySelect");

        selecCountries.forEach((selecCountry, i) => {
            if (selecCountry.value === "United States") {
                selectStates[i].classList.replace("hidden", "lg:grid");
            }
            selecCountry.addEventListener("change", (e) => {
                if (selecCountry.value === "United States") {
                    console.log(selecCountry.value);
                    selectStates[i].classList.replace("hidden", "lg:grid");
                } else {
                    console.log(selectStates[i]);
                    selectStates[i].classList.replace("lg:grid", "hidden");
                }
            });
        });
    } catch (error) {
        console.log("no hay form que modificar");
    }
};

let homeFormSelector = () => {
    let superContainer = document.getElementById("formsContainer");

    let selectorEng = document.getElementById("formSelectorEng");
    let selectorArmorFiber = document.getElementById("formSelectorArmorFiber");
    // --------------------- Contenedores
    let formContainers = document.querySelectorAll(".formContainer");
    let formContainerEngineering = document.getElementById("formEngineering");
    let formContainerArmorFiber = document.getElementById("formArmorFiber");

    // ------------------ Selector del form
    superContainer.addEventListener("click", (e) => {
        function toBase(node) {
            node.classList.replace("text-lg", "text-base");
            node.classList.replace("text-yellow", "text-grey-light");
        }
        function toSelect(node) {
            node.classList.replace("text-base", "text-lg");
            node.classList.replace("text-grey-light", "text-yellow");
        }
        if (e.target === selectorArmorFiber) {
            toSelect(selectorArmorFiber);
            toBase(selectorEng);

            formContainerArmorFiber.classList.remove("hidden");
            formContainerEngineering.classList.add("hidden");
        } else if (e.target === selectorEng) {
            toSelect(selectorEng);
            toBase(selectorArmorFiber);

            formContainerArmorFiber.classList.add("hidden");
            formContainerEngineering.classList.remove("hidden");
        }
    });
    // ------------------ Selector del form ------------------------------ Cierre
};

let detailedForm = () => {
    const form = document.getElementById("engineering");
    let selectors = form.querySelectorAll(".containerSelector");
    let containers = form.querySelectorAll(".formContainer");

    selectors.forEach((selector, i) => {
        selector.addEventListener("click", () => {
            containers[i].classList.toggle("hidden");
            selector.classList.contains("text-grey-light")
                ? selector.classList.replace("text-grey-light", "text-grey")
                : selector.classList.replace("text-grey", "text-grey-light");
        });
    });
};

formCountryState();
try {
    homeFormSelector();
} catch (error) {
    console.error(error);
}
try {
    detailedForm();
} catch (error) {}
