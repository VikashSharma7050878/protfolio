<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin daskboard</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .table-container {
            overflow-x: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        thead {
            background-color: #4a6fa5;
            color: white;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            position: sticky;
            top: 0;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        tbody tr:hover {
            background-color: #f0f4f8;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(even):hover {
            background-color: #f0f4f8;
        }

        @media (max-width: 768px) {

            th,
            td {
                padding: 12px 8px;
                font-size: 0.9rem;
            }

            .table-container {
                border-radius: 4px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            th,
            td {
                padding: 10px 6px;
                font-size: 0.85rem;
            }
        }

        /* Animation for row hover */
        tbody tr {
            transition: background-color 0.2s ease;
        }

        /* Zebra striping for better readability */
        tbody tr:nth-child(odd) {
            background-color: white;
        }
    </style>

</head>

<body>
    <table>
        <thead>
            <tr>
                <td>Full Name</td>
                <td>Email Address</td>
                <td>Mobile Number</td>
                <td>Subject</td>
                <td>Message</td>
            </tr>
        </thead>



        <?php

        include './database.php';

        $select = "SELECT * FROM contact_responses";
        $execute = mysqli_query($connect, $select);

        //$row = mysqli_fetch_assoc($execute);

        while ($row = mysqli_fetch_array($execute)) {

            echo " 
            <tr>
                <td>{$row[0]}</td>
                <td>{$row[1]}</td>
                <td>{$row[2]}</td>
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>
            </tr>
            ";
        }
        ?>
    </table>

</body>

</html>