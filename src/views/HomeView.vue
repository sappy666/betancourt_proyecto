<template>
   <section id="hero" class="hero">
      <div class="info d-flex align-items-center">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 text-center">
                  <h2 data-aos="fade-down">Betancourt <span>Abogados</span></h2>
                  <p data-aos="fade-up">Somos un estudio jurídico formado por abogados e ingenieros, todos profesionales altamente calificados que buscan proporcionar soluciones eficientes y efectivas.</p>
                  <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Conócenos</a>
               </div>
            </div>
         </div>
      </div>
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
         <!-- <div class="carousel-item active" style="background-image: url(../assets/1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(../assets/2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(../assets/1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(../assets/1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(../assets/1.jpg)"></div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a> -->
      </div>
   </section>
   <!-- End Hero Section -->
   <CounterComp />
   <NosotrosComp />
   <ServiciosComp />
   <ClientesComp />
   <BlogComp />
   <ContactoComp />
</template>
<script>
   import CounterComp from "@/components/CounterComp.vue"
   import NosotrosComp from "@/components/NosotrosComp.vue"
   import ServiciosComp from "@/components/ServiciosComp.vue"
   import ClientesComp from "@/components/ClientesComp.vue"
   import BlogComp from "@/components/BlogComp.vue"
   import ContactoComp from "@/components/ContactoComp.vue"
   
   
   
    export default {
    name: "HomeView",
    components: {
   CounterComp,
    NosotrosComp,
    ServiciosComp,
    ClientesComp,
    BlogComp,
    ContactoComp,
   },
    data() {
     return {
       heroCarouselIndicators: '',
       heroCarouselItems: []
     };
    },
    mounted() {
     // Código para asignar los elementos
     let heroCarouselIndicators = '';
     let heroCarouselItems = document.querySelectorAll('#heroCarousel .carousel-item');
    
     heroCarouselItems.forEach((item, index) => {
       heroCarouselIndicators += `
         <li
           data-bs-target="#heroCarousel"
           data-bs-slide-to="${index}"
           ${index === 0 ? 'class="active"' : ''}
         ></li>
       `;
     });
    
     this.heroCarouselIndicators = heroCarouselIndicators;
     this.heroCarouselItems = heroCarouselItems;
    }
    };
</script>
<style scoped>
   h2,p{
      font-family: var(--font-primary);
   }
   .hero {
   overflow-x: hidden;
   padding: 0;
   background-image: url("../assets/2.jpg");
   background-size: cover;
   }
   .hero .info{
   backdrop-filter: blur(5px);
   margin-top: 2.5rem;
   }
   .hero .carousel {
   width: 100%;
   min-height: 100vh;
   padding: 0px 0;
   margin: 0px;
   position: relative;
   }
   .hero .carousel-item {
   position: absolute;
   inset: 0;
   background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
   overflow: hidden;
   z-index: 1;
   transition-duration: 0.4s;
   }
   .hero .carousel-item::before {
   content: "";
   background-color: rgba(0, 0, 0, 0.7);
   position: absolute;
   inset: 0;
   }
   .hero .info {
   position: absolute;
   inset: 0;
   z-index: 2;
   }
   @media (max-width: 768px) {
   .hero .info {
   padding: 0 50px;
   }
   }
   .hero .info h2 {
   color: #fff;
   margin-bottom: 30px;
   padding-bottom: 30px;
   font-size: 56px;
   font-weight: 700;
   position: relative;
   }
   .hero .info h2:after {
   content: "";
   position: absolute;
   display: block;
   width: 80px;
   height: 4px;
   background: var(--color-primary);
   left: 0;
   right: 0;
   bottom: 0;
   margin: auto;
   }
   @media (max-width: 768px) {
   .hero .info h2 {
   font-size: 36px;
   }
   }
   .hero .info p {
   color: rgba(255, 255, 255, 0.8);
   font-size: 18px;
   }
   .hero .info .btn-get-started {
   font-family: var(--font-primary);
   font-weight: 500;
   font-size: 16px;
   letter-spacing: 1px;
   display: inline-block;
   padding: 12px 40px;
   border-radius: 50px;
   transition: 0.5s;
   margin: 10px;
   color: #fff;
   background: var(--color-primary);
   border: 2px solid var(--color-primary);
   }
   .hero .info .btn-get-started:hover {
   background: var(--color-primary);
   }
   .hero .carousel-control-prev {
   justify-content: start;
   }
   @media (min-width: 640px) {
   .hero .carousel-control-prev {
   padding-left: 15px;
   }
   }
   .hero .carousel-control-next {
   justify-content: end;
   }
   @media (min-width: 640px) {
   .hero .carousel-control-next {
   padding-right: 15px;
   }
   }
   .hero .carousel-control-next-icon,
   .hero .carousel-control-prev-icon {
   background: none;
   font-size: 26px;
   line-height: 0;
   background: rgba(255, 255, 255, 0.2);
   color: rgba(255, 255, 255, 0.6);
   border-radius: 50px;
   width: 54px;
   height: 54px;
   display: flex;
   align-items: center;
   justify-content: center;
   }
   .hero .carousel-control-prev,
   .hero .carousel-control-next {
   z-index: 3;
   transition: 0.3s;
   }
   .hero .carousel-control-prev:focus,
   .hero .carousel-control-next:focus {
   opacity: 0.5;
   }
   .hero .carousel-control-prev:hover,
   .hero .carousel-control-next:hover {
   opacity: 0.9;
   }
   .btn-get-started{
   text-decoration: none;
   }
   .btn-get-started:hover{
   background-color: #2c214c;
   }
</style>
