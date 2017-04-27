<!-- Bootstrap 3 
<nav class="navbar navbar-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=site_url('home/view');?>">AtomBt</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="active dropdown-toggle" data-toggle="dropdown" href="#">Overview
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?=site_url('home/viewHistory');?>">History</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Issues
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?=site_url('home/viewAssigned');?>">Assigned To Me</a></li>
          <li><a href="<?=site_url('home/viewFollowing');?>">Following</a></li>
          <li><a href="<?=site_url('home/viewFilters');?>">Filters</a></li>
          <li><a href="<?=site_url('home/viewAllIssues');?>">All issues</a></li>
          <li><a href="#">New Issue</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">All Projects</a></li>
          <li role="separator" class="divider"></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Milestones
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">All Milestones</a></li>
          <li role="separator" class="divider"></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">General Settings</a></li>
          <li><a href="#">Cache Settings</a></li>
          <li><a href="#">Mail Settings</a></li>
          <li><a href="#">Labels</a></li>
          <li><a href="#">View Logs</a></li>
          <li><a href="#">Users</a></li>
          <li><a href="#">Groups</a></li>
          <li><a href="#">Licensing</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Software Update</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">You</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>-->
<!-- Bootstrap 4 Navbar -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?=site_url('dashboard');?>">AtomBt</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="<?=site_url('dashboard');?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Overview
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=site_url('home/viewHistory');?>">History</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Issues
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=site_url('home/viewAssigned');?>">Assigned To Me</a>
          <a class="dropdown-item" href="<?=site_url('home/viewFollowing');?>">Following</a>
          <a class="dropdown-item" href="<?=site_url('home/viewFilters');?>">Filters</a>
          <a class="dropdown-item" href="<?=site_url('issues');?>">All Issues</a>
          <a class="dropdown-item" href="<?=site_url('issues/create')?>">New Issue</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projects
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">All Projects</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Milestones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">All Minestones</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projects
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">General Settings</a>
          <a class="dropdown-item" href="#">Cache Settings</a>
          <a class="dropdown-item" href="#">Mail Settings</a>
          <a class="dropdown-item" href="#">Labels</a>
          <a class="dropdown-item" href="#">View Logs</a>
          <a class="dropdown-item" href="#">Users</a>
          <a class="dropdown-item" href="#">Groups</a>
          <a class="dropdown-item" href="#">Licensing</a>
          <a class="dropdown-item" href="#">Software Update</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Me</a>
          <a class="dropdown-item" href="#">Log Out</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="row">
<div class="col-sm-3 col-md-6 col-lg-8">   