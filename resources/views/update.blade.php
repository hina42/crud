
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



<h1>Update Form</h1>
      <div class="row">   
 
  
        <form class='col-md-6' method="post"action="{{route('update')}}">
        @csrf
        <div class="form-group">
         
          <input type="hidden" value="{{$std['id']}}" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
          <label for="fname">First name</label>
          <input type="text" value="{{$std['firstname']}}"class="form-control" id="fname" name="firstname">
        </div>
        <div class="form-group">
          <label for="lname">Last name</label>
          <input type="text" value="{{$std['lastname']}}" class="form-control" name="lastname"id="lname">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="{{$std['email']}}" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</div>
</div>
    </body>
</html>
