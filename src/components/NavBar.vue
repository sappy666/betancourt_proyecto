<template>
   <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div id="barra" class="container-fluid">
         <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
               <a href="index.html" class="logo"><img src="../assets/logo1.png" alt="" class="img-fluid"></a>
               <nav id="navbar" class="navbar">
                  <div>
                     <router-link class="nav-link active" to="/">Inicio</router-link>
                     <router-link class="nav-link" to="/#about">Quienes somos</router-link>
                     <div class="dropdown">
                        <a href="#services"><span>Áreas de práctica</span> <i class="bi bi-chevron-down"></i></a>
                        <div>
                           <router-link class="nav-link" to="/AreasView#contratacion">Asesoria en Contratación Pública</router-link>
                           <router-link class="nav-link" to="/AreasView#cobranza">Cobranza Administrativa</router-link>
                           <router-link class="nav-link" to="/AreasView#reclamación">Reclamación y defensa de adjudicación</router-link>
                           <router-link class="nav-link" to="/AreasView#estrategica">Asesoría Estratégica</router-link>
                           <!-- <router-link class="nav-link" to="/AreasView#adjudicacion">Asesoría en la Adjudicación</router-link> -->
                         
                        </div>
                     </div>
                     <!-- <router-link class="nav-link" to="/BlogView">Casos destacados</router-link> -->
                     <router-link class="nav-link" to="/BlogView">Noticias</router-link>
                     <router-link class="nav-link" to="/#contact">Contacto</router-link>
                     <router-link class="nav-link" to="/">EN</router-link>
                  </div>
                  <i class="bi bi-list mobile-nav-toggle"></i>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!-- End Header -->
</template>
<script>
   export default {
      name: 'NavBar',
      mounted(){
         // Modificar navbar hacer scroll
         window.addEventListener("scroll", function() {
            if (window.scrollY >= 50) { // Si la página se ha desplazado más de 50px
                  document.getElementById("return-to-top").style.display = "block"; // Mostrar la flecha
                  // document.getElementById("barra").style.backgroundColor = "#273050"; // Fondo a azul
                  document.getElementById("barra").style.backgroundColor = "#000000"; // Fondo a negro
                  document.getElementById("barra").style.transform = 'translateY(-41px)';
            } 
            else {
                  document.getElementById("return-to-top").style.display = "none"; // Ocultar la flecha
                  document.getElementById("barra").style.backgroundColor = "transparent"; // Fondo transparente
                  document.getElementById("barra").style.transform = 'translateY(0)';
            }
         });
         // Seleccionar link activo
         const btnsLink = document.querySelectorAll("a");
        
         btnsLink[3].addEventListener("click", ()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[3].classList.add("active");
         });

         btnsLink[6].addEventListener("click",()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[5].classList.add("active");
         });
         btnsLink[7].addEventListener("click",()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[5].classList.add("active");
         });
         btnsLink[8].addEventListener("click",()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[5].classList.add("active");
         });
         btnsLink[9].addEventListener("click",()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[9].classList.add("active");
         });

      }
   }
</script>
<style scoped>

   a {
      color: #273b60;
      transition: 0.5s;
      text-decoration: none;

   }
   a:hover,
   a:active,
   a:focus {
      color: #273b60;
      outline: none;
      text-decoration: none;
   }
   p {
      padding: 0;
      margin: 0 0 30px 0;
   }

