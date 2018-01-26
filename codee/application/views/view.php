<?php include('header.php'); ?>
<div class="container">
    <h3>View Post</h3>

    <h4><?php echo $post->title; ?> </h4>
    <p><?php echo $post->description; ?></p>
    <p><?php echo $post->date_created; ?></p>
<br>
<?php echo anchor ( 'welcome','Back',['class'=>'btn btn-primary'] );  ?>
</div >
<br>
<?php include('footer.php'); ?>
