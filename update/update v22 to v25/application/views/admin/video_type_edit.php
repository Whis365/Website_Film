<?php
  $video_types    = $this->db->get_where('video_type' , array('video_type_id' => $param2) )->result_array();
  foreach ( $video_types as $row):
?>

<?php echo form_open(base_url() . 'admin/video_type/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center"><?php echo tr_wd('edit_video_type'); ?></h4>
<hr>
<div class="form-group">
  <label class="col-sm-3 control-label"><?php echo tr_wd('video_type'); ?></label>
  <div class="col-sm-6">
    <input type="text"  name="video_type" value="<?php echo $row['video_type']; ?>" class="form-control" required />
  </div>
</div>

<div class="form-group">
  <label class="col-sm-3 control-label"><?php echo tr_wd('description'); ?></label>
  <div class="col-sm-6">
    <input type="text"  name="video_type_desc"  value="<?php echo $row['video_type_desc']; ?>" class="form-control"  />
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3"><?php echo tr_wd('primary_menu'); ?></label>
  <div class="col-sm-8">              
    <div class="animated-checkbox checkbox-inline">
      <label>
        <input type="checkbox" name='primary_menu' value="1"  <?php if($row['primary_menu']=='1'){ echo "checked";} ?>><span class="label-text"></span>
      </label>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3"><?php echo tr_wd('footer_menu'); ?></label>
  <div class="col-sm-8">              
    <div class="animated-checkbox checkbox-inline">
      <label>
        <input type="checkbox" name='footer_menu' value="1"  <?php if($row['footer_menu']=='1'){ echo "checked";} ?>><span class="label-text"></span>
      </label>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <button type="submit" class="btn btn-sm btn-primary waves-effect"> <span class="btn-label"><i class="fa fa-floppy-o"></i></span><?php echo tr_wd('save') ?> </button>
    
  </div>
</div>
<?php echo form_close(); ?>
<?php endforeach; ?>
<script>
  jQuery(document).ready(function() {
    $('form').parsley();                            

    });
</script> 