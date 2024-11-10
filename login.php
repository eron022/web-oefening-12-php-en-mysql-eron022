<div class="jumbotron">
    <h1 class="display-4">Login!</h1>
</div>

<div class="col tegel">
    <form method="POST" action="process_login.php">
        <div class="form-group row">
            <div class="col">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" name="username" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </div>
    </form>
</div>
