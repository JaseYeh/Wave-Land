<?php
require __DIR__. '/__connect_db.php';
$pageName = 'member-list';

 //product sid

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 1;

$sql = "SELECT * FROM `product-test` WHERE sid=? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$sid]);


$r = $stmt->fetch(); // 讀取一筆, 關聯式陣列
// $row = $stmt->fetch(PDO::FETCH_NUM); // 讀取一筆, 索引式陣列

$sql_s = "SELECT * FROM `product_schedule` WHERE product_id=? ";
$stmt_s = $pdo->prepare($sql_s);
$stmt_s->execute([$sid]);
$r_s = $stmt_s->fetchAll();


$sql_n = "SELECT * FROM `product_notice` WHERE product_id=? ";
$stmt_n = $pdo->prepare($sql_n);
$stmt_n->execute([$sid]);
$r_n = $stmt_n->fetch();

$sql_e = "SELECT * FROM `extra_product` WHERE product_id=? ";
$stmt_e = $pdo->prepare($sql_e);
$stmt_e->execute([$sid]);
$r_e = $stmt_e->fetchAll();

?>

<?php include __DIR__. '/__html_head.php' ?>

<!-- 自己的樣式寫這邊 -->
<link rel="stylesheet" href="css/nd_product.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<style>
.kv {
  background: url("img/public-product-4.jpg") center center no-repeat;
  background-size: cover;
  min-height:720px;
  width: 100%;
  margin:120px auto ;
  position: relative;
  height: auto;
        }
.kv-wave-bottom {
  display: block;
  position: absolute;
  bottom: -25px;
  left: 50%;
  transform: translate(-50%, -50%);
  fill: white;
  opacity: 60%;
  width: 100%;
  height: 200px
        }


.kv-wave-top {
  position: absolute;
  bottom: -90px;
  height: 250px;
  width: 100%;
        }

.kv-logo-1 {
  max-width: 350px;
  position: absolute;
  top: 45%;
  right: 5%;
        }

.npd-bread{
  padding-bottom: 30px;

}

.npd-bread a{
  font-size: 15px;
  font-weight: 100;
  color: #AFAFAF;
}

@media screen and (max-width:375px) {

.npd-bread a{
  max-width: 345px;
  overflow: hidden;

  }
    }
/*佳文新增*/
@media screen and (max-width:768px) {
.kv{
  min-height: 400px;
  max-height:400px;
}
.kv-wave-top {
  height: 200px;
  bottom: -60px;
            }
}

@media screen and (max-width:375px) {
.kv {
  height: 260px;
  background: url("img/public-product-4.jpg") center bottom no-repeat;
  background-size: cover
            }

.kv-logo-1 {
  display: none;
            }

.kv-wave-top {
  height: 130px;
  bottom: -50px;
            }

.kv-wave-bottom {
  height: 180px;
  bottom: -100px;
            }
        }
/* -----------------  商品小卡  ----------------- */
@media screen and (max-width:800px) {
.card3 {
    max-width: 800px;
    width: 100%;
    margin: 0 auto 15px;
    display: flex;
    min-height: 140px;
        }
.card3Top{
    width: 35%;
    height: 140px;
}
.card3_date_GroupGo .card3mon {
    font-size: 12px;
    line-height: 1.5;
        }
.card3_date_GroupGo .card3date {
    margin-bottom: 5px;
    letter-spacing: 0.6px;
    line-height: 0.56;
    font-size: 18px;
    font-weight: 900;
        }
.card3Down {
    width: 70%;
    padding: 10px;
        }
.card3DownBox{
    width: 100%;
    height: 100%;
    justify-content: space-between;
        }

.card3title {
    font-size: 16px;
    font-weight: 100;
        }

.card3name p {
    margin: auto auto;
        }

.card3IntroText p {
    line-height: 1.5rem;
    color: #3f464d;
    font-size: 12px;
    padding-top: 6px;
        }

.card3IntroIcon {
    flex-direction: row;
    flex-wrap: wrap;
    max-width: 260px;
        }

.card3IntroIcon img {
    margin-right: 5px;
        }

.card3IntroIcon p {
    font-size: 12px;
    color: #3f464d;
    line-height: 1.5;
        }

.card3Price {
    font-size: 14px;
    font-weight: normal;
    align-self: flex-end;
        }

.card3Price .price {
    font-size: 20px;
    font-weight: bold;
    margin-left: 5px;
    line-height: 1.5;
        }
    }
