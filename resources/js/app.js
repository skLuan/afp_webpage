import.meta.glob(["../fonts/**", "../img/**"]);
import './bootstrap';
import Alpine from 'alpinejs';
  // import Swiper bundle with all modules installed  // import styles bundle
import slidersGeneral from './sliders/general';
import scrollSmooth from './scrollSmooth';
import "iconify-icon";
import "animate.css";
import "./forms";
window.Alpine = Alpine;
Alpine.start();


// ---- corro los sliders
slidersGeneral();
//------

//------ Scroll smooth for
scrollSmooth();



// -------------------------------- code for sidebar
const doc = document.documentElement;
let btnsideBar = document.getElementById('btn-sideBar');
let sideBar = document.getElementById('sideBar');
// Función para cerrar el sidebar
const closeSideBar = () => {
  sideBar.classList.toggle("-translate-x-full");
};

doc.addEventListener("click", (event) => {
    // Verificamos si el clic fue dentro del sidebar o en el botón de toggle
    const isClickInsideSideBar = sideBar.contains(event.target);
    const isClickOnToggleBtn = event.target === btnsideBar;

    // Si el clic no fue dentro del sidebar ni en el botón de toggle, cerramos el sidebar
    if (!isClickInsideSideBar && !isClickOnToggleBtn) {
        closeSideBar();
    }
});

btnsideBar.addEventListener('click', (e) => {
    sideBar.classList.toggle("-translate-x-full");
})

