<?php
if (!isset($_SESSION['sys_usuario']) || !isset($_SESSION['sys_session'])) {
    if (isset($_REQUEST)) {
        if (array_key_exists('xajax', $_REQUEST)) {
            header('Location:'.GL_DIR_WS_HTTP_APP.'error_access.php');
        } else {
            header('Location:'.GL_DIR_WS_HTTP_APP.'login.php?logout=1');
        }
    }
    else{
         header('Location:'.GL_DIR_WS_HTTP_APP.'login.php?logout=1');
    }
}


function firewallCaracterIn($texto){

    return htmlspecialchars(firewallSlashInvertidoDuplica($texto),ENT_QUOTES);
}


function firewallSlashInvertidoDuplica($texto){
    #Contamos el total de apariciones que tiene el \ en el string $texto
    $total=substr_count($texto,'\\');
    if($total>0){

        $new_text=$texto;
        //$new_text2='';
        $new_text_fin='';
        #recorremos de acuerdo a la cantidad encontrado
        for($x=1; $x<=$total; $x++){
            
            #ubica la primera ubicacion que aparece \
            $aparcicion=strpos($new_text,'\\');
            
            #cortamos el despues de la aparicion de \ +1
            $new_text3=substr($new_text,$aparcicion+1);
            
            #cortamos desde el 0 asta la aparicion de \
            $new_text2=substr($new_text,0,$aparcicion);

            #pasamos el despues a la variable $new_text, para buscar nuevamente dentro del buble
            $new_text=substr($new_text,$aparcicion+1);
            
            #validamos si es el ultimo del buble!! para unirle lo antes separado
            if($total==$x){                
                #remplasamos con el \\ para q no se pierda la concatenacion
                $new_text_fin=$new_text_fin.$new_text2.'\\\\'.$new_text3;
            }else{
                #remplasamos con el \\ para q no se pierda la concatenacion
                $new_text_fin=$new_text_fin.$new_text2.'\\\\';
            }
        }
        $texto=$new_text_fin;
    }

    return $texto;
}



# esta funcion es para remplasar el "onclick='myfuncion(id,etc,etc)'" de los iconos de MODIFICAR Y ELIMINAR
# por jquery.click que hace lo mismo pero de una manera mas oculta sin mostrar al usuario el id del registro
# y no permite modificar el registro.
# ejemplo en http://10.0.0.22/EGRID/    boton: 11 ONCLICK A ACCIONES CON JQUERY.

function btns_accion($prefijo,$array){
    $jquery_click="";
    foreach($array as $a=> $xajax){
         $jquery_click.="$('#$prefijo$a').click(function() { $xajax }); ";
    }
    
    return $jquery_click;
}

?>