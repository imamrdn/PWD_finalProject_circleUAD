<?php 
    require_once "core/init.php";

    require_once "view/header.php";
?>  

    <div class="d-flex justify-content-center mx-auto mt-3 mb-3">
        <div class="mx-3" style="width: 50%">
            <div>
                <textarea class="form-control" aria-label="With textarea" placeholder="What do you want to say ?"></textarea>
                <a href="#" class="btn btn-primary fw-bold px-4 my-2">Post</a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mx-auto"">
        <div class="card mx-3" style="width: 50%">
            <div class="card-body">
                <h5 class="card-title fw-bold">Imam Ramadhan</h5>
                <h6 class="card-subtitle mb-2 text-muted">6 November at 10.30 AM</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-danger fw-bold mx-1">Delete</a>
                    <a href="#" class="btn btn-warning fw-bold mx-1">Edit</a>
                </div>
            </div>
        </div>
    </div>
<?php 
    require_once "view/footer.php";
?>



