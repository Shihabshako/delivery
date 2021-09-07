<?php
    show_sweet_alert('password_reset', '', 'Failed to reset password, try again', '', '', '');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Change Password</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="row justify-content-center my-5 ">
    <div class="login-box ">
        <div class="card ">
            <div class="card-body login-card-body rounded">
            <p class="login-box-msg">Change you password by giving correct current password</p>

            <form action="pages/db_change_password.php" method="POST">
                <div class="input-group mb-3">
                <input type="password" class="form-control" onkeyup="current_password_change(this.value)" placeholder="Current Password" autofocus required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-key"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" onkeyup="new_password_change(this.value)" placeholder="New Password" id="new_password" readonly required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-key"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password"  onkeyup="confirm_password_change(this.value)" id="confirm_password" name="confirm_password" readonly required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-key"></span>
                        </div>
                    </div>
                    
                </div>
                <span id="message"></span>
                <div class="row">
                <div class="col-12">
                    <button type="submit" id="change_password_button" disabled class="btn btn-default btn-block custom-button">Change password</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>

<script>
    function current_password_change(current_password){
        $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                check_current_password: true,
                current_password : current_password
            },
            dataType:"TEXT",
            success:function(response){
                if(response.trim() == 'success'){
                    $('#new_password').attr('readonly', false);
                    $('#new_password').focus();
                }else{
                    $('#new_password').attr('readonly', true);
                }
            }
        })
    }

    function new_password_change(new_password){
        if(new_password != ' '){
            $('#confirm_password').attr('readonly', false);
        }else{
            $('#confirm_password').attr('readonly', true);
        }
    }

    function confirm_password_change(confirm_password){
        var new_password = $('#new_password').val();
        if(new_password == confirm_password){
            $('#change_password_button').attr('disabled', false);
            $('#message').text('You can now change you password');
            $('#message').attr('class','text-success');
        }else{
            $('#message').text('You need to match new password and confirm password');
            $('#message').attr('class','text-danger');
        }
    }
</script>