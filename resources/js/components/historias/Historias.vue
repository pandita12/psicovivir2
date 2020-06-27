<template>
	<div>
		<div class="row center" style="margin-top: 5%">
		    <div class="col s12 m2"></div>			
		    <div class="col s12 m8">
		      <div class="card-panel white">
		      	<div class="row blue darken-1" height="80px" style="padding: 15px;">
			      	<div class="col s12 m4"><img src="http://localhost/terapias/public/images/logo7.png" height="80px" width="80px"></div>
			      	<div class="col s12 m4"><h4 class="center white-text">Historia Clinica</h4>
			      							<h6 class="white-text">TISM</h6></div>
			      	<div class="col s12 m4"></div>
		      	</div>
		      	<br>

		      	<div class="row" style="padding: 15px;">
		      		<div class="col s12 m5" id="numero">
		      			
				      	<h5 class="center"><i class="fas fa-clipboard-check" style="color: #60D299"></i>    Historia N°:</h5> 
				      	<br>
				      	<p><b>{{history[0].id}}</b></p>
		      		</div>

					<div class="col s12 m1"></div>

		      	
			      	<div class="col s12 m6" id="fecha">	
				      	<h5 class="center"><i class="fas fa-clock" style="color: #60D299"></i>    Fecha:</h5> 
				      	<br>
				      	<p><b>{{history[0].created_at}}</b></p> 
			      	</div>
		      	</div>

		      	<div class="row" style="padding: 15px;">

		      		<div class="col s12 m5" id="cliente">
				      	<h5 class="center"><i class="fas fa-user" style="color: #60D299"></i>     Cliente</h5>
				      	<br>
				      	<p><b>{{history[0].name}}</b></p> 
		      		</div>

					<div class="col s12 m1"></div>


		      		<div class="col s12 m1"></div>
		      	
			      	<div class="col s12 m4 center-align" id="resumen">	
				      	<h5 class="center"><i class="fas fa-clipboard-list" style="color: #60D299"></i>   Resumen Clinico</h5>
				      	<br>
				      	<p style="center-align"><b>{{history[0].clinical_summary}}</b></p> 

			      	</div>
		      		
		      	</div>

		      	<div class="row" style="padding: 15px;">

		      		<div class="col s12 m5" id="avances" >
				      	<h5 class="center"><i class="fas fa-angle-double-up" style="color: #60D299"></i>  Avances</h5>
				      	<br>
				      	<p style="text-align: justify"><b>{{history[0].advances}}</b></p> 
		      		</div>

					<div class="col s12 m1"></div>

					<div class="col s12 m1"></div>
		      	
			      	<div class="col s12 m4" id="tecnica">	
				      	<h5 class="center"><i class="fas fa-atlas" style="color: #60D299"></i>  Tecnicas aplicadas</h5>
				      	<br>
				      	<p style="center-align"><b>{{history[0].applied_techniques}}</b></p> 
			      	</div>
		      		
		      	</div>

		      	<a href="" id="print" @click.prevent="printMe" target="_blank" class="btn right grey darken-4" style="margin-top: -2%;"><i class="fas fa-file-pdf"></i>   Generar reporte PDF</a>

		      </div>
		    </div>
			
		    <div class="col s12 m2"></div>			

		  </div>	

<!-- 		  <pre>{{$data}}</pre>	
 -->
  	</div>

</template>

<script>
import toastr from 'toastr'
import moment from 'moment'

export default{

	data(){

		return{

			history: {},
			histories:{}


		}
	},

	created(){

		this.traerUsuario();

	},

	methods:{

		traerUsuario(){

			let url = `/dashboard/historia/${this.$route.params.id}`;
			this.axios.get(url).then((response) =>{

				this.history = response.data
				this.history[0].created_at = moment(this.history[0].created_at,"YYYY-MM-DD HH:mm:ss").format('DD-MM-YYYY')

			}).catch((error)=>{

				toastr.error(error)

			});


			},

			printMe(){

			 	window.print();
			
			 }
		},



	}
		
</script>

<style scoped="">

	i{
		color: #60D299
	}
	
</style>

