<template>

<div>

  <div class="container white" style="margin-top: 5%;">
      <div class="row center blue darken-2" style="border: 2px solid black">
        <div class="col s12 m4 ">
          <h2 class="center white-text">Test #1</h2>
        </div>
      </div>

      <div class="row center">
          <div class="col s12 m3"></div>
          
          <div class="col s12 m6">
          <div class="card-panel teal">
            <span class="white-text">

            <i class="fas fa-exclamation-circle fa-5x"></i>
            <br>
             <p><i class="fas fa-hand-point-right" style="margin-right: 5%;"></i>Escoge solo una opción y pulsa el numero de la siguiente.</p>
          
              <p><i class="fas fa-hand-point-right" style="margin-right: 5%;"></i>Recuerda que luego de responder, no puedes volver atras, asi que lee detenidamente cada opción y elige la de tu preferencia.</p>
            </span>
          </div>
        </div>
        
        
        <div class="col s12 m3"></div>

      </div>


      <div class="row">
        <button class="btn blue darken-4 right" style="margin: 20px;" id="empezar" @click.prevent="iniciar">Empezar Test</button>
      </div>
    </div>

  

  <div class="container white main hide" id="prueba">
        
    <ul id="tabs-swipe-demo" class="center tabs grey darken-4">
        
        <li id="li1" class="tab col s3 fade"><a class="active" style="color:white" href="#test1">1</a></li>

        <li id="li2" class="tab col s3 fade disabled"><a id="a1" style="color:white" @click="validar('li1','li2','group1','group2')" href="#test2">2</a></li>

        <li id="li3" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li2','li3','group3','group4')" href="#test3">3</a></li>

        <li id="li4" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li3','li4','group5','group6')" href="#test4">4</a></li>

        <li id="li5" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li4','li5','group7','group8')" href="#test5">5</a></li>

        <li id="li6" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li5','li6','group9','group10')" href="#test6">6</a></li>

        <li id="li7" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li6','li7','group11','group12')" href="#test7">7</a></li>

        <li id="li8" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li7','li8','group13','group14')" href="#test8">8</a></li>

        <li id="li9" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li8','li9','group15','group16')" href="#test9">9</a></li>

        <li id="li10" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li9','li10','group17','group18')" href="#test10">10</a></li>

        <li id="li11" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li10','li11','group19','group20')" href="#test11">11</a></li>

        <li id="li12" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li11','li12','group21','group22')" href="#test12">12</a></li>

        <li id="li13" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li12','li13','group23','group24')" href="#test13">13</a></li>

        <li id="li14" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li13','li14','group25','group26')" href="#test14">14</a></li>

        <li id="li15" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li14','li15','group27','group28')" href="#test15">15</a></li>

        <li id="li16" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li15','li16','group29','group30')" href="#test16">16</a></li>

        <li id="li17" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li16','li17','group31','group32')" href="#test17">17</a></li>

        <li id="li18" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li17','li18','group33','group34')" href="#test18">18</a></li>

        <li id="li19" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li18','li19','group35','group36')" href="#test19">19</a></li>

        <li id="li20" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li19','li20','group37','group38')" href="#test20">20</a></li>

        <li id="li21" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li20','li21','group39','group40')" href="#test21">21</a></li>

        <li id="li22" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li21','li22','group41','group42')" href="#test22">22</a></li>

        <li id="li23" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li22','li23','group43','group44')" href="#test23">23</a></li>

        <li id="li24" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li23','li24','group45','group46')" href="#test24">24</a></li>

        <li id="li25" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li24','li25','group47','group48')" href="#test25">25</a></li>

        <li id="li26" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li25','li26','group49','group50')" href="#test26">26</a></li>

        <li id="li27" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li26','li27','group51','group52')" href="#test27">27</a></li>

        <li id="li28" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li27','li28','group53','group54')" href="#test28">28</a></li>

        <li id="li29" class="tab col s3 fade disabled"><a style="color:white" @click="validar('li28','li29','group55','group56')" href="#test29">29</a></li>


    </ul>
    
    <form @submit.prevent="resultado" name="form">
      
      <!-- pregunta 1 -->
      
      <div id="test1" class="col s12 indigo darken-4">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group1" id="group1" class="with-gap" type="radio" value="1" v-model.number="test.respuesta1" checked>
                <span>Los niños se hacen problemáticos porque sus padres los castigan demasiado</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group2" class="with-gap" type="radio" v-model.number="test.respuesta1" value="0"/>
                <span>El problema con la mayoría de los niños hoy día, es que sus padres son demasiado tolerantes con ellos</span>
              </label>
            </p>
          </div>
       </div>            
      </div>
    
      <!-- pregunta 2 -->

      <div id="test2" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group3" class="with-gap" type="radio" v-model.number="test.respuesta2" value="1" />
                <span>Mucha de la infelicidad en las vidas de las personas se debe a la mala suerte.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group4" class="with-gap" type="radio" v-model.number="test.respuesta2" value="0"/>
                <span>Los infortunios de las personas son el resultado de los errores que ellos cometen.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 3 -->

      <div id="test3" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group5" class="with-gap" type="radio" v-model.number="test.respuesta3" value="0" />
                <span>Una de las razones por las qué tenemos guerras es porque las personas no toman en
                      serio la actividad política que podría evitarlas.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group6" class="with-gap" type="radio" v-model.number="test.respuesta3" value="1"/>
                <span>Habrá siempre guerras sin importar cómo las personas intenten prevenirlas.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 4 -->

      <div id="test4" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group7" class="with-gap" type="radio" v-model.number="test.respuesta4" value="0"  />
                <span>A la larga las personas, cuando se lo proponen, consiguen el respeto que merecen en
                      este mundo.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group8" class="with-gap" type="radio" v-model.number="test.respuesta4" value="1"/>
                <span>Desgraciadamente, el valor de un individuo pasa desapercibido por el entorno sin
                      importar los esfuerzos que haga para ser reconocido.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 5 -->
      
      <div id="test5" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group9" class="with-gap" type="radio" v-model.number="test.respuesta5" value="0"  />
                <span>Todo estudiante que hace meritos merece el reconocimiento de sus profesores, no
                      obtenerlo no tendría sentido.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group10" class="with-gap" type="radio" v-model.number="test.respuesta5" value="1"/>
                <span>La mayoría de los estudiantes progresan no debido al reconocimiento, sino a sucesos
                      accidentales fuera de su control.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 6 -->

      <div id="test6" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group11" class="with-gap" type="radio" v-model.number="test.respuesta6" value="1" />
                <span>Si no hace los cambios apropiados y oportunos, un líder no podría ser efectivo.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group12" class="with-gap" type="radio" v-model.number="test.respuesta6" value="0"/>
                <span>Los líderes que no progresan es porque no han aprovechado sus oportunidades.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
        
        <!-- pregunta 7 -->

       <div id="test7" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group13" class="with-gap" type="radio" v-model.number="test.respuesta7" value="1"  />
                <span>No importa cuánto se esfuerce, siempre hay gente a quienes no les caerás bien.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group14" class="with-gap" type="radio" v-model.number="test.respuesta7" value="0"/>
                <span>Las personas que consiguen caerle bien a otras no entienden como pueden
                      estropearse las relaciones por si mismas.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 8 --> 

      <div id="test8" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group15" class="with-gap" type="radio" v-model.number="test.respuesta8" value="1"  />
                <span>La herencia determina la personalidad de las personas.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group16" class="with-gap" type="radio" v-model.number="test.respuesta8" value="0"/>
                <span>Son las experiencias de la vida las que determinan la manera de ser de las personas.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 9 -->

      <div id="test9" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group17" class="with-gap" type="radio" v-model.number="test.respuesta9" value="1" />
                <span>He tenido la sensación de que cuando algo va a pasar pasará.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group18" class="with-gap" type="radio" v-model.number="test.respuesta9" value="0"/>
                <span>Nunca me ha resultado confiar en el destino para tomar mis decisiones.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 10 -->

      <div id="test10" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group19" class="with-gap" type="radio" v-model.number="test.respuesta10" value="0"  />
                <span>En el caso del estudiante bien preparado nunca fallará excepto que se le haga una
                      prueba ajena a lo que ha estudiado.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group20" class="with-gap" type="radio" v-model.number="test.respuesta10" value="1"/>
                <span>Muchas veces los exámenes tienen poca relación con lo que se ha visto en clases por
                      lo tanto estudiar mucho es improductivo.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 11 -->
      
      <div id="test11" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group21" class="with-gap" type="radio" v-model.number="test.respuesta11" value="0"  />
                <span>Llegar a ser exitoso depende de un trabajo duro y disciplinado.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group22" class="with-gap" type="radio" v-model.number="test.respuesta11" value="1"/>
                <span>Conseguir un buen trabajo depende principalmente de estar en el lugar correcto en el
                      tiempo correcto.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 12 -->

      <div id="test12" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group23" class="with-gap" type="radio" v-model.number="test.respuesta12" value="0" />
                <span>El ciudadano común y corriente si se lo propone puede llegar a tener influencia en las
                      decisiones gubernamentales.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group24" class="with-gap" type="radio" v-model.number="test.respuesta12" value="1"/>
                <span>Este mundo funciona a través de pequeños grupos en el poder, y no hay mucho que un
                      ciudadano común y corriente puede hacer al respecto.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 13 -->

      <div id="test13" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group25" class="with-gap" type="radio" v-model.number="test.respuesta13" value="0"  />
                <span>Cuando hago planes, estoy casi seguro que puedo lograr que funcionen.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group26" class="with-gap" type="radio" v-model.number="test.respuesta13" value="1"/>
                <span>No siempre es bueno planear demasiado debido a que muchas cosas dependen de la
                      buena o mala fortuna.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 14 -->

      <div id="test14" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group27" class="with-gap" type="radio" v-model.number="test.respuesta14" value="1"  />
                <span>Hay ciertas personas que simplemente no son buenas personas.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group28" class="with-gap" type="radio" v-model.number="test.respuesta14" value="0"/>
                <span>Siempre hay algo bueno en todas las personas.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 15 -->

      <div id="test15" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group29" class="with-gap" type="radio" v-model.number="test.respuesta15" value="0" />
                <span>En mi caso lo que consigo no tiene nada que ver con la suerte.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group30" class="with-gap" type="radio" v-model.number="test.respuesta15" value="1"/>
                <span>Muchas veces es bueno tomar decisiones echando a volar una moneda apostando a cara o cruz.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 16 -->
      
      <div id="test16" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group31" class="with-gap" type="radio" v-model.number="test.respuesta16" value="1"  />
                <span>Llegar a ser jefe depende de estar en el lugar correcto en el tiempo correcto.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group32" class="with-gap" type="radio" v-model.number="test.respuesta16" value="0"/>
                <span>Cuando las personas consiguen hacer las cosas bien es porque han sido capacitadas y
                      entrenadas para ello.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 17 -->

      <div id="test17" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group33" class="with-gap" type="radio" v-model.number="test.respuesta17" value="1"  />
                <span>La mayoría de nosotros estamos sometidos a fuerzas políticas a nivel mundial que no
                      podemos ni entender ni controlar.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group34" class="with-gap" type="radio" v-model.number="test.respuesta17" value="0"/>
                <span>Tomando una parte activa en los asuntos políticos y sociales las personas pueden
                      influir en eventos a escala mundial.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 18 -->
      
      <div id="test18" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group35" class="with-gap" type="radio" v-model.number="test.respuesta18" value="1" />
                <span>La mayoría de las personas no comprende hasta que punto sus vidas se controlan por
                      acontecimientos accidentales.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group36" class="with-gap" type="radio" v-model.number="test.respuesta18" value="0"/>
                <span>No hay realmente ninguna cosa controlada por la suerte.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 19 -->

      <div id="test19" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group37" class="with-gap" type="radio" v-model.number="test.respuesta19" value="1"  />
                <span>Uno siempre debe estar abierto a admitir sus errores.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group38" class="with-gap" type="radio" v-model.number="test.respuesta19" value="0"/>
                <span>Normalmente es mejor cubrir nuestros errores.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 20 -->

      <div id="test20" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group39" class="with-gap" type="radio" v-model.number="test.respuesta20" value="1"  />
                <span>Es difícil saber cuándo le hemos caído bien o mal a otra persona.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group40" class="with-gap" type="radio" v-model.number="test.respuesta20" value="0"/>
                <span>La cantidad de amigos que usted tiene depende en que tan agradable es usted.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 21 -->

      <div id="test21" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group41" class="with-gap" type="radio" v-model.number="test.respuesta21" value="1" />
                <span>A largo plazo las cosas malas son compensadas por las buenas.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group42" class="with-gap" type="radio" v-model.number="test.respuesta21" value="0"/>
                <span>La mayoría de los infortunios son el resultado de falta de habilidad, o ignorancia o
                      pereza, o todos juntos</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 22 -->

      <div id="test22" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group43" class="with-gap" type="radio" v-model.number="test.respuesta22" value="0"  />
                <span>Si nos esforzamos podemos corregir la corrupción política.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group44" class="with-gap" type="radio" v-model.number="test.respuesta22" value="1"/>
                <span>Es muy difícil controlar lo que los políticos hacen en sus oficinas.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 23 -->

      <div id="test23" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group45" class="with-gap" type="radio" v-model.number="test.respuesta23" value="1"  />
                <span>A veces no puedo entender como ciertos profesores malos pudieron haber conseguido
                      los grados académicos que tienen.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group46" class="with-gap" type="radio" v-model.number="test.respuesta23" value="0"/>
                <span>Hay una conexión directa entre el esfuerzo que se pone en los estudios y los grados
                      que se pueden tener.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 24 -->
      
      <div id="test24" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group47" class="with-gap" type="radio" v-model.number="test.respuesta24" value="1" />
                <span>Un buen líder espera que las personas decidan por ellos mismos lo que deben hacer.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group48" class="with-gap" type="radio" v-model.number="test.respuesta24" value="0"/>
                <span>Un buen líder debe decir a todos lo que deben hacer.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
        
      <!-- pregunta 25 -->

      <div id="test25" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group49" class="with-gap" type="radio" v-model.number="test.respuesta25" value="1"  />
                <span>Muchas veces he sentido que tengo poca influencia sobre los acontecimientos que me
                      suceden.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group50" class="with-gap" type="radio" v-model.number="test.respuesta25" value="0"/>
                <span>Es imposible para mí creer que las oportunidades o la suerte jueguen un papel
                      importante en mi vida.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 26 -->

      <div id="test26" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group51" class="with-gap" type="radio" v-model.number="test.respuesta26" value="0"  />
                <span>Las personas están solas porque no intentan ser amistosos.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group52" class="with-gap" type="radio" v-model.number="test.respuesta26" value="1"/>
                <span>No hay mucho que hacer para agradar a las personas, si les gustas, les gustas y ya
                      está.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 27 -->  

      <div id="test27" class="col s12 green darken-2">
        <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group53" class="with-gap" type="radio" v-model.number="test.respuesta27" value="1" />
                <span>Es exagerado el énfasis que se hace en el atletismo en las escuelas.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group54" class="with-gap" type="radio" v-model.number="test.respuesta27" value="0"/>
                <span>Los deportes sobre todo en equipo son una manera excelente de construir carácter en
                      los individuos.</span>
              </label>
            </p>
          </div>
       </div>
      </div>
      
      <!-- pregunta 28 -->

        <div id="test28" class="col s12 indigo darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group55" class="with-gap" type="radio" v-model.number="test.respuesta28" value="0"  />
                <span>Todo lo que me pasa ha sido ocasionado por lo que he hecho.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group56" class="with-gap" type="radio" v-model.number="test.respuesta28" value="1"/>
                <span>A veces siento que no tengo bastante control sobre la dirección que mi vida está
                      tomando.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <!-- pregunta 29 -->

      <div id="test29" class="col s12 deep-purple darken-4">
         <div class="row">
          <div class="col s12 m6" style="border-right: 1px solid white;">
            <p>
              <label>
                <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test1.png" height="250px" width="250px">
                </center>
                <br>
                <input name="group57" class="with-gap" type="radio" v-model.number="test.respuesta29" value="1" @click.once="boton()" />
                <span>No puedo entender por qué los políticos hacen lo que hacen.</span>
              </label>
            </p>
          </div>
          <div class="col s12 m6" style="">
              <p>
              <label>
                 <center>
                  <img class="circle" src="http://localhost/terapias/public/images/tests/test2.png" height="250px" width="250px">
                 </center>
                 <br>
                <input name="group58" class="with-gap" type="radio" v-model.number="test.respuesta29" value="0" @click.once="boton()"/>
                <span>A la larga las personas somos responsables del mal gobierno a escala local como
                      nacional.</span>
              </label>
            </p>
          </div>
       </div>
      </div>

      <button type="submit" id="boton" class="btn grey darken-4 right hide">Finalizar</button>

      </form>
    
    </div>

        
    
        <!-- <pre>
         {{$data}}
         </pre> -->
    </div>

   
