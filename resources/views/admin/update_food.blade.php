<!DOCTYPE html>
<html>
  <head> 
    <!--css-->

    <base href="/public">

      @include('admin.css')

      <style>
        .div_deg{
            padding:10px;
        }
        label{
            display:inline-block;
            width:200px;
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
          <h1>Update Food</h1>
          <form action="{{url('edit_food',$data->id)}}" method="Post" enctype="multipart/form-data">
            @csrf

                <div class=div_deg>
                    <label for="">Food Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>

                <div class=div_deg>
                    <label for="">Details</label>
                    <textarea name="details" id="">{{$data->detail}}</textarea>
                </div>

                <div class=div_deg>
                    <label for="">Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                </div>

                <div class=div_deg>
                    <label for="">Current Image</label>
                    <img width="100px" src="food_img/{{$data->image}}" alt="">
                </div>

                <div class=div_deg>
                    <label for="">Change Image</label>
                    <input type="file" name="image">
                </div>

                <div class=div_deg>
                    <input class="btn btn-warning" type="submit" value="update">
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