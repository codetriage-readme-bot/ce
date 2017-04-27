<title>View Issue</title>
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>#<?=$milestone_item['id']?>: <?=$milestone_item['title']?></h1>
        </div>
        <div class="panel-body">
        <h4>Description</h4>    <p><?=$milestone_item['text']?></p>
        
        <h4>Category</h4><p>Todo</p>
        <h4>Status</h4><p>Todo</p>
        <h4>Assign to..</h4><p>Todo</p>
        <h4>Label</h4><p>Todo</p>
        </div>
        <div class="panel-footer">
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-alert">Delete</a>
            <a href="#" class="btn btn-success">Mark as...</a>
        </div>
    </div>
</div>

