<template>
	<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
          	  <h4>Mensajes</h4>


				<ul class="collapsible">
                <li v-for="(message,indice) in messages" :key="message.id" v-if="message.user_id_received == $auth.user().id">
                  <div class="collapsible-header"><span>De: {{message.name}}</span><span>Asunto: {{message.title}}</span><span v-if="message.status == 0" class="badge green white-text">Sin leer</span><span v-else class="badge red white-text">Leido</span>   <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Abrir</a>
					</div>
					<!--                   <div class="collapsible-body"><span>{{message.message}}</span></div>
					 -->
					 <div id="modal1" class="modal">
					    <div class="modal-content">
					      <p>{{message.message}}</p>
					 	</div>
					 	<div class="modal-footer">
					      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
					    </div>
					 </div>
                 </li>
             </ul>

<!--              <pre>
             	
             {{$data}}

             </pre>
 -->
          </div>
      </div>
  </div>
	

</template>

<script>
	
	export default{

		data(){

			return{

				 messages: [

        			],
			}
		},

		    created: function() {

		      this.llamar();

		    },

		    methods: {

    	        llamar(){
          

			        //Callback para traer todos los mensajes
			        let url = '/dashboard/mensajes';
			        this.axios.get(url).then((response) =>{

			            this.messages = response.data.data;
			            console.log(response);
			        }).catch((error)=>{

			            console.log(error);
			        });

			      },

			        estado: function(indice){

          			  let estado = this.messages[indice].status = 0;

        			},


		    }



	}
</script>

<style>
	
	span{

  margin-right: 60px;
}

</style>