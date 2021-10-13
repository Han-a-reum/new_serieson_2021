function SwiperBox1__init() {
  const swiper = new Swiper(".swiper-box-1 .swiper", {
    loop:true,
    speed : 1000,
    autoplay: {
      delay: 2800,
    },
  });
}

SwiperBox1__init();