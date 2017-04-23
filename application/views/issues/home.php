<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<title>Issue View</title>
<div class="container">
<h2>Issues</h2>
<a href="">Create</a>
<table class="table">
    <thead><td>Issue id</td><td>Issue title</td><td>Issue text</td><td>Actions</td></thead>
    <tbody>
    <?php foreach ($issues as $issue_item): ?>
    <tr>
    <td><?php echo $issue_item['id']; ?></td>
    <td> <?php echo $issue_item['title']; ?></td>
    <td><?php echo $issue_item['text']; ?></td>
    <td><a href="<?=base_url()?>issues/view/<?=$issue_item['id']?>" class="btn btn-info">View</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


    
    <footer>
    <small class="text-center"><?=lang('footer')?></small>
    </footer>    
</div>