<template>

<div class="container">
        <div class="row">
          <div class="col m8 s8 offset-m2 offset-s2 ">
              <div class="card-panel white2" style="margin-top: 40px;">
            	<form @submit="formSubmit" enctype="multipart/form-data">
                    <label style="margin-right: 15px">Imagen:</label>

                    <input type="file" class="validate" v-on:change="onImageChange">

                    <button style="margin-top: 10%" class="btn grey darken-4">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
	
</template>

<script>
import toastr from 'toastr';

	export default {

        data(){
            return {  
              user: {},
              name: '',
              image: '',
              success: '',
            };
        },
       methods: {
            onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
 
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
 
                let formData = new FormData();
                formData.append('image', this.image);
 				
 				 let uru = 'auth/user';
	            this.axios.get(uru).then((response) => {
	            
	            this.user = response.data;
                axios.post(`/dashboard/update/${this.$route.params.id}/${this.user.data.id}`, formData, config)
                .then(function (response) {
                    currentObj.success = response.data.success;
                    toastr.success("Imagen actualizada correctamente");

                })
                .catch(function (error) {
                    currentObj.output = error;
                    toastr.error("Problemas al actualizar imagen");
                    location.reload();

                });

                    this.$router.push({name: 'dashboard'});


               });
            }
        }
    }
</script>

<style>
	
</style>