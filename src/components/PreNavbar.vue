<template>
 <header class="header">
      <div class="top-bar bg-dark text-white">
        <div class="container">
          <div class="row gx-0">
            <div class="col-lg-4 bg-primary py-2 text-center text-lg-start d-none d-lg-flex align-items-center">
              <p class="mb-0 text-sm"><i class="fas fa-clock me-2"></i>Opening hours: Mon - Sat 9:00 - 18:00</p>
            </div>
            <div class="col-lg-8 text-end py-2 text-center text-lg-end">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="fw-normal text-sm reset-anchor" href="#!"><i class="fas fa-mobile me-2"></i>+535 421 895 6523</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a class="fw-normal text-sm reset-anchor" href="#!"><i class="fas fa-envelope me-2"></i>Construction@example.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
 </header>
</template>
<script>
   export default {
     name: "PreNavbar",
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

   }

   .top-bar [class*='col'].bg-primary {
  position: relative;
}

.top-bar [class*='col'].bg-primary::before {
  content: '';
  display: block;
  position: absolute;
  width: 20rem;
  height: 100%;
  top: 0;
  left: -20rem;
  background: #2b90d9;
}
</style>
