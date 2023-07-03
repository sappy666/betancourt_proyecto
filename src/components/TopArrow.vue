<template>
    <!-- Flecha hacia arriba -->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</template>
<script>
    export default {
        name: 'TopArrow',
    
        mounted(){
        window.addEventListener("scroll", function() {
        if (window.pageYOffset >= 50) { // Si la página se ha desplazado más de 50px
            document.getElementById("return-to-top").style.display = "block"; // Mostrar la flecha
        } else {
            document.getElementById("return-to-top").style.display = "none"; // Ocultar la flecha
        }
        });

        document.getElementById("return-to-top").addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: "smooth" }); // Desplazarse suavemente hacia arriba
        });
        }   
    }

</script>
<style scoped>
#return-to-top {
position: fixed;
bottom: 20px;
right: 20px;
background: rgb(0, 0, 0);
background: rgba(0, 0, 0, 0.7);
width: 50px;
height: 50px;
display: block;
text-decoration: none;
-webkit-border-radius: 35px;
-moz-border-radius: 35px;
border-radius: 35px;
display: none;
-webkit-transition: all 0.3s linear;
-moz-transition: all 0.3s ease;
-ms-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
transition: all 0.3s ease;
}
#return-to-top i {
color: #fff;
margin: 0;
position: relative;
left: 16px;
top: 13px;
font-size: 19px;
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
-ms-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
transition: all 0.3s ease;
}
#return-to-top:hover {
background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
color: #fff;
top: 5px;
}
   /* Extra Things */
body{
background: #eee ;
}
h3{
font-size: 30px; 
font-weight: 400;
text-align: center;
margin-top: 50px;
}
h3 i{
color: #444;
}
</style>
