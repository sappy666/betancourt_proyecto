<template>
   <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container-fluid">
         <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
               <!-- <h1 class="logo"><a href="../views/HomeView.vue">Solsa</a></h1> -->
               <a href="index.html" class="logo"><img src="../assets/logo.png" alt="" class="img-fluid"></a>
               <nav id="navbar" class="navbar">
                  <ul>
                     <li><a class="nav-link scrollto active" href="../views/HomeView.vue">Inicio</a></li>
                     <li><a class="nav-link scrollto" href="#portfolio">Quienes somos</a></li>
                     <li class="dropdown">
                        <a href="#"><span>Áreas de práctica</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                           <li><a href="#">Áreas</a></li>
                           <li><a href="#">Áreas</a></li>
                           <li><a href="#">Áreas</a></li>
                           <li><a href="#">Áreas</a></li>
                        </ul>
                     </li>
                     <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                  </ul>
                  <i class="bi bi-list mobile-nav-toggle"></i>
               </nav>
               <!-- .navbar -->
            </div>
         </div>
      </div>
   </header>
   <!-- End Header -->
</template>
<script>
   export default {
   name: 'NavBar', 
   }
</script>
<style scoped>
   body {
   background: #fff;
   color: #666666;
   font-family: "Open Sans", sans-serif;
   }
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
   h1,
   h2,
   h3,
   h4,
   h5,
   h6 {
   font-family: "Montserrat", sans-serif;
   font-weight: 400;
   margin: 0 0 20px 0;
   /* padding: 0; */
   }
   .logo img{
      height: 150px;
      padding-top: 15px;
   }
   .navbar {
   padding: 0;
   }
   .navbar ul {
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
   font-family: "Montserrat", sans-serif;
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
   }
   .navbar .dropdown ul {
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
   .navbar .dropdown ul li {
   min-width: 200px;
   }
   .navbar .dropdown ul a {
   padding: 10px 20px;
   text-transform: none;
   color: #666666;
   }
   .navbar .dropdown ul a i {
   font-size: 12px;
   }
   .navbar .dropdown ul a:hover,
   .navbar .dropdown ul .active:hover,
   .navbar .dropdown ul li:hover>a {
   color: #273b60;
   }
   .navbar .dropdown:hover>ul {
   opacity: 1;
   top: 100%;
   visibility: visible;
   }
   .navbar .dropdown .dropdown ul {
   top: 0;
   left: calc(100% - 30px);
   visibility: hidden;
   }
   .navbar .dropdown .dropdown:hover>ul {
   opacity: 1;
   top: 0;
   left: 100%;
   visibility: visible;
   }
   @media (max-width: 1366px) {
   .navbar .dropdown .dropdown ul {
   left: -90%;
   }
   .navbar .dropdown .dropdown:hover>ul {
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
   .navbar ul {
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
   .navbar-mobile ul {
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
