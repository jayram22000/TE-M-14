<?php

// Function to validate menu form data
function validateMenuForm($name, $description, $price, $image_url) {
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($description)) {
        $errors[] = "Description is required";
    }

    if (empty($price)) {
        $errors[] = "Price is required";
    } elseif (!is_numeric($price)) {
        $errors[] = "Price must be a number";
    }

    if (empty($image_url)) {
        $errors[] = "Image URL is required";
    } elseif (!filter_var($image_url, FILTER_VALIDATE_URL)) {
        $errors[] = "Image URL is not valid";
    }

    return $errors;
}

// Function to validate order form data
function validateOrderForm($menu_id, $user_id, $quantity, $status) {
    $errors = array();

    if (empty($menu_id)) {
        $errors[] = "Menu ID is required";
    } elseif (!is_numeric($menu_id)) {
        $errors[] = "Menu ID must be a number";
    }

    if (empty($user_id)) {
        $errors[] = "User ID is required";
    } elseif (!is_numeric($user_id)) {
        $errors[] = "User ID must be a number";
    }

    if (empty($quantity)) {
        $errors[] = "Quantity is required";
    } elseif (!is_numeric($quantity)) {
        $errors[] = "Quantity must be a number";
    }

    if (empty($status)) {
        $errors[] = "Status is required";
    }

    return $errors;
}

// Function to validate reservation form data
function validateReservationForm($name, $email, $phone, $date) {
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }

    if (empty($phone)) {
        $errors[] = "Phone is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Phone is not valid";
    }

    if (empty($date)) {
        $errors[] = "Date is required";
    } elseif (strtotime($date) < strtotime(date('Y-m-d'))) {
        $errors[] = "Date must be a future date";
    }

    return $errors;
}

?>