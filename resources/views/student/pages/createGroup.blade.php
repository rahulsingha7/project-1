@extends('student.layouts.default')
@section('abcd')

<style type="text/css">
  
body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center">Create Group</h1>
<br/>
<div class="col-sm-12">
    <form class="user">
      <div class="form-group">
         <label for="">No. of Group Members:</label>
                <select class="form-control" id="group_members">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
      </div>
      <div id="alltext"></div>
    </form>
  
   </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.js"
        integrity="sha512-NXopZjApK1IRgeFWl6aECo0idl7A+EEejb8ur0O3nAVt15njX9Gvvk+ArwgHfbdvJTCCGC5wXmsOUXX+ZZzDQw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
 <script  type="text/javascript">
    $(document).ready(function(){
        $("#group_members").change(function(){
          var total = ("#group_members").val();
          var str = '';
          var str1 = '';
          for(var i=1;i<total;i++){
            str += `<input type="text" class="name"></>`;
            str1 += `<input type="number" class="student_id"></>`;
          }
          $("alltext").html(str);
          $("alltext").html(str1);
        })
    });
 </script>
@endsection




