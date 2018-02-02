<!-- head start -->
<div class="head_time">
    <div id='index_time' class="index_time">
        <span id='index_data'></span>
        <span id='index_week'></span>
    </div>
</div>
<div class="head">
    <div class="head_wapper">
        <div class="head_logo clearfix">
            <a href="./main.php">
            <img src="./images/logo.png" alt="LOGO">
            </a>
            <div class="head_logo_search">
                <ul class='clearfix'>
                    <li><a href="javascript:;">政策</a></li>
                    <li><a href="javascript:;">融资</a></li>
                    <li><a href="javascript:;">咨询</a></li>
                </ul>
                <input type="search" name="txt_search" id="txt_search" placeholder="请输入关键词" autocomplete required>
                <img src="./images/index_icon_1.png" alt="search">
            </div>
        </div>
        
    </div>
</div>
<div class="headn">
    <div class="headn_wapper">
        <div class="head_nav clearfix" >
            <ul >
                <li ><a href="./main.php" class='index_nav_thispage'>首页</a></li>
                <li><a href="./3-1-1.php">9+1+N</a></li>
                <li><a href="12-1.php">产融基地</a></li>
                <li><a href="./5-1-1.php">暗物质智库</a></li>
                <li><a href="./7-1.php">重点项目</a></li>
                <li><a href="9-1.php">金融服务</a></li>
                <li><a href="2-1-1.php">大数据</a></li>
                <li><a href="11-1.php">特色小镇</a></li>
                <li><a href="luntan_index.php">论坛·大赛</a></li>
                <li><a href="./8-0.php">联盟</a></li>
                <li><a href="./10-2.php">成员服务</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- header -->
<div class="public-head-7 clearfix Fixed">
	<div class="public-head-7-inner-box clearfix">
		<div class="public-head-7-inner clearfix">

			<!-- logo -->
			<div class="ph7-logo">
				<a href="main.php" title="">
					<img src="./images/logo.png" alt="" class='logo_head_one'>
                    <img src="./images/logo.png" alt="" class='logo_head_one'>
                    <img src="./images/head_right_btn_03.png" alt="" class='return_head_btn'>
				</a>
			</div>
			<!-- End logo -->

			<!-- 手机端导航 -->
			<div class="hamburger hamburger--collapse js-hamburger" id="hamburger">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
			<!-- End 手机端导航 -->

			<div class="ph7-pc-nav-box clearfix" id="menu">

				<ul class="ph7-pc-nav clearfix">
					<li><a href="./main.php" title="" class="nav-item"><span>首页</span></a></li>
					<li><a href="./3-1-1.php" title="" class="nav-item"><span>9+1+N</span></a>
						<!--<ul class="nav-item-sub">
							<li><a href="javascript:void(0)" title=""><span>1</span></a></li>
							<li><a href="javascript:void(0)" title=""><span>2</span></a></li>
							<li><a href="javascript:void(0)" title=""><span>3</span></a></li>
						</ul>-->
					</li>
					<li><a href="12-1.php" title="" class="nav-item"><span>产融基地</span></a></li>
					<li><a href="./5-1-1.php" title="" class="nav-item"><span>暗物质智库</span></a></li>
					<li><a href="7-1.php" title="" class="nav-item"><span>重点项目</span></a></li>
					<li><a href="9-1.php" title="" class="nav-item"><span>金融服务</span></a></li>
					<li><a href="2-1-1.php" title="" class="nav-item"><span>大数据</span></a></li>
                    <li><a href="11-1.php" title="" class="nav-item"><span>特色小镇</span></a></li>
                    <li><a href="luntan_index.php" title="" class="nav-item"><span>论坛·大赛</span></a></li>
                    <li><a href="./8-0.php" title="" class="nav-item"><span>联盟</span></a></li>
                    <li><a href="./10-1.php" title="" class="nav-item"><span>成员服务</span></a></li>
				</ul>

				<button type="button" class="btn btn-default navbar-btn navbar-right">Contact</button>

				<form class="navbar-form navbar-right" action="bootstrap-navbar.php" method="GET">
					<div class="form-group">
						<input name="s" type="text" class="form-control" placeholder="Search">
					</div>
				</form>

			</div>

		</div>
	</div>
</div>


<script>
window.onload=function(){
setTimeout(function(){
fnDate();
},0);
}
function fnDate(){
var oDiv=document.getElementById("index_data");
var oWeek = document.getElementById('index_week');
var date=new Date();
var year=date.getFullYear();
var month=date.getMonth();
var data=date.getDate();
var time=year+"年"+fnW((month+1))+"月"+fnW(data)+"日";
newTime = time;
oDiv.innerHTML=newTime;

var str = "星期";  
var week = new Date().getDay();  
switch (week) {  
        case 0 :  
                str += "日";  
                break;  
        case 1 :  
                str += "一";  
                break;  
        case 2 :  
                str += "二";  
                break;  
        case 3 :  
                str += "三";  
                break;  
        case 4 :  
                str += "四";  
                break;  
        case 5 :  
                str += "五";  
                break;  
        case 6 :  
                str += "六";  
                break;  
} 
// alert(str)
oWeek.innerHTML = str;

}
function fnW(str){
var num;
str>10?num=str:num="0"+str;
return num;
} 
</script>
<!-- End headr -->
<!-- 导航开始 -->
<!-- 导航结束 -->

<!-- head end -->

