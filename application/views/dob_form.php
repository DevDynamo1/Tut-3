<!DOCTYPE html>
<html>
<head>
    <title>Enter Date of Birth</title>
</head>
<body>
    <h2>Enter Your Date of Birth</h2>
    <form method="post" action="<?php echo site_url('agecalculator/calculate_age'); ?>">

        <input type="date" name="dob">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
