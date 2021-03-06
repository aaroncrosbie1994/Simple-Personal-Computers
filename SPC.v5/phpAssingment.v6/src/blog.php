<?php
session_start();

$filename ='blog';

$title = 'Blog';

$isLoggedIn = false;

require_once __DIR__ . '/head.php';
require_once __DIR__ . '/nav.php';

$clicked = filter_input(INPUT_GET, 'clickedForView');

//Database connection information
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "test";

$connection = mysqli_connect($hostname, $user, $pass, $db);

if(mysqli_connect_errno()){
    echo "Failed to connect to database";
}

//Executes code when register button is selected
// This is to add user's posts
if(isset($_POST['commentData'])) {
    $newTime = date("Y/m/d");
    $sql = "INSERT INTO blog (Username,Topic,Content,TimeSubmited) VALUES ('$_SESSION[username]','$_POST[topic]','$_POST[content]','$newTime')";//SQL statement to insert data in user database
    mysqli_query($connection, $sql);
}

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action){
    case 'login':
        login();
        break;
    case 'getID':
        getID();
        break;
}


function getID(){

    //Database connection information
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $connection = mysqli_connect($hostname, $user, $pass, $db);

    $blogID = filter_input(INPUT_GET, 'blogID', FILTER_SANITIZE_STRING);

    $blogID = stripslashes($blogID);

    $blogID = mysqli_real_escape_string($connection, $_POST['blogID']);

    $sql = "SELECT * FROM blog WHERE ID='$blogID'";

    $result = mysqli_query($connection, $sql);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['ID'] = $blogID;
//        require __DIR__. '/post.php';
    }

}

?>

<div class="container">

    <div class="jumbotron">

        <header>

            <h1>Welcome to SPC Blog  </h1>

            <div>

                <p>Advise | Help | Solve </p>

            </div>

            <div id="login">

                <a>Create Post</a>

            </div>

        </header>

    </div>


    <div id="post" hidden>

        <form
                id="form1"
                method="POST"
                action="">
            <section id="hideIfNot" hidden>

                <h3>
                    <?php

                        if(!isset($_SESSION['username']) == '') {

                        echo $_SESSION['username'];

                    ?>
                    , be friendly to the community! Good luck!</h3>
                <script>
                    $("#hideIfNot").show(500);
                </script>
                <?php
                        } else {
                    ?>
                    <script>
                        $("#hideIfNot").hide(500);
                        $("#login").click(function(){
                            alert("Please login before you want to write a post!");
                        });
                    </script>
                    <?php
                            }
                ?>



                <br>
                <label>Please specify your topic</label>

                <br>
                <br>

                <input type="text" name="topic" id="topic" required>

                <br>
                <br>

                <label>Content</label>

                <br>

                <p style="color: gray; margin-bottom: 0; padding-bottom: 0; font-size: 12px;">Max. 2000 characters</p>

                <textarea cols="60" rows="10" id="content" name="content" required></textarea>

                <br>
                <br>

                <input type="hidden" id="id" name="id">

                <br>

                <button type="submit" style="margin-left: auto; margin-right: auto;" name="commentData" value="submit">Submit</button>
                <button type="button" style="margin-left: auto; margin-right: auto;" id="backButton">Back</button>


                <br>
                <br>
            </section>
            <script>
                $("#backButton").click(function(){
                    $("#hideIfNot").hide(500);
                });
            </script>
        </form>
    </div>



    <div class="row">

        <aside>

            <h3>Username</h3>

            <p>Short description</p>

            <br>

            <p style="font-size: 12px; text-align: right">Time stamp</p>

            <hr>

            <h3>Username</h3>

            <p>Short description</p>

            <br>

            <p style="font-size: 12px; text-align: right">Time stamp</p>

            <hr>
            <h3>Username</h3>

            <p>Short description</p>

            <br>

            <p style="font-size: 12px; text-align: right">Time stamp</p>

            <hr>
            <h3>Username</h3>

            <p>Short description</p>

            <br>

            <p style="font-size: 12px; text-align: right">Time stamp</p>

            <hr>
        </aside>

        <div id="cntrol">
        <?php


        $sql="SELECT * FROM blog ORDER BY ID DESC ;";
        $retval = mysqli_query($connection, $sql);

        if(!$retval )
        {
            die('Could not get data: ' );
        }

        while($row = mysqli_fetch_array($retval, 1))
        {

        ?>



                <form
                        action="blog.php?action=getID"
                        method="POST">
                    <table>
                        <tr>
                            <td><h3><?php echo "{$row['Topic']}"?></h3></td>
                            <td style="text-align: right"><h5><?php echo "@{$row['Username']}" ?></h5></td>
                        </tr>

                        <tr>
                            <td>
                                <p><?php echo "{$row['Content']}" ?></p>
                                <br>
                                <p style="font-size: 12px; text-align: right"><?php echo "{$row['TimeSubmited']}" ?></p>
                            </td>
                        </tr>


                        <tr>
                            <td><input type="submit" id="clickedForView" value="View">
                                <input type="hidden" id="blogID" name="blogID" value="<?php echo "{$row['ID']}" ?>">
                            </td>
                        </tr>

                    </table>
                </form>

            <hr>

            <?php
            }

            ?>
            <script>
                $("#login").click(function () {
                    $("#post").show(500);

                });

                $("#clickedForView").click(function () {
                    $("#cntrol").hide(500);
                    $("#thisPost").show(500);

                });
            </script>
        </div>

    </div>
</div>
<?php require_once __DIR__ . '/footer.php'; ?>
