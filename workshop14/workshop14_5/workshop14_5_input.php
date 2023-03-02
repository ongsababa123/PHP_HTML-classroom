<?php
session_start();
echo isset($_SESSION["mydata"]);
if (isset($_SESSION["mydata"]) != 1)
    $_SESSION["mydata"] = array();
?>
<h2>Array Experiment</h2>
<h3>Insert Data</h3>
<form action="workshop14_5_output.php" method="post">
    <input type="text" name="data" required>
    <input type="submit" value="ok">
    <input type="hidden" name="key" value="ins">
</form>
<hr>
<h3>Delete Data</h3>
<form action=" workshop14_5_output.php" method="post">
    <input type="hidden" name="key" value="del">
    <select name="remove">
        <?php
        if (isset($_SESSION["mydata"])) {
            foreach ($_SESSION["mydata"] as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
        }
        ?>
        <input type="submit" value="ok">
    </select>
</form>
<hr>
<h3>Edit Data</h3>
<form action=" workshop14_5_output.php" method="post">
    <input type="hidden" name="key" value="replace">
    <select name="replace">
        <?php
        if (isset($_SESSION["mydata"])) {
            foreach ($_SESSION["mydata"] as $key => $value) {
                echo "<option value='$key'>[$key]: $value</option>";
            }
        }
        ?>
        <input type="text" name="value" required>
        <input type="submit" value="ok">
    </select>
</form>
<hr>

<form action=" workshop14_5_output.php" method="post">
    <input type="hidden" name="key" value="clear">
    <input type="submit" value="clear array">
</form>

<a href=" workshop14_5_output.php">output</a>