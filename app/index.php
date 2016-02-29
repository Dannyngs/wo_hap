<?php
require_once 'init.php';
$rs = $db->query("SELECT* FROM T_Showcase");
    $showcases = $rs->fetchAll();
?>

<?php
require_once 'header.php';
?>


   <!-- SLIDER -->
        <div id="outerslider">
        	<div id="slidercontainer">
            	<section id="slider">
                <div class="box_skitter box_skitter_large">
                    <ul>
                        <li>
                            <img src="_/images/banner1.jpg" alt="" />
                          
                        </li>
                        <li>
                            <img src="_/images/banner2.jpg" alt="" />
                           
                        </li>
                       
                    </ul>
                </div>
                </section>
            </div>
        </div>
        <!-- END SLIDER -->
        
        <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent">
        	<div id="beforecontent">
            	<section id="beforethecontent">
					<div class="intro-l">
                    	<h2>專門處理男女情降、和合法事(如夫妻感情、男女愛情、同性關係、姻緣桃花等)成功率高達8成以上。</h2>
                    </div>
                    <div class="intro-r">
                    	
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div id="maincontent">
        	<section id="mainthecontent">
            
				<article>
                   <?php  foreach($showcases as $show)          
{?>   
                	<div class="one_third">
                    	<div class="frame">
                    	<img src="<?php echo $imgurl.$show['img'];?>" alt="" /><h5><?php echo $show[$current_lang.'_title']?></h5>
                        </div>
                        <p><?php echo $show[$current_lang.'_cont']?> <a href="<?php echo $show['link'];?>" class="more">Read More</a></p>
                    </div>
                	
                    <?php
    }
?>

                    
                </article>
         
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
     
        
  

<?php
require_once 'footer.php';
?>