#header{
   margin-top: 2.5rem;
}
#barra{
transition: all 150ms ease-in;
}
   .logo img{
      height: 100px;
   }
   .navbar {
      padding: 0;
   }
   .navbar > div {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
   }
   .navbar li {
      position: relative;
   }
   .navbar a,
   .navbar a:focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0 10px 30px;
      font-size: 13px;
      font-weight: 600;
      color: #fff;
      white-space: nowrap;
      text-transform: uppercase;
      transition: 0.3s;
   }
   .navbar a i,
   .navbar a:focus i {
   font-size: 12px;
   line-height: 0;
   margin-left: 5px;
   }
   .navbar a:hover,
   .navbar .active,
   .navbar .active:focus,
   .navbar li:hover>a {
   color: #273b60;
   font-weight: 600;
   }
   .navbar .dropdown  div {
   display: block;
   position: absolute;
   left: 14px;
   top: calc(100% + 30px);
   margin: 0;
   padding: 10px 0;
   z-index: 99;
   opacity: 0;
   visibility: hidden;
   background: #fff;
   box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
   transition: 0.3s;
   }
   .navbar .dropdown > div :nth-child(n) {
   min-width: 200px;
   }
   .navbar .dropdown > div :nth-child(n) {
   padding: 10px 20px;
   text-transform: none;
   color: #666666;
   }
   .navbar .dropdown div a i {
   font-size: 12px;
   }
   .navbar .dropdown > div a:hover,
   .navbar .dropdown > div .active:hover,
   .navbar .dropdown > div :nth-child(n):hover>a {
   color: #273b60;
   }
   .navbar .dropdown:hover>div {
   opacity: 1;
   top: 100%;
   visibility: visible;
   }
   .navbar .dropdown .dropdown div {
   top: 0;
   left: calc(100% - 30px);
   visibility: hidden;
   }
   .navbar .dropdown .dropdown:hover>div {
   opacity: 1;
   top: 0;
   left: 100%;
   visibility: visible;
   }
   @media (max-width: 1366px) {
      .navbar .dropdown .dropdown div {
         left: -90%;
      }
      .navbar .dropdown .dropdown:hover>div {
         left: -100%;
      }
   }
   /**
   * Mobile Navigation 
   */
   .mobile-nav-toggle {
   color: #fff;
   font-size: 28px;
   cursor: pointer;
   display: none;
   line-height: 0;
   transition: 0.5s;
   }
   @media (max-width: 991px) {
   .mobile-nav-toggle {
   display: block;
   }
   .navbar > div {
   display: none;
   }
   }
   .navbar-mobile {
   position: fixed;
   overflow: hidden;
   top: 0;
   right: 0;
   left: 0;
   bottom: 0;
   background: rgba(26, 26, 26, 0.9);
   transition: 0.3s;
   z-index: 999;
   }
   .navbar-mobile .mobile-nav-toggle {
   position: absolute;
   top: 15px;
   right: 15px;
   }
   .navbar-mobile > div {
   display: block;
   position: absolute;
   top: 55px;
   right: 15px;
   bottom: 15px;
   left: 15px;
   padding: 10px 0;
   background-color: #fff;
   overflow-y: auto;
   transition: 0.3s;
   }
   .navbar-mobile a,
   .navbar-mobile a:focus {
   padding: 10px 20px;
   font-size: 15px;
   color: #333333;
   }
   .navbar-mobile a:hover,
   .navbar-mobile .active,
   .navbar-mobile li:hover>a {
   color: #273b60;
   }
   .navbar-mobile .getstarted,
   .navbar-mobile .getstarted:focus {
   margin: 15px;
   }
   .navbar-mobile .dropdown ul {
   position: static;
   display: none;
   margin: 10px 20px;
   padding: 10px 0;
   z-index: 99;
   opacity: 1;
   visibility: visible;
   background: #fff;
   box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
   }
   .navbar-mobile .dropdown ul li {
   min-width: 200px;
   }
   .navbar-mobile .dropdown ul a {
   padding: 10px 20px;
   }
   .navbar-mobile .dropdown ul a i {
   font-size: 12px;
   }
   .navbar-mobile .dropdown ul a:hover,
   .navbar-mobile .dropdown ul .active:hover,
   .navbar-mobile .dropdown ul li:hover>a {
   color: #273b60;
   }
   .navbar-mobile .dropdown>.dropdown-active {
   display: block;
   }
</style>
