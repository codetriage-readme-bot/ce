
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
<?php echo validation_errors(); ?>
<h1>Update issue <?=$issue_item['id']?></h1>
    <hr>
<?php echo form_open('issues/edit/'.$issue_item['id']); ?>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" placeholder="<?=$issue_item['title']?>" /><br />
</div>
 <div class="form-group">
    <label for="text">Description</label>
    <textarea name="text" class="form-control" rows="10"></textarea><br />
</div>
    
 <div class="form-group">
    <label for="text">Milestone</label>
    <textarea name="milestone" class="form-control"></textarea>
     </div>
 <div class="form-group">
    <label for="text">Project</label>
    <textarea name="project" class="form-control"></textarea>
</div>

    
    <div class="form-group">
    <label for="">Issue type</label>
    <select class="form-control" name="type">

        <?php foreach ($type as $type_item): ?>
        <option><?=$type_item['name']?></option>
        <?php endforeach; ?>
</select>
    </div>
    
    <input type="submit" name="submit" value="Create news item" />

</form>
</div>