</style>

<?php include __DIR__. '/__navbar.php' ?>

<!-- body內容寫這邊 -->
<section class="npd-sec-nav-area ">
    <div class="npd-area0 webcontainer npd-rwdcontainer">
      <nav class="npd-sec-nav">
        <ul class="list-unstyled">
          <li><a href="">基本簡介</a></li>
          <li><a href="">行程安排</a></li>
          <li><a href="">集合資訊</a></li>
          <li class="m-0"><a href="">購買須知</a></li>
        </ul>
      </nav>

      <div class="npd-sec-nav-cta">
        <div class="npd-sec-nav-price">
          <h4>TWD</h4>
          <h4>1500</h4>
          <p style="font-size: 0.625rem;">起</p>
        </div><!-- npd-sec-nav-price價格 -->

        <a class="btns btn-blue" href="#npd-cta" role="button">立即預訂</a>
      </div>
    </div>
  </section>




  <!---------------------- 次選單    html結束 -------------------->





  <!---------------------- area1 kv   html開始 -------------------->
  <div class="kv" id="npd-fixedbtn">
    <svg class="kv-wave-bottom" xmlns="http://www.w3.org/2000/svg">
        <path id="wave" d="M0 120 Q360 60 720 120 T 2000 120 V240 H0 Z"></path>
        <img class="kv-wave-top" src="img/wave-animate-new2.png" alt="">
        <!-- <img class="kv-logo-1" src="svg/svg-kv-logo-l.svg" alt=""> -->
    </svg>
</div>


  <!---------------------- area1 kv    html結束 -------------------->




  
<!------- 錨點按鈕 ------->
<a href="#npd-fixedbtn"> <img class="npd-fixedbtn" src="svg/svg-top.svg" alt=""></a>
  <!---------------------- area2 商品名稱   html開始 -------------------->
<div class="npd-area2 webcontainer npd-rwdcontainer">
  <!------- 麵包屑 ------->
  <div class="npd-bread">
    <a href="">首頁</a><span> > </span>
    <a href=""> SUP初體驗-尋訪龍門秘境碧海藍天 商品頁</a> 
  </div><!--npd-bread結束--->

    <h1 class="npd-area2-title" style="font-weight: 100;"><?= $r['name'] ?></h1>

