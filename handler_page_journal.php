<!-- Authors: Kylee Taylor, Emily Lara, Gwen Van Doren, Jordan Reed

    Time spent: 4 hours

-->
<!-- Handler for arboretum query -->
<html>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    //for you simple passwords users *thumbs down
    $password = "123456";
    $dbname = "ArboretumData";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn, $dbname) or die("Could not open the '$dbname'");

    // Defines user input variables
    $tree = $_POST["tree"];

     // Error handling
    if (!empty($_POST['tree'])){
      $tree = $_POST["tree"];
    }

   // Defines SQL queries
    $query1 = 'SELECT treeid, logid, entry, date
              FROM journal_csv
              WHERE treeid = "' . $tree . '";';
    $result1 = mysqli_query($conn, $query1);

    // Write HTML table that display query results
    ?>

    <h1 style='text-align:center' class="center"> Journal Entries </h1>
    <table style= "border: 1px solid black; margin-left: auto;
    margin-right: auto; width: 100%;" class="center" >
        <tr>
            <th style='text-align:center; border: 1px solid black; background-color: #2e401c; color:white'> id </th>
            <th style='text-align:center; border: 1px solid black; background-color: #2e401c; color:white'> log id </th>
            <th style='text-align:center; border: 1px solid black; background-color: #2e401c; color:white'onclick="mergeSort(2)"> entry </th>
            <th style='text-align:center; border: 1px solid black; background-color: #2e401c; color:white'> date </th>
        </tr>
    <?php

    while ($row = mysqli_fetch_array($result1)) {
        echo "<tr>";
        echo "<td style='text-align:center; border: 1px solid black'>" . $row[0] . "</td>";
        echo "<td style='text-align:center; border: 1px solid black'>" . $row[1] . "</td>";
        echo "<td style='text-align:center; border: 1px solid black'>" . $row[2] . "</td>";
        echo "<td style='text-align:center;border: 1px solid black'>" . $row[3] . "</td>";
        echo "</tr>";
    }
    ?>
      <script>
    dir = "asc";
    // Implements merge sort by converting the contents of a column
    // into an array and sorting it using the O(nlogn) JS sort library
  function mergeSort(n) {
    function chooseDir(a, b) {
        if (a[0] == b[0]) {
            return 0;
        }
        else {
            if (dir == "asc") {
                if (a[0] < b[0]) {
                    return -1;
                    }
                else{
                    return 1;
                }
            }
            else {
                if (a[0] > b[0]) {
                    return -1;
                }
                else{
                    return 1;
            }
            }
        }
    }
    table = document.getElementById('myTable');
    var array = [], inner_html = [], i, j;
    rows = table.rows;
    // Converts html table into nested list
    for (i=1; i < rows.length; i++) {
      x = table.rows[i].getElementsByTagName("TD")[n];
      array.push([x.innerHTML.toLowerCase(), i]);
      inner_html.push(table.rows[i].innerHTML);
    }
    // Sorts list in chosen direction (asc or desc)
    array.sort(chooseDir);
    // Converts the array back to html table
    for (j=0; j < array.length; j++) {
      indices = array[j][1];
      table.rows[j+1].innerHTML = inner_html[indices-1];
    }
    // Change direction
    if (dir == "asc") {
      dir = "desc";
    }
    else {
      dir = "asc";
    }
  }
</script>
</body>
</html>
