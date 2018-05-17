Spotweb registration

Hello <?php echo $user['firstname'] . ' ' . $user['lastname'] ?>,

You have just created an account for you <?php echo $settings->get('spotweburl'); ?>.

You can login with the following information:

Username:		<?php echo $user['username']; ?> 
password:		<?php echo $user['newpassword1']; ?> 

Sincerely,
<?php echo $adminUser['firstname'] . ' ' . $adminUser['lastname']; ?>.