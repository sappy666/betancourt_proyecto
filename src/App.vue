<template>
  <NavBar />
  <router-view />
  <Whatsapp />
  <TopArrow />
  <HomeView />
  <ServiciosView />
</template>

<script>
import NavBar from "@/components/NavBar.vue"
  import Whatsapp from "@/components/Whatsapp.vue"
  import TopArrow from "@/components/TopArrow.vue"
  import ServiciosView from "@/views/ServiciosView.vue"
  import HomeView from "@/views/HomeView.vue"

    
  export default {
    name: 'App',
    components: {
    NavBar,
    Whatsapp,
    HomeView,
    ServiciosView,
    TopArrow
  }
  }
</script>

<style>

</style>
