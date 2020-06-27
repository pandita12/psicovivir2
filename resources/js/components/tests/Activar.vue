<template>
	<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
                <form @submit.prevent="addTest">
          
                  <div class="row">
                    <div class="col s12 m12">
                      <h3 style="float:left; margin-right: 10%;">Activar nuevo Test</h3>
                      <i class="center fas fa-user fa-5x"></i>
<!--                           <h5 class="right-align">{{user.name}}</h5>
 -->                    </div>
                  </div>
                  

                  <div>
                        <label>Cliente:</label>

                        <select class="browser-default" v-model="test.user_id" required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option v-for="user in users" :key="user.id" v-if="user.type == 'cliente' " :value="user.id">       {{user.name}} </option>
                        </select>
                    </div>


                    <div>
                        <label>Test:</label>

                        <select class="browser-default" v-model="test.name_test" required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option value="Test de Locus">Test de Locus de control</option>
                          <option value="Test de Rosenberg">Test de Rosenberg</option>
                          <option value="Test de la Casa">Test de la Casa</option>
                        </select>
                    </div>

                     

                      <br>  

                      <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Activar test
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

<script>
import toastr from 'toastr';
import {bus} from '../../app.js'	

export default{


	data(){

		return{

			test: {},
			users: [],

		}
	},

	created(){

		this.usuario();
		bus.etiquetas('TISM | Activar Test')
	},

	methods:{

		usuario(){
			
			//consulta de usuarios 
	        let uri = '/dashboard/usuarios';
	          this.axios.get(uri).then((response) => {
	            console.log(response);
	            this.users = response.data.data;
	          });  
			},

		addTest(){

			let url = '/dashboard/tests/create';
			this.axios.post(url, this.test).then((response) => {
              toastr.success("Este usuario ahora posee activo el "+this.test.name_test);
		      this.$router.push({name: 'Status'});
			});

		},


	}
}
	
</script>

<style scoped>
	
</style>