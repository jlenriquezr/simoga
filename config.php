<?php
/* * *************************************************************************
 * File          : config.php
 * Last Modified : 20-01-2012
 * Author        : Division de Sistema - ULADECH
 *
 * Constantes de configuracion de carpetas del proyecto,
 * con esto se evita tener que emplear rutas relativas
 * en los includes/requires
 *
 * ***************************************************************************/
define("GL_APP", "Erp University");
define("GL_COMPANY", "UCSS");
define("GL_COMPANY_PORTAL", "http://www.uac.edu.pe");
define("GL_AUTHOR", "ULADECH CATOLICA");
define("GL_EMAIL", "soporte@erpuniversity.com");

/*define('GL_HTTP_SERVER', 'http://localhost');
define('GL_DIR_WS_HTTP_APP', GL_HTTP_SERVER . '/uac/');
define('GL_DIR_FS_APP', '/var/www/html/erp/uac/');
define('GL_DIR_WS_CONN', '/var/www/html/erp/uac/class/');
define('GL_DIR_PHOTOS', 'photos/');
define('GL_DIR_PHOTOS_TRAB', 'photos/trabajadores/');
define('GL_DIR_PHOTOS_ALUM', 'photos/alumnos/');
define('GL_NUM_REG_X_PAG', 10);*/

/*define('GL_HTTP_SERVER', 'http://localhost/');
define('GL_DIR_WS_HTTP_APP', GL_HTTP_SERVER . 'uac/');
define('GL_DIR_FS_APP', 'C:/xampp/htdocs/uac/');
define('GL_DIR_WS_CONN', 'C:/xampp/htdocs/uac/class/');

define('GL_DIR_PHOTOS', 'photos/');
define('GL_DIR_PHOTOS_TRAB', 'photos/trabajadores/');
define('GL_DIR_PHOTOS_ALUM', 'photos/alumnos/');
define('GL_NUM_REG_X_PAG', 10);*/

define('GL_HTTP_SERVER', 'http://'.$_SERVER['HTTP_HOST']);
//define('GL_HTTP_SERVER', (isset($_SERVER["HTTPS"]) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST']);
//define('GL_HTTP_SERVER', 'https://'.$_SERVER['HTTP_HOST']);

define('GL_DIR_WS_HTTP_APP', GL_HTTP_SERVER . '/uac/erpuniversity/');
define('GL_DIR_WS_HTTP_APP_P', GL_HTTP_SERVER . '/pindex.php');
define('GL_DIR_FS_APP', '/var/www/uac/erpuniversity/');
define('GL_DIR_WS_CONN', '/var/www/uac/erpuniversity/class/');
define('GL_DIR_PHOTOS', 'photos/');
define('GL_DIR_PHOTOS_TRAB', 'photos/trabajadores/');
define('GL_DIR_PHOTOS_ALUM', 'photos/alumnos/');
define('GL_NUM_REG_X_PAG', 10); 
define('GL_NUM_MAX_PASS', 12);
define('GL_KEY_ENCRYPT', 'wuicho');
define('GL_KEY_ENCRYPT_REPORTES', 'wuicho');
define('GL_DIR_BIB_ARCHIVOS', '../../archivos/bib/archivos/');
define('GL_WS_MODO', "D"); //D=Developer, P=Produccion

if (GL_WS_MODO == 'P') {
    # PRODUCCION
    define('GL_WS_URL', "http://192.168.50.220:8080/ws_face_uac/ws_face?wsdl");
    define('GL_DOWNLOAD_RIDE', "http://192.168.50.220/face/face.php");
} else {
    define('GL_WS_URL', "http://pruebas.erp.uac.edu.pe:8080/ws_face_uac/ws_face?wsdl");
    define('GL_DOWNLOAD_RIDE', "http://192.168.10.230/docelecetronicos.php");
}


?>
