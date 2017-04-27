<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<title>Issue View</title>
<div class="container">
<h2>Projects</h2>
<hr>
<a href="<?=base_url()?>/projects/create" class="btn btn-success">Create</a>

<div class="panel panel-info">
    <div class="panel-body">
        You don't have any open projects right now, but you can change that by setting up a new project…
    </div>
    </div>
<table class="table">
    <thead><td>Project id</td><td>Project title</td><td>Issue text</td><td>Actions</td></thead>
    <tbody>
    <?php foreach ($projects as $projects_item): ?>
    <tr>
    <td><?php echo $projects_item['id']; ?></td>
    <td> <?php echo $projects_item['title']; ?></td>
    <td><?php echo $projects_item['text']; ?></td>
    <td><a href="<?=base_url()?>projects/view/<?=$projects_item['id']?>" class="btn btn-info">View</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

    <footer>
    <small class="text-center"><?=lang('footer')?></small>
    </footer>    
</div>