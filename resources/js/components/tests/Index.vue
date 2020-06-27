<template>
	<div class="container">
		<div class="main row center offset-m2 offset-s2">

			<div class="col l4 s12 m4"  v-for="test in tests" :key="test.id" v-if="test.name_test == 'Test de Locus' || $auth.user().type == 'admin'">
				<div class="card" v-if="test.name_test == 'Test de Locus' || $auth.user().type == 'admin'">
			        <div class="card-image">
			          <img src="http://localhost/terapias/public/images/test.jpg" height="200px">
			          <span class="card-title">Test 1</span>
			        </div>
			        <div class="card-content">
			          <p>Test 1</p>
			        </div>
			        <div class="card-action">
			          <a style="color: #2080AE;transition: opacity 0.2s ease-in-out 0.2s;" href="#" @click.prevent="ruta('Indicaciones')">Empezar</a>
			        </div>
			      </div>
			</div>

			<div class="col l4 s12 m4" v-for="test in tests" :key="test.id" v-if="test.name_test == 'Test de Rosenberg' || $auth.user().type == 'admin'">
				<div class="card" v-if="test.name_test == 'Test de Rosenberg' || $auth.user().type == 'admin'">
			        <div class="card-image">
			          <img src="http://localhost/terapias/public/images/test1.jpg" height="200px">
			        </div>
			        <div class="card-content">
			          <p>Test 2</p>
			        </div>
			        <div class="card-action">
			          <a style="color: #2080AE; transition: opacity 0.2s ease-in-out 0.2s;" href="#" @click.prevent="ruta('Test2')">Empezar</a>
			        </div>
			      </div>
			</div>

			<div class="col l4 s12 m4" v-for="test in tests" :key="test.id" v-if="test.name_test == 'Test de la Casa' || $auth.user().type == 'admin'">
				<div class="card" v-if="test.name_test == 'Test de la Casa' || $auth.user().type == 'admin'">
			        <div class="card-image">
				          <img src="http://localhost/terapias/public/images/test2.png" height="200px">
			        </div>
			        <div class="card-content">
			          <p>Test 3</p>
			        </div>
			        <div class="card-action">
			          <a style="color: #2080AE; transition: opacity 0.2s ease-in-out 0.2s;" href="#" @click.prevent="ruta('Test3')">Empezar</a>
			        </div>
			      </div>
			</div>

			<div class="col l12 s12 m12"  v-if="activo == false && $auth.user().type == 'cliente'">
				<h4 class="white-text">Por los momentos no posee ningun test activo! Espera que tu terapeuta te indique cuando debes realizarlo</h4>
			
				<br>

				<i class="fas fa-times-circle fa-7x"></i>
			</div>

			<!-- <div class="col l12 s12 m12"  v-if="activo == false && ($auth.user().type == 'admin' || $auth.user().type == 'terapeuta')">
				<h4 class="white-text">Active tests para los clientes en la seccion de Activar/Desactivar Tests</h4>
			
				<br>

				<i class="fas fa-times-circle fa-7x"></i>
			</div> -->

		</div>

<!-- 		<pre>{{$data}}</pre>
 -->		
	</div>
</template>

<script>
	
	export default{

		data(){

			return {
				user: {},
				tests: [],
				activo: false

			}
		},

		created(){

			this.Llamartests();
		},

		methods:{

			ruta(ruta){

            this.$router.push({name: ruta});

			},

			Llamartests: function(){

				let uru = 'auth/user';
	            this.axios.get(uru).then((response) => {        
	            this.user = response.data;

	            if(this.user.data.type === 'admin' || this.user.data.type === 'terapeuta'){

                			this.tests.push({
                				id : 1,
	                			name_test: 'Test de Goldberg',
	                			user_id : this.user.data.id,
                				active:1,
                			})

                	} else{

	            	let uri = `/dashboard/status/index/${this.user.data.id}`
	            	this.axios.get(uri).then((response) => {
                		this.tests = response.data;
                		this.activo = true;

                		if(this.tests.length < 1){

	                		this.activo = false;
                		}
	
                		// console.log(this.tests.length);
              			});

              			}  

	            });
			},
		}
	}
		
</script>

<style scoped>
	
	.main{

		margin-top: 10%;
	}

	span{
		
		color: black

	}

	 a:hover{

		opacity: 0.6;
	}

</style>