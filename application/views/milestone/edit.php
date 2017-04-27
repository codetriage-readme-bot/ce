
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
<?php echo validation_errors(); ?>
<h1>Update issue <?=$milestone_item['id']?></h1>
    <hr>
<?php echo form_open('milestone/edit/'.$milestone_item['id']); ?>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" placeholder="<?=$milestone_item['title']?>" /><br />
</div>
 <div class="form-group">
    <label for="text">Description</label>
    <textarea name="text" class="form-control" rows="10"></textarea><br />
</div>
    
    <input type="submit" name="submit" value="Edit Milestone" />

</form>
</div>

