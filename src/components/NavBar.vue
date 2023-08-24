<template>
   <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div id="barra" class="container-fluid">
         <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
               <router-link to="/" class="logo"><img src="../assets/logo1.png" alt="" class="img-fluid"></router-link>
               <nav id="navbar" class="navbar">
                  <div>
                     <router-link class="nav-link active" to="/">Inicio</router-link>
                     <router-link class="nav-link" to="/#about">Quienes somos</router-link>
                     <div class="dropdown">
                        <router-link to="/areas-practica"><span>Áreas de práctica</span> <i class="bi bi-chevron-down d-none d-md-block"></i></router-link>
                        <div>
                           <router-link class="nav-link" to="/areas-practica#contratacion">Asesoria en Compras Públicas</router-link>
                           <router-link class="nav-link" to="/areas-practica#reclamacion">Reclamación y defensa de adjudicación</router-link>
                           <router-link class="nav-link" to="/areas-practica#ejecucion">Asesoría en la Ejecución</router-link>
                           <router-link class="nav-link" to="/areas-practica#cobranza">Cobranza Administrativa</router-link>
                           <router-link class="nav-link" to="/areas-practica#estrategica">Asesoría Estratégica</router-link>
                         
                        </div>
                     </div>
                     <router-link class="nav-link" to="/casos-destacados">Casos destacados</router-link>
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
         // ============== MODIFICACION NAVBAR AL SCROLL =====================
         window.addEventListener("scroll", function() {
            if (window.scrollY >= 50) { 
                  document.getElementById("return-to-top").style.display = "block"; 
                  document.getElementById("barra").style.backgroundColor = "#000000"; 
                  document.getElementById("barra").style.transform = 'translateY(-41px)';
            } 
            else {
                  document.getElementById("return-to-top").style.display = "none"; 
                  document.getElementById("barra").style.backgroundColor = "transparent";
                  document.getElementById("barra").style.transform = 'translateY(0)';
            }
         });
         // ============= MARCADO DE SECCION EN LINKS NAVBAR ==============
         const btnsLink = document.querySelectorAll("a");
         // Inicio
         btnsLink[3].addEventListener("click", ()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[3].classList.add("active");
         });
         // Areas practica
         for(let i=5; i <= 10; i++){
            btnsLink[i].addEventListener('click', ()=>{
               btnsLink.forEach((e)=>{
                  e.classList.remove("active");
               });
               btnsLink[5].classList.add("active");
            });
         }
         // Casos destacados
         btnsLink[11].addEventListener('click', ()=>{
            btnsLink.forEach((e)=>{
               e.classList.remove("active");
            });
            btnsLink[11].classList.add("active");
         });
         // =================== RESPONSIVIDAD NAVBAR =================
         const navbar = document.querySelector("#navbar > div");
         const navbarToggler = document.querySelector(".mobile-nav-toggle");
         navbarToggler.addEventListener("click", ()=>{
            if(navbar.style.display == "none"){
               navbar.style.display = "block";
               navbarToggler.classList.remove("bi-list");
               navbarToggler.classList.add("bi-x");
            }
            else{
               navbar.style.display = "none";
               navbarToggler.classList.remove("bi-x");
               navbarToggler.classList.add("bi-list");
            }
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
   .navbar .dropdown > div :nth-child(n):hover{
      transform: translateX(10px);
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
         position: absolute;
         top: 60px;
         left: -500%;
         background-color: black;
         padding-right: 1.5rem;
         height: 100vh;
      }
   }
</style>
