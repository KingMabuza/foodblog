
<!DOCTYPE html>
<html>
  <?php include('header.php');
  error_reporting(0);
  ?>
  <body>
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="index.php" class="navbar-brand">FOOD BLOG</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            
              <li class="nav-item">
              <a href="index.php" class="nav-link active ">Home</a>
              </li>
              
              <li class="nav-item">
              <a href="system_list1.php" class="nav-link ">Browser Based Systems</a>
              </li>
              
              <li class="nav-item">
              <a href="system_list2.php" class="nav-link ">VB.Net Based Systems</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <!-- Divider Section-->
    <section style="background: url(img/divider-bg.jpg); background-size: cover; background-position: center bottom" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2>View archives of project source codes at a few clicks</h2><a href="system_list1.php" class="hero-link">Web Based Systems</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="system_list2.php" class="hero-link">VB.Net Based Systems</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Posts -->
    <section class="latest-posts"> 
      <div class="container">
        <header> 
          <h2>Latest project posts</h2>
          <p class="text-big">Check-out these new posts now!</p>
        </header>
        <div class="row">
        
        <?php
        $bbs_topics_query = $conn->prepare('SELECT * FROM tbl_topics WHERE category = :category ORDER BY entryNum DESC LIMIT 3');
        $bbs_topics_query->execute(['category' => "BBS"]);
        while($bbs_topics_row=$bbs_topics_query->fetch()){
            
        $bbs_comment_query = $conn->prepare("SELECT * FROM tbl_comments WHERE topic_id='$bbs_topics_row[topic_id]'"); 
        ?>
               
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="instructions.php?topic_id=<?php echo $bbs_topics_row['topic_id']; ?>&category=BBS&entryNum=<?php echo $bbs_topics_row['entryNum']; ?>&viewer=Guest"><img src="admin/<?php echo $bbs_topics_row['img']; ?>" alt="..." class="img-fluid" /></a></div>
            <div class="post-details">
 
                
              <div class="post-meta d-flex justify-content-left">
                  <div class="date"><i class="icon-clock"></i> <?php echo $bbs_topics_row['datePublished']; ?></div>
                  <div class="views"><i class="icon-eye"></i> <?php echo $bbs_topics_row['totalViews']; ?></div>
                  <div class="views"><i class="fa fa-download"></i><?php echo $bbs_topics_row['totalDownloads']; ?></div>
                  <div class="comments meta-last"><i class="icon-comment"></i><?php echo $bbs_comment_query->rowCount(); ?></div>
              </div>
              
              <a href="instructions.php?topic_id=<?php echo $bbs_topics_row['topic_id']; ?>&category=BBS&entryNum=<?php echo $bbs_topics_row['entryNum']; ?>&viewer=Guest">
                <h3 class="h4"><?php echo $bbs_topics_row['title']; ?></h3></a>
              <p class="text-muted"><?php echo substr($bbs_topics_row['description'], 0, 135); ?><div class="category"><a href="instructions.php?topic_id=<?php echo $bbs_topics_row['topic_id']; ?>&category=BBS&entryNum=<?php echo $bbs_topics_row['entryNum']; ?>&viewer=Guest">Read More &raquo;</a></div></p>
            </div>
          </div>
          
        <?php } ?>
        
        <?php
        $vbs_topics_query = $conn->prepare('SELECT * FROM tbl_topics WHERE category = :category ORDER BY entryNum DESC LIMIT 3');
        $vbs_topics_query->execute(['category' => "VBS"]);
        while($vbs_topics_row=$vbs_topics_query->fetch()){
            
        $vbs_comment_query = $conn->prepare("SELECT * FROM tbl_comments WHERE topic_id='$vbs_topics_row[topic_id]'"); 
        ?>
               
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="instructions.php?topic_id=<?php echo $vbs_topics_row['topic_id']; ?>&category=VBS&entryNum=<?php echo $vbs_topics_row['entryNum']; ?>&viewer=Guest"><img src="admin/<?php echo $vbs_topics_row['img']; ?>" alt="..." class="img-fluid" /></a></div>
            <div class="post-details">
            
              <div class="post-meta d-flex justify-content-left">
                  <div class="date"><i class="icon-clock"></i> <?php echo $vbs_topics_row['datePublished']; ?></div>
                  <div class="views"><i class="icon-eye"></i> <?php echo $vbs_topics_row['totalViews']; ?></div>
                  <div class="views"><i class="fa fa-download"></i><?php echo $vbs_topics_row['totalDownloads']; ?></div>
                  <div class="comments meta-last"><i class="icon-comment"></i><?php echo $vbs_comment_query->rowCount(); ?></div>
              </div>
              
              <a href="instructions.php?topic_id=<?php echo $vbs_topics_row['topic_id']; ?>&category=VBS&entryNum=<?php echo $vbs_topics_row['entryNum']; ?>&viewer=Guest">
                <h3 class="h4"><?php echo $vbs_topics_row['title']; ?></h3></a>
              <p class="text-muted"><?php echo substr($vbs_topics_row['description'], 0, 135); ?><div class="category"><a href="instructions.php?topic_id=<?php echo $vbs_topics_row['topic_id']; ?>&category=VBS&entryNum=<?php echo $vbs_topics_row['entryNum']; ?>&viewer=Guest">Read More &raquo;</a></div></p>
            </div>
          </div>
          
        <?php } ?>
        
          
        </div>
      </div>
    </section>
 
 
    
    <?php include('footer.php'); ?>
    <?php include('script_files.php'); ?>
  </body>
</html>