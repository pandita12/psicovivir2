<template>
	
  <div>
   
   <div class="container white" id="dashboard" style="">
      <div class="row">
        <div class="col s12 m4">
            <i class="fas fa-home fa-5x"></i>
        </div>  

        <div class="col s12 m4">
          <h2 class="center-align">Inicio</h2>
        </div>  

        <div class="col s12 m4">
         <h6 class="center-align">Bienvenido <b>{{$auth.user().name}}</b></h6>
  
         <div class="blue darken-4" style="padding: 20px; border-radius: 15px; border: solid 1px white" v-if="perfil === true">
            <h5 class="white-text center-align"><i class="fas fa-exclamation-circle "></i>   Debes completar tu registro actualizando tus datos <br></h5>
            <br>
            
            <center>
              <router-link style="color: white; margin-top: -5%" class="btn grey darken-4 " :to="{name: 'EditarPerfil',params:{id: $auth.user().id}}">Actualizar</router-link>
            </center>
        </div>

        </div>  
      </div>
     <br>      
     <div class="row center blue darken-2" style="margin-bottom: 10%; height: 100px; padding: 2%; margin-right: -10px; margin-left: -10px">
      
       <div class="col s12 m4"><a style="font-size: 20px" href="" class="waves-effect waves-light btn-large green" @click.prevent="ruta('Index')"><i class="fas fa-pen-square" style="margin-right: 5px"></i>Tests</a></div>
       <div class="col s12 m4"><a style="font-size: 20px" href="" class="waves-effect waves-light btn-large amber accent-4" @click.prevent="ruta('QuienesSomos')"><i class="fas fa-question-circle" style="margin-right: 5px"></i>Quienes somos</a></div>
       <div class="col s12 m4"><a style="font-size: 20px" href="" class="waves-effect waves-light btn-large red" @click.prevent="ruta('Biblioteca')"><i class="fas fa-book-reader" style="margin-right: 5px"></i>Biblioteca</a></div>
     </div>

      <div class="row">
        <div class="col s12 m6">
           <div class="slider">
              <ul class="slides">
                <li>
                  <img src="http://localhost/terapias/public/images/terapia.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3 style="color: black;">Terapias online con profesionales certificados!</h3>
                    <h5 class="light grey-text text-lighten-3"></h5>
                  </div>
                </li>
                <li>
                  <img src="http://localhost/terapias/public/images/terapia1.jpg" width="250px"> <!-- random image -->
                  <div class="caption left-align">
                    <h3></h3>
                    <h5 style="color: black" class=""></h5>
                  </div>
                </li>
                <li>
                  <img src="http://localhost/terapias/public/images/terapia2.jpg"> <!-- random image -->
                  <div class="caption right-align">
                    <h3>Logra tu bienestar !</h3>
                    <h5 class="light grey-text text-lighten-3"></h5>
                  </div>
                </li>
                <li>
                  <img src="http://localhost/terapias/public/images/estrés.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3 style="color: black"></h3>
                    <h5 class="light grey-text text-lighten-3">Nunca mas!</h5>
                  </div>
                </li>
              </ul>
            </div>      
        </div>     

        <div class="col s12 m1"></div>

        <div class="col s12 m5">
          <div v-if="$auth.user().type === 'cliente'">
           <h4 class="header">Proxima cita</h4>
            <div class="card horizontal">
              <div class="card-image">
                <img src="http://localhost/terapias/public/images/tiempo.png">
              </div>
              <div class="card-stacked">

                <div class="card-content hide" v-for="ct in cita" :key="ct.id" v-if="numero == 1" id="cita1">
                  <p>Su proxima cita es el <b>{{ct.date}}</b> a las <b>{{ct.time}}</b></p>
                  <span style="display: none;">{{valor = true}}</span>
                </div>

                <div class="card-content hide" v-for="ct in cita" :key="ct.id" v-if="numero == 2" id="cita2">
                  <p>Su cita es hoy a las <b>{{ct.time}}</b></p>
                  <span style="display: none;">{{valor = true}}</span>
                </div> 
                
                <div class="card-content" v-if="seña == false && valor == true">
                  <p><b>Cargando..</b></p>
                </div> 


                <div class="card-content" v-if="valor == false || numero == 3">
                  <p>Por lo momentos no posee ninguna cita</p>
                </div>

                <div class="card-action">
                </div>
              </div>
            </div>
           </div>

          <div v-if="$auth.user().type === 'admin' || $auth.user().type === 'terapeuta'">
           <h4 class="header">Clientes actuales</h4>
            <div class="card-panel">
                <center>       
                  <img src="http://localhost/terapias/public/images/tareas.png" width="120px" height="120px">
                </center>
                <div class="card-content">
                  <table class="striped centered z-depth-3" style="background-color: white;">
                    <thead class="grey darken-4">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="usuario in usuarios" :key="usuario.id" v-if="usuario.type == 'cliente'">
                            <td>{{ usuario.id }}</td>
                            <td>{{ usuario.name }}</td>
                        </tr>
                    </tbody>
               </table>
             </div>
            </div>
          </div>

    
        </div>             
      </div>
   </div>
