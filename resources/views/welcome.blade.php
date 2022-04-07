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
                <p style="color:white;text-shadow:2px 2px 2px black">¿Ya tienes cuenta? Haz click <a id="CTAlogin">aqui</a> para iniciar sesion</p>
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
                <h1>¿Que es?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus ultrices nisi non dignissim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pulvinar congue dolor lobortis pulvinar. Curabitur id ligula facilisis, porta urna nec, elementum dui. Nunc maximus mattis est, eu porttitor erat varius a. Suspendisse feugiat dolor odio, id fringilla est tristique eu. Aliquam eu nunc et sapien mollis auctor vel eu felis. Suspendisse non tortor erat. In convallis rutrum erat ac porta. Sed sagittis faucibus laoreet. Aliquam scelerisque, libero eu congue luctus, erat metus pellentesque dolor, id bibendum augue libero in ligula. Donec vehicula augue libero, ut pharetra ligula dapibus in. Pellentesque et sagittis metus. Sed aliquet erat interdum, suscipit lacus non, vehicula leo. In vitae massa at turpis venenatis efficitur non sed nulla. </p>
            </div>
            <hr>
            <div class="who">
                <h1>¿Para quien?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus ultrices nisi non dignissim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pulvinar congue dolor lobortis pulvinar. Curabitur id ligula facilisis, porta urna nec, elementum dui. Nunc maximus mattis est, eu porttitor erat varius a. Suspendisse feugiat dolor odio, id fringilla est tristique eu. Aliquam eu nunc et sapien mollis auctor vel eu felis. Suspendisse non tortor erat. In convallis rutrum erat ac porta. Sed sagittis faucibus laoreet. Aliquam scelerisque, libero eu congue luctus, erat metus pellentesque dolor, id bibendum augue libero in ligula. Donec vehicula augue libero, ut pharetra ligula dapibus in. Pellentesque et sagittis metus. Sed aliquet erat interdum, suscipit lacus non, vehicula leo. In vitae massa at turpis venenatis efficitur non sed nulla. </p>
            </div>
            <hr>
            <div class="contact">
                <h1>Contacto</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus ultrices nisi non dignissim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pulvinar congue dolor lobortis pulvinar. Curabitur id ligula facilisis, porta urna nec, elementum dui. Nunc maximus mattis est, eu porttitor erat varius a. Suspendisse feugiat dolor odio, id fringilla est tristique eu. Aliquam eu nunc et sapien mollis auctor vel eu felis. Suspendisse non tortor erat. In convallis rutrum erat ac porta. Sed sagittis faucibus laoreet. Aliquam scelerisque, libero eu congue luctus, erat metus pellentesque dolor, id bibendum augue libero in ligula. Donec vehicula augue libero, ut pharetra ligula dapibus in. Pellentesque et sagittis metus. Sed aliquet erat interdum, suscipit lacus non, vehicula leo. In vitae massa at turpis venenatis efficitur non sed nulla. </p>
            </div>
        </div> 
<!--Oooooh-->
        <script>
        var login = document.getElementById("login");

        var register = document.getElementById("register");

        var CTAlogin = document.getElementById("CTAlogin");

        var CTAregister = document.getElementById("CTAregister");

        var span = document.getElementsByClassName("close")[0];

        CTAlogin.onclick = function() {
        login.style.display = "block";
        }
        CTAregister.onclick = function() {
        register.style.display = "block";
        }

        span.onclick = function() {
        login.style.display = "none";
        register.style.display = "none";
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
