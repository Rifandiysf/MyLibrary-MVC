<?php 

if(!defined('SECURE_ACCESS')){
    die('DIRECT IS NOT PERMITTED');
}

include('templates/header.php') ?>

<div class="main-content login-panel login-panel-2">
    <h3 class="panel-title">Welcome To PI School LIBRARY</h3>
    <div class="login-body login-body-1">
        <div class="d-flex justify-content-center align-items-center">
            <a href="/book" class="text-center">
                <i class="fa-duotone fa-book"></i>
                <h6>Book Collection</h6>
            </a>
        </div>
    </div>
    <div class="login-body login-body-1 my-2">
        <div class="d-flex justify-content-center align-items-center">
            <a href="/borrowing" class="text-center">
                <i class="fa-duotone fa-user"></i>
                <h6>Borrowing</h6>
            </a>
        </div>
    </div>
    <div class="login-body login-body-1 my-2">
        <div class="d-flex justify-content-center align-items-center">
            <a href="/return" class="text-center">
                <i class="fa-duotone fa-user"></i>
                <h6>Return Book</h6>
            </a>
        </div>
    </div>
    <div class="login-body login-body-1 my-2">
        <div class="d-flex justify-content-center align-items-center">
            <a href="/membership" class="text-center">
                <i class="fa-duotone fa-users"></i>
                <h6>Membership</h6>
            </a>
        </div>
    </div>

    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">PI Shool LIBRARY</span></p>
    </div>
</div>

<?php include('templates/footer.php') ?>