<template>
	<div class="container">
		<div class="main row offset-m2 offset-s2">
 		   <div class="col s12 m12">
      			<div class="card-panel deep-purple lighten-2">
							
							<center>

							<h1>Atención<i class="fas fa-exclamation-circle right"></i></h1>
							
							<hr>
							
							
								<h3>Intrucciones para realizar test</h3>
							</center>
			        <p class="white-text"><i class="fas fa-angle-right" style="margin-right: 5px; color:black;"></i>A continuación encontrara una serie de enunciados
			        </p>

			        <p class="white-text"><i class="fas fa-angle-right" style="margin-right: 5px; color:black;"></i>Ninguna respuesta es correcta o incorrecta. Elija la que más se adecue a su forma de pensar tachando <span style="color:black; font-size: 20px;">A</span> o <span style="color:black; font-size: 20px;">B</span>. La información que Ud. proporcione es confidencial y solamente sera revisada por su terapeuta.</p>


			        <button class="right btn grey darken-4" @click="ruta('Test1')">Empezar Test</button>	
     			 </div>
    		</div>
  		</div>
	</div>
</template>

<script>
export default{

	data(){

		return{


		}
	},

	methods:{

			ruta(ruta){

            this.$router.push({name: ruta});

			}
		}
}
	
</script scoped>

<style>

.main{

	margin-top: 10%;
}

button{

	margin-top: 5%;
}

</style>