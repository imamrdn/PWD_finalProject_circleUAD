<?php 
    require_once "core/init.php";

    if ( !isset($_SESSION['user']) ) {  
        header('Location: login.php');
        set_flash_message('error', 'You are not logged in');  
    }

    $timeline = get_all_message();
    require_once "view/header.php";
?>  

<h1 class="fw-bold">Hi👋 <?php echo $_SESSION['user']; ?> </h1>
<?php if( check_role($_SESSION['user']) == '1' ) { ?>
    <div class="d-flex justify-content-end">
        <a class="btn btn-success fw-bold mx-1" href="data-user.php">User Data</a>
    </div>
    <hr style="border: solid 1px gray">
    <table class="table table-striped table-hover my-3 mx-auto" style="border-radius: 10px; width:100%;">
        <caption>List of messages</caption>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Message</th>
            <th scope="col">User</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col"></th>
            </tr>
        </thead>
    <?php
        if (mysqli_num_rows($timeline) > 0) {
            $no = 1;
            while ($result = mysqli_fetch_array($timeline)) { 
                $timestamp  = $result['created_at'];
                $date       = strtotime($result['created_at']); 
                $realdate   = date('M d, Y',$date);
                $realtime   = date("h:i", $date);
                $firstname  = $result['firstname'];
                $lastname   = $result['lastname'];
                $message    = $result['message'];
        ?>
        <tbody ">
            <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $message ?></td>
            <td><?= $firstname . ' ' . $lastname ?></td>
            <td><?= $realdate ?></td>
            <td><?= $realtime ?></td>
            <td><span href="#" class="material-symbols-outlined btn btn-danger fw-bold">Delete</span></td>
            </tr>
        </tbody>

        <?php } ?>
    <?php } ?>
    </table>
<?php } ?>

<?php 
    require_once "view/footer.php";
?>


