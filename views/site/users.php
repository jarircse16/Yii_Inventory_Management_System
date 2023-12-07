<!-- views/admin/users.php -->

<?php

use yii\helpers\Html;

$this->title = 'User Management';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="user-management">
    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= Html::encode($user->id) ?></td>
                    <td><?= Html::encode($user->username) ?></td>
                    <td><?= Html::encode($user->email) ?></td>
                    <td>
                        <?= Html::a('Edit', ['edit-user', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
                        <!-- Add more actions as needed, e.g., delete, view, etc. -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
