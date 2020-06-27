
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');


import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import toastr from 'toastr';


// Componentes
import App from './App.vue';
import Dashboard from './components/Dashboard.vue';
import Home from './components/Home.vue';
import Register from './components/Register.vue';
import Login from './components/Login.vue';
import Salida from './components/Salida.vue';
import Biblioteca from './components/Biblioteca.vue';
import CrearCitas from './components/citas/CrearCitas.vue';
import Usuarios from './components/usuarios/Usuarios.vue';
import EditarUsuarios from './components/usuarios/EditarUsuarios.vue';
import EditarPerfil from './components/usuarios/EditarPerfil.vue';
import CrearUsuarios from './components/usuarios/CrearUsuarios.vue';
import CrearMensaje from './components/mensajes/CrearMensaje.vue';
import Mensajes from './components/mensajes/Mensajes.vue';
import Foto from './components/dashboard/Foto.vue';
import EditarFoto from './components/dashboard/EditarFoto.vue';
import QuienesSomos from './components/dashboard/QuienesSomos.vue';
import IndexTests from './components/tests/Index.vue';
import Status from './components/tests/Status.vue';
import Activar from './components/tests/Activar.vue';
import Indicaciones from './components/tests/Indicaciones.vue';
import Test1 from './components/tests/Test1.vue';
import Test2 from './components/tests/Test2.vue';
import Test3 from './components/tests/Test3.vue';
import Historias from './components/historias/Historias.vue';
import CrearHistoria from './components/historias/CrearHistoria.vue';
import Resultados1 from './components/resultados/resultados1.vue';
import Resultados2 from './components/resultados/resultados2.vue';
import Resultados3 from './components/resultados/resultados3.vue';
import Dibujo from './components/resultados/Dibujo.vue';



Vue.use(VueRouter);
Vue.use(VueAxios, axios);
axios.defaults.baseURL = 'http://localhost/terapias/public/api/';

const router = new VueRouter({
    mode:'history',

    routes: [{
        path: '/terapias/public',
        name: 'home',
        component: Home
    },

    {path: '*', redirect: '/terapias/public'},
    {path: '/login' , redirect: '/terapias/public/login'},

    {
        path: '/',
        name: 'logout',
        component: Salida
    },
    {
        path: '/terapias/public/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false
        }
    },{
        path: '/terapias/public/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false
        }
    },{
        path: '/terapias/public/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            auth: true
        }

    },
        {

            path: '/terapias/public/dashboard/biblioteca',
            name: 'Biblioteca',
            component: Biblioteca,
            meta: {
                auth: true
            }

        },

        {
            path: '/terapias/public/dashboard/usuarios',
            name: 'Usuarios',
            component: Usuarios,
            meta: {
                auth: true
            }            
        },

        {
            path: '/terapias/public/dashboard/citas/crear',
            name: 'CrearCitas',
            component: CrearCitas,            
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/foto',
            name: 'Foto',
            component: Foto,
            meta: {
                auth: true
            }            

        },

        {
            path: '/terapias/public/dashboard/editarfoto/:id',
            name: 'EditarFoto',
            component: EditarFoto,
            meta: {
                auth: true
            }            

        },

        {

            path: '/terapias/public/dashboard/informacion',
            name: 'QuienesSomos',
            component: QuienesSomos,            
            meta: {
                auth: true
            }
        },


        {

            path: '/terapias/public/dashboard/usuarios/edit/:id',
            name: 'EditarUsuarios',
            component: EditarUsuarios,            
            meta: {
                auth: true
            }
        },
        {

            path: '/terapias/public/dashboard/usuarios/create',
            name: 'CrearUsuarios',
            component: CrearUsuarios,            
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/usuarios/perfil/:id',
            name: 'EditarPerfil',
            component: EditarPerfil,            
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/mensajes/create',
            name: 'CrearMensaje',
            component: CrearMensaje,
            meta: {
                auth: true
            }            

        },

        {
            path: '/terapias/public/dashboard/mensajes',
            name: 'Mensajes',
            component: Mensajes,            
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/historia/:id',
            name: 'Historia',
            component: Historias,            
            meta: {
                auth: true
            }
        },

        {
            path: '/terapias/public/dashboard/historias/create',
            name: 'CrearHistoria',
            component: CrearHistoria,            
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/tests',
            name: 'Index',
            component: IndexTests,
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/tests/status',
            name: 'Status',
            component: Status,
            meta: {
                auth: true
            }
        },

        {

            path: '/terapias/public/dashboard/tests/activar',
            name: 'Activar',
            component: Activar,
            meta: {
                auth: true
            }
        },



        {   

             path: '/terapias/public/dashboard/tests/1',
             name: 'Test1',
             component: Test1, 
             meta: {
                auth: true
            }
             
        },

        {   

             path: '/terapias/public/dashboard/tests/2',
             name: 'Test2',
             component: Test2, 
             meta: {
                auth: true
            }
             
        },

        {   

             path: '/terapias/public/dashboard/tests/3',
             name: 'Test3',
             component: Test3, 
             meta: {
                auth: true
            }
             
        },

         {   

             path: '/terapias/public/dashboard/resultados/locus',
             name: 'Resultados1',
             component: Resultados1, 
             meta: {
                auth: true
            }
             
        },


         {   

             path: '/terapias/public/dashboard/resultados/rosenberg',
             name: 'Resultados2',
             component: Resultados2, 
             meta: {
                auth: true
            }
             
        },


         {   

             path: '/terapias/public/dashboard/resultados/casa',
             name: 'Resultados3',
             component: Resultados3, 
             meta: {
                auth: true
            }
             
        },

        {
            path: '/terapias/public/dashboard/resultados/dibujo/:id',
            name: 'Dibujo',
            component: Dibujo,
            meta: {
                auth: true
            }            

        },

        {

             path: '/terapias/public/dashboard/tests/indicaciones',
             name: 'Indicaciones',
             component: Indicaciones, 
             meta: {
                auth: true
            }

        },

        
    ]


});


Vue.router = router;
Vue.use(require('@websanova/vue-auth'), {
   auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
   http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
   router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});

export var bus = new Vue({

    methods :{

        etiquetas(titulo){

                //Etiqueta title
                const title = document.createElement('title')
                title.innerHTML = titulo
                document.head.appendChild(title)

                //Etiqueta script
                let tabs = document.createElement('script')
                tabs.setAttribute('src', 'http://localhost/terapias/resources/js/init.js')
                document.head.appendChild(tabs)
            },


    }
})

App.router = Vue.router
new Vue(App).$mount('#app');

