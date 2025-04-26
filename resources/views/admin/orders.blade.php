<!DOCTYPE html>
<html>
  <head> 
    <!--css-->

      @include('admin.css')

      <style>
        table{
            border:1px solid skyblue;
            margin:auto;
            width:900px;
        }
        th{
            color:white;
            font-weight:bold;
            font-size:12px;
            text-align:center;
            background-color:red;
            padding:7px;
        }
        td{
            color:white;
            font-weight:bold;
            text-align:center;
            padding:7px;
        }

        td img{
            width:70px;
            height:auto;
            object-fit:contain;
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
            
          <table >
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Food Title</th>
                <th>Quantity</th>
                <th>Food Price</th>
                <th>Food Image</th>
                <th>Status</th>
                <th>Change Status</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price}}</td>
                <td>
                    <img src="food_img/{{$data->image}}" alt="">
                </td>
                <td>{{$data->delivery_status}}</td>
                <td>
                <!--  <a class="btn btn-info" href="{{url('on_the_way',$data->id)}}">on the way</a> -->

                  <a class="btn btn-danger" href="{{url('delivered',$data->id)}}">Delivered</a>

                  <a class="btn btn-warning" href="{{url('cancelled',$data->id)}}">Cancelled</a>

                </td>
            </tr>
            @endforeach
          </table>

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