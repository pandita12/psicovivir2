<template>
  <div id="container">

          <nav class="grey darken-4 z-depth-4" role="navigation" id="navegacion"> 

            <div class="nav-wrapper container"> 
            
            <img src="http://localhost/terapias/public/images/principal.png" width="55px" height="55px" style="margin-right: 1%; margin-top: 2px;">

            <a href="#" @click.prevent="ruta('dashboard')"  class="brand-logo">TISM</a>   

              <ul class="right hide-on-med-and-down">                 

                        <router-link tag="li" :to="{ name: 'home' }"><a v-if="!$auth.check()" exact active-class="active">Inicio</a></router-link>

                        <router-link tag="li" :to="{ name: 'login' }"><a  v-if="!$auth.check()" exact active-class="active">Iniciar sesión</a></router-link>

                        <router-link tag="li" :to="{ name: 'register' }"><a exact v-if="!$auth.check()" active-class="active">Registrate</a></router-link>
                          
                  </ul>

                </div>
            </nav>

          <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="http://localhost/terapias/public/images/psicologo-sabadell.jpg" width="300px" height="265px">
              </div>

              <a href="#user" v-for="image in imagen" :key="image.id" v-if="image.user_id == $auth.user().id && image.type != 'Test de la Casa'">
                          
                     <img class="circle" v-if="image.user_id == $auth.user().id" :src="image.name" @click.prevent="actualizar(image.id)" height="100px" width="100px">

                     <span style="display: none;">{{valor = false}}</span>

                      </a>

                     <img class="circle" v-else src="http://localhost/terapias/public/images/nofoto.jpg" @click.prevent="ruta('Foto')" height="100px" width="100px" v-if="valor == true">


              <a href="#name"><span class="white-text name">{{ $auth.user().name }}</span></a>
    
             <router-link tag="li" :to="{ name: 'EditarPerfil',params:{id: $auth.user().id}}"><a exact ><span class="white-text email">Editar mi perfil</span></a></router-link>

            </div></li>

             <router-link tag="li" :to="{ name: 'Biblioteca' }"><a exact v-if="$auth.check()"><i class="fas fa-book-reader"></i>   Biblioteca</a></router-link>
 
             <router-link tag="li" :to="{ name: 'QuienesSomos' }"><a exact v-if="$auth.check()"><i class="fas fa-question-circle"></i>   ¿Quienes somos?</a></router-link>


