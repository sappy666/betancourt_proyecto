<template>
   <footer id="footer">
      <div class="footer-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 footer-info">
                  <router-link to="/" class="logo"><img src="../assets/logo2.png" alt="" class=""></router-link>
                  <!-- <a href="index.html" class="logo"><img src="../assets/logo2.png" alt="" class=""></a> -->
               </div>
               <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Sitio</h4>
                  <ul>
                     <li><i class="bi bi-chevron-right"></i><router-link to="/">Inicio</router-link></li>
                     <li><i class="bi bi-chevron-right"></i><router-link to="/#about">Sobre Nosotros</router-link></li>
                     <li><i class="bi bi-chevron-right"></i><router-link to="/#services">Servicios</router-link></li>
                  </ul>
                  <br>
                  <!-- <h4>Ayuda</h4>
                  <ul>
                     <li><i class="bi bi-chevron-right"></i> <a href="#">Contáctanos</a></li>
                  </ul> -->
               </div>
               <div class="col-lg-3 col-md-6 footer-contact">
                  <h4>Contactános</h4>
                  <p>
                     <strong><i class="bi bi-telephone-fill"></i> Teléfono:</strong> <br> +56 2 2380 0530<br>
                     <strong><i class="bi bi-envelope-fill"></i> Correos:</strong> <br> contacto@betancourtabogados.cl<br>
                     asesorias@betancourtabogados.cl<br>
                  </p>
                  <div class="social-links">
                     <a href="https://www.linkedin.com/company/betancourtabogados/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
                     <a href="https://wa.me/56993170366" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                     <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                     <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                     <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Recibe en tu correo todas las actualizaciones sobre casos destacados y publicaciones.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribir">
            </form>
          </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- End Footer -->
</template>
<script>
   export default {
   name: 'FooterComp',
   }
</script>
<style scoped>

   a {
      color: #26547C;
      transition: 0.5s;
      text-decoration: none;
   }
   a:hover,
   a:active,
   a:focus {
      color: #26547C;
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
      font-weight: 400;
      margin: 0 0 20px 0;
      padding: 0;
   }
   .logo img{
      width: 150px;
   }
   #footer {
      background: #000;
      padding: 0 0 30px 0;
      color: #959595;
      font-size: 14px;  
    }
   #footer .footer-top {
   background: #111;
   padding: 60px 0 30px 0;
   }
   #footer .footer-top .footer-info {
   margin-bottom: 30px;
   }

   #footer .footer-top .social-links a {
   display: inline-block;
   background: #333;
   color: #eee;
   line-height: 1;
   margin-right: 4px;
   border-radius: 50%;
   width: 36px;
   height: 36px;
   transition: 0.3s;
   display: inline-flex;
   align-items: center;
   justify-content: center;
   }
   #footer .footer-top .social-links a i {
   line-height: 0;
   font-size: 16px;
   }
   #footer .footer-top .social-links a:hover {
   background: #26547C;
   color: #fff;
   }
   #footer .footer-top h4 {
   font-size: 14px;
   font-weight: bold;
   color: #fff;
   text-transform: uppercase;
   position: relative;
   padding-bottom: 12px;
   }
   #footer .footer-top h4::before,
   #footer .footer-top h4::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 2px;
   }
   #footer .footer-top h4::before {
      right: 0;
      background: #555;
   }
   #footer .footer-top h4::after {
      background: #26547C;
      width: 60px;
   }
   #footer .footer-top .footer-links {
   margin-bottom: 30px;
   }
   #footer .footer-top .footer-links ul {
   list-style: none;
   padding: 0;
   margin: 0;
   }
   #footer .footer-top .footer-links ul i {
      padding-right: 8px;
      color: #ddd;
   }
   #footer .footer-top .footer-links ul li {
      border-bottom: 1px solid #333;
      padding: 10px 0;
   }
   #footer .footer-top .footer-links ul li:first-child {
      padding-top: 0;
   }
   #footer .footer-top .footer-links ul a {
      color: #eee;
   }
   #footer .footer-top .footer-links ul a:hover {
      color: #26547C;
   }
   #footer .footer-top .footer-contact {
      margin-bottom: 30px;
      font-weight: 300;
   }
   #footer .footer-top .footer-contact p {
      line-height: 26px;
      font-size: 14px;
   }
   #footer .footer-top .footer-newsletter {
   margin-bottom: 30px;
   }
   #footer .footer-top .footer-newsletter input[type=email] {
   border: 0;
   padding: 6px 8px;
   width: 65%;
   }
   #footer .footer-top .footer-newsletter input[type=submit] {
      background: #26547C;
      border: 0;
      width: 35%;
      padding: 6px 0;
      text-align: center;
      color: #fff;
      transition: 0.3s;
      cursor: pointer;
   }
   #footer .footer-top .footer-newsletter input[type=submit]:hover {
   background: #26547C;
   }
   #footer .copyright {
   text-align: center;
   padding-top: 30px;
   }
   #footer .credits {
   text-align: center;
   font-size: 13px;
   color: #ddd;
   }
</style>
