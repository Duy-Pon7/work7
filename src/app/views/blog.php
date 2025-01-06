<?php
$pageTitle = $blog['title'];
include 'partials/header.php';
?>
<title><?php echo $blog['title']; ?></title>
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <div class="bg-white border border-1 rounded-2 mt-3 p-3">
            <!-- Database -->
            <h1><strong><?php echo $blog['title']; ?></strong></h1>
            <p><strong>Ngày phát hành: </strong><?php echo $blog['release_date']; ?></p>
            <p><strong>Ngày cập nhật: </strong><?php echo $blog['update_date']; ?></p>
        </div>
        <div class="bg-white border border-1 rounded-2 mt-3 p-3">
            <!-- Database content-->
            <?php echo $blog['content']; ?>
        </div>
    </div>
    <div class="col-sm-2 bg-gray">
        <!-- Database scrollspy-->
        <?php echo $blog['scrollspy']; ?>
    </div>
</div>
<?php include 'partials/footer.php'; ?>