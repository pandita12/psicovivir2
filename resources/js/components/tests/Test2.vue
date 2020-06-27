<template>
	
  <div>
	<div class="container white" style="margin-top: 5%;">
		<div class="row center blue darken-2" style="border: 2px solid black">
			<div class="col s12 m4 ">
				<h2 class="center white-text">Test #2</h2>
			</div>
		</div>

		<div class="row">

			<div class="col s12 m3"></div>

			<div class="col s12 m6">
				<h5 class="center blue-text">Responde a cada una de las siguientes frases con la respuesta que considere mas apropiada desde</h5>
			</div>

			<div class="col s12 m3"></div>
		</div>

		<div class="row center">
			<div class="col s12 m3">
				<img src="http://localhost/terapias/public/images/tests/test1.png" class="circle" height="80px" width="80px">
				<h5>Muy de acuerdo</h5>
			</div>
			<div class="col s12 m3">
				<img src="http://localhost/terapias/public/images/tests/test2.png" class="circle" height="80px" width="80px">
				<h5>De acuerdo</h5>
			</div>
			<div class="col s12 m3">
				<img src="http://localhost/terapias/public/images/tests/test3.png" class="circle" height="80px" width="80px">
				<h5>En desacuerdo</h5>
			</div>
			<div class="col s12 m3">
				<img src="http://localhost/terapias/public/images/tests/test4.png" class="circle" height="80px" width="80px">
				<h5>Muy en desacuerdo</h5>
			</div>
		</div>

		<div class="row">
			<button class="btn blue darken-4 right" style="margin: 20px;" id="empezar" @click.prevent="iniciar">Empezar Test</button>
		</div>
	</div>

	<div class="container white hide" id="prueba" style="padding: 20px">
  
  <form @submit.prevent="resultado" name="form">
	<div class="row">
		<div class="col s12 m5">
			<div class="card-panel blue darken-4">
				<h5 class="white-text center-align">Siento que soy una persona digna de aprecio, al menos en igual medida que los demás</h5>

				<br>

				<p>
			      <label>
			        <input name="group1" v-model.number="test.respuesta1" value="4"  type="radio" checked="checked" />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group1" v-model.number="test.respuesta1" value="3" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group1" v-model.number="test.respuesta1" value="2" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group1"  v-model.number="test.respuesta1" value="1" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>
		<div class="col s12 m1"></div>
		<div class="col s12 m5">
			<div class="card-panel orange">
				<h5 class="white-text center-align">Estoy convencido/a de que tengo cualidades buenas.</h5>

				<br>

				<p>
			      <label>
			        <input name="group2" v-model.number="test.respuesta2" value="4" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group2" v-model.number="test.respuesta2" value="3" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group2" v-model.number="test.respuesta2" value="2" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group2" v-model.number="test.respuesta2" value="1 " type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>
	</div>

	<div class="row">
		<div class="col s12 m5">
			<div class="card-panel blue darken-4">
				<h5 class="white-text center-align">Soy capaz de hacer las cosas tan bien como la mayoría de la gente.</h5>

				<br>

				<p>
			      <label>
			        <input name="group3" v-model.number="test.respuesta3" value="4" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group3" v-model.number="test.respuesta3" value="3" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group3" v-model.number="test.respuesta3" value="2" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group3" v-model.number="test.respuesta3" value="1" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>			
		</div>
		<div class="col s12 m1"></div>
		<div class="col s12 m5">
			<div class="card-panel orange">
				<h5 class="white-text center-align">Tengo una actitud positiva hacia mi mismo/a.</h5>

				<br>

				<p>
			      <label>
			        <input name="group4" v-model.number="test.respuesta4" value="4" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group4" v-model.number="test.respuesta4" value="3" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group4" v-model.number="test.respuesta4" value="2" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group4" v-model.number="test.respuesta4" value="1" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>

	</div>

	<div class="row">
		<div class="col s12 m5">
			<div class="card-panel blue darken-4">
				<h5 class="white-text center-align">En general estoy satisfecho/a de mi mismo/a.</h5>

				<br>

				<p>
			      <label>
			        <input name="group5" v-model.number="test.respuesta5" value="4" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group5" v-model.number="test.respuesta5" value="3" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group5" v-model.number="test.respuesta5" value="2" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group5" v-model.number="test.respuesta5" value="1" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>
		<div class="col s12 m1"></div>
		<div class="col s12 m5">
			<div class="card-panel orange">
				<h5 class="white-text center-align">Siento que no tengo mucho de lo que estar orgulloso/a.</h5>

				<br>

				<p>
			      <label>
			        <input name="group6" v-model.number="test.respuesta6" value="1" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group6" v-model.number="test.respuesta6" value="2" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group6" v-model.number="test.respuesta6" value="3" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group6" v-model.number="test.respuesta6" value="4" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>

	</div>
	<div class="row">
		<div class="col s12 m5">
			<div class="card-panel blue darken-4">
				<h5 class="white-text center-align">En general, me inclino a pensar que soy un fracasado/a.</h5>

				<br>

				<p>
			      <label>
			        <input name="group7" v-model.number="test.respuesta7" value="1" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group7" v-model.number="test.respuesta7" value="2" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group7" v-model.number="test.respuesta7" value="3" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group7" v-model.number="test.respuesta7" value="4" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>
		<div class="col s12 m1"></div>
		<div class="col s12 m5">
			<div class="card-panel orange">
				<h5 class="white-text center-align">Me gustaría poder sentir más respeto por mi mismo.</h5>

				<br>

				<p>
			      <label>
			        <input name="group8" v-model.number="test.respuesta8" value="1" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group8" v-model.number="test.respuesta8" value="2" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group8" v-model.number="test.respuesta8" value="3" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group8" v-model.number="test.respuesta8" value="4" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m5">
			<div class="card-panel blue darken-4">
				<h5 class="white-text center-align">Hay veces que realmente pienso que soy un inútil.</h5>

				<br>

				<p>
			      <label>
			        <input name="group9" v-model.number="test.respuesta9" value="1" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group9" v-model.number="test.respuesta9" value="2" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group9" v-model.number="test.respuesta9" value="3" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group9" v-model.number="test.respuesta9" value="4" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>
		</div>
		<div class="col s12 m1"></div>
		<div class="col s12 m5">
			<div class="card-panel orange">
				<h5 class="white-text center-align">A veces creo que no soy buena persona.</h5>

				<br>

				<p>
			      <label>
			        <input name="group10" v-model.number="test.respuesta10" value="1" type="radio" checked />
			        <span class="white-text">A</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group10" v-model.number="test.respuesta10" value="2" type="radio" />
			        <span class="white-text">B</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group10" v-model.number="test.respuesta10" value="3" type="radio"  />
			        <span class="white-text">C</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group10" v-model.number="test.respuesta10" value="4" type="radio" />
			        <span  class="white-text">D</span>
			      </label>
			    </p>
	      	</div>

		</div>
		<button type="submit" class="btn blue darken-4 right" style="margin: 20px;">Finalizar test</button>
	</div>
	



	</form>

  	</div>

  </div>        


