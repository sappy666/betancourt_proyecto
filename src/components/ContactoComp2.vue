<template>
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="section-header">
         <h2>Contacto</h2>
      </div>
           <div class="container" data-aos="fade-up">
         <div class="row mt-2">
            <div class="col-lg-4">
               <div class="info">
                  <div class="address">
                     <i class="bi bi-geo-alt"></i>
                     <h4>Ubicación:</h4>
                     <p>San Antonio 427 oficina 711</p>
                  </div>
                  <div class="email">
                     <i class="bi bi-envelope"></i>
                     <h4>Email:</h4>
                     <p>contacto@betancourtabogados.cl</p>
                     <p>asesorias@betancourtabogados.cl</p>
                  </div>
                  <div class="phone">
                     <i class="bi bi-phone"></i>
                     <h4>Teléfonos:</h4>
                     <p>+56 2 2380 0530</p>
                     <p>+56 2 2633 7482</p>
                     <p>+56 2 2633 1851</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
               <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                     <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
                     </div>
                  </div>
                  <div class="form-group mt-3">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Nombre de la empresa" required>
                  </div>
                  <div class="form-group mt-3">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo de consulta" required>
                  </div>
                  <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                  </div>
                  <div class="my-3">
                     <div class="loading">Cargando</div>
                     <div class="error-message"></div>
                     <div class="sent-message">Tu mensaje fue enviado, nos comunicaremos contigo!</div>
                  </div>
                  <div class="text-center"><button type="submit">Enviar mensaje</button></div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Section -->
</template>
<script>
   export default {
   name: 'ContactoComp2',
   }
</script>
<style scoped>
   .contact {
   padding-top: 5px;
   font-family: var(--font-primary);
   }
   .contact .info {
   width: 100%;
   background: #fff;
   }
   .contact .info i {
   font-size: 20px;
   color: #26547C;
   float: left;
   width: 44px;
   height: 44px;
   background: #ecf9f0;
   display: flex;
   justify-content: center;
   align-items: center;
   border-radius: 50px;
   transition: all 0.3s ease-in-out;
   }
   .contact .info h4 {
   padding: 0 0 0 60px;
   font-size: 22px;
   font-weight: 600;
   margin-bottom: 5px;
   color: #403d62;
   }
   button{
   font-family: var(--font-primary);
   }
   .contact .info p {
   padding: 0 0 0 60px;
   margin-bottom: 0;
   font-size: 14px;
   color: #4e5b87;
   }
   .contact .info .email,
   .contact .info .phone {
   margin-top: 40px;
   }
   .contact .info .email:hover i,
   .contact .info .address:hover i,
   .contact .info .phone:hover i {
   background: #26547C;
   color: #fff;
   }
   .contact .php-email-form {
   width: 100%;
   background: #fff;
   }
   .contact .php-email-form .form-group {
   padding-bottom: 8px;
   }
   .contact .php-email-form .error-message {
   display: none;
   color: #fff;
   background: #c43e19;
   text-align: left;
   padding: 15px;
   font-weight: 600;
   }
   .contact .php-email-form .error-message br+br {
   margin-top: 25px;
   }
   .contact .php-email-form .sent-message {
   display: none;
   color: #fff;
   background: #26547C;
   text-align: center;
   padding: 15px;
   font-weight: 600;
   }
   .contact .php-email-form .loading {
   display: none;
   background: #fff;
   text-align: center;
   padding: 15px;
   }
   .contact .php-email-form .loading:before {
   content: "";
   display: inline-block;
   border-radius: 50%;
   width: 24px;
   height: 24px;
   margin: 0 10px -6px 0;
   border: 3px solid #26547C;
   border-top-color: #eee;
   animation: animate-loading 1s linear infinite;
   }
   .contact .php-email-form input,
   .contact .php-email-form textarea {
   border-radius: 4px;
   box-shadow: none;
   font-size: 14px;
   }
   .contact .php-email-form input:focus,
   .contact .php-email-form textarea:focus {
   border-color: #5f81cf;
   }
   .contact .php-email-form input {
   height: 44px;
   }
   .contact .php-email-form textarea {
   padding: 10px 12px;
   }
   .contact .php-email-form button[type=submit] {
   background: #5f74cf;
   border: 0;
   padding: 10px 35px;
   color: #fff;
   transition: 0.4s;
   border-radius: 50px;
   }
   .contact .php-email-form button[type=submit]:hover {
   background: #3a6cc1;
   }
   @keyframes animate-loading {
   0% {
   transform: rotate(0deg);
   }
   100% {
   transform: rotate(360deg);
   }
   }
   .section-header{
      margin-top: 4rem;
   }
</style>
