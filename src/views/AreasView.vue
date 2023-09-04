<template>
  <!-- ======= Hero Section ======= -->
  <section
    id="hero"
    class="d-none d-lg-flex justify-content-center align-items-center"
  >
    <div class="container">
      <h2>Conoce nuestras<br />Áreas de práctica</h2>
      <!-- <h2>Conoce nuestras áreas de trabajo</h2> -->
      <a href="#contact" class="btn-get-started">Contáctanos</a>
    </div>
  </section>
  <!-- End Hero -->
  <section id="servicios" class="pt-5">
    <div class="container shadow section-sm rounded pt-5">
      <div class="row servicios">
        <!-- sidebar -->
        <div class="col col-lg-3">
          <ul class="sidenav">
            <li class="sidelist main active" id="btn-contratacion">
              <a href="#servicios-content" @click="comprasPublicasEvent"
                >Asesoría en compras públicas</a
              >
            </li>
            <li class="sidelist main" id="btn-reclamacion">
              <a href="#servicios-content" @click="reclamacionEvent"
                >Reclamación y defensa de adjudicación</a
              >
            </li>
            <li class="sidelist main" id="btn-ejecucion">
              <a href="#servicios-content" @click="ejecucionEvent"
                >Asesoría en la ejecución</a
              >
            </li>
            <li class="sidelist main" id="btn-cobranza">
              <a href="#servicios-content" @click="cobranzaEvent"
                >Cobranza Administrativa</a
              >
            </li>
            <li class="sidelist main" id="btn-estrategica">
              <a href="#servicios-content" @click="estrategicaEvent"
                >Asesoría Estratégica</a
              >
            </li>
          </ul>
        </div>

        <div id="servicios-content" class="col col-lg-8">
          <!-- --------------------Contratacion------------------------------>
          <div class="px-lg-5 px-4 servicio active" id="contratacion">
            <div class="row mb-4">
              <div class="col">
                <h2>Asesoría en compras públicas</h2>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="text-muted">
                  Buscamos activamente nuevas oportunidades de negocios según
                  los parámetros indicados por nuestros clientes.<br /><br />
                  Realizamos un exhaustivo análisis de las bases para detectar
                  cualquier requisito ilegal o arbitrario e impugnarlo
                  oportunamente.<br /><br />
                  Asesoramos a nuestros clientes en la postulación a la
                  licitación, trabajando en conjunto en la elaboración de sus
                  propuestas tendientes a incrementar sus opciones de
                  adjudicación.
                </p>
                <a class="nav-link py-3" href="/#Contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
            </div>
          </div>
          <!-- --------------------Reclamación y defensa----------------------------->
          <div class="px-lg-5 px-4 servicio" id="reclamacion">
            <div class="row mb-4">
              <div class="col-md-7">
                <h2>Reclamación y defensa de adjudicación</h2>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="text-muted">
                  Una vez dictado el acto adjudicatorio, y según sea el caso
                  podemos:
                </p>
                <ul class="">
                  <li class="mb-3">
                    Reclamar contra el acto adjudicatorio por irregularidades en
                    el proceso de evaluación.
                  </li>
                  <li class="mb-3">
                    Deducir acción de impugnación ante el Tribunal de Compras
                    Públicas cuando existan ilegalidades y/o arbitrariedades que
                    vulneren los principios que inspiran nuestra legislación.
                  </li>
                  <li class="mb-3">
                    Puede suceder que nuestro cliente sea adjudicado y otro
                    oferente reclame contra esta adjudicación inciandose un
                    procedimiento de invalidación, nos hacemos parte en la
                    instancia de audiencia previa con el objetivo de que dichos
                    reclamos sean desestimados y así consolidar la adjudicación
                    de nuestro cliente.
                  </li>
                </ul>
                <a class="nav-link py-3" href="/#Contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
            </div>
          </div>
          <!-- --------------------Asesoria en la ejecucion---------------------------->
          <div class="px-lg-5 px-4 servicio" id="ejecucion">
            <div class="row mb-4">
              <div class="col-md-7">
                <h2>Asesoría en la ejecución</h2>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="text-muted">
                  Sabemos que tener la capacidad de responder oportunamente a
                  cualquier eventualidad que se suscite durante la ejecución del
                  contrato es trascendental para minimizar las repercusiones
                  negativas que a su empresa le pueden significar. Por esto,
                  acompañamos a nuestros clientes en: negociaciones con el
                  mandante, defensa de multas, término anticipado de contrato,
                  aumento o disminución de obra, etc.
                </p>
                <a class="nav-link py-3" href="/#Contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
            </div>
          </div>
          <!-- -----------------------Cobranza Administrativa-------------------------------->
          <div class="px-lg-5 px-4 servicio" id="cobranza">
            <div class="row mb-4">
              <div class="col-md-7">
                <h2>Cobranza Administrativa</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p class="text-muted">
                  Si bien es cierto que Mercado Público otorga una plataforma de
                  gestión de negocios con el Estado de Chile que funciona de
                  buena manera permitiendo un seguro y ágil acceso a los
                  proveedores para venderle al Estado bienes y servicios, y que
                  por su parte el Estado de Chile, cumple con las obligaciones
                  adquiridas, también es cierto que en ocasiones sea por ajustes
                  presupuestarios, burocracia u otros motivos, pueden existir
                  retardos en el pago de las obligaciones contraídas.
                </p>
                <p class="text-muted">
                  Motivo por el cual en nuestro estudio hemos desarrollado un
                  procedimiento especializado, efectivo y de rápida tramitación
                  para regularizar los pagos pendientes.
                </p>
              </div>
              <div class="col-md-6">
                <p class="text-muted">
                  Si ha habido retardos en los pagos, lo que corresponde es que
                  se aplique lo prescrito por la Ley N°21.131 “Ley de Pago
                  Oportuno”, debiendo solucionarse el capital como también los
                  intereses que se devenguen y una comisión especial que señala
                  la ley por la mora o simple retardo en que el Estado de Chile
                  pudiere haber incurrido.
                </p>
                <p class="text-muted">
                  El sistema se sustenta en principios de derecho público que
                  buscan resguardar la igualdad de los oferentes, la libre
                  competencia, la transparencia, como ejes fundamentales del
                  mercado, con el objeto de promover una mayor participación de
                  personas jurídicas nacionales y extranjeras en este mercado.
                </p>
                <router-link class="nav-link py-3" to="/AreasView#ContactoComp2"
                  ><i class="bi bi-envelope-check"></i> Agenda una
                  reunión</router-link
                >
              </div>
            </div>
          </div>
          <!-- -------------------Asesoría Estrategica---------------------------------->
          <div class="px-lg-5 px-4 servicio" id="estrategica">
            <div class="row mb-4">
              <div class="col-md-7">
                <h2>Asesoría Estratégica</h2>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="text-muted">
                  Nuestro objetivo es proporcionar a nuestros clientes
                  soluciones que se ajusten a sus necesidades concretas, por lo
                  cual, sumado a lo anterior, ofrecemos:
                </p>
                <ul>
                  <li class="mb-2">
                    Análisis de mercado en cuanto al rubro y competidores.
                  </li>
                  <li class="mb-2">
                    Alianzas con otras empresas para ampliar el rango de
                    participación en <strong>Mercado Público.</strong>
                  </li>
                  <li class="mb-2">Asesoría en la obtención de garantías.</li>
                  <li class="mb-2">
                    Desarrollo de planificación estratégica de crecimiento en
                    <strong>Mercado Público.</strong>
                  </li>
                  <li class="mb-2">
                    Constitución de UTP con otros clientes/empresas.
                  </li>
                  <li>Etc.</li>
                </ul>
                <a class="nav-link py-3" href="/#Contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <ContactoComp2 />
