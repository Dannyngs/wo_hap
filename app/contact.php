<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>

 <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent">
          <div id="beforecontent">
              <section id="beforethecontent">
          <div class="intro-l">
                      <h1 class="pagetitle">聯絡我們</h1>
                    </div>
                    <div class="intro-r" style="text-align:right;">
                      善信做法事之個人資料將會絕對保密。<br/>
                                              ——和合佛舍
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
        
                <div class="one_half">
        <article>
                    <h2>佛舍簡介</h2>
                    <p><?php echo $system[$current_lang.'_description']?></p>

<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Jalan+Kemanggisan+Utama,+Jakarta,+Indonesia&amp;sll=37.0625,-95.677068&amp;sspn=46.092115,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Jalan+Kemanggisan+Utama,+Jakarta+Barat,+Jakarta,+Indonesia&amp;ll=-6.189793,106.7908&amp;spn=0.016639,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed" style="width:100%; height:319px;  line-height:normal; " class="shadow-frame"></iframe><br /><br />


                    Email: <a href="mailto:<?php echo $system['email']?>"><?php echo $system['emai']?></a><br />
                  
                    電話: <?php echo $system['tel']?><br />
                    Whatsapp: <?php echo $system['whatsapp']?><br />
                    Line ID： <?php echo $system['line']?><br />
                    微信: <?php echo $system['weichat']?><br />
                    QQ：<?php echo $system['qq']?>
                  
                </article>
            </div>
                <div class="one_half lastcols">
                  <h2>聯絡表單</h2>
          <div id="contactform">
                          <form id="contact" action="#" />
                            <fieldset>
                            <span class="error" id="name_error">Please enter name !</span>
                            <span class="error" id="email_error">Please enter email address !</span>
                            <span class="error" id="email_error2">Please enter valid email address !</span>
                            <span class="error" id="msg_error">Please enter message !</span>
                            <input type="text" name="name" id="name" size="50" value="Name" class="text-input" onblur="if (this.value == ''){this.value = 'Name'; }" onfocus="if (this.value == 'Name') {this.value = ''; }" />
                            <input type="text" name="email" id="email" size="50" value="Email" class="text-input" onblur="if (this.value == ''){this.value = 'Email'; }" onfocus="if (this.value == 'Email') {this.value = ''; }" />
                            <input type="text" name="subject" id="subject" value="Subject" class="text-input" onblur="if (this.value == ''){this.value = 'Subject'; }" onfocus="if (this.value == 'Subject') {this.value = ''; }" />
                            <textarea cols="60" rows="10" name="msg" id="msg" class="text-input">Message</textarea>
                            <br />
                            <input type="submit" name="submit" class="button" id="submit_btn" value="Send Message" /><br class="clear" />
                            </fieldset>
                          </form>
                  </div><!-- end contactform -->
                </div>
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
 
<?php
require_once 'footer.php';
?>