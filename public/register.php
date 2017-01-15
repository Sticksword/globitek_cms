<?php
  require_once('../private/initialize.php');

  // Set default values for all variables the page needs.

  // if this is a POST request, process the form
  // Hint: private/functions.php can help

    // Confirm that POST values are present before accessing them.

    // Perform Validations
    // Hint: Write these in private/validation_functions.php

    // if there were no errors, submit data to database

      // Write SQL INSERT statement
      // $sql = "";

      // For INSERT statments, $result is just true/false
      // $result = db_query($db, $sql);
      // if($result) {
      //   db_close($db);

      //   TODO redirect user to success page

      // } else {
      //   // The SQL INSERT statement failed.
      //   // Just show the error, not the form
      //   echo db_error($db);
      //   db_close($db);
      //   exit;
      // }

?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
  ?>

  <form name="htmlform" method="post" action="register.php">
    <table width="450px">
      <tr>
        <td valign="top">
          <label for="first_name">First Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="first_name" maxlength="50" size="30">
        </td>
      </tr>

      <tr>
        <td valign="top">
          <label for="last_name">Last Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="last_name" maxlength="50" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="email">Email Address *</label>
        </td>
        <td valign="top">
          <input  type="text" name="email" maxlength="80" size="30">
        </td>
      </tr>

      <tr>
        <td valign="top">
          <label for="telephone">Username *</label>
        </td>
        <td valign="top">
          <input  type="text" name="telephone" maxlength="30" size="30">
        </td>
      </tr>

      <tr>
        <td colspan="2" style="text-align:center">
          <input type="submit" value="Submit">
        </td>
     </tr>
    </table>
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
