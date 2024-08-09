<template>
  <section id="hero" class="hero">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center">
            <img
              v-if="true"
              src="../assets/nombre.png"
              alt="Betancourt Abogados"
              srcset=""
            />
           <h1>Betancourt Abogados</h1>
            <p v-if="this.lang == 'es'">
              Somos un estudio jurídico formado por abogados e ingenieros, todos
              profesionales altamente calificados que buscan proporcionar
              soluciones eficientes y efectivas.
            </p>
            <p v-if="this.lang == 'en'">
              We are a legal firm composed of lawyers and engineers, all highly
              qualified professionals dedicated to delivering efficient and
              effective solutions.
            </p>
            <a v-if="this.lang == 'es'" href="#about" class="btn-get-started"
              >Conócenos</a
            >
            <a v-if="this.lang == 'en'" href="#about" class="btn-get-started"
              >Get to Know Us</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <CounterComp />
  <NosotrosComp />
  <VisionMisionComp />
  <ServiciosComp />
  <ClientesComp />
  <BlogComp />
  <ContactoComp />
</template>
<script>
import CounterComp from "@/components/CounterComp.vue";
import NosotrosComp from "@/components/NosotrosComp.vue";
import ServiciosComp from "@/components/ServiciosComp.vue";
import ClientesComp from "@/components/ClientesComp.vue";
import BlogComp from "@/components/BlogComp.vue";
import ContactoComp from "@/components/ContactoComp.vue";
import VisionMisionComp from "@/components/VisionMisionComp.vue";

export default {
  name: "HomeView",
  components: {
    CounterComp,
    NosotrosComp,
    ServiciosComp,
    ClientesComp,
    BlogComp,
    ContactoComp,
    VisionMisionComp,
  },
  data() {
    return {
      lang: document.documentElement.lang,
    };
  },
  methods: {
    scrollToId() {
      var section = this.$router.currentRoute.value.hash.replace("#", "");
      if (section) {
        this.$nextTick(() =>
          window.document.getElementById(section).scrollIntoView()
        );
      }
    },
  },
  created() {
    window.scrollTo({ top: 0, behavior: "instant" });
    if (this.lang === "") {
      this.lang = "es";
    }
  },
  updated() {
    this.scrollToId();
  },
  mounted() {
    this.scrollToId();
    window.addEventListener("click", (e) => {
      if (e.target.id === "btn-lang") {
        this.lang = document.documentElement.lang;
      }
    });
  },
};
</script>
<style scoped>
h2,
p {
  font-family: var(--font-primary);
}

.hero {
  overflow-x: hidden;
  background-image: url("../assets/fondobanner.jpg");
  background-size: cover;
}
.hero .info {
  /* backdrop-filter: blur(5px); */
  margin-top: 2.5rem;
}
.hero {
  width: 100%;
  min-height: 100vh;
  padding: 0px 0;
  margin: 0px;
  position: relative;
}
.hero h1 {
  height: 0;
  visibility: hidden;
}
.hero .info {
  position: absolute;
  inset: 0;
  z-index: 2;
}
@media (max-width: 768px) {
  .hero .info {
    padding: 0 0px;
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
    text-shadow: rgba(0, 0, 0, 0.2);
  }
}
.hero .info p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 13px;
  padding-top: 2rem;
  width: 100%;
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
  box-shadow: rgba(0, 0, 0, 0.2) 0 3px 5px -1px,
    rgba(0, 0, 0, 0.14) 0 6px 10px 0, rgba(0, 0, 0, 0.12) 0 1px 18px 0;
  cursor: pointer;
}
.hero .info .btn-get-started:hover {
  background: #26547c;
  border: 2px solid #26547c;
}

.btn-get-started {
  text-decoration: none;
}
.hero img {
  width: 300px;
}
@media (min-width: 500px) {
  .hero .info {
    padding: 0;
  }
  .hero img {
    width: 600px;
  }
  .hero .info p {
    font-size: 18px;
  }
}
</style>
