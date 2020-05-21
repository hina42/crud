
<!DOCTYPE html>
    <head>
        <title>Crud</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
 

<div class="container">


<h1>Add Form</h1>
      <div class="row">   

        <form  class='col-md-6' method="post"action="{{route('store')}}">
        @csrf
        <div class="form-group">
          <label for="fname">First name</label>
          <input type="text" class="form-control" id="fname" name="firstname">
        </div>
        <div class="form-group">
          <label for="lname">Last name</label>
          <input type="text" class="form-control" id="lname"name="lastname">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email"name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


 <div class='col-md-6'>
<table class="table ">
  <thead>
    <tr>
    <th >ID</th>
      <th>Firstname</th>
      <th >Lastname</th>
      <th >Email</th>
      <th>Action</th>
        </tr>
      </thead>
      <tbody>
     @foreach($data as $student)
     <tr class='{{$student->id}}' >
    <td >{{$student->id}} </td>
    <td >{{$student->firstname}} </td>
    <td >{{$student->lastname}} </td>
    <td>{{$student->email}} </td>
    <td><a id="{{$student->id}}" href="delete?id={{$student->id}}" class="del btn btn-danger" >Delete</a></td>
   <td> <a href="show?id={{$student->id}}"class="btn btn-success" >Update</a></td>
    </tr>
     @endforeach
      </tbody>
</table>

</div>
</div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $(".del").on('click',function(event){
   event.preventDefault();
var delid = $(this).attr('id'); 
alert(delid);
$( "."+delid ).empty();
$.get('delete',{id:delid},function(data){
  alert(data);
});
});



//add form

$("form").on('submit',function(event){
event.preventDefault(); 
$.ajax({
    url:"store",
    method:"POST",
    data:$('form').serialize(),
    success:function(data)
    {  alert(data);
    }
   });
  });



// $.ajax({
//     url:"store",
//     method:"POST",
//     data:$('form').serialize(),
//     success:function(data)
//     {  alert(data);
//     }
//    });
//   });



});
</script>

</html>
