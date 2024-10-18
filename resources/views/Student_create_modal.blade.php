<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Modal -->
 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="" method='post' id='#student-form' >
    @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="studentName">Name</label>
      <input type="text" id='name' name='name' class="form-control" id="studentName" placeholder="Enter your name" >
    </div>

    <div class="form-group">
      <label for="studentEmail">Email address</label>
      <input type="email" id='email' name='email' class="form-control" id="studentEmail" placeholder="Enter your email" >
    </div>

    <div class="form-group">
      <label for="studentAge">Age</label>
      <input type="number" id='age'  name='age' class="form-control" id="studentAge" placeholder="Enter your age" >
    </div>

    <div class="form-group">
      <label for="course">Course</label>
      <select class="form-control" id='course' name='course' id="course" >
        <option value="" disabled selected>Select your course</option>
        <option value="science">Science</option>
        <option value="arts">Arts</option>
        <option value="commerce">Commerce</option>
      </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id='student_submit'>Save</button>
      </div>
    </div>
  </div>
  </form>
</div>
@include('post_js')
</body>
</html>