<template>
  <NavBar />
  <router-view />
  <Whatsapp />
  <TopArrow />
  <FooterComp />
</template>

<script>
import NavBar from "@/components/NavBar.vue"
  import Whatsapp from "@/components/Whatsapp.vue"
  import TopArrow from "@/components/TopArrow.vue"
  import FooterComp from "@/components/FooterComp.vue"
  // import HomeView from "@/views/HomeView.vue"

    
  export default {
    name: 'App',
    components: {
    NavBar,
    Whatsapp,
    TopArrow,
    FooterComp
  }
  }
</script>

<style>
/* Fonts */
:root {
  --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-primary: "Roboto", sans-serif;
  --font-secondary: "Work Sans", sans-serif;
}

:root {
  --animate-duration: 1s;
  --animate-delay: 1s;
  --animate-repeat: 1;
}

/* Colors */
:root {
  --color-default: #364d59;
  --color-primary: #273b60;
  --color-secondary: #52565e;
}

/* Smooth scroll behavior */
:root {
  scroll-behavior: smooth;
}

body {
  font-family: var(--font-default);
  color: var(--color-default);
  overflow-x: hidden;
}

a {
  color: var(--color-primary);
  text-decoration: none;
}

a:hover {
  color: #273b60;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--font-primary);
}

/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/
section {
  padding: 80px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f5f6f7;
}

.section-header {
  text-align: center;
  padding-bottom: 70px;
}

.section-header h2 {
  font-size: 32px;
  font-weight: 700;
  position: relative;
  color: #2e3135;
}

.section-header h2:before,
.section-header h2:after {
  content: "";
  width: 50px;
  height: 2px;
  background: var(--color-primary);
  display: inline-block;
}

.section-header h2:before {
  margin: 0 15px 10px 0;
}

.section-header h2:after {
  margin: 0 0 10px 15px;
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
