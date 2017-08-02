<?php
require 'core.php';

if (isset($_GET['action']) && $_GET['action'] == 'login')
{
?>
    <!DOCTYPE html>
    <html>
            <head>
                <meta charset="UTF-8">
                <title></title>
            </head>
        <body>
            <?php
            // put your code here
            ?>
        </body>
    </html>
<?php
}
else if (isset($_GET['action']) && $_GET['action'] == 'logout') 
{
    logout();
    
   
}
    
    
    
    
    




?>


