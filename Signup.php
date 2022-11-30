<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <link rel="stylesheet" href="styleslog.css">
        <title>Zaisa</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Dear Customer,
            </div>
            <div class="title">
                Welcome to Zaisa
            </div>
            <div class="form-inner">
                <form name="form1" action="signaction.php">
                    <div class="field">
                        <br><input type="text" placeholder="Username" name="username" pattern="[a-zA-Z ]+" title="XXX XXX" required>
                        <br><br><input type="password" placeholder="Set Password" name="pass" required>
                        <br><br><input type="text" placeholder="E-Mail" name="mail" pattern="[A-Za-z .0-9]{30}[@][[A-Za-z.]{20}+" required>
                    </div><br><br><br><br><br><br><br><br><br>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </body>    
</html>