</template>
<script>
// import QuoteComp from "@/components/QuoteComp.vue"
import ContactoComp2 from "@/components/ContactoComp2.vue";

export default {
  name: "AreasView",
  components: {
    ContactoComp2,
  },
  data() {
    return {
      botones: [],
      servicios: [],
    };
  },
  methods: {
    // ======================= Seleccionar area a mostrar por navbar ===========================
    selectAreaNavbar(servicios, btnsMain) {
      let section = this.$router.currentRoute.value.hash.replace("#", "");
      if (section && section != "servicios-content") {
        btnsMain.forEach((btn) => {
          btn.classList.remove("active");
        });
        servicios.forEach((s) => {
          s.classList.remove("active");
        });

        document.getElementById(section).classList.add("active");
        document.getElementById("btn-" + section).classList.add("active");
        this.$router.push(this.$router.currentRoute.value.path);
      }
    },
    // ======================= Seleccionar area por sidebar =======================
    selectAreaSidebar(servicios, btnsMain) {
      btnsMain.forEach((e) => {
        e.addEventListener("click", () => {
          btnsMain.forEach((btn) => {
            btn.classList.remove("active");
          });
          e.classList.add("active");
          servicios.forEach((s) => {
            s.classList.remove("active");
          });
          let idMostrar = "";
          let lista = e.id.split("-");
          for (let i = 1; i < lista.length; i++) {
            idMostrar += lista[i];
            if (i != lista.length - 1) {
              idMostrar += "-";
            }
          }
          document.getElementById(idMostrar).classList.add("active");
        });
      });
    },
    // =========================== Eventos enviados a GA ======================
    comprasPublicasEvent() {
      this.$gtag.event("compras_publicas_visit", {
        event_category: "documentation",
        event_label: "Consulta en asesoria compras publicas",
        value: 1,
      });
    },
    reclamacionEvent() {
      this.$gtag.event("reclamacion_adjudicacion_visit", {
        event_category: "documentation",
        event_label: "Consulta en reclamacion y defensa de adjudicacion",
        value: 1,
      });
    },
    ejecucionEvent() {
      this.$gtag.event("asesoria_ejecucion_visit", {
        event_category: "documentation",
        event_label: "Consulta en asesoria de ejecucion",
        value: 1,
      });
    },
    cobranzaEvent() {
      this.$gtag.event("cobranza_administrativa_visit", {
        event_category: "documentation",
        event_label: "Consulta en cobranza administratica",
        value: 1,
      });
    },
    estrategicaEvent() {
      this.$gtag.event("asesoria_estrategica_visit", {
        event_category: "documentation",
        event_label: "Consulta en asesoria estrategica",
        value: 1,
      });
    },
  },
  created() {
    window.scrollTo({ top: 0, behavior: "instant" });
  },
  mounted() {
    //this.$ga.page('AreasView');
    this.servicios = document.querySelectorAll("div.servicio");
    this.botones = document.querySelectorAll(".sidelist.main");

    this.selectAreaSidebar(this.servicios, this.botones);
    this.selectAreaNavbar(this.servicios, this.botones);
  },
  updated() {
    this.selectAreaNavbar(this.servicios, this.botones);
  },
};
</script>
<style scoped>
.row.servicios {
  margin-top: 2rem;
}
#servicios-content {
  scroll-margin: 9rem;
}
.servicio {
  opacity: 0;
  transition: 1s opacity;
  height: 0;
}
.servicio.active {
  opacity: 1;
  height: auto;
}
/* sidenav */
.sidenav {
  border-right: 1px solid #e2e2e2;
  padding-right: 20px;
  min-height: 350px;
}
.sidenav ul {
  padding-left: 10px;
}
.sidenav > li a {
  padding: 20px 0;
  color: #222;
  display: block;
  font-size: 16px;
  font-weight: 500;
}
.sidenav > li:not(:last-child) {
  border-bottom: 1px solid #e2e2e2;
}
.sidenav .sidelist ul {
  display: none;
}
.sidelist.active a {
  color: var(--color-primary) !important;
}
a {
  color: var(--color-primary);
  transition: 0.5s;
  text-decoration: none;
}
a:hover,
a:active,
a:focus {
  color: var(--color-secondary);
  outline: none;
  text-decoration: none;
}
/*--------------------------------------------------------------
   # Hero Section
   --------------------------------------------------------------*/