<div class="npd-area2-downRWD">
    <div class="npd-area2-info">
      <div class="npd-area2-icon">
        <div class="npd-area2-icon-place">
          <img src="svg/svg-locat-blue.svg" alt="">
          <h5><?= $r['locate'] ?></h5>
        </div>

        <div class="npd-area2-icon-time">
          <img src="svg/svg-time-blue.svg" alt="">
          <h5><?= $r['time'] ?></h5>
      </div>
    </div> <!-- npd-area2-icon 結束 -->

    <div class="npd-area2-price">
      <h6 class="npd-area2-price-space">TWD</h6>
      <h2><?= $r['price'] ?></h2>
      <p style="font-size: 0.625rem;">起</p>
    </div><!-- npd-sec-nav-price價格 -->

    </div> <!-- npd-area2-info 結束 -->
  </div><!-- npd-area2-downRWD 結束 -->
  </div> <!-- npd-area2 結束 -->
  <!---------------------- area2 商品名稱    html結束 -------------------->




  <div class="webcontainer npd-biggestBOX npd-rwdcontainer">
    <div class="npd-biggestBOX-insetBlank">

      <!---------------------- area3 基本簡介    html開始 -------------------->
      <div class="npd-area3">

        <!------------頁籤------------->
        <div class="npd-tab01-black">
          <h3 class="npd-tab01-text">基本簡介</h3>
        </div>
        <!------------文字區------------>
        <div class="npd-area3-text container-md">
          <div class="row">
            <div class="npd-area3-left col-md-2 col-sm-2 ">
              <p>活動內容</p>
            </div>
            <div class="npd-area3-right col-md-10 col-sm-10 ">
              <h6><?= $r['intro']?></h6>
            </div>
          </div><!-- row 結束 -->
        </div><!-- npd-area3-text 結束 -->
      </div><!-- npd-area3 結束 -->
      <!---------------------- area3 基本簡介    html結束 -------------------->





      <!---------------------- area4 行程安排照片區    html開始 -------------------->
      <div class="npd-area4">
        <!------------頁籤------------->
        <div class="npd-tab01-black">
          <h3 class="npd-tab01-text">行程安排</h3>
        </div>

        <!------------圖片區------------>
        <div class="npd-area4-album">
          <div class="npd-area4-album1">
            <img src="img/1-album-1.jpg" alt="">
          </div>
          <div class="npd-area4-album2">
            <img src="img/1-album-2.jpg" alt="">
          </div>

          <div class="npd-area4-album3">
            <img src="img/1-album-3.jpg" alt="">
          </div>

          <div class="npd-area4-album4">
            <img src="img/1-album-4.jpg" alt="">
          </div>

          <div class="npd-area4-album-more">
            <div class="npd-area4-album-more-mask">
              <h3>More +</h3>
            </div>
            <img src="img/1-album-5.jpg" alt="">
          </div>
        </div>
      </div><!-- npd-area4 結束 -->
      <!---------------------- area4 行程安排照片區    html結束 -------------------->





      <!---------------------- area5 行程安排時間軸    html開始 -------------------->
      <div class="npd-area5">
        <!------------- 第一段時間軸 start------------>

        <?php foreach($r_s as $s): ?>
        <div class="npd-area5-box">
          <!--  時間軸  -->
          <div class="npd-area5-box-timeline">
            <div class="npd-area5-box-timeline-circle"></div>
            <div class="npd-area5-box-timeline-line"></div>
          </div>

          <div class="npd-area5-box-right">
            <!--進行時段-->
            <div class="npd-area5-box-schedule">
              <h5><?= $s['time'] ?></h5>
            </div>

            <!--文字說明-->
            <div class="npd-area5-box-text">
              <div class="npd-area5-box-blank"></div>
              <div class="npd-area5-box-textTitle">
                <h5><?= $s['title'] ?></h5>
              </div>

              <div class="npd-area5-box-textWords">
                <p>
                  <br><?= $s['content'] ?><br><br><br>
                </p>
              </div>
            </div>
          </div><!-- npd-area5-box-right 結束 -->
        </div><!-- npd-area5-box 結束 -->
        <!------------- 第一段時間軸 end------------>
        <?php endforeach; ?>
        

        <!-------- 第五段時間軸-活動結束 start------->
        <div class="npd-area5-box">
          <!--  時間軸  -->
          <div class="npd-area5-box-timeline">
            <div class="npd-area5-box-timeline-circle"></div>
          </div>
          <div class="npd-area5-box-right">
            <!--進行時段-->
            <div class="npd-area5-box-schedule">
              <h5>活動結束</h5>
            </div>
          </div><!-- npd-area5-box-right 結束 -->
        </div><!-- npd-area5-box 結束 -->
        <!-------- 第五段時間軸-活動結束 end------->
      </div><!-- npd-area5 結束 -->

      <!---------------------- area5 行程安排時間軸    html結束 -------------------->





      <!---------------------- area6 集合資訊    html開始 -------------------->
      <div class="npd-area6">
        <!------------頁籤------------->
        <div class="npd-tab01-black">
          <h3 class="npd-tab01-text">集合資訊</h3>
        </div>

        <!----------資訊區------------->
        <div class="npd-area6-box container-md">
          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">集合時間</h5>
            <p class="col-md-10 col-sm-10 ">出發前半小時</p>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">集合地點</h5>
            <p class="col-md-10 col-sm-10"><?= $r_n['location'] ?></p>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">集合地址</h5>
            <p class="col-md-10 col-sm-10"><?= $r_n['address'] ?></p>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">如何抵達</h5>
            <p class="col-md-10 col-sm-10">【自行開車】<br>
            <?= $r_n['how_car'] ?><br><br>

              【大眾運輸】<br>
              <?= $r_n['how_pub'] ?></p>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">攜帶物品</h5>
            <p class="col-md-10 col-sm-10">建議攜帶防水背包、水、簡易零食、毛巾、換洗衣物、盥洗用具、防曬乳、暈船藥
              備註：請盡量輕裝簡便，上船前有投幣式置物櫃讓大家放東西。</p>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">體驗地點</h5>
            <p class="col-md-10 col-sm-10"><?= $r_n['area'] ?><br>
              請準時抵達集合地點，全體學員下水後，不再另外安排下水
            </p>
          </div>
        </div><!-- npd-area6-box 結束 -->
      </div><!-- npd-area6 結束 -->
      <!---------------------- area6 集合資訊    html結束 -------------------->





      <!---------------------- area7 購買須知    html開始 -------------------->
      <div class="npd-area6">
        <!------------頁籤(area7購買須知)------------->
        <div class="npd-tab01-black">
          <h3 class="npd-tab01-text">購買須知</h3>
        </div>

        <!----------資訊區(area7購買須知)------------->
        <div class="npd-area6-box container-md">
          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">溫馨提醒</h5>
            <div class="col-md-10 col-sm-10 ">
              <li>請準時抵達，逾時不候</li>
              <li>下訂前請確定個人身體健康良好，有心臟病、高血壓、或突發性疾病者及孕婦，請勿報名參加</li>
            </div>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">注意事項</h5>
            <div class="col-md-10 col-sm-10">
              <li>最晚在出發前10日確定是否成團，如未成團，費用全額退回。</li>
              <li>本行程最晚在出發前5日發行前通知。</li>
              <li>因交通、天氣等不可抗力因素所引起的時間延誤或行程取消時，我們將會為您辦理部分退款。</li>
            </div>
          </div>

          <div class="npd-area6-boxText row">
            <h5 class="col-md-2 col-sm-2">取消政策</h5>
            <div class="col-md-10 col-sm-10">
              <li>所選日期 8 天（含）之前取消，收取手續費 0%</li>
              <li>所選日期 3 ~ 7 天之間取消，收取手續費 30%</li>
              <li>所選日期 0 ~ 2 天之間取消，收取手續費 100%</li>
            </div>
          </div>

        </div><!-- npd-area6-box(area7購買須知) 結束 -->
      </div><!-- npd-area6(area7購買須知) 結束 -->

    </div><!-- npd-biggestBOX-insetBlank 結束 -->
  </div><!-- webcontainer npd-biggestBOX 結束 -->
  <!---------------------- area7 購買須知    html結束 -------------------->





  <!---------------------- area8 活動訂購/加購商品    html開始 -------------------->
  <div class="webcontainer npd-rwdcontainer" id="npd-cta" >
    <div class="npd-DownBOX">
      <form class="buy-form" action="" method="POST" data-sid="<?= $r['sid'] ?>" >
        <div class="npd-area8 container-md">

 <!------------------------------------ 活動訂購 ----------------------------->
          <!------------頁籤------------->
          <h2 class="npd-area8-tab1" >活動訂購</h2>

          <!--------日期與時段------------>
          <div class="row d-flex justify-content-between">
            <div class="npd-form-group m-0 col-md-6 npd-rwd-area8-tab-p-b">
              <label for="np_activityDate">日期</label><br>
              <input type="date" id="np_activityDate" name="np_activityDate" value="">
            </div>

            <div class="npd-form-group m-0 col-md-6">
              <label for="np_activityTime">時段</label><br>
              <select type="text" id="np_activityTime" name="np_activityTime">
                <option value="defult" checked>請選擇時段</option>
                <option value="morning">6:00-9:30</option>
                <option value="noon">8:30-11:00</option>
                <option value="afternoon">15:00-18:30</option>
              </select>
            </div>
          </div><!--日期row d-flex結束-->

          <!-------- 人數選擇(成人) ------------>
          <!-- 成人 -->
          <div class="row npd-form-group">
            <div class="npd-form-option col-md-9 d-flex p-0">
              <h5>成人</h5>
              <p>TWD<span class="npd-form-price" data-price="<?= $r['price']?>"><?= $r['price']?></span></p>
            </div><!--npd-form-option結束-->

            <div class="npd-form-counter col-md-3 d-flex p-0">
              <span class="npd-form-counter-btn npd-form-counter-reduce active" data-type="reduce">－</span>
              
              <div id="adult-qty" type="number" class="npd-form-counter-quantity" value="" name="npd-activity-AdultQuantity">0</div>

              <span class="npd-form-counter-btn npd-form-counter-plus" data-type="plus">＋</span>

            </div><!--npd-form-counter  成人結束-->
          </div><!--row npd-form-group 成人結束-->


          <!-------- 人數選擇(兒童) ------------>
          <!-- 兒童 -->
          <div class="row npd-form-group">
            <div class="npd-form-option col-md-9 d-flex p-0">
              <h5>兒童</h5>
              <p>TWD<span class="npd-form-price" data-price="<?= $r['price_child']?>"><?= $r['price_child']?></span></p>
            </div><!--npd-form-option結束-->

            <div class="npd-form-counter col-md-3 d-flex p-0">
              <span class="npd-form-counter-btn npd-form-counter-reduce active" data-type="reduce">－</span>
              
              <div id="child-qty" type="number" class="npd-form-counter-quantity" value="" name="npd-activity-ChildQuantity">0</div>

              <span class="npd-form-counter-btn npd-form-counter-plus" data-type="plus">＋</span>

            </div><!--npd-form-counter  兒童結束-->
          </div><!--row npd-form-group 兒童結束-->

            

 <!------------------------------------ 加購商品 ----------------------------->
            <!------------頁籤------------->
            <h2 class="npd-area8-tab2">加購商品</h2>

            <!-------- 加購商品(防水背包) ------------>
            <!-- 防水背包 -->
            <?php foreach($r_e as $e): ?>
            <div class="row npd-form-group">
              <div class="npd-form-option col-md-9 d-flex p-0">
                <h5><?= $e['name'] ?></h5>
                <p>TWD<span class="npd-form-price" data-price="<?= $e['price'] ?>"><?= $e['price'] ?></span></p>
              </div><!--npd-form-option結束-->
  
              <div class="npd-form-counter col-md-3 d-flex p-0">
                <span class=" npd-form-counter-btn npd-form-counter-reduce active" data-type="reduce">－</span>
                
                <div type="number" class="npd-form-counter-quantity" value="" name="npd-activity-Quantity">0</div>
  
                <span class="npd-form-counter-btn npd-form-counter-plus" data-type="plus">＋</span>
  
              </div><!--npd-form-counter  防水背包結束-->
            </div><!--row npd-form-group 防水背包結束-->
            <?php endforeach; ?> 
  
  


 <!------------------------------------ 總金額 ----------------------------->
