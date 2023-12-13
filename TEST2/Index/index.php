<html>
<head>
<style>
body { background-color: gray }

h1 {font-size: 200px}
</style>
</head>
<body>
<center>
<font color="white">
<h1>Hello From DevOps WebPage!</h1>
</font>
<h1>Hello world</h1>
<p>Kharkiv</p>

<button><a href="secondpage.html">second page</a></button>
<select name="select">
    <!--Supplement an id here instead of using 'name'-->
    <option value="value1">Значение 1</option>
    <option value="value2" selected>Значение 2</option>
    <option value="value3">Значение 3</option>
  </select>
</center>

<?php

echo '<p style="color: red, text-align: center">
    Hello From AWS Elastic Beanstalk WebServer!
    </p>';


echo '<br>Local IP:'.$_SERVER['SERVER_ADDR'];
?>
<script>
	
</script>
</body>
</html>