<template>
	<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
                <form @submit.prevent="addMessage" id="form">
          
                  <div class="row">
                    <div class="col s12 m12">
                      <h3 style="float:left; margin-right: 10%;">Crear Nuevo Mensaje</h3>
                      <i class="center fas fa-user fa-5x"></i>
<!--                           <h5 class="right-align">{{user.name}}</h5>
 -->                    </div>
                  </div>
                                    
                    
                    <div v-if="$auth.user().type === 'cliente'">
                        <label>Dirigido a:</label>

                        <select class="browser-default" v-model="message.user_id_received"  required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option v-for="user in users" :key="user.id" v-if="user.type == 'terapeuta' " :value="user.id">{{user.name}} (Terapeuta)</option>
                        </select>
                    </div>
				   

                    <div v-if="$auth.user().type === 'terapeuta' || $auth.user().type === 'admin'">
                        <label>Dirigido a:</label>

                        <select class="browser-default" v-model="message.user_id_received"  required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option v-for="user in users" :key="user.id" v-if="user.type == 'cliente' " :value="user.id">{{user.name}} (Cliente)</option>
                        </select>
                    </div>
                 
	                  <div class="">                    
	                        <label>Asunto:</label>
	                        <input type="text" class="validate" v-model="message.title">
	                  </div>
                
                   
						<div class="input-field">
				          <textarea id="textarea1" class="materialize-textarea" v-model="message.message" required></textarea>
				          <label for="textarea1">Mensaje</label>
				        </div>
					        
                  

                      <br>  

                      <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Enviar Mensaje

                      </button>
                
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


import toastr from 'toastr';

export default{


	data(){

		return{
      user:{},
			users:[],
			message:{
        user_id_send: '',
      },
		}
	},

	 created: function(){

            //Consulta de usuario logueado
            let url = 'auth/user';
            this.axios.get(url).then((response) =>{

              this.user = response.data;
            });

            //consulta de usuario terapeutas
            let uri = '/dashboard/mensajes/user';
              this.axios.get(uri).then((response) => {
                console.log(response);
                this.users = response.data.data;
              });  
          },

     methods:{ 

      //Metodo para guardar un nuevo mensaje 

     	addMessage(){

     		let url = '/dashboard/mensajes/create';
        this.message.user_id_send = this.user.data.id;
			this.axios.post(url, this.message).then((response) => {

            toastr.success("Mensaje enviado correctamente");
    	       this.$router.push({name: 'dashboard'});
              //Metodo para recargar la pagina
               location.reload();

			 }).catch((error)=> {

            toastr.error("Error en envio del mensaje, intentalo de nuevo");

       });

     	}
     }
}
	

</script>

<style scoped>
	

</style>