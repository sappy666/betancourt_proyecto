<template>
  <div class="contador py-5 text-white d-none d-md-block">
    <div class="container">
      <div class="row gy-4 justify-content-center">
        <div class="col-lg-3 col-md-6">
          <div class="d-flex align-items-center">
            <h6 id="count-casos" class="h1 mb-0">+100</h6>
            <p
              v-if="this.lang == 'es'"
              class="ms-3 flex-grow-1 text-uppercase mb-0"
            >
              Casos de éxito
            </p>
            <p
              v-if="this.lang == 'en'"
              class="ms-3 flex-grow-1 text-uppercase mb-0"
            >
              Success Cases
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex align-items-center">
            <h6 id="count-clientes" class="h1 mb-0">+120</h6>
            <p
              v-if="this.lang == 'es'"
              class="ms-3 flex-grow-1 text-uppercase mb-0"
            >
              Clientes felices
            </p>
            <p
              v-if="this.lang == 'en'"
              class="ms-3 flex-grow-1 text-uppercase mb-0"
            >
              Happy Clients
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex align-items-center">
            <h6 id="count-annos" class="h1 mb-0">+12</h6>
            <p
              v-if="this.lang == 'es'"
              class="ms-3 flex-grow-1 text-uppercase mb-0"
            >
              Años de experiencia
            </p>
            <p
              v-if="this.lang == 'en'"
              class="ms-3 flex-grow-1 text-uppercase mb-0"
            >
              Years of Experience
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "CounterComp",
  data() {
    return {
      lang: document.documentElement.lang,
    };
  },
  created() {
    if (this.lang === "") {
      this.lang = "es";
    }
  },
  mounted() {
    window.addEventListener("click", (e) => {
      if (e.target.id === "btn-lang") {
        this.lang = document.documentElement.lang;
      }
    });
  },
  methods: {},
};
</script>
<style scoped>
.contador {
  background-color: #273050;
}
</style>
