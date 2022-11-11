<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Σύστημα Διαχείρισης Πακετών</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!--<i class="fas fa-laugh-wink"></i>-->
                </div>
				<div class="sidebar-brand-text mx-3"><!--SB Admin <sup>2</sup>-->
					<img src="img/artgraphic.jpg" width="225px" height="100px" alt="Italian Trulli">
				</div>
                <!--<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>-->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Παραγγελίες</span></a>
            </li>
												            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="addDesignBox.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Προσθήκη σχεδιαστικού κουτιού</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="previewDesignBox.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Προβολή όλων των κουτιών</span></a>
            </li>
			

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Χρήστες</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="enrolledUsers.php">Εγεγγραμένοι Χρήστες</a>
                        <a class="collapse-item" href="addNewUser.php">Προσθήκη Χρηστών </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Έξοδος</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Αποσύνδεση</h6>
                        <a class="collapse-item" href="logout.php">Έξοδος</a>
                        <!--<a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>-->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <!--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>-->
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Λίγα λόγια εμάς</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <!--<li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
					<!--
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
					-->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">1+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">November 03, 2022</div>
                                        <span class="font-weight-bold">Περιηγηθείτε στο Σύστημα Διαχείρισης Πακέτων!</span>
                                    </div>
                                </a>
                                <!--<a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
								-->
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">1</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Κανένα μήνυμα για εσάς.</div>
                                        <div class="small text-gray-500">Περιηγηθείτε στο Σύστημα Διαχείρισης Πακέτων.</div>
                                    </div>
                                </a>
                                <!--<a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
								-->
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="https://www.facebook.com/www.artgraphic.gr/">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Facebook
                                </a>
                                <a class="dropdown-item" href="https://www.instagram.com/artgraphicsince1989/">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Instagram
                                </a>
                                <a class="dropdown-item" href="https://www.youtube.com/channel/UCs5_4GyTr5OP5KwL-2w9F1g">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    YouTube
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Λίγα Λόγια για εμάς. </h1>
					
                    <p class="mb-4">Η εταιρεία Γ. Σεριστατιδης Γ. Λαμπρόπουλος Ο.Ε. εδρεύει στη περιφέρεια της Δυτικής
					Μακεδονίας και συγκεκριμένα στο 5ο χλ της Ε.Ο. Νεάπολη - Κοζάνης. 30 χρόνια τώρα κύρια απασχόληση 
					μας είναι οι τυπογραφικές εργασίες και η κυτιοποιία. Το ειδικευμένο προσωπικό σε συνεργασία με τον 
					άρτια εξοπλισμένο χώρο καθιστούν την πιο εκσυγχρονισμένη εκτυπωτική μονάδα στη Δυτική Μακεδονία και
					συγχρόνως μια της Bορείου Ελλάδος. Κύριος στόχος μας είναι η συνεχής κάλυψη των αναγκών των πελατων
					μας λαμβάνοντας ως παράγοντες τη γρήγορη εξυπηρέτηση, τη ποιότητα εκτύπωσης και τις ανταγωνιστικές 
					τιμές.<!--Chart.js is a third party plugin that is used to generate the charts in this theme.
                        The charts below have been customized - for further customization options, please visit the <a
                            target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                            documentation</a>.--></p>
							<ul style="list-style-type:square;">
							<li>Ανταγωνιστικές Τιμές</li>
							<li>Ποιότητα Εκτύπωσης</li>
							<li>Εξυπηρέτηση</li>
							</ul>
							Υπηρεσίες Εκτύπωσης:
							<ul style="list-style-type:square;">
							<li>Τυπογραφικές Εργασίες</li>
							<li>Συσκευασία</li>
							<li>Διαφημιστικά έντυπα</li>
							<li>Πολυσέλιδα φυλλάδια</li>
							<li>Φυλλάδια σούπερ μάρκετ</li>
							</ul>
							Συσκευασίες
							<ul style="list-style-type:square;">
							<li>Κουτιά συσκευασίας</li>
							<li>Ετικέτες</li>
							<li>Χαρτοσακούλες</li>
							</ul>
							<p class="mb-4">Ιστορικό<!--Chart.js is a third party plugin that is used to generate the charts in this theme.
                        The charts below have been customized - for further customization options, please visit the <a
                            target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                            documentation</a>.--></p>
							2020
							<ul style="list-style-type:square;">
							<li>Εκσυγχρόνιση εξοπλισμού τμήματος προεκτύπωσης με εγκατάσταση νέου μηχανήματος παραγωγής τσίγγων Heidelberg suprasetter 70x100 και νέων προγραμμάτων μοντάζ</li>
							<li>Εκσυχρονηση εξοπλισμου τμηματος μετεεκτυπωσης με εγκατασταση δευτερου μηχανηματος βιβλιοδεσιας τυπου τριτομιας muller martini</li>
							<li>Εκσυχρονηση εξοπλισμου μετεκτυπωσης με εγκατασταση νεου μηχανηματος συρταροκολησης τυπου lock bottom για βιομηχανικη συσκευασια</li>
							</ul>
							2019
							<ul style="list-style-type:square;">
							<li>Εκσυγχρόνιση εξοπλισμού τμήματος μετεκτύπωσης με εγκατάσταση νέου μηχανήματος πλαστικοποίησης komfi sagitta 70x100</li>
							</ul>
							2018
							<ul style="list-style-type:square;">
							<li>Επέκταση ιδιόκτητων εγκαταστάσεων - προσθήκη αποθήκης +500 τ.μ. με τις συνολικές νέες εγκαταστάσεις να είναι πάνω από 1000 τ.μ.</li>
							</ul>
							2011
							<ul style="list-style-type:square;">
							<li>Εκσυγχρόνιση εξοπλισμού εκτυπωτικού τμήματος με εγκατάσταση νέου εκτυπωτικού μηχανήματος Heidelberg xl 75 - 4 χρωμμάτων + βερνίκι νερού</li>
							<li>Εκσυγχρόνιση εξοπλισμού μετεκτυπωτικού τμήματος με εγκατάσταση νέου κοπτικού μηχανήματος Polar 115 με γωνιάστρα και ανεβατόρι.</li>
							</ul>
							2006
							<ul style="list-style-type:square;">
							<li>Εκσυγχρονισμός εξοπλισμού τμήματος μετεκτύπωσης με εγκατάσταση καινούριας διπλωτικής μηχανής Heidleberg stahlfolder 70x100</li>
							<li>Εκσυγχρονισμός εξοπλισμού τμήματος προεκτύπωσης με εγκατάσταση καινούριου μηχανήματος παράγωγης τσίγγων (ctp) Heidelberg prosetter</li>
							</ul>
							2004
							<ul style="list-style-type:square;">
							<li>Εκσυγχρόνιση εξοπλισμού τμήματος εκτύπωσης με εγκατάσταση καινούριου εκτυπωτικού μηχανήματος Heidelberg printmaster 74 - 4 χρωμμάτων</li>
							</ul>
							2003
							<ul style="list-style-type:square;">
							<li>Εκσυγχρονισμός εξοπλισμού τμήματος μετεκτύπωσης με εγκατάσταση μεταχειρισμένου μηχανήματος βιβλιοδεσίας τύπου τριτομίας (brehmer)</li>
							</ul>
							2002
							<ul style="list-style-type:square;">
							<li>Εκσυγχρονισμός εξοπλισμού τμήματος εκτύπωσης με εγκατάσταση μεταχειρισμένου μηχανήματος εκτύπωσης Heidelberg speedmaster 102 -2</li>
							</ul>
							2001
							<ul style="list-style-type:square;">
							<li>Μετεγκατάσταση της έδρας της επιχείρησης σε ιδιόκτητο χώρο συνολικών εγκαταστάσεων 750 τ.μ. (200 γραφεία + 350 χώρος παραγωγής + 200 αποθήκες)</li>
							</ul>
							1989
							<ul style="list-style-type:square;">
							<li>Ίδρυση επιχείρησης</li>
							</ul>
							Όραμα
							<ul style="list-style-type:square;">
							Όραμα της επιχείρησης μας είναι να χτίσουμε  
							με τον καθένα πελάτη μας ξεχωριστά μια πρότυπη 
							συνεργατική εμπιστοσύνη με στόχο την ικανοποίηση 
							των μερών που αποτελούν την κάθε συνεργασία. 
							</ul>
							Στόχος
							<ul style="list-style-type:square;">
							τόχος μας είναι η άμεση απόκριση σε κάθε
							αίτημα σας, η διευκόλυνση των διαδικασιών
							των παραγγελιών με εχεμύθεια σε όλο το φάσμα
							της συνεργασίας. Συνεχής στόχος μας είναι να 
							προσφέρουμε στον πελάτη μας τη μέγιστη προσδοκώμενη 
							αξία, με το ελάχιστο δυνατό κόστος.
							</ul>
							
							

                    <!-- Content Row -->
					
					

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>