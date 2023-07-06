<template>
   <section class="hero bg-cover bg-position py-4">
      <div class="banner container py-5 index-forward text-white">
         <h1>Nombre de entrada</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-none mb-0 p-0">
               <li class="breadcrumb-item ps-0">
                  <router-link class="nav-link" to="/"> <i class="bi bi-house-door"></i> Inicio</router-link>
               </li>
               <li class="breadcrumb-item">
                  <router-link class="nav-link" to="/BlogView">Noticias</router-link>
               </li>
               <li class="breadcrumb-item active">
                  <router-link class="nav-link" to="/BlogView">Entrada</router-link>
               </li>
               <!-- <li class="breadcrumb-item active">Entrada</li> -->
            </ol>
         </nav>
      </div>
   </section>
   <!-- End Breadcrumbs -->
   <!-- ======= Blog Details Section ======= -->
   <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
         <div class="row g-5">
            <div class="col-lg-8">
               <article class="blog-details">
                  <div class="post-img">
                     <img src="../assets/2.jpg" alt="" class="img-fluid">
                  </div>
                  <h2 class="title">Contratación Pública</h2>
                  <div class="content">
                     <p>
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                        Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                     </p>
                     <p>
                        Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                     </p>
                     <blockquote>
                        <p>
                           Las nuevas leyes son un paso importante hacia una justicia más transparente y eficiente en Chile. Estas reformas nos permitirán fortalecer el sistema judicial y asegurar un acceso igualitario a la justicia para todos los ciudadanos
                        </p>
                     </blockquote>
                     <p>
                        Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                        Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                        Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                     </p>
                     <h3>Et quae iure vel ut odit alias.</h3>
                     <p>
                        Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                        Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                        Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                     </p>
                     <img src="../assets/3.jpg" class="img-fluid" alt="">
                     <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                     <p>
                        Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                        Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                     </p>
                     <p>
                        Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                     </p>
                  </div>
                  <!-- End post content -->
                  <router-link class="nav-link py-5" to="/BlogView"><i class="bi bi-arrow-left"></i> Volver a Noticias</router-link>
               </article>
               <!-- End blog post -->
            </div>
         </div>
      </div>
   </section>
</template>
<script>
   export default {
   name: "BlogdetalleView",
   };
</script>
<style scoped>
   .hero {
   position: relative;
   }
   .bg-cover {
   background-size: cover !important;
   background-position: center center !important;
   }
   .index-forward {
   position: relative;
   z-index: 99;
   }
   .bg-none {
   background: none !important;
   }
   .container{
   width: 100%;
   padding-right: var(--bs-gutter-x, 1rem);
   padding-left: var(--bs-gutter-x, 1rem);
   margin-right: auto;
   margin-left: auto;
   }
   .banner{
   margin-top: 4rem;
   font-family: 'Raleway', sans-serif;
   }
   .hero.bg-cover{
   /* background-color: black; */
   background: url(../assets/fondobanner3.jpg);
   }

   .breadcrumb {
   padding: 0 0;
   list-style: none;
   }
   .breadcrumb-item:hover{
      color: antiquewhite;
   }
   .breadcrumb-item + .breadcrumb-item {
   padding-left: 0.5rem;
   }
   .breadcrumb-item + .breadcrumb-item::before {
   float: left;
   padding-right: 0.5rem;
   color: #f8f9fa;
   content: var(--bs-breadcrumb-divider, "|") /* rtl: var(--bs-breadcrumb-divider, "|") */;
   }
   .breadcrumb-item.active {
   color: #f8f9fa;
   }
   .blog .posts-list article {
   box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
   padding: 30px;
   height: 100%;
   }
   .blog .posts-list article+article {
   margin-top: 60px;
   }
   .blog .posts-list .post-img {
   max-height: 240px;
   margin: -30px -30px 0 -30px;
   overflow: hidden;
   }
   .blog .posts-list .title {
   font-size: 24px;
   font-weight: 700;
   padding: 0;
   margin: 20px 0 0 0;
   }
   .blog .posts-list .title a {
   color: var(--color-secondary);
   transition: 0.3s;
   }
   .blog .posts-list .title a:hover {
   color: var(--color-primary);
   }
   .blog .posts-list .content {
   margin-top: 20px;
   }
   .blog .posts-list .read-more a {
   display: inline-block;
   background: var(--color-primary);
   color: var(--color-white);
   padding: 8px 30px;
   transition: 0.3s;
   font-size: 14px;
   border-radius: 4px;
   }
   .blog .posts-list .read-more a:hover {
   background: rgba(var(--color-primary-rgb), 0.8);
   }
   /*--------------------------------------------------------------
   # Blog Details Page
   --------------------------------------------------------------*/
   .blog .blog-details {
   box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
   padding: 30px;
   }
   .blog .blog-details .post-img {
   margin: -30px -30px 20px -30px;
   overflow: hidden;
   }
   .blog .blog-details .title {
   font-size: 28px;
   font-weight: 700;
   padding: 0;
   margin: 20px 0 0 0;
   color: var(--color-secondary);
   }
   .blog .blog-details .content {
   margin-top: 20px;
   }
   .blog .blog-details .content h3 {
   font-size: 22px;
   margin-top: 30px;
   font-weight: bold;
   }
   .blog .blog-details .content blockquote {
   overflow: hidden;
   background-color: rgba(var(--color-secondary-rgb), 0.06);
   padding: 60px;
   position: relative;
   text-align: center;
   margin: 20px 0;
   }
   .blog .blog-details .content blockquote p {
   color: var(--color-default);
   line-height: 1.6;
   margin-bottom: 0;
   font-style: italic;
   font-weight: 500;
   font-size: 22px;
   }
   .blog .blog-details .content blockquote:after {
   content: "";
   position: absolute;
   left: 0;
   top: 0;
   bottom: 0;
   width: 3px;
   background-color: var(--color-secondary);
   margin-top: 20px;
   margin-bottom: 20px;
   }
</style>
