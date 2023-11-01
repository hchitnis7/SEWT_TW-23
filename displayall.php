<?php
include('./connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Published Papers Portal</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href = "./mastercss.css" rel = "stylesheet"> -->
    <style>
        /*
 * Globals
 */

        /* Links */
        a,
        a:focus,
        a:hover {
            color: #fff;
        }

        Custom default button .btn-default,
        .btn-default:hover,
        .btn-default:focus {
            color: #333;
            text-shadow: none;
            background-color: #fff;
            border: 1px solid #fff;
        }


        /*
 * Base structure
 */

        html,
        body {
            height: 100%;
            background-color: #fff;
        }

        body {
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 3px rgba(0, 0, 0, .5);
        }

        /* Extra markup and styles for table-esque vertical and horizontal centering */
        .site-wrapper {
            display: table;
            width: 100%;
            /* height: 600px; */
            background-color: #333;
            height: 100%;
            /*min-height: 100%;*/
        }

        .site-wrapper-inner {
            display: table-cell;
            vertical-align: top;
        }

        .cover-container {
            margin-right: auto;
            margin-left: auto;
        }

        /* Padding for spacing */
        .inner {
            padding: 30px;
        }


        /*
 * Header
 */
        .masthead {
            width: 100%;
            height: 70px;
        }

        .masthead-brand {
            float: left;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .masthead-nav>li {
            display: inline-block;
        }

        .masthead-nav>li+li {
            margin-left: 20px;
        }

        .masthead-nav>li>a {
            padding-right: 0;
            padding-left: 0;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            /* IE8 proofing */
            color: rgba(255, 255, 255, .75);
            border-bottom: 2px solid transparent;
        }

        .masthead-nav>li>a:hover,
        .masthead-nav>li>a:focus {
            background-color: transparent;
            transition: 0.5s;
            border-bottom-color: #a9a9a9;
            border-bottom-color: rgba(255, 255, 255, .25);
        }


        .masthead-nav>.active>a:hover,
        .masthead-nav>.active>a:focus {
            color: #fff;
            border-bottom-color: #fff;
        }

        @media (min-width: 768px) {
            .masthead-brand {
                float: left;
            }

            .masthead-nav {
                float: right;
            }
        }


        /*
 * Cover
 */

        .cover {
            padding: 0 20px;
        }

        .cover .btn-lg {
            padding: 10px 20px;
            font-weight: bold;
        }


        .mb-3 input {
            border: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f2f2f2;
            margin top: 5px;
            padding: 20px;
            border-radius: 3px;
            font-size: 14px;

        }


        @media (min-width: 768px) {

            /* Pull out the header and footer */
            .masthead {
                position: fixed;
                top: 0;
            }

            /* Start the vertical centering */
            .site-wrapper-inner {
                vertical-align: middle;
            }

        }
    </style>

</head>

<body>
    <img src="logo.jpeg" width="260" height="70" style="position: fixed; top: 0; left:0;">

    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="container">

                <div class="masthead clearfix" style="background-color:green;">
                    <div class="container inner">
                        <h3 class="masthead-brand"></h3>
                        <nav>
                            <ul class="nav masthead-nav">
                                <li><a href="login.html">logout</a></li>
                                <li><a href="add.php">Add New Certification</a></li>
                                <li><a href="displayall.php">View All certifications</a></li>
                                <li><a href="search.php">Search for certifications</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">

                    <div id="display">
                        <table class=table table-dark>
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
                                $sql = "SELECT * FROM `ACHIEVTB`";
                                $result = mysqli_query($con, $sql);
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
                                            <a href="<?php echo $Proof; ?>"> LINK</a>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <button style="color:#333" onclick="printdiv('display')"> print page</button>
                    <script>
                        function printdiv(elem) {
                            var header_str = '<html><head><title>' + document.title + '</title></head><body>';
                            var footer_str = '</body></html>';
                            var new_str = document.getElementById(elem).innerHTML;
                            var old_str = document.body.innerHTML;
                            document.body.innerHTML = header_str + new_str + footer_str;
                            window.print();
                            document.body.innerHTML = old_str;
                            return false;
                        }
                    </script>
                </div>

            </div>

        </div>


    </div>
</body>

</html>