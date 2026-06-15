<!DOCTYPE html>
<html>
        <head>
            <title>Activity 04</title>
        </head>
        <body>

        <form method="post">
            Number 1:
            <input type="number" name="num1" required><br><br>

            Number 2:
            <input type="number" name="num2" required><br><br>

            Operation:
            <select name="operation" required>
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>
            <br><br>

            <input type="submit" name="btnCompute" value="Compute">
        </form>

        <?php
        if(isset($_POST['btnCompute']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = isset($_POST['operation']) ? $_POST['operation'] : 'all';
            echo "<h3>Result</h3>";

            if ($operation === 'add') {
                $result = $num1 + $num2;
                echo "Addition: $result <br>";
            } else if ($operation === 'sub') {
                $result = $num1 - $num2;
                echo "Subtraction: $result <br>";
            } else if ($operation === 'mul') {
                $result = $num1 * $num2;
                echo "Multiplication: $result <br>";
            } else if ($operation === 'div') {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "Division: $result <br>";
                } else {
                    echo "Invalid Answer<br>";
                }
            }
        }
        ?>

        </body>
</html>