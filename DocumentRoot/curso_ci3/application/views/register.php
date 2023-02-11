<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h1>Register</h1>
                <ul>
                    <?php foreach ($menu as $item) : ?>
                        <li>
                            <a href="<?= $item['url'] ?>">
                                <?= $item['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <?php echo validation_errors(); ?>

                <?php
                echo form_open('register/create', array('method' => 'POST'));
                echo form_label('Name');
                echo form_input('username');
                echo "<br>";
                echo form_label('Email');
                echo form_input(array('type' => 'email', 'name' => 'email'));
                echo "<br>";
                echo form_label('Password');
                echo form_password('password');
                echo "<br>";
                echo form_label('Confirm password');
                echo form_password('c_password');
                echo "<br>";
                echo form_submit(array('value' => 'Submit'));
                echo form_close();
                ?>

                <?= isset($msg) ? $msg : '' ?>
            </div>
        </div>
    </div>
</body>

</html>