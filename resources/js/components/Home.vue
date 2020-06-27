<template>

  <div class="container">
  	<div class="row">
    
      <div class="col s8"> 
      
          <main role="main" class="inner">
            <h2 class="cover-heading white-text"><span class="italico">Tu salud no es a medias, debe ser TOTAL!</span></h2>
            <p class="lead white-text">Somos la herramienta del bienestar individual y el funcionamiento eficaz de la sociedad</p>
            <p class="lead">
            </p>
          </main>
        </div>
      
        <div class="col s4 image">
            <img :src="image" width="250px" height="200px">
       
       </div>
  
  </div>
</div>
</template>

<script type="text/javascript">
  import {bus} from '../app.js'

  export default{
    
    data(){

      return{

         image: 'http://localhost/terapias/public/images/logo.png',
      }
    },

    created(){

      bus.etiquetas('TISM | TERAPIAS ONLINE')
    },

    
  }
</script>

<style scoped> 


main{

  float: left;
  margin-top: 5%;

}

img{

  margin-top: 20%;
}

.italico{
  
      font-style: italic;


}



</style>