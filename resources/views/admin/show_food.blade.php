<!DOCTYPE html>
<html>
  <head> 
    <!--css-->

      @include('admin.css')

      <style>
        table{
            border:1px solid skyblue;
            margin:auto;
            width:800px
        }

        th{
            background:skyblue;
            color:white;
            padding:10px;
            margin:10px;
        }

        td{
            color:white;
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
<h1>All Foods</h1>
                <div>
                    <table>
                        <tr>
                            <th>Food Title</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->detail}}</td>
                            <td>{{$data->price}}</td>
                            <td>
                                <img width="100" src="food_img/{{$data->image}}" alt="loading"></td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('delete_food',$data->id)}}">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{url('update_food',$data->id)}}">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

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