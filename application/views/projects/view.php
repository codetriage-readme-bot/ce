<title>View Issue</title>
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>#<?=$projects_item['id']?>: <?=$projects_item['title']?></h1>
        </div>
        <div class="panel-body">
        <h4>Description</h4>    <p><?=$projects_item['text']?></p>
        
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Issue #<?=$projects_item['id']?></h1>
            <h3><?=$projects_item['title']?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="well">
                <h6>Milestone</h6>
                
                <h6>Projects</h6>
               
            </div>
        </div>
        <div class="col-md-9">
        
        </div>
    </div>
</div>
