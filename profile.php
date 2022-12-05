<?php
require_once "core/init.php";

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    set_flash_message('error', 'You are not logged in');
}

<<<<<<< HEAD
$timeline = get_all_message();
$name = get_name_user();
require_once "view/header.php";
require_once "view/header-profile.php"
=======
    $timeline = get_all_message();
    $name = get_name_user();
    require_once "view/header.php";
    require_once "view/header-profile.php";
?>  

<?php 
    if( check_role($_SESSION['user']) == '1' )
        require_once "data-message.php";

    if (mysqli_num_rows($timeline) > 0) {
        while ($result = mysqli_fetch_array($timeline)) { 
            $timestamp  = $result['created_at'];
            $date       = strtotime($result['created_at']); 
            $realdate   = date('F d, Y',$date);
            $realtime   = date("h:i A", $date);
            $firstname  = $result['firstname'];
            $lastname   = $result['lastname'];
            $message    = $result['message'];
>>>>>>> 17251b13c11bdc0169dce3fa48dfc0e735be5329
?>

<?php
if (check_role($_SESSION['user']) == '1')
    require_once "data-message.php";

if (mysqli_num_rows($timeline) > 0) {
    while ($result = mysqli_fetch_array($timeline)) {
        $timestamp  = $result['created_at'];
        $date       = strtotime($result['created_at']);
        $realdate   = date('F d, Y', $date);
        $realtime   = date("h:i A", $date);
        $firstname  = $result['firstname'];
        $lastname   = $result['lastname'];
        $message    = $result['message'];
?>

        <?php if ($_SESSION['user'] == $result['email']) { ?>
            <div class="d-flex justify-content-center mx-auto mt-3">
                <div class="card mx-3 p-2 shadow-sm message">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary"><?= $firstname . ' ' . $lastname ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $realdate . ' at ' . $realtime ?></h6>
                        <p class="card-text pt-1" style="font-size: 14px;"><?= $message ?></p>

                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-warning fw-bold mx-1">Edit</a>
<<<<<<< HEAD
                            <a class="material-symbols-outlined btn btn-danger fw-bold" href="delete-message.php?id=<?= $result['id_timeline'] ?>">Delete</a>
=======
                            <a class="material-symbols-outlined btn btn-danger fw-bold" href="delete-message.php?id=<?= $result['id_timeline']?>">Delete</a>
>>>>>>> 17251b13c11bdc0169dce3fa48dfc0e735be5329
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
<?php } ?>

<?php require_once "view/footer.php"; ?>