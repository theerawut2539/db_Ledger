<?php
include('../helper\condb.php');

if (!$con) {
    exit("Sorry, Connention error..");
}

$val = $_GET["value"];

$val_M = mysqli_real_escape_string($con, $val);

$sql = "SELECT * FROM list WHERE types='$val_M'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<select name='types'>";

    while ($rows = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $rows["types"] . "'>" . $rows["names"] . "</option>";
    }

    echo "</select>";
} else {
    echo "<select>
            <option>หมวดหมู่</option>
        </select>";
}
