<?php 
    require_once "core/init.php";

    if ( !isset($_SESSION['user']) ) {  
        header('Location: login.php');
        set_flash_message('error', 'You are not logged in');  
    }

    $timeline = get_all_message();

    require_once "view/header.php";
?>  

    <div class="d-flex justify-content-center mx-auto mt-3 mb-2">
        <div class="mx-3" style="width: 50%">
            <form action="index-validation.php" method="post"></form>
                <textarea class="form-control p-3" aria-label="With textarea" name="timeline" placeholder="What do you want to say ?" style="height: 70px;"></textarea>
                <div class="d-flex justify-content-start">
                    <input class="btn btn-danger fw-bold px-4 mt-3 fst-italic" type="submit" value="create a post is under development">
                </div>
                <hr style="border: 1px solid grey">
            </form>
        </div>
    </div>

    <?php if (mysqli_num_rows($timeline) > 0) { 
        
        
        ?>
        <?php 
            while ($result = mysqli_fetch_array($timeline)) { 
                $timestamp  = $result['created_at'];
                $date       = strtotime($result['created_at']); 
                $realdate   = date('M d, Y',$date);
                $realtime       = date("h:i", $date);
                $firstname  = $result['firstname'];
                $lastname   = $result['lastname'];
                $message    = $result['message'];
        ?>
            
    
        <div class="d-flex justify-content-center mx-auto mt-3">
            <div class="card mx-3" style="width: 50%;">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $firstname . ' ' . $lastname ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $realdate . ' at ' . $realtime ?></h6>
                    <p class="card-text"><?= $message ?></p>

                    <?php if($_SESSION['user'] == $result['email']) { ?>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-warning fw-bold mx-1">Edit</a>
                            <a href="#" class="btn btn-danger fw-bold mx-1">Delete</a>
                        </div>
                    <?php } else if (check_role($_SESSION['user']) == '1') { ?>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-danger fw-bold mx-1">Delete</a>
                        </div>
                    <?php } ?>   
                        

                    
                </div>
            </div>
        </div>

        <?php } ?>
    <?php } ?>

<?php 
    require_once "view/footer.php";
?>



