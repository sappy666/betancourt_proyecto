<template>
   <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-header">
            <h2>Servicios</h2>
            <p>Revisa nuestra lista de servicios, selecciona el que mas se acomode a tu necesidad</p>
         </div>
         <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
               <div class="service-item  position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/library.png" alt="" srcset="">
                  </div>
                  <h2>Contratación Pública</h2>
                  <div>
                     <p>Nuestro equipo está conformado por un grupo de abogados e ingenieros especializados en Contratación Pública. A su vez contamos con vasta experiencia en portal mercadopublico.cl y chilecompra.cl.</p>
                  </div>
                  <div class="mt-auto">
                     <router-link class="readmore" to="/AreasView">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/socialize.png" alt="" srcset="">
                  </div>
                  <h2>Asesoría en postulación</h2>
                  <div>
                     <p>Nuestro plan te ayuda a evitar errores comunes en las licitaciones públicas, optimizando tus posibilidades de adjudicación..</p>
                  </div>
                  <div class="mt-auto">
                     <router-link class="readmore" to="/AreasView">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/law.png" alt="" srcset="">
                  </div>
                  <h2>Defensa Proveedor/Contratista</h2>
                  <p>Especializados en la defensa de contratistas y proveedores del Estado a través del Mercado Público, protegemos sus derechos en una relación comercial desigual, brindando conocimientos técnicos y jurídicos especializados.</p>
                  <div class="mt-auto">
                     <router-link class="readmore" to="/AreasView">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/gavel.png" alt="" srcset="">
                  </div>
                  <h2>Tribunal Contratación Pública</h2>
                  <p>Estudio jurídico especializado en tramitación eficiente y exitosa ante el Tribunal de Contratación Pública. Nuestras oficinas ubicadas cerca del Tribunal garantizan un proceso judicial fluido y ágil.</p>
                  <div class="mt-auto">
                     <router-link class="readmore" to="/AreasView">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/diagram.png" alt="" srcset="">
                  </div>
                  <h2>Gestión de Negocios</h2>
                  <p>Brindamos asesoría continua a personas jurídicas y naturales, ofreciendo servicios integrales en negociación, puesta en marcha, desarrollo y cierre de negocios. Creamos contratos personalizados para satisfacer las necesidades de cada cliente.</p>
                  <div class="mt-auto">
                     <router-link class="readmore" to="/AreasView">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/construction-and-tools.png" alt="" srcset="">
                  </div>
                  <h2>Derecho Laboral</h2>
                  <p>Nuestros abogados son expertos en litigación laboral ejerciendo día a día la defensa frente a los distintos Tribunales del país de los intereses de su representado.</p>
                  <div class="mt-auto">
                     <router-link class="readmore" to="/AreasView">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
         </div>
      </div>
   </section>
   <!-- End Services Section -->
</template>
<script>
   export default {
     name: "ServiciosComp",
     }
</script>
<style scoped>
   #services{
      scroll-margin: 30px;
   }
   .services .service-item {
      padding: 40px;
      background: #fff;
      height: 100%;
   }
   .services .service-item .icon, .services .service-item img {
      width: 48px;
      height: 48px;
      position: relative;
      margin-bottom: 50px;
   }
   .services .service-item .icon i, .services .service-item .icon img{
      color: var(--color-secondary);
      font-size: 40px;
      transition: ease-in-out 0.3s;
      z-index: 2;
      position: relative;
      line-height: 1.8;
   }
   .services .service-item .icon:before {
      position: absolute;
      content: "";
      height: 100%;
      width: 100%;
      background: #f0f1f2;
      border-radius: 50px;
      z-index: 1;
      top: 10px;
      right: -15px;
      transition: 0.3s;
   }
   .services .service-item h2 {
      color: var(--color-default);
      font-weight: 700;
      margin: 0 0 20px 0;
      padding-bottom: 8px;
      font-size: 22px;
      position: relative;
      display: inline-block;
      border-bottom: 4px solid #ebebed;
      transition: 0.3s;
   }
   .services .service-item p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
   }
   .services .service-item .readmore {
      margin-top: 15px;
      display: inline-block;
      color: var(--color-primary);
   }
   .services .service-item:hover .icon:before {
      background: rgba(155, 159, 213, 0.389);
   }
   .services .service-item:hover h2 {
      border-color: var(--color-primary);
   }
</style>
