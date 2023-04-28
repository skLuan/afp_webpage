import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export default () => {
    const swiper = new Swiper(".swiper");

    const swiperThumb = new Swiper(".swiper-thumb", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 4,
        centeredSlides: true,
        freeMode: false,
        breakpoints: {
            1000: {
                spaceBetween: 20,
                slidesPerView: 6,
                direction: "vertical",
                autoHeight: true,
            },
        },
    });

    var swiperbigThumb = new Swiper(".swiper-thumb-big", {
        loop: true,
        spaceBetween: 20,
        thumbs: {
            swiper: swiperThumb,
        },
    });
    const steps = ["Materials", "Design", "Aplication", "Follow up"];
    const stepsEs = ["Materiales", "Diseño", "Aplicación", "Seguimiento"];
    // Obtener la URL actual
    var currentUrl = window.location.href;
    let theLocale = () => {
        let st;
        // Verificar si la URL contiene "es"
        currentUrl.includes("/es")? st = stepsEs : st = steps;
        return st;
    };

    const swiperSteps = new Swiper(".swiperSteps", {
        loop: true,
        autoHeight: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return (
                    '<button class="!cursor-pointer text-lg text-grey-light ' +
                    className +
                    '">' +
                    (index + 1) +
                    " " +
                    theLocale()[index] +
                    "</button>"
                );
            },
        },
    });
};
