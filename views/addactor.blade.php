<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  
  <div class="container-scroller">


  <form  style="position: relative; top: 60px; right: -150px" action="{{url('uploadactor')}}" method="Post" enctype="multipart/form-data">

    @csrf

    <div>
        <label>ชื่อ</label>
        <input style="color:blue;" type="text" name="act_name" required="" placeholder="Enter name"> 
    </div>

    <div>
        <label>นามสกุล</label>
        <input style="color:blue;" type="text" name="act_lname" required="" placeholder="Enter name"> 
    </div>

    <div>
        <label>เพศ</label>
        <input style="color:blue;" type="text" name="act_gender" required="" placeholder="Enter name"> 
    </div>

    <br>

    <div>
        <input class="btn btn-primary"  type="submit" value="บันทึก"> 
    </div>

    </form>

  </div>

    
  </body>
</html>