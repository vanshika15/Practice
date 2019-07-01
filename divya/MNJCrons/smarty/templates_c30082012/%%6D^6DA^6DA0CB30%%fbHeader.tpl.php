<?php /* Smarty version 2.6.19, created on 2012-08-15 16:12:15
         compiled from /usr/local/apache/htdocs/naukrijobs/tpl/fbHeader.tpl */ ?>
<style type="text/css">
.f10 { font-size:10px; font-family:verdana,arial }
.f11{ font-size: 11px}
.dispNone{display: none}
/* Naukri Jobsearch CSS */
.suggestion_list{background: #E9EFF6;border: 1px solid #CDD4D9;border-top: 0 ;padding: 4px;font: normal 11px verdana,arial;line-height: 18px;}
.suggestion_list ul{padding: 0;margin: 0;list-style-type: none;z-index:1000;}
.suggestion_list a{text-decoration: none;color: #000;}
.suggestion_list .selected{background: #6BADC9;color: white;}
.suggestion_list .selected a{color: white;padding-left: 5px;}
#autosuggest{display: none;}
.lf{float:left;}
.rf{float:right;}
.bl a{font:normal 11px verdana; color:#0000cc; line-height:20px; padding:0;}
.banner{position:absolute; right:2px; top:15px; padding:15px 0 5px 5px;width:480px;}
.cl{clear:both;}
.w740{width:740px;}
.srcbg h1{margin:0; padding:0; color:#333; font:normal 18px Arial, Helvetica; float:left; width:120px; padding-top:5px;}
.ltGreyN{color:#d5dae0; font:normal 11px Arial, Helvetica, sans-serif;padding: 10px 0 0 40px;}
.ltGreyN1{color:#999;}
.ltGreyN ul{margin:0; padding:0; list-style:none;}
.ltGreyN ul li{margin:0; padding:2px 0 0 0; float:left;}
.onCBg{background-color:#fff; border:1px solid #35658b; border-bottom:none;padding:5px 5px 0 5px; z-index:200; position:relative;}
.onCBg a{padding:1px 14px 0 5px; display:block;}
.w300{width:300px;}
.w180{width:180px}
.w275{width:275px}
.p10N{padding:5px 0 5px 10px;}
.drArr:link, .drArr:visited, .srcbg a{color:#4886eb; text-decoration:none;}
.pLinks, .pLinksY{padding:8px; border-bottom:1px solid #f1f1f1;}
.pLinks a, .pLinksY a{color:#315291; text-decoration:none; display:block;}
.pLinksY{background:#feffc1;}
.t12n{font-size:12px;}
.lgryTp{border-top:1px solid #e2e6e9; padding:5px 0 5px 5px;}
.pr5{padding-right:5px;}
.ft10{font-size:10px;}
.txt1{font:normal 10px Verdana, Arial;}
.p0{padding:0;}
.btnSubtL{background-position:0px -155px; float:left; display:block; text-align:center;padding:0; margin:0; padding-left:8px; font:bold 11px Verdana, Arial;height:23px; line-height:23px; }
.btnSubtR{background-position:right -77px; float:left; display:block; padding:0 8px 0 0; margin:0 0 0 -3px;height:23px; line-height:23px;  } 
.btnMP{margin:0; padding:0; border:0; background:transparent;}
.w1{width:70px;}
.w100{width:100px;}
.h8{height:8px; line-height:8px;}
.errSrc{padding-top: 4px; clear: both; color:#F00; float:left;}
.ml10{margin:0 5px;}
.jF{color:#CC6600; font:bold 18px Arial, Helvetica;}
.mlr5{margin:0 5px;}
.help{background-position:-37px -55px; width:13px; height:18px; cursor:pointer; text-decoration:none;}
.pt10{padding-top:10px;}
.jc{position:relative; padding-top:15px; border:1px solid #fff;}
.posAbs, .posAbs1{ border:1px solid #A2D4ED; border-width:0 1px; padding:0px 5px; width: 746px }
.posAbs1{border:0; padding:0; margin-top:10px;}
.bdrTpsc{border:1px solid #A2D4ED;border-width:1px 1px 0 1px; width: 756px}
.bdrBtsc{border:1px solid #A2D4ED;border-width:0 1px 1px 1px; padding-bottom:3px; width: 756px}
.posAbs_b, .posAbs1_b{margin-left: 10px; margin-right: 200px; border:1px solid #A2D4ED; border-width:0 1px; padding:0px 5px; }
.posAbs1_b{border:0; padding:0; margin-top:10px;}
.bdrTpsc_b{border:1px solid #A2D4ED;border-width:1px 1px 0 1px;margin-left: 10px; margin-right: 200px;}
.bdrBtsc_b{border:1px solid #A2D4ED;border-width:0 1px 1px 1px; padding-bottom:3px;margin-left: 10px; margin-right: 200px;}
.chkAbs{position:absolute; left:0; top:23px;}
.jd1{margin:0 10px 0 10px; padding-bottom:15px; padding-top:1px; border-bottom:1px dotted #999;}
.jd1 a{color:#0043CC;text-decoration:none;}
.jd1 a, .jd1 span, .jd1 div{font:normal 11px Arial, Helvetica, sans-serif; line-height:16px; text-align: justify}
.jd1 .lk1{color:#0043CC; text-decoration:underline; font:bold 13px Arial}
.jd1 .grn{color:#008000; font-size:12px;}
.jd1 .blk{color:#000; font-size:12px;}
.jd1 em{font-style:normal; color:#000; font-size:12px;}
.pt3{padding-top:3px;}
.l_m, .l_m:link, .l_m:visited, .l_m1, .l_m1:link, .l_m1:visited{font-weight:bold; padding:3px 15px 3px 0px; text-decoration:none;color:#0000FF;}
.l_m span, .l_m1 span{color:#0000FF}
.l_m1, .l_m1:link, .l_m1:visited{background-position:right -735px;}
.m_rHd{background:#efefef; font:bold 12px/22px Verdana, Arial, Helvetica, sans-serif; color:#333; height:22px; padding:0 10px;}
.cls{clear:both;}
.m_rbdr{border:1px solid #dbdbdb; margin-top:10px;}
.pad10{padding:10px; line-height:16px;color:#333;}
.ctcNew{color:#002394}
.midmrCont div{font:normal 11px Verdana, Arial, Helvetica, sans-serif; line-height:16px; padding-top:0;}
.pdt10{margin-top:10px;}
.grnColmr{color:#57b701}
.mrUnder:link{text-decoration:underline; font-size:12px; color:#007de7}
.svJobLink{width:50px; line-height:20px; font-size:11px; color:#007de7; font-weight:bold; border:1px solid #007de7; padding:0px 5px;margin-right:5px}
.frmr{float:right;}
.ctc {float:left; margin-top:4px; padding-right:10px; text-align:right; width:65px;}
.lower {color:#0E900A;float:left;margin-left:5px;margin-top:4px;width:56px;}
.higher {color:#A71716;float:left;margin-left:5px;margin-top:4px;width:55px;}
.matching {float:left; margin-left:5px; margin-top:4px; width:66px;}
.m_r{cursor:pointer;background-position:right -742px;padding-right:10px;}
.m_d{cursor:pointer;background-position:right -761px;padding-right:10px;}
.bdrBR{border:1px solid #a2d4ed; border-width:0 1px 1px 0;}
.mnBdr{border:1px solid #a2d4ed; border-width:1px 0 0 1px;}
.ltBotBdr{border-bottom:1px solid #a2d4ed;}
.ltBotBdr a{color:#0000ff}
.ltTopHd{color:#373735; font-size:15px;font-weight:bold}
.pt58{padding:5px 10px;}
.ltHeadN{clear:both;background:#e1f3fc; border:1px solid #a2d4ed; color:#565656; font-size:14px;font-weight:bold;padding:3px 6px;}
.p3Rn{padding:3px 0 3px 3px}
.p3{padding:3px;}
.p36{padding:3px 6px;}
#pane-left a{text-decoration:none}
.lh20{line-height:20px;}
.selBld{font-weight:bold}
.ulliLt ul{list-style:none; margin:0; padding:0;}
.ulliLt ul li{clear:both;margin:0; padding:5px 0 3px 0; font-size:11px;width:95%;}
.ulliLt a{color:#0000ff}
.bdrBottom ul li{border-bottom:1px solid #dedede;}
.bdrBottom img{border:1px solid #dedede;}
.mrole{color:#7d7d7d;font-size:11px;font-weight:bold;padding-top:10px;}
.w76{height:76px;}
.pnLeft{width:195px;background:#fff; position:relative; font-weight:normal; padding:0; margin:0; overflow:hidden;}
.img4 {background-position:-30px -160px; width:21px; height:25px;}
.rss{background-position:0px -58px; width:25px; height:11px;float:left;}
.t11lb{font:normal 11px verdana,arial; color:#000}
.t11lb a{font:normal 11px verdana,arial; color:#4786ef; text-decoration:underline}
.t12b{font:bold 12px verdana,arial; color:#7c87c6}
.t12b a{font:bold 12px verdana,arial; color:#7c87c6; text-decoration:underline}
.t12n{font:normal 11px arial,verdana; color:#666666}
.t12n a{font:normal 12px arial,verdana; color:#4886eb; text-decoration:none}
.hd1{font:bold 12px verdana,arial; color:#000}
.t11ft, .t10ft{font:normal 11px verdana,arial; color:#000;}
.t11ft a, .t10ft a{font:normal 11px verdana,arial; color:#000; text-decoration:none; line-height:18px}
.t10ft, .t10ft a{font-size:10px;}
.t12{font:bold 12px arial; color:#000}
.t12nr{font:normal 12px arial; color:#000}
.t12nr a{font:normal 12px arial; color:#0000CC; text-decoration:underline}
.t11{font:normal 11px verdana,arial; color:#000}
.t10s{font:normal 10px verdana,arial; color:#000}
.t10s a{font:normal 10px verdana,arial; color:#003498; text-decoration:underline}
.t14b{font:bold 14px arial; color:#000}
.t12tah{font:bold 12px tahoma; color:#000}
.ad{border:1px solid #b6d3f0; padding:10px; width:130px}
.unit{height:58px; border-bottom:1px solid #6da3e3; background:#e5ecf9;}
.u1{padding:15px; float:left}
.dtdln{ background-image:url(http://static.naukimg.com/jobsearch/images/dotline.gif); background-repeat:repeat-x; line-height:3px; width:100%; margin:0px 0px 0px 0px; clear:left}
.doty{padding:0 0 0 10px; margin:0;}
.dp10{clear:both;padding:10px 0}
.jdtl{width:90%; padding:2px 10px 0px 3px; float:left;}
.jdtl a{text-decoration:none}
.jdtl span{ line-height:17px; padding-top:0px;margin:0px}
.jdtl div{ line-height:17px; padding-top:0px; }
.d1{font:bold 13px arial; color:#0043cc; text-decoration:underline}
.d2{font:normal 13px arial; color:#000; text-decoration:none; padding-left:10px}
.d3{font:normal 12px arial;text-decoration:none; color:#000; line-height:16px}
.d4{font:normal 12px arial;color:#008000;}
.d5{font:normal 11px arial;padding:5px 0px 10px 0px; color:#666666; text-decoration:none;}
.d5 a{color:#6a6acc; text-decoration:none;}
.t12l, .t12l a{font:normal 12px verdana; color:#4886eb; line-height:25px; text-decoration:none; display:block}
.t12l a:hover{color:#4886eb; background-color:#ececec; text-decoration:none; width:98%;}
.ctcsel{padding-right: 0px; padding-left: 145px;  float: left; padding-bottom: 0px; font: 10px Verdana; color: #000; padding-top: 2px}
input{font:normal 11px verdana,arial}
.pd{padding:7px;}
.bl a{font:normal 11px verdana; color:#0000cc; line-height:20px}
.spacer{clear: both;line-height:5px;}
.spacer30{clear: both;line-height:30px;}
.lineb{background:#145ea4; line-height:1px; width:265px; margin:0 auto}
.hdm{font:bold 17px arial}
.line{line-height:7px; background:#2375c2; clear:both}
.linebg{ background:url(http://static.naukimg.com/jobsearch/images/search_mbg.gif) top repeat-x}
.textbox {font:normal 10px Verdana,Arial;}
.hd{font:bold 17px arial}
.hr{line-height:2px; color:#ccc;}
form{padding:0px; margin:0px;}
.tgrey{font:normal 11px verdana,arial; color:#A3A3A3}
.t11ft a:hover, .t10ft a:hover{font:normal 11px verdana,arial; color:#000; text-decoration:underline; line-height:18px}
.t10ft a:hover{font-size:10px}
.t10{font:normal 10px verdana,arial; color:#000;}
#container{width:100%;margin:0px auto;}
#content{margin-right:195px;margin-left:200px;padding:0em;}
#contentm{float:left;padding:0em;}
.dotx{background:url(http://static.naukimg.com/jobsearch/images/dotline.gif) repeat-x; width:100%; line-height:1px; margin:10px 0 0px 0}
.hd3{font:normal 22px arial,verdana; color:#000}
.brbox{clear: both; background: #f6f9fc; margin: 0px auto; font: 10px/18px verdana; width: 100%; color: #000; text-decoration: none}
.brbox a {color: #000; text-decoration: none}
.brbox a:hover {color: #0000cc; text-decoration: underline}
.brnd{border:1px solid #b3bcc5;background: #f3f3f3; width: 156px;}
.brnd ul {padding:0 13px;margin: 0px; list-style-type:none}
.brnd li {border:1px solid #d0d0d0;margin-TOP: 8px; background: #fff; width: 125px; height: 45px; text-align: center}
.brndhd{padding:4px; background: #2375c2; font: bold 11px verdana; color: #fff;}
.t22gr{font: 22px verdana; color: #77c805}
.t22yel{font: 22px verdana; color: #cc6600; font-size-adjust: none; font-stretch: normal}
.dtline{background: url(http://static.naukimg.com/jobsearch/images/dtline.gif) repeat-x; line-height: 3px}
.t16{font: bold 16px verdana; color: #525252}
.t16r{font: bold 16px verdana; color: #ff0000}
.t18rd{font: 18px verdana; color: #ff0000}
.t10b{font: bold 10px verdana; color: #000; text-decoration: none}
.brd {float: left; padding-bottom: 3px; width: 25px}
.brw{width: 80%; padding-top: 3px}
.bkbt{padding:10px 12px 10px 6px;font: 12px verdana; width: 165px; color: #333; text-decoration: none}
.bkbt a {padding:10px 12px 10px 6px;background: url(http://static.naukimg.com/jobsearch/images/bkbtbg.gif) no-repeat; width: 170px; cursor: default; color: #333;text-decoration: none}
.bkbt a:hover {background: url(http://static.naukimg.com/jobsearch/images/bkbtbg2.gif) no-repeat}
.errorcss{background:#fff5f5;border:1px solid #ff0000;}
.errormess{background:#fffbd3; color:#e90000;font:normal 12px/20px verdana; padding:6px 10px; margin-top:10px;}
.fl{float:left;}
h1.brdCrumbN{margin:0 0 0 16px; padding:0; font:normal 11px verdana;}
#footer{margin:0; padding:0;}
.nonjsTable td{font-size:11px;}
.error1 {border:1px solid #FF0000; line-height:15px; color:#DE0101; font-family:verdana,arial; font-size:11px;}
.ltGreyN2{color:#999;}
  
 
.selMainNavR, .btnSubtR{background:transparent url(http://static.naukimg.com/jobsearch/images/buttonsR.png) no-repeat right 0;}
.sepMainNav, .srcTlt, .srcTrt, .srcBlt, .srcBrt, .searchLt, .searchRt, .rlKeyR_rk, .rlKey_rk, .help, .l_m1, .m_r, .m_d, .img4, .pResumeTL, .pResumeTR, .pResumeBL, .pResumeBR, .rss, .img1, .img2{background:transparent url(http://static.naukimg.com/jobsearch/images/optimized_10.png) no-repeat 2px -166px;}
.smrbg, .smlbg{background:transparent url(http://static.naukimg.com/jobsearch/images/bgsH.png) repeat-y 0 0; width:7px;}
.drArr{background:url(http://static.naukimg.com/jobsearch/images/optimized_10.png) no-repeat right -517px; padding-right:10px; display:block; padding-top:0px; height:15px; line-height:15px; float:left;}
 .img1 { background-position:-30px -107px; display:block; height:15px;  line-height:15px; width:20px; height: 15px;}
 .img2{background-position:4px -166px; width:20px; display:block; height: 15px;}
 
 .pagination{padding: 2px 2px 2px 2px; }
.pagination ul{margin: 0;padding: 0;text-align: left; font:normal 11px arial }
.pgdis{border: 1px solid #929292;color: #929292; background:#FFF; margin:0 2px 0 4px; font:normal 11px verdana }
.pgsel{  background-color:#fff; border:medium none; color:#2E6AB1; cursor:pointer; font:normal 11px tahoma; line-height:normal; margin:0 0; padding:1px 0; width:20px; }
.pgdes, .pgdes:link, .pgdes:visited{ background-color:#fff;  border-bottom: 2px solid #2E6AB1; border-style:none none solid; border-width:0 0 2px; color:#2E6AB1; font:bold 11px tahoma; line-height:normal;  margin:0 2px; padding:1px 0;  width:15px; }
 
/* Naukri Jobsearch CSS */

 /* CSS added by Subin starts*/
.cls{clear: both}
.topbg{ background:#fff url(<?php echo $this->_tpl_vars['IMAGES_PATH']; ?>
/nksprite1.png) 0 0 repeat-x; float: left; width:740px;}
.srchpanel{padding: 15px 10px 13px; }
.fleft{ float: left}
.spacer1{ clear: both; overflow: hidden; height: 1px}
.pdrt10{ padding-right: 10px}
.pdtp15{ padding-top: 15px}
.fright{ float: right}
.inputSub{ height: 20px; width:67px; border: 0px; color:#000; cursor: pointer;font: bold 11px "lucida grande", tahoma, verdana, arial, sans-serif; text-align:center; background:url(<?php echo $this->_tpl_vars['IMAGES_PATH']; ?>
/nksprite1.png) no-repeat 0 -233px; padding-bottom: 3px}
.fbBox{display: block; text-align: right;  width: 190px }
.nkBox{width: 520px;  display: block;}
h2.invtFriends { background:#6D84B4 none repeat scroll 0 0; border-color:#3B5998 #3B5998 -moz-use-text-color; border-width:1px 1px medium; color:#fff; font-size:10px; font-weight:bold; margin:0; text-align:left; text-indent:6px; width: 190px }
.invtFrnbox{background-color:#F7F7F7; width: 190px;}
.spacer10{ overflow: hidden; height: 10px; clear: both}
.ht90{height:90px;overflow:hidden;}
/* CSS added by Subin ends*/
 </style>
<div class="fleft" style="padding:13px;"> 
   <fb:add-section-button section="profile"  />
</div>
<div class="fright"> <img src="<?php echo $this->_tpl_vars['IMAGES_PATH']; ?>
/naukriLogo.png" width="241" height="56" alt="Naukri.com" longdesc="http://www.naukri.com" /><br />
 </div>
<div class="spacer1"> </div>
<fb:title>Naukri Job Search</fb:title>
<fb:tabs>  
<fb:tab-item href='index.php' title='Job Search' <?php if ($this->_tpl_vars['caller'] == 'index'): ?>selected='true'<?php endif; ?> />
<!-- <fb:tab-item href='recommend.php' title='Recommendation' <?php if ($this->_tpl_vars['caller'] == 'recommend'): ?>selected='true'<?php endif; ?>/> -->
<fb:tab-item href='http://www.naukri.com/tieups/tieups.php?othersrcp=9895' title='Post Your Resume' />
<fb:tab-item href='invite.php' title='Invite Friends' <?php if ($this->_tpl_vars['caller'] == 'invite'): ?>selected='true'<?php endif; ?> />
</fb:tabs>
