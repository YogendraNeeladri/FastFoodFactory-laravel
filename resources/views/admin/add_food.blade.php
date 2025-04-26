<!DOCTYPE html>
<html>
  <head> 
    <!--css-->

      @include('admin.css')

      <style>
        label{
            display:inline-block;
            width:200px;
            color:white;
        }
        .div_deg{
            padding:10px;
        }
      </style>
      </head>
  <body>
        <!--header start-->

              @include('admin.header')

        <!--header ends-->
        <!--sidebar Navigation starts-->

        @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
          <!--body-->

          <form action="{{url('upload_food')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="div_deg">
                <label for="">Food Title</label>
                <input type="text" name="title" required>
            </div>

            <div class="div_deg">
                <label for="">Food details</label>
                <textarea name="details" cols="50" rows="5" required></textarea>
            </div>

            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price" required>
            </div>

            <div class="div_deg">
                <label for="">Image</label>
                <input type="file" name="img" required>
            </div>

            <div class="div_deg">
                <input class="btn btn-warning" type="submit" value="Add Food">
            </div>
          </form>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>