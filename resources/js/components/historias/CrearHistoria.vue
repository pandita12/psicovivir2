<template>
	<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
                <form @submit.prevent="addHistory">
          
                  <div class="row">
                    <div class="col s12 m12">
                      <h3 style="float:left; margin-right: 10%;">Registrar nueva historia</h3>
                      <i class="center fas fa-user fa-5x"></i>
<!--                           <h5 class="right-align">{{user.name}}</h5>
 -->                    </div>
                  </div>
                  

                    <div>
                        <label>Cliente:</label>

                        <select class="browser-default" v-model="history.user_id" required>
                          <option value="" disabled selected>Seleccionar</option>
                          <option v-for="user in users" :key="user.id" v-if="user.type == 'cliente' " :value="user.id">				{{user.name}} </option>
                        </select>
                    </div>

                    <div class="input-field">
				          <textarea id="textarea1" class="materialize-textarea" v-model="history.clinical_summary" required></textarea>
				          <label for="textarea1">Resumen clinico</label>
				        </div>

		  				<div>
		                	<label>Tecnicas aplicadas:</label>
						    
						    <p>
						      <label>
						        <input type="checkbox" v-model="test1" value="Test de Locus de control"/>
						        <span>Test de Locus de control</span>
						      </label>
						    </p>
						    <p>
						      <label>
						        <input type="checkbox" v-model="test2" value="Test de Goldberg" />
						        <span>Test de Goldberg</span>
						      </label>
						    </p>
						    <p>
						      <label>
						        <input type="checkbox" v-model="test3" value="Test de la Casa"/>
						        <span>Test de la Casa</span>
						      </label>
						    </p>
						</div>

						<div class="input-field">
				          <textarea id="textarea2" class="materialize-textarea" v-model="history.advances"required></textarea>
				          <label for="textarea2">Avances</label>
				        </div>

                                
                      <br>  

           			  <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Registrar</button>
                
                </form>

              </div>
            </div>
        </div>
      <pre>
        {{$data}}
      </pre>
  </div>
</template>

<script type="text/javascript">
import {bus} from '../../app.js'	
import toastr from 'toastr';
import moment from 'moment'

export default{

	data(){

		return{

			users:[],
			history:{	

				applied_techniques: '',	

			},

			test1: false,
			test2: false,
			test3: false,

		}
	},

	created(){

		bus.etiquetas('TISM | Crear Nueva Historia')
		this.usuario();
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

			addHistory(){

			if (this.test1 == true && this.test2 == false && this.test3 == false) {

				this.history.applied_techniques = "Test de Locus de control"

			}else if(this.test1 == false && this.test2 == true && this.test3 == false){
				
				this.history.applied_techniques = "Test de Goldberg"

			}else if(this.test1 == false && this.test2 == false && this.test3 == true){

				this.history.applied_techniques = "Test de la Casa"

			}else if (this.test1 == true && this.test2 == true && this.test3 == false) {
				
				this.history.applied_techniques = "Test de Locus de control y Test de Goldberg"

			}else if (this.test1 == true && this.test2 == false && this.test3 == true) {

				this.history.applied_techniques = "Test de Locus de control y Test de la Casa"
				
			}else if (this.test1 == false && this.test2 == true && this.test3 == true) {

				this.history.applied_techniques = "Test de Goldberg y Test de la Casa"
				
			}else if (this.test1 == true && this.test2 == true && this.test3 == true) {

				this.history.applied_techniques = "Test de Locus de control,Test de Goldberg y Test de la Casa"
				
			}else{
				
				this.history.applied_techniques = "No se aplicaron Tests"
			}

     		let url = '/dashboard/historias/create';

			 this.axios.post(url, this.history)
		        .then((response) => {

	               toastr.success("Historia Registrada correctamente");
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