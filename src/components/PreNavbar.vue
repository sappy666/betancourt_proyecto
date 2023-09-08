<template>
  <header class="header d-none d-md-block">
    <div class="top-bar bg-dark">
      <div class="container">
        <div class="row gx-0">
          <div
            class="col-lg-4 py-2 text-center text-lg-start d-none d-lg-flex align-items-center"
          >
            <p v-if="this.lang == 'es'" class="mb-0 text-sm">
              Horario de atención: Lun - Vie 9:00 - 18:00
            </p>
            <p v-if="this.lang == 'en'" class="mb-0 text-sm">
              Opening Hours: Mon - Fri 9:00 AM - 6:00 PM
            </p>
          </div>
          <div class="col-lg-8 text-end py-2 text-center text-lg-end">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="fw-normal text-sm reset-anchor" href="#!"
                  ><i class="fas fa-mobile me-2"></i>+56 2 2380 0530</a
                >
              </li>
              <li class="list-inline-item">|</li>
              <li class="list-inline-item">
                <a class="fw-normal text-sm reset-anchor" href="#!"
                  ><i class="fas fa-envelope me-2"></i
                  >contacto@betancourtabogados.cl</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
<script>
export default {
  name: "PreNavbar",
  data() {
    return {
      lang: document.documentElement.lang,
    };
  },
  beforeCreate() {
    document.documentElement.lang = "es";
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
};
</script>
<style scoped>
.top-bar {
  color: #afb6c3;
}
a {
  color: #647087;
  text-decoration: none;
}

a:hover {
  color: #a0a6b1;
  text-decoration: none;
}
</style>
