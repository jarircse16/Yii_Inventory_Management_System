<!-- views/admin/dashboard.php -->

<?php

use yii\helpers\Html;

$this->title = 'Admin Dashboard';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="admin-dashboard">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Users</span>
                    <span class="info-box-number"><?= $totalUsers ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Orders</span>
                    <span class="info-box-number"><?= $totalOrders ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-cube"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Items</span>
                    <span class="info-box-number"><?= $totalItems ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Add more statistics or summaries as needed -->

</div>
