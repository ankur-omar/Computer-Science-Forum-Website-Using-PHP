<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SIGNUPModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sIGNUPModalLabel">Sign Up For Smart Forum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action ="/Forum/partials/handlesignup.php" method ="post">
      <div class="modal-body">

           
              
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="SignupEmail" name ="SignupEmail" aria-describedby="emailHelp" placeholder ="Enter Your Username"> 
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>

                    <div class="form-group">
                        <label for="email1">Email</label>
                        <input type="email" class="form-control" id="email" name ="email" aria-describedby="emailHelp" placeholder ="Enter Your Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="Signuppassword" name ="Signuppassword"  placeholder ="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="Confirmpassword" class="form-control" id="Signupcpassword" name ="Signupcpassword" placeholder ="Re-Type Your Password">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                
            </div>
            <p class ="text-center">Already a member? <a href="/Forum/index.php"> Login</a></p>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>