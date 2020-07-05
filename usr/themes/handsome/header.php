<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
    $options = Typecho_Widget::widget('Widget_Options');
    define("THEME_URL", rtrim(preg_replace('/^'.preg_quote($options->siteUrl, '/').'/', $options->rootUrl.'/', $options->themeUrl, 1),'/'));

?>
<!DOCTYPE HTML>
<html class="no-js" <?php if($this->options->langis == '0'): ?>lang="en"<?php elseif($this->options->langis == '1'): ?>lang="zh-cmn-Hans"<?php elseif($this->options->langis == '2'): ?>lang="zh-cmn-Hant"<?php endif; ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="<?php $this->options->charset(); ?>">
<!--IE 8浏览器的页面渲染方式-->
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<!--默认使用极速内核：针对国内浏览器产商-->
<meta name="renderer" content="webkit">
<!--针对移动端的界面优化-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--chrome Android 地址栏颜色-->
<?php if($this->options->ChromeThemeColor): ?>
<meta name="theme-color" content="<?php $this->options->ChromeThemeColor() ?>" />
<?php endif; ?>
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->is('index')) : ?> - <?php $this->options->titleintro() ?><?php endif; ?>
</title>
<?php $this->header(); ?>
<?php if($this->options->favicon): ?>
<link rel="icon" type="image/ico" href="<?php $this->options->favicon() ?>">
<?php endif; ?>


<!-- 第三方CDN加载CSS -->
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js" data-no-instant></script>
<!-- 本地develope版本 -->
<!--
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css') ?>" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/iconfont.css') ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font.css') ?>" type="text/css" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/OwO.min.css') ?>" type="text/css" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.css') ?>" type="text/css" />-->



    <!-- 本地compass版本 -->
  <link rel="stylesheet" href="<?= THEME_URL ?>/css/appall.min.css" type="text/css" />
  <script src="<?= THEME_URL ?>/js/OwO.min.js"></script>

  <link href="//cdn.bootcss.com/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">



<style type="text/css">
<?php if ( $this->options->ismobilehide =='0' ) : ?>
@media only screen and (max-width:766px){.ymusic{display:none}}
<?php else: ?>
<?php endif; ?>
<?php if($this->options->progresscolor) : ?>
  #instantclick-bar {
    background: <?php $this->options->progresscolor() ?>!important;
  }
<?php endif; ?>
  html.bg{
  <?php if ( $this->options->BGtype =='0' ) : ?>
    background: <?php $this->options->bgcolor(); ?> ;
  <?php elseif ( $this->options->BGtype =='1' ) : ?>
    background: url('<?php $this->options->bgcolor(); ?>') fixed;
    background-size: cover;
  <?php elseif ( $this->options->BGtype == '2'): ?>
       <?php if($this->options->GradientType == '0'): ?>
           background-image:
               -moz-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
               -moz-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
               ;
           background-image:
               -o-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
               -o-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
               ;
           background-image:
               -ms-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
               -ms-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
               ;
           background-image:
               -webkit-radial-gradient(0% 100%, ellipse cover, #96DEDA    10%,rgba(255,255,227,0) 40%),
               -webkit-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
               ;
       <?php elseif($this->options->GradientType == '1'): ?>
           background-image:
               -moz-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
               -moz-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
               -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -moz-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
               ;
           background-image:
               -o-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
               -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
               -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -o-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
               ;
           background-image:
               -ms-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
               -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
               -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -ms-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
               ;
           background-image:
               -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
               -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
               -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -webkit-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
               ;
       <?php elseif($this->options->GradientType == '2'): ?>
           background-image:
               -moz-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
               -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -moz-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
               ;
           background-image:
               -o-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
               -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -o-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
               ;
           background-image:
               -ms-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
               -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -ms-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
               ;
           background-image:
               -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
               -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -webkit-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
               ;
       <?php elseif($this->options->GradientType =='3'): ?>
           background-image:
               -moz-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
               -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -moz-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
           ;
           background-image:
               -o-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
               -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -o-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
           ;
           background-image:
               -ms-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
               -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -ms-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
           ;
           background-image:
               -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
               -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -webkit-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
               ;
       <?php elseif($this->options->GradientType =='4'): ?>
           background-image:
               -moz-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
               -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -moz-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
               ;
           background-image:
               -o-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
               -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -o-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
               ;
           background-image:
               -ms-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
               -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -ms-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
               ;
           background-image:
               -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
               -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
               -webkit-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
               ;
       <?php elseif($this->options->GradientType =='5'): ?>
           background-image: #DAD299; /* fallback for old browsers */
           background-image: -webkit-linear-gradient(to left, #DAD299 , #B0DAB9); /* Chrome 10-25, Safari 5.1-6 */
           background-image: linear-gradient(to left, #DAD299 , #B0DAB9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       <?php elseif($this->options->GradientType =='6'): ?>
           background-image: linear-gradient(-20deg, #d0b782 20%, #a0cecf 80%);
       <?php elseif($this->options->GradientType =='7'): ?>
           background: #F1F2B5; /* fallback for old browsers */
           background: -webkit-linear-gradient(to left, #F1F2B5 , #135058); /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to left, #F1F2B5 , #135058); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *
       <?php elseif($this->options->GradientType =='8'): ?>
           background: #02AAB0; /* fallback for old browsers */
           background: -webkit-linear-gradient(to left, #02AAB0 , #00CDAC); /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to left, #02AAB0 , #00CDAC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       <?php elseif($this->options->GradientType =='9'): ?>
           background: #C9FFBF; /* fallback for old browsers */
           background: -webkit-linear-gradient(to left, #C9FFBF , #FFAFBD); /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to left, #C9FFBF , #FFAFBD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       <?php endif; ?>
                <?php endif; ?>
  }
  <?php $this->options->customCss() ?>/*自定义css代码输出位置*/
</style>
    
  <!--网站统计代码-->
<script data-no-instant type="text/javascript">
<?php $this->options->analysis(); ?>
</script>

</head>
<body id="body">

<div id="alllayout" class="app">
<script type="text/javascript">
  <?php if (!empty($this->options->indexsetup) && in_array('aside-fix', $this->options->indexsetup)): ?>
    $('#alllayout').addClass("app-aside-fixed");
<?php endif; ?>
<?php if (!empty($this->options->indexsetup) && in_array('aside-folded', $this->options->indexsetup)): ?>
    $('#alllayout').addClass("app-aside-folded");
<?php endif; ?>
<?php if (!empty($this->options->indexsetup) && in_array('aside-dock', $this->options->indexsetup)): ?>
    $('#alllayout').addClass("app-aside-dock");
<?php endif; ?>
<?php if (!empty($this->options->indexsetup) && in_array('container-box', $this->options->indexsetup)): ?>
  $('html').addClass("bg");
  $('#alllayout').addClass("container");
<?php endif; ?>
<?php if (!empty($this->options->indexsetup) && in_array('header-fix', $this->options->indexsetup)): ?>
  $('#alllayout').addClass("app-header-fixed");
<?php endif; ?>
</script>
    <!-- header -->
<?php $this->need('headnav.php'); ?>
  <!-- / header -->