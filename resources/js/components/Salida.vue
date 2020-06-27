<template>
	<div class="container">
		<div class="row">
	    	<h1 class="white-text">Has cerrado tu sesion! Vuelve pronto..</h1>
	    	<img class="right" src="http://localhost/terapias/public/images/cerebro.png" height="250px" width="250px">
		</div>
	</div>
</template>

<script>
import {bus} from '../app.js'

export default{

	data(){

		return{

		}
	},

	created(){

		bus.etiquetas('TISM | VUELVE PRONTO')
	},
}	

</script>

<style type="text/css" scoped>
	
	h1{

		
	}
</style>
