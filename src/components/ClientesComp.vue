<template>
   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="../assets/Clientes/1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/7.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/8.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/9.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/10.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/11.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/12.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/13.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/14.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/15.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/Clientes/16.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

</template>
<script>
import Swiper from 'swiper';

export default {
  name: 'ClientesComp',
  mounted() {
    this.initSwiper();
  },
  methods: {
    initSwiper() {
      new Swiper('.clients-slider .swiper-container', {
        speed: 400,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.clients-slider .swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          480: {
            slidesPerView: 3,
            spaceBetween: 60
          },
          640: {
            slidesPerView: 4,
            spaceBetween: 80
          },
          992: {
            slidesPerView: 6,
            spaceBetween: 120
          }
        }
      });
    }
  }
};
</script>
<style scoped>
   h2,p{
   font-family: "Montserrat", sans-serif;
   }

   body {
   background: #fff;
   color: #666666;
   }
   a {
   color: #26547C;
   transition: 0.5s;
   text-decoration: none;
   }
   a:hover,
   a:active,
   a:focus {
   color: #26547C;
   outline: none;
   text-decoration: none;
   }
   p {
   padding: 0;
   margin: 0 0 30px 0;
   }
   h1,
   h2,
   h3,
   h4,
   h5,
   h6 {
   font-family: "Montserrat", sans-serif;
   font-weight: 400;
   margin: 0 0 20px 0;
   padding: 0;
   }
.clients {
  padding-top: 20px;
}

.clients .swiper-slide img {
  opacity: 0.5;
  transition: 0.3s;
  filter: grayscale(100);
}

.clients .swiper-slide img:hover {
  filter: none;
  opacity: 1;
}

.clients .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.clients .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  background-color: #ddd;
}

.clients .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffc451;
}
</style>
