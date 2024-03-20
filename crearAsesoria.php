<?php
    session_start();
    include("./general/verificarSesion.php");
    include('./components/conection.php'); 

    $sql = "SELECT * FROM `materias`";
    $resultado = mysqli_query($conexion, $sql);

    
    

?>


<!DOCTYPE html>
<html lang="en">

<?php 
include('./general/cabecera.php') 
?>



<body id="page-top">

    <?php include('./general/menu-vert.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('./general/menu.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hola Estudiante</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    
                        

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-10 mb-8">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Asesorias concluidas</h6>
                                </div>
                                <div class="card shadow mb-4">
                                <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Solicita una asesoria!</h1>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Elija la materia</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <?php
                                            // Verificar si hay filas devueltas
                                            if (mysqli_num_rows($resultado) > 0) {
                                                // Recorrer cada fila del resultado
                                                while ($fila = mysqli_fetch_array($resultado)) {
                                                    // Imprimir el ID y el nombre de la materia
                                                    echo "<option>" . $fila['nombre'] . "</option>";
                                                }
                                            } else {
                                                echo "No se encontraron materias.";
                                            }
                                        ?>
                                        <option>1</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        
                    </div>
                            </div>

                            

                        </div>

                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include('./general/footer.php') ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>