#hero {
  height: 50vh;
  background: url("../assets/1.jpg") top center;
  background-size: cover;
  position: relative;
}
#hero .container {
  padding-top: 72px;
}
@media (max-width: 992px) {
  #hero .container {
    padding-top: 62px;
  }
}
#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}
#hero h2 {
  color: #eee;
  margin: 10px 0 0 0;
  font-size: 24px;
}
#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 35px;
  border-radius: 50px;
  transition: 0.5s;
  margin-top: 30px;
  border: 2px solid #fff;
  color: #fff;
}
#hero .btn-get-started:hover {
  background: #26547c;
  border: 2px solid #26547c;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 768px) {
  #hero {
    height: 100vh;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}

#hero .container {
  padding-top: 72px;
}
@media (max-width: 992px) {
  #hero .container {
    padding-top: 62px;
  }
}

#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
  font-family: var(--font-primary);
}
#hero h2 {
  color: #fff;
  margin: 10px 0 0 0;
  font-size: 24px;
}
#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 35px;
  border-radius: 50px;
  transition: 0.5s;
  margin-top: 30px;
  border: 2px solid #fff;
  color: #fff;
}
#hero .btn-get-started:hover {
  background: #26547c;
  border: 2px solid #26547c;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 768px) {
  #hero {
    height: 100vh;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}
li {
  font-family: var(--font-primary);
  font-weight: 300;
}
</style>
