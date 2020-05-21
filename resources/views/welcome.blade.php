
<!DOCTYPE html>
    <head>
        <title>Crud</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
 

<div class="container">

<!-- Form -->

        <h1>Form</h1>
      <div class="row">            
        <form class='col-md-6' method="post" action="{{route('store')}}">
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


<!-- Table -->

<div class='col-md-6'>
<table class="table ">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $student)
        <tr>
        <td>{{$student->id}}</td>
          <td>{{$student->firstname}}</td>
          <td>{{$student->lastname}}</td>
          <td>{{$student->email}}</td>
          <a href="delete?id={{$student->id}}" class="btn btn-danger" >Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
</table>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>


<h1>Form</h1>
      <div class="row">            
        <form class='col-md-6' method="post" action="{{route('update')}}">
        @csrf
        <div class="form-group">
          <label for="fname">ID</label>
          <input type="text" class="form-control" id="id" name="id">
        </div>
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
</div> 
</div>
               

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </body>
</html>
