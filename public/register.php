<?php
  require_once('../private/initialize.php');

  $first_name = h(isset($_POST['first_name']) ? $_POST['first_name'] : '');
  $last_name = h(isset($_POST['last_name']) ? $_POST['last_name'] : '');
  $email = h(isset($_POST['email']) ? $_POST['email'] : '');
  $username = h(isset($_POST['username']) ? $_POST['username'] : '');
  $errors = array();

  if (is_post_request()) {

    // ideally refactor so not repeating myself
    if (is_blank($first_name)) { // kind of unnecessary since next check encompasses it
      $errors[] = 'Please enter your first name.';
    } elseif (has_length($first_name, array(2, 255))) {
      $errors[] = 'Please enter your first name between 2 and 255 characters.';
    }

    if (is_blank($last_name)) {
      $errors[] = 'Please enter your last name.';
    }  elseif (has_length($last_name, array(2, 255))) {
      $errors[] = 'Please enter your last name between 2 and 255 characters.';
    }

    if (is_blank($email)) {
      $errors[] = 'Please enter your email.';
    } elseif (has_length($email, array(2, 255))) {
      $errors[] = 'Please enter an email between 2 and 255 characters.';
    }

    if (is_blank($username)) {
      $errors[] = 'Please enter your desired username.';
    } elseif (has_length($first_name, array(8, 255))) {
      $errors[] = 'Please enter a username between 2 and 255 characters.';
    }

    has_length($first_name, array(2, 255));
    has_valid_email_format($email);

    if (count($errors) == 0) {
      insert($first_name, $last_name, $email, $username);
      redirect_to('registration_success.php');
    }
  }
?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    echo display_errors($errors);
  ?>

  <form name="htmlform" method="post" action="register.php">
    <table width="450px">
      <tr>
        <td valign="top">
          <label for="first_name">First Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="first_name" value="<?php echo $first_name; ?>" maxlength="50" size="30">
        </td>
      </tr>

      <tr>
        <td valign="top">
          <label for="last_name">Last Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="last_name" value="<?php echo $last_name; ?>" maxlength="50" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="email">Email Address *</label>
        </td>
        <td valign="top">
          <input  type="text" name="email" value="<?php echo $email; ?>" maxlength="80" size="30">
        </td>
      </tr>

      <tr>
        <td valign="top">
          <label for="username">Username *</label>
        </td>
        <td valign="top">
          <input  type="text" name="username" value="<?php echo $username; ?>" maxlength="30" size="30">
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