<div class="npd-area8-total container-md">
  <!-------- 總金額 ----- -->
<div class="row npd-form-group npd-area8-rwd">
    <div class="col-8 npd-form-subpricewords">總金額</div>

    <div class="col-2 npd-form-sub-group">
      <p class="npd-form-subpricetext">TWD<span class="npd-form-subprice" data-subprice="">0</span></p>
    </div>
  </div>

  <!-------- 送出按鈕 ----- -->
<div class="row npd-form-group d-flex justify-content-center">
  <a class="btns btn-blue  btns2-npd" href="javascript:" role="button" id="cart-btn">放入購物車</a>
  <div class="npd-area8-btnblank col-1"></div>
  <a class="btns btn-white  btns2-npd" href="#" role="button">直接結帳</a>
</div>  
<div class="container">
<div id="info-bar" class="alert alert-success" role="alert" style="display:none">dsrfghrf</div>
</div>

</div><!-- npd-area8-total最下區金額結算 結束 -->

</div><!-- npd-area8   container-md結束 -->
</form><!-- form 結束 -->
</div><!--活動訂購以後的npd-DownBOX結束 -->
</div><!--活動訂購以後的webcontainer 結束 -->
  
      <!---------------------- area8 活動訂購/加購商品    html結束 -------------------->





      <!---------------------- area9 留言區    html開始 -------------------->
