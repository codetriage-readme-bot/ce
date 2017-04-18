<title>View Issue</title>
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>#<?=$issue_item['id']?>: <?=$issue_item['title']?></h1>
        </div>
        <div class="panel-body">
        <h4>Description</h4>    <p><?=$issue_item['text']?></p>
        <h4>Milestone</h4><?=$issue_item['milestone']?>
        <h4>Project</h4><?=$issue_item['project']?>
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
            <h1>Issue #<?=$issue_item['id']?></h1>
            <h3><?=$issue_item['title']?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="well">
                <h6>Milestone</h6>
                <p><?=$issue_item['milestone']?></p>
                <h6>Projects</h6>
                <h6>Issue type</h6><?=$issue_item['type']?>
            </div>
        </div>
        <div class="col-md-9">
        
        </div>
    </div>
</div>
