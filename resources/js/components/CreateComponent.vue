<template>
  <div>
    <h1>Create A Document</h1>
    <form @submit.prevent="addDocument">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Document Title:</label>
            <input type="text" class="form-control" v-model="document.name">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Post Body:</label>
              <textarea class="form-control" v-model="document.type" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Create</button>
        </div>
    </form>
  </div>
</template>


<script>
   export default {
        data(){
        return {
          document:{}
          
        }
    },
    methods: {

    	
      addDocument(){

        let url = 'terapias/public/api/document/create' ;
	   	this.axios.post(url, this.document).then((response) => {
	       this.$router.push({name: 'home'});
	    });
      }
    }
  }
</script>