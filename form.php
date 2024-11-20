<?php
if (!empty($_POST)) {
    // print_r($_POST);
    $errors = [];
    if (empty($_POST["name"])) {
        $errors['name']['required'] = 'name is required';
    } else {
        if (strlen($_POST['name']) < 4) {
            $errors['name']['min_length'] = 'name must be at least 4 characters';
        }
    }
    if (empty($_POST['email'])) {
        $errors['email']['required'] = 'email is required';
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email']['invalid'] = 'email is invalid';
        }
        // else{
        //   $errors['email']['invalid'] = 'email is invalid';
        // }
    }
    if (empty($errors)) {
        echo "form submitted successfully";
    } else {
        print_r($errors);
    }
}
?>

<form method="post">
    <input type="text" name="name" placeholder="name"></br>
    <?php
    if (!empty(($errors['name']))) {
        foreach ($errors['name'] as $key => $value) {
            echo $value;
        }
    }
    echo '</br>';
    ?>
    <input type="text" name="email" placeholder="email"></br>
    <?php
    if (!empty($errors['email'])) {
        foreach ($errors['email'] as $key => $value) {
            echo $value;
        }
    }
    echo '</br>';
    ?>

    <input type="submit"></br>
</form>
<?php
// echo "<br/>";
// if(isset($_POST)){
//   print_r($_POST);
// }
// echo "<br/>";
// print_r($_GET);
// echo "<br/>";
// 
?>