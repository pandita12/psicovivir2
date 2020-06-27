<template>
	 <div class="row">
            <div class="col m8 s8 offset-m2 offset-s2 center">               
                <h2 class="white-text" style="float:right; margin-bottom: 40px;">Tests activos</h2>
                <i class="fas fa-toggle-on fa-5x white-text" style="margin-top: 20px;"></i>



                <table class="striped centered z-depth-3" style="background-color: white;">
                    <thead class="grey darken-4">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del test</th>
                            <th>Usuario</th>
                            <th>Activar/Desativar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="test in tests" :key="test.id">
                            <span style="display: none;">{{active = true}}</span>

                            <td>{{ test.id }}</td>
                            <td>{{ test.name_test }}</td>
                            <td>{{ test.name }}</td>
                           

                            <td>
                            	<div class="switch">
								    <label>
								      Off
								      <input type="checkbox" checked="checked" @click="deleteTest(test.id)">
								      <span class="lever"></span>
								      On
								    </label>
							  </div>
							</td>
                        </tr>
                    </tbody>
               </table>

              <h5 v-if="active === false" class=" white-text center">No hay tests activos para ningun usuario !</h5>

					<br>
                  <router-link :to=" {name: 'Activar'}" class="btn waves-effect grey darken-4"><i class="fas fa-user-plus" style="margin-right: 10px;"></i>Activar un test</router-link>


<!--                <pre>
                   {{$data}}
               </pre>
 -->			
               
            </div>
           </div>           
	

</template>

<script>

import toastr from 'toastr';
import {bus} from '../../app.js'	
import moment from 'moment'
    export default {
        data(){
            return{
                tests: [],
                active: false,
            }
        },

          created: function(){

            let uri = '/dashboard/tests/status';
              this.axios.get(uri).then((response) => {
                this.tests = response.data;
                console.log(this.tests.length);

              });  

     		   bus.etiquetas('TISM | Status de los Test')
          },

            methods: {

              deleteTest(id){

                let uri = `/dashboard/tests/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    toastr.error("Test desactivado");
                  this.tests.splice(this.tests.indexOf(id), 1);

                  if(this.tests.length < 1) {

                  	this.active = false;

                  }
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