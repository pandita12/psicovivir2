<template>  

  <div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
                <form @submit.prevent="updateUser">
          
                  <div class="row">
                    <div class="col s12 m12">
                      <h3 style="float:left; margin-right: 10%;">Editar usuario</h3>
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
                      
                    <br>

                    <div class="">                    
                        <label>Edad: (Ingrese solo los numeros)</label>
                        <input type="text" class="validate" data-length="2" v-model="user.age" id="age">
                    </div>


                    <div class="">
                          <label>Correo:</label>
                          <input  type="email" class="validate" v-model="user.email" required="">
                    </div>

                    <div class="input-field">
                          <label for="telefono">Telefono:</label>
                          <input  type="text" data-length="11" class="validate" v-model="user.phone_number"  id="telefono">
                    </div>


                    <div class="">
                          <label>Dirección:</label>
                          <input  type="text" class="validate" v-model="user.home">
                    </div>


                    <div class="">
                          <label>Lugar de nacimiento:</label>
                          <input  type="text" class="validate" v-model="user.place_of_birth">
                    </div>



                     

                      <br>  

                      <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Actualizar

                      </button>
                
                </form>

              </div>
            </div>
        </div>
  </div>
</template>

<script>
import toastr from 'toastr';
import {bus} from '../../app.js'

    export default {

      data() {
        return {
          user: {}
        }
      },
      created() {
        let uri = `/dashboard/usuario/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.user = response.data;
        });

        bus.etiquetas('TISM | Editar perfil')

      },
      methods: {
        updateUser() {
          let telefono = document.getElementById('telefono').value.length
          let age = document.getElementById('age').value

          if (telefono > 11) {

            toastr.error("Debe ingresar solo 11 digitos en el campo telefono")            
          }else if (isNaN(parseInt(age))) {

            toastr.error("El campo edad solo puede tener numeros, EJ: 20")            


          }else {
          let uri = `/dashboard/usuario/update/${this.$route.params.id}`;
          this.axios.post(uri, this.user).then((response) => {
          toastr.success("Usuario: "+this.user.name+" se ha modificado satisfactoriamente");
            this.$router.push({name: 'Usuarios'});
          });
        }
        }
      }
    }
</script>

<style scoped>


  
  form{
      
      // margin-left: 30%;

     }
</style>