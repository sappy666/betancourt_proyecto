<template>
  <section id="vision-mision">
    <div class="container">
      <div class="row | justify-content-around">
        <div class="col-12 col-lg-5">
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
        <div class="col-12 col-lg-5">
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
#vision-mision{
  background-color: #273050;
}
p{
  text-align: justify;
  font-size: 0.9rem;
  margin-bottom: 0;
  color: #ffffff88;
}
h3{
  font-weight: 700;
  margin-bottom: 1.5rem;
  color: #ffffffbb;
}
</style>
