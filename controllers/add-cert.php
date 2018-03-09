<?php
require '../core/db_connect.php';


$errors = array();
$data = array();


  if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
  }

  if (empty($_POST['id'])) {
    $errors['id'] = 'Certificate ID is required.';
  }

  if (empty($_POST['course'])) {
    $errors['course'] = 'Course is required.';
  }

  if (empty($_POST['date'])) {
    $errors['date'] = 'Date is required.';
  }

  //Checking if ID exists in the database

  $checkIdExists = 'SELECT * FROM issuedCert WHERE id = :id';
  $check = $dbConnect->prepare($checkIdExists);
  $pm = [
    'id' => $_POST['id']
  ];
  $check->execute($pm);

  if($check->fetch()){
    $errors['idExists'] = "Certificate ID is already assigned.";
  }

//Return a response or take an action if all the validations are met
  if (!empty($errors)) {
    //if the error array is not empty, return its error message(s)
    $data['success'] = false;
    $data['errors'] = $errors;
  } else {
    //if there are no errors insert data into the database
    $query = 'INSERT INTO issuedCert (name, id, course, date) VALUES (:name, :id, :course, :date)';

    $statement = $dbConnect->prepare($query);
    $params = [
      'name' => $_POST['name'],
      'id' => $_POST['id'],
      'course' => $_POST['course'],
      'date' => $_POST['date']
    ];

    $statement->execute($params);

    //Return success message
    $data['success'] = true;
    $data['message'] = 'Certificate details have been added successfully!';

  }

  //Return all our data to an AJAX call
echo json_encode($data);
