<template>
  <div>
	<div class="row">
	    <div class="col m8 s8 offset-m2 offset-s2"> 
	    		<center>
					<h3 class="white-text" style="margin-bottom: 5%;"><i class="fas fa-book-reader" style="color:white; margin-right: 3%;"></i>Biblioteca</h3>
				</center>
			
              <div class="card-panel white" style="margin-top: 20px; border-radius: 15px;">
				<center>
			          <h3 class="card-title" style="font-style: italic;">Imagenes y documentos</h3>
			          <i class="far fa-images fa-5x" style="margin-left: 3%;"></i>
			          <i class="far fa-file-pdf fa-5x" style="margin-left: 3%;"></i>
			          <i class="far fa-file-word fa-5x" style="margin-left: 3%;"></i>
				</center>

				<div class="carousel">
					<center>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria1.jpg" class="materialboxed" width="250px" height="250px" alt="">Ataques de panico</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria2.jpg" class="materialboxed" width="250px" height="250px" alt="">Compulsiones</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria3.jpg" class="materialboxed" width="250px" height="250px" alt="">Estres postraumático</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria4.jpg" class="materialboxed" width="250px" height="250px" alt="">Fobias</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria5.jpg" class="materialboxed" width="250px" height="250px" alt="">Depresion prenatales y postparto</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria6.jpg" class="materialboxed" width="250px" height="250px" alt="">Bipolaridad</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeri7.jpg" class="materialboxed" width="250px" height="250px" alt="">Ayuda Psicológica</a>
	                  <a class="carousel-item"><img src="http://localhost/terapias/public/images/galeria8.jpg" class="materialboxed" width="250px" height="250px" alt="">Depresiones</a>
						
					</center>
                </div> 

			</div>
		
		</div>
	</div>

	<div class="container row" v-if="$auth.user().type === 'admin' || $auth.user().type === 'terapeuta'">

		<h3 class="center-align white-text">Documentacion de los tests</h3>
		<div class="col s12 m4">
			<div class="card-panel blue">
				<h5 class="white-text"><i class="fas fa-file-pdf"></i>  Test de Locus</h5>
				<br>
				<a target="_blank"  class="btn waves-effect grey darken-4" href="http://localhost/terapias/storage/app/public/locusDeControl.pdf">Abrir</a>
			</div>
		</div>
		<div class="col s12 m4">
			<div class="card-panel blue">
				<h5 class="white-text"><i class="fas fa-file-pdf"></i>   Test de Rosenberg</h5>
				<br>
				<a target="_blank"  class="btn waves-effect grey darken-4" href="http://localhost/terapias/storage/app/public/test-de-autoestima-de-rosenberg.pdf">Abrir</a>
			</div>
		</div>
		<div class="col s12 m4">
			<div class="card-panel blue">
				<h5 class="white-text"><i class="fas fa-file-pdf"></i>   Test de la Casa</h5>
				<br>
				<a target="_blank"  class="btn waves-effect grey darken-4" href="http://localhost/terapias/storage/app/public/test-casa.pdf">Abrir</a>
			</div>
		</div>
	</div>
 </div>
</template>

<script type="text/javascript">
import {bus} from '../app.js'
import pdf from 'vue-pdf'


export default{

	data(){

		return{

		}
	},

	created(){

		let carousel = document.createElement('script')
		carousel.setAttribute('src', 'http://localhost/terapias/resources/js/init.js')
		document.head.appendChild(carousel)

	},

	
	methods: {


    }

}
</script>

<style scoped>
	
	button{

		margin-bottom: 20px;
		margin-top: 20px;
		border-radius: 15px;
		color: white;
		background-color: #150E0E;
		padding: 5px;
	}

	a{

		color: white;
	    transition: color 0.2s ease-in-out 0.2s;
	    transition: font-size 0.2s linear 0.2s;

	}
	
	a:hover{

		color: grey;
		font-size: 18px;


	}
</style>