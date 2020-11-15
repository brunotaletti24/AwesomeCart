<form method="POST" action="../../Backend/Pages/settings.php">
    <input type="text" placeholder="First name" name="firstname" value="<?php echo $_SESSION["firstname"]; ?>">
    
    <input type="text" placeholder="Last name" name="lastname" value="<?php echo $_SESSION["lastname"]; ?>">
    
    <input type="text" placeholder="Username" name="username" value="<?php echo $_SESSION["username"]; ?>">
    
    <input type="text" placeholder="Email" name="email" value="<?php echo $_SESSION["email"]; ?>">
    
    <input type="text" placeholder="Phone number" name="phone" id="phone" value="<?php echo $_SESSION["phone"]; ?>">
    
    <button class="btn btn-purple btn-block" type="submit">Change</button>
         
    <a href="#">
        <button class="btn btn-red">Delete my account</button>
    </a>

    <script src="../Js/phone.js"></script>
</form>
