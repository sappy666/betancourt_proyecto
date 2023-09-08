<template>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-3 col-md-6 footer-info">
            <router-link to="/" class="logo"
              ><img src="../assets/logo2.png" alt="" class=""
            /></router-link>
          </div>
          <div class="col-lg-3 col-md-6 footer-links d-none d-md-block">
            <h4 v-if="this.lang == 'es'">Sitio</h4>
            <h4 v-if="this.lang == 'en'">Site</h4>
            <ul>
              <li>
                <i class="bi bi-chevron-right"></i>
                <router-link v-if="this.lang == 'es'" to="/"
                  >Inicio</router-link
                >
                <router-link v-if="this.lang == 'en'" to="/">Home</router-link>
              </li>
              <li>
                <i class="bi bi-chevron-right"></i
                ><router-link v-if="this.lang == 'es'" to="/#about"
                  >Sobre Nosotros</router-link
                >
                <router-link v-if="this.lang == 'en'" to="/#about"
                  >About us</router-link
                >
              </li>
              <li>
                <i class="bi bi-chevron-right"></i
                ><router-link v-if="this.lang == 'es'" to="/#services"
                  >Servicios</router-link
                >
                <router-link v-if="this.lang == 'en'" to="/#services"
                  >Services</router-link
                >
              </li>
            </ul>
            <br />
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 v-if="this.lang == 'es'">Contáctanos</h4>
            <h4 v-if="this.lang == 'en'">Contact us</h4>
            <p>
              <strong v-if="this.lang == 'es'"
                ><i class="bi bi-telephone-fill"></i> Teléfono:</strong
              >
              <strong v-if="this.lang == 'en'"
                ><i class="bi bi-telephone-fill"></i> Phone numbers:</strong
              >
              <br />
              +56 2 2380 0530<br />
              +56 2 2633 7482<br />
              +56 2 2633 1851<br />
              <strong><i class="bi bi-envelope-fill"></i> Emails:</strong>
              <br />
              contacto@betancourtabogados.cl<br />
              <!-- asesorias@betancourtabogados.cl<br> -->
            </p>
            <div class="social-links">
              <a
                href="https://www.linkedin.com/company/betancourtabogados/?viewAsMember=true"
                class="linkedin"
                target="_blank"
                ><i class="bi bi-linkedin"></i
              ></a>
              <a
                href="https://wa.me/56993170366"
                target="_blank"
                class="whatsapp"
                ><i class="bi bi-whatsapp"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p v-if="this.lang == 'es'">
              Recibe en tu correo todas las actualizaciones sobre casos
              destacados y publicaciones.
            </p>
            <p v-if="this.lang == 'en'">
              Receive all updates on notable cases and publications in your
              email.
            </p>
            <form action="" method="POST">
              <input
                type="email"
                name="email"
                id="emailNewsletter"
                placeholder="Email"
                required
              />
              <input
                v-if="this.lang == 'es'"
                class="btn_newsletter"
                type=""
                value="Subscribir"
                @click="subscribeNewsletter"
              />
              <input
                v-if="this.lang == 'en'"
                class="btn_newsletter"
                type=""
                value="Subscribe"
                @click="subscribeNewsletter"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  name: "FooterComp",
  data() {
    return {
      lang: document.documentElement.lang,
      errorNewletter: false,
    };
  },
  methods: {
    async subscribeNewsletter() {
      let mailNewsletter = document.getElementById("emailNewsletter").value;
      const options = {
        method: "POST",
        headers: {
          accept: "application/json",
          "content-type": "application/json",
          "api-key":
            "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",
        },
        body: JSON.stringify({
          updateEnabled: false,
          listIds: [205],
          email: mailNewsletter,
        }),
      };
      fetch("https://api.brevo.com/v3/contacts", options)
        .then((response) => response.json())
        .then(() =>{
          this.$gtag.event("suscripcion_newsletter", {
            event_category: "documentation",
            event_label: "Usuario suscribe a newsletter",
            value: 1,
          });
        }
        )
        .catch((err) => {
          alert("Error al subscribir");
          console.error(err);
        });
    },
  },
  created() {
    if (this.lang == "") {
      this.lang = "es";
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
a {
  color: #26547c;
  transition: 0.5s;
  text-decoration: none;
}
a:hover,
a:active,
a:focus {
  color: #26547c;
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
.logo img {
  width: 150px;
}
#footer {
  background: #000;
  color: #959595;
  font-size: 14px;
}
#footer .footer-top {
  background: #000;
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
  background: #26547c;
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
  background: #26547c;
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
  color: #26547c;
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
#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
}
#footer .footer-top .footer-newsletter .btn_newsletter {
  background: #26547c;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}
#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #26547c;
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