<div class="npd-area9">
  <div class="comment-card-group">
    <h4>我的評價</h4>
    <div class="comment-card">
        <figure>
            <img src="img/1-comment-1.jpg" alt="">
            <p>方小文</p>
        </figure>
        <div class="comment-content">
            <img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt="">
            <h6>用最夯 SUP 立槳探訪海上大象！</h6>
            <p class="comment-text">
                前情提要，我是唬爛產生器出來的，超過180字就收合。如果仔細思考SUP立槳
                新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北前情提要，我是唬爛產生器出來的，超過180字就收合。如果仔細思考SUP立槳
                新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。
            </p>
            <a href="javascript:"  style="text-decoration: none;" class="seeMore" role="button">MORE+</a>
            <p class="comment-date">體驗日期：2020/08/02</p>
          </div> <!-- comment-content結束 -->
        </div><!-- comment-card結束 -->

    <div class="comment-card">
        <figure>
            <img src="img/1-comment-2.jpg" alt="">
            <p>方小文</p>
        </figure>
        <div class="comment-content">
            <img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt="">
            <h6>用最夯 SUP 立槳探訪海上大象！</h6>
            <p class="comment-text">
                前情提要，我是唬爛產生器出來的，超過180字就收合。如果仔細思考SUP立槳
                新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北
            </p>
            <a href="javascript:" style="text-decoration: none;" class="seeMore" role="button">MORE+</a>
            <p class="comment-date">體驗日期：2020/08/02</p>
        </div> <!-- comment-content結束 -->
    </div><!-- comment-card結束 -->


    <div class="comment-card comment-card-final">
        <figure>
            <img src="img/1-comment-3.jpg" alt="">
            <p>方小文</p>
        </figure>
      

        <div class="comment-content">
            <img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt=""><img src="svg/svg-star.svg" alt="">
            <h6>用最夯 SUP 立槳探訪海上大象！</h6>
            <p class="comment-text">
                前情提要，我是唬爛產生器出來的，超過180字就收合。如果仔細思考SUP立槳
                新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。我想，把SUP立槳新北前情提要，我是唬爛產生器出來的，超過180字就收合。如果仔細思考SUP立槳
                新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳新北福隆其中蘊含的深遠意義。
            </p>
            <a href="javascript:" style="text-decoration: none;" class="seeMore" role="button">MORE+</a>
            <p class="comment-date">體驗日期：2020/08/02</p>
        </div>  <!-- comment-content結束 -->
    </div> <!-- comment-card結束 -->
