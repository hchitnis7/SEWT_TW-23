<?php
include('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Achievement Portal</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
    <link href = "./mastercss.css" rel = "stylesheet">
    <style>
body {
      animation: fadeInAnimation ease 2s; /* Use the same duration as in the initial styling */
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
    }

    @keyframes fadeInAnimation {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

        /*
 * Globals
 */

        /* Links */
        a,
        a:focus,
        a:hover {
            color: #fff;
        }

        Custom default button
        .btn-default,
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
 .masthead{
    width: 100%;
    height:70px;
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

                <div class="masthead clearfix"style= "background-color:green;">
                    <div class="container inner" >
                        <!-- <img href="logo.jpeg"></img> -->
                        <h3 class="masthead-brand">Student Achievement Portal</h3>
                        <nav>
                            <ul class="nav masthead-nav">
                                <li class="active"><a href="login.html">logout</a></li>
                                <li><a href="add.php">Add New Certification</a></li>
                                <li><a href="displayall.php">View All certifications</a></li>
                                <li><a href="search.php">Search for certifications</a></li>


                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">Student Achievement Management Portal</h1>
                    <p class="lead">This webpage helps in manage, update, view and search for cetrifications done by the students in the ECS department.
                        all recordes are stored in a mysql database and are then fetched to be displayed
                    </p>
                    
                </div>

            </div>

        </div>

    </div>

</body>

</html>