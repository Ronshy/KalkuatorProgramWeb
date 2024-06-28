<?php
//opAritmatik
$operand1=$_REQUEST['operand1'];
$operand2=$_REQUEST['operand2'];
$operator=$_REQUEST['operator'];

//rumus perhitungan
$perhitungan = $operand1. $operator. $operand2;
eval ("\$hasil = $perhitungan;");

//add CSS styles
echo "<style>
    body {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        background-color:grey;
    }
    table{
        color: black;
        background-color: aliceblue;
        size: 30px;
        border: 2px solid #333;
        border-collapse: collapse;
        border-radius: 5px;
        overflow: hidden;
    }
    th, td {
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #333;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    input[type=\"text\"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 5px;
        margin-bottom: 10px;
    }
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 5px;
        margin-bottom: 10px;
    }
    input[type=\"submit\"] {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }
    input[type=\"submit\"]:hover {
        background-color: #555;
    }
</style>";

echo "<h2>Hasil Perhitungan</h2>";
echo "<table width=\"50%\" border=\"1\">";
echo "<tr>";
echo "<th width=\"30%\">";
echo "<div align=\"center\">Nilai Operand 1</div>";
echo "</th>";
echo "<th width=\"20%\">";
echo "<div align=\"center\">Menggunakan Operator</div>";
echo "</th>";
echo "<th width=\"30%\">";
echo "<div align=\"center\">Nilai Operand 2</div>";
echo "</th>";
echo "<th>";
echo "<div align=\"center\">Akan menampilkan Hasil Perhitungan</div>";
echo "</th>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<div align=\"center\"><B>$operand1</B></div>";
echo "</td>";
echo "<td>";
echo "<div align=\"center\"><B>$operator</B></div>";
echo "</td>";
echo "<td>";
echo "<div align=\"center\"><B>$operand2</B></div>";
echo "</td>";
echo "<td>";
echo "<div align=\"center\"><B>$hasil</B></div>";
echo "</td>";
echo "</tr>";
echo "</table>";
?>