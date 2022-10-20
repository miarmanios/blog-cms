<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Mina Armanios Blog</title>
        <style>
        body{
            text-align: center;
        }
        h1{
            color: blue;
        }
        p{
            color: red;
        }


            </style>
    </head>
    <body>
        <h1>Mina Armanios Blog</h1>
        <h2>Post Page</h2>
        <a href="post-submission.php">Post Submission</a>

<main>
    <h1>Form:</h1>
    <form action="/action_page.php" method="get">
        <label for="fname">Title:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Author:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="date">Date:</label>
        <input type="text" id="date" name="date"><br><br>
        <label for="con">Content</label>
        <input type="text" id="con" name="con"><br><br>
        <input type="submit" value="Submit">
      </form>
</main>

        <div class="myDiv">
            <h2>This is a heading in a div element</h2>
            <p>This is some text in a div element.</p>
          </div>

    </body>
</html>