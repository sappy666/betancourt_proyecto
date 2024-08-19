<template>
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header row justify-content-center pb-3">
        <h2 v-if="this.lang == 'es'">Que hacemos</h2>
        <h2 v-if="this.lang == 'en'">What we do</h2>
     </div>
      <div class="container contratacion">
        <div v-if="this.lang == 'es'" class="row justify-content-center">
          <h3 class="text-center">Contratación pública</h3>
          <p class="mt-4">
            <strong>La contratación pública en Chile</strong> es el proceso
            mediante el cual el Estado adquiere bienes y servicios para sus
            necesidades. Esto involucra cuatro modalidades:
            <strong
              >Licitaciones públicas, Convenio Marco, Trato Directo y
              Licitaciones Privadas</strong
            >, todas reguladas por leyes específicas. Este proceso se lleva a
            cabo en <strong>Mercado Público</strong>, una plataforma bajo
            <strong>ChileCompra</strong>, donde
            <strong
              >abogados especializados en derecho público y mercado
              público</strong
            >
            facilitan transacciones.
          </p>
          <p>
            En <strong>2022</strong>, se realizaron
            <strong>1.809.592</strong> operaciones por
            <strong>$15.023 millones USD</strong>. Inversionistas, tanto
            nacionales como extranjeros, participan en licitaciones públicas y
            otras modalidades con el apoyo de estos abogados. El sistema se basa
            en principios de igualdad, competencia y transparencia para fomentar
            la participación de empresas nacionales e internacionales. Aunque
            mejorable, el sistema funciona y el Estado de Chile cumple con los
            pagos en este contexto.
          </p>
       </div>
        <div v-if="this.lang == 'en'" class="row justify-content-center">
          <h3 class="text-center">Public Procurement</h3>
          <p class="mt-4">
            <strong> Public procurement in Chile</strong> is the process through
            which the government acquires goods and services for its needs. This
            involves four modalities:
            <strong
              >Public Tenders, Framework Agreements, Direct Negotiation, and
              Private Tenders</strong
            >, all regulated by specific laws. This process takes place on
            <strong>the Public Market platform</strong>, operated under
            <strong>ChileCompra</strong>, where
            <strong
              >legal experts specializing in public and market law
            </strong>
            facilitate transactions.
          </p>
          <p>
            In <strong>2022</strong>, there were
            <strong>1.809.592</strong> operations amounting to
            <strong>$15.023 billion USD</strong>. Both national and foreign
            investors participate in public tenders and other modalities with
            the support of these lawyers. The system is based on principles of
            equality, competition, and transparency to encourage the
            participation of national and international companies. Although
            there is room for improvement, the system functions, and the Chilean
            government fulfills its payments within this context.
          </p>
       </div>
      </div>

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/library.png" alt="" srcset="" />
            </div>
            <h2 v-if="this.lang == 'es'">Asesoría en Compras públicas</h2>
            <h2 v-if="this.lang == 'en'">Public Procurement Advisory</h2>
            <div>
              <p v-if="this.lang == 'es'">
                Maximizamos tus posibilidades de acceder de nuevos negocios con
                nuestra asesoría para la participación en Mercado Público,
                convirtiéndonos en un recurso humano altamente calificado más de
                tu empresa.
              </p>
              <p v-if="this.lang == 'en'">
                We maximize your chances of accessing new business opportunities
                with our advisory services for participation in the Public
                Market, becoming a highly qualified human resource addition to
                your company.
              </p>
            </div>
            <div class="">
              <router-link
                v-if="this.lang == 'es'"
                class="readmore"
                to="/areas-practica#contratacion"
                @click="comprasPublicasEvent"
                >Leer más</router-link
              >
              <router-link
                v-if="this.lang == 'en'"
                class="readmore"
                to="/areas-practica#contratacion"
                @click="comprasPublicasEvent"
                >Read more</router-link
              >
            </div>
          </div>
        </div>
        <!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/gavel.png" alt="" srcset="" />
            </div>
            <h2 v-if="this.lang == 'es'">
              Reclamación y defensa de adjudicación
            </h2>
            <h2 v-if="this.lang == 'en'">Adjudication Claim and Defense</h2>
            <p v-if="this.lang == 'es'">
              Analizamos minuciosamente el proceso de evaluación y adjudicación
              para detectar cualquier ilegalidad y/o arbitrariedad que pueda ser
              impugnada. Así como también, defendemos la adjudicación de
              nuestros clientes en caso de que ésta pretenda ser revocada o
              invalidada por un tercero.
            </p>
            <p v-if="this.lang == 'en'">
              We meticulously analyze the evaluation and adjudication process to
              detect any illegality and/or arbitrariness that can be challenged.
              Additionally, we provide defense for our clients' adjudication in
              the event it is sought to be revoked or invalidated by a third
              party.
            </p>
            <div class="">
              <router-link
                v-if="this.lang == 'es'"
                class="readmore"
                to="/areas-practica#reclamacion"
                @click="reclamacionEvent"
                >Leer más</router-link
              >
              <router-link
                v-if="this.lang == 'en'"
                class="readmore"
                to="/areas-practica#reclamacion"
                @click="reclamacionEvent"
                >Read more</router-link
              >
            </div>
          </div>
        </div>
        <!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div v-if="this.lang == 'es'" class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/law.png" alt="" srcset="" />
            </div>
            <h2>Cobranza Administrativa</h2>
            <p>
              Facilitamos la recuperación de capital e intereses adeudados por
              los mandantes públicos a nuestros clientes sin la necesidad de
              judicializar los procesos de cobranza mediante un método eficiente
              y eficaz.
            </p>
            <div class="">
              <router-link
                class="readmore"
                to="/areas-practica#cobranza"
                @click="cobranzaEvent"
                >Leer más</router-link
              >
            </div>
          </div>
          <div v-if="this.lang == 'en'" class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/law.png" alt="" srcset="" />
            </div>
            <h2>Administrative Debt Collection</h2>
            <p>
              We facilitate the recovery of capital and outstanding interest
              owed by public entities to our clients without the need for
              litigation through an efficient and effective method.
            </p>
            <div class="">
              <router-link
                class="readmore"
                to="/areas-practica#cobranza"
                @click="cobranzaEvent"
                >Read more</router-link
              >
            </div>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div v-if="this.lang == 'es'" class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/diagram.png" alt="" srcset="" />
            </div>
            <h2>Asesoría Estratégica</h2>
            <p>
              Nos adaptamos a tus necesidades.Cuéntanos tu problema y juntos
              buscaremos las mejores opciones para solucionarlo.
            </p>
            <div class="">
              <router-link
                class="readmore"
                to="/areas-practica#estrategica"
                @click="estrategicaEvent"
                >Leer más</router-link
              >
            </div>
          </div>
          <div v-if="this.lang == 'en'" class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/diagram.png" alt="" srcset="" />
            </div>
            <h2>Strategic Advisory</h2>
            <p>
              We tailor our services to meet your needs. Tell us about your
              issue, and together, we will explore the best options for
              resolving it.
            </p>
            <div class="">
              <router-link
                class="readmore"
                to="/areas-practica#estrategica"
                @click="estrategicaEvent"
                >Read more</router-link
              >
            </div>
          </div>
        </div>
        <!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div v-if="this.lang == 'es'" class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/consulta.png" alt="" srcset="" />
            </div>
            <h2>Asesoría en la ejecución</h2>
            <p>
              Te asesoramos durante la ejecución del contrato, defendiéndote en
              la aplicación de multas, cumplimientos de estados de pago, término
              anticipado de contrato y cualquier otra eventualidad que se pueda
              traducir en un menoscabo económico para la empresa.
            </p>
            <div class="">
              <router-link
                class="readmore"
                to="/areas-practica#ejecucion"
                @click="ejecucionEvent"
                >Leer más</router-link
              >
            </div>
          </div>
          <div v-if="this.lang == 'en'" class="service-item position-relative">
            <div class="icon">
              <img src="../assets/iconos/consulta.png" alt="" srcset="" />
            </div>
            <h2>Execution Advisory</h2>
            <p>
              We provide guidance during the contract execution, offering
              defense in cases of penalty application, payment status
              compliance, early contract termination, and any other
              circumstances that may result in financial detriment to the
              company.
            </p>
            <div class="">
              <router-link
                class="readmore"
                to="/areas-practica#ejecucion"
                @click="ejecucionEvent"
                >Read more</router-link
              >
            </div>
          </div>
        </div>
        <!-- End Service Item -->
      </div>
    </div>
  </section>
  <!-- End Services Section -->
