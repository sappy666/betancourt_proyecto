<template>
   <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
         <div class=" section-header">
            <h2>Noticias</h2>
            <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
         </div>
         <div class="row gy-5">
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
               <div class="post-item position-relative h-100">
                  <div class="post-img position-relative overflow-hidden">
                     <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                     <span class="post-date">Deciembre 12</span>
                  </div>
                  <div class="post-content d-flex flex-column">
                     <h3 class="post-title">Defensa Proveedores y Contratistas</h3>
                     <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person"></i> <span class="ps-2">Betancourt Abogados</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                           <i class="bi bi-folder2"></i> <span class="ps-2">Contratación Pública</span>
                        </div>
                     </div>
                     <hr>
                     <a href="blog-details.html" class="readmore stretched-link"><span>Leer más</span><i class="bi bi-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            <!-- End post item -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
               <div class="post-item position-relative h-100">
                  <div class="post-img position-relative overflow-hidden">
                     <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                     <span class="post-date">Julio 17</span>
                  </div>
                  <div class="post-content d-flex flex-column">
                     <h3 class="post-title">Planificación Estratégica</h3>
                     <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person"></i> <span class="ps-2">Betancourt Abogados</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                           <i class="bi bi-folder2"></i> <span class="ps-2">Gestión de Negocios</span>
                        </div>
                     </div>
                     <hr>
                     <a href="blog-details.html" class="readmore stretched-link"><span>Leer más</span><i class="bi bi-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            <!-- End post item -->
            <div class="col-xl-4 col-md-6">
               <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">
                  <div class="post-img position-relative overflow-hidden">
                     <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                     <span class="post-date">Septiembre 05</span>
                  </div>
                  <div class="post-content d-flex flex-column">
                     <h3 class="post-title">Responsabilidad Civil</h3>
                     <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person"></i> <span class="ps-2">Betancourt Abogados</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                           <i class="bi bi-folder2"></i> <span class="ps-2">Responsabilidad</span>
                        </div>
                     </div>
                     <hr>
                     <a href="blog-details.html" class="readmore stretched-link"><span>Leer más</span><i class="bi bi-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            <!-- End post item -->
         </div>
      </div>
   </section>
   <!-- End Recent Blog Posts Section -->
</template>
<script>
   export default {
     name: "BlogView",
     }
</script>
<style scoped>
   .recent-blog-posts .post-item {
   box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
   transition: 0.3s;
   }
   .recent-blog-posts .post-item .post-img img {
   transition: 0.5s;
   }
   .recent-blog-posts .post-item .post-date {
   position: absolute;
   right: 0;
   bottom: 0;
   background-color: var(--color-primary);
   color: #fff;
   text-transform: uppercase;
   font-size: 13px;
   padding: 6px 12px;
   font-weight: 500;
   }
   .recent-blog-posts .post-item .post-content {
   padding: 30px;
   }
   .recent-blog-posts .post-item .post-title {
   font-size: 24px;
   color: var(--color-secondary);
   font-weight: 700;
   transition: 0.3s;
   margin-bottom: 15px;
   }
   .recent-blog-posts .post-item .meta i {
   font-size: 16px;
   color: var(--color-primary);
   }
   .recent-blog-posts .post-item .meta span {
   font-size: 15px;
   color: #838893;
   }
   .recent-blog-posts .post-item hr {
   color: #888;
   margin: 20px 0;
   }
   .recent-blog-posts .post-item .readmore {
   display: flex;
   align-items: center;
   font-weight: 600;
   line-height: 1;
   transition: 0.3s;
   color: #838893;
   }
   .recent-blog-posts .post-item .readmore i {
   line-height: 0;
   margin-left: 6px;
   font-size: 16px;
   }
   .recent-blog-posts .post-item:hover .post-title,
   .recent-blog-posts .post-item:hover .readmore {
   color: var(--color-primary);
   }
   .recent-blog-posts .post-item:hover .post-img img {
   transform: scale(1.1);
   }
</style>
