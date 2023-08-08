<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once("./app/views/includes/metatags.php");
  ?>
  <?php
  include_once("./app/views/includes/scripts.php");
  ?>
</head>

<body class="bg-dark text-light">

  <?php
  require_once "./app/db/crud.class.php";
  $conexion = new Crud();

  if (isset($_GET['view'])) {
    switch ($_GET['view']) {
      case 'read':
        $datos = $conexion->mostrar();
        require_once './app/views/read.php';
        break;
      case 'create':
        require_once './app/views/create.php';
        break;
      case 'update':
        $datos = $conexion->buscar($_REQUEST["id"]);
        require_once './app/views/actualizar.php';
        break;
      case 'delete':
        $eliminar = $conexion->eliminar($_REQUEST['id']);
        header('location: ./index.php?view=read');
        break;
      default:
        header('location index.php?view=read');
        break;
    }
  } else {
    include_once './app/views/home.php';
  }
  ?>

  
</body>

</html>