</div><!-- comment-card-group結束 -->

<!-------------------------- 換頁頁數條 --------------------->
<div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups" >
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn"><i class="fas fa-chevron-left"></i></button>
    <button type="button" class="btn">1</button>
    <button type="button" class="btn">2</button>
    <button type="button" class="btn">3</button>
    <button type="button" class="btn">4</button>
    <button type="button" class="btn">5</button>
    <button type="button" class="btn"><i class="fas fa-chevron-right"></i></button>
  </div><!-- btn-group 結束 -->
</div><!-- btn-toolbar 結束 -->

</div><!-- npd-area9結束 -->

      <!---------------------- area9 留言區    html結束 -------------------->





      <!---------------------- area10 更多商品推薦    html開始 -------------------->
<div class="npd-area10 webcontainer npd-rwdcontainer">
<h3>多數旅客還體驗了以下活動 >></h3>
<div class="row">

<!--------- 第一張商品小卡 --------->
<div class="card3Outside col-md-4">
  <div class="card3">
    <div class="card3Top"></div>

    <div class="card3Down">
      <div class="card3DownBox">
        <div class="card3title">烏岩角獨木舟體驗</div>

        <div class="card3IntroIcon">
          <div class="card3Place card3Icon">
            <img src="svg/svg-locat.svg" alt="" width="12px">
            <p>宜蘭-東澳</p>
          </div>
          
          <div class="card3Time card3Icon">
            <img src="svg/svg-time.svg" alt="" width="12px">
            <p>3.5Hrs</p>
          </div>

          <div class="card3Signed card3Icon">
            <img src="svg/svg-star.svg" alt="" width="12px">
            <p>4.8</p>
          </div>
      </div><!-- card3DownBox結束 -->

      <div class="priceNheart">
        <div class="card3Price">
          <p>TWD</p><p class='price'>2000</p>
        </div>

        <svg class="Heart" width="25px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.93 23.27">
          <g id="Heart"><path id="Heart-2" class="cls-1" d="M649.46,374.45a6.71,6.71,0,0,0-9.5-.06l-.07.06-.94.94-.94-.94a6.76,6.76,0,0,0-9.56,9.56l10.5,10.5,10.5-10.5a6.72,6.72,0,0,0,.07-9.5l-.07-.06"
                              transform="translate(-626.02 -371.95)" /></g></svg>

      </div><!-- priceNheart結束 -->
      </div> <!-- card3DownBox結束 -->
    </div><!-- card3Down結束 -->
