<div class="container">
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <br>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?php echo empty($bus->id) ? 'Add a <i class="la la-heart la-2x">  </i> New bus' : 'Edit bus <i class="la la-heart la-2x">  </i> '.$bus->name; ?>
            </h3>
          </div>
        </div>
        <!--begin::Form-->
        <?php echo form_open('', 'class="kt-form kt-form--label-right"'); ?>
          <div class="kt-portlet__body">
            <div class="form-group form-group-last">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-secondary" role="alert"><div class="alert-icon"><i class="flaticon-danger kt-font-bus"  style="color:tomato"></i></div><div class="alert-text">'.validation_errors().'</div></div>' : '' ; ?>
            </div>

            

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Bus Name</label>
              <div class="col-sm-10">
                <?php
                    echo form_input('name', set_value('name', $bus->name), 'class="form-control" placeholder="bus name" id="name"');
                ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="Details" class="col-sm-2 col-form-label">Details</label>
              <div class="col-sm-10">
                    <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
                <?php
                    echo form_textarea( array('name'=>'des','value'=>set_value('des', $bus->des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

                ?>
              </div>
            </div>


            <!-- logo upload -->
            <div class="form-group row">
            <label for="logo" class="col-form-label col-sm-2">Logo</label>
              <div class='col-sm-6'>
                <div class="img-preview"><img height="" src="<?php echo $photo = ($bus->photo) ? site_url('upload/'.$bus->photo) : site_url('img/bus.png') ; ?>" id="preview" class="img img-fluid"></div>
              
                <input type="hidden" id="img_photo" name="photo" value="<?php echo $bus->photo ?>">
                <br>
                <button id="photo" onclick="openUploadModal('photo')" data-field="photo" data-preview="preview" type="button"  class="btn btn-outline-info logo"><i class="fab fa-vaadin fa-fw"></i>  Change Photo</button>
              </div>
            </div>
            <!-- photo upload -->

            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
               
                <?php
                    echo form_dropdown('status', array('active', 'syspend'),$bus->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="bus Sub-bus" id="status"' );
                ?>
              </div>





            </div>



          </div> <!-- portlet__body -->

          <div class="kt-portlet__foot">
          <div class="kt-form__actions">
            <div class="row">
              <div class="col-2">
              </div>
              <div class="col-10">
              <?php echo empty($bus->id) ? form_submit('submit', 'Save', 'class="btn btn-success"') : form_submit('submit', 'Update', 'class="btn btn-warning"');?>
              
                <a href="<?php echo site_url('admin/bus') ?>" class="btn btn-secondary">Cancel</a>
              </div>
            </div>
          </div>
        </div>
       <?php form_close(); ?>
        <!--end::Form-->
        
      </div> <!-- kt-portlet -->

    </div> <!-- col-lg-6 -->
  </div> <!-- row -->
</div> <!-- container -->


<?php $this->load->view('admin/common/_upload-modal');?>


