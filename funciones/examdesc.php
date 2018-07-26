<?php
                            require("conexion.php");
                            $sql=("SELECT * FROM examenes ORDER BY idExam DESC");
                            $query=mysqli_query($con,$sql);
                            if ($query == FALSE) {
                    echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta";
                } else {
                    $Rows = mysqli_num_rows($query);
                    if($Rows>16){                                         
                    for ($i=0; $i<17; $i++) {
                        $Auto = mysqli_fetch_array($query);
                        if ($i == 0) {
                            echo '<li class="s s_v">';
                        } else {
                            echo '<li class="s">';
                        }
                        echo '</li>';//ITEM

                    }//FOR
                    echo '</li>';
                }else{
                    for ($i=0; $i<$Rows; $i++) {
                        $Auto = mysqli_fetch_array($query);
                        if ($i == 0) {
                            echo '<li class="s s_v">';
                        } else {
                            echo '<li class="s">';
                        }
                        echo '</li>';//ITEM

                    }//FOR
                    echo '</li>';
                }
                }//ELSE                        
                            require("conexion.php");
                            $sql=("SELECT * FROM examenes ORDER BY idExam DESC");
                            $query=mysqli_query($con,$sql);
                            if ($query == FALSE) {
                    echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta";
                } else {
                    $Rows = mysqli_num_rows($query);
                                                              
                    for ($i=0; $i<$Rows; $i++) {
                        $Auto = mysqli_fetch_array($query);
                        if ($i == 0) {
                            echo '<div class="s_element s_visible">';
                        } else {
                            echo '<div class="s_element">';
                        }
                        echo '<img style="width: 100%;" src="comunicados/' . $Auto[8] . '"/>';
                        echo '</div>';//ITEM

                    }
                    
                }

                            ?>