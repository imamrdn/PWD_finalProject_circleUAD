<?php
require_once "core/init.php";

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    set_flash_message('error', 'You are not logged in');
}

$timeline = get_all_message();
require_once "view/header.php";

?>



<div class="d-flex justify-content-center mx-auto mt-5 mb-2">
    <div class="mx-3" style="width: 50%">
        <form action="index-validation.php" method="post">
            <textarea class="form-control p-4" aria-label="With textarea" name="timeline" placeholder="What do you want to say ?" style="height: 90px; border:none; border-radius :10px;"></textarea>
            <div class="d-flex justify-content-start">
                <input type="hidden" name="id_user" value=<?php echo get_user_by_email($_SESSION['user'])['id_user'] ?>>
                <input class="btn btn-primary fw-bold px-4 mt-3" name="submit" type="submit" value="Create Post">
            </div>
            <hr style="border: 1px solid grey">
        </form>
    </div>
</div>

<div style="padding-bottom: 7em">
    <?php
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

            <div class="d-flex justify-content-center mx-auto mt-3">
                <div class="card mx-3 p-2 shadow-sm message">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary"><?= $firstname . ' ' . $lastname ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $realdate . ' at ' . $realtime ?></h6>
                        <p class="card-text pt-1" style="font-size: 14px;"><?= $message ?></p>

                        <?php if ($_SESSION['user'] == $result['email']) { ?>
                            <div class="d-flex justify-content-end">
                                <a data-post='<?= json_encode([$result['id_timeline'], $message]) ?>' href="#" class="btn btn-warning fw-bold mx-1 editPostButton">Edit</a>
                                <a class="material-symbols-outlined btn btn-danger fw-bold" href="delete-message.php?id=<?= $result['id_timeline'] ?>">Delete</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        <?php } ?>
    <?php } ?>

</div>

<!-- Modal -->
<div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPostModalLabel">Edit Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="edit-post-validation.php" method="POST">
        <input type="hidden" name="id_timeline" id="form-id">
        <div class="form-floating">
            <textarea class="form-control" id="form-post" name="post" style="height: 100px"></textarea>
            <label for="post">Post</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $( ".editPostButton" ).click(function() {
        let data = $(this).data('post');
        $('#form-id').val(data[0]);
        $('#form-post').val(data[1]);
        $('#editPostModal').modal('show');
    })
</script>
<?php require_once "view/footer.php"; ?>