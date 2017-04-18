
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<div class="container">
<h5>About this application</h5>
<p>Atom Bug Tracker is the lightest and fastest issue tracker in the world (maybe). We are working on new releases that will include 
more features and more rules of security. We don't want a Jira clone application or issue tracker like TheBugGenie.</p>

<div class="panel panel-default">
    <?php
    define('ATOMBT_VERSION','0.1');
    ?>
    <p>Welcome <?php $user = $this->aauth->get_user(); ?>, you are using <?=ATOMBT_VERSION?> of Atom Bug Tracker Community Edition</p>
</div>

<h2>Details</h2>



<a href="http://github.com">Github</a>
</div>