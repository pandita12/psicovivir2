<template>
	<div>
		
		<div class="row">
				<center>
					<router-link  :to="{ name: 'Resultados3'}"><a style="margin-top: 5%" class="btn waves-effect grey darken-4 ">Volver</a></router-link>
				</center>
		</div>

		<div class="container white" style="margin-top: 2%">
			

			<div class="row blue">
				<div class="col s12 m12">
					<h4 class="center white-text">Dibujo</h4>				
				</div>
			</div>
			
			<div class="row">
				<div class="col s12 m12">
					<br>
					<center>
					    <img width="650" :src="dibujo[0].name">
					</center>
				</div>
			</div>


		</div>
	
<!-- 		<pre>{{$data}}</pre>
 -->
	</div>
</template>

<script>
import toastr from 'toastr'
import {bus} from '../../app.js'	

export default{

	data(){

		return{

			dibujo:[],
		}
	},


	created: function(){

		this.traerDibujo();
		bus.etiquetas('TISM | Dibujo del cliente')
	},

	methods: {

		traerDibujo(){

			let url = `/dashboard/dibujo/${this.$route.params.id}`;
			this.axios.get(url).then((response) =>{

				this.dibujo = response.data

			}).catch((error)=>{

				toastr.error(error)

			});

		}
	},
}	
</script>


<style scoped>
	
</style>