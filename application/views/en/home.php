<?php
$session_data = $this->session->userdata('logged_in');
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="profile">
            <?php
            echo "Hello <b id='welcome'><i>" . $session_data['email'] . "</i> !</b>";
            echo "<br/>";
            echo "<br/>";
            echo "Welcome to HOME";
            ?>
        </div>
        <b id="logout"><a href="<?php echo $this->config->base_url();?>build/logout">Logout</a></b>
    </body>
</html>
