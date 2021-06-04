    <?php include('dbcon.php'); ?>
    error_reporting(0);
    <?php
    if(isset($_POST['addComment']))
    {
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $date_time=$currentDate.' | '.$currentTime;
    
    $save_comment = "INSERT INTO tbl_comments(topic_id, name, email, comment, date_time)VALUES('$_GET[topic_id]', '$name', '$email', '$comment', '$date_time')";
    $conn->exec($save_comment);

    ?>
 
    <script>
        window.location='instructions.php?topic_id=<?php echo $_GET['topic_id']; ?>&category=<?php echo $_GET['category']; ?>&entryNum=<?php echo $_GET['entryNum']; ?>&viewer=<?php echo $_GET['viewer']; ?>';
    </script>    
        
    <?php } ?>
    
    
    <?php
    if(isset($_POST['submitDownload']))
    {
    
    $topics_query = $conn->prepare('SELECT * FROM tbl_topics WHERE topic_id = :topic_id');
    $topics_query->execute(['topic_id' => $_GET['topic_id']]);
    $topics_row=$topics_query->fetch();
    
    $newTotalDownloads=$topics_row['totalDownloads']+1;
    
    $updTotalDL = 'UPDATE tbl_topics SET totalDownloads = :totalDownloads WHERE topic_id = :topic_id';
    $conn->prepare($updTotalDL)->execute(['totalDownloads' => $newTotalDownloads, 'topic_id' => $_GET['topic_id']]);
    
    // Subject
    $subject = 'Food blog';
    
    // Message
    $message = '
    <html>
    <head>
      <title>Food Blog</title>
    </head>
    <body>
        
    </body>
    </html>
    ';
    
    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    
    // Additional headers
    $headers[] = 'To: '.$_POST['downloadName'].' <'.$_POST['downloadEmail'].'>';
    $headers[] = 'From: E-CodeSource <ecodesource@gmail.com>';
    
    // Mail it
    mail($_POST['downloadEmail'], $subject, $message, implode("\r\n", $headers));
    
    ?>
 
    <script>
        window.alert('Project <?php echo $topics_row['title']; ?> source code link was sent to your email, if email not found in inbox folder, please check your spam folder. Happy coding!');
        window.location='instructions.php?topic_id=<?php echo $_GET['topic_id']; ?>&category=<?php echo $_GET['category']; ?>&entryNum=<?php echo $_GET['entryNum']; ?>&viewer=<?php echo $_GET['viewer']; ?>';
    </script>    
        
    <?php } ?>
    
    