<!DOCTYPE html>
<html lang="ur">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern 3D Multiplication Table</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: #1a1a2e;
            color: white;
        }

        /* Centered Glassmorphic Container */
        .container {
            margin: 50px auto;
            width: 400px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5), 
                        -5px -5px 15px rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
        }

        /* Input Fields */
        input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            box-shadow: inset 3px 3px 6px rgba(0, 0, 0, 0.5), 
                        inset -3px -3px 6px rgba(255, 255, 255, 0.1);
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.3);
        }

        /* Submit Button */
        button {
            width: 95%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            background: linear-gradient(135deg, #ff512f, #dd2476);
            color: white;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4),
                        -4px -4px 10px rgba(255, 255, 255, 0.1);
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 6px 6px 15px rgba(0, 0, 0, 0.5),
                        -6px -6px 15px rgba(255, 255, 255, 0.15);
        }

        /* 3D Neon Styled Table */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.1);
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 18px;
            font-weight: bold;
        }

        tr:hover {
            background: rgba(255, 255, 255, 0.2);
            transition: 0.3s;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>🔥 Modern 3D Multiplication Table 🔥</h2>
        <form method="POST">
            <input type="number" name="number" placeholder="Enter Table Number" required>
            <input type="number" name="limit" placeholder="Enter Table Limit" required>
            <button type="submit">Generate Table</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number']) && isset($_POST['limit'])) {
            $num = intval($_POST['number']);
            $limit = intval($_POST['limit']);

            echo "<h3>Table of $num up to $limit</h3>";
            echo "<table>";
            $i = 1;
            while ($i <= $limit) {
                echo "<tr><td>$num × $i  </td><td>" . ($num * $i ) . "</td></tr>";
                $i++;
            }
            echo "</table>";
        }
        ?>
    </div>

</body>
</html>