</template>

 <script>
    import toastr from 'toastr';
  	import {bus} from '../../app.js'
  	export default{

  		data(){

  			return {
          
          test:{

            name : '',
            user_id: '',
            result_total: '',
            indication: '',
          },

          usuario:{},

  			}
  		},

  		created(){

  			bus.etiquetas('TISM | Test 1')
        this.user();
        this.desaparecer();

  		},

  		methods:{

            iniciar(){

              let divPrueba = document.getElementById('prueba')
              let empezar = document.getElementById('empezar')

              divPrueba.classList.remove('hide')
              empezar.classList.add('hide')

            },

          user(){

            let url = 'auth/user';
            this.axios.get(url).then((response) =>{
              this.usuario = response.data;
            });
          },

          resultado(){

            //Agregar boton nuevamente
            let menu = document.getElementById("menuDerecho")
            menu.classList.remove('hide');

            //Suma de total
            this.test.result_total = this.test.respuesta2 + this.test.respuesta3 + this.test.respuesta4 + this.test.respuesta5 + this.test.respuesta6 + this.test.respuesta7 + this.test.respuesta9 + this.test.respuesta10 + this.test.respuesta11 + this.test.respuesta12 + this.test.respuesta13 + this.test.respuesta15 + this.test.respuesta16 + this.test.respuesta17 + this.test.respuesta18 + this.test.respuesta20 + this.test.respuesta21 + this.test.respuesta22 + this.test.respuesta23 + this.test.respuesta25 + this.test.respuesta26 + this.test.respuesta29 + this.test.respuesta29; 

            // Comprobacion  de resultado

              if(this.test.result_total >= 15 ){

                this.test.indication = 'Locus externo'
              }else if(this.test.result_total < 15 && this.test.result_total >= 11){

                this.test.indication = 'Locus intermedio'

              }else{

                this.test.indication = 'Locus interno'

              }

              //Asignación de nombre de test
              this.test.name = 'Test de Locus'

              let url = '/dashboard/test/create'
              this.test.user_id = this.usuario.data.id

              //Post
              this.axios.post(url,this.test).then(response =>{

                 let url = 'auth/user';
                  this.axios.get(url).then((response) =>{
                    this.usuario = response.data;
                    let urx = `/dashboard/status/delete/${this.usuario.data.id}/1`
                    this.axios.delete(urx).then(response =>{


                    toastr.success("Test finalizado correctamente, ahora espera las indicaciones de tu    terapeuta");
                    this.$router.push({name: 'dashboard'});

                    });


                     // location.reload();

                  });


              }).catch( error =>{

                toastr.error("Error en envio del test, intentalo de nuevo");

              })

          },

          desaparecer(){

            let menu = document.getElementById("menuDerecho")

            menu.classList.add("hide")

          }, 

          boton(){

             let boton = document.getElementById('boton')

             boton.classList.remove('hide')
          },

          validar(id1,id2,grupo,grupo2){

            var li1 = document.getElementById(`${id1}`)
            var li2 = document.getElementById(`${id2}`)           
            var radio = document.getElementsByName(grupo);
            var radio1 = document.getElementsByName(grupo2);          
            var eleccion = false
                       
                if (radio[0].checked || radio1[0].checked) {

                  eleccion = true;
                  li1.classList.add('disabled')
                  li2.classList.remove('disabled')
                  li1.classList.add("hide")

                }

                if (!eleccion) {

                  toastr.error("Debe seleccionar una opción para poder continuar");

                }

                return true;
            }
        
  		}
  	}


</script>

  <style scoped>
  	
    .fade-enter-active, .fade-leave-active {
    transition-property: opacity;
    transition-duration: .45s;
  }
   
  .fade-enter-active {
    transition-delay: .25s;
  }
   
  .fade-enter, .fade-leave-active {
     opacity: 0
  }
  	.main{

  		margin-top: 5%;
  	}

    span{

      color: white;
    }

    .hide{

      display: none;
    }

    ul{

      height: 70px
    }
    
    .information{

      border: 2px solid blue; 
      margin-bottom: 10%;
      padding: 5px;
      border-radius: 10px;
    }
    
    .information p{

      text-align: justify;
    }
    

  </style>