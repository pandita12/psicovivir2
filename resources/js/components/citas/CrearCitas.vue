<template>
	
	<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
                <form @submit.prevent="addAppointment">
          
                  <div class="row">
                    <div class="col s12 m12">
                      <h3 style="float:left; margin-right: 10%;">Agendar citas</h3>
                      <i class="center fas fa-user fa-5x"></i>
<!--                           <h5 class="right-align">{{user.name}}</h5>
 -->                    </div>
                  </div>
                  

                  <div class="">                    
                        <label>Fecha de cita:</label>
                        <input type="text" class="datepicker" id="fecha" required="">
                  </div>



                    <div class="">
                          <label>Hora:</label>
                          <input  type="text" class="timepicker" id="hora" required>
                    </div>

                    <div>
                        <label>Cliente:</label>

                        <select class="browser-default" v-model="appointment.user_id" required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option v-for="user in users" :key="user.id" v-if="user.type == 'cliente' " :value="user.id">				{{user.name}} </option>
                        </select>
                    </div>
                                        
                      <br>  

           			  <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Agendar</button>
                
                </form>

              </div>
            </div>
        </div>
      <!-- <pre>
        {{$data}}
      </pre> -->
  </div>

</template>

<script>
import {bus} from '../../app.js'	
import toastr from 'toastr';
import moment from 'moment'

export default{

	data(){

		return{

			users: [],
			appointment:{

				date: '',
				time: '',
			},

		}
	},

	created(){

		this.usuarios();
		bus.etiquetas('TISM | Crear Cita')
	},

	methods:{

		usuarios(){

			//consulta de usuarios 
            let uri = '/dashboard/usuarios';
              this.axios.get(uri).then((response) => {
                console.log(response);
                this.users = response.data.data;
              });  
		},

		addAppointment(){

     		let url = '/dashboard/citas/create';

     		let fecha = document.getElementById('fecha').value
     		let hora = document.getElementById('hora').value

        let fechaM = moment(fecha,"DD-MM-YYYY").format('YYYY-MM-DD')
        let horaM = moment(hora, ["h:mm A"]).format("HH:mm")

     		this.appointment.date =  fechaM //.format('YYYY-MM-DD')

        this.appointment.time = horaM;


			 this.axios.post(url, this.appointment)
        .then((response) => {

               toastr.success("Cita agendada correctamente");
    	         this.$router.push({name: 'dashboard'});
              
              //Metodo para recargar la pagina
               location.reload();

			   }).catch((resp)=> {

            		toastr.error(resp.response.data.errors);

      		 });

     	},
	}

}
	
</script>

<style scoped>
	

</style>