</div><!-- card3結束（第一張） -->
</div><!-- card3Outside結束） -->



<!--------- 第二張商品小卡 --------->
<div class="card3Outside col-md-4">
<div class="card3">
  <div class="card3Top"></div>

  <div class="card3Down">
    <div class="card3DownBox">
      <div class="card3title">烏岩角獨木舟體驗</div>

      <div class="card3IntroIcon">
        <div class="card3Place card3Icon">
          <img src="svg/svg-locat.svg" alt="" width="12px">
          <p>宜蘭-東澳</p>
        </div>
        
        <div class="card3Time card3Icon">
          <img src="svg/svg-time.svg" alt="" width="12px">
          <p>3.5Hrs</p>
        </div>

        <div class="card3Signed card3Icon">
          <img src="svg/svg-star.svg" alt="" width="12px">
          <p>4.8</p>
        </div>
    </div><!-- card3DownBox結束 -->

    <div class="priceNheart">
      <div class="card3Price">
        <p>TWD</p><p class='price'>2000</p>
      </div>

      <svg class="Heart" width="25px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.93 23.27">
        <g id="Heart"><path id="Heart-2" class="cls-1" d="M649.46,374.45a6.71,6.71,0,0,0-9.5-.06l-.07.06-.94.94-.94-.94a6.76,6.76,0,0,0-9.56,9.56l10.5,10.5,10.5-10.5a6.72,6.72,0,0,0,.07-9.5l-.07-.06"
                            transform="translate(-626.02 -371.95)" /></g></svg>

    </div><!-- priceNheart結束 -->
    </div> <!-- card3DownBox結束 -->
  </div><!-- card3Down結束 -->
</div><!-- card3結束（第二張） -->
</div><!-- card3Outside結束-->


