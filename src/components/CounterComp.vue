<template>
   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts section-bg">
      <div class="container">
         <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
               <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
               <p>Años de trayectoria</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
               <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
               <p>Casos</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
               <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
               <p>Clientes satisfechos</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
               <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
               <p>Trainers</p>
            </div>
         </div>
      </div>
   </section>
   <!-- End Counts Section -->
</template>
<script>
  export default {
  name: 'CounterComp',
  mounted() {
    // Aquí inicias el contador cuando el componente se monta en el DOM
    this.initPureCounter();
  },
  methods: {
    initPureCounter() {
      // Aquí colocas el código para iniciar Pure Counter
      // Puedes mantener el código existente o implementar la funcionalidad de contador deseada utilizando métodos y datos de Vue
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
   /*--------------------------------------------------------------
   # Counts
   --------------------------------------------------------------*/
   .counts {
   padding: 30px 0;
   }
   .counts .counters span {
   font-size: 48px;
   display: block;
   color: #5fcf80;
   font-weight: 700;
   }
   .counts .counters p {
   padding: 0;
   margin: 0 0 20px 0;
   font-family: "Raleway", sans-serif;
   font-size: 15px;
   font-weight: 600;
   color: #37423b;
   }
</style>
