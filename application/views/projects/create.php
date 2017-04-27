

<div class="container">
    
<?php echo validation_errors(); ?>
<h1>Create a new issue</h1>
<p>Get the most out of projects. Projects are the primary way to group issues. Projects can each have their unique set of participants, categories, and milestones.

While many companies can participate in a project, you'll need to choose the primary company associated with that project for organizational purposes.</p>
    <hr>
<?php echo form_open('projects/create'); ?>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" /><br />
</div>
 <div class="form-group">
    <label for="text">Description</label>
    <textarea name="text" class="form-control" rows="10"></textarea><br />
    </div>


    
    <input type="submit" name="submit" value="Create Projects" />

</form>
</div>