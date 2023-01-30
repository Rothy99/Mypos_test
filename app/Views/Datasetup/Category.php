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
              <button  class="btn btn-primary float-right ml-2" onclick="add_book()"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Add New</button>

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
                  <tbody>
                  <?php

                if($category)
                {
                    foreach($category as $row)
                    {
                        echo '
                        <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["cate_name"].'</td>
                            <td>'.$row["des"].'</td>
                           
                            <td>
                            <button type="button" class="btn btn-info badge badge-info"  onclick="edit_category('.$row['id'].')" >Edit</button>
                             <button type="button" class="btn btn-danger badge badge-danger"  onclick="delete_category('.$row['id'].')" >Delete</button>
                        </td>
                           
                          
                        </tr>';
                    }
                }

                ?>
                
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog modal-lg ">
<div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title" id="exampleModalScrollableTitle">Add New Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body ">
               <form  action="#" id="form"  class="form-horizontal">
                  <div class="row">
                  <div class="col-md-12 col-sm-6 col-xs-6">
                   <div class="form-group">
                     <label for="">Category Name:</label>
                     <input type="hidden" class="form-control" id="txtid" name="txtid" placeholder="Enter Category Code" require >
                     <input type="text" class="form-control" id="cate_name" name="cate_name" placeholder="Enter Category Name" >
                  </div>
                  </div>
                 
                    <div class="col-md-12 col-sm-6 col-xs-6">
                   <div class="form-group">
                     <label for="">Category Description:</label>
                     <input type="text" class="form-control" id="des" name="des" placeholder="Enter Category Description" >
                  </div>
                  </div>
                  
                 </div>
                 <div class="modal-footer">
            <button type="submit" class="btn btn-success" onclick="save()" id="btnSaveIt">Save</button>
            <button type="button"  class="btn btn-default" id="btnCloseIt" data-dismiss="modal">Close</button>
          </div>
              </form>
               
                </div>
  </div>
</div>
</div>
</div>

<script src="<?php echo base_url()?>/plugins/jquery/jquery.min.js"></script>
            <script>
              var save_method; //for save method string
    
              function add_book()
              {
              save_method = 'add';
              $('#form')[0].reset(); // reset form on modals
              $('#exampleModal').modal('show'); // show bootstrap modal
              //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
               }
               function edit_category(id)
               {
               save_method = 'update';
             $('#form')[0].reset(); // reset form on modals
            <?php header('Content-type: application/json'); ?>
      //Ajax Load data from ajax
             $.ajax({
             url : "<?php echo site_url('edit-category')?>/" + id,
             type: "GET",
             dataType: "JSON",
             success: function(data)
            {
            console.log(data);
            $('[name="txtid"]').val(data.id);
            $('[name="cate_name"]').val(data.cate_name);
            $('[name="des"]').val(data.des);
           
            $('#exampleModal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Category'); // Set title to Bootstrap modal title

            },
             error: function (jqXHR, textStatus, errorThrown)
            {
            console.log(jqXHR);
            alert('Error get data from ajax');
           }
           });
           }
   function save()
    {
    	var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('Save-category')?>";
      }
      else
      {
        url = "<?php echo site_url('update-category')?>";
      }
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",        
            success: function(data){
               //if success close modal and reload ajax table
               $('#exampleModal').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Adding | update data');
           }
        });
    }
     function delete_category(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('Ddelete-category')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
            window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
            alert('Error deleting data');
            }
        });
      }
    }
    
   
            </script>
            <script>
                $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#form').validate({
    rules: {
      cate_name: {
        required: true,
        cate_name: true,
      },
    //   password: {
    //     required: true,
    //     minlength: 5
    //   },
    //   terms: {
    //     required: true
    //   },
    // },
    },
    messages: {
      cate_name: {
        required: "Please enter a email address",
        cate_name: "Please enter a valid email address"
      },
    //   password: {
    //     required: "Please provide a password",
    //     minlength: "Your password must be at least 5 characters long"
    //   },
    //   terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
    
  });
});

            </script>
<?= $this->endSection() ?>