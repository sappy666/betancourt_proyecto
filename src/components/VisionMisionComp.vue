<template>
  <section id="vision-mision">
    <div class="container">
      <div v-if="this.lang == 'es'" class="row | justify-content-around">
        <div class="col-11 col-lg-5 | mb-5 mb-lg-0">
          <h3>Misión</h3>
          <p>
            Nuestra misión es resguardar y potenciar las competencias e
            intereses de nuestros clientes en el ámbito de la contratación
            pública, brindándoles una asesoría legal especializada, accesible y
            con el más alto nivel de compromiso y confidencialidad. Nos
            esforzamos por ser un aliado confiable y que se involucra en el
            negocio, comprometidos con la excelencia, la ética y la innovación.
            Para que nuestros clientes alcancen sus objetivos con la seguridad
            de estar respaldados por un equipo legal que entiende sus
            necesidades y defiende sus derechos en cada paso del camino. Nuestra
            experiencia y clientes como también, nuestros resultados nos avalan.
          </p>
        </div>
        <div class="col-11 col-lg-5">
          <h3>Visión</h3>
          <p>
            Aspiramos a transformar el panorama de la contratación pública en
            Chile y Latinoamérica, estableciendo nuevos estándares de excelencia
            y confianza en el asesoramiento legal. Nos proyectamos como un
            referente en el desarrollo de soluciones legales innovadoras que no
            sólo resuelvan los desafíos actuales, y que permita a nuestros
            clientes prosperar en un mercado público competitivo y equitativo.
          </p>
        </div>
      </div>
      <div v-if="this.lang == 'en'" class="row | justify-content-around">
        <div class="col-11 col-lg-5">
          <h3>Mission</h3>
          <p>
            Our mission is to safeguard and enhance our clients' competencies
            and interests in the field of public contracting by providing
            specialized legal advice that is accessible and delivered with the
            highest level of commitment and confidentiality. We strive to be a
            reliable partner, deeply involved in our clients' business, and
            dedicated to excellence, ethics, and innovation. Our goal is to
            ensure that our clients achieve their objectives with the confidence
            that they are supported by a legal team that understands their needs
            and defends their rights every step of the way. Our experience,
            clients, and results speak for themselves.
          </p>
        </div>
        <div class="col-11 col-lg-5">
          <h3>Vision</h3>
          <p>
            We aspire to transform the landscape of public contracting in Chile
            and Latin America by setting new standards of excellence and trust
            in legal advisory services. We envision becoming a benchmark in the
            development of innovative legal solutions that not only address
            current challenges but also empower our clients to thrive in a
            competitive and fair public market.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: "VisionMisionComp",
  data() {
    return {
      lang: document.documentElement.lang,
    };
  },
  created() {
    if (this.lang === "") {
      this.lang = "ese";
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
#vision-mision {
  background-color: #273050;
}
p {
  text-align: justify;
  font-size: 0.9rem;
  margin-bottom: 0;
  color: #ffffff88;
}
h3 {
  font-weight: 700;
  margin-bottom: 1.5rem;
  color: #ffffffbb;
  font-family: Georgia, serif;
}
</style>
