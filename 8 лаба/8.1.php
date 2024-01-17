<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Calendar - Декабрь 2024</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ffe4b5, #add8e6);
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #e6e6e6;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        th {
            background: linear-gradient(to right, #66b2ff, #3366cc);
            color: #fff;
            border-radius: 15px 15px 0 0;
        }

        .weekend {
            color: #ff4500;
        }

        .holiday {
            background: linear-gradient(to right, #ffb6c1, #ff69b4);
            color: #fff;
        }

        .highlight-december {
            background: linear-gradient(to right, #00ff00, #228b22);
            color: #fff;
        }

        .highlight-christmas,
        .highlight-new-year {
            background: linear-gradient(to right, #ffcccb, #f08080);
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
        echo '<script>';
        echo 'document.write("Декабрь 2024");';
        echo '</script>';

        function getCalendar($month, $year) {
            if (!$month) $month = date('n');
            if (!$year) $year = date('Y');

            $date = new DateTime("$year-$month-01");
            
            echo '<table>';
            echo '<tr>';
            $daysOfWeek = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
            
            foreach ($daysOfWeek as $day) {
                echo '<th>' . $day . '</th>';
            }
            echo '</tr>';

            while ($date->format('n') == $month) {
                echo '<tr>';
                
                foreach ($daysOfWeek as $dayOfWeek) {
                    echo '<td';

                    if ($dayOfWeek == 'Сб' || $dayOfWeek == 'Вс') {
                        echo ' class="weekend"';
                    }

                    if ($date->format('n') == 12 && ($date->format('j') == 25 || $date->format('j') == 31)) {
                        echo ' class="holiday highlight-december highlight-christmas highlight-new-year"';
                    }

                    echo '>' . $date->format('j') . '</td>';

                    $date->add(new DateInterval('P1D'));
                }

                echo '</tr>';
            }

            echo '</table>';
        }

        getCalendar(12, 2024);
    ?>
</body>
</html>
