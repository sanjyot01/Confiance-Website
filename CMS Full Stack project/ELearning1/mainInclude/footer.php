 <!-- Start Footer -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap">
 <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2021 || Designed By Confiance Web-Solutions <small class="float-sm-right"> <?php   
          if (isset($_SESSION['is_admin_login'])){
            echo '<a href="admin/adminDashboard.php"> Admin Dashboard</a> <a href="logout.php">Logout</a>';
          }else {
            echo '<a style="color: #212529;" href="#login" data-toggle="modal" data-target="#adminLoginModalCenter"> Admin Login</a>';
          }
          ?>
        </small>                                                                                          
  </small> 
  
 </footer> <!-- End Footer -->

    <!-- Start Student Registration Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form">
          <div class="modal-header pl-0" style="padding-bottom: 5em; border:none">
            <h2 class="modal-title w-100 text-center position-absolute" id="stuRegModalCenterTitle">Sign up</h2>
            <p class="w-100 text-center position-absolute" style="padding: 3em; font-weight:300">We teach you the right skills <br />to be prepared for tomorrow.</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearAllStuReg()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body col-md-8 mx-auto">
            <!--Start Form Registration-->
            <?php include('studentRegistration.php'); ?>
            <!-- End Form Registration -->
          </div>
          <div class="modal-footer col-md-8 mx-auto">
              <div class="mx-auto"> <span id="successMsg"></span></div>
            <!--<button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAllStuReg()">Close</button>-->
          </div>
        </div>
      </div>
    </div> <!-- End Student Registration Modal -->


    <!-- Start Student Login Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form">
          <div class="modal-header pl-0 pb-4" style="border:none">
            <h2 class="modal-title w-100 text-center position-absolute" id="stuLoginModalCenterTitle">Login</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="clearStuLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body col-md-8 mx-auto">
            <form role="form" id="stuLoginForm">
              <div class="form-group">
                <label for="stuLogEmail" class="pl-2 font-weight-bold">EMAIL</label><input type="email"
                    class="form-control" placeholder="name@email.com" name="stuLogEmail" id="stuLogEmail">
                </div>
                <div class="form-group">
                  <label for="stuLogPass" class="pl-2 font-weight-bold">PASSWORD</label><input type="password" class="form-control" placeholder="Enter your password" name="stuLogPass" id="stuLogPass">
              </div>
                <button type="button" class="btn btn-primary btn-block" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            </form>
               <p class="text-center mt-2 mb-0" style="color: #333333; font-size:13px">New to Confiance? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#stuRegModalCenter">Sign up</a></p>
          </div>
          <div class="modal-footer col-md-8 mx-auto">
              <div class="mx-auto"><small id="statusLogMsg"></small></div>
            <!--<button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="clearStuLoginWithStatus()">Cancel</button>-->
          </div>
        </div>
      </div>
    </div> <!-- End Student Login Modal -->


  <!-- Start Admin Login Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenterTitle">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="clearAdminLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="adminLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="clearAdminLoginWithStatus()">Cancel</button>
          </div>
        </div>
      </div>
    </div> <!-- End Admin Login Modal -->

    <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/all.min.js"></script>

    <!-- Student Testimonial Owl Slider JS  -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>

    <!-- Student Ajax Call JavaScript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>

    <!-- Admin Ajax Call JavaScript -->
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
      $(document).ready(function () {
        // Change Navbar Color on Scroll
        // $(window).scrollTop() returns the position of the top of the page
        $(window).scroll(function () {
          if ($(window).scrollTop() >= 600) {
          $(".navbar").css("background-color", "#225470");
          } else {
          $(".navbar").css("background-color", "transparent");
          }
        });
        })
    </script>

  </body>

</html>