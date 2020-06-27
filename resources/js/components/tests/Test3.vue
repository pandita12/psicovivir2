<template>

	<div>

	<div id="main">

		<div class="white" style="padding: 20px" id="inicio">

			<div class="row center blue darken-2" style="border: 2px solid black; padding: 10px; margin: -20px">
				<div class="col s12 m4 ">
					<h2 class="center white-text">Test #3</h2>
				</div>


				<div class="col s12 m4 ">
				</div>

				<div class="col s12 m4 ">
					<i class="fas fa-pen-square fa-5x right" style="color:white"></i>
				</div>

			</div>
		
			<div class="row" style="margin-top: 5%">
				
				<h3 class="center-align">Bienvenido al Test#3</h3>

			</div>

			<div class="row center">
				
				<div class="col s12 m3"></div>

				<div class="col s12 m6 blue" style="border: 2px solid black; padding: 20px">
					
					<h5 class="white-text"><i class="fas fa-exclamation"></i>    Indicaciones</h5>
					
					<p class="white-text" style="font-size: 15px"><b>Dibuja una casa en el lienzo blanco que se mostrara al empezar el test, realizalo a tu libre criterio, cuando culmines de dibujar, carga el dibujo que se descargara a tu computadora y responde las preguntas para finalizar</b></p>
					
				</div>

				<div class="col s12 m3"></div>

			</div>

			<div class="row">
				<button class="btn blue darken-4 right" style="margin: 20px;" id="" @click.prevent="iniciarTest">Empezar Test</button>
			</div>

		</div>

		</div>

		<div id="prueba" class="white hide" style="padding:">

			<h3 class="center-align blue white-text" style="border-bottom: 1px solid black; margin-bottom: 2px" >Dibuja una casa</h3>
			
			<canvas id="draw" width="400" height="350"></canvas>

		</div>

	    <button type='button' style="margin: 20px" class="btn blue darken-4 right hide" onclick='LimpiarTrazado()' id="boton1">Borrar</button>


		    <button type='submit' style="margin: 20px" class="btn blue darken-4 right hide" @click.prevent="guardar()" id="boton2">Guardar Dibujo</button>
		
		<a id="link"></a>


		<div class="container white hide" id="final">
			
			<div class="row">
	          <div class="col m8 s8 offset-m2 offset-s2 ">
	              <div class="card-panel blue" style="margin-top: 40px;">
					
					<h4 class="white-text center-align" style="margin-bottom: 5%;">Ahora Carga la imagen del dibujo que acabas de terminar y responde las siguientes preguntas sencillas</h4>

					<br>

	            	<form @submit="formSubmit" enctype="multipart/form-data">

	            		<div>
	
		                    <label style="margin-right: 15%;font-size: 20px" class="white-text">Imagen:</label>

		                    
		                    <input type="file" class="validate" v-on:change="onImageChange" required>

	                    </div>

	                    <br>

	                    <div class="row">
	                    	
	                    	<div class="col s12 m5">
	                    		<div class="input-field">
						          <textarea id="textarea1" class="materialize-textarea" v-model="test.respuesta1" required></textarea>
						          <label for="textarea2" class="white-text" style="font-size: 10px">¿Esta casa esta habitada?</label>
						        </div>
	                    	</div>


	                    </div>

	                    <div class="row">
	                    	
	                    	<div class="col s12 m5">
							    <div class="input-field">
						          <textarea id="textarea2" class="materialize-textarea" v-model="test.respuesta2" required></textarea>
						          <label for="textarea2" class="white-text" style="font-size: 10px">¿Quien vive en ella?</label>
						        </div>                		
	                    	</div>

	                    </div>

	                    <button class="btn grey darken-4" style="margin-top: 10%;">Enviar</button>
	                </form>
		          </div>
	          </div>
	      </div>

		</div>

<!-- 	<pre>{{$data}}</pre>
 -->  </div>
</template>

<script>

import toastr from 'toastr'

export default{


	data(){

		return{

			usuario: {},
			success: '',
			image: '',
			test:{},
		}
	},

	created(){

		this.etiquetas();
		this.user();

	},

	methods:{

			onImageChange(e){

	                console.log(e.target.files[0]);
	                this.image = e.target.files[0];
	            },

            formSubmit(e) {

                e.preventDefault();
 
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
 
                let formData = new FormData();
                formData.append('image', this.image);
 				
                axios.post(`/dashboard/fotoTest/${this.usuario.data.id}`, formData)
                .then( response=>{

                	this.user();
                    let uri = `/dashboard/testCasa/create/${this.usuario.data.id}`
                    axios.post(uri,this.test).then(response=>{

               			let url = 'auth/user';
		                  this.axios.get(url).then((response) =>{
		                    this.usuario = response.data;
		                    let urx = `/dashboard/status/delete/${this.usuario.data.id}/3`
		                    this.axios.delete(urx).then(response =>{


		                    toastr.success("Test finalizado correctamente, ahora espera las indicaciones de tu terapeuta");
		                    this.$router.push({name: 'dashboard'});
							location.reload();
		                    
		                    });


		                      

		                  });
    	               
                    })
                })
                .catch(function (error) {
                    console.log(error);
                    toastr.error("Problemas al actualizar imagen");

                });

                  

            },

		user(){

			let url = 'auth/user';
          	this.axios.get(url).then((response) =>{
            this.usuario = response.data;
          });
		},

		iniciarTest: function(){

              let divPrueba = document.getElementById('prueba')
              let empezar = document.getElementById('inicio')
              let boton1 = document.getElementById('boton1')
              let boton2 = document.getElementById('boton2')


              divPrueba.classList.remove('hide')
              empezar.classList.add('hide')
              boton1.classList.remove('hide')
              boton2.classList.remove('hide')

				let menu = document.getElementById("menuDerecho")
	            menu.classList.add("hide")
            },

		etiquetas(){

                //Etiqueta script
                let tabs = document.createElement('script')
                tabs.setAttribute('src', 'http://localhost/terapias/resources/js/canvas.js')
                document.head.appendChild(tabs)
            },

	
	     guardar(){

   		    const canvas = document.querySelector('#draw');
			const ctx = canvas.getContext('2d');

			 const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

     	    let imagen = canvas.toDataURL('image/png').replace("image/png", "image/octet-stream");

			ctx.closePath();
			ctx.fill(); 

			var link = document.getElementById('link');
			  link.setAttribute('download', 'Dibujo.png');
			  link.setAttribute('href', canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"));
			  link.click();

			let final = document.getElementById('final')
			final.classList.remove('hide')

			let divPrueba = document.getElementById('prueba')
          	let boton1 = document.getElementById('boton1')
          	let boton2 = document.getElementById('boton2')


              divPrueba.classList.add('hide')
              boton1.classList.add('hide')
              boton2.classList.add('hide')

	     },

		},


}
	
</script>

<style scoped>

#main{

	padding: 30px;
}

.hide{

	display: none;
}
	
</style>