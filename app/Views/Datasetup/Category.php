<?= $this->extend('Layouts\master') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cateogry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url()?>">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Category of product list</h3>

              <div >
             
              <button  class="btn btn-primary float-right ml-2" data-toggle="modal" data-target="#cateogryModel"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Add New</button>

              </div>
            </div>
             
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody class="cetegorydata">
                 
                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="cateogryModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
<div class="modal-content">

            <div class="modal-header bg-secondary">
              <h4 class="modal-title" id="exampleModalScrollableTitle">Add New Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body ">
               <!-- <form  action="#" id="form"  class="form-horizontal"> -->
                  <div class="row">
                  <div class="col-md-12 col-sm-6 col-xs-6">
                   <div class="form-group">
                     <label for="">Category Name:</label><span id="error_catename" class="text-danger ms-3"></span>
                     <input type="hidden" class="form-control" id="txtid" name="txtid" placeholder="Enter Category Code" require >
                     <input type="text" class="form-control catename"  placeholder="Enter Category Name" >
                  </div>
                  </div>
                 
                    <div class="col-md-12 col-sm-6 col-xs-6">
                   <div class="form-group">
                     <label for="">Category Description:</label>
                     <input type="text" class="form-control des" placeholder="Enter Category Description" >
                  </div>
                  </div>
                  
                 </div>
                 <div class="modal-footer justify-content-between">
           
            <button type="button"  class="btn btn-default"  data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success category-save"  >Save</button>
          </div>
              </form>
               
                </div>
  </div>
</div>
</div>
</div>
<?= $this->section('script') ?>
<script src="<?php echo base_url()?>/plugins/jquery/jquery.min.js"></script>
     
<script>
  $(document).ready(function () {
    loadcategory();
    $(document).on('click','.category-save', function () {

     if($.trim($('.catename').val()).length ==0){
        error_catename = 'Please Enter Category Name';
        $('#error_catename').text(error_catename);
     }else{
      error_catename = '';
        $('#error_catename').text(error_catename);
     }
      if(error_catename !=''){
        return false;
      }else{
        var data = {
            'catename':$('.catename').val(),
            'des':$('.des').val(),
        };
        $.ajax({
          method: "POST",
          url: "/Save-category",
          data: data,
         
          success: function (response) {
            // $('#cateogryModel').modal('hide');
            $('#cateogryModel').modal('hide');
            // $('#cateogryModel').find('input').val('');
            alertify.set('notifier','position','top-right');
            alertify.success(response.status);
            
          }
        });
      }
    });
    
  });
  function loadcategory()
  {
    $.ajax({
      method: "GET",
      url: "/get-category",
      // data: "data",
      // dataType: "dataType",
      success: function (response) {
        $.each(response.category, function(key, value) {
          $('.cetegorydata').append('<tr>\
          <td>'+value['id']+'</td>\
          <td>'+value['cate_name']+'</td>\
          <td>'+value['des']+'</td>\
          <td>\
          <button type="button" class="btn btn-info badge badge-info" >Edit</button>\
          <button type="button" class="btn btn-danger badge badge-danger">Delete</button>\
          </td>\
          </tr>');
      });
        
      }
    });
  }

            </script>
            
              
           
            <?= $this->endSection() ?>
<?= $this->endSection() ?>