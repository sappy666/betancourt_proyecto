<template>
  <section id="clients" class="clients">
    <section class="">
      <div class="section-header">
        <h2 v-if="this.lang == 'es'">Han confiado en nosotros</h2>
        <h2 v-if="this.lang == 'en'">They have trusted us</h2>
        <p v-if="this.lang == 'es'">Conoce algunos de nuestros clientes</p>
        <p v-if="this.lang == 'en'">Get to know some of our clients</p>
      </div>
      <div class="container">
        <ul class="row align-items-center justify-content-center">
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/1.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/2.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/3.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/4.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/5.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/6.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/7.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/8.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/9.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/10.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/11.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/12.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/13.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/14.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/15.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/16.jpg"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/17.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/18.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/19.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/20.png"
              height="60"
              loading="lazy"
            />
          </li>

          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/22.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/23.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/24.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/25.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/26.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/27.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/28.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/29.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/30.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/31.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/32.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/33.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/34.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/35.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/36.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/37.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/38.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/39.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/40.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/41.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/42.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/43.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/44.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/45.png"
              height="60"
              loading="lazy"
            />
          </li>
          <li class="col-lg-2 col-md-3 col-6 py-2 py-lg-0">
            <img
              class="d-block mx-auto "
              src="../assets/clientes/46.png"
              height="60"
              loading="lazy"
            />
          </li>
        </ul>
      </div>
    </section>
  </section>
</template>
<script>
export default {
  name: "ClientesComp",
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
};
</script>
<style scoped>
ul{
  list-style: none;
}
.clients {
  padding-top: 20px;
}

.clients img {
  width: 110px;
  height: 60px;
  object-fit: contain;
  opacity: 0.5;
  transition: 0.3s;
  filter: grayscale(100);
  /* padding-top: 10px; */
}

.clients img:hover {
  filter: none;
  opacity: 1;
}
</style>
