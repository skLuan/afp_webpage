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
    });

    var swiperbigThumb = new Swiper(".swiper-thumb-big", {
        loop: true,
        spaceBetween: 20,
        thumbs: {
            swiper: swiperThumb,
        },
    });

    const swiperSteps = new Swiper(".swiperSteps", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return (
                    '<button class="!cursor-pointer text-lg text-grey-light ' + className +
                    '">' +
                    "Step" +
                    (index + 1) +
                    "</button>"
                );
            },
        },
    });
};
