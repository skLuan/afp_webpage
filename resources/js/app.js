import.meta.glob(["../fonts/**", "../img/**", "../php/**"]);
import './bootstrap';
import Alpine from 'alpinejs';
  // import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
  // import styles bundle
  import 'swiper/css/bundle';

window.Alpine = Alpine;
Alpine.start();

const swiper = new Swiper('.swiper');

const tabSelects = document.getElementById("tabs-work").childNodes;
const divSelected = document.querySelectorAll(".how-work-div");
console.log(divSelected);
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
    console.log(tab);
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
