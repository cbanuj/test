<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Mange Blog
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Blog</a></li>
            <li class="active">Manage Blog</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Blog</h3>
                <a href="<?=base_url('blog/add-blog');?>" class="fa fa-plus" style="color: green;cursor: pointer;">
                </a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="">#SL</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th style="">Action</th>
                    </tr>
                    <?php $i=1; foreach($blog_list as $row){?>
                    <tbody>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?=$row['name'];?></td>
                        <td>
                       <?php
                    if ($row['image']!=null) {
                     ?>
                      <img style="width: 100px;height: 50px" src="<?=base_url('upload/'.$row['image'])?>"/>
                     <?php }else{ ?>

                      <img style="width: 300px;height: 168px" src="<?=base_url('assets/no-image.PNG')?>"/>
                      <?php
                    }
                    ?>
                  </td>
                  <td><a href="<?=base_url('ManageBlog/delete_blog/'.$row['id'])?>" onclick="return confirm('Are you sure? do you want to delete this employee.')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
				  <!--<a href="<?=base_url('blog/edit-blog/'.$row['id'])?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                  
                  <a href="<?=base_url('blog/blog-active-inactive/'.$row['id'].'/'.$row['flag'])?>" onclick="return confirm('<?php echo ($row['flag']==0)?'Are you sure? do you want to active this employee.':'Are you sure? do you want to InActive this employee.';


                     ?>')" class="btn btn-primary"  >
                      <?php
                        echo ''.($row['flag']==0)?'<i style="color: greenyellow;" title="Active" class="fa fa-lightbulb-o"></i>':'<i style="color: red;" title="In Active" class="fa fa-lightbulb-o"></i>'.''
                      ?>
                      
                    </a>-->
                  </td>
                  </tr>
                    </tbody>
                  <?php $i++; } ?>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>

            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

      
    </div><!-- ./wrapper -->