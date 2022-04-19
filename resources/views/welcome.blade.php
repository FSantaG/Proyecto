<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body class="antialiased">
        
<!--Oooooh-->
        @include('layouts.navbar')

        <div style="background-image:url(img/bg-1.png)" class="bg-img">
            <div class="container">
                <button class="cta-btn" id="CTAregister">REGISTRARSE</button>
                <p style="color:white;text-shadow:2px 2px 2px black">¿Ya tienes cuenta? Haz click <a id="CTAlogin"><strong>aqui</strong></a> para iniciar sesion</p>
            </div>

            
            <div id="login" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    @include('layouts.login')
                </div>
            </div>
            
            <div id="register" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    @include('layouts.register')
                </div>
            </div>

            <div class="what">
                <h1>¿Que es <em style="color: #05fe0b">StringR</em> ?</h1>
                <p>
                    StringR es una plataforma donde compartir tus dudas de programador, en un ambiente tranquilo y sosegado. Basta con crearse una cuenta, y accederá a un lugar
                    con miles de usuarios dispuestos a solucionar sus dudas inconexas. 
                    <br/>
                    <br/>
                    ¿Tienes alguna duda? ¡Póngase en contacto con nuestro <a id="SAP">Servicio de Ayuda al Programador</a>!
                </p>
            </div>
            <hr>
            <div class="who">
                <h1>¿Para quien?</h1>
                <p>
                    StringR está diseñada para que su uso sea intuitivo y manejable, tanto por el programador nóvel, como por el especializado. 
                </p>
            </div>
            <hr>
            <div class="contact">
                <h1>Contacto</h1>
                <p>Puede mandar un correo a <strong style="color: #08e43c">soporte@stringr.com</strong> en caso de duda, avería o fallo del sistema.</p>
            </div>
        </div> 
<!--Oooooh-->
        <script>
        var login = document.getElementById("login");

        var register = document.getElementById("register");

        var CTAlogin = document.getElementById("CTAlogin");

        var CTAregister = document.getElementById("CTAregister");

        var spanList = document.getElementsByClassName("close");

        CTAlogin.onclick = function() {
        login.style.display = "block";
        }
        CTAregister.onclick = function() {
        register.style.display = "block";
        }

        for(let i=0; i<spanList.length; i++){
            spanList[i].onclick = function() {
                login.style.display = "none";
                register.style.display = "none";
            }
        }

        window.onclick = function(event) {
        if (event.target == login || event.target == register) {
            login.style.display = "none";
            register.style.display = "none";
        }
        }
        </script>

    </body>
</html>
