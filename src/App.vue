<template>
  <PreNavbar />
  <NavBar />
  <router-view />
  <Whatsapp />
  <TopArrow />
  <FooterComp />
</template>

<script>
import PreNavbar from "@/components/PreNavbar.vue";
import NavBar from "@/components/NavBar.vue";
import Whatsapp from "@/components/Whatsapp.vue";
import TopArrow from "@/components/TopArrow.vue";
import FooterComp from "@/components/FooterComp.vue";

export default {
  name: "App",
  components: {
    PreNavbar,
    NavBar,
    Whatsapp,
    TopArrow,
    FooterComp,
  },
  mounted() {
    window.addEventListener("scroll", () => {
      this.$router.push(this.$router.currentRoute.value.path);
    });
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap');

:root {
  --animate-duration: 1s;
  --animate-delay: 1s;
  --animate-repeat: 1;

  --color-default: #364d59;
  --color-primary: #273b60;
  --color-secondary: #52565e;

  --font-default: "Raleway", sans-serif;
  --font-primary: "Raleway", sans-serif;
  --font-secondary: "Raleway", sans-serif;
  scroll-behavior: smooth;
}

body {
  font-family: var(--font-default);
  color: var(--color-default);
  overflow-x: hidden;
}

a {
  font-family: var(--font-default);
  color: var(--color-primary);
  text-decoration: none;
}

a:hover {
  color: #273b60;
  text-decoration: none;
}

p,
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--font-primary);
}

p {
  font-weight: 300;
  font-size: medium;
}

/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/
section {
  padding: 80px 0;
  overflow: hidden;
  font-family: "Montserrat", sans-serif;
}

.section-bg {
  background-color: #f5f6f7;
}

.section-header {
  text-align: center;
  padding-bottom: 4rem;
}

.section-header h2 {
  font-family: Georgia, serif;
  font-size: 1.8rem;
  font-weight: 700;
  position: relative;
  color: #2e3135;
  text-transform: uppercase;
  letter-spacing: 0rem;
}
@media (min-width: 991px) {
  
  
  .section-header h2:before {
    margin: 0 15px 10px 0;
  }
  
  .section-header h2:after {
    margin: 0 0 10px 15px;
  }
  
}

.section-header p {
  margin: 0 auto 0 auto;
}

@media (min-width: 1199px) {
  .section-header p {
    max-width: 60%;
  }
}
</style>
