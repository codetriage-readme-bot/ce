<!--h1>Dashboard of Atom Bug Tracker</h1>
<p>This dashboard helps you to find our products, solutions and more.</p>
<?php  $user = $this->aauth->get_user(); ?>
<b>Welcome <?//=$user->email?></b>
<h2>What would you like to do?</h2-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-uppercase text-center"><?=lang('welcome_dashboard')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div style="border: 1px solid black;  height: 50px; width: 100%;">
                <a href="" style="padding: 10px 30px;">Create a new issue</a>
                <p>Did you find a new bug?</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div style="border: 1px solid black;  height: 50px; width: 100%;">
                <a href="" style="padding: 10px 30px;">Check Issues</a>
                <p>Find the hardest bugs and fix them!</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div style="border: 1px solid black;  height: 50px; width: 100%;">
                <a href="" style="padding: 10px 30px;">Create a new project</a>
                <p>Have you got a new project? It's time to open a new one!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p></p>
        </div>
    </div>
<footer>
    <small class="text-center"><?=lang('footer')?></small>
    </footer>    
</div>

