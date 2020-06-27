<template>
         <div class="row">
            <div class="col m8 s8 offset-m2 offset-s2 center">               
                <h2 class="white-text" style="float:right; margin-bottom: 40px;">Resultados del Test de la Casa</h2>
                <i class="fas fa-question fa-2x white-text" style="margin-top: 20px;"></i>



                <table class="striped centered z-depth-3" style="background-color: white;">
                    <thead class="grey darken-4">
                        <tr>
                            <th>ID </th>
                            <th>Nombre</th>
                            <th>Resultado Total</th>
                            <th>indicación</th>
                            <th>Fecha</th>
                            <th>Respuestas</th>
                            <th>Dibujo</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="test in tests" :key="test.id">
                            <td>{{ test.id }}</td>
                            <td>{{ test.name }}</td>
                            <td>{{ test.result_total }}</td>
                            <td>{{ test.indication }}</td>
                            <td>{{ test.created_at}}</td>
                            <td>  <button data-target="resultado3" class="btn modal-trigger blue" @click.prevent="buscar(test.id)">ver</button></td>

                            <td><router-link  :to="{ name: 'Dibujo',params:{id: test.user_id}}"><a style="margin-top: 25%"  class="btn waves-effect green">Ver dibujo</a></router-link></td>

                            <td><button class="btn waves-effect red" @click.prevent="deleteTest(test.id)">Borrar resultado</button>
                            <button data-target="corregir" class="btn modal-trigger amber accent-4" v-if="test.result_total == 'Por revisar' && test.indication == 'Por revisar'"@click.prevent="buscar(test.id)">Corregir</button></td>
                        </tr>
                    </tbody>

                    <h3 v-if="active == false" class="white-text">No hay resultados de este test</h3>
               </table>

              <div id="resultado3" class="modal">
                  <div class="modal-content">
                    <h4>Respuestas</h4>
                      <ul class="collection">

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 1</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result1}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 2</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result2}}</h6></div>
                          </div>
                        </li>
                    </ul>                  
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                  </div>
                </div>

                 <div id="corregir" class="modal">
                  <div class="modal-content">
                  <div class="row blue" style="">
                    <h4 class="white-text center-align">Resultados del test</h4>
                  </div>
                          
                        <form @submit.prevent="updateTest">
                          <div class="row">
                            <div class="col s12 m4"></div>

                              <div class="col s12 m4">

                                <textarea id="textarea1" class="materialize-textarea center-align" v-model="results.result_total" required></textarea>
                                <label for="textarea1">Resultado total</label>
                              </div>

                            <div class="col s12 m6 white-text">
                              </div>
                            </div>

                          <div class="row">
                            <div class="col s12 m4"></div>

                              <div class="col s12 m4">
                                <textarea id="textarea2" class="materialize-textarea center-align" v-model="results.indication" required></textarea>
                                <label for="textarea2">Indicaciones</label>

                              </div>

                              <div class="col s12 m4">
                              </div>
                          </div>

                          <div class="row">
                                <button type="submit" class="right btn grey darken-4" style="margin-top: -20px;">Corregir
                                </button>                          
                          </div>
                      </form>
                          
                    </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="boton">Cerrar</a>
                  </div>
                </div>
            </div>
           </div>           
</template>

<script>
import toastr from 'toastr';
import moment from 'moment';
import {bus} from '../../app.js'


    export default {
        data(){
            return{
                tests: [],
                results: {},
                active: '',
            }
        },

          created: function(){

            bus.etiquetas('TISM | Test de la Casa')
            this.buscarTests();
            
          },
            methods: {

                  buscarTests(){

                    let uri = `/dashboard/tests/3`;
                    this.axios.get(uri).then((response) => {
                      this.tests = response.data;
                      console.log(this.tests.length);

                      if (this.tests.length == 0) {
                        this.active = false
                      }else{

                        this.active = true
                      }

                        for (var i = 0; i <= this.tests.length; i++) {
                    
                            this.tests[i].created_at = moment(this.tests[i].created_at,"YYYY-MM-DD HH:mm:ss").format('DD-MM-YYYY')

                      }



                    });  

                  },
                  
                  deleteTest(id)
                      {
                        let uri = `/dashboard/test/delete/${id}`;
                        this.axios.delete(uri).then(response => {
                            toastr.error("Test eliminado");
                          this.tests.splice(this.tests.indexOf(id), 1);
                        });
                    },
        
                  buscar(id){

                    let uri = `/dashboard/tests/buscar/${id}`;
                      this.axios.get(uri).then((response) => {
                        this.results = response.data;                      

                      });  

                  },

                  updateTest(){

                    let uri = `/dashboard/test/update/${this.results.id}`;
                      this.axios.post(uri, this.results).then((response) => {
                      toastr.success("Test corregido correctamente");
                        this.buscarTests();

                        
                        });

                      let boton = document.getElementById('boton');
                      boton.click();
                        

                  }

          }
    }
</script>

<style scoped> 
    
    table{

       font-size: 14px;
       margin-bottom: 5%;
    }

    button{

        margin-top: 25px;
    }

    span{

        font-size: 15px;
    }

    th{
        font-size: 15px;
        color: white;

    }


</style>