</template>
<script>
export default {
  name: "ServiciosComp",
  data() {
    return {
      lang: document.documentElement.lang,
    };
  },
  methods: {
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
#services {
  scroll-margin: 30px;
}
.services .service-item {
  padding: 40px;
  background: #fff;
  height: 100%;
}
.services .service-item .icon,
.services .service-item img {
  width: 48px;
  height: 48px;
  position: relative;
  margin-bottom: 50px;
}
.services .service-item .icon i,
.services .service-item .icon img {
  color: var(--color-secondary);
  font-size: 40px;
  transition: ease-in-out 0.3s;
  z-index: 2;
  position: relative;
  line-height: 1.8;
}
.services .service-item .icon:before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background: #f0f1f2;
  border-radius: 50px;
  z-index: 1;
  top: 10px;
  right: -15px;
  transition: 0.3s;
}
.services .service-item h2 {
  color: var(--color-default);
  font-weight: 700;
  margin: 0 0 20px 0;
  padding-bottom: 8px;
  font-size: 22px;
  position: relative;
  display: inline-block;
  border-bottom: 4px solid #ebebed;
  transition: 0.3s;
}
.services .service-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
  text-align: justify;
}
.services .service-item .readmore {
  margin-top: 15px;
  display: inline-block;
  color: var(--color-primary);
}
.services .service-item:hover .icon:before {
  background: rgba(155, 159, 213, 0.389);
}
.services .service-item:hover h2 {
  border-color: var(--color-primary);
}
.contratacion {
  margin-bottom: 5rem;
}
</style>
