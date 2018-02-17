<?php include "inc/header.php";?>


    <div class="panel panel-info">
        <div class="panel-heading text-center">Contact us</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-4">
            <?php
            if (isset($_POST['submit'])) {
            
              if ($_POST['name'] == "") {
                echo "<div class='alert alert-danger'>
                <strong>Error!</strong> Field must not be empty!! Give your Name.
                </div>";
              }
              elseif($_POST['email'] == "") {
                echo "<div class='alert alert-danger'>
                <strong>Error!</strong> Field must not be empty!! Give your E-mail.
                </div>";
              }
              elseif($_POST['message'] == "") {
                echo "<div class='alert alert-danger'>
                <strong>Error!</strong> Field must not be empty!! Please write your Message.
                </div>";
              }
              else {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                $sql = "INSERT INTO `contact` (name, email, text)
                VALUES ('$name','$email','$message')";
                $query = mysqli_query($con, $sql);

                echo "<div class='alert alert-success'>
              <strong>Success!</strong>Your Message send successful.
            </div>";
              }
              
            }
            ?>
              <form action="" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" placeholder="Your full Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" placeholder="Your E-mail" class="form-control">
                  </div>
                    <div class="form-group message">
                        <label for="message">Message:</label>
                        <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    <input type="submit" name="submit" value="Send" class="btn btn-primary">
              </form>
            </div>
            <div class="col-sm-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10328.605449730554!2d90.41098680426488!3d23.757594788080066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b87ebb0ce6ab%3A0x1b0bdee5d30b33b3!2zMjPCsDQ1JzI3LjYiTiA5MMKwMjQnNTkuMSJF!5e0!3m2!1sen!2sbd!4v1517510740771" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
    </div>


<?php include "inc/footer.php";?>