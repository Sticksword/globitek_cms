# Project 1 - Globitek CMS

Time spent: **11** hours spent in total

Project By: Rupin Bhalla

## User Stories

The following **required** functionality is completed:

- [X] Create a Users Table
  - [X] Define a table "users" for columns id, firstname, lastname, email, username, createdAt
- [X] Create a Page with an HTML Form
  - [X] with text inputs: first_name, last_name, email, username
  - [X] submits to: itself ("public/register.php")
- [X] Detect when the form is submitted
  - [X] If "/public/register.php" is loaded directly, it should display the form.
  - [X] If the form was submitted, it should retrieve the form data.
- [X] Validate form data
  - [X] Validate the presence of all form values.
  - [X] Validate that no values are longer than 255 characters.
  - [X] Validate that first_name and last_name have at least 2 characters.
  - [X] Validate that username has at least 8 characters.
  - [X] Validate that email contains a "@".
- [X] Display form errors if any validations fail.
  - [X] Do not submit the data to the database.
  - [X] Redisplay the form with the submitted values filled in.
  - [X] Report all errors as a list above the form.
- [X] Submit successfully-validated form values to the database.
  - [X] Write an SQL statement which will insert a new record into the globitek.users table using the submitted form values.
- [X] Redirect the user to a confirmation page.
  - [X] Redirect the user to the new page.
- [X] Sanitize all dynamic output for HTML.


The following advanced user stories are optional:

- [X] Bonus 1: Validate that form values contain only whitelisted characters.
  - [X] first_name, last_name: letters, spaces, symbols: - , . '
  - [X] username: letters, numbers, symbols: _
  - [X] email: letters, numbers, symbols: _ @ .

- [X] Bonus 2: Validate the uniqueness of the username.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://imgur.com/VjufbOs.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

Getting everything set up

Bonus 2 and using the right methods. It was easy to do, but you had to use the right methods because some are deprecated
