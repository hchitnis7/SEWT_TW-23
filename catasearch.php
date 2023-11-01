<?php
include("connect.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $sql = "SELECT * FROM ACHIEVTB WHERE achiev_type LIKE '%{$input}%'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tbody{
            background-color:  = #333;
        }
    </style>
</head>
<body>
    
    <table class = table table-dark>
        <thead>
            <tr>
                <th>ID</th>
                <th>ROLLNo</th>
                <th>Certification Date</th>
                <th>Student Name</th>
                <th>Issuer Organisation</th>
                <th>Achievement Type</th>
                <th>Achievement Title</th>
                <th>Year of Study</th>
                <th>Proof of certification</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $ID = $row['ID'];
                    $RollNo = $row['RollNo'];
                    $Cert_date = $row['Cert_date'];
                    $stud_name = $row['stud_name'];
                    $Organisation = $row['Organisation'];
                    $achiev_type = $row['achiev_type'];
                    $achiev_name = $row['achiev_name'];
                    $lyear = $row['lyear'];
                    $Proof = $row['Proof'];
                    
                    ?>
                        <tr>
                            <td>
                                <?php echo $ID; ?>
                            </td>
                            <td>
                                <?php echo $RollNo; ?>
                            </td>
                            <td>
                                <?php echo $Cert_date; ?>
                            </td>
                            <td>
                                <?php echo $stud_name; ?>
                            </td>
                            <td>
                                <?php echo $Organisation; ?>
                            </td>
                            <td>
                                <?php echo $achiev_type; ?>
                            </td>
                            <td>
                                <?php echo $achiev_name; ?>
                            </td>
                            <td>
                                <?php echo $lyear; ?>
                            </td>
                            <td>
                                <a href = "<?php echo $Proof; ?>"> LINK</a>
                            </td>        

                        </tr>
                   
                    <?php
                }
                ?>
            </tbody>
            </table>
            <?php
    } else {
        echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>";
    }
}
?>
</body>
</html>