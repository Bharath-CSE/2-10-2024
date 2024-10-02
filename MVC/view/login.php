<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login</title>
    <style>
        .form_align
        {
            width: 500px;
            margin: 0px auto;
        }
    </style>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body style='font-family: arial;'>
    <div class='container mt-5'>
        <form method='post' action='index.php?mod=student&view=login' class='form_align'>
            <div class='form-group'>
                <label><b>
                        Username:
                    </b>
                </label><br>
                <input type='text' class='form-control' name='username' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Password:
                    </b>
                </label><br>
                <input type='text' class='form-control' name='password' required>
            </div><br>
            <input type='submit' class='btn btn-primary' name='submit'><br>
        </form>
    </div>
</body>
</html>