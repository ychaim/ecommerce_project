<div class="modal fade sign-in" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Sign In</h4>
      </div>
      <div class="modal-body">
        <form action="/signIn" method="post">
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="e.g. barack.obama@gmail.com">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <input type="submit" class="btn btn-info" value="Sign In">
        </form>
      </div>
      <div class="modal-footer">
        <a type="submit" data-toggle="modal" data-target=".register-user" data-dismiss="modal" class="pull-left">Don't have an account? Sign up today!</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade upload-photo" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Image Upload</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <form action="/upload_photo" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload">
            <p class="help-block">Choose a file to upload.</p>
            <input type="hidden" name="action" value="upload_photo">
            <input type="hidden" id="passId" name="item_id" value="">
        </div>
            <input type="submit" class="btn btn-info" value="Submit">
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <p>This is the footer</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade register-user" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Register Now</h4>
      </div>
      <div class="modal-body">
        <form action="/register" method="post">
          <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="e.g. barack.obama@gmail.com">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
          </div>
          <input type="submit" class="btn btn-info" value="Register">
        </form>
      </div>
    </div>
  </div>
</div>
