<!-- Authors: Kylee Taylor, Emily Lara, Gwen Van Doren, Jordan Reed

    Time spent: 4 hours

-->
<!-- Handler for arboretum query -->

<html>
    <body>
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
    if (empty($tree)) {
        echo "Please type a tree id.";
    }

    // Defines SQL queries
    // $query1 = 'SELECT * FROM journal_csv WHERE treeid = "' . $tree . '";';
    $query1 = 'SELECT * FROM
              (SELECT treeid as id, tree_csv.typeno as "type num", genus, family, species,
              comname as "common name", zone, nativearea as "native area", tag, tree_csv.condition, remarks,
              receive_date as "recieve date", cond_date as "condition date", revise_date as "revise date"
              FROM tree_csv
              JOIN TYPEMASTER_csv
              ON tree_csv.typeno = TYPEMASTER_csv.typeno)
              as mainTable
              WHERE id = "' . $tree . '";';
    $result1 = mysqli_query($conn, $query1);

    // Write HTML table that display query results
    echo "<table border='1' class='center' style=' margin-left: auto;
    margin-right: auto; width: 100%;'>
          <tr>
            <th style='background-color: #2e401c; color:white'>id</th>
            <th style='background-color: #2e401c; color:white'>type number</th>
            <th style='background-color: #2e401c; color:white'>genus</th>
            <th style='background-color: #2e401c; color:white'>family</th>
            <th style='background-color: #2e401c; color:white'>species</th>
            <th style='background-color: #2e401c; color:white'>common name</th>
            <th style='background-color: #2e401c; color:white'>zone</th>
            <th style='background-color: #2e401c; color:white'>native area</th>
            <th style='background-color: #2e401c; color:white'>tagged</th>
            <th style='background-color: #2e401c; color:white'>condition</th>
            <th style='background-color: #2e401c; color:white'>remarks</th>
            <th style='background-color: #2e401c; color:white'>recieved date</th>
            <th style='background-color: #2e401c; color:white'>condition date</th>
            <th style='background-color: #2e401c; color:white'>revise date</th>
          </tr>";


    while ($row = mysqli_fetch_array($result1)) {
        echo "<h1 style='text-align:center'> Result </h1>";
        echo "<tr>";
        echo "<td style='text-align:center'>" . $row[0] . "</td>";
        echo "<td style='text-align:center'>" . $row[1] . "</td>";
        echo "<td style='text-align:center'>" . $row[2] . "</td>";
        echo "<td style='text-align:center'>" . $row[3] . "</td>";
        echo "<td style='text-align:center'>" . $row[4] . "</td>";
        echo "<td style='text-align:center'>" . $row[5] . "</td>";
        echo "<td style='text-align:center'>" . $row[6] . "</td>";
        echo "<td style='text-align:center'>" . $row[7] . "</td>";
        echo "<td style='text-align:center'>" . $row[8] . "</td>";
        echo "<td style='text-align:center'>" . $row[9] . "</td>";
        echo "<td style='text-align:center'>" . $row[10] . "</td>";
        echo "<td style='text-align:center'>" . $row[11] . "</td>";
        echo "<td style='text-align:center'>" . $row[12] . "</td>";
        echo "<td style='text-align:center'>" . $row[13] . "</td>";
        echo "</tr>";
    }
    ?>
    </body>
</html>
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
