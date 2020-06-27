<template>
	
	<div class="container">
		<div class="row">
																
		   <div class="col s12">
		      <ul class="tabs grey darken-4 z-depth-4">
			        <li class="tab col s4"><a class="active" href="#test1">Sobre nosotros</a></li>
			        <li class="tab col s4"><a href="#test2">Terapias</a></li>
			        <li class="tab col s4"><a href="#test3">Nuetros Terapeutas</a></li>
		      </ul>
		    </div>
		   

		    <div id="test1" class="col s12">
		    	<h3 class="white-text">Sobre nosotros</h3>

		    	<p class="white-text">El Centro Integral Naguanagua se especializa en la detección oportuna de factores de riesgo susceptibles de intervención a través de la aplicación de estrategias de prevención y re-inserción social , ademas de brindar a nuestros clientes servicios terapéuticos que generen estímulos y respuestas emocionales positivas, que impulsen efectivamente el éxito de su practica profesional y una vida plena que le permita ser útil a si mismo y a la sociedad.</p>
				
				<center>
			    	<img src="http://localhost/terapias/public/images/logo7.png" height="150px" width="150px">
		    	</center>

		    	<h4 class="white-text">Misión</h4>

		    	<p class="white-text"> Brindar una atención psicológica oportuna y eficaz a los clientes de la comunidad Naguanaguense y externa, por medio de procesos de asistencia inmediata (intervención en crisis y asesorías, terapia individual y talleres), orientados a mejorar su calidad de vida.</p>
	

			    	<img src="http://localhost/terapias/public/images/logo5.png" height="150px" width="150px">

		    	<h4 class="white-text">Visión</h4>

		    	<p class="white-text">Según la OMS, Organización Mundial de la Salud, “la salud no es solo la ausencia de enfermedad sino que debe darse un bienestar biológico, psicológico y social”. Constitución de la OMS, 1948.
				</p>
		    	
		    	<p class="white-text">Por tanto, saludablemente, entiende la salud de una forma global, poniendo el acento en su área psicológica sin olvidar su dimensión holística y la importancia de su naturaleza biopsicosocial</p>
				
			    	<img  class="right" src="http://localhost/terapias/public/images/vision.png" height="150px" width="250px">



		    </div>
		   
		    <div id="test2" class="col s12">
		    	
		    	<h3 class="white-text">¿Que es una terapia?</h3>

		    	<p class="white-text">Una terapia es un proceso de trabajo interior y evolución personal. La persona que decide empezar una terapia va a dedicar tiempo y energía a escucharse, dejar atrás lo que ya no le sirve y tomar contacto con sus deseos verdaderos. La Terapia psicológica o psicoterapia se ajusta a las necesidades de cada persona y al momento en que se encuentra. </p>

				<p class="white-text">Consiste en una serie de encuentros con un psicólogo o terapeuta en los que, por medio de la palabra, y a veces a través de otras técnicas y ejercicios, la persona va superando sus dificultades siendo más consciente de sus miedos, dudas, inseguridades o bloqueos e ir así entendiendo cómo se han ido formando esos problemas a lo largo de su vida.</p>

				<p class="white-text">La terapia posibilita que la persona se vaya conociendo mejor y desarrolle nuevas formas de resolver sus dificultades. Además aprende a vivir su día a día de una forma mucho mas satisfactoria.</p>
				
				<center>
			    	<img src="http://localhost/terapias/public/images/terapia.png" height="250px" width="350px">
		    	</center>

		    	<h3 class="white-text">¿Cuanto dura?</h3>

				<p class="white-text">
					Las sesiones duran 50-60 minutos y tienen una frecuencia semanal. No es posible establecer de antemano el nº de sesiones que durará la terapia; depende del ritmo de la persona, del grado de profundidad que quiera alcanzar en su vida, de la gravedad del problema…
				</p>

				<p class="white-text">
					El intervalo puede abarcar desde los 6 meses a los 2 años o mas.
				</p>

				
			    	<img src="http://localhost/terapias/public/images/tiempo.png" height="150px" width="150px">
		    	
				

		    </div>

		   
		    <div id="test3" class="col s12">
				<h3 class="white-text"> Nuestros Terapeutas</h3>
		  		
		  		<p class="white-text">El Técnico Superior en Terapia Psicosocial ofrece una formación teórico-práctica que permite aplicar tratamiento terapéutico dirigido a intervenir la conducta afectada por desordenes de personalidad en niños, adolescentes, adultos y ancianos, en forma eficiente y con un alto sentido ético y de responsabilidad, bajo la orientación y supervisión del especialista pertinente. Dicho tratamiento tendra como propósito principal reeducar al individuo con manifestaciones conductuales de adicción (tabaquismo,alcoholismo u otras drogas), rebeldía, maltratos físicos y/o psicológicos, disfunciones en las relaciones familiares, transgresión a las normas sociales, estrés, conducta delictiva, abuso sexual, desviaciones sexuales. </p>
				
				<center>
			    	<img src="http://localhost/terapias/public/images/logo4.png" height="150px" width="150px">
				</center>
	
		    </div>			   
		  
		</div>
	</div>

</template>

<script>
import {bus} from '../../app.js'	
export default{

		data(){

			return{

			}
		},

		created(){

			bus.etiquetas('TISM |Quienes somos')

		},


	}
</script>

<style scoped>
	
	ul{

		margin-top: 5%;
	}

	ul li a{

		color: white;
	}

	p{

		text-align: justify;
	}

</style>