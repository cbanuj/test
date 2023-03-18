<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Update Blog
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
            <li class="active">Manage Blog</li>
            <li class="active">Add Blog</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <!-- <h3 class="box-title">Back</h3> -->
                  <a href="javascript:window.history.go(-1);" class="btn btn-primary">Back</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="<?=base_url('employee/add-employee');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputTitle1">Title</label>
                      <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Blog1" name="name" value="<?=set_value('name')?>">
                      <span class="help-block error"><?=form_error('name'); ?></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputTitle1">Slect File</label>
                      <input type="file" class="form-control" id="exampleInputTitle1" placeholder="Enter Email" name="email" value="<?=set_value('email')?>">
                      <span class="help-block error"><?=form_error('email'); ?></span>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputFile">Description</label>
                    <textarea id="editor1" name="offer" rows="10" cols="80">Blog1</textarea>
                    <span class="help-block error"><?=form_error('description'); ?></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputTitle1">Address</label>
                      <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Enter Address" name="address" value="<?=set_value('address')?>">
                      <span class="help-block error"><?=form_error('address'); ?></span>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="add_emp" value="save">Submit</button>
                  </div>
                </form>
                
              </div><!-- /.box -->

            </div><!--/.col (left) -->

          <!--/.col (right) -->
          </div>   <!-- /.row -->
        </section>

    </div><!-- ./wrapper -->

    
