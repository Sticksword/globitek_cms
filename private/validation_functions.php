<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return $value === '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $len = strlen($value);
    return $len >= $options[0] && $len <= $options[1];
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    return strpos($value, '@') !== false && preg_match('/\A[0-9A-Za-z\_\.\@]+\Z/', $value);;
  }

  function has_valid_name_format($value) {
  	return preg_match('/\A[A-Za-z\s\-\,\.\']+\Z/', $value);
  }

  function has_valid_username_format($value) {
  	return preg_match('/\A[0-9A-Za-z\_]+\Z/', $value);
  }

  function checkDuplicateUsername($value, $db) {
	  $sql = "SELECT * FROM users WHERE username = '$value'";
	  $result = db_query($db, $sql);
	  $get_rows = mysqli_num_rows($result);

	  return $get_rows >= 1;
  }

?>
