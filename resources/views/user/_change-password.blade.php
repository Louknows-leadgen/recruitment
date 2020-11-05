<div class="card acnt-tabcontent d-none change-password">
	<div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <div><h5>Change Password</h5></div>
            </div>  
        </div>
    </div>
    <div class="card-body">
    	<div class="row">
    		<div class="col-md-12">

    			<form class="password-update" action="{{ route('user.update-password') }}">

    				<div class="row">
    					<div class="col-md-12">
        					<div class="success-msg"></div>
        				</div>
    				</div>

        			<div class="form-group row">
                        <label for="current_password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                        <div class="col-md-6">
                            <input id="current_password" type="password" class="form-control" name="current_password" required autocomplete="off">

                            <span class="current_password
                            			 invalid-feedback">
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password" class="col-md-4 col-form-label text-md-right">New Password</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="off">

                            <span class="new_password invalid-feedback"></span>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>

                        <div class="col-md-6">
                            <input id="confirm_password" type="password" class="form-control" name="confirm_password" required autocomplete="off">

                            <span class="confirm_password
                            			 invalid-feedback">
                            </span>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" 
                            		class="btn btn-primary">
                                Confirm
                            </button>
                    </div>
                </form>
    		</div>
    	</div>
    </div>
</div>