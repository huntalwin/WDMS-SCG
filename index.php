<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/toastify/toastify.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>




</head>

<!-- Start of side bar  -->

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/scg.png" alt="Logo" srcset="" style="width:220px;height:120px;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Start of Menu Sidebar -->
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa fa-database"></i>
                                <span>Database</span>
                            </a>
                            <ul class="submenu active ">
                                <li class="submenu-item active">
                                    <a href="factory-database.html">Factories</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="waste-request-database.html">Waste Requests</a>
                                </li>
                                <!-- <li class="submenu-item active">
                                    <a href="qoute-database.html">Qoutes</a>
                                </li> -->
                                <li class="submenu-item active">
                                    <a href="business-transaction.html">Business Transactions</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa fa-file"></i>
                                <span>Documents</span>
                            </a>
                            <ul class="submenu active ">
                                <li class="submenu-item active">
                                    <a href="waste-examination-request-form.html">Waste Examination Request</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="qoute-form.html">Qoutes</a>
                                </li>
                                <!-- <li class="submenu-item active">
                                    <a href="government-permission.html">D01 Form</a>
                                </li> -->
                                <!-- <li class="submenu-item ">
                                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-toastify.html">Toastify</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-rating.html">Rating</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider.html">Divider</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa fa-book"></i>
                                <span>Report</span>
                            </a>
                            <ul class="submenu active ">
                                <li class="submenu-item active">
                                    <a href="generate-report.html">Generate Report</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>

            <div id="main">

                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Dashboard</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <!-- <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div> -->
                                            <!-- Add Completed here -->
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Completed</h6>
                                                <h6 class="font-extrabold mb-0">40</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <!-- Add In Progress here -->
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">In Progress</h6>
                                                <h6 class="font-extrabold mb-0">30</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-3">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <!-- Add Total here -->
                                                <h6 class="text-muted font-semibold">Total</h6>
                                                <h6 class="font-extrabold mb-0">70</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <section class="section">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover table-lg" id="business-transaction-table">
                                    <thead>
                                        <tr>
                                            <!-- May need to add more columns as I proceed further  -->
                                            <th>Transaction ID</th>
                                            <th>Status</th>
                                            <th>Factory ID</th>
                                            <th>Factory Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
							        require('connect.php');
							        $displayQuery=mysqli_query($conn,"select * from Transaction");
                                    echo 5;
                                    while($data = mysqli_fetch_array($displayQuery)){
                                        echo 5;
                                        ?> 
                                        <tr>
                                            <td><?php echo $data['TransID']; ?></td>
                                            <td><?php echo $data['TRANSTATUS']; ?></td>
                                            <td><?php echo $data['FACTORYID']; ?></td>
                                            <td><?php echo $data['FACTORYNAME']; ?></td>
                                            <td><?php echo $data['STARTDATE']; ?></td>
                                            <td><?php echo $data['ENDDATE']; ?></td>
                                            <td><?php echo $data['PRICE']; ?></td>

                                        </tr>;
                                        <?php	
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>
                </div>



                <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js "></script>
                <script src="assets/js/bootstrap.bundle.min.js "></script>

                <script src="assets/vendors/apexcharts/apexcharts.js "></script>
                <script src="assets/js/pages/dashboard.js "></script>

                <script src="assets/js/main.js "></script>

                <script src="assets/vendors/simple-datatables/simple-datatables.js "></script>
                <script>
                    // Simple Datatable
                    let table1 = document.querySelector('#business-transaction-table');
                    let dataTable = new simpleDatatables.DataTable(table1);
                </script>


                <script src="assets/js/main.js"></script>
                <script src="jquery.datetimepicker.js"></script>
                <script type="text/javascript">
                    $(function() {
                        // $('#datepicker1').datepicker();
                        $('#datepicker').datepicker({
                            format: 'dd/mm/yyyy'
                        });
                    });
                </script>

                <!-- <script src="assets/vendors/simple-datatables/sort-database.js"></script> -->


</body>
<!-- End of side bar  -->


</html>

</html>

</html>