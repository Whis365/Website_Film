<div class="card">
    <div class="row">
        <div class="col-sm-12">
                <button data-toggle="modal" data-target="#mymodal" data-id="<?php echo base_url() . 'admin/view_modal/star_add';?>" id="menu" class="btn btn-sm btn-primary waves-effect waves-light"><span class="btn-label"><i class="fa fa-plus"></i></span><?php echo tr_wd('add_star'); ?></button>
                <button data-toggle="modal" data-target="#mymodal" data-id="<?php echo base_url() . 'admin/view_modal/star_add_tmdb';?>" id="menu" class="btn btn-sm btn-primary waves-effect waves-light"><span class="btn-label"><i class="fa fa-plus"></i></span><?php echo tr_wd('fetch_from_TMDB'); ?></button>
                <br>
                <br>
                <?php if($total_rows >0): ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th><?php echo tr_wd('star_name'); ?></th>
                            <th><?php echo tr_wd('star_type'); ?></th>
                            <th><?php echo tr_wd('star_desc'); ?></th>
                            <th><?php echo tr_wd('option'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sl = 1;
                            foreach ($stars as $star):                     

                        ?>
                        <tr id='row_<?php echo $star['star_id'];?>'>
                            <td><?php echo $sl++;?></td>
                            <td>
                                <img src="<?php echo $this->common_model->get_img('star', $star['star_id']).'?'.time(); ?>" class="" width="60" alt="<?php echo $star['star_name'];?>_photo" >
                            </td>
                            <td><strong><?php echo $star['star_name'];?></strong></td>
                            <td><?php echo tr_wd($star['star_type']);?></td>
                            <td><?php echo $star['star_desc'];?></td>
                            <td>
                                <div class="btn-group m-b-20"> <a data-toggle="modal" data-target="#mymodal" data-id="<?php echo base_url() . 'admin/view_modal/star_edit/'. $star['star_id'];?>" id="menu" title="<?php echo tr_wd('edit'); ?>" class="btn btn-icon"><i class="fa fa-pencil"></i></a> <a title="<?php echo tr_wd('delete'); ?>" class="btn btn-icon" onclick="delete_row(<?php echo " 'star' ".','.$star['star_id'];?>)" class="delete"><i class="fa fa-remove"></i></a> </div>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            <?php else: ?>
                <h3>No star exist.</h3>
            <?php endif; ?>
                <?php echo $links; ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

    <!-- select2-->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
    <!-- select2-->