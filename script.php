<?php
include "conexao.php";

                $id = $_POST['userid'] ?? '';

                $sql = "SELECT * FROM colaboradores INNER JOIN dispositivos ON colaboradores.id_colaborador = dispositivos.id_colaborador WHERE dispositivos.id_colaborador = $id";
                
                $query = mysqli_query($conexao, $sql);
                echo "
                    <table id='sistemas' class='table table-hover table-bordered' style='width:100%'>
                    <tr>
                   <!-- <th scope='col'> Nome </th>-->
                    <th scope='col'> Dispositivo </th>
                    <th scope='col'>  Cadeira </th>
                    <th scope='col'> Celular </th>
                    <th scope='col'> Mochila </th>
                    <th scope='col'> Fone </th>
                    <th scope='col'> Patrimonio </th>
                    </tr>
                ";
                if($query){
                    while ($row = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                          <!--  <td>$row[nome]</td>-->
                            <td>$row[nome_dispositivo]</td>
                            <td>$row[cadeira]</td>
                            <td>$row[celular]</td>
                            <td>$row[mochila]</td>
                            <td>$row[fone]</td>
                            <td>$row[patrimonio]</td>
                            </tr>

                        ";
                      
                      
                    }

                }else{
                    echo"No record Found";
                }
                    echo "</table>";

                    ?>