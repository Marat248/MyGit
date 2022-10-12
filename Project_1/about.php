<?php
    $title = "About us";
    require "blocks/header.php";
?>
<div class="container mt-2">
    <h1>About us</h1>

    <form action="check_get.php" method="get">
        <input type="text" name="username" placeholder="Enter your name" class="form-control"><br>
        <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Enter your message"></textarea><br>
        <input type="submit" value="Send" class="btn btn-success">
    </form>
</div>

<?php
    require "blocks/footer.php";
?>