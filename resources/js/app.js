import.meta.glob(["../fonts/**", "../img/**"]);
import './bootstrap';
import Alpine from 'alpinejs';
  // import Swiper bundle with all modules installed  // import styles bundle
import slidersGeneral from './sliders/general';
import scrollSmooth from './scrollSmooth';
import "iconify-icon";
window.Alpine = Alpine;
Alpine.start();


// ---- corro los sliders
slidersGeneral();
//------

//------ Scroll smooth for
scrollSmooth();


// --------------------------------

