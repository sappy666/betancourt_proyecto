<template>
   <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
         <div class="section-header row justify-content-center pb-3">
            <h2>QUÉ HACEMOS</h2>
            <!-- <p>Revisa nuestra lista de servicios, selecciona el que mas se acomode a tu necesidad</p> -->
         </div>
         <div class="container contratacion">
            <div class="row justify-content-center">
            <h3 class="text-center">Contratación pública</h3>
            <p class="">La contratación pública es el proceso mediante la cual el Estado
               de Chile adquiere los bienes y servicios que requiere para su funcionamiento y la
               satisfacción de sus necesidades, planes y programas. El Estado es el comprador y los
               privados los vendedores. Esta labor, la desarrolla a través de 4 modalidades: Licitaciones
               públicas, Convenio Marco, Trato Directo y Licitaciones Privadas.<br><br>
               El lugar de encuentro de esta oferta y demanda es Mercado Público. Ecosistema que se
               desarrolla en una plataforma digital que es, hoy por hoy, el lugar donde más transacciones
               comerciales -tanto en cantidad o volumen de operaciones, como en cuantía- se realizan
               en el mercado nacional. En el año 2022 se llevaron a cabo 1.809.592 operaciones por
               $15.023 millones USD.<br><br>
               Día a día, tanto inversionistas nacionales como extranjeros, concurren a Mercado Público
               a ofrecer servicios y productos.
               El sistema se sustenta en principios de derecho público que buscan resguardar la igualdad
               de los oferentes, la libre competencia, la transparencia, como ejes fundamentales del
               mercado, con el objeto de promover una mayor participación de personas jurídicas
               nacionales y extranjeras en este mercado.<br><br>
               Añadir que el sistema de mercado público es perfectible, sin embargo funciona, y a
               nuestro juicio y experiencia, funciona cada vez mejor. <b>El Estado de Chile cumple y paga.</b></p>
            </div>
         </div>
         <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
               <div class="service-item  position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/library.png" alt="" srcset="">
                  </div>
                  <h2>Asesoría en Compras públicas</h2>
                  <div> 
                     <p>Maximizamos tus posibilidades de acceder de nuevos negocios con nuestra asesoría para la participación en Mercado Público, convirtiéndonos en un recurso humano altamente calificado más de tu empresa.</p>
                  </div>
                  <div class="">
                     <router-link class="readmore" to="/AreasView#contratacion">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/gavel.png" alt="" srcset="">
                  </div>
                  <h2>Reclamación y defensa de adjudicación</h2>
                  <p>Analizamos
                     minuciosamente el proceso de evaluación y adjudicación para
                     detectar cualquier ilegalidad y/o arbitrariedad que pueda ser impugnada. Así como también, defendemos la adjudicación de nuestros clientes en caso de que ésta pretenda ser revocada o invalidada por un tercero.</p>
                  <div class="">
                     <router-link class="readmore" to="/AreasView#reclamacion">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/gavel.png" alt="" srcset="">
                  </div>
                  <h2>Asesoría en la ejecución</h2>
                  <p>Te asesoramos durante la ejecución del contrato, defendiéndote en la aplicación de multas, cumplimientos de estados de pago, término anticipado de contrato y cualquier otra eventualidad que se pueda traducir en un menoscabo económico para la empresa.</p>
                  <div class="">
                     <router-link class="readmore" to="/AreasView#ejecucion">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/law.png" alt="" srcset="">
                  </div>
                  <h2>Cobranza Administrativa</h2>
                  <p>Facilitamos la recuperación de capital e intereses adeudados por los mandantes públicos a nuestros clientes sin la necesidad de judicializar los procesos de cobranza mediante un método eficiente y eficaz.</p>
                  <div class="">
                     <router-link class="readmore" to="/AreasView#cobranza">Leer más</router-link>
                  </div>
               </div>
            </div>
            <!-- End Service Item -->
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
               <div class="service-item position-relative">
                  <div class="icon">
                     <img src="../assets/iconos/diagram.png" alt="" srcset="">
                  </div>
                  <h2>Asesoría Estratégica</h2>
                  <p>Nos adaptamos a tus necesidades.Cuéntanos tu problema y juntos buscaremos las mejores opciones para solucionarlo.</p>
                  <div class="">
                     <router-link class="readmore" to="/AreasView#estrategica">Leer más</router-link>
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
   .contratacion{
      margin-bottom: 5rem;
   }
</style>
