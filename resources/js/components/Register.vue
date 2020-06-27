<template>
    <div class="container">
    <div class="row">
        <div class="col m8 s8 offset-m2 offset-s2 center">
            <div class="card-panel grey lighten-2 center" style="margin-top: 40px;">

        <div class="alert alert-danger" v-if="error && !success">
            <p>Hubo un error en su registro.</p>
        </div>
        <div class="alert alert-success" v-if="success">
            <p>Registro completo. Ahora inicia sesión <router-link :to="{name:'login'}">Entrar</router-link></p>
        </div>


        <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
            
            <div class="row">
                <div class="col s12 m12">
                    <i class="fas fa-brain fa-7x" style="float: left; color: #356EE3;"></i>
                    <h3 class="h3 mb-3 font-weight-normal">Registrate</h3>
                </div>
            </div>
            
                <div class="input-field" v-bind:class="{ 'has-error': error && errors.name }" style="margin-top: 10px;">
                    <label for="icon-prefix">Nombre</label>
                    <input type="text" id="icon-prefix" class="validate" v-model="name" required>
                    <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
                </div>


            <div class="input-field" v-bind:class="{ 'has-error': error && errors.email }">
                <label for="icon-prefix">Correo Electronico</label>
                <input type="email" id="icon-prefix" class="validate"  v-model="email" required>

                <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
            </div>

            <div class="input-field" v-bind:class="{ 'has-error': error && errors.password }">
                <label for="password">Contraseña</label>
                <input type="password" id="password" class="validate" v-model="password" required>
                <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
            </div>

                <div class="input-field" v-bind:class="{ 'has-error': error && errors.password }">
                        <label for="password_confirmation">Confirma tu contraseña</label>
                        <input type="password" id="password_confirmation" class="validate" v-model="password_confirmation" required> 
                </div>

                <button type="submit" class="btn grey darken-4">Aceptar</button>        
            </form>
            </div>
        </div>
    </div>
</div>
</template>

<script> 

import {bus} from '../app.js'

    export default {
        data(){
            return {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                error: false,
                errors: {},
                success: false
            }
        },

        created(){

            bus.etiquetas('TISM | Registrate')
        },
        
        methods: {
            register(){
                var app = this
                this.$auth.register({
                    data: {
                        name: app.name,
                        email: app.email,
                        password: app.password,
                        password_confirmation: app.password_confirmation,

                    }, 
                    success: function () {
                        app.success = true
                    },
                    error: function (resp) {
                        app.error = true;
                        app.errors = resp.response.data.errors;
                    },
                    redirect: null
                });                
            }
        }
    }
</script>

<style scoped>

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

label{

    color: black;
}

</style>