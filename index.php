    <?php
        $db_host = "nc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com"; // 
        $db_name = "lhgjmfsupyod65vz"; //nombre de base de datos
        $db_user = "exievz51r0py9g1v"; //nombre de usuario
        $db_password = "rt3q65w92v53w29q";  //contraseña 
    
      $connection = mysqli_connect('nc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com', 'exievz51r0py9g1v', 'rt3q65w92v53w29q');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

   $sql_query = "SELECT * FROM productos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
