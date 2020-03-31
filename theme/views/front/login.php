<body>



  <div class="login">
    <form action="?login" method="post">

      <div class="container">
        <?php   displayMessage($message); ?>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required="true">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required="true">

        <button type="submit" id="Login" name="Login">Login</button>
      </div>
    </form>
  </div>



</body>
</html>
