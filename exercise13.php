<html>
<body bgcolor="blue"><br>
<?php
$name=["sachin","dhoni","rohitsharma","virat kholi","sanju","aswin","bhumra","jadeja","jadega","rayidu"];

echo "<br><br>";
echo "INDIAN TEAM";
echo "<br><br>
<table border='5px'>
<tr><th>sl no.</th>
<th>player</th>";

for($i=0; $i<10; $i++)
{
$sl=$i+1;

echo "<tr><th>$sl</th>
      <th>$name[$i] </th>
      </tr>";
}
echo "</table>"
?>
</body>
</html>
