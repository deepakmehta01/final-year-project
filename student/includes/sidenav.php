 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<!-- <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3 mb-5" href="student-profile">
<div class="sidebar-brand-icon">
       <i class="fas fa-fw fa-"></i> <br><br>
            <h6>Student Name</h6>
    </div>
</a> -->

<!-- Divider -->
<hr class="sidebar-divider my-0 mt-4">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?php echo ($page == "dashboard" ? "active" : "")?>">
    <a class="nav-link" href="dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Payment Section 
</div>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item <?php echo ($page == "tuition-fees"? "active" : "")?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-rupee-sign"></i>
                <span>Pay Fee</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded ">
                    <h6 class="collapse-header">Pay Fee:</h6>
                    <a class="collapse-item " href="tuition-fees">Pay Tuition Fees</a>
                    <a class="collapse-item" href="exam-fees">Pay Exam Fees</a>
                  
                </div>
            </div>
        </li>



            </li>
            <li class="nav-item <?php echo ($page == "fees-history" ? "active" : "")?>">
                <a class="nav-link" href="fees-history">
                    <i class="fas fa-fw fa-history"></i>
                    <span> Fee Paid History</span></a>
            </li>         


<!-- Nav Item - Utilities Collapse Menu -->
 

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Profile
</div>

<!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo ($page == "profile" ? "active" : "")?>">
        <a class="nav-link" href="profile">
            <i class="fas fa-fw fa-user "></i>
            <span>View Profile</span>
        </a>
    </li>
    <li class="nav-item <?php echo ($page == "change-password" ? "active" : "")?>">
        <a class="nav-link" href="change-password">
            <i class="fas fa-fw fa-key "></i>
            <span>Change Password</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-fw"></i><span>Logout</span>
        </a>
    </li>
<!-- Nav Item - Charts -->


<!-- Nav Item - Tables -->



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->


 

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
                    <a class="btn btn-primary" href="includes/logout.inc.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    