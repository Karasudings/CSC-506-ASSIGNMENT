     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                    <?php
$uid=$_SESSION['uid'];
$sql = "SELECT FirstName,LastName,UsId from  tblusers where id=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
                                <p><?php echo htmlentities($result->FirstName." ".$result->LastName);?></p>
                                <span><?php echo htmlentities($result->UsId)?></span>
                         <?php }} ?>
                        </div>
                    </div>

                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

  <li class="no-padding"><a class="waves-effect waves-grey" href="myprofile.php"><i class="material-icons"></i>My Profiles</a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="us-changepassword.php"><i class="material-icons"></i>Change Password</a></li>



                  <li class="no-padding">
                                <a class="waves-effect waves-grey" href="logout.php"><i class="material-icons"></i>Sign Out</a>
                            </li>


                </ul>
                <div class="footer">
                    <p class="copyright">CSC506 Assignment by | CSC/16D/4299 | CSC/16D/4293 | CSC/15U/3281 ©</p>

                </div>
                </div>
            </aside>
