<?php 
$genres   = $this->db->get_where('genre' , array('genre_id' => $param2) )->result_array();
foreach ( $genres as $row):
?>
<?php echo form_open(base_url() . 'admin/genre/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center">Genre Edit</h4>
<hr>

<div class="form-group">
    <label class=" col-sm-3 control-label"><?php echo tr_wd('name'); ?></label>
    <div class="col-sm-12">
        <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3"><?php echo tr_wd('description'); ?></label>
    <div class="col-sm-12">
        <textarea class="wysihtml5 form-control" name="description"  rows="10"><?php echo $row['description'];?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3"><?php echo tr_wd('featured'); ?></label>
    <div class="col-sm-12">
        <select class="form-control m-bot15" name="featured">
        <option value="1"  <?php if($row['featured']=='1'){echo 'selected';} ?>><?php echo tr_wd('featured'); ?></option>
        <option value="0"  <?php if($row['featured']=='0'){echo 'selected';} ?>><?php echo tr_wd('none_featured'); ?></option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3"><?php echo tr_wd('publication'); ?></label>
    <div class="col-sm-12">
        <select class="form-control m-bot15" name="publication">
        <option value="1"  <?php if($row['publication']=='1'){echo 'selected';} ?>><?php echo tr_wd('published'); ?></option>
        <option value="0"  <?php if($row['publication']=='0'){echo 'selected';} ?>><?php echo tr_wd('unpublished'); ?></option>
        </select>
    </div>
</div>

<?php endforeach; ?>
<div class="form-group">
  <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <button type="submit" class="btn btn-sm btn-primary waves-effect"> <span class="btn-label"><i class="fa fa-floppy-o"></i></span>SAVE </button>
    <button type="" class="btn btn-sm btn-white m-l-5 waves-effect" data-dismiss="modal">CLOSE </button>
  </div>
</div>
</form>
<script>
    jQuery(document).ready(function() {
      $('form').parsley();                            

      });
</script> 

