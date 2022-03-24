<!-- Sign In Modal Start here -->

<!-- Modal -->
<div class="modal fade mt-5" id="signinModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary text-white text-uppercase">
                Sign In
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="form-actions/verify-account.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="mr-auto" href="#">Forgot Password?</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="signin">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Sign In Modal Ends here -->

<!-- Post Job Modal Start here -->

<!-- Modal -->
<div class="modal fade mt-5" id="postjobModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-danger text-white text-uppercase">
                Register Now!
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                
            </div>
            <form action="form-actions/verify-account.php" method="POST">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="company name">Company Name:</label>
                            <input type="text" class="form-control" name="companyName">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="passowrd">Password:</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="con-pwd">Confirm Password:</label>
                            <input type="password" class="form-control" name="con-password">
                        </div>
                </div>
                <div class="modal-footer">
                    <a class="mr-auto" href="#" data-toggle="modal" data-target="#signinModal" data-dismiss="modal">Already have an account? Click here</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="registerSubmit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Post Job Modal Ends here -->
