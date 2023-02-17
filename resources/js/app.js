import.meta.glob(["../fonts/**", "../img/**"]);
import './bootstrap';
import Alpine from 'alpinejs';
  // import Swiper bundle with all modules installed  // import styles bundle
import slidersGeneral from './sliders/general';
import scrollSmooth from './scrollSmooth';
window.Alpine = Alpine;
Alpine.start();

const tabSelects = document.getElementById("tabs-work").childNodes? document.getElementById("tabs-work").childNodes : [];
const divSelected = document.querySelectorAll(".how-work-div");

// ---- corro los sliders
slidersGeneral();
//------

//------ Scroll smooth for
scrollSmooth();

// ------------------- tapbs for steps
const resetTabs = () => {
    tabSelects.forEach((tabb) => {
        if( tabb.classList != undefined) {
            if (tabb.classList.contains("active")){
                tabb.classList.remove("active");
            }
        }
    })
    divSelected.forEach((tabb) => {
        if( tabb.classList != undefined) {
            if (tabb.classList.contains("grid")){
                tabb.classList.remove("grid");
                tabb.classList.add("hidden");
            }
        }
    })
}

tabSelects.forEach((tab,i) => {
    tab.addEventListener('click', () => {
        resetTabs();
        // tab.classList.contains('active')? tab.classList.remove('active') : tab.classList.add('active');
        tab.classList.add('active');
        switch(i){
            case 1:
            divSelected[0].classList.remove('hidden');
            divSelected[0].classList.add('grid');
            break;
            case 3:
                divSelected[1].classList.remove('hidden');
                divSelected[1].classList.add('grid');
            break;
            case 5:
                divSelected[2].classList.remove('hidden');
                divSelected[2].classList.add('grid');
            break;
            case 7:
                divSelected[3].classList.remove('hidden');
                divSelected[3].classList.add('grid');
            break;
        }
        // divSelected[]
    });
});

// --------------------------------

