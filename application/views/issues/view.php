<title>View Issue</title>

<div class="row">
    <!--div class="col-sm-3 col-md-6 col-lg-2">
        <div class="card m-3 w-100">
          <h3 class="card-header bg-primary text-white">#<?=$issue_item['id']?>: <?=$issue_item['title']?></h3>
          <div class="card-block bg-faded">
            <form>
                <div class="form-group">
                    <label for="issueBody"><h5>Description</h5></label>
                    <textarea class="form-control" id="summernote" disabled><?=$issue_item['text']?></textarea>
                </div>
                <div class="form-group row">
                    <label for="milestoneSelect1" class="col-sm-2 col-form-label mr-2"><h5>Milestone</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="milestoneSelect1" disabled>
                          <option><?=$issue_item['milestone']?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="projectSelect1" class="col-sm-2 col-form-label mr-2"><h5>Project</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="projectSelect1" disabled>
                          <option><?=$issue_item['project']?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="categorySelect1" class="col-sm-2 col-form-label mr-2"><h5>Category</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="categorySelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="statusSelect1" class="col-sm-2 col-form-label mr-2"><h5>Status</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="statusSelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="assignToSelect1" class="col-sm-2 col-form-label mr-2"><h5>Assign To</h5></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="assignToSelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="labelSelect1" class="col-sm-2 col-form-label mr-2"><h5>Label</h5></label>
                    <div class="col-sm-9">
                        <select multiple class="form-control" id="labelSelect1" disabled>
                          <option>To Do</option>
                        </select>
                    </div>
                </div>  
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="submit" class="btn btn-primary">Mark As</button>
            </form>
          </div>
        </div>
    </div-->
    <div class="col-sm-3 col-md-6 col-lg-12">
        <div class="card m-3 w-80">
            <h5 class="card-header bg-info text-white">Issue #<?=$issue_item['id']?></h5>
            <div class="card-block">
                <h4><?=$issue_item['title']?></h4> 
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Milestone :</b>&nbsp;<?=$issue_item['milestone']?></li>
                <li class="list-group-item"><b>Project :</b>&nbsp;<?=$issue_item['project']?></li>
                <li class="list-group-item"><b>Issue Type :</b>&nbsp;<?=$issue_item['type']?></li>
                <li class="list-group-item"><b>Description Of Issue :</b>&nbsp;<?=$issue_item['text']?></li>
                <li class="list-group-item"><b>Assigned To :</b>&nbsp;<?=$issue_item['milestone']?></li>
                <li class="list-group-item"><b>Action : </b>&nbsp;<a href="<?=base_url()?>issues/edit/<?=$issue_item['id']?>" class="btn btn-primary">Edit</a>&nbsp;
                <button type="submit" class="btn btn-primary">Delete</button> &nbsp;
                <button type="submit" class="btn btn-primary">Mark As</button></li>
            </ul>
        </div>
    </div>
</div>