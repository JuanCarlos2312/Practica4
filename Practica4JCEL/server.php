<?phps
require_once "lib/nusoap.php";
function getFrutas($datos) {
    if($datos == "Frutas") {
        return join(",", array(
            " Manzana",
            "Melón",
            "Toronja",
            "Naranja",
            "Uva"));
        }
        else{
            return "No existen el registro de ninguna fruta";
    }
}
$server = new soap_server();
$server->register("getFrutas");
if( !isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA=file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>