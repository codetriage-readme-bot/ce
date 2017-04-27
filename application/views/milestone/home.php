<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<title>Milestone View</title>
<div class="container">
<h2>Milestone</h2>
<hr>
<a href="<?=base_url()?>milestone/create" class="btn btn-success">Create</a>


<table class="table">
    <thead><td>Milestone id</td><td>Milestone title</td><td>Milestone text</td><td>Actions</td></thead>
    <tbody>
    <?php foreach ($milestone as $milestone_item): ?>
    <tr>
    <td><?php echo $milestone_item['id']; ?></td>
    <td> <?php echo $milestone_item['title']; ?></td>
    <td><?php echo $milestone_item['text']; ?></td>
    <td><a href="<?=base_url()?>milestones/view/<?=$milestone_item['id']?>" class="btn btn-info">View</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

    <footer>
    <small class="text-center"><?=lang('footer')?></small>
    </footer>    
</div>