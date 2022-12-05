
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
                $realdate   = date('F d, Y',$date);
                $realtime   = date("h:i A", $date);
                $firstname  = $result['firstname'];
                $lastname   = $result['lastname'];
                $message    = $result['message'];
    ?>
            <tr class="">
                <th scope="row"><?= $no++ ?></th>
                <td class="w-50"><?= $message ?></td>
                <td><?= $firstname . ' ' . $lastname ?></td>
                <td><?= $realdate ?></td>
                <td><?= $realtime ?></td>
                <td>
                    <a class="material-symbols-outlined btn btn-danger fw-bold" href="delete-message.php?id=<?= $result['id_timeline']?>" >Delete</a>
                </td>
            </tr> 

        <?php } ?>
    <?php } ?>
</table>
