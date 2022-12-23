import.meta.glob(["../fonts/**", "../img/**"]);
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

const resetTabs = () => {
    tabSelects.forEach(tab => {
    // if (tab.classList.contains("active")){
    //     tab.classList.remove("active");
    // }
    console.log(tab.classList);
    })
}

tabSelects.forEach(tab => {
    tab.addEventListener('click', () => {
        resetTabs();
        // tab.classList.contains('active')? tab.classList.remove('active') : tab.classList.add('active');
        tab.classList.add('active');
    });
});
