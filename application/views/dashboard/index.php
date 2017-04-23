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
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Create a new issue!</h4>
                    <p>Did you find a new one? Bad news</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Check Issues</h4>
                    <p>Find the hardest bugs and fix them!</p>
                </div>
            </div>            
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Assigned to me</h4>
                    <p>Why did it assign to me? D:</p>
                </div>
            </div>     
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>View Projects</h4>
                    <p>A lot of projects... too many things to do</p>
                </div>
            </div>     
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>About This App</h4>
                    <p>Credits, website and more information about AtomBT</p>
                </div>
            </div>     
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Milestone</h4>
                    <p>Deadline and more....</p>
                </div>
            </div>
        </div>
    </div>
<footer>
    <small class="text-center"><?=lang('footer')?></small>
    </footer>    
</div>

