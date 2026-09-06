import "bootstrap";
import.meta.glob(["../fonts/**"]);
import Swiper from "swiper";
import "swiper/css";

import { Navigation, Pagination } from "swiper/modules";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".slider-wrapper").forEach((wrapper) => {
        const swiperEl = wrapper.querySelector(".swiper");

        new Swiper(swiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                el: wrapper.querySelector(".swiper-pagination"),
                clickable: true,
            },
            navigation: {
                nextEl: wrapper.querySelector(".swiper-button-next"),
                prevEl: wrapper.querySelector(".swiper-button-prev"),
            },
        });
    });
});
