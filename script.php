<?php
include "seubanco";

                $id = $_POST['userid'] ?? '';

                $sql = "SELECT * FROM suatabela INNER JOIN outratabela ON suatabela.id_colaborador = outratabela.id_colaborador WHERE outratabela.id_colaborador = $id";
                
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
                          <!--  <td>$row[coluna_1]</td>-->
                            <td>$row[coluna_2]</td>
                            <td>$row[coluna_3]</td>
                            <td>$row[coluna_4]</td>
                            <td>$row[coluna_5]</td>
                            <td>$row[coluna_6]</td>
                            <td>$row[coluna_7]</td>
                            </tr>

                        ";
                      
                      
                    }

                }else{
                    echo"No record Found";
                }
                    echo "</table>";

                    ?>
