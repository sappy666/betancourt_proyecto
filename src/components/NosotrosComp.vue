<template>
   <!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container" data-aos="fade-up">
         <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
               <img src="../assets/1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
               <h3>Nosotros</h3>
               <p class="texto-nosotros">
                  <b>Descubre</b> en nuestro <b>estudio jurídico</b> las soluciones legales más eficientes, respaldadas por un equipo multidisciplinario compuesto por abogados e ingenieros altamente capacitados. Nos enorgullece ofrecer una <b>asesoría empresarial personalizada</b> y destacarnos por nuestro sobresaliente desempeño profesional.<br><br>
                  Puedes confiar plenamente en nosotros para obtener soluciones legales confiables y altamente efectivas. En nuestro estudio jurídico, te ofrecemos una <b>defensa legal óptima</b> en situaciones legales específicas, brindándote soluciones <b>justas</b> y acordes a tus intereses. Valoramos la <b>comunicación cercana y permanente</b> con nuestros clientes, manteniéndolos <b>informados en todo momento</b> sobre los avances en sus casos. Confía en nuestro compromiso de proporcionarte una representación legal de calidad y estar a tu lado en cada paso del proceso. 
               </p>
               <!-- <ul>
                  <li><i class="bi bi-check-circle"></i> Defensa legal óptima en situaciones legales específicas.</li>
                  <li><i class="bi bi-check-circle"></i> Soluciones justas y acordes a tus intereses.</li>
                  <li><i class="bi bi-check-circle"></i> Comunicación cercana y permanente con nuestros clientes, manteniéndolos informados de los avances en sus casos.</li>
                  </ul> -->
            </div>
         </div>
      </div>
   </section>
   <!-- End About Section -->
</template>
<script>
   export default {
   name: 'NosotrosComp',
   }
</script>
<style scoped>
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
   font-weight: 700;
   margin: 0 0 20px 0;
   padding: 0;
   }
   /*--------------------------------------------------------------
   # About
   --------------------------------------------------------------*/
   section{
      background-color: #dadfe567;

   }
   .about .content h3 {
   font-weight: 600;
   font-size: 26px;
   }
   .about .content ul {
   list-style: none;
   padding: 0;
   }
   .about .content ul li {
   padding-bottom: 10px;
   }
   .about .content ul i {
   font-size: 20px;
   padding-right: 4px;
   color: #26547C;
   }
   .about .content .learn-more-btn {
   background: #26547C;
   color: #fff;
   border-radius: 50px;
   padding: 8px 25px 9px 25px;
   white-space: nowrap;
   transition: 0.3s;
   font-size: 14px;
   display: inline-block;
   }
   .about .content .learn-more-btn:hover {
   background: #26547C;
   color: #fff;
   }
   @media (max-width: 768px) {
   .about .content .learn-more-btn {
   margin: 0 48px 0 0;
   padding: 6px 18px;
   }
   }
   .texto-nosotros{
      text-align: justify;
      margin-right: 3rem;
   }
</style>
