

    
<?php echo validation_errors(); ?>

<div class="container-fluid">
    <div class="row">
<div class="col-sm-3 col-md-6 col-lg-8">   <div class="card m-3 w-100">
  <h3 class="card-header bg-primary text-white"><?=lang('new_issue');?></h3>
  <div class="card-block bg-faded">
    <?php echo form_open('milestone/create'); ?>
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
      </form>
  </div>
</div>
</div>
    </div>

