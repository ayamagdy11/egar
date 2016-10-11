<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>_/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
      
            <form action="<?php echo $this->config->base_url();?>build/check_forget_pass" method="post" enctype="multipart/form-data" id="admin_login">
                <?php
                echo "<div class='error_msg'>";
                if (isset($error_message)) {
                    echo $error_message;
                }
                echo validation_errors();
                echo "</div>";
                ?>
                <label>Email  :</label>
                <input type="text" name="email" id="email" placeholder="email"/><br /><br />
                <label>last name  :</label>
                <input type="text" name="last_name" id="last_name" placeholder="last name"/><br/><br />
                <input type="submit" value=" submit " name="submit"/><br />
            </form>
            </div>


        </div>
    </body>
</html>