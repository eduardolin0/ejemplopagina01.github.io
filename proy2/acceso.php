<?php 

        include("getconex.php");

        $txtUsr = $_POST['txtUsr'];
        $txtPwd = $_POST['txtPwd'];
        $txtLogin = $_POST['txtLogin'];

        $tsql = "SELECT * FROM tbusr WHERE usr = '$txtUsr' AND pwd = '$txtPwd'";
        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $result = sqlsrv_query($conectar, $tsql, $params, $options);
        $nresult = sqlsrv_num_rows($result);
        $mostrar = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

        /* Execute the query. */     

        if ( $result ){    
        // Redirect browser 
            if($nresult > 0 && $txtLogin == 1){
                header("Location: acceso_ok.php");
            } else {
                    echo '<script type="text/javascript">';
    echo ' alert("Nombre de usuario y/o contraseña incorrectos...")';
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'index.php';\",1);</script>";
            }

        }     
        else{    
             $something = 'Conexion fallida<br>';
             die( print_r( sqlsrv_errors(), true));    
             echo "$something";
        } 

?>
