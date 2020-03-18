<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
                                    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hello <?= $lastname,", ",$firstname ?></h4>
            </div>
            <div class="modal-body text-center">
                <?php 
                    echo '
                    <div class="text-center">
                        <img src="'.$dir . '/' . $file['name'].'" alt="..." style="width:200px; height:200px; ">
                    </div>';
                ?>
                <p>Username: <?= $username ?></p>
                <p>Password: <?= $password ?></p>
                <p>Email: <?= $email ?></p>
                <p>Contact Info: <?= $contact ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>