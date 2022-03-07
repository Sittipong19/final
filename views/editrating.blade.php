<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  
  <div class="container-scroller">


  <form  style="position: relative; top: 60px; right: -150px" action="{{url('/editratingset',$data->id)}}" method="Post" enctype="multipart/form-data">

    @csrf

    <div>
        <label>ชื่อ</label>
        <input style="color:blue;" type="text" name="rat_name" required="" value="{{$data->rat_name}}"> 
    </div>

    <br>

    <div>
        <input class="btn btn-primary"  type="submit" value="บันทึก"> 
    </div>

    </form>

  </div>

    
  </body>
</html>