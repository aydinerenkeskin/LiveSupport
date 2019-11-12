<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dcad506d96992700fc716ac/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<?php
$iphone = stristr(@$_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = stristr(@$_SERVER['HTTP_USER_AGENT'],"Android");
$webos = stristr(@$_SERVER['HTTP_USER_AGENT'],"webOS");
$bberry = stristr(@$_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = stristr(@$_SERVER['HTTP_USER_AGENT'],"iPod");
if ($iphone || $android || $webos || $ipod || $bberry == true)
{
?>
  <div style="width:300px;position:fixed;top:450px;left: 0px;z-index:99999;font-size:12px;">
    <a href="https://api.whatsapp.com/send?phone=905067808871">
      <img style="width:40px;" src="https://demobul.net/images/whatsapp.png" alt="whatsapp">
    </a>
  </div>
<?php }else{?>
  <div style="width:300px;position:fixed;top:500px;left: 10px;z-index:99999;font-size:12px;">
    <a href="https://api.whatsapp.com/send?phone=905067808871" target="_blank">
      <img style="width:50px;" src="https://demobul.net/images/whatsapp.png" alt="whatsapp">
    </a>
  </div>
<?php } ?>