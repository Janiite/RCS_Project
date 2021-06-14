<?php 

require_once 'components/navbar.php';


?>
<div class="container">
    <div class="wrapper">
        <h1>Register</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="login.php">Login</a>

        </form>
    </div>

</div>

<?php

require_once 'components/footer.php'

?>