</template>

<script>
import {bus} from '../../app.js'
import moment from 'moment'
import toastr from 'toastr'

export default{

	data(){

		return{

			test:{

				respuesta1: 0,
				respuesta2: 0,
				respuesta3: 0,
				respuesta4: 0,
				respuesta5: 0,
				respuesta6: 0,
				respuesta7: 0,
				respuesta8: 0,
				respuesta9: 0,
				respuesta10: 0,		
   	            name : '',
	            user_id: '',
	            result_total: '',
	            indication: '',

			},

			usuario:{},


		}
	},

	created(){

		bus.etiquetas('TISM | Test 2')
		this.user();
	},

	methods: {

		user(){

          let url = 'auth/user';
          this.axios.get(url).then((response) =>{
            this.usuario = response.data;
          });
        },

		iniciar(){

			let divPrueba = document.getElementById('prueba')
			let empezar = document.getElementById('empezar')

			divPrueba.classList.remove('hide')
			empezar.classList.add('hide')

			let menu = document.getElementById("menuDerecho")
            menu.classList.add("hide")
		},

		resultado(){
          
          if (this.test.respuesta1 == 0 || this.test.respuesta2 == 0 || this.test.respuesta3 == 0 || this.test.respuesta4 == 0 || this.test.respuesta5 == 0 || this.test.respuesta6 == 0 || this.test.respuesta7 == 0 || this.test.respuesta8 == 0 || this.test.respuesta9 == 0 || this.test.respuesta10 == 0) {

          		toastr.error('Debe responder todas las preguntas')

          }else {

			let menu = document.getElementById("menuDerecho")
	        menu.classList.remove('hide');

          //Suma de total
          this.test.result_total = this.test.respuesta1 + this.test.respuesta2 + this.test.respuesta3 + this.test.respuesta4 + this.test.respuesta5 + this.test.respuesta6 + this.test.respuesta7 + this.test.respuesta8 + this.test.respuesta9 + this.test.respuesta10; 

          // Comprobacion  de resultado

            if(this.test.result_total >= 30 && this.test.result_total <= 40){

              this.test.indication = 'Autoestima elevada'

            }else if(this.test.result_total >= 26 && this.test.result_total <= 29){

              this.test.indication = 'Autoestima media'

            }else if (this.test.result_total <= 25){

              this.test.indication = 'Autoestima baja'

            }

            //Asignación de nombre de test
            this.test.name = 'Test de Rosenberg'

            let url = '/dashboard/test/create'
            this.test.user_id = this.usuario.data.id

            //Post
            this.axios.post(url,this.test).then(response =>{

              let url = 'auth/user';
                  this.axios.get(url).then((response) =>{
                    this.usuario = response.data;
                    let urx = `/dashboard/status/delete/${this.usuario.data.id}/2`
                    this.axios.delete(urx).then(response =>{


                    toastr.success("Test finalizado correctamente, ahora espera las indicaciones de tu    terapeuta");
                    this.$router.push({name: 'dashboard'});

                    });


                     // location.reload();

                  });

              
            }).catch( error =>{

              toastr.error("Error en envio del test, intentalo de nuevo");

            })

        	}

        },
	},

}
	
</script>

<style scoped>

.hide{

	display: none;

}

.row .col .card-panel{

	border: 1px solid black
}
	
</style>