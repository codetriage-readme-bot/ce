
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
<?php echo validation_errors(); ?>
<h1>Create a new issue</h1>
    <hr>
<?php echo form_open('issues/create'); ?>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" /><br />
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
    <select class="form-control">

        <?php foreach ($issues as $issue_item): ?>
        <option><?=$issue_item['id']?> | <?=$issue_item['title']?></option>
        <?php endforeach; ?>
</select>
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