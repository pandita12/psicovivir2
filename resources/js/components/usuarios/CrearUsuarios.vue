<template>
	
	<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
                <form @submit.prevent="addUser">
          
                  <div class="row">
                    <div class="col s12 m12">
                      <h3 style="float:left; margin-right: 10%;">Crear usuario</h3>
                      <i class="center fas fa-user fa-5x"></i>
<!--                           <h5 class="right-align">{{user.name}}</h5>
 -->                    </div>
                  </div>
                  

                  <div class="">                    
                        <label>Nombre:</label>
                        <input type="text" class="validate" v-model="user.name">
                  </div>

                    <div v-if="$auth.user().type == 'admin'">
                        <label>Tipo de usuario</label>

                        <select class="browser-default" v-model="user.type" required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option value="cliente">Cliente</option>
                          <option value="admin">Administrador</option>
                          <option value="terapeuta">Terapeuta</option>
                        </select>
                    </div>
                      

                    <div class="">
                          <label>Correo:</label>
                          <input  type="email" class="validate" v-model="user.email" required="">
                    </div>

                    <div class="">
                          <label>Telefono:</label>
                          <input  type="text" class="validate" v-model="user.phone_number" id="telefono">
                    </div>


                    <div class="">
                          <label>Dirección:</label>
                          <input  type="text" class="validate" v-model="user.home">
                    </div>


                    <div class="">
                          <label>Lugar de nacimiento:</label>
                          <input  type="text" class="validate" v-model="user.place_of_birth">
                    </div>


                    <div class="">
                          <label>Contraseña:</label>
                          <input  type="password" class="validate" v-model="user.password">
                    </div>

                     

                      <br>  

                      <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Crear nuevo usuario

                      </button>
                
                </form>

              </div>
            </div>
        </div>
<!--       <pre>
        {{$data}}
      </pre> -->
  </div>



</template>


<script type="text/javascript">

import toastr from 'toastr';

	export default{

		data(){

			return{

				user: {},
			}
		},


		methods: {

			addUser(){

          let telefono = document.getElementById('telefono').value.length

          if (telefono > 11) {

            toastr.error("Debe ingresar solo 11 digitos en el campo telefono")            
          } else{
				  
              let url = '/dashboard/usuario/create';
				   	  this.axios.post(url, this.user).then((response) => {

              toastr.success("Usuario: "+this.user.name+" se ha registrado satisfactoriamente");

				      this.$router.push({name: 'Usuarios'});
				    });
			   }
      }
		}
	}

</script>

<style>
	

</style>