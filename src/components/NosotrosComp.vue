<template>
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="section-header">
      <h2>Nosotros</h2>
    </div>
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center">
          <img src="../assets/nosotros.jpg" class="" alt="" width="500" />
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
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
            permitiéndonos comprender a fondo sus necesidades y objetivos en
            <strong>mercado público</strong>. De esta manera, estamos en
            posición de brindarles asesoramiento legal estratégico orientado a
            soluciones innovadoras y adaptadas a sus circunstancias
            particulares. Estamos seguros de que podemos ser su partner
            estratégico en el ámbito de la
            <strong>contratación pública</strong>.
          </p>
          <!-- <p class="texto-nosotros">
            ESTE MANDARON ELLOS - SIN SEO
            Somos un estudio jurídico especializado en contratación pública
            fundado hace <b>más de 13 años</b> conformado por abogados
            especialistas, donde la excelencia legal se encuentra con la
            modernidad y el compromiso con nuestros clientes, brindando
            soluciones jurídicas integrales y personalizadas. Valoramos y
            honramos la confianza que depositan en nuestros servicios legales,
            construyendo relaciones sólidas y duraderas.
            <b>
              Nuestro enfoque se basa en una comunicación cercana y transparente
              con los clientes</b
            >, permitiéndonos comprender a fondo sus necesidades y objetivos,
            para así brindarles asesoramiento legal estratégico orientadas a
            soluciones innovadoras y adaptadas a sus circunstancias
            particulares. Estamos confiados en que podemos ser un partner
            estratégico para su empresa.
          </p> -->
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->
</template>
<script>
export default {
  name: "NosotrosComp",
};
</script>
<style scoped>
#about img {
  width: 500px;
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
