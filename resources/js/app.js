import.meta.glob(["../fonts/**, ../img/**"]);
import './bootstrap';
import Alpine from 'alpinejs';
  // import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
  // import styles bundle
  import 'swiper/css/bundle';

window.Alpine = Alpine;
Alpine.start();

const swiper = new Swiper('.swiper');
