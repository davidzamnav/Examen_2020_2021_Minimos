<?php
include 'head.php';
// si he pulsado el boton calcular
if (isset($_REQUEST['btn_calcular'])){
 //echo 'Ya has pulsado calcular';
 $nivel=$_REQUEST['cmb_actividad'];
 $peso=$_REQUEST['txt_peso'];
 $altura=$_REQUEST['txt_altura'];
 $edad=$_REQUEST['txt_edad'];
 $sexo=$_REQUEST['rb_sexo'];
 $tipo_peso=$_REQUEST['rb_tipo_peso'];
 if(($altura<151) || ($altura>200) || ($edad<21) || ($edad>70)){
    echo 'datos incorrectos';

 }
 else{//datos correctos
    
    if($tipo_peso==2)//he elegido libras por lo tanto convertimos
    {
        $peso=$peso*0.453592;
    }
    if($sexo==1)//hombre
    {
        $TMB = 66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $edad);
    }
    else//mujer
    {
        $TMB = 655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $edad);
    }
    $calorias=$TMB*$nivel;

}

}

echo'  

     <div class="postcontent">
      <h2>Calculadora Harris-Benedict   </h2>
              <form action="" method="post">              
                    <p>
                    <form>
                        <table align="center" border="2">

                            <tr>
                                <td align="right">Nivel de Actividad:</td>  
                                <td colspan=2>
                                    <select name="cmb_actividad">
                                    <option value="1.2">Sedentario</option>
                                    <option value="1.375">Actividad Ligera</option>
                                    <option value="1.55">Actividad Moderada</option>
                                    <option value="1.725">Actividad Intensa</option>
                                    <option value="1.9">Actividad Muy Intensa</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><label for="txt_peso">Peso : </label></td>
                                <td>
                                
                                    <input type="text"   id="txt_peso" name="txt_peso" size="7" /> 
                                </td>
                            </tr>
                            <tr>
                                <td ></td>
                                <td>
                                    <input type="radio"  name="rb_tipo_peso"  checked="checked" value="1"/>Kilos	
                                    <input type="radio"  name="rb_tipo_peso"  value="2"/>Libras
                                    </td>
                             </tr>  
                            <tr>
                               <td align="right"><label for="txt_altura">Altura ( en cm )</label></td>
                               <td>
                                 <input type="text"   id="txt_altura" name="txt_altura" size="7" /> cm
                               </td>
                            </tr>
                            <tr>
                            <td align="right"><label for="txt_edad">Edad ( en años )</label></td>
                            <td>
                            
                                <input type="text"   id="txt_edad" name="txt_edad" size="7" /> Años
                            </td>
                        </tr>
                            <tr>
                                <td align="right">Sexo :</td>
                                <td>
                                    <input type="radio"  name="rb_sexo"  checked="checked" value="1"/>Hombre	
                                    <input type="radio"  name="rb_sexo"  value="2"/>Mujer
                                    </td>
                             </tr>  
                            
                            
                            <tr>
                                <td colspan="2">
                                    <div align="center"><strong>
                                           
                                            <input name="btn_calcular" type="submit" id="btn_calcular" value="Calcular"/>
                                        </strong>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <label for="txt_calorias">Las calorias recomendadas diarias son :</label>
                        	
                        <input type="text" id="txt_calorias" value='.$calorias.' name="txt_calorias" size="5" /> calorias

                    



                </div>


                <div style="clear: both;"></div>
            </div>
        </div>
       
';

include 'pie.php';

