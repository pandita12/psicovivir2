<template>
         <div class="row">
            <div class="col m8 s8 offset-m2 offset-s2 center">               
                <h2 class="white-text" style="float:right; margin-bottom: 40px;">Lista de usuarios</h2>
                <i class="fas fa-users fa-5x white-text" style="margin-top: 20px;"></i>



                <table class="striped centered z-depth-3" style="background-color: white;">
                    <thead class="grey darken-4">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Lugar de nacimiento</th>
                            <th>Tipo de usuario</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.phone_number }}</td>
                            <td>{{ user.home }}</td>
                            <td>{{ user.place_of_birth }}</td>
                            <td v-if="user.type == 'admin'"><span class="badge amber accent-4 white-text">{{ user.type }}</span></td>

                            <td v-if="user.type == 'terapeuta'"><span  class="badge green white-text"> {{ user.type }}</span></td>

                            <td v-if="user.type == 'cliente'"><span  class="badge blue white-text">{{ user.type }}</span></td>



                            <td><router-link :to=" {name: 'EditarUsuarios', params: {id: user.id}}" class="btn waves-effect amber accent-4">Editar</router-link>
                            <button class="btn waves-effect red" @click.prevent="deletePost(user.id)">Borrar</button></td>
                        </tr>
                    </tbody>
               </table>

                               <router-link :to=" {name: 'CrearUsuarios'}" class="btn waves-effect grey darken-4"><i class="fas fa-user-plus" style="margin-right: 10px;"></i>Crear nuevo usuario</router-link>


              <!--  <pre>
                   
                   {{$data}}
               </pre> -->

               
            </div>
           </div>           
</template>

<script>
import toastr from 'toastr';

    export default {
        data(){
            return{
                users: [],
            }
        },

          created: function(){
            let uri = '/dashboard/usuarios';
              this.axios.get(uri).then((response) => {
                console.log(response);
                this.users = response.data.data;
              });  
          },
            methods: {
                  deletePost(id)
                  {
                    let uri = `/dashboard/usuario/delete/${id}`;
                    this.axios.delete(uri).then(response => {
                        toastr.error("Usuario borrado");
                      this.users.splice(this.users.indexOf(id), 1);
                    });
                }
        }
    }
</script>

<style scoped> 
    
    table{

       font-size: 14px;
       margin-bottom: 5%;
    }

    button{

        margin-top: 25px;
    }

    span{

        font-size: 15px;
    }

    th{
        font-size: 15px;
        color: white;

    }


</style>
