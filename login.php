<?php 

    require_once "core/init.php";

    $error = '';

    // user is logged in
    if ( isset($_SESSION['user']) ) {
        header('Location: index.php');
    }
    
    // login validation
    if (isset($_POST['submit'])) {
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        if (!empty(trim($email)) && !empty(trim($password))) {
            if (check_email($email) != 0){
                if(check_data($email, $password)) redirect($email);
                else $error = 'data ada yang salah';
            } else $error = 'email belum terdaftar';
        } else $error = 'tidak boleh kosong';

    } 

    require_once "view/header.php";

    if (isset($_SESSION['message']))
        flash_message($_SESSION['message']); 

?>


<div class="container">
      <div style="margin-right: 10em;"">
        <img src="assets/images/text_circleUAD.png" alt="image" srcset="" width="400">
      </div>
      <div class="card login-form shadow ">             
        <div class="card-body">
          <h2 class="card-title fw-bold">Hello again!</h2>
          <h6 class="card-subtitle text-muted mt-1 mb-5 fw-bold">Welcome back you've been missed</h6>
          
          <form action="login.php" method="post">
            <div class="mb-3">
              <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Your Email">
            </div>
            <div class="mb-3">
              <input type="password" name="password" id="password" class="form-control"  placeholder="Enter your password">
            </div>

            <div class="d-flex justify-content-between">
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>

                <div>
                    <a href="#" class="link">Forgot Password ?</a>
                </div>
            </div>

            <div class="d-grid mt-4">
                <input type="submit" class="btn btn-primary btn-login" name="submit" value="Login">
            </div>

            <div class="mt-3">
                <label>Not registered yet ? <a href="register.php" class="link">Create an account</a></label>
            </div>

            <?php if($error != '') { ?>
                <div id="error">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

          </form>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



<?php require_once "view/footer.php"; ?>


