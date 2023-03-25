let formCountryState = () => {
    try {
        let selectStates = document.getElementById("selectState");
        let selecCountry = document.getElementById("cityEstate");

        if (selecCountry.value === "United States") {
            selectStates.classList.replace("hidden", "lg:grid");
        }
        selecCountry.addEventListener("change", (e) => {
            if (selecCountry.value === "United States") {
                console.log(selecCountry.value);
                selectStates.classList.replace("hidden", "lg:grid");
            } else {
                selectStates.classList.add("hidden");
            }
        });
    } catch (error) {
        console.log("no hay form que modificar");
    }
};

formCountryState();
