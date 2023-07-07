<template>
 <div class="contador py-5 text-white">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">+50</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Casos de éxito</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">+100</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Clientes felices </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">+15</h6>
                <p class="ms-3 flex-grow-1 text-uppercase mb-0">Nuevos clientes cada mes</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">+13</h6>
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
      // Aquí colocas el código para iniciar Pure Counter
      // Puedes mantener el código existente o implementar la funcionalidad de contador deseada utilizando métodos y datos de Vue
    }
  }
};
</script>
<style scoped>
.contador{
   background-color: #273050;
}
</style>
