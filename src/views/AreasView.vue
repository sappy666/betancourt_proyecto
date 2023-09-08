<template>
  <!-- ======= Hero Section ======= -->
  <section
    id="hero"
    class="d-none d-lg-flex justify-content-center align-items-center"
  >
    <div class="container">
      <h2 v-if="this.lang == 'es'">Nuestras areas de práctica</h2>
      <h2 v-if="this.lang == 'en'">Our practice areas</h2>
      <!-- <h2>Conoce nuestras áreas de trabajo</h2> -->
      <a v-if="this.lang == 'es'" href="#contact" class="btn-get-started"
        >Contáctanos</a
      >
      <a v-if="this.lang == 'en'" href="#contact" class="btn-get-started"
        >Contact us</a
      >
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
              <a
                v-if="this.lang == 'es'"
                href="#servicios-content"
                @click="comprasPublicasEvent"
                >Asesoría en compras públicas</a
              >
              <a
                v-if="this.lang == 'en'"
                href="#servicios-content"
                @click="comprasPublicasEvent"
                >Public Procurement Advisory</a
              >
            </li>
            <li class="sidelist main" id="btn-reclamacion">
              <a
                v-if="this.lang == 'es'"
                href="#servicios-content"
                @click="reclamacionEvent"
                >Reclamación y defensa de adjudicación</a
              >
              <a
                v-if="this.lang == 'en'"
                href="#servicios-content"
                @click="reclamacionEvent"
                >Adjudication Claim and Defense</a
              >
            </li>
            <li class="sidelist main" id="btn-ejecucion">
              <a
                v-if="this.lang == 'es'"
                href="#servicios-content"
                @click="ejecucionEvent"
                >Asesoría en la ejecución</a
              >
              <a
                v-if="this.lang == 'en'"
                href="#servicios-content"
                @click="ejecucionEvent"
                >Execution Advisory</a
              >
            </li>
            <li class="sidelist main" id="btn-cobranza">
              <a
                v-if="this.lang == 'es'"
                href="#servicios-content"
                @click="cobranzaEvent"
                >Cobranza Administrativa</a
              >
              <a
                v-if="this.lang == 'en'"
                href="#servicios-content"
                @click="cobranzaEvent"
                >Administrative Debt Collection</a
              >
            </li>
            <li class="sidelist main" id="btn-estrategica">
              <a
                v-if="this.lang == 'es'"
                href="#servicios-content"
                @click="estrategicaEvent"
                >Asesoría Estratégica</a
              >
              <a
                v-if="this.lang == 'en'"
                href="#servicios-content"
                @click="estrategicaEvent"
                >Strategic Advisory</a
              >
            </li>
          </ul>
        </div>

        <div id="servicios-content" class="col col-lg-8">
          <!-- --------------------Contratacion------------------------------>
          <div class="px-lg-5 px-4 servicio active" id="contratacion">
            <div class="row mb-4">
              <div class="col">
                <h2 v-if="this.lang == 'es'">Asesoría en compras públicas</h2>
                <h2 v-if="this.lang == 'en'">Public Procurement Advisory</h2>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p v-if="this.lang == 'es'" class="text-muted">
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
                <p v-if="this.lang == 'en'" class="text-muted">
                  We actively seek new business opportunities based on our
                  clients' parameters.<br /><br />
                  We conduct a thorough analysis of the tender documents to
                  detect any illegal or arbitrary requirements and challenge
                  them promptly. <br /><br />
                  We provide guidance to our clients in the tender application
                  process, working together to craft proposals that enhance
                  their chances of winning.
                </p>
                <a
                  v-if="this.lang == 'es'"
                  class="nav-link py-3"
                  href="/#contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
                <a
                  v-if="this.lang == 'en'"
                  class="nav-link py-3"
                  href="/#contact"
                  ><i class="bi bi-envelope-check"></i> Schedule a meeting</a
                >
              </div>
            </div>
          </div>
          <!-- --------------------Reclamación y defensa----------------------------->
          <div class="px-lg-5 px-4 servicio" id="reclamacion">
            <div class="row mb-4">
              <div class="col-md-8">
                <h2 v-if="this.lang == 'es'">
                  Reclamación y defensa de adjudicación
                </h2>
                <h2 v-if="this.lang == 'en'">Adjudication Claim and Defense</h2>
              </div>
            </div>
            <div class="row">
              <div v-if="this.lang == 'es'" class="col">
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
                <a class="nav-link py-3" href="/#contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
              <div v-if="this.lang == 'en'" class="col">
                <p class="text-muted">
                  Once the adjudication decision has been made, and as the case
                  may be, we can:
                </p>
                <ul class="">
                  <li class="mb-3">
                    Challenge the adjudication decision due to irregularities in
                    the evaluation process.
                  </li>
                  <li class="mb-3">
                    File an appeal before the Public Procurement Tribunal when
                    there are illegalities and/or arbitrariness that violate the
                    principles underlying our legislation
                  </li>
                  <li class="mb-3">
                    It may happen that our client is awarded the contract, and
                    another bidder challenges this award, initiating an
                    invalidation procedure. We participate in the pre-hearing
                    stage with the aim of having these claims dismissed and
                    thereby consolidating our client's award.
                  </li>
                </ul>
                <a class="nav-link py-3" href="/#contact"
                  ><i class="bi bi-envelope-check"></i>Schedule a meeting</a
                >
              </div>
            </div>
          </div>
          <!-- --------------------Asesoria en la ejecucion---------------------------->
          <div class="px-lg-5 px-4 servicio" id="ejecucion">
            <div class="row mb-4">
              <div class="col-md-7">
                <h2 v-if="this.lang == 'es'">Asesoría en la ejecución</h2>
                <h2 v-if="this.lang == 'en'">Execution Advisory</h2>
              </div>
            </div>
            <div class="row">
              <div v-if="this.lang == 'es'" class="col">
                <p class="text-muted">
                  Sabemos que tener la capacidad de responder oportunamente a
                  cualquier eventualidad que se suscite durante la ejecución del
                  contrato es trascendental para minimizar las repercusiones
                  negativas que a su empresa le pueden significar. Por esto,
                  acompañamos a nuestros clientes en: negociaciones con el
                  mandante, defensa de multas, término anticipado de contrato,
                  aumento o disminución de obra, etc.
                </p>
                <a class="nav-link py-3" href="/#contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
              <div v-if="this.lang == 'en'" class="col">
                <p class="text-muted">
                  We understand that having the ability to respond promptly to
                  any contingency that arises during the contract execution is
                  crucial to minimize the negative repercussions that can affect
                  your company. That's why we assist our clients in various
                  aspects, including negotiations with the contracting
                  authority, penalty defense, early contract termination,
                  changes in scope of work, and more.
                </p>
                <a class="nav-link py-3" href="/#contact"
                  ><i class="bi bi-envelope-check"></i> Schedule a meeting</a
                >
              </div>
            </div>
          </div>
          <!-- -----------------------Cobranza Administrativa-------------------------------->
          <div class="px-lg-5 px-4 servicio" id="cobranza">
            <div class="row mb-4">
              <div class="col-md-8">
                <h2 v-if="this.lang == 'es'">Cobranza Administrativa</h2>
                <h2 v-if="this.lang == 'en'">Administrative Debt Collection</h2>
              </div>
            </div>
            <div v-if="this.lang == 'es'" class="row">
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
                <a class="nav-link py-3" href="/#contact"
                  ><i class="bi bi-envelope-check"></i> Agenda una reunión</a
                >
              </div>
            </div>
            <div v-if="this.lang == 'en'" class="row">
              <div class="col-md-6">
                <p class="text-muted">
                  While it is true that Mercado Público provides an efficient
                  platform for conducting business with the Chilean government,
                  ensuring a secure and streamlined access for suppliers to
                  offer goods and services, and that the Chilean government
                  fulfills its obligations, it is also true that, on occasion,
                  due to budget adjustments, bureaucracy, or other reasons,
                  there may be delays in fulfilling these obligations.
                </p>
                <p class="text-muted">
                  This is why our firm has developed a specialized, effective,
                  and expedited procedure for addressing outstanding payments.
                </p>
              </div>
              <div class="col-md-6">
                <p class="text-muted">
                  In cases of payment delays, the provisions of Law No. 21.131,
                  the "Prompt Payment Law," should be applied. This entails
                  addressing both the principal amount and the accrued interest,
                  along with a special commission stipulated by law for any
                  delay or default that the Chilean government may have
                  incurred.
                </p>
                <p class="text-muted">
                  The system is grounded in principles of public law aimed at
                  safeguarding equal opportunity for bidders, promoting fair
                  competition, and ensuring transparency as fundamental pillars
                  of the market. Its objective is to encourage greater
                  participation of both national and foreign legal entities in
                  this market.
                </p>
                <a class="nav-link py-3" href="/#contact"
                  ><i class="bi bi-envelope-check"></i>Schedule a meeting</a
                >
              </div>
            </div>
          </div>
          <!-- -------------------Asesoría Estrategica---------------------------------->
          <div class="px-lg-5 px-4 servicio" id="estrategica">
            <div class="row mb-4">
              <div class="col-md-7">
                <h2 v-if="this.lang == 'es'">Asesoría Estratégica</h2>
                <h2 v-if="this.lang == 'en'">Strategic Advisory</h2>
              </div>
            </div>
            <div class="row">
              <div v-if="this.lang == 'es'" class="col">
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
              <div v-if="this.lang == 'en'" class="col">
                <p class="text-muted">
                  Our goal is to provide our clients with solutions tailored to
                  their specific needs. In addition to the above, we offer:
                </p>
                <ul>
                  <li class="mb-2">
                    Market analysis in terms of industry and competitors.
                  </li>
                  <li class="mb-2">
                    Partnerships with other companies to expand participation in
                    <strong>Public Procurement.</strong>
                  </li>
                  <li class="mb-2">Assistance in obtaining guarantees.</li>
                  <li class="mb-2">
                    Development of strategic growth planning in
                    <strong>Public Procurement.</strong>
                  </li>
                  <li class="mb-2">
                    Formation of joint ventures with other clients/companies.
                  </li>
                  <li>Etc.</li>
                </ul>
                <a class="nav-link py-3" href="/#Contact"
                  ><i class="bi bi-envelope-check"></i> Schedule a meeting</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <ContactoComp />
</template>
<script>
// import QuoteComp from "@/components/QuoteComp.vue"
import ContactoComp from "@/components/ContactoComp.vue";

export default {
  name: "AreasView",
  components: {
    ContactoComp,
  },
  data() {
    return {
      botones: [],
      servicios: [],
      lang: document.documentElement.lang,
    };
  },
  methods: {
    // ======================= Seleccionar area a mostrar por navbar ===========================
    selectAreaNavbar(servicios, btnsMain) {
      let section = this.$router.currentRoute.value.hash.replace("#", "");
      if (section && section != "servicios-content" && section != "contact") {
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
    if (this.lang == "") {
      this.lang = "es";
    }
  },
  mounted() {
    window.addEventListener("click", (e) => {
      if (e.target.id == "btn-lang") {
        this.lang = document.documentElement.lang;
      }
    });
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
