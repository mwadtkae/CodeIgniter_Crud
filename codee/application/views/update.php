<?php include('header.php'); ?>
<div class="container">


<?php echo form_open("welcome/change/{$post->id}",['class'=>'form-horizontal']);  ?>

  <fieldset>
    <legend>Update Post</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Title</label>
      <div class="col-md-5">

        <?php echo form_input(['name'=>'title', 'placeholder'=>'Title','class'=>'form-control','value'=>set_value('title',$post->title)]); ?>

      </div>

      <div class="col-md-5">
      <?php echo form_error('title','<div class="bg-warning text-danger ">','</div>');?>
      </div>

    </div>
    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Description</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'description', 'placeholder'=>'Description','class'=>'form-control','value'=>set_value('description',$post->description)]); ?>

     </div>

     <div class="col-md-5">
     <?php echo form_error('description','<div class="bg-warning text-danger ">','</div>');?>
      </div>


    </div>

    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <?php echo form_submit(['name'=>'submit', 'value'=>'update','class'=>'btn btn-primary']); ?>
        <?php echo anchor ( 'welcome','Back',['class'=>'btn btn-primary'] );  ?>

      </div>
    </div>
  </fieldset>

<?php echo form_close();?>
</div>
<?php include('footer.php'); ?>