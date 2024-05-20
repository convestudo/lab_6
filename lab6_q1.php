<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>

    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    
</head>
<body>
    <?php
        $name = "Alya Humaira";
        $matricNumber = "DI220106";
        $course = "Computer Science";
        $yearOfStudy = "2";
        $address = "16, Jalan Belimbing Besi 5/KU10 Taman Meru Damai";
    ?>
 <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

 </table>

</body>
</html>