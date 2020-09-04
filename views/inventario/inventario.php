<?php  ?>
<html>

<head>
	<title>dofus</title>
</head>

<h1>nombre</h1>
<link rel="stylesheet" href="../../assets/node_modules/bootstrap/dist/css/bootstrap.css">
<script src="../../assets/node_modules/jquery/dist/jquery.min.js" ></script>
<script src="../../assets/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.js" ></script>
<script src="../../assets/node_modules/@fortawesome/fontawesome-free/js/all.min.js" data-auto-replace-svg="nest"></script>

<style type="text/css">
body{
 
 padding-top: 11em;
}
</style>
<body background="../../assets/images/thumb-1920-722604.jpg" >



<!-- funcionamiento dentro de la modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  boton
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
        <div class=" borde row">
          <div class="col-md-4 border border-secondary rounded-bottom text-center text-uppercase ">
            caracteristicas
            <p>
              <a class="btn btn-secondary" data-toggle="collapse" href="#hola" aria-expanded="true" aria-controls="collapseExample" style="width:150px; height:25px ;font-size:12px">
              resumen
              </a>
              <button class="btn btn-secondary text-uppercase" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width:150px; height:25px ;font-size:12px">
                detalles
              </button>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                
                <div class="col-md-12 border border-secondary  text-center text-uppercase ">
                  <div class="row">
                    <div class="col-md-5 border border-secondary  text-center text-uppercase ">
                      <img src="../../assets/images/images.jpg"  style="width:100px; height:100px ">
                    </div>
                    <div class="col-md-7  rounded-bottom text-center text-uppercase ">
                    <table style="font-size:12px">
                      <tr>
                      <td class="text-lowercase font-weight-bold">%NOMBRE%</td>
                    </tr>
                    <tr>
                      <td>NIVEL <i>%nivel</i></td>
                    </tr>
                    <tr>
                      <td class="fas fa-chess-queen text-warning">%puntos%<i>:puntos</i></td>
                    </tr>
                    </table> 
                    </div>
                  </div>gremio
                </div><br>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4"  style="padding-left:0px; padding-right:0px">
                      <tr>Experiencia:</tr><br>
                      <tr>Energia:</tr>                
                    </div>
                    <div class="col-md-8">
                      
                      <div class="progress" >
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="padding-left:0px; "></div>
                      </div>
                      <br>
                      
                      <div class="progress" >
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="padding-left:0px; "></div>
                      </div>
                  
                    </div>
                  </div>
                </div> 
                <br>
                <div class="col-md-12" style="font-size:12px; padding:0;top:9">
                  <div class="row">
                    <div class="col-md-8"  style="padding-inline-start:0;text-align: initial">
                        puntos de vida (PV)          
                    </div>
                    <div class="col-md-4 " style="text-align: end">
                          %puntos%
                    </div>
                    <div class="col-md-8" style="padding:0;text-align: initial">
                        puntos de accion (PA)          
                    </div>
                    <div class="col-md-4" style="text-align: end">
                        %puntos%
                    </div>
                    <div class="col-md-8" style="padding:0;text-align: initial">
                        puntos de movimiento (PM)          
                    </div>
                    <div class="col-md-4"style="text-align: end">
                        %puntos%
                    </div>
                  </div>
                </div>
                <br>
                 <div class="col-md-12" style="font-size:12px; padding:0;top:9">
                  <div class="row">
                    <div class="col-md-8"  style="padding-inline-start:0;text-align: initial">
                        <i class='fas fa-fire' style='font-size:12px;color:#ff0081'> </i>Vitalidad        
                    </div>
                    <div class="col-md-4 " style="text-align: end">
                          %puntos%
                    </div>
                    <div class="col-md-8" style="padding:0;text-align: initial">
                        <i class='fas fa-fire' style='font-size:12px;color:#1d1232'> </i>Sabiduria          
                    </div>
                    <div class="col-md-4" style="text-align: end">
                        %puntos%
                    </div>
                    <div class="col-md-8" style="padding:0;text-align: initial">
                        <i class='fas fa-fire' style='font-size:12px;color:#a35117'> </i>fuerza       
                    </div>
                    <div class="col-md-4"style="text-align: end">
                        %puntos%
                    </div>
                    <div class="col-md-8"  style="padding-inline-start:0;text-align: initial">
                        <i class='fas fa-fire' style='font-size:12px;color:red'> </i>inteligencia         
                    </div>
                    <div class="col-md-4 " style="text-align: end">
                          %puntos%
                    </div>
                    <div class="col-md-8" style="padding:0;text-align: initial">
                        <i class='fas fa-fire' style='font-size:12px;color:blue'> </i>suerte         
                    </div>
                    <div class="col-md-4" style="text-align: end">
                        %puntos%
                    </div>
                    <div class="col-md-8" style="padding:0;text-align: initial">
                        <i class='fas fa-fire' style='font-size:12px;color:green'> </i>agilidad         
                    </div>
                    <div class="col-md-4"style="text-align: end">
                        %puntos%
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            <div class="collapse" id="hola">
              <div class="card card-body">
                
              </div>
            </div>  
          </div>
          <div class="col-md-8 border border-secondary rounded-bottom text-center text-uppercase ">
            inventario
            <div class="container">
              <div class="  row">
                <div class="col-md-8 border border-secondary rounded-bottom text-center text-uppercase ">
                  caracteristicas
                  <br>
                  <div class="row " style="margin-left: -5px;
                    margin-right: -5">
                    <div class="col-md-2  " style="
                        padding-left: 1px;
                        padding-right: 1px">
                      <div class="col-md-12 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px"></div>
                      <div class="col-md-12 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px"></div>
                     <div class="col-md-12 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px"></div>
                      <div class="col-md-12 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;margin-top: 69px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px"></div>




                    </div>
                    <div class="col-md-2 " style="padding:0px">
                      <div class="col-md-12 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 216px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>



                    </div>
                    <div class="col-md-4 "><img src="../../assets/images/feca.png" style="
                         
                          width: 250px;
                          height: 250px;"></div>
                      <div class="col-md-2  " style="padding:0px" >
                         <div class="col-md-12 border border-secondary " style="
                          padding-left: 0px;
                          padding-right: 0px;  
                          margin-top: 216px;
                          "><img src="../../assets/images/descarga.png" style="
                         
                          width: 68.703px;
                          height: 47px">
                        </div>
                      </div>
                      <div class="col-md-2 "style="
                        padding-left: 0px;
                        padding-right: 0px;
                        ">
                        <div class="col-md-12 border border-secondary " style="
                          padding-left: 0px;
                          padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                         
                          width: 68.703px;
                          height: 47px">
                        </div>
                        <div class="col-md-12 border border-secondary " style="
                          padding-left: 0px;
                          padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                         
                          width: 68.703px;
                          height: 47px">
                        </div>
                        <div class="col-md-12 border border-secondary " style="
                          padding-left: 0px;
                          padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                         
                          width: 68.703px;
                          height: 47px">
                        </div>
                        <div class="col-md-12 border border-secondary " style="
                          padding-left: 0px;
                          padding-right: 0px;"><img src="../../assets/images/descarga.png" style="
                         
                          width: 68.703px;
                          height: 47px">
                        </div>
                        <div class="col-md-12 border border-secondary " style="
                          padding-left: 0px;
                          padding-right: 0px;  
                          margin-top: 20px;
                          "><img src="../../assets/images/descarga.png" style="
                         
                          width: 68.703px;
                          height: 47px">
                        </div>
                      </div>

                  </div>
                  <div class="col-md-12 ">
                    <div class="row">
                     <div class="col-md-2 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 20px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>
                      <div class="col-md-2 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 20px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>
                      <div class="col-md-2 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 20px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>
                      <div class="col-md-2 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 20px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>
                      <div class="col-md-2 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 20px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>
                      <div class="col-md-2 border border-secondary " style="
                        padding-left: 0px;
                        padding-right: 0px;  
                        margin-top: 20px;
                        "><img src="../../assets/images/descarga.png" style="
                       
                        width: 68.703px;
                        height: 47px">
                      </div>


                    </div>
                  </div>
                 
                </div>

                <div class="col-md-4 border border-secondary rounded-bottom text-center text-uppercase" style="padding:3px">
                  <div class="container">
                    <div class=" borde row">
                      <div class="col-md-2   " style="padding-left:0px; padding-right:0px">
                        <button  class="fas fa-retweet" style="font-size:18px "></button>
                      </div>
                      <div class="col-md-2   " style="padding-left:0px; padding-right:0px">
                        <button class="fas fa-wrench" style="font-size:18px "></button>
                      </div>
                      <div class="col-md-2   " style="padding-left:0px; padding-right:0px;margin-left: -5">
                        <button  class="fas fa-wine-glass" style="font-size:18px"></button>  
                      </div>
                      <div class="col-md-2   " style="padding-left:0px; padding-right:0px;margin-left: -5">
                        <button  class="fas fa-hat-wizard" style="font-size:18px "></button>
                      </div>
                      <div class="col-md-2   " style="padding-left:0px; padding-right:0px;margin-left: 2">
                          <button  class="fas fa-key " style="font-size:18px "></button> 
                      </div>
                      <div class="col-md-2   " style="padding-left:0px; padding-right:0px">
                        <button class="fas fa-puzzle-piece" style="font-size:18px "></button>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-secondary btn-sm text-uppercase" type="button" style="width:150px; height:25px  ">
                          categorias
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          ...
                        </div><button  class="fas fa-cog" style="font-size:100%; color:orange " type="submit" ></button>
                      </div>
                          <div class="col-md-12 border border-secondary rounded-bottom text-center text-uppercase" style="padding:0px;">
                            <div class="table-responsive-sm">
                              <table class="table; overflow-y: hidden">
                                  <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>
                                    <td><img src="../../assets/images/descarga.png" style="width:35px;height:35px;border: 1px solid; color: black;"></td>

                                  </tr>

                              </table>
                            </div>
                          
                          </div>   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>