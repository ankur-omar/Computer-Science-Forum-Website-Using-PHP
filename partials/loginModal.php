<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login To Smart Forum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action ="/Forum/partials/handlelogin.php" method ="post">
            <div class="modal-body">
              
                    <div class="form-group">
                        <label for="loginEmail">Username</label>
                        <input type="text" class="form-control" id="loginEmail" name ="loginEmail" aria-describedby="emailHelp" placeholder="Enter Your Username">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone 
                             else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="loginpass">Password</label>
                        <input type="password" class="form-control" id="loginpass" name ="loginpass" placeholder ="Enter Your Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                  
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p class ="text-center">Not yet member? <a href="/Forum/index.php">SignUp</a></p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </form>
        </div>
    </div>
</div>