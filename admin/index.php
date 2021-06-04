<!DOCTYPE html>
<html>

  <?php include('header_index.php');
  error_reporting(0);
  ?>
  
  <body>
    <div id="all">
 
      <section class="bar text-md-center">
        <div class="container">
      
          <div class="heading text-center">
            <p>FOOD BLOG</p>
             
          </div>
          
        <ul id="pills-tab" role="tablist" class="nav nav-pills nav-justified">
        <li class="nav-item" style="border: solid 1px #4CAF50;"><a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" class="nav-link active">Administrator Login</a></li>
        <!--li class="nav-item" style="border: solid 1px #4CAF50;"><a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" class="nav-link">Create Account</a></li-->
        </ul>
        
        <div id="pills-tabContent" class="tab-content" style="border-left: solid 1px #4CAF50; border-right: solid 1px #4CAF50; border-bottom: solid 1px #4CAF50;">
        <div id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" class="tab-pane fade show active">
        
            <div class="col-lg-12">
                <form action="login.php" method="POST">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" id="username" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" id="password" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                  </div>
                </form>
            </div>
      
        </div>
        

      </div>
      </div>
      </section>
      
      <?php include('footer.php'); ?>
      
    </div>
    <!-- Javascript files-->
    
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
    

    <script>
 
    $('#password-login, #password-login2').on('keyup', function () {
      if ($('#password-login').val() == $('#password-login2').val()) {
        $('#message').html('Matching').css('color', 'green');
      } else 
        $('#message').html('Not Matching').css('color', 'red');
    });
    
    </script>


  </body>
</html>