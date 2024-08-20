<template>
  <header
    id="header"
    class="fixed-top d-flex align-items-center header-transparent"
  >
    <div id="barra" class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div
          class="col-xl-11 d-flex align-items-center justify-content-between"
        >
          <router-link to="/" class="logo"
            ><img src="../assets/logo1.png" alt="" class="img-fluid"
          /></router-link>
          <nav id="navbar" class="navbar">
            <div>
              <router-link class="nav-link active" to="/">Inicio</router-link>
              <router-link class="nav-link" to="/#about"
                >Quienes somos</router-link
              >
              <div class="dropdown">
                <router-link to="/areas-practica"
                  ><span>Áreas de práctica</span>
                  <i class="bi bi-chevron-down d-none d-md-block"></i
                ></router-link>
                <div class="d-none d-md-block">
                  <router-link
                    class="nav-link"
                    to="/areas-practica#contratacion"
                    >Asesoria en Compras Públicas</router-link
                  >
                  <router-link class="nav-link" to="/areas-practica#reclamacion"
                    >Reclamación y defensa de adjudicación</router-link
                  >
                  <router-link class="nav-link" to="/areas-practica#ejecucion"
                    >Asesoría en la Ejecución</router-link
                  >
                  <router-link class="nav-link" to="/areas-practica#cobranza"
                    >Cobranza Administrativa</router-link
                  >
                  <router-link class="nav-link" to="/areas-practica#estrategica"
                    >Asesoría Estratégica</router-link
                  >
                </div>
              </div>
              <router-link class="nav-link" to="/casos-destacados"
                >Casos destacados</router-link
              >
              <router-link class="nav-link" to="/#contact"
                >Contacto</router-link
              >
              <div class="nav-link" to="/" id="btn-lang">EN</div>
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
  name: "NavBar",
  data() {
    return {
      lang: "",
    };
  },
  created() {
    this.lang = document.documentElement.lang;
  },
  mounted() {
    // ============== MODIFICACION NAVBAR AL SCROLL =====================
    window.addEventListener("scroll", function () {
      if (window.scrollY >= 50) {
        document.getElementById("return-to-top").style.display = "block";
        document.getElementById("barra").style.backgroundColor = "#000000";
        document.getElementById("barra").style.transform = "translateY(-41px)";
      } else {
        document.getElementById("return-to-top").style.display = "none";
        if(this.window.screen.width > 991){
          document.getElementById("barra").style.backgroundColor = "transparent";
          document.getElementById("barra").style.transform = "translateY(0)";
        }
      }
    });
    // ============= MARCADO DE SECCION EN LINKS NAVBAR ==============
    const btnsLink = document.querySelectorAll("a");
    console.log(btnsLink);
    // Inicio
    btnsLink[2].addEventListener("click", () => {
      btnsLink.forEach((e) => {
        e.classList.remove("active");
      });
      btnsLink[2].classList.add("active");
    });
    // Areas practica
    for (let i = 4; i < 10; i++) {
      btnsLink[i].addEventListener("click", () => {
        btnsLink.forEach((e) => {
          e.classList.remove("active");
        });
        btnsLink[4].classList.add("active");
      });
    }
    // Casos destacados
    btnsLink[10].addEventListener("click", () => {
      btnsLink.forEach((e) => {
        e.classList.remove("active");
      });
      btnsLink[10].classList.add("active");
    });
    // =================== RESPONSIVIDAD NAVBAR =================
    const navbar = document.querySelector("#navbar > div");
    const navbarToggler = document.querySelector(".mobile-nav-toggle");
    navbarToggler.addEventListener("click", () => {
      if (navbar.style.display == "none") {
        navbar.style.display = "block";
        navbarToggler.classList.remove("bi-list");
        navbarToggler.classList.add("bi-x");
      } else {
        navbar.style.display = "none";
        navbarToggler.classList.remove("bi-x");
        navbarToggler.classList.add("bi-list");
      }
    });
    // ================= CAMBIO IDIOMA =====================
    const btnLang = document.getElementById("btn-lang");
    btnLang.addEventListener("click", () => {
      // Pasar a ingles
      if (this.lang === "es") {
        btnLang.innerText = "ES";
        document.documentElement.lang = "en";
        this.lang = "en";
        btnsLink[2].innerText = "HOME";
        btnsLink[3].innerText = "ABOUT US";
        btnsLink[4].innerHTML =
          '<span>Areas of Practice</span><i class="bi bi-chevron-down d-none d-md-block"></i>';
        btnsLink[5].innerText = "Public Procurement Advisory";
        btnsLink[6].innerText = "Adjudication Claim and Defense";
        btnsLink[7].innerText = "Execution Advisory";
        btnsLink[8].innerText = "Administrative Debt Collection";
        btnsLink[9].innerText = "Strategic Advisory";
        btnsLink[10].innerText = "Notable cases";
        btnsLink[11].innerText = "Contact Us";
      }
      // Pasar a espanol
      else if (this.lang === "en") {
        btnLang.innerText = "EN";
        document.documentElement.lang = "es";
        this.lang = "es";
        btnsLink[2].innerText = "Inicio";
        btnsLink[3].innerText = "quienes somos";
        btnsLink[4].innerHTML =
          '<span>Áreas de práctica</span><i class="bi bi-chevron-down d-none d-md-block"></i>';
        btnsLink[5].innerText = "Asesoria en Compras Públicas";
        btnsLink[6].innerText = "Reclamación y defensa de adjudicación";
        btnsLink[7].innerText = "Asesoría en la Ejecución";
        btnsLink[8].innerText = "Cobranza Administrativa";
        btnsLink[9].innerText = "Asesoría Estratégica";
        btnsLink[10].innerText = "Casos destacados";
        btnsLink[11].innerText = "contacto";
      }
    });
  },
};
</script>
<style scoped>
a {
  color: var(--color-primary);
  transition: 0.5s;
  text-decoration: none;
}
a:hover,
a:active,
a:focus {
  color: var(--color-primary);
  outline: none;
  text-decoration: none;
}
p {
  padding: 0;
  margin: 0 0 30px 0;
}

#header {
  margin-top: 2.5rem;
}
#barra {
  transition: all 150ms ease-in;
  z-index: 2;
}
#btn-lang {
  cursor: pointer;
  color: #fff;
  font-size: 13px;
  font-weight: 600;
  padding: 8px 0 10px 20px;
  user-select: none;
  transition: 0.3s;
  display: flex;
  align-items: center;
}
#btn-lang:hover {
  cursor: pointer;
  color: var(--color-primary);
}
.logo img {
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
.navbar li:hover > a {
  color: var(--color-primary);
  font-weight: 600;
}
.navbar .dropdown div {
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
.navbar .dropdown > div :nth-child(n):hover {
  transform: translateX(10px);
}
.navbar .dropdown div a i {
  font-size: 12px;
}
.navbar .dropdown > div a:hover,
.navbar .dropdown > div .active:hover,
.navbar .dropdown > div :nth-child(n):hover > a {
  color: var(--color-primary);
}
.navbar .dropdown:hover > div {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown div {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > div {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown div {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > div {
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
  #barra{
    background-color: #000;
    transform: translateY(-41px);
  }
  #btn-lang{
    padding-left: 1.8rem;
  }
}
</style>