<!--------- 第三張商品小卡 --------->
<div class="card3Outside col-md-4">
<div class="card3">
  <div class="card3Top"></div>

  <div class="card3Down">
    <div class="card3DownBox">
      <div class="card3title">烏岩角獨木舟體驗</div>

      <div class="card3IntroIcon">
        <div class="card3Place card3Icon">
          <img src="svg/svg-locat.svg" alt="" width="12px">
          <p>宜蘭-東澳</p>
        </div>
        
        <div class="card3Time card3Icon">
          <img src="svg/svg-time.svg" alt="" width="12px">
          <p>3.5Hrs</p>
        </div>

        <div class="card3Signed card3Icon">
          <img src="svg/svg-star.svg" alt="" width="12px">
          <p>4.8</p>
        </div>
    </div><!-- card3DownBox結束 -->

    <div class="priceNheart">
      <div class="card3Price">
        <p>TWD</p><p class='price'>2000</p>
      </div>

      <svg class="Heart" width="25px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.93 23.27">
        <g id="Heart"><path id="Heart-2" class="cls-1" d="M649.46,374.45a6.71,6.71,0,0,0-9.5-.06l-.07.06-.94.94-.94-.94a6.76,6.76,0,0,0-9.56,9.56l10.5,10.5,10.5-10.5a6.72,6.72,0,0,0,.07-9.5l-.07-.06"
                            transform="translate(-626.02 -371.95)" /></g></svg>

    </div><!-- priceNheart結束 -->
    </div> <!-- card3DownBox結束 -->
  </div><!-- card3Down結束 -->
</div><!-- card3結束（第三張） -->
</div><!-- card3Outside結束-->


</div><!-- row 結束 -->
</div><!-- webcontainer -->

<?php include __DIR__. '/__footer.php' ?>
<?php include __DIR__. '/__scripts.php' ?>

<!-- 自己的script寫這邊 -->
<script>
  TweenMax.to("#wave", 2, {
      attr: {
          d: "M0 120 Q360 180 720 120 T 2000 120 V240 H0 Z"
      },
      ease: Power1.easeInOut,
      repeat: -1,
      yoyo: true
  })
</script>

  <!---------- 計數器加總  script---------- -->
  <script>

  

    
  
$(".npd-form-counter-btn").on("click",function(){
  let row=$(this).closest(".npd-form-group");
  let qty=parseInt(row.find(".npd-form-counter-quantity").text());
  
  if($(this).data("type")=="plus"){
    qty++
    if(qty>4)qty=4;

  }else{
    qty--;
    if(qty<0)qty=0;
          
  }

  if(qty==4){
    row.find('.npd-form-counter-plus').addClass('active')
  }else if(qty==0){
    row.find('.npd-form-counter-reduce').addClass('active')
  }else{
    row.find('.npd-form-counter-btn').removeClass('active')
  }

  row.find(".npd-form-counter-quantity").text(qty)
  // let price=parseInt(row.find(".npd-form-price").text());
  // let subtotal=qty*price;
  // console.log(subtotal);
  
  let total=0;
  $(".npd-form-group").each(function(){

    let price=$(this).find(".npd-form-price").text();
    let amt=$(this).find(".npd-form-counter-quantity").text();
    let subtotal=amt*price;
    total += subtotal;
    $(".npd-form-subprice").text(total)
  })


});







const cart_btns = $('#cart-btn');

cart_btns.click(function(){
const buy_form = $(this).closest('.buy-form');
const sid = buy_form.attr('data-sid');
const date = buy_form.find('#np_activityDate').val();
const time = buy_form.find('#np_activityTime').val();
const adult_qty = buy_form.find('#adult-qty').text();
const child_qty = buy_form.find('#child-qty').text();
const total_price = buy_form.find('.npd-form-subprice').text()

// console.log(total_price)


const sendObj = {
    action: 'add',
    sid,
    date,
    time,
    adult_qty,
    child_qty,
    total_price

}

// post表單
$.get('handle-cart.php', sendObj, function(data){
    console.log(data);
    setCartCount(data);
    info_bar = $('#info-bar');
    if(data.code == 260){
      
                info_bar.removeClass('alert-danger')
                    .addClass('alert-success')
                    .html('加入成功');
            
    } else if(data.code === 210){
                info_bar.removeClass('alert-success')
                    .addClass('alert-danger')
                    .html('已在您的購物車');
            }
            info_bar.slideDown();

            setTimeout(function(){
                info_bar.slideUp();
            }, 2000);

}, 'json');
});










// <!---------- 評論小卡  script---------- -->

$(".seeMore").click(function (){
  $(this).closest(".comment-content").find(".comment-text").toggleClass("active")
})

</script>

<?php require __DIR__. '/__html_foot.php'?>