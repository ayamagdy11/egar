<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>_/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
        }
        ?>  
        <?php
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
        ?>  
        <div id="main">
            <div id="login">
                <h2>login</h2>
                <hr/>
            <form action="#" method="post" enctype="multipart/form-data" id="login">
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
                <label>Password  :</label>
                <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
                <input type="checkbox" name="remember_me"/> Remember Me<br/><br />
                <input type="submit"  id="submitbtn" onclick="SubmitForm('login','egar','login')" data-toggle="modal" data-target=".bs-Login-modal-sm" value=" Login " name="submit"/><br />
            </form>
         <center>
           <a href="<?php echo $this->config->base_url();?>build/forget_pass">forget password</a>
         </center> 
            </div>


        </div>
    </body>
</html>
   <script type="text/javascript">

function SubmitForm(FormID, Controller, FunctionName) {
            // alert("sd");
               $("#"+FormID).unbind('submit').submit(function (event) {
                   
                   var formData = $( this ).serialize();
                   $.ajax({
                            type: 'POST', 
                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        })
                        .done(function (data) {
                            // $("#"+ ResultDivId).html(data);
                        $('<div class="success-order">  </div>').insertBefore('#submitbtn').delay(10000).fadeOut();
                        });
                        event.preventDefault();
                        
                        //$("#"+FormID)[0].reset();
                        // $("#x").modal('toggle');
                    });
                
            }

</script>