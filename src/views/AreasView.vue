<template>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Conoce nuestras<br>Áreas de práctica</h1>
      <h2>Conoce nuestras áreas de trabajo</h2>
      <a href="courses.html" class="btn-get-started">Contáctanos</a>
    </div>
  </section><!-- End Hero -->

</template>
<script>
    export default {
   name: "AreasView",
   }
</script>
<style scoped>
  
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 80vh;
  background: url("../assets/1.jpg") top center;
  background-size: cover;
  position: relative;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
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
  background: #5fcf80;
  border: 2px solid #5fcf80;
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

</style>
