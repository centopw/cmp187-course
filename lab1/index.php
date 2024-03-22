<!DOCTYPE html>
<html>

<head>
    <title>Lab 1</title>
    <meta charset="UTF-8" />
    <meta name="author" content="trendemy.com" />
    <link href="./style.css" rel="stylesheet" />
</head>

<body>
    <div>
        <h2>CLASSIFICATION OF STUDENT RESULTS</h2>
        <form action="#" method="post">
            <!-- Math scores -->
            <div class="row">
                <div class="lbltitle">
                    <label>Math Scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="math"
                        value="<?php echo isset($_POST['math']) ? htmlspecialchars($_POST['math']) : ''; ?>" />
                </div>
            </div>
            <!-- Physics scores -->
            <div class="row">
                <div class="lbltitle">
                    <label>Physics Scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="physics"
                        value="<?php echo isset($_POST['physics']) ? htmlspecialchars($_POST['physics']) : ''; ?>" />
                </div>
            </div>
            <!-- Chemistry scores -->
            <div class="row">
                <div class="lbltitle">
                    <label>Chemistry Scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="chemistry"
                        value="<?php echo isset($_POST['chemistry']) ? htmlspecialchars($_POST['chemistry']) : ''; ?>" />
                </div>
            </div>
            <!-- Area input -->
            <div class="row">
                <div class="lbltitle">
                    <label>Select an Area</label>
                </div>
                <div class="lblinput">
                    <select name="area">
                        <option value="1" <?php echo $_POST['area']== 1 ? "selected" : ""?>>Area 1</option>
                        <option value="2" <?php echo $_POST['area']== 2 ? "selected" : ""?>>Area 2</option>
                        <option value="3" <?php echo $_POST['area']== 3 ? "selected" : ""?>>Area 3</option>
                        <option value="4" <?php echo $_POST['area']== 4 ? "selected" : ""?>>Area 4</option>
                        <option value="5" <?php echo $_POST['area']== 5 ? "selected" : ""?>>Area 5</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Ratings" />
                </div>
            </div>
        </form>
        <!-- Display results -->
        <div class="result">
            <h2>Rating Results</h2>
            <div class="row">
                <div class="lbltitle">
                    <label>Total Points</label>
                </div>
                <div class="lbloutput">
                    <?php
                        if (isset($_POST['btnsubmit'])) {
                            $math = isset($_POST['math']) && is_numeric($_POST['math']) ? (float)$_POST['math'] : 0;
                            $physics = isset($_POST['physics']) && is_numeric($_POST['physics']) ? (float)$_POST['physics'] : 0;
                            $chemistry = isset($_POST['chemistry']) && is_numeric($_POST['chemistry']) ? (float)$_POST['chemistry'] : 0;
                            echo $math + $physics + $chemistry;
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Rating -->
        <div class="row">
            <div class="lbltitle">
                <label>Rating</label>
            </div>
            <div class="lbloutput">
                <?php if(isset($_POST['btnsubmit'])){ $totalpoints = $_POST['math'] + $_POST['physics'] + $_POST['chemistry'];
                    if($totalpoints >= 24) echo "Very Good";
                    elseif($totalpoints >= 21) echo "Good";
                    elseif($totalpoints >= 15) echo "Average";
                    else echo "Weak";
                }?>
            </div>
        </div>
        <!-- Priority -->
        <div class="row">
            <div class="lbltitle">
                <lable>Priority points</lable>
            </div>
            <div class="lbloutput">
                <?php
                if (isset($_POST['btnsubmit'])) {
                    $priority_points = $_POST['area'];
                    switch ($priority_points) {
                        case 1:
                            echo "1";
                            break;
                        case 2:
                            echo "2";
                            break;
                        case 3:
                            echo "3";
                            break;
                        case 4:
                            echo "4";
                            break;
                        case 5:
                            echo "5";
                            break;
                        default:
                            echo "0";
                            break;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>