
<?php include_once('header.php'); ?>
<div class="container">
<h3>View All-Post</h3>

<?php echo anchor('welcome/create','AddPost', ['class'=>'btn btn-primary']); ?>
<?php if ($msg = $this->session->flashdata('msg')); ?>
<?php echo '<div class=".text-center .text-uppercase .bg-success" >'. $msg .'</div>'  ?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>

      <th>Post Tittle</th>
      <th>Description</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($posts)): ?>
    <?php foreach  ($posts as $post): ?>
    <tr>
      <td><?php echo $post->title; ?></td>
      <td><?php echo $post->description;  ?></td>
      <td><?php echo $post->date_created; ?></td>

      <td>
      <?php echo anchor("welcome/view/{$post->id}",'view', ['class'=>'label label-primary']); ?>
      <?php echo anchor("welcome/update/{$post->id}",'update', ['class'=>'label label-success']); ?>
      <?php echo anchor("welcome/delete/{$post->id}",'delete', ['class'=>'label label-danger']); ?>

      </td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>

  <tr>
      <td>
      No Record Found
      </td>
  </tr>
  <?php endif; ?></tbody>

</table>
</div>
<?php include_once('footer.php'); ?>
