<DOCTYPE html>
    <html>

    <head>
        <title>Lab 2</title>
        <meta charset="UTF-8" />
        <meta name="author" content="trendemy.com" />
        <link href="./style.css" rel="stylesheet" />
    </head>

    <body>
        <div id="wrapper">
            <div class="row">
                <?php
                require_once "member.php";

                $sv = new member("Nguyen Van A", "email1@gmail.com", "1");

                echo "<h2>CLASSIFICATION OF STUDENT RESULTS</h2>";
                echo "ID: " . $sv->get_id() . "<br>";
                echo "Fullname: " . $sv->get_fullname() . "<br>";
                echo "Email: " . $sv->get_email() . "<br>";
                ?>
                <?php
                require_once "member.php";

                $sv2 = new member("Nguyen Van B", "email2@gmail.com", "1");

                echo "<h2>CLASSIFICATION OF STUDENT RESULTS</h2>";
                echo "ID: " . $sv2->get_id() . "<br>";
                echo "Fullname: " . $sv2->get_fullname() . "<br>";
                echo "Email: " . $sv2->get_email() . "<br>";
                ?>
            </div>
            <div class="row">
                <?php
                include ("staff.php");

                $staff = new Staff("Nguyen Van A", 5678, null);
                echo "<h2>--- Add: Object Oriented PHP --</h2>";
                echo "Full name: " . $staff->get_fullname() . "<br/>";
                echo "Country code: " . $staff->get_countrycode() . "<br/>";

                // Init staff 2
                $staff2 = new Staff("Nguyen Van B", 1234, "IT");
                echo "<h2>--- Staff --</h2>";
                echo "Full name: " . $staff2->get_fullname() . "<br/>";
                echo "Mã nhân viên: " . $staff2->getStaffCode() . "<br/>";
                echo "Country code: " . $staff2->get_countrycode() . "<br/>";
                echo "Bộ phận: " . $staff2->getPart() . "<br/>";

                ?>
            </div>
            <footer>
                <p>&copy; Hehehe</p>
            </footer>
        </div>
    </body>

    </html>