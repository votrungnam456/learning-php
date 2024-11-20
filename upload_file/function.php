<?php
// echo "Function upload";

if (!empty($_SERVER['REQUEST_METHOD'])) {
    print_r($_FILES);
    $result = move_uploaded_file($_FILES["file"]["tmp_name"], 'C:/xampp/htdocs/learningPHP/upload_file/upload/' . $_FILES["file"]["name"]);
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if (!empty($_FILES)) {
    //   $errors = [];
    //   if (empty($_FILES['file'])) {
    //     $errors['file']['required'] = 'file is required';
    //   } else {
    //     $file = $_FILES['file'];
    //     $file_name = $file['name'];
    //     $file_tmp = $file['tmp_name'];
    //     $file_size = $file['size'];
    //     $file_error = $file['error'];
    //     $file_type = $file['type'];

    //     $file_ext = explode('.', $file_name);
    //     $file_ext = strtolower(end($file_ext));

    //     $allowed = ['jpg', 'jpeg', 'png', 'gif'];

    //     if (!in_array($file_ext, $allowed)) {
    //       $errors['file']['invalid'] = 'file type is invalid';
    //     }
    //     if ($file_error !== 0) {
    //       $errors['file']['error'] = 'file error';
    //     }
    //     if ($file_size > 1000000) {
    //       $errors['file']['size'] = 'file size must be less than 1MB';
    //     }
    //   }
    //   if (empty($errors)) {
    //     $file_name_new = uniqid('', true) . '.' . $file_ext;
    //     $file_destination = 'uploads/' . $file_name_new;
    //     move_uploaded_file($file_tmp, $file_destination);
    //     echo "file uploaded successfully";
    //   } else {
    //     print_r($errors);
    //   }
    // }
    // }
}
