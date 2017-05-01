
<!--link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css"-->

<?php echo validation_errors(); ?>

    <hr>
<?php //echo form_open('issues/create'); ?>
    <!--div class="form-group">
    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" /><br />
</div>
 <div class="form-group">
    <label for="text">Description</label>
    <textarea name="text" class="form-control" rows="10"></textarea><br />
</div>
    
 <div class="form-group">
    <label for="text">Milestone</label>
    <textarea name="milestone" class="form-control"></textarea>
     </div>

<div class="form-group">
    <select class="form-control">

        <?php foreach ($issues as $issue_item): ?>
        <option><?=$issue_item['id']?> | <?=$issue_item['title']?></option>
        <?php endforeach; ?>
</select>
    </div>
    
    <div class="form-group">
    <label for="">Issue type</label>
    <select class="form-control" name="type">

        <?php foreach ($type as $type_item): ?>
        <option><?=$type_item['name']?></option>
        <?php endforeach; ?>
</select>
    </div>
    
    <div class="form-group">
        <label for="">Project</label>
        <select class="form-control" name="project">
            <?php foreach ($project as $project_item): ?>
            <option><?=$project_item['title']?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit" name="submit" value="Create issue item" class="btn btn-info" />

</form-->

 



<div class="container-fluid">
    <div class="row">
<div class="col-sm-3 col-md-6 col-lg-8">   <div class="card m-3 w-100">
  <h3 class="card-header bg-primary text-white"><?=lang('new_issue');?></h3>
  <div class="card-block bg-faded">
    <?php echo form_open('issues/create'); ?>
    	<div class="form-group">
    		<label for="subject"><?=lang('subject')?></label>
    		<input type="text" class="form-control" id="inputSubject" aria-describedby="subjectHelp" placeholder="Quick summary of the issue" name="title">
    	</div>
    	<div class="form-group">
    		<label for="issueBody"><?=lang('description')?></label>
    		<textarea class="form-control" id="summernote" name="text"></textarea>
    		<!-- Script for running summernote -->
    		<script>
    			$(document).ready(function() {
        			$('#summernote').summernote();
    			});
  			</script>
    	</div>
    	<button type="submit" class="btn btn-primary"><?=lang('save_issue')?></button>
    	<button type="submit" class="btn btn-primary"><?=lang('save_and_issue')?></button>
    	<a href="#"><?=lang('cancel_back')?></a>
    
  </div>
</div>
</div>
    
<div class="col-sm-3 col-md-6 col-lg-4">
	<div class="card m-3 w-80">
		<h6 class="card-header bg-info text-white"><?=lang('details_issue')?></h6>
		<div class="card-block">
		   
            
		    	<div class="form-group row">
				    <label for="projectSelect1" class="col-sm-2 col-form-label mr-2"><?=lang('project')?></label>
				    <div class="col-sm-9">
					    <select class="form-control" id="projectSelect1" name="project">
					      <?php foreach ($project as $project_item): ?>
            <option><?=$project_item['title']?></option>
            <?php endforeach; ?>
					    </select>
					</div>
				</div>
				<div class="form-group row">
				    <label for="prioritySelect1" class="col-sm-2 col-form-label mr-2"><?=lang('priority')?></label>
				    <div class="col-sm-9">
					    <select class="form-control" id="prioritySelect1">
					      <option>Low</option>
					      <option>Normal</option>
					      <option>High</option>
					    </select>
					</div>
				</div>
				<div class="form-group row">
				    <label for="assignSelect1" class="col-sm-2 col-form-label mr-2">Assign to</label>
				    <div class="col-sm-9">
					    <select class="form-control" id="assignSelect1">
					      <option>Nobody</option>
					    </select>
					</div>
				</div>
                <div class="form-group row">
                    <label for="TypeSelect1" class="col-sm col-form-label mr-2">Type</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="typeSelect1" name="type">
                            <?php foreach ($type as $type_item): ?>
        <option><?=$type_item['name']?></option>
        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
				<div class="form-group row">
				    <label for="milestoneSelect1" class="col-sm-2 col-form-label mr-2">Milestone</label>
				    <div class="col-sm-9">
					    <select class="form-control" id="milestoneSelect1" name="Milestone">
					      <option>None</option>
					    </select>
					</div>
				</div>
            </form>
	  	</div>
	</div>
	<div class="card m-3 w-80">
		<h6 class="card-header bg-info text-white">Labels</h6>
		<div class="card-block">
		   
		    	<div class="form-group">
    				<input type="text" class="form-control" id="inputLabel1" aria-describedby="labelHelp" placeholder="Filter Labels">
    			</div>	
    			<div class="form-group">
				    <select multiple class="form-control" id="labelSelect1">
				      <option>1</option>
				      <option>2</option>
				    </select>
				</div>
				<div class="form-group">
					<?php echo form_open('label/create'); ?>
						<div class="form-group">
    						<label for="label">New Label</label>
    						<input type="text" class="form-control" id="inputLabel2" aria-describedby="newLabelHelp" placeholder="Label Name">
    					</div>
    					<button type="submit" class="btn btn-primary w-100">Save Label</button>
    				</form>
    			</div>
		  
	  	</div>
	</div>
	<!--div class="card m-3 w-80">
		<h6 class="card-header bg-info text-white">Attachments</h6>	
		<div class="form-group">
    		<input type="file" class="form-control-file m-2" id="exampleInputFile" aria-describedby="fileHelp">
  		</div>
	</div-->
</div>		

</div>
</div>
