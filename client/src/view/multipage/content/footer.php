<p>&copy; <em>A testpage implemented as a multipage.</em></p>
<p> <? $a = count($_SERVER);
 print("There are ".$a." entries in the array SERVER");

 ?> </p>

 <p>
<?

foreach ($_SERVER as $key => $value) {
  # code...
  print("key ==> ".$key." lenght ==> ". strlen($value));
  print("<br/>");

}
print("<p>");
print("The maximum value is : ");
print_r(max($_SERVER));
print("</p>");
?>
