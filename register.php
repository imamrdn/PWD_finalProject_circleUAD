<?php 

    require_once "core/init.php";

    // user is logged in
    if ( isset($_SESSION['user']) ) {
        header('Location: index.php');
    }

    require_once "view/header.php";


?>

<div class="container">
    <div style="margin-right: 10em;"">
        <img src="assets/images/text_circleUAD.png" alt="image" width="400">
    </div>
    <div class="card register-form shadow">             
        <div class="card-body">
            <h2 class="card-title fw-bold">Create account</h2>
            <h6 class="card-subtitle text-muted mt-1 mb-5 fw-bold">Register yourself to enjoy this app</h6>
            
            <form action="register-validation.php" method="post">
            <div class="mb-3">
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
            </div>
            <div class="mb-3">
                <input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Last Name">
            </div>
            <div class="mb-3">
                <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="mb-5">
                <input type="password" name="password" id="password" class="form-control" placeholder="Create password">
            </div>

            <div class="d-grid mt-4">
                <input type="submit" class="btn btn-primary btn-login" name="submit" value="Register">
            </div>

            <div class="mt-4">
                <label>Already have an account ? <a href="login.php" class="link">Sign In</a></label>
            </div>

            </form>
        </div>
        </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<?php require_once "view/footer.php"; ?>