<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Page where id=".$_GET['id']);
    $page = $rs->fetch();


?>
<?php
require_once 'header.php';
?>
 
 <div id="outerbeforecontent">
        	<div id="beforecontent">
            	<section id="beforethecontent">
					<div class="intro-l">
                    	<h1 class="pagetitle"><?php echo $page[$current_lang.'_title']?></h1>
                    </div>
                    <div class="intro-r">
                    	亞贊奴專門處理男女情降、和合法事(如夫妻感情、男女愛情、同性關係、姻緣桃花等)成功率高達8成以上
						
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->

 <div id="outermain">
        	<div id="maincontent">
        	<section id="mainthecontent">

				<article>
                  <?php echo $page[$current_lang.'_content']?>
<!--
                    
                    <p>愛情降一般分二種，一種是黑衣巫師做的，俗稱“黑降”．另一種是白衣巫師做的，這種是泰國最正宗的愛情降．</p>
                    <p>先講黑巫師做的愛情降，他們做法大多收取動物血液、屍油、五毒(五毒是指蝎子、蛇、蜘蛛、蜈蚣、蟾蜍)等以作法事材料，更甚者或會使用人類血液．故此這是非常凶殘的一種．</p>
                    <p>至於白衣巫師做的愛情降一般先要取得男女雙方姓名、出生日期、相片以作起命盤之用，起命盤目的是要了解男女相方是否還有緣份，如果沒有緣份成功機會當然降低，更甚者是不能進行法事．至於泰國正宗白衣巫師是不會使用“陰料”以作法事之用，他們大多使用自然界之植物以作材料，故此中降者是不會有任何副作用的．</p>
                    <p>另外決定做愛情降之時，客人是可以加插條件(如死心塌地、專一、要對方離婚等等...)，所有效果，都是由下降者自行訂下的，但必須在做法事前把條件一一想清楚，只因事後是不能再加插的了！</p>
                    <p>愛情降一般需時約6至8星期以作施法，成效方面有些客人快則施法當天已告訴我對方已有好轉反應，遲則一年半載才有進展．當然亦有失敗個案，所以我們一般建議由施法當天計3至6個月以觀察對方有沒有好轉反應，如沒有反應則會於施法第6個月後補做一次，補做後我們亦會建議重新觀察對方多一次，限期則為補做當天計3至6個月．如再沒有反應則可視為失敗個案.</p>
                    <br />

                    <img src="_/images/pic1.jpg" alt="" class="alignright" /> 
					<h2><b>愛情降作法之步驟:</b></h2>
                    <ul class="feature">
                        <li>客戶須提供雙方姓名、出身日期、相片以作起命盤之用．(師父確認雙方有緣份後才能做愛情降)</li>
                        <li>施法前客人須提供施法者之物品及加插條件(如死心塌地、專一、要對方離婚等等...)</li>
                        <li>第一次施法(需時約6至8星期)</li>
                        <li>施法後，如雙方關係有好轉則施法當天計第9個月補做一次以鞏固雙方關係．</li>
                        <li>施法後，如沒有反應則會於施法第6個月後補做一次，補做後我們亦會建議重新觀察對方多一次，<br/>限期則為補做當天計3至6個月．如再沒有反應則可視為失敗個案.</li>
                        
                    </ul><div class="clear"></div><br/> <br/> 
                    <p>和合法事最主要目的是令情侶/夫妻之間能夠相處融洽，減少吵架，但大前提下是不牽涉第三者的情況下做的．(如牽涉第三者一般是做愛情降)。</p>
                   
-->
                  
                </article>
         
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->



<?php
require_once 'footer.php';
?>