<!--    <pre>{{$data}}</pre>
 --></div>

</template>

<script>
import toastr from 'toastr';
import {bus} from '../app.js'
import moment from 'moment';


export default {
  
  data(){
    return{
      
            user: [],
            usuarios:[],
            count: {},
            cita: {},
            valor: false,
            numero: 1,
            seña: false,
            perfil: false,
          }
        },



        created: function(){

            this.mensajesYCitas()
            bus.etiquetas('TISM | INICIO')
            setTimeout(this.tiempo,5000)
            this.llamarClientes();
         },

        methods: {

          ruta(ruta){

            this.$router.push({name: ruta});
          },

          llamarClientes(){

             let uri = '/dashboard/usuarios';
              this.axios.get(uri).then((response) => {
                console.log(response);
                this.usuarios = response.data.data;
              });  
          },

          tiempo: function() {


            if (this.valor == true) {

            let hoy = moment().format("DD-MM-YYYY")  

            let dia = moment(hoy,"DD-MM-YYYY")

            let citaHoy = moment(this.cita[0].date,"DD-MM-YYYY");

              if(dia.isAfter(citaHoy)){

                let uri = `/dashboard/citas/delete/${this.cita[0].id}`;
                    this.axios.delete(uri).then(response => {
                      this.cita.splice(this.cita.indexOf(this.cita[0].id), 1);
                      toastr.info("Su ultima cita ya caduco")                  
                      this.numero = 3;
                    });


              }

              else if (dia.isSame(citaHoy)){
                  
                  this.numero = 2;

                  let hora = moment().format("h:mm A")

                  let hora2 = moment(hora,"h:mm A")

                  let horaHoy= moment(this.cita[0].time,"h:mm A");

                  if (hora2.isSame(horaHoy,'hour')) {

                      toastr.info("Su cita esta en transcurso")                     
                  }
                  
                  else if (hora2.isAfter(horaHoy,'hour')) {

                      toastr.info("Su cita caduco hace unas horas, si no pudo asistir comuniquese con su terapeuta")
    
                        let uri = `/dashboard/citas/delete/${this.cita[0].id}`;
                        this.axios.delete(uri).then(response => {
                          this.cita.splice(this.cita.indexOf(this.cita[0].id), 1);
                          this.numero = 3;
                        });
                  
                    }


              }else{

              }

              this.seña = true;

              let cita1 = document.getElementById("cita1")
              let cita2 = document.getElementById("cita2")

              cita1.classList.remove("hide")
              cita2.classList.remove("hide")

            }

          },


          mensajesYCitas(){

            let uru = 'auth/user';
            this.axios.get(uru).then((response) => {
            
            this.user = response.data;

            if (this.user.data.age == null || this.user.data.phone_number == null || this.user.data.home == null || this.user.data.place_of_birth == null ) {

              this.perfil = true;
            }

            let uri = `/dashboard/mensajes/numero/${this.user.data.id}`;
             this.axios.get(uri).then((response) =>{


                  this.count = response.data;
                  if (this.count.conteo > 1) {

                    toastr.info("Tienes "+this.count.conteo+" Mensajes nuevos");
                  
                  }else if(this.count.conteo === 1){

                    toastr.info("Tiene "+this.count.conteo+" Mensaje nuevo");

                  }

                  //llamado de cita

                    let uri = `/dashboard/citas/${this.user.data.id}`;
                    this.axios.get(uri).then(response =>{

                        this.cita = response.data;
                        this.cita[0].date = moment(this.cita[0].date,"YYYY-MM-DD").format('DD-MM-YYYY') 
                        this.cita[0].time = moment(this.cita[0].time, ["HH:mm"]).format("h:mm A")
                       
                    })


                 });


             });



            },

        }
    }
</script>


<style scoped>

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

a{

  border-radius: 25px;
}

#dashboard{

  margin-top: 5%;
  padding: 10px;
  border-radius: 20px;
}

.hide{

  display: none;
}

table{

       font-size: 14px;
       margin-bottom: 5%;
    }

  th{
        font-size: 15px;
        color: white;

    }



</style>