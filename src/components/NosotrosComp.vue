<template>
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="section-header">
      <h2 v-if="this.lang == 'es'">Nosotros</h2>
      <h2 v-if="this.lang == 'en'">About us</h2>
    </div>
    <div class="container">
      <div class="row | justify-content-around">
        <div class="col-lg-5 order-1 order-lg-2 d-flex justify-content-center">
          <img src="../assets/nosotros.jpg" class="" alt="" />
        </div>
        <div
          v-if="this.lang == 'es'"
          class="col-lg-5 pt-4 pt-lg-0 order-2 order-lg-1 content"
        >
          <p>
            Somos un bufete de <strong>abogados</strong> especializado en el
            ámbito de la <strong>contratación pública</strong>, con una sólida
            trayectoria de más de 13 años en el mercado. Nuestro equipo está
            conformado por <strong>abogados expertos en abogacía</strong> y
            <strong>asesoría legal</strong>, comprometidos con la excelencia
            legal y la modernidad. En <strong>Betancourt abogados</strong>,
            valoramos la confianza que nuestros clientes depositan en nuestros
            servicios legales, y nos esforzamos por construir relaciones sólidas
            y duraderas.
          </p>

          <p>
            Nuestra firma de <strong>abogados</strong> se distingue por ofrecer
            soluciones jurídicas integrales y personalizadas en el
            <strong>mercado público</strong>. Nuestro enfoque se basa en una
            comunicación cercana y transparente con nuestros clientes,
            permitiéndonos comprender a fondo sus necesidades y objetivos. De
            esta manera, estamos en posición de brindarles asesoramiento legal
            estratégico orientado a soluciones innovadoras y adaptadas a sus
            circunstancias particulares. Estamos seguros de que podemos ser su
            partner estratégico en el ámbito de la
            <strong>contratación pública</strong>.
          </p>
       </div>
        <div
          v-if="this.lang == 'en'"
          class="col-lg-5 pt-4 pt-lg-0 order-2 order-lg-1 content"
        >
          <p>
            We are a <strong>law firm </strong>specialized in the field of
            <strong>public procurement</strong>, with a solid track record of
            over 13 years in the market. Our team is composed of
            <strong>expert attorneys in advocacy</strong> and
            <strong>legal counsel</strong>, committed to legal excellence and
            modernity. At <strong>Betancourt Attorneys</strong>, we highly value
            the trust our clients place in our legal services, and we strive to
            build strong and lasting relationships.
          </p>

          <p>
            Our <strong>law firm</strong> stands out for offering comprehensive
            and customized legal solutions in the
            <strong>public market</strong>. Our approach is based on close and
            transparent communication with our clients, allowing us to
            thoroughly understand their needs and objectives. In this way, we
            are positioned to provide strategic legal advice focused on
            innovative solutions tailored to their specific circumstances. We
            are confident that we can be your strategic partner in the field of
            <strong>public procurement</strong>.
          </p>
       </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->
</template>
<script>
export default {
  name: "NosotrosComp",
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
#about img {
  width: 100%;
  object-fit: cover;
}
a {
  color: #26547c;
  transition: 0.5s;
  text-decoration: none;
}
a:hover,
a:active,
a:focus {
  color: #26547c;
  outline: none;
  text-decoration: none;
}
p {
  padding: 0;
  margin: 0 0 30px 0;
  text-align: justify;
}
#about {
  scroll-margin: 20px;
}
.about .content ul {
  list-style: none;
  padding: 0;
}
.about .content ul li {
  padding-bottom: 10px;
}
.about .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #26547c;
}
.about .content .learn-more-btn {
  background: #26547c;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px 9px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
}
.about .content .learn-more-btn:hover {
  background: #26547c;
  color: #fff;
}
@media (max-width: 768px) {
  .about .content .learn-more-btn {
    margin: 0 48px 0 0;
    padding: 6px 18px;
  }
}
.texto-nosotros {
  text-align: justify;
  margin: 0 1.5rem;
}

</style>
