<template>
  <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2 v-if="this.lang == 'es'">Noticias</h2>
        <h2 v-if="this.lang == 'en'">News</h2>
        <p v-if="this.lang == 'es'">
          Mantente al día con las últimas noticias y casos destacados

        </p>
        <p v-if="this.lang == 'en'">
          Stay up to date with the latest news and notable cases
        </p>
      </div>
      <div class="row gy-5">
        <div v-for="p in posts" :key="p.id" class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">
            <div class="post-img position-relative overflow-hidden">
            </div>
            <div class="post-content d-flex flex-column">
              <h3 v-if="this.lang == 'es'" class="post-title">{{ p.title }}</h3>
              <h3 v-if="this.lang == 'en'" class="post-title">{{ p.title_ingles }}</h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i>
                  <span class="ps-2">{{ p.client }}</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i>
                  <span class="ps-2">{{ p.mandante }}</span>
                </div>
              </div>
              <hr />              
            </div>
          </div>
        </div>
        <!-- End post item -->
        <router-link to="/casos-destacados" class="readmore stretched-link">Leer más</router-link>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: "BlogComp",
  data() {
    return {
      posts: [],
      lang: document.documentElement.lang,
    };
  },
  async created() {
    if (this.lang == "") {
      this.lang = "es";
    }
    let promesa = null;
    if (this.lang == "es") {
      promesa = await fetch("https://byvabogados.cl/api/index.php?limit=3");
    }
    this.posts = await promesa.json();
  },
  mounted() {
    window.addEventListener("click", (e) => {
      if (e.target.id === "btn-lang") {
        this.lang = document.documentElement.lang;
      }
    });
  },
};
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
.readmore {
  text-align: center;
  color: var(--color-primary);
  font-weight: 500;
  /* line-height: 1; */
  transition: 0.3s;
}
.readmore i {
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
