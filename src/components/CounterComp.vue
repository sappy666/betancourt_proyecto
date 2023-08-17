<template>
 <div class="contador py-5 text-white d-none d-md-block">
        <div class="container">
          <div class="row gy-4  justify-content-center">
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 id="count-casos" class="h1 mb-0">+100</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Casos de éxito</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 id="count-clientes" class="h1 mb-0">+120</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Clientes felices </p>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 id="count-nuevos" class="h1 mb-0">+15</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Nuevos clientes cada mes</p>
              </div>
            </div> -->
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 id="count-annos" class="h1 mb-0">+12</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Años de experiencia </p>
              </div>
            </div>
          </div>
        </div>
      </div>
</template>
<script>
  export default {
  name: 'CounterComp',

  mounted() {
    this.initPureCounter();
  },
  methods: {
    initPureCounter() {
      // let maxCasos = 100;
      // let currentCasos = 0;
      // const countCasos = document.getElementById("count-casos");
      // while(currentCasos <= maxCasos){
        // setInterval(()=>{
        //   countCasos.innerHTML = '+' + currentCasos;
        // }, 1000);
        // currentCasos++;
      // }
    }
  }
};
</script>
<style scoped>
.contador{
   background-color: #273050;
}
</style>
