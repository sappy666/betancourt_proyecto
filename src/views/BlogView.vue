<template>
  <!-- ======= Breadcrumbs ======= -->
  <section class="hero bg-cover bg-position py-4">
    <div class="banner container py-5 index-forward text-white">
      <h1 v-if="this.lang == 'es'">Noticias</h1>
      <h1 v-if="this.lang == 'en'">News</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-none mb-0 p-0">
          <li class="breadcrumb-item ps-0">
            <router-link v-if="this.lang == 'es'" to="/">
              <i class="bi bi-house-door"></i> Inicio</router-link
            >
            <router-link v-if="this.lang == 'en'" to="/">
              <i class="bi bi-house-door"></i> Home</router-link
            >
          </li>
          <li class="breadcrumb-item active">
            <router-link v-if="this.lang == 'es'" to="/BlogView"
              >Noticias</router-link
            >
            <router-link v-if="this.lang == 'en'" to="/BlogView"
              >News</router-link
            >
          </li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      
      <div class="row g-5 justify-content-center">
  <div class="col-lg-10">
    <div class="row gy-4 posts-list">
      <div v-for="p in posts" :key="p.id" class="col-lg-6">
        <article class="d-flex flex-column">
          <h2 v-if="lang == 'es'" class="title">
            {{ p.title }}
          </h2>
          <h2 v-if="lang == 'en'" class="title">
            {{ p.title_ingles }}
          </h2>

          <div v-if="lang == 'es'" class="subtitle">
            <p v-if="p.date != '0000-00-00'">{{ p.date }}</p>
            <p v-if="p.client != ''">
              <b>Cliente: </b>{{ p.client }}
            </p>
            <p v-if="p.mandante != ''">
              <b>Mandante: </b>{{ p.mandante }}
            </p>
            <p v-if="p.subtitle != ''">
              {{ p.subtitle }}
            </p>
          </div>
          <div v-if="lang == 'en'" class="subtitle">
            <p v-if="p.date != '0000-00-00'">{{ p.date }}</p>
            <p v-if="p.client != ''">
              <b>Client: </b>{{ p.client }}
            </p>
            <p v-if="p.mandante != ''">
              <b>Principal: </b>{{ p.mandante }}
            </p>
            <p v-if="p.subtitle_ingles != ''">
              {{ p.subtitle_ingles }}
            </p>
          </div>

          <div v-if="lang == 'es'" class="content">
            <p>
              {{ p.text }}
            </p>
          </div>
          <div v-if="lang == 'en'" class="content">
            <p>
              {{ p.text_ingles }}
            </p>
          </div>
        </article>
      </div>
    </div>
    <!-- End blog posts list -->
    <!-- <div class="blog-pagination">
      <ul class="justify-content-center">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div> -->
    <!-- End blog pagination -->
   </div>
  </div>


    </div>
  </section>

</template>
<script>
export default {
  name: "BlogView",
  data() {
    return {
      posts: [],
      lang: document.documentElement.lang,
    };
  },
  async created() {
    window.scrollTo({ top: 0, behavior: "instant" });
    if (this.lang == "") {
      this.lang = "es";
    }
    try{
      let promesa = await fetch("https://byvabogados.cl/api/index.php");
      let posts = await promesa.json();
      this.posts = posts;
    }
    catch(error){
      console.log(error)
    }
  },
  mounted() {
    window.addEventListener("click", (e) => {
      if (e.target.id == "btn-lang") {
        this.lang = document.documentElement.lang;
      }
    });
  },
};
</script>
<style scoped>
.bg-cover {
  background-size: cover !important;
}
.index-forward {
  position: relative;
  z-index: 99;
}
.container {
  padding-right: var(--bs-gutter-x, 1rem);
  padding-left: var(--bs-gutter-x, 1rem);
}
.banner {
  margin-top: 4rem;
  font-family: "Raleway", sans-serif;
}
.hero.bg-cover {
  background: url(../assets/fondobanner.jpg);
}
.breadcrumb {
  padding: 0 0;
  list-style: none;
}
.breadcrumb a {
  color: antiquewhite;
  text-decoration: none;
}
.breadcrumb-item:hover {
  color: antiquewhite;
}

.breadcrumb-item + .breadcrumb-item::before {
  color: #f8f9fa;
  content: "|";
}

.breadcrumb-item.active {
  color: #f8f9fa;
}
.blog .posts-list article {
  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
  padding: 30px;
  height: 100%;
}
.blog .posts-list article + article {
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
  background: #26547c;
  color: whitesmoke;
  padding: 8px 30px;
  transition: 0.3s;
  font-size: 14px;
  border-radius: 4px;
}
.blog .posts-list .read-more a:hover {
  background: #1d3b55;
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
/*--------------------------------------------------------------
   # Blog Home Pagination
   --------------------------------------------------------------*/
.blog .blog-pagination {
  margin-top: 30px;
  color: whitesmoke;
}
.blog .blog-pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}
.blog .blog-pagination li {
  margin: 0 5px;
  transition: 0.3s;
}
.blog .blog-pagination li a {
  color: var(--color-secondary);
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.blog .blog-pagination li.active,
.blog .blog-pagination li:hover {
  background: #26547c;
}
.blog .blog-pagination li.active a,
.blog .blog-pagination li:hover a {
  color: var(--color-white);
}

/* ========== ULTIMOS ============ */
.subtitle {
  color: #666;
}
.title {
  color: var(--color-primary);
  margin-bottom: 0.5rem !important;
}
.subtitle {
  border-bottom: var(--color-primary) 1px solid;
  padding-bottom: 1rem;
}
.subtitle p {
  margin: 0;
}
</style>
