<?php

require('../../configs/database.php');


if (isset($_POST['submit'])) {

    $error = false;
    $error_email = '';
    $error_password = '';

    //ours variables

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

    //Check if all field are not empty

    if (!empty($email) and !empty($password) and !empty($confirmPassword)) {

        //check if the entered email is not exist in database

        $checkEmailExist = $databaseConnexion->prepare('SELECT email from user where email = ?');

        $checkEmailExist->execute(array($email));

        if ($checkEmailExist->rowCount() >= 1) {
            $error = true;
            $error_email = 'Email already taken';
        } else {

            if ($password == $confirmPassword) {

                //Save the User

                $saveUser = $databaseConnexion->prepare('INSERT INTO user(email, password) VALUES(?,?)');
                $saveUser->execute(array($email, sha1($password)));

                if ($saveUser) {
                    // header('location: index.php');
                } else {
                    $error = true;
                    $error_email = 'Error when creatind your account';
                }
            } else {
                $error = true;
                $error_password = 'Password and confirm password are not match';
            }
        }
    } else {
        $error = true;
        $error_email = 'Email required';
        $error_password = 'Password required';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Car rental Project</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>

<body>

    <h1>Register as User</h1>
    <form method="post">
        <?php

        if (isset($error)) { ?>
            <div class="row">
                <div class="error"><?= $error_email ?></div>
                <div class="error"><?= $error_password ?></div>
            </div>
        <?php }

        ?>


        <div class="row">
            <label for="email">Email</label>
            <input type="email" name="email" autocomplete="off" placeholder="email@example.com">
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="row">
            <label for="password">Confirm Password</label>
            <input type="password" name="confirmPassword">
        </div>
        </div>
        <button type="submit" name="submit">Registration as user</button>

        <div class="links">
            <a href="../../index.php" class="link">Back to login</a>

        </div>
    </form>

</body>

</html>

ALTER TABLE professor ADD FOREIGN KEY (dept_id) REFERENCES department(dept_id);
ALTER TABLE semester_course ADD FOREIGN KEY (course_code) REFERENCES course(course_code);
ALTER TABLE semester_course ADD FOREIGN KEY (prof_id) REFERENCES professor(prof_id);
ALTER TABLE enrolled ADD FOREIGN KEY (student_id) REFERENCES student(student_id);
ALTER TABLE enrolled ADD FOREIGN KEY (course_code) REFERENCES course(course_code);
ALTER TABLE enrolled ADD FOREIGN KEY (course_code) REFERENCES semester_course(course_code);


CREATE TABLE professor
(
    professor_id int not null AUTO_INCREMENT,
    professor_name varchar(50) ,
    dept_id int ,
    PRIMARY KEY(professor_id)
);

CREATE TABLE course
(
    course_code varchar(50) not null,
    name varchar(50) ,
    PRIMARY KEY(course_code)
);

CREATE TABLE semester_course
(
    course_code varchar(50) ,
    quarter varchar(50) ,
    year int,
    prof_id int,
    PRIMARY KEY(course_code,quarter,year)
);

CREATE TABLE enrolled
(
    student_id int ,
    course_code varchar(50) ,
    quarter varchar(50) ,
    year int,
    enrolled_at varchar(50),
    PRIMARY KEY(student_id,course_code,quarter,year)
);
