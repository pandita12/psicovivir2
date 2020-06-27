<template>
    
    <div class="parallax-container logueo">
    <div class="row"><br>

        <div class="alert alert-danger" v-if="error">
            <p>Existe un error en tus credenciales, intentalo nuevamente.</p>
        </div>

        <div class="col m8 s8 offset-m2 offset-s2 center">
            <h4 class="truncate bg-card-user">
                <img class="card-image-top   mb-4" :src="image" alt="" width="122" height="142">
                    <div class="row login">
                        <h4>Iniciar sesión</h4>
                <form autocomplete="off" @submit.prevent="login" method="post" class="col s12">

                <div class="row">
                    <div class="input-field col m12 s12">
                        <i class=""></i>
                        <input type="email" id="icon-prefix" class="validate" v-model="email" required autofocus>
                        <label for="icon-prefix">Correo Electronico</label>
                    </div>
                </div> 
                        
                <div class="row">
                    <div class="input-field col m12 s12">
                        <i class=""></i>
                        <input type="password" id="password" class="validate" v-model="password" required>
                        <label for="password">Contraseña</label>
                    </div>                    
                </div>

                <div class="row">
                    <button type="submit" class="btn grey darken-4" name="action">Aceptar</button>
                </div>
                </form>
            </div>

        <!-- <pre>
            {{$data}}
        </pre> -->
    </h4>
    </div>
    </div>
    </div>
    </div>
</template>

<script>

import toastr from 'toastr';
import {bus} from '../app.js'


  export default {
    data(){
      return {
        email: null,
        password: null,
        error: false,
        success: false,
        msg: 'Bienvenido nuevamente',
        image: 'http://localhost/terapias/public/images/logo.png',
      }
    },

    created(){

        bus.etiquetas('TISM | INICIAR SESION')
    },

    methods: {
      login(){
        var app = this
        this.$auth.login({
            data: {
              email: app.email,
              password: app.password
            }, 
            success: function (resp) {

                toastr.success("Credenciales aceptadas, Bienvenido nuevamente",
                {
                      positionClass: "toast-top-left",
                      showDuration: 800,



                });
            },
            error: function (resp) {

                toastr.error(resp.response.data.msg,{

                    positionClass: "toast-bottom-left",
                    showDuration: 800,
                });
            },
            rememberMe: true,
            redirect: 'dashboard',
            fetchUser: true,
        });       
      },
    }
  } 
</script>

<style scoped>
    
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
.brand-logo >img {
    width: 50px;
    height: 50px;
    margin-top: 5px;
}
/* Menu - profile */
.bg-card-user {
    background: rgba(0,77,64,.5);
    padding: 15px 0;
}
.truncate >img {
    width: 180px;
    margin-top: 6px;
    margin-bottom: 6px;
}
/* FOOTER */
footer .foot-text {
    margin-top: 10px;
}

/* LOGIN */
.logueo {/* PARALLAX */
    height: 650px!important;
}
i.iconis {
    font-size: 1em!important;
    margin-top: 8px;
}
.login {
    border: 1px solid #FFF;
    width: 80%;
    margin: 0 auto;
    background-color: rgba(255,255,255,.7);
    padding: 20px;
}

label{

    color: black;
}
</style>