<!--              <router-link tag="li" :to="{ name: 'Index' }"><a exact v-if="$auth.check()"><i class="fas fa-pen-square"></i>   Tests</a></router-link>
 -->
              <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header" style="margin-left: 5%;"><i class="fas fa-pen-square"></i>Tests   <i class="fas fa-chevron-down" style="margin-left: 70%;"></i></a>
                    <div class="collapsible-body">
                      <ul>
                         <router-link tag="li" :to="{ name: 'Index' }"><a exact v-if="$auth.check()"><i class="fas fa-pen-square"></i>Todos los tests</a></router-link>                        
                         <router-link tag="li" :to="{ name: 'Status' }"><a exact v-if="$auth.user().type == 'admin' ||  $auth.user().type == 'terapeuta'"><i class="fas fa-toggle-on"></i>Activar/Desactivar Tests</a></router-link>                        
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>


              <li><a class="modal-trigger" href="#modal3" v-if="$auth.check() && $auth.user().type == 'admin' ||  $auth.user().type == 'terapeuta' "><i class="far fa-calendar-check"></i>   Citas</a></li>

               <li><a class="modal-trigger" href="#modal4" v-if="$auth.check() && $auth.user().type == 'admin' ||  $auth.user().type == 'terapeuta' "><i class="fas fa-history"></i>   Historias</a></li>


            <li><div class="divider"></div></li>
            <li><a class="subheader">Opciones</a></li>

               <router-link tag="li" :to="{ name: 'Usuarios' }"><a exact v-if="$auth.check() && $auth.user().type == 'admin'"><i class="fas fa-user"></i>   Usuarios</a></router-link>

               <li class="no-padding" v-if="$auth.check() && ($auth.user().type == 'admin' || $auth.user().type == 'terapeuta')">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header" style="margin-left: 5%;"><i class="fas fa-pen-square"></i>    Resultados  <i class="fas fa-chevron-down" style="margin-left: 50%;"></i></a>
                    <div class="collapsible-body">
                      <ul>
                         <router-link tag="li" :to="{ name: 'Resultados1' }"><a exact v-if="$auth.check()"><i class="fas fa-pen-square"></i>   Resultados del Test de Locus</a></router-link>                        
                         <router-link tag="li" :to="{ name: 'Resultados2' }"><a exact v-if="$auth.user().type == 'admin' ||  $auth.user().type == 'terapeuta'"><i class="fas fa-toggle-on"></i>  Test de Rosenberg</a></router-link> 
                         <router-link tag="li" :to="{ name: 'Resultados3' }"><a exact v-if="$auth.user().type == 'admin' ||  $auth.user().type == 'terapeuta'"><i class="fas fa-toggle-on"></i>Resultados de Test de la casa</a></router-link>                        
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>


               <li><a class="sidenav-close" href="#!"><i class="far fa-times-circle"></i>    Cerrar Menu</a></li>
               
               <li><a class="dropdown-item sidenav-close" href="#!" @click.prevent="$auth.logout(),estadoMensaje()"><i class="fas fa-sign-out-alt"></i>     Salir</a></li>
          </ul>

 
  

          <transition name="fade"> 
              <router-view></router-view>          
          </transition>

        <!-- Modulo de citas -->

          <div id="modal3" class="modal bottom-sheet">

            <ul class="tabs center grey darken-4">
              <li class="tab col s2"><a class="active white-text" href="#cita1">{{dia1}}</a></li>
              <li class="tab col s2"><a href="#cita2" class="white-text">{{dia2}}</a></li>
              <li class="tab col s2"><a class="white-text" href="#cita3">{{dia3}}</a></li>
              <li class="tab col s2"></li>
              <li class="tab col s2"><a href="#cita4" class="white-text">{{dia4}}</a></li>
              <li class="tab col s2"><a href="#cita5" class="white-text">{{dia5}}</a></li>
            </ul>

                <div id="cita1">
                  <div class="modal-content">
                    <h4 class="center"><i class="fas fa-calendar-check"></i>   Citas para el dia {{dia1}}</h4>
                    <table class="striped centered z-depth-3" style="background-color: white;">
                        <thead class="grey darken-4">
                            <tr class="white-text">
                                <th>Nombre del cliente</th>
                                <th>Fecha</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="date in appointmentsG" :key="date.id" v-if="date.date == dia1">
                                <td>{{ date.name }}</td>
                                <td>{{ date.date }}</td>
                                <td>{{ date.time }}</td>
                                <span style="display: none;">{{cita1 = true}}</span>

                            </tr>
                        </tbody>
                   </table>
                    
                   <br>
                   
                   <h5 v-if="cita1 === false" class="center">No hay citas !</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearCitas')">Crear nueva cita</a>

                  </div>
                </div>


                <div id="cita2">
                  <div class="modal-content">
                    <h4 class="center"><i class="fas fa-calendar-check"></i>   Citas para el dia {{dia2}}</h4>
                    <table class="striped centered z-depth-3" style="background-color: white;">
                        <thead class="grey darken-4">
                            <tr class="white-text">
                                <th>Nombre del cliente</th>
                                <th>Fecha</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="date in appointmentsG" :key="date.id" v-if="date.date == dia2">
                                <td>{{ date.name }}</td>
                                <td>{{ date.date }}</td>
                                <td>{{ date.time }}</td>
                                <span style="display: none;">{{cita2 = true}}</span>

                            </tr>
                        </tbody>
                   </table>
                    
                   <br>
                   
                   <h5 v-if="cita2 === false" class="center">No hay citas !</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearCitas')">Crear nueva cita</a>

                  </div>
                </div>


                <div id="cita3">
                  <div class="modal-content">
                    <h4 class="center"><i class="fas fa-calendar-check"></i>   Citas para el dia {{dia3}}</h4>
                    <table class="striped centered z-depth-3" style="background-color: white;">
                        <thead class="grey darken-4">
                            <tr class="white-text">
                                <th>Nombre del cliente</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="date in appointmentsG" :key="date.id" v-if="date.date == dia3">
                                <td>{{ date.name }}</td>
                                <td>{{ date.date }}</td>
                                <td>{{ date.time }}</td>
                                <span style="display: none;">{{cita3 = true}}</span>

                            </tr>
                        </tbody>
                   </table>
                    
                   <br>
                   
                   <h5 v-if="cita3 === false" class="center">No hay citas !</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearCitas')">Crear nueva cita</a>

                  </div>
                </div>


                <div id="cita4">
                  <div class="modal-content">
                    <h4 class="center"><i class="fas fa-calendar-check"></i>   Citas para el dia {{dia4}}</h4>
                    <table class="striped centered z-depth-3" style="background-color: white;">
                        <thead class="grey darken-4">
                            <tr class="white-text">
                                <th>Nombre del cliente</th>
                                <th>Fecha</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="date in appointmentsG" :key="date.id" v-if="date.date == dia4">
                                <td>{{ date.name }}</td>
                                <td>{{ date.date }}</td>
                                <td>{{ date.time }}</td>
                                <span style="display: none;">{{cita4 = true}}</span>

                            </tr>
                        </tbody>
                   </table>
                    
                   <br>
                   
                   <h5 v-if="cita4 === false" class="center">No hay citas !</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearCitas')">Crear nueva cita</a>

                  </div>
                </div>


                <div id="cita5">
                  <div class="modal-content">
                    <h4 class="center"><i class="fas fa-calendar-check"></i>   Citas para el dia {{dia5}}</h4>
                    <table class="striped centered z-depth-3" style="background-color: white;">
                        <thead class="grey darken-4">
                            <tr class="white-text">
                                <th>Nombre del cliente</th>
                                <th>Fecha</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="date in appointmentsG" :key="date.id" v-if="date.date == dia5">
                                <td>{{ date.name }}</td>
                                <td>{{ date.date }}</td>
                                <td>{{ date.time }}</td>
                                <span style="display: none;">{{cita5 = true}}</span>

                            </tr>
                        </tbody>
                   </table>
                    
                   <br>
                   
                   <h5 v-if="cita5 === false" class="center">No hay citas !</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearCitas')">Crear nueva cita</a>

                  </div>
                </div>
            </div>

            <!-- Modulo de buscas historias -->

             <div id="modal4" class="modal">
              <div class="modal-content">
                <div class="row">
                  <div class="col s12 m6"><h4>Historias Clinicas</h4></div>
                  <div class="col s12 m2"></div>
                  <div class="col s12 m4"><router-link  :to="{ name: 'CrearHistoria' }"><a exact v-if="$auth.check() && $auth.user().type == 'admin' ||  $auth.user().type == 'terapeuta'" href="#!" class="btn grey darken-4"><i class="fas fa-user"></i>Registrar Historia</a></router-link></div>
                </div>
                <div class="row">                   
                    <div class="input-field col s12 m6">
                        <select v-model="historia" required id="cliente">
                          <option value="" disabled selected>Selecciona un cliente</option>
                            <option v-for="cliente in clientes" :key="cliente.id" v-if="cliente.type == 'cliente' " :value="cliente.id">{{cliente.name}}</option>
                        </select>
                        <label>Clientes</label>
                      </div>

                      <br>
                      <button type="submit" class="right btn grey darken-4" @click.prevent="searchHistory" style="">Buscar historias
                        </button>
                </div>
                
                <br>

               <h5 v-if="valorHistoria === false" class="center">Este cliente no posee historias!</h5>

                <ul class="collection">
                  <li class="collection" v-for="history in histories" :key="history.id">
                    <div class="row blue darken-2">
                      <div class="col s12 m3 white-text"><b>Historia</b></div>
                      <div class="col s12 m3 white-text"><b>Cliente</b></div>
                      <div class="col s12 m3 white-text"><b>Fecha de historia</b></div>
                      <div class="col s12 m3 white-text"><b>Accion</b></div>
                    </div>

                    <div class="row">
                      <div class="col s12 m3"><i class="fas fa-history fa-2x"></i>{{" "+history.id}}</div>
                      <div class="col s12 m3"><span class="title">{{history.name}}</span></div>
                      <div class="col s12 m3"><p>{{history.created_at}}</p></div>
                      <div class="col s12 m3"><router-link :to=" {name: 'Historia', params: {id: history.id}}"><a href="#!" class="modal-close btn waves-effect blue darken-2"><i class="fas fa-search"></i></a></router-link></div> 
                    </div>
                  </li>
                </ul>

                </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cerrar</a>
              </div>
            </div>
                
        <!-- Modulo de mensajes -->

          <div id="modal1" class="modal">
            <ul class="tabs center grey darken-4">
              <li class="tab col s6"><a class="active white-text" href="#test1"><i class="fas fa-envelope"></i> Recibidos</a></li>
              <li class="tab col s6"><a href="#test2" class="white-text"><i class="fas fa-share-square"></i>  Enviados</a></li>
            </ul>
            
            <!-- Mensajes Recibidos -->
            <div id="test1">
              <div class="modal-content">
                <h4>Mensajes Recibidos</h4>
                <ul class="collapsible">
                  <li v-for="(message,indice) in messages" :key="message.id" v-if="message.user_id_received == $auth.user().id">
                    <div class="collapsible-header"><span><b>De:</b> {{'   '+ message.name}}</span><span><b>Asunto:</b> {{'   '+message.title}}</span><span v-if="message.status == 0" class="badge green white-text">Nuevo</span><span v-else class="badge red white-text">Leido</span> <button @click="estado(indice)">Abrir</button></div>
                    <div class="collapsible-body"><span>{{message.message}}</span></div>
                    <span style="display: none;">{{recibido = true}}</span>
                  </li>
               </ul>

               <p v-if="recibido === false" class="center-align">No hay mensajes</p>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>

                <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearMensaje')">Nuevo mensaje</a>
              </div>
            </div>

            <div id="test2">
                <div class="modal-content">
                <h4>Mensajes Enviados</h4>
                <ul class="collapsible">
                  <li v-for="(message,indice) in message" :key="message.id" v-if="message.user_id_send == $auth.user().id">
                    <div class="collapsible-header"><span><b>Para:</b> {{'   '+ message.name}}</span><span><b>Asunto:</b> {{'   '+message.title}}</span><span v-if="message.status == 0" class="badge green white-text">Nuevo</span><button @click="estado(indice)">Abrir</button></div>
                    <div class="collapsible-body"><span>{{message.message}}</span></div>
                    <span style="display: none;">{{enviado = true}}</span>
                  </li>
               </ul>

               <p v-if="enviado === false" class="center-align">No hay mensajes</p>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>

                <a href="#!" class="modal-close waves-effect waves-green btn-flat" @click.prevent="ruta('CrearMensaje')">Nuevo mensaje</a>
              </div>
            </div>

          </div>          


          
                
      <!--Menu inferior derecho-->         

         <div class="fixed-action-btn" id="menuDerecho">
            <a class="btn-floating btn-large red" v-if="$auth.check()">
              <i class="fas fa-chevron-up"></i>
            </a>
            <ul>
              <li><a class="btn-floating green darken-1 tooltipped" data-position="left" data-tooltip="Tests"@click.prevent="ruta('Index')"><i class="fas fa-pen-square"></i></a></li>
              <li><a class="btn-floating blue modal-trigger tooltipped" data-position="left" data-tooltip="Mensajes" href="#modal1"><i class="far fa-comments"></i></a></li>
            </ul>
          </div>

<!--           <pre>{{$data}}</pre>
 -->

      <a id="link" @click.prevent="llamar()"></a>
      
        <footer class="page-footer grey darken-4 z-depth-4" style="margin-top: 10%" id="pie">
          <div class="footer-copyright">
              <a href="#" data-target="slide-out" class="sidenav-trigger" v-if="$auth.check()"><i class="fas fa-bars fa-2x" style="margin-left: 60%"></i></a>

            <div class="container" v-if="!$auth.check()">
            © 2018 Todos los derechos reservados | Desarrollado por Carlos E. Bólívar J.
            </div>
          
            <img src="http://localhost/terapias/public/images/logo1.png" width="80px" height="80px" style="margin-right: 10%;">
          </div>
        </footer>


    </div>
   


</template>


<script type="text/javascript">

  import {bus} from './app.js'
  import moment from 'moment'
  import toastr from 'toastr'


  export default{

    data(){

      return {

        messages: [],

        message: [],

        appointments: {},

        appointmentsG: {},

        citas:{},

        user:{},

        clientes: [],
        
        imagen: [],

        valor: true,

        recibido: false,

        enviado: false,
        
        cita1: false,

        cita2: false,

        cita3: false,

        cita4: false,

        cita5: false,

        dia1: '',

        dia2: '',

        dia3: '',

        dia4: '',

        dia5: '',
        
        historia: null,

        histories: [],

        valorHistoria: '',
        
        }
    },

    mounted: function(){

    },

    created: function() {

        // setInterval(this.repetir,60000);
        this.llamar()
        this.ultimo();
        this.dias();
        this.llamarClientes();

      },

  
    methods: {

        repetir(){

          var link = document.getElementById('link');
          link.click();
        
        },
      

        dias: function(){

          let hoy = moment()          
          let hoy1 = hoy.format("DD-MM-YYYY")
          this.dia1 = hoy1

          let mañana = moment().add(1,'days')
          let mañana1 = mañana.format("DD-MM-YYYY")
          this.dia2 = mañana1

          let pasado1 = moment().add(2,'days')
          let pasado2 = pasado1.format("DD-MM-YYYY")
          this.dia3 = pasado2

          let pasado3 = moment().add(3,'days')
          let pasado4 = pasado3.format("DD-MM-YYYY")
          this.dia4 = pasado4 

          let pasado5 = moment().add(4,'days')
          let pasado6 = pasado5.format("DD-MM-YYYY")
          this.dia5 = pasado6

        },

        estado: function(indice){
        
             let estado = this.messages[indice].status = 1;
             
             let uri = `/dashboard/mensajes/update/${this.messages[indice].id}`;
            this.axios.post(uri, this.messages[indice]).then((response) => {
                console.log(response);
          });


        },

        ruta(ruta){

            this.$router.push({name: ruta});
        },

        actualizar: function(id){
           
            this.$router.push({name: 'EditarFoto', params: {id: id}});
              
          },

        llamar(){
          

        //Callback para traer todos los mensajes recibidos
            let url = '/dashboard/mensajes';
            this.axios.get(url).then((response) =>{

                this.messages = response.data.data;

            }).catch((error)=>{

                console.log(error);
            });

        //Callback para traer mensajes enviados
            let uri = '/dashboard/mensajes/enviados';
            this.axios.get(uri).then((response) =>{

                this.message = response.data.data;


            }).catch((error)=>{

                console.log(error);
            });
        
        //Callback para traer citas del dia

            let urx = '/dashboard/citas';
            this.axios.get(urx).then((response) =>{

                this.appointments = response.data;
                console.log(response)

                const cms = appointment => ({

                    ...appointment,
                    date: moment(appointment.date,"YYYY-MM-DD").format('DD-MM-YYYY'),
                    time: moment(appointment.time, ["HH:mm"]).format("h:mm A"),
                })



                this.appointmentsG = this.appointments.map(cms) 

                this.appointments = ""

                for (let i = 0; i <= this.appointmentsG.length; i++) {

                  let hoy = moment().format("DD-MM-YYYY")  

                  let dia = moment(hoy,"DD-MM-YYYY")

                  let citaHoy = moment(this.appointmentsG[i].date,"DD-MM-YYYY");


                  if(dia.isAfter(citaHoy)){

                     let ura = `/dashboard/citas/delete/${this.appointmentsG[i].id}`;
                      this.axios.delete(ura).then((response) => {
                          
                        this.appointmentsG.splice(this.appointmentsG.indexOf(this.appointmentsG[i].id), 1);

                    });

                  }

                }

                 // let ure = '/dashboard/citas1';
                 //          this.axios.get(ure).then((response) =>{
                 //          this.citas = response.data;
                 //          });


            }).catch((error)=>{

                console.log(error);
            });

            console.log('hola')        

              // setInterval(this.llamar() , 60000);


                  
      },  


      ultimo: function(){
         
        let url = `/dashboard/ultimo`;
                this.axios.get(url).then((response) =>{

                    console.log(response);
                    this.imagen = response.data.data;
                });

      },

      estadoMensaje(){

        this.enviado = false;
        this.recibido = false;
      },

      llamarClientes(){

         let uri = '/dashboard/usuarios';
            this.axios.get(uri).then((response) => {
              console.log(response);
              this.clientes = response.data.data;
            });  
      },


      searchHistory($id){
        
        if (this.historia == null) {

          toastr.error("Debe seleccionar un usuario")
        
        }else{

        let uri = `/dashboard/historias/${this.historia}`;
            this.axios.get(uri).then((response) => {
              // console.log(response);
              this.histories = response.data;
              this.valorHistoria = true

              if (this.histories.length < 1) {

                this.valorHistoria = false
              
              }else if (this.histories.length >=1) {
                
                  const tiempo = history => ({

                        ...history,
                        created_at: moment(history.created_at,"YYYY-MM-DD HH:mm:ss").format('DD-MM-YYYY'),
                    })

                  this.histories = this.histories.map(tiempo)                
              }




            });
          } 
      }
    },

    computed: {


    }
  }

</script>

<style scoped>
    
nav{

  width: 100%;
}

.fade-enter-active, .fade-leave-active {
  transition-property: opacity;
  transition-duration: .45s;
}
 
.fade-enter-active {
  transition-delay: .25s;
}
 
.fade-enter, .fade-leave-active {
   opacity: 0
}

.dropdown .dropdown-menu {
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    -ms-transition: all 0.9s;
    -o-transition: all 0.9s;
    transition: all 0.9s;

    max-height: 0;
    display: block;
    overflow: hidden;
    opacity: 0;
}

.dropdown:hover .dropdown-menu {
    max-height: 200px;
    opacity: 1;
}

span{

  margin-right: 60px;
}

#modal1 .modal-footer a:hover{

  color : blue;
}

#modal3 .modal-footer a:hover{

  color : blue;
}

#modal4 .modal-footer a:hover{

  color : blue;
}
</style>