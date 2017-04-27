
<title>Issue View</title>
<!--div class="container">
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
    </footer-->   
    
    <div class="card m-3 w-100">
  <h3 class="card-header bg-primary text-white">All Issues</h3>
    <a href="<?base_url()?>issues/create">Create an issue</a>
  <div class="card-block bg-faded">
    <ul class="list-group list-group-flush">
<?php foreach ($issues as $issue_item): ?>
    <li class="list-group-item">
   <?php echo $issue_item['id']; ?>
   <?php  echo $issue_item['title']; ?>
    <?php //echo $issue_item['text']; ?>
        <div class=" pull pull-right">
            <a href="<?=base_url()?>issues/view/<?=$issue_item['id']?>" class="btn btn-info">View</a>
            <a href="<?=base_url()?>issues/edit/<?=$issue_item['id']?>" class="btn btn-warning">Edit</a></div>
        </li>
    <?php endforeach; ?>
      </ul>
 </div>
</div>
</div>