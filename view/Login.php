<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <?php require_once('Resources.php') ?>
        <Link href="/view/resources/css/Login.css" rel="stylesheet">
    </head>
    <body>
        <div id="login-container" class="container">
            <div id="login-content" class="panel panel-default col-xs-12 col-sm-8 col-md-4">
                <div class="panel-body">
                    <h1>Please login</h1>
                    <form id="login-form" method="POST" action="/controllers/Login">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <button class="btn btn-primary btn-lg">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
