<div>Home</div>
<?php
use APP\Models\User;

$usersModel = new User($db_connontion->get_connection());
$users = $usersModel->findAll();

foreach($users as $user) {
    echo $user['firstname'];
}
?>
<div class="row justify-content-center">
    <div class="col-6">
        <form action="" method="post">
            <h4>Create new user</h4>
            <hr>
            <div class="">
                <label for="firstname">First name</label>
                <input class="form-control" type="firstname" name="firstname">
            </div>
            <div>
                <label for="lastname">Last name</label>
                <input class="form-control" type="lastname" name="lastname">
            </div>
            <div>
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Save user</button>
        </form>
    </div>
</div>