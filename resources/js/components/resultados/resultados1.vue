<template>
         <div class="row">
            <div class="col m8 s8 offset-m2 offset-s2 center">               
                <h2 class="white-text" style="float:right; margin-bottom: 40px;">Resultados del Test de locus</h2>
                <i class="fas fa-question fa-2x white-text" style="margin-top: 20px;"></i>



                <table class="striped centered z-depth-3" style="background-color: white;">
                    <thead class="grey darken-4">
                        <tr>
                            <th>ID del test</th>
                            <th>Nombre del cliente</th>
                            <th>Resultado Total</th>
                            <th>indicación</th>
                            <th>Fecha</th>
                            <th>Ver respuestas</th>
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
                            <td>  <button data-target="resultado1" class="btn modal-trigger blue" @click.prevent="buscar(test.id)">ver</button></td>

                            <td><button class="btn waves-effect red" @click.prevent="deleteTest(test.id)">Borrar resultado</button></td>
                        </tr>
                    </tbody>

                    <h3 v-if="active == false" class="white-text">No hay resultados de este test</h3>

               </table>

              <div id="resultado1" class="modal">
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

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 3</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result3}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 4</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result4}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 5</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result5}}</h6></div>
                          </div>
                        </li>                        

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 6</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result6}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta7</b></div>
 
                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result7}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 8</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result8}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 9</b></div>

                              <div class="col s12 m6"></div>
                            <div class="col s12 m3 white-text"><h6>{{results.result9}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 10</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result10}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 11</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result11}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 12</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result12}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 13</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result13}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 14</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result14}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 15</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result15}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 16</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result16}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 17</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result17}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 18</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result18}}</h6></div>
                          </div>
                        </li>  

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 19</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result19}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 20</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result20}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 21</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result21}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 22</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result22}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 23</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result23}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 24</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result24}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 25</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result25}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 26</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result26}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 27</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result27}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 28</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result29}}</h6></div>
                          </div>
                        </li>

                        <li class="collection">
                          <div class="row blue darken-2">
                            <div class="col s12 m3 white-text"><b>Respuesta 29</b></div>
                              <div class="col s12 m6"></div>

                            <div class="col s12 m3 white-text"><h6>{{results.result29}}</h6></div>
                          </div>
                        </li>
                    </ul>                  
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                  </div>
                </div>

               <!-- <pre>
                   
                   {{$data}}
               </pre>
 -->
               
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
                id: 1,
                active: '',
            }
        },

          created: function(){

            bus.etiquetas('TISM | Test de Locus')

            let uri = `/dashboard/tests/index/${this.id}`;
              this.axios.get(uri).then((response) => {
                this.tests = response.data;
                console.log(this.tests.length);

                  if (this.tests.length == 0) {
                       
                        this.active = false
                      
                      }else{

                        this.active = true
                      }
                 
                  for (var i = 0; i < this.tests.length; i++) {
              
                      this.tests[i].created_at = moment(this.tests[i].created_at,"YYYY-MM-DD HH:mm:ss").format('DD-MM-YYYY')
                  }


              });  
          },
            methods: {
                  
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