<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Formulario Login Animado</title>
</head>
<body>
    <div id="app">
        <div class="form-body">
            <img src="C:\xampp\htdocs\ServicioRESTAutosAntiguos\cliente\Login\Login.png" alt="user-login">
            <p class="text">Bienvenido Ingresa Credenciales</p>
            <form class="login-form" method="post">

               
                
            <?php
                include("conexion_bd.php");
                include("controlador.php");
                ?>
                


                <input type="text" placeholder="Email o nombre de usuario" name="usuario">

                <input type="password" placeholder="Contraseña" name="password">


                <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">

                
            </form>
        </div>

        <tbody>
            <tr v-for="usuario in usuarios" :key="usuario.id">
                <td class=" font-weight-bold text-center">{{ usuario.id}}</td>
                <td class=" font-weight-bold text-center">{{ usuario.user}}</td>
                <td class=" font-weight-bold text-center">{{ usuario.password }}</td>
            </tr>
        </tbody>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vuetify/2.5.7/vuetify.min.js"
      integrity="sha512-BPXn+V2iK/Zu6fOm3WiAdC1pv9uneSxCCFsJHg8Cs3PEq6BGRpWgXL+EkVylCnl8FpJNNNqvY+yTMQRi4JIfZA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
      integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let url = 'http://127.0.0.1:8000/usuarios/';

        new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data(){
                return{
                    usuarios: [],
                    dialog: false,
                    operacion: '',
                    usuario: {
                        id: null,
                        user: '',
                        password: ''
                    }
                }
            },
            created(){

            },
            methods: {
                validar: function(){
                    //user = document.getElementsByName("user").value;
                    //password = document.getElementsByName("password").value;
                    //console.log(user + password);
                    axios.get(url + user + "/" + password)
                        .then(response =>{
                            this.usuarios = response.data;
                            if(user != null){
                                window.location.href = predictamen + id + '/' + folio;
                            }
                        });
                }
            }
        })
    </script>
</body>
</html>