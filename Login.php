<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <link rel="stylesheet" href="styleslog.css">
        <style>
            html,body
            {
                font-family: 'Poppins', sans-serif;
                display: grid;
                height: 100%;
                width: 100%;
                place-items: center;
                background-image: url("whatsapp.jpg");
            }
        </style>
        <title>Zaisa</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Login 
            </div>            
            <div class="form-inner">
                <form name="form1" action="loginaction.php">
                    <div class="field">
                        <br><input type="text" placeholder="Username" name="username" pattern="[a-zA-Z]{50}+" title="XXX XXX" required>
                        <br><br><input type="password" placeholder="Password" name="pass" required>
                    </div><br><br><br><br><br>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div> 
            <b><center><h4>New to Zaisa</h4></center></b>
            <div class="form-inner">
                <form action="Signup.php">
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Sign up">
                    </div>
                </form>
            </div>         
        </div>
    </body>    
</html>
