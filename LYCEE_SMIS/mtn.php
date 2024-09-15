

<!DOCTYPE html>
<html lang="en-US" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta charset="utf-8" />
    <title>MoMo Developer portal</title>
    
<script type="text/javascript">
    var apiphany = {
        globals: {
            amChartsImageUrl: '/Themes/Portals.Themes.Bootstrap/Styles/AmCharts/',
            amMapsImageUrl: '/Themes/Portals.Themes.Bootstrap/Styles/AmMaps/',
            activityId: 'd34e8d58-1c55-4117-9bcd-648f4bcf5149',
            appPath: '/',
            antiForgeryToken: 'BEdxyul1LqFqfyG-kkiTz1TVvl8XTX4LCrpXS_auD0KJM8Oa6DZP2sSUXZEBjGCh7RZ8KecnbnGMABgYLQUJUmXcUHFW_2IaGDYBC0cZkLRgssyEjTw39rrHKDuILa0rFWvodMMZ4-E8LEuEHFdzhA2'
        }
    };
</script>

    <link rel="stylesheet" type="text/css" href="//i.s-microsoft.com/fonts/segoe-ui/west-european/normal/latest.css">
    <link rel="stylesheet" type="text/css" href="//i.s-microsoft.com/fonts/segoe-ui/west-european/light/latest.css">
    <link rel="stylesheet" type="text/css" href="//i.s-microsoft.com/fonts/segoe-ui/west-european/semilight/latest.css">
    <link rel="stylesheet" type="text/css" href="//i.s-microsoft.com/fonts/segoe-ui/west-european/semibold/latest.css">
    <link rel="stylesheet" type="text/css" href="//i.s-microsoft.com/fonts/segoe-ui/west-european/bold/latest.css">

    <script src="/Modules/Portals.Web.Core/Scripts/ko?v=5xJ-o7uqL91NL4lnxsbkECSRGwBK8cntUU3zzvoZ1Hk1" type="text/javascript"></script>
<script src="/Modules/Portals.Web.Core/scripts/jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="/Modules/Portals.Web.Core/scripts/jquery/jquery-migrate-3.3.2.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/Themes/Portals.Themes.Bootstrap/scripts/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="/Themes/Portals.Themes.Bootstrap/scripts/respond.min.js" type="text/javascript"></script>
<![endif]-->
<meta content="Orchard" name="generator" />
<link href="/themes/portals.themes.bootstrap/styles/bootstrap.published.less" rel="stylesheet" type="text/css" />

</head>
<body>
    
    
<script type="text/javascript">
    (function () {
        var browserInfo = (function () {
            try {
                var ua = navigator.userAgent,
                    tem,
                    M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
                if (/trident/i.test(M[1])) {
                    tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                    return 'IE ' + (tem[1] || '');
                }
                if (M[1] === 'Chrome') {
                    tem = ua.match(/\bOPR\/(\d+)/)
                    if (tem != null) return 'Opera ' + tem[1];
                }
                M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
                if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
                return M.join(' ');
            } catch (e) {
                return "undefined";
            }
        })();

        $(window).on('load', function () {
            var timing = performance.timing;
            var servertime = timing.responseEnd - timing.requestStart;
            var pageRendertime = new Date().getTime() - timing.responseEnd;
            var url = '/log/';

            $.ajax({
                url: url,
                type: 'POST',
                header: {
                    activityId: 'd34e8d58-1c55-4117-9bcd-648f4bcf5149'
                },
                data: {
                    __RequestVerificationToken: 'XvVyBETSRJPkphLhrrszTa1hWnnWSitiy7ouUdbVEOKFxOAprV7jR21UMgcb6KhwjStfLS-ITvqNqf5eh4iYJquIjkaRwcWxzYIWtHtdJ3d2yAWNMk496Age59vpR5v3eLRtXIJZs8daK1EcDPAeZA2',
                    service: window.location.hostname,
                    path: window.location.pathname,
                    serverTime: servertime,
                    pageRenderTime: pageRendertime,
                    activityId: 'd34e8d58-1c55-4117-9bcd-648f4bcf5149',
                    browserInfo: browserInfo
                },
            });
        });
    })()
</script>

    


<div id="ap-container" class="layout">
        <div class="layout-row">
            <div class="zone-header layout">
                <header role="heading">
                    
                </header>
            </div>
        </div>

        <div class="zone-navigation layout-row">
            <nav id="navigation" role="navigation">
                <div class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

<a
    class="navbar-brand"
    style="padding: 0; margin: 0; "
>
    <img height="60" src="https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/mtnmomo.svg"
        alt="MTN MoMo Logo"
    />
</a>

                    </div>
                    <div class="collapse navbar-collapse">
                        
<style>
.navbar {
    background-color: #4c4c4c;
    padding: 10px 20px;
    border: none;
    font-family: "MTNSansRegular";
    font-size: 1em;
    text-transform: none;
}
.navbar-default .navbar-nav>li>a {
    color: #ffffff;
}
.navbar-default .navbar-nav>li>a:hover {
    color: #ffffff;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{
    color: #ffcc00;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus{
    color: #e5e5e5;
}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{
    color: #ffffff;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .nav[role="menu"] li a {
        padding-left: 15px;
        padding-right: 15px;
    }
}
@media only screen and (min-width: 768px) {
    ul.nav:nth-child(2) {
        padding-left: 25px;
    }
    .nav[role="navigation"] .dropdown-menu{
        right: 0px;
        left: inherit;
        border: 1px solid #e5e5e5;
    }
    
}
@media only screen and (min-width: 992px){
    .nav[role="menu"] li a {
        padding-left: 25px;
        padding-right: 25px;
    }
}
nav#navigation .collapse.navbar-collapse ul.nav:nth-child(3){
    display: none;
}

</style>

<ul class="nav navbar-nav" role="menu" aria-label="Main">
    
<li><a href="/">Home</a>
</li>
<li><a href="/api-documentation">Documentation</a>
</li>
<li><a href="/docs/services/collection">API Sandbox</a>
</li>
<li><a href="/products">Products</a>
</li>
<li><a href="/contact-support">Support</a>
</li>
<li><a href="/faq">FAQs</a>
</li>
</ul>

<ul class="nav navbar-nav" role="menu" aria-label="Main">
    
<li>

    <a href="/go-live">Go Live</a> 
</li>
</ul>

<script>
    document.onreadystatechange = function () {
        if (document.readyState == "interactive") {
            if(document.getElementById("account-menu") !== null){
                $($('.nav.navbar-nav')[1]).show();
            }
        }
        if(window.location.href.indexOf("api-documentation/") > -1) {
            $("a[href$='/api-documentation']").parent('li').addClass('active');
        }
    }
</script>

                        
<ul class="nav navbar-nav pull-right" role="navigation" aria-label="Account menu">
        <li role="presentation">
            <a href="/signin?ReturnUrl=%2Fwidget-api" role="menuitem">Sign in</a>
        </li>
</ul>

                    </div>
                </div>
            </nav>
        </div>

            <div class="container layout">
            <div class="row">
                
<style>
    @font-face {
      font-family: "MyriadProRegular";
      src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-regular-webfont.eot");
      src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-regular-webfont.eot?#iefix") format("embedded-opentype"), 
           url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-regular-webfont.woff") format("woff"), 
           url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-regular-webfont.ttf") format("truetype");
    }
    @font-face {
      font-family: "MyriadProSemibold";
      src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-semibold-webfont.eot");
      src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-semibold-webfont.eot?#iefix") format("embedded-opentype"), 
           url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-semibold-webfont.woff") format("woff"), 
           url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/myriadpro-semibold-webfont.ttf") format("truetype"); 
    }

@font-face {
    font-family: 'MTN Brighter Sans';
    src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Regular.eot");
    src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Regular.eot?#iefix") format("embedded-opentype"),
         url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Regular.woff") format('woff'),
         url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Regular.ttf") format('truetype');
    font-weight: 400;
    text-rendering: optimizeLegibility;
}

@font-face {
  font-family: 'MTN Brighter Sans';
  src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Medium.eot");
  src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Medium.eot?#iefix") format("embedded-opentype"),
       url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Medium.woff2") format('woff2'),
       url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Medium.woff") format('woff'),
       url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Medium.ttf") format('truetype');
  font-weight: 500;
  text-rendering:optimizeLegibility;
}

@font-face {
  font-family: 'MTN Brighter Sans';
  src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Bold.eot");
  src: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Bold.eot?#iefix") format("embedded-opentype");
       /*url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/fonts/MTNBrighterSans-Bold.ttf") format('truetype');*/
  font-weight: 700;
  text-rendering:optimizeLegibility;
}


body{
    font-family: "MTN Brighter Sans";
    font-weight: 400;
}
h1,h2,h3,h4,h5,h6 {
    font-family: "MTN Brighter Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700
}
a{
    color: inherit;
}
a:hover{
    text-decoration: none;
}
.layout .layout-row{
    background: none;
}
.zone-navigation {
    width: 100%;
    z-index: 9;
    position: fixed;
    top: 0px;
}
.navbar{
    font-family: "MTN Brighter Sans";
    font-weight: 400;
}
.navbar {
    background-color: #000000;
    padding: 10px 20px;
    border: none;
    font-family: "MTN Brighter Sans";
    font-weight: 400;
    font-size: 1em;
    text-transform: none;
}
.navbar-default .navbar-nav>li>a {
    color: #ffffff;
}
.navbar-default .navbar-nav>li>a:hover {
    color: #ffffff;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{
    color: #ffcc00;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus{
    color: #e5e5e5;
}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{
    color: #ffffff;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .nav[role="menu"] li a {
        padding-left: 15px;
        padding-right: 15px;
    }
}
@media only screen and (min-width: 768px) {
    .nav[role="menu"] {
        padding-left: 25px;
    }
    
    .nav[role="navigation"] .dropdown-menu{
        right: 0px;
        left: inherit;
        border: 1px solid #e5e5e5;
    }
    
}
@media only screen and (min-width: 992px){
    .nav[role="menu"] li a {
        padding-left: 25px;
        padding-right: 25px;
    }
}

nav#navigation .collapse.navbar-collapse ul.nav:nth-child(3){
    display: none;
}
    
.jumbotron p{
    color: #4c4c4c;
}
.zone-content { 
    background-color: #ffffff;
    padding: 0;
}
.panel-default {
        background-color: white;
        -webkit-box-shadow: 2px 2px 2px 0px rgba(235,235,235,1);
        -moz-box-shadow: 2px 2px 2px 0px rgba(235,235,235,1);
        box-shadow: 2px 2px 2px 0px rgba(235,235,235,1);
    }
    
    .btn-default {
        color: #999999;
    }
    
    .jumbotron {
        color: #000000;
        margin-bottom: 0;
        background-color: #ffcc00;
        margin: -22px -20px 0px -20px;
        padding: 30px 25px;
    }
    .jumbotron p{
        font-size: 1.1em;
    }
    #ap-container {
        max-width: none;
    }

    /*Button Ripple effect */
    .orange-ripple-btn {
      background-position: center;
      transition: background 0.8s;
    }
    .orange-ripple-btn:hover {
      background: rgb(255, 204, 0, 0.5) radial-gradient(circle, transparent 1%, #ffcc00 1%) center/12000%;
    }
    .orange-ripple-btn:active {
      background-color: #ffcc00;
      background-size: 100%;
      transition: background 0s;
      color: #4c4c4c;
    }
    .icon{
        display: inline-block;
        height: 16px;
        width: 16px;
        right: 0px;
        position: absolute;
        margin-right: 15px;
    }
    i.user-icon{
        background: url("https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/user-icon.png") no-repeat;
        background-size: contain;
        background-position: center;
    }
    /*Sign In And Sign Up*/
    
     #signinPage a{
        font-weight: bold;
        color: #000000;
    }
    #signinPage table{
        width: 100% !important;
    }
    #signinPage .zone-content {
        padding: 0;
    }
   #signinPage label{
        font-weight: normal;
    }
    #signinPage input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
        background: none !important;
    }
   #signinPage input[type="text"], input[type="password"] {
        font-size: 1em;
        background: none !important;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid #e5e5e5;
        padding: 1.2em 1.5em;
    }
    #signinPage input[type="submit"]{
        float: left;
        clear: both;
        width: 100%;
        font-size: 1em;
        margin-top: 1em;
        padding: .6em 1.5em;
    }
   #signinPage #rememberme+span{
        font-style: italic;
        color: #b7baba;
    }
 #signinPage .jumbotron {
    margin: -22px -20px 0 -20px;
    padding: 30px 20px;
    }
   #signinPage .signinjumbo {
        margin: 2em auto;
    }


/* table */
table {
    border-collapse: collapse;
    margin: 1rem 0;
    display: block;
    overflow-x: auto;
    border-spacing: 2px;
    border-color: grey;
}
table {
    display: table;
    border-collapse: separate;
}
  
/*Home*/
#landingSection{
    margin-top: 60px;
}

.jumbotron p{
    font-weight: 400;
}

.home {
    color: #000000;
    margin: 10em auto 6em;
}

.home p {
    font-size: 1.1em;
    line-height: 1.8em;
}

.jumbotron .home p{
    font-size: 1.25em;
    line-height: 1.5em;
    margin-top: 1.5em;
}
.jumbotron .home .btn-primary{
    font-size: 1.1em;
    background-color: #000000;
    color: #ffffff;
    padding: 15px;
    text-align: center;
    border: none;
}
.home h2{
    font-weight: 600;
    font-size: 2.4em;
}
.home-quicklinks .caption h3{
    font-size: 1.3em;
    font-weight: 600;   
}
.home-quicklinks.caption p{
    font-size: 1em;  
}
.home-content h2 {
    font-weight: bold;
    padding-bottom: 20px;
}
.home-content {
    color: #999999;
}
.home-quicklinks{
    margin: 8em 0;
}

.home-quicklinks .quicklinks-block{
    display: block;
}
.home-quicklinks .quicklinks-block{
    padding: 15px;
    color: inherit;
}
.home-quicklinks .quicklinks-block:hover{
    color: inherit;
}
.signup_btn{
    position: relative;
    font-family: "MTN Brighter Sans";
    font-weight: 400;
    padding: 10px 15px;
    border-radius: 25px;
    border: none;
    font-weight: normal;
    color: #4f4f4f;
    background-color: #fccc00;
    width: 185px;
    display: inline-block;
}
.home-loginlink{
    padding: 10px 15px;   
}
#discoverAPI .row{
    display: flex;
}
#discoverAPI .discover-block{
    display: flex;
}

#discoverAPI h3{
    font-family: "MTN Brighter Sans";
    font-size: 1.3em;
    font-weight: 700;
    padding: 3rem 0 3rem 0;
}

.discover-block .caption h3{
    font-size: 1.3em;
    font-weight: 600;   
}
#discoverAPI .thumbnail{
    background-color: #ffffff;
    border-radius: 5px;
    flex: 1;
    display: flex;
    flex-direction: column;
    transition: all .25s linear;
}
#discoverAPI .thumbnail:hover{
    box-shadow: -1px 10px 24px 0px rgba(127,127,127,0.4);
}
#discoverAPI .thumbnail>img{
    margin-top: 1.2em;
    height: 70px;
    width: 70px;
}
.learnmore-api{
    margin-top: 4rem;
}
.learnmore-api a{
    color: #000000;
    font-size: 1em;
    text-decoration: underline;
}
   
/*API Documentation */   

.apidoc-home{
    margin-top: 15rem;
    margin-bottom: 6rem;
}
.apidoc-home .hero img {
    max-height: 180px;
    display: block;
    margin: 3rem auto 1.5rem;
}
.apidoc-home .hero h1 {
    color: #000000;
    font-size: 3.2rem;
    margin: 4.8rem auto 1rem;
}
.apidoc-home .hero .action-button {
    display: inline-block;
    font-size: 1.7rem;
    color: #000;
    background-color: #ffcc00;
    padding: 1rem 7rem;
    box-sizing: border-box;
    line-height: 2.7rem;
    cursor: pointer;
}
.apidoc-home .hero .action-button:hover{
    text-decoration: none;
}
.apidoc-home .hero .description {
    margin: 1.8rem auto;
    max-width: 35rem;
    font-size: 1.6rem;
    line-height: 1.3;
    color: #7f7f7f;
}
.hidden{
    display:none;
}

/*Introduction*/
    
.documentation-block{
    margin-top: 100px;
}
.documentation-rightblock{
    top: 80px;
    margin-left: 26.5%;
    margin-bottom: 80px;
}
.zone-footer{
    position: absolute;
    height: auto;
}
nav.api-menu {
    position: fixed;
    float: left;
    overflow: auto;
    padding: 24px 0px 0px 0px;
    bottom: 0;
    top: 80px;
    border-right: 1px solid #e5e5e5;
}
nav.api-menu ul{
    padding: 0px;
    list-style: none;
}
nav.api-menu ul ul {
    list-style: none;
    padding-left: 1.5rem;
}
nav.api-menu ul li{
    clear: both;
    float: left;
    width: 100%;
}
nav.api-menu ul li a{
    color: #2c3e50;
    text-decoration: none;
    padding: 5px 10px;
    width: 100%;
    clear: both;
    float: left;
}
nav.api-menu ul li a.active{
    color: #fccc00;
}
nav.api-menu>ul>li a.clicked{
    font-weight: 600;
    color: #fccc00;
    border-left: 2px solid #fccc00;
}
nav.api-menu ul li a:hover{
    color: #fccc00;
}
ol, p, ul {
    line-height: 1.7;
}
.documentation-rightblock ol {
    counter-reset: list;
}
.documentation-rightblock ol > li {
    list-style: none;
    position: relative;
}
.documentation-rightblock ol > li:before {
    counter-increment: list;
    content: counter(list, lower-alpha) ") ";
    position: absolute;
    left: -1.4em;
}
p {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}
.page-nav {
    padding-top: 1rem;
    padding-bottom: 0;
}
.page-edit, .page-nav {
    margin: 0 auto;
    padding: 2rem 0;
}
.page-nav .inner {
    min-height: 2rem;
    margin-top: 0;
    border-top: 1px solid #eaecef;
    padding-top: 1.5rem;
    overflow: auto;
}
.page-nav .next {
    float: right;
}
a, p a code {
    color: #fccc00;
}
a.header-anchor {
    font-size: .85em;
    float: left;
    margin-left: -.87em;
    padding-right: .23em;
    margin-top: .125em;
    opacity: 0;
}
/*h1:hover .header-anchor,h2:hover .header-anchor,h3:hover .header-anchor,h4:hover .header-anchor,h5:hover .header-anchor,h6:hover .header-anchor{
    opacity:1
    
}*/
.custom-block.tip {
    background-color: #f3f5f7;
    border-color: #42b983;
}

.custom-block.danger, .custom-block.tip, .custom-block.warning {
    padding: .1rem 1.5rem;
    border-left-width: .5rem;
    border-left-style: solid;
    margin: 1rem 0;
}
.custom-block .custom-block-title {
    font-weight: 600;
    margin-bottom: -.4rem;
}
.custom-block.warning {
    background-color: rgba(255,229,100,.3);
    border-color: #e7c000;
    color: #6b5900;
}
.custom-block.warning .custom-block-title {
    color: #b29400;
}
.content:not(.custom) img {
    max-width: 100%;
}
.documentation-rightblock h2 {
    padding-bottom: 1rem;
    border-bottom: 1px solid #eaecef;
}

/*Support*/
.issues-rightblock h3 a, .issues-rightblock h3 a:hover {
        padding-left: 15px;
        color: black;
    }
    .issuejumbo h2{
        margin-top: 2em;
        font-family: "MTN Brighter Sans";
        font-weight: 700;
    }
    .issues-rightblock h3{
        font-size: 1.5em;
    }
    .issues-rightblock h4{
        font-size: 1.1em;
    }
    #IssueList em {
        font-family: "MTN Brighter Sans";
        font-style: 500;
    }
#IssueList{
    margin-top: 80px;
}
.issuejumbo {
    margin: 1em auto 0;
}
/* .jumbotron .issuejumbo p {
    font-size: 1.4em;
    font-weight: bold;
    line-height: 1.5em;
    margin: 1.5em 0;
    color: #4c4c4c;
} */
search-control{
    float: left;
    width: 100%;
}
search-control .form-group{
    margin-bottom: 0px;
}
search-control>form{
    float: left;
    width: 100%;
}
search-control input[type="search"]{
    padding: 1.5em;
    -webkit-border-radius: 3em; 
    -moz-border-radius: 3em; 
    border-radius: 3em;
}
.form-control-feedback{
    top: 6px !important;
    right: 12px;
}
.panel-default{
    box-shadow: none;
}
.right-block{
    float: left;
    width: 100%;
    padding: 1em 2em;
    border: 1px solid #efefef;
    margin-bottom: 2em;
}
.block-button{
    color: #4c4c4c;
    float: left;
    font-weight: bold;
    padding: .8em 1em;
    background-color: #efefef;
}
.issue-block .search-createissue{
    background-color: #f9f9f9;
    margin-right: -20px;
    margin-left: -20px;
    padding: 1.5em 24px;
}
.issues-rightblock{
    margin-top: 3em;
    padding: 0 20px;
}
.issue-info{
    float: left;
    width: 100%;
    margin-top: 1em;
}
.issue-info>div{
    display: inline;
    padding-right: 3em;
}
.issue-info>div .glyphicon{
    margin-right: .5em;
}
#createIssue{
    float: left;
    width: 100%;
    padding: 12px;
    background-color: #ffcc00;
    color: #000000;
}
.orange-btn{
    background-color: #ffcc00;
}

/*Products*/
#ProductList{
    margin-top: 80px;
}
#ProductList h2{
    margin-top: 2em;
    font-size: 2.25em;
    font-family: "MTN Brighter Sans";
    font-weight: 700;
}
.products .panel-body {
    padding: 0px;
    color: #000000;
    font-size: 1.1em;
}
.products .panel-body a {
    font-weight: bold;
    color: #000000;
}
.products .momoPay-logo{
    width: 150px;
    margin-top: -50px;
    margin-bottom: -40px;
}
/*
.jumbotron .productjumbo p {
    font-size: 1.6em;
    line-height: 1.5em;
    margin: 1.5em 0;
    color: #4c4c4c;
} */
.productjumbo{
    margin: 5em auto;
}
.product-list{
    margin: -10px -5px; 
}
.panel-heading{
    float: left;
    width: 100%;
    border-bottom: 1px solid #e5e5e5;
    border-top: 1px solid #e5e5e5;
    padding: 2em 30px;
}
.panel-heading .accordion-toggle:after {
    font-family: 'Glyphicons Halflings';
    content: "\e113";
    font-size: 1.4em;
    float: right;
    color: #4c4c4c;
}
.panel-heading .accordion-toggle.collapsed:after {
    content: "\e114";
}
.panel-heading ..panel-title{
    font-size: 1em;
}
.product-list .panel{
    margin-bottom: 0px;
    box-shadow: none;
    border: none;
}
.product-list .panel-collapse{
    float: left;
    clear: both;
    width: 100%;
    padding: 1em 5em;
    background-color: #f9f9f9;
}
.products .panel-body {
    padding: 0px;
    color: #000000;
}
.products .panel-body .documentation-linkbutton{
    margin-top: 1em;
    padding: 10px;
    font-size: 16px;
    float: left;
    clear: both;
    width: 400px;
    text-align: left;
    border: 1px solid #b7baba;
    border-radius: 3px;
    color: #4c4c4c;
    font-weight: normal;
}
.panel-title{
    font-size: 1.2em;
    float: left;
    word-break: break-all;
    font-weight: 500;
}
.product-header-body{
    font-size: 1em;
    font-weight: 400;
}

a[role="tab"] {
    color: #4c4c4c;
}

/*Contact Us*/
.contactus-block {
    background-color: #ffffff;
    border: 2px solid #efefef;
    text-align: center;
    margin-top: 4em;
    margin-bottom: 4em;
    padding: 2em;
}
.contactus-block p {
    margin: 1.5em 0;
}
.contactus-block .block-button {
    text-align: center;
    min-width: 300px;
    margin-top: 1.5em;
}
#NotFoundPage{
    margin-top:80px;
}
#signinPage{
    margin-top:60px;
}
/*Golive*/
#app .steps .active a{
    color: #4c4c4c;
}
#app .steps .step a{
    color: #e0e6e8;
}
/*Footer*/
.zone-footer{
        background-color: #000000;
        padding: 4em 15px;
    }
    .mtnfooter {
        font-family: "MTNSansRegular;
    }

    /*.zone-footer {
        border-top-left-radius: 50% 23px;
        border-top-right-radius: 50% 23px;
    }*/
    .mtnfooter h4 {
        font-family: "MTNSansBold;
    }
    .mtnfooter a, .mtnfooter a:visited { 
        display: block;
        color: white;
        font-size: 1em;
        padding: 5px 0;
    }
    .mtnfooter a:hover {
        text-decoration: underline; 
        
    }
    .mtnfooter .copyright { 
        text-align: center; 
        font-size: 12px;
        padding-top: 20px;
        padding-bottom: 0px;
        
    }

    @media only screen and (max-width: 767px) {
        #signinPage .ap-idp-container{
        margin: 2em -15px 2em -15px;
        }
        #signinPage{
            margin-top:0px;
        }
        #landingSection{
            margin-top: 0px;
        }
        .navbar-toggle{
            position: absolute;
            right: 10px; 
        }
        .layout .layout-row.layout-row-content {
            height: auto;
        }
        #discoverAPI .row {
        display: block;
        }
        .apidoc-home{
            margin-top: 15rem;
            margin-bottom: 6rem;
        }
        .documentation-rightblock{
            margin-left: 0;
            top: 100px;
            padding: 0;
        }
        .apimenu-hamburger{
            z-index: 10;
            clear: both;
            float: left;
            position: fixed;
            left: 15px;
            top: 80px;
        }
        .apimenu-hamburger span{
            background-color: #4c4c4c;
        }
        .documentation-block {
            margin-top: 185px;
        }
        nav.api-menu{
            top: 120px;
            z-index: 9;
            background-color: #ffffff;
            width: 80%;
            padding: 0 2em;
            left: 0px;
            box-shadow: 4px 5px 7px #efefef;
        }
        .productjumbo{
        margin: 0px;
        }
        .products .panel-body .documentation-linkbutton{
            width: 100%;
        }
        .panel-heading {
            padding: 32pm 15px;
        }
        .product-list .panel-collapse {
            padding: 1em 2em;
        }
        .panel-heading span{
            float: left;
        }
        .mtnfooter{
            text-align: center;
        }
        #IssueList, #ProductList{
            margin-top: 0px;
        }
        #createIssue{
        margin-top: 1em;
        }
        #NotFoundPage{
        margin-top:0px;
        }
    }

/* Go-Live Steps */
#app .no-decoration{
    pointer-events: none;
    text-decoration: none;
}
#app .display-block{
    display: block;
}
#app .landing-page {
    min-height: 360px;
    padding-top: 45px;
}
#app .landing-page .big-font {
    font-size: 90px;
}
.btn-mtn {
    background-color: #fccc00;
    color: #4a4a4a;
}
.btn-mtn-grey {
    background-color: #E0E6E8;
    color: #4a4a4a;
}
#app .smaller-font{
    font-size: 13px;
}
#app input[type="checkbox"],
#app input[type="file"] {
    display: none;
}

#app .file-handling {
    padding: 9px 15px;
    cursor: pointer;
    min-width: 260px;
    background-color: #e0e6e8;
    font-weight: normal;
    margin-bottom: 20px;
    display: inline-block;
    color: #000000;
}
#app .min-width-inherit{
    min-width: inherit;
}
#app{
    background-color: #F6F8F9;
    border: 2px solid #e0e6e8;
    margin-top: 45px;
    margin-bottom: 45px;
}

#app .steps .step-number{
    border-radius: 50%;
    height: 54px;
    width: 54px;
    display: inline-block;
    background: #e0e6e8;
    color: #4a4a4a;
    padding-top: 17px;
    padding-left: 23px;
    font-weight: 800;
}
#app .steps .step {
    display: inline;
    color: #e0e6e8;
    margin-left: 15px;
    margin-top: 15px;
}
#app .steps .step:last-child {
    margin-bottom: 15px;
}
@media screen and (min-width: 768px){
    #app .steps .step{
        margin: 0;
        padding: 15px 45px;
    }    
    #app .steps .step:last-child {
        margin: 0;
    }
}

@media screen and (max-width: 991px){
    #app textarea {
        margin-top: 15px;
    }
}
#app .steps a{
    padding: 0 15px;
    font-weight: 800;
}
#app .steps a em{
    font-style: normal;
    color: #4c4c4c;
}
#app .steps .horizontal-divider {
    display: inline-block;
}
#app .steps .active .horizontal-divider:after {
    border-color: #9b9b9b;
}
#app .steps .horizontal-divider:after{
    content:"";
    position:absolute;
    top:50%;
    border-top:solid 3px #e0e6e8;
    width: 62px;
}

#app .steps .active {
    color: #4a4a4a;
}
#app .steps .step .active a{
    color: #4c4c4c;
}
.standard, a .standard{
    color: #4c4c4c;
}
/*
#app .steps .active a {
    color: #4c4c4c;
} */
#app .steps .active .step-number {
    background: #fccc00;
}
#app input.form-control{
    height: 36px;
}
#app input.custom-height{
    height: 46px;
    margin-bottom: 15px;
}
#app .step-indicator{
    color: #9b9b9b;
    font-weight: 800;
    font-size: 16px;
    padding-right: 30px;
    padding-top: 30px;
}
#app form{
    background-color: #ffffff;
    padding: 0 30px;
}
#app .bottom-divider{
    border-top: 2px solid #e0e6e8;
    display: block;
    margin-left: -30px;
    margin-right: -30px;
}
#app .product,
#app .product-set {
    background-color: #F4F5F9;
    border: 2px solid #e0e6e8;
}
#app .product{
    cursor: pointer;
}
#app .product-set {
    padding: 15px 30px;
}
#app .product-set ul {
    list-style: none;
    margin-bottom: 0;
}
#app .product-set ul li {
    cursor: pointer;
    padding-bottom: 15px;
    /* display: inline; */
} 
#app .product-set ul li:last-child {
    padding-bottom: 0;
}
#app label.checkbox {
    cursor: pointer;
}
#app label.checkbox:before,
#app .product-set ul li:before {
    content: "";
    width: 20px;
    height: 20px;
    position: absolute;
    border: 4px solid #e0e6e8;
}
#app .product-set ul li:before{
    margin-right: 1em;
}

#app .product-set ul li:before{
    left: 30px;
} 
#app label.checkbox span{
    padding-left: 50px;
    font-weight: 400;
}
#app label.checkbox.checked:before,
#app .product-set ul li.choosen:before {
    background-color: #4a4a4a;
}

#app .product .radio-button {
    border-radius: 50%;
    border: 6px solid #e0e6e8;
    width: 30px;
    height: 30px;
    position: absolute;
    top: 10px;
    margin-left: 15px;
}
#app .choosen .product .radio-button{
    background-color: #4a4a4a;
}
#app .product ul{
    padding-left: 15px;
}
#app .vertical-spacing {
    padding-top: 15px;
}
#app .vertical-spacing-bottom {
    padding-bottom: 15px;
}
#app .v-select .vs__dropdown-toggle {
    border-radius: 0;
}
#app .v-select .vs__dropdown-toggle,
#app .v-select .vs__dropdown-toggle .vs__selected-options,
#app .v-select .vs__dropdown-toggle input {
    cursor: pointer;
}
#app .vs__selected{
    position: absolute;
    padding: 10px;
}
#app .vs__actions .vs__clear{
    background: #ffffff;
    border: none;
}
#app .v-select.vs--open .vs__dropdown-toggle input {
    cursor: text;    
}
#app .vs__dropdown-toggle{
    position: relative;
}
#app .vs__search{
    width: 100%;
    padding: 10px;
    border: 1px solid #e0e6e8;
}
#app .vs__actions{
    position: absolute;
    right: 15px;
    top: 12px;
}
#app .v-select .selected-tag {
    color: #555;
}
#app .v-select.vs--open .vs__dropdown-toggle {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
}
#app .v-select .vs__dropdown-menu li{
    padding: 10px;
    cursor: pointer;
}
#app .v-select .vs__dropdown-menu li:hover{
    background-color: #f1f6f7;
    color: #9b9b9b;
}
#app .v-select .vs__dropdown-menu > li > a:hover, 
#app .v-select .vs__dropdown-menu > li > a:focus,
#app .v-select .vs__dropdown-menu .active > a,
#app .v-select .vs__dropdown-menu .highlight > a {
    background-color: #f1f6f7;
    color: #9b9b9b;
}
#app .v-select .vs__dropdown-menu {
    background-color: #fcfcfc;    
    color: #9b9b9b;
    border-radius: 0;
    padding: 0;
    margin-top: -1px;
}
#app .v-select li{
    list-style: none;
}
#app .v-select li > a {
    cursor: pointer;
    color: #9b9b9b;
    padding: 0 20px;
    line-height: 45px;
}
.products .momoPay-logo {
    width: 150px;
    margin-top: -50px;
    margin-bottom: -40px;
}

.sk-fading-circle {
    margin: 100px auto;
    width: 40px;
    height: 40px;
    position: relative;
    display: none;
}

.sk-fading-circle.active {
    display: block;
    position: absolute;
    left: 50%;
    top: 32%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.sk-fading-circle .sk-circle {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
}

.sk-fading-circle .sk-circle:before {
    content: '';
    display: block;
    margin: 0 auto;
    width: 15%;
    height: 15%;
    background-color: #333;
    border-radius: 100%;
    -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
    animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
}

.sk-fading-circle .sk-circle2 {
    -webkit-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    transform: rotate(30deg);
}

.sk-fading-circle .sk-circle3 {
    -webkit-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg);
}

.sk-fading-circle .sk-circle4 {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

.sk-fading-circle .sk-circle5 {
    -webkit-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    transform: rotate(120deg);
}

.sk-fading-circle .sk-circle6 {
    -webkit-transform: rotate(150deg);
    -ms-transform: rotate(150deg);
    transform: rotate(150deg);
}

.sk-fading-circle .sk-circle7 {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.sk-fading-circle .sk-circle8 {
    -webkit-transform: rotate(210deg);
    -ms-transform: rotate(210deg);
    transform: rotate(210deg);
}

.sk-fading-circle .sk-circle9 {
    -webkit-transform: rotate(240deg);
    -ms-transform: rotate(240deg);
    transform: rotate(240deg);
}

.sk-fading-circle .sk-circle10 {
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
}

.sk-fading-circle .sk-circle11 {
    -webkit-transform: rotate(300deg);
    -ms-transform: rotate(300deg);
    transform: rotate(300deg);
}

.sk-fading-circle .sk-circle12 {
    -webkit-transform: rotate(330deg);
    -ms-transform: rotate(330deg);
    transform: rotate(330deg);
}

.sk-fading-circle .sk-circle2:before {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
}

.sk-fading-circle .sk-circle3:before {
    -webkit-animation-delay: -1s;
    animation-delay: -1s;
}

.sk-fading-circle .sk-circle4:before {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
}

.sk-fading-circle .sk-circle5:before {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
}

.sk-fading-circle .sk-circle6:before {
    -webkit-animation-delay: -0.7s;
    animation-delay: -0.7s;
}

.sk-fading-circle .sk-circle7:before {
    -webkit-animation-delay: -0.6s;
    animation-delay: -0.6s;
}

.sk-fading-circle .sk-circle8:before {
    -webkit-animation-delay: -0.5s;
    animation-delay: -0.5s;
}

.sk-fading-circle .sk-circle9:before {
    -webkit-animation-delay: -0.4s;
    animation-delay: -0.4s;
}

.sk-fading-circle .sk-circle10:before {
    -webkit-animation-delay: -0.3s;
    animation-delay: -0.3s;
}

.sk-fading-circle .sk-circle11:before {
    -webkit-animation-delay: -0.2s;
    animation-delay: -0.2s;
}

.sk-fading-circle .sk-circle12:before {
    -webkit-animation-delay: -0.1s;
    animation-delay: -0.1s;
}

@-webkit-keyframes sk-circleFadeDelay {

    0%,
    39%,
    100% {
        opacity: 0;
    }

    40% {
        opacity: 1;
    }
}

@keyframes sk-circleFadeDelay {

    0%,
    39%,
    100% {
        opacity: 0;
    }

    40% {
        opacity: 1;
    }
}

#app {
    opacity: 1;
    -webkit-transition: opacity 0.5s ease-in;
    -moz-transition: opacity 0.5s ease-in;
    -ms-transition: opacity 0.5s ease-in;
    -o-transition: opacity 0.5s ease-in;
    transition: opacity 0.5s ease-in;
}

#app.loading {
    opacity: 0.3;
}

/* Sandbox page*/
 
.accordion a:hover,
.accordion a:active{
    color: #fccc00;
}
.accordion a{
    color: #4a4a4a;
    white-space: nowrap;
}

.accordion {
    font-size: 16px;
    font-weight: 500;
    color: #9A9A9A;
    background-color: white;
    margin: 1px;
    height: 40px;
    padding: 10px;
}

.nav>li>a {
    color: #808080;
}
.nav-pills>li.active>a, 
.nav-pills>li.active>a:hover, 
.nav-pills>li.active>a:focus {
    color: #000;
    background-color: #fccc00;
}

.layout-row.layout-row-content .zone-content {
    border: 1px solid #F6F7F9;
    padding: 1rem;
}
    
/* Spacing Variables */

:root {
  --spacing-none: 0;
  --spacing-extra-small: .25rem;
  --spacing-small: .5rem;
  --spacing-medium: 1rem;
  --spacing-large: 2rem;
  --spacing-extra-large: 4rem;
  --spacing-extra-extra-large: 8rem;
  --spacing-extra-extra-extra-large: 16rem;
}

/*
   SPACING
   Docs: http://tachyons.io/docs/layout/spacing/

   An eight step powers of two scale ranging from 0 to 16rem.

   Base:
     p = padding
     m = margin

   Modifiers:
     a = all
     h = horizontal
     v = vertical
     t = top
     r = right
     b = bottom
     l = left

     0 = none
     1 = 1st step in spacing scale
     2 = 2nd step in spacing scale
     3 = 3rd step in spacing scale
     4 = 4th step in spacing scale
     5 = 5th step in spacing scale
     6 = 6th step in spacing scale
     7 = 7th step in spacing scale

   Media Query Extensions:
     -ns = not-small
     -m  = medium
     -l  = large

*/


.pa0 { padding: var(--spacing-none); }
.pa1 { padding: var(--spacing-extra-small); }
.pa2 { padding: var(--spacing-small); }
.pa3 { padding: var(--spacing-medium); }
.pa4 { padding: var(--spacing-large); }
.pa5 { padding: var(--spacing-extra-large); }
.pa6 { padding: var(--spacing-extra-extra-large); }
.pa7 { padding: var(--spacing-extra-extra-extra-large); }

.pl0 { padding-left: var(--spacing-none); }
.pl1 { padding-left: var(--spacing-extra-small); }
.pl2 { padding-left: var(--spacing-small); }
.pl3 { padding-left: var(--spacing-medium); }
.pl4 { padding-left: var(--spacing-large); }
.pl5 { padding-left: var(--spacing-extra-large); }
.pl6 { padding-left: var(--spacing-extra-extra-large); }
.pl7 { padding-left: var(--spacing-extra-extra-extra-large); }

.pr0 { padding-right: var(--spacing-none); }
.pr1 { padding-right: var(--spacing-extra-small); }
.pr2 { padding-right: var(--spacing-small); }
.pr3 { padding-right: var(--spacing-medium); }
.pr4 { padding-right: var(--spacing-large); }
.pr5 { padding-right: var(--spacing-extra-large); }
.pr6 { padding-right: var(--spacing-extra-extra-large); }
.pr7 { padding-right: var(--spacing-extra-extra-extra-large); }

.pb0 { padding-bottom: var(--spacing-none); }
.pb1 { padding-bottom: var(--spacing-extra-small); }
.pb2 { padding-bottom: var(--spacing-small); }
.pb3 { padding-bottom: var(--spacing-medium); }
.pb4 { padding-bottom: var(--spacing-large); }
.pb5 { padding-bottom: var(--spacing-extra-large); }
.pb6 { padding-bottom: var(--spacing-extra-extra-large); }
.pb7 { padding-bottom: var(--spacing-extra-extra-extra-large); }

.pt0 { padding-top: var(--spacing-none); }
.pt1 { padding-top: var(--spacing-extra-small); }
.pt2 { padding-top: var(--spacing-small); }
.pt3 { padding-top: var(--spacing-medium); }
.pt4 { padding-top: var(--spacing-large); }
.pt5 { padding-top: var(--spacing-extra-large); }
.pt6 { padding-top: var(--spacing-extra-extra-large); }
.pt7 { padding-top: var(--spacing-extra-extra-extra-large); }

.pv0 {
  padding-top: var(--spacing-none);
  padding-bottom: var(--spacing-none);
}
.pv1 {
  padding-top: var(--spacing-extra-small);
  padding-bottom: var(--spacing-extra-small);
}
.pv2 {
  padding-top: var(--spacing-small);
  padding-bottom: var(--spacing-small);
}
.pv3 {
  padding-top: var(--spacing-medium);
  padding-bottom: var(--spacing-medium);
}
.pv4 {
  padding-top: var(--spacing-large);
  padding-bottom: var(--spacing-large);
}
.pv5 {
  padding-top: var(--spacing-extra-large);
  padding-bottom: var(--spacing-extra-large);
}
.pv6 {
  padding-top: var(--spacing-extra-extra-large);
  padding-bottom: var(--spacing-extra-extra-large);
}

.pv7 {
  padding-top: var(--spacing-extra-extra-extra-large);
  padding-bottom: var(--spacing-extra-extra-extra-large);
}

.ph0 {
  padding-left: var(--spacing-none);
  padding-right: var(--spacing-none);
}

.ph1 {
  padding-left: var(--spacing-extra-small);
  padding-right: var(--spacing-extra-small);
}

.ph2 {
  padding-left: var(--spacing-small);
  padding-right: var(--spacing-small);
}

.ph3 {
  padding-left: var(--spacing-medium);
  padding-right: var(--spacing-medium);
}

.ph4 {
  padding-left: var(--spacing-large);
  padding-right: var(--spacing-large);
}

.ph5 {
  padding-left: var(--spacing-extra-large);
  padding-right: var(--spacing-extra-large);
}

.ph6 {
  padding-left: var(--spacing-extra-extra-large);
  padding-right: var(--spacing-extra-extra-large);
}

.ph7 {
  padding-left: var(--spacing-extra-extra-extra-large);
  padding-right: var(--spacing-extra-extra-extra-large);
}

.ma0  {  margin: var(--spacing-none); }
.ma1 {  margin: var(--spacing-extra-small); }
.ma2  {  margin: var(--spacing-small); }
.ma3  {  margin: var(--spacing-medium); }
.ma4  {  margin: var(--spacing-large); }
.ma5  {  margin: var(--spacing-extra-large); }
.ma6 {  margin: var(--spacing-extra-extra-large); }
.ma7 { margin: var(--spacing-extra-extra-extra-large); }

.ml0  {  margin-left: var(--spacing-none); }
.ml1 {  margin-left: var(--spacing-extra-small); }
.ml2  {  margin-left: var(--spacing-small); }
.ml3  {  margin-left: var(--spacing-medium); }
.ml4  {  margin-left: var(--spacing-large); }
.ml5  {  margin-left: var(--spacing-extra-large); }
.ml6 {  margin-left: var(--spacing-extra-extra-large); }
.ml7 { margin-left: var(--spacing-extra-extra-extra-large); }

.mr0  {  margin-right: var(--spacing-none); }
.mr1 {  margin-right: var(--spacing-extra-small); }
.mr2  {  margin-right: var(--spacing-small); }
.mr3  {  margin-right: var(--spacing-medium); }
.mr4  {  margin-right: var(--spacing-large); }
.mr5  {  margin-right: var(--spacing-extra-large); }
.mr6 {  margin-right: var(--spacing-extra-extra-large); }
.mr7 { margin-right: var(--spacing-extra-extra-extra-large); }

.mb0  {  margin-bottom: var(--spacing-none); }
.mb1 {  margin-bottom: var(--spacing-extra-small); }
.mb2  {  margin-bottom: var(--spacing-small); }
.mb3  {  margin-bottom: var(--spacing-medium); }
.mb4  {  margin-bottom: var(--spacing-large); }
.mb5  {  margin-bottom: var(--spacing-extra-large); }
.mb6 {  margin-bottom: var(--spacing-extra-extra-large); }
.mb7 { margin-bottom: var(--spacing-extra-extra-extra-large); }

.mt0  {  margin-top: var(--spacing-none); }
.mt1 {  margin-top: var(--spacing-extra-small); }
.mt2  {  margin-top: var(--spacing-small); }
.mt3  {  margin-top: var(--spacing-medium); }
.mt4  {  margin-top: var(--spacing-large); }
.mt5  {  margin-top: var(--spacing-extra-large); }
.mt6 {  margin-top: var(--spacing-extra-extra-large); }
.mt7 { margin-top: var(--spacing-extra-extra-extra-large); }

.mv0   {
  margin-top: var(--spacing-none);
  margin-bottom: var(--spacing-none);
}
.mv1  {
  margin-top: var(--spacing-extra-small);
  margin-bottom: var(--spacing-extra-small);
}
.mv2   {
  margin-top: var(--spacing-small);
  margin-bottom: var(--spacing-small);
}
.mv3   {
  margin-top: var(--spacing-medium);
  margin-bottom: var(--spacing-medium);
}
.mv4   {
  margin-top: var(--spacing-large);
  margin-bottom: var(--spacing-large);
}
.mv5   {
  margin-top: var(--spacing-extra-large);
  margin-bottom: var(--spacing-extra-large);
}
.mv6  {
  margin-top: var(--spacing-extra-extra-large);
  margin-bottom: var(--spacing-extra-extra-large);
}
.mv7  {
  margin-top: var(--spacing-extra-extra-extra-large);
  margin-bottom: var(--spacing-extra-extra-extra-large);
}

.mh0   {
  margin-left: var(--spacing-none);
  margin-right: var(--spacing-none);
}
.mh1   {
  margin-left: var(--spacing-extra-small);
  margin-right: var(--spacing-extra-small);
}
.mh2   {
  margin-left: var(--spacing-small);
  margin-right: var(--spacing-small);
}
.mh3   {
  margin-left: var(--spacing-medium);
  margin-right: var(--spacing-medium);
}
.mh4   {
  margin-left: var(--spacing-large);
  margin-right: var(--spacing-large);
}
.mh5   {
  margin-left: var(--spacing-extra-large);
  margin-right: var(--spacing-extra-large);
}
.mh6  {
  margin-left: var(--spacing-extra-extra-large);
  margin-right: var(--spacing-extra-extra-large);
}
.mh7  {
  margin-left: var(--spacing-extra-extra-extra-large);
  margin-right: var(--spacing-extra-extra-extra-large);
}

@media (--breakpoint-not-small) {
  .pa0-ns  {  padding: var(--spacing-none); }
  .pa1-ns {  padding: var(--spacing-extra-small); }
  .pa2-ns  {  padding: var(--spacing-small); }
  .pa3-ns  {  padding: var(--spacing-medium); }
  .pa4-ns  {  padding: var(--spacing-large); }
  .pa5-ns  {  padding: var(--spacing-extra-large); }
  .pa6-ns {  padding: var(--spacing-extra-extra-large); }
  .pa7-ns { padding: var(--spacing-extra-extra-extra-large); }

  .pl0-ns  {  padding-left: var(--spacing-none); }
  .pl1-ns {  padding-left: var(--spacing-extra-small); }
  .pl2-ns  {  padding-left: var(--spacing-small); }
  .pl3-ns  {  padding-left: var(--spacing-medium); }
  .pl4-ns  {  padding-left: var(--spacing-large); }
  .pl5-ns  {  padding-left: var(--spacing-extra-large); }
  .pl6-ns {  padding-left: var(--spacing-extra-extra-large); }
  .pl7-ns { padding-left: var(--spacing-extra-extra-extra-large); }

  .pr0-ns  {  padding-right: var(--spacing-none); }
  .pr1-ns {  padding-right: var(--spacing-extra-small); }
  .pr2-ns  {  padding-right: var(--spacing-small); }
  .pr3-ns  {  padding-right: var(--spacing-medium); }
  .pr4-ns  {  padding-right: var(--spacing-large); }
  .pr5-ns {   padding-right: var(--spacing-extra-large); }
  .pr6-ns {  padding-right: var(--spacing-extra-extra-large); }
  .pr7-ns { padding-right: var(--spacing-extra-extra-extra-large); }

  .pb0-ns  {  padding-bottom: var(--spacing-none); }
  .pb1-ns {  padding-bottom: var(--spacing-extra-small); }
  .pb2-ns  {  padding-bottom: var(--spacing-small); }
  .pb3-ns  {  padding-bottom: var(--spacing-medium); }
  .pb4-ns  {  padding-bottom: var(--spacing-large); }
  .pb5-ns  {  padding-bottom: var(--spacing-extra-large); }
  .pb6-ns {  padding-bottom: var(--spacing-extra-extra-large); }
  .pb7-ns { padding-bottom: var(--spacing-extra-extra-extra-large); }

  .pt0-ns  {  padding-top: var(--spacing-none); }
  .pt1-ns {  padding-top: var(--spacing-extra-small); }
  .pt2-ns  {  padding-top: var(--spacing-small); }
  .pt3-ns  {  padding-top: var(--spacing-medium); }
  .pt4-ns  {  padding-top: var(--spacing-large); }
  .pt5-ns  {  padding-top: var(--spacing-extra-large); }
  .pt6-ns {  padding-top: var(--spacing-extra-extra-large); }
  .pt7-ns { padding-top: var(--spacing-extra-extra-extra-large); }

  .pv0-ns {
    padding-top: var(--spacing-none);
    padding-bottom: var(--spacing-none);
  }
  .pv1-ns {
    padding-top: var(--spacing-extra-small);
    padding-bottom: var(--spacing-extra-small);
  }
  .pv2-ns {
    padding-top: var(--spacing-small);
    padding-bottom: var(--spacing-small);
  }
  .pv3-ns {
    padding-top: var(--spacing-medium);
    padding-bottom: var(--spacing-medium);
  }
  .pv4-ns {
    padding-top: var(--spacing-large);
    padding-bottom: var(--spacing-large);
  }
  .pv5-ns {
    padding-top: var(--spacing-extra-large);
    padding-bottom: var(--spacing-extra-large);
  }
  .pv6-ns {
    padding-top: var(--spacing-extra-extra-large);
    padding-bottom: var(--spacing-extra-extra-large);
  }
  .pv7-ns {
    padding-top: var(--spacing-extra-extra-extra-large);
    padding-bottom: var(--spacing-extra-extra-extra-large);
  }
  .ph0-ns {
    padding-left: var(--spacing-none);
    padding-right: var(--spacing-none);
  }
  .ph1-ns {
    padding-left: var(--spacing-extra-small);
    padding-right: var(--spacing-extra-small);
  }
  .ph2-ns {
    padding-left: var(--spacing-small);
    padding-right: var(--spacing-small);
  }
  .ph3-ns {
    padding-left: var(--spacing-medium);
    padding-right: var(--spacing-medium);
  }
  .ph4-ns {
    padding-left: var(--spacing-large);
    padding-right: var(--spacing-large);
  }
  .ph5-ns {
    padding-left: var(--spacing-extra-large);
    padding-right: var(--spacing-extra-large);
  }
  .ph6-ns {
    padding-left: var(--spacing-extra-extra-large);
    padding-right: var(--spacing-extra-extra-large);
  }
  .ph7-ns {
    padding-left: var(--spacing-extra-extra-extra-large);
    padding-right: var(--spacing-extra-extra-extra-large);
  }

  .ma0-ns  {  margin: var(--spacing-none); }
  .ma1-ns {  margin: var(--spacing-extra-small); }
  .ma2-ns  {  margin: var(--spacing-small); }
  .ma3-ns  {  margin: var(--spacing-medium); }
  .ma4-ns  {  margin: var(--spacing-large); }
  .ma5-ns  {  margin: var(--spacing-extra-large); }
  .ma6-ns {  margin: var(--spacing-extra-extra-large); }
  .ma7-ns { margin: var(--spacing-extra-extra-extra-large); }

  .ml0-ns  {  margin-left: var(--spacing-none); }
  .ml1-ns {  margin-left: var(--spacing-extra-small); }
  .ml2-ns  {  margin-left: var(--spacing-small); }
  .ml3-ns  {  margin-left: var(--spacing-medium); }
  .ml4-ns  {  margin-left: var(--spacing-large); }
  .ml5-ns  {  margin-left: var(--spacing-extra-large); }
  .ml6-ns {  margin-left: var(--spacing-extra-extra-large); }
  .ml7-ns { margin-left: var(--spacing-extra-extra-extra-large); }

  .mr0-ns  {  margin-right: var(--spacing-none); }
  .mr1-ns {  margin-right: var(--spacing-extra-small); }
  .mr2-ns  {  margin-right: var(--spacing-small); }
  .mr3-ns  {  margin-right: var(--spacing-medium); }
  .mr4-ns  {  margin-right: var(--spacing-large); }
  .mr5-ns  {  margin-right: var(--spacing-extra-large); }
  .mr6-ns {  margin-right: var(--spacing-extra-extra-large); }
  .mr7-ns { margin-right: var(--spacing-extra-extra-extra-large); }

  .mb0-ns  {  margin-bottom: var(--spacing-none); }
  .mb1-ns {  margin-bottom: var(--spacing-extra-small); }
  .mb2-ns  {  margin-bottom: var(--spacing-small); }
  .mb3-ns  {  margin-bottom: var(--spacing-medium); }
  .mb4-ns  {  margin-bottom: var(--spacing-large); }
  .mb5-ns  {  margin-bottom: var(--spacing-extra-large); }
  .mb6-ns {  margin-bottom: var(--spacing-extra-extra-large); }
  .mb7-ns { margin-bottom: var(--spacing-extra-extra-extra-large); }

  .mt0-ns  {  margin-top: var(--spacing-none); }
  .mt1-ns {  margin-top: var(--spacing-extra-small); }
  .mt2-ns  {  margin-top: var(--spacing-small); }
  .mt3-ns  {  margin-top: var(--spacing-medium); }
  .mt4-ns  {  margin-top: var(--spacing-large); }
  .mt5-ns  {  margin-top: var(--spacing-extra-large); }
  .mt6-ns {  margin-top: var(--spacing-extra-extra-large); }
  .mt7-ns { margin-top: var(--spacing-extra-extra-extra-large); }

  .mv0-ns   {
    margin-top: var(--spacing-none);
    margin-bottom: var(--spacing-none);
  }
  .mv1-ns  {
    margin-top: var(--spacing-extra-small);
    margin-bottom: var(--spacing-extra-small);
  }
  .mv2-ns   {
    margin-top: var(--spacing-small);
    margin-bottom: var(--spacing-small);
  }
  .mv3-ns   {
    margin-top: var(--spacing-medium);
    margin-bottom: var(--spacing-medium);
  }
  .mv4-ns   {
    margin-top: var(--spacing-large);
    margin-bottom: var(--spacing-large);
  }
  .mv5-ns   {
    margin-top: var(--spacing-extra-large);
    margin-bottom: var(--spacing-extra-large);
  }
  .mv6-ns  {
    margin-top: var(--spacing-extra-extra-large);
    margin-bottom: var(--spacing-extra-extra-large);
  }
  .mv7-ns  {
    margin-top: var(--spacing-extra-extra-extra-large);
    margin-bottom: var(--spacing-extra-extra-extra-large);
  }

  .mh0-ns   {
    margin-left: var(--spacing-none);
    margin-right: var(--spacing-none);
  }
  .mh1-ns   {
    margin-left: var(--spacing-extra-small);
    margin-right: var(--spacing-extra-small);
  }
  .mh2-ns   {
    margin-left: var(--spacing-small);
    margin-right: var(--spacing-small);
  }
  .mh3-ns   {
    margin-left: var(--spacing-medium);
    margin-right: var(--spacing-medium);
  }
  .mh4-ns   {
    margin-left: var(--spacing-large);
    margin-right: var(--spacing-large);
  }
  .mh5-ns   {
    margin-left: var(--spacing-extra-large);
    margin-right: var(--spacing-extra-large);
  }
  .mh6-ns  {
    margin-left: var(--spacing-extra-extra-large);
    margin-right: var(--spacing-extra-extra-large);
  }
  .mh7-ns  {
    margin-left: var(--spacing-extra-extra-extra-large);
    margin-right: var(--spacing-extra-extra-extra-large);
  }

}

@media (--breakpoint-medium) {
  .pa0-m  {  padding: var(--spacing-none); }
  .pa1-m {  padding: var(--spacing-extra-small); }
  .pa2-m  {  padding: var(--spacing-small); }
  .pa3-m  {  padding: var(--spacing-medium); }
  .pa4-m  {  padding: var(--spacing-large); }
  .pa5-m  {  padding: var(--spacing-extra-large); }
  .pa6-m {  padding: var(--spacing-extra-extra-large); }
  .pa7-m { padding: var(--spacing-extra-extra-extra-large); }

  .pl0-m  {  padding-left: var(--spacing-none); }
  .pl1-m {  padding-left: var(--spacing-extra-small); }
  .pl2-m  {  padding-left: var(--spacing-small); }
  .pl3-m  {  padding-left: var(--spacing-medium); }
  .pl4-m  {  padding-left: var(--spacing-large); }
  .pl5-m  {  padding-left: var(--spacing-extra-large); }
  .pl6-m {  padding-left: var(--spacing-extra-extra-large); }
  .pl7-m { padding-left: var(--spacing-extra-extra-extra-large); }

  .pr0-m  {  padding-right: var(--spacing-none); }
  .pr1-m {  padding-right: var(--spacing-extra-small); }
  .pr2-m  {  padding-right: var(--spacing-small); }
  .pr3-m  {  padding-right: var(--spacing-medium); }
  .pr4-m  {  padding-right: var(--spacing-large); }
  .pr5-m  {  padding-right: var(--spacing-extra-large); }
  .pr6-m {  padding-right: var(--spacing-extra-extra-large); }
  .pr7-m { padding-right: var(--spacing-extra-extra-extra-large); }

  .pb0-m  {  padding-bottom: var(--spacing-none); }
  .pb1-m {  padding-bottom: var(--spacing-extra-small); }
  .pb2-m  {  padding-bottom: var(--spacing-small); }
  .pb3-m  {  padding-bottom: var(--spacing-medium); }
  .pb4-m  {  padding-bottom: var(--spacing-large); }
  .pb5-m  {  padding-bottom: var(--spacing-extra-large); }
  .pb6-m {  padding-bottom: var(--spacing-extra-extra-large); }
  .pb7-m { padding-bottom: var(--spacing-extra-extra-extra-large); }

  .pt0-m  {  padding-top: var(--spacing-none); }
  .pt1-m {  padding-top: var(--spacing-extra-small); }
  .pt2-m  {  padding-top: var(--spacing-small); }
  .pt3-m  {  padding-top: var(--spacing-medium); }
  .pt4-m  {  padding-top: var(--spacing-large); }
  .pt5-m  {  padding-top: var(--spacing-extra-large); }
  .pt6-m {  padding-top: var(--spacing-extra-extra-large); }
  .pt7-m { padding-top: var(--spacing-extra-extra-extra-large); }

  .pv0-m {
    padding-top: var(--spacing-none);
    padding-bottom: var(--spacing-none);
  }
  .pv1-m {
    padding-top: var(--spacing-extra-small);
    padding-bottom: var(--spacing-extra-small);
  }
  .pv2-m {
    padding-top: var(--spacing-small);
    padding-bottom: var(--spacing-small);
  }
  .pv3-m {
    padding-top: var(--spacing-medium);
    padding-bottom: var(--spacing-medium);
  }
  .pv4-m {
    padding-top: var(--spacing-large);
    padding-bottom: var(--spacing-large);
  }
  .pv5-m {
    padding-top: var(--spacing-extra-large);
    padding-bottom: var(--spacing-extra-large);
  }
  .pv6-m {
    padding-top: var(--spacing-extra-extra-large);
    padding-bottom: var(--spacing-extra-extra-large);
  }
  .pv7-m {
    padding-top: var(--spacing-extra-extra-extra-large);
    padding-bottom: var(--spacing-extra-extra-extra-large);
  }

  .ph0-m {
    padding-left: var(--spacing-none);
    padding-right: var(--spacing-none);
  }
  .ph1-m {
    padding-left: var(--spacing-extra-small);
    padding-right: var(--spacing-extra-small);
  }
  .ph2-m {
    padding-left: var(--spacing-small);
    padding-right: var(--spacing-small);
  }
  .ph3-m {
    padding-left: var(--spacing-medium);
    padding-right: var(--spacing-medium);
  }
  .ph4-m {
    padding-left: var(--spacing-large);
    padding-right: var(--spacing-large);
  }
  .ph5-m {
    padding-left: var(--spacing-extra-large);
    padding-right: var(--spacing-extra-large);
  }
  .ph6-m {
    padding-left: var(--spacing-extra-extra-large);
    padding-right: var(--spacing-extra-extra-large);
  }
  .ph7-m {
    padding-left: var(--spacing-extra-extra-extra-large);
    padding-right: var(--spacing-extra-extra-extra-large);
  }

  .ma0-m  {  margin: var(--spacing-none); }
  .ma1-m {  margin: var(--spacing-extra-small); }
  .ma2-m  {  margin: var(--spacing-small); }
  .ma3-m  {  margin: var(--spacing-medium); }
  .ma4-m  {  margin: var(--spacing-large); }
  .ma5-m  {  margin: var(--spacing-extra-large); }
  .ma6-m {  margin: var(--spacing-extra-extra-large); }
  .ma7-m { margin: var(--spacing-extra-extra-extra-large); }

  .ml0-m  {  margin-left: var(--spacing-none); }
  .ml1-m {  margin-left: var(--spacing-extra-small); }
  .ml2-m  {  margin-left: var(--spacing-small); }
  .ml3-m  {  margin-left: var(--spacing-medium); }
  .ml4-m  {  margin-left: var(--spacing-large); }
  .ml5-m  {  margin-left: var(--spacing-extra-large); }
  .ml6-m {  margin-left: var(--spacing-extra-extra-large); }
  .ml7-m { margin-left: var(--spacing-extra-extra-extra-large); }

  .mr0-m  {  margin-right: var(--spacing-none); }
  .mr1-m {  margin-right: var(--spacing-extra-small); }
  .mr2-m  {  margin-right: var(--spacing-small); }
  .mr3-m  {  margin-right: var(--spacing-medium); }
  .mr4-m  {  margin-right: var(--spacing-large); }
  .mr5-m  {  margin-right: var(--spacing-extra-large); }
  .mr6-m {  margin-right: var(--spacing-extra-extra-large); }
  .mr7-m { margin-right: var(--spacing-extra-extra-extra-large); }

  .mb0-m  {  margin-bottom: var(--spacing-none); }
  .mb1-m {  margin-bottom: var(--spacing-extra-small); }
  .mb2-m  {  margin-bottom: var(--spacing-small); }
  .mb3-m  {  margin-bottom: var(--spacing-medium); }
  .mb4-m  {  margin-bottom: var(--spacing-large); }
  .mb5-m  {  margin-bottom: var(--spacing-extra-large); }
  .mb6-m {  margin-bottom: var(--spacing-extra-extra-large); }
  .mb7-m { margin-bottom: var(--spacing-extra-extra-extra-large); }

  .mt0-m  {  margin-top: var(--spacing-none); }
  .mt1-m {  margin-top: var(--spacing-extra-small); }
  .mt2-m  {  margin-top: var(--spacing-small); }
  .mt3-m  {  margin-top: var(--spacing-medium); }
  .mt4-m  {  margin-top: var(--spacing-large); }
  .mt5-m  {  margin-top: var(--spacing-extra-large); }
  .mt6-m {  margin-top: var(--spacing-extra-extra-large); }
  .mt7-m { margin-top: var(--spacing-extra-extra-extra-large); }

  .mv0-m {
    margin-top: var(--spacing-none);
    margin-bottom: var(--spacing-none);
  }
  .mv1-m {
    margin-top: var(--spacing-extra-small);
    margin-bottom: var(--spacing-extra-small);
  }
  .mv2-m {
    margin-top: var(--spacing-small);
    margin-bottom: var(--spacing-small);
  }
  .mv3-m {
    margin-top: var(--spacing-medium);
    margin-bottom: var(--spacing-medium);
  }
  .mv4-m {
    margin-top: var(--spacing-large);
    margin-bottom: var(--spacing-large);
  }
  .mv5-m {
    margin-top: var(--spacing-extra-large);
    margin-bottom: var(--spacing-extra-large);
  }
  .mv6-m {
    margin-top: var(--spacing-extra-extra-large);
    margin-bottom: var(--spacing-extra-extra-large);
  }
  .mv7-m {
    margin-top: var(--spacing-extra-extra-extra-large);
    margin-bottom: var(--spacing-extra-extra-extra-large);
  }

  .mh0-m {
    margin-left: var(--spacing-none);
    margin-right: var(--spacing-none);
  }
  .mh1-m {
    margin-left: var(--spacing-extra-small);
    margin-right: var(--spacing-extra-small);
  }
  .mh2-m {
    margin-left: var(--spacing-small);
    margin-right: var(--spacing-small);
  }
  .mh3-m {
    margin-left: var(--spacing-medium);
    margin-right: var(--spacing-medium);
  }
  .mh4-m {
    margin-left: var(--spacing-large);
    margin-right: var(--spacing-large);
  }
  .mh5-m {
    margin-left: var(--spacing-extra-large);
    margin-right: var(--spacing-extra-large);
  }
  .mh6-m {
    margin-left: var(--spacing-extra-extra-large);
    margin-right: var(--spacing-extra-extra-large);
  }
  .mh7-m {
    margin-left: var(--spacing-extra-extra-extra-large);
    margin-right: var(--spacing-extra-extra-extra-large);
  }

}

@media (--breakpoint-large) {
  .pa0-l  {  padding: var(--spacing-none); }
  .pa1-l {  padding: var(--spacing-extra-small); }
  .pa2-l  {  padding: var(--spacing-small); }
  .pa3-l  {  padding: var(--spacing-medium); }
  .pa4-l  {  padding: var(--spacing-large); }
  .pa5-l  {  padding: var(--spacing-extra-large); }
  .pa6-l {  padding: var(--spacing-extra-extra-large); }
  .pa7-l { padding: var(--spacing-extra-extra-extra-large); }

  .pl0-l  {  padding-left: var(--spacing-none); }
  .pl1-l {  padding-left: var(--spacing-extra-small); }
  .pl2-l  {  padding-left: var(--spacing-small); }
  .pl3-l  {  padding-left: var(--spacing-medium); }
  .pl4-l  {  padding-left: var(--spacing-large); }
  .pl5-l  {  padding-left: var(--spacing-extra-large); }
  .pl6-l {  padding-left: var(--spacing-extra-extra-large); }
  .pl7-l { padding-left: var(--spacing-extra-extra-extra-large); }

  .pr0-l  {  padding-right: var(--spacing-none); }
  .pr1-l {  padding-right: var(--spacing-extra-small); }
  .pr2-l  {  padding-right: var(--spacing-small); }
  .pr3-l  {  padding-right: var(--spacing-medium); }
  .pr4-l  {  padding-right: var(--spacing-large); }
  .pr5-l  {  padding-right: var(--spacing-extra-large); }
  .pr6-l {  padding-right: var(--spacing-extra-extra-large); }
  .pr7-l { padding-right: var(--spacing-extra-extra-extra-large); }

  .pb0-l  {  padding-bottom: var(--spacing-none); }
  .pb1-l {  padding-bottom: var(--spacing-extra-small); }
  .pb2-l  {  padding-bottom: var(--spacing-small); }
  .pb3-l  {  padding-bottom: var(--spacing-medium); }
  .pb4-l  {  padding-bottom: var(--spacing-large); }
  .pb5-l  {  padding-bottom: var(--spacing-extra-large); }
  .pb6-l {  padding-bottom: var(--spacing-extra-extra-large); }
  .pb7-l { padding-bottom: var(--spacing-extra-extra-extra-large); }

  .pt0-l  {  padding-top: var(--spacing-none); }
  .pt1-l {  padding-top: var(--spacing-extra-small); }
  .pt2-l  {  padding-top: var(--spacing-small); }
  .pt3-l  {  padding-top: var(--spacing-medium); }
  .pt4-l  {  padding-top: var(--spacing-large); }
  .pt5-l  {  padding-top: var(--spacing-extra-large); }
  .pt6-l {  padding-top: var(--spacing-extra-extra-large); }
  .pt7-l { padding-top: var(--spacing-extra-extra-extra-large); }

  .pv0-l {
    padding-top: var(--spacing-none);
    padding-bottom: var(--spacing-none);
  }
  .pv1-l {
    padding-top: var(--spacing-extra-small);
    padding-bottom: var(--spacing-extra-small);
  }
  .pv2-l {
    padding-top: var(--spacing-small);
    padding-bottom: var(--spacing-small);
  }
  .pv3-l {
    padding-top: var(--spacing-medium);
    padding-bottom: var(--spacing-medium);
  }
  .pv4-l {
    padding-top: var(--spacing-large);
    padding-bottom: var(--spacing-large);
  }
  .pv5-l {
    padding-top: var(--spacing-extra-large);
    padding-bottom: var(--spacing-extra-large);
  }
  .pv6-l {
    padding-top: var(--spacing-extra-extra-large);
    padding-bottom: var(--spacing-extra-extra-large);
  }
  .pv7-l {
    padding-top: var(--spacing-extra-extra-extra-large);
    padding-bottom: var(--spacing-extra-extra-extra-large);
  }

  .ph0-l {
    padding-left: var(--spacing-none);
    padding-right: var(--spacing-none);
  }
  .ph1-l {
    padding-left: var(--spacing-extra-small);
    padding-right: var(--spacing-extra-small);
  }
  .ph2-l {
    padding-left: var(--spacing-small);
    padding-right: var(--spacing-small);
  }
  .ph3-l {
    padding-left: var(--spacing-medium);
    padding-right: var(--spacing-medium);
  }
  .ph4-l {
    padding-left: var(--spacing-large);
    padding-right: var(--spacing-large);
  }
  .ph5-l {
    padding-left: var(--spacing-extra-large);
    padding-right: var(--spacing-extra-large);
  }
  .ph6-l {
    padding-left: var(--spacing-extra-extra-large);
    padding-right: var(--spacing-extra-extra-large);
  }
  .ph7-l {
    padding-left: var(--spacing-extra-extra-extra-large);
    padding-right: var(--spacing-extra-extra-extra-large);
  }

  .ma0-l  {  margin: var(--spacing-none); }
  .ma1-l {  margin: var(--spacing-extra-small); }
  .ma2-l  {  margin: var(--spacing-small); }
  .ma3-l  {  margin: var(--spacing-medium); }
  .ma4-l  {  margin: var(--spacing-large); }
  .ma5-l  {  margin: var(--spacing-extra-large); }
  .ma6-l {  margin: var(--spacing-extra-extra-large); }
  .ma7-l { margin: var(--spacing-extra-extra-extra-large); }

  .ml0-l  {  margin-left: var(--spacing-none); }
  .ml1-l {  margin-left: var(--spacing-extra-small); }
  .ml2-l  {  margin-left: var(--spacing-small); }
  .ml3-l  {  margin-left: var(--spacing-medium); }
  .ml4-l  {  margin-left: var(--spacing-large); }
  .ml5-l  {  margin-left: var(--spacing-extra-large); }
  .ml6-l {  margin-left: var(--spacing-extra-extra-large); }
  .ml7-l { margin-left: var(--spacing-extra-extra-extra-large); }

  .mr0-l  {  margin-right: var(--spacing-none); }
  .mr1-l {  margin-right: var(--spacing-extra-small); }
  .mr2-l  {  margin-right: var(--spacing-small); }
  .mr3-l  {  margin-right: var(--spacing-medium); }
  .mr4-l  {  margin-right: var(--spacing-large); }
  .mr5-l  {  margin-right: var(--spacing-extra-large); }
  .mr6-l {  margin-right: var(--spacing-extra-extra-large); }
  .mr7-l { margin-right: var(--spacing-extra-extra-extra-large); }

  .mb0-l  {  margin-bottom: var(--spacing-none); }
  .mb1-l {  margin-bottom: var(--spacing-extra-small); }
  .mb2-l  {  margin-bottom: var(--spacing-small); }
  .mb3-l  {  margin-bottom: var(--spacing-medium); }
  .mb4-l  {  margin-bottom: var(--spacing-large); }
  .mb5-l  {  margin-bottom: var(--spacing-extra-large); }
  .mb6-l {  margin-bottom: var(--spacing-extra-extra-large); }
  .mb7-l { margin-bottom: var(--spacing-extra-extra-extra-large); }

  .mt0-l  {  margin-top: var(--spacing-none); }
  .mt1-l {  margin-top: var(--spacing-extra-small); }
  .mt2-l  {  margin-top: var(--spacing-small); }
  .mt3-l  {  margin-top: var(--spacing-medium); }
  .mt4-l  {  margin-top: var(--spacing-large); }
  .mt5-l  {  margin-top: var(--spacing-extra-large); }
  .mt6-l {  margin-top: var(--spacing-extra-extra-large); }
  .mt7-l { margin-top: var(--spacing-extra-extra-extra-large); }

  .mv0-l {
    margin-top: var(--spacing-none);
    margin-bottom: var(--spacing-none);
  }
  .mv1-l {
    margin-top: var(--spacing-extra-small);
    margin-bottom: var(--spacing-extra-small);
  }
  .mv2-l {
    margin-top: var(--spacing-small);
    margin-bottom: var(--spacing-small);
  }
  .mv3-l {
    margin-top: var(--spacing-medium);
    margin-bottom: var(--spacing-medium);
  }
  .mv4-l {
    margin-top: var(--spacing-large);
    margin-bottom: var(--spacing-large);
  }
  .mv5-l {
    margin-top: var(--spacing-extra-large);
    margin-bottom: var(--spacing-extra-large);
  }
  .mv6-l {
    margin-top: var(--spacing-extra-extra-large);
    margin-bottom: var(--spacing-extra-extra-large);
  }
  .mv7-l {
    margin-top: var(--spacing-extra-extra-extra-large);
    margin-bottom: var(--spacing-extra-extra-extra-large);
  }

  .mh0-l {
    margin-left: var(--spacing-none);
    margin-right: var(--spacing-none);
  }
  .mh1-l {
    margin-left: var(--spacing-extra-small);
    margin-right: var(--spacing-extra-small);
  }
  .mh2-l {
    margin-left: var(--spacing-small);
    margin-right: var(--spacing-small);
  }
  .mh3-l {
    margin-left: var(--spacing-medium);
    margin-right: var(--spacing-medium);
  }
  .mh4-l {
    margin-left: var(--spacing-large);
    margin-right: var(--spacing-large);
  }
  .mh5-l {
    margin-left: var(--spacing-extra-large);
    margin-right: var(--spacing-extra-large);
  }
  .mh6-l {
    margin-left: var(--spacing-extra-extra-large);
    margin-right: var(--spacing-extra-extra-large);
  }
  .mh7-l {
    margin-left: var(--spacing-extra-extra-extra-large);
    margin-right: var(--spacing-extra-extra-extra-large);
  }
}

/*

   TYPE SCALE
   Docs: http://tachyons.io/docs/typography/scale/

   Base:
    f = font-size

   Modifiers
     1 = 1st step in size scale
     2 = 2nd step in size scale
     3 = 3rd step in size scale
     4 = 4th step in size scale
     5 = 5th step in size scale
     6 = 6th step in size scale
     7 = 7th step in size scale

   Media Query Extensions:
     -ns = not-small
     -m  = medium
     -l  = large
*/

/*
 * For Hero/Marketing Titles
 *
 * These generally are too large for mobile
 * so be careful using them on smaller screens.
 * */

.f-6,
.f-headline {
  font-size: 6rem;
}
.f-5,
.f-subheadline {
  font-size: 5rem;
}


/* Type Scale */

.f1 { font-size: 3rem; }
.f2 { font-size: 2.25rem; }
.f3 { font-size: 1.5rem; }
.f4 { font-size: 1.25rem; }
.f5 { font-size: 1rem; }
.f6 { font-size: .875rem; }
.f7 { font-size: .75rem; } /* Small and hard to read for many people so use with extreme caution */

@media (--breakpoint-not-small){
  .f-6-ns,
  .f-headline-ns { font-size: 6rem; }
  .f-5-ns,
  .f-subheadline-ns { font-size: 5rem; }
  .f1-ns { font-size: 3rem; }
  .f2-ns { font-size: 2.25rem; }
  .f3-ns { font-size: 1.5rem; }
  .f4-ns { font-size: 1.25rem; }
  .f5-ns { font-size: 1rem; }
  .f6-ns { font-size: .875rem; }
  .f7-ns { font-size: .75rem; }
}

@media (--breakpoint-medium) {
  .f-6-m,
  .f-headline-m { font-size: 6rem; }
  .f-5-m,
  .f-subheadline-m { font-size: 5rem; }
  .f1-m { font-size: 3rem; }
  .f2-m { font-size: 2.25rem; }
  .f3-m { font-size: 1.5rem; }
  .f4-m { font-size: 1.25rem; }
  .f5-m { font-size: 1rem; }
  .f6-m { font-size: .875rem; }
  .f7-m { font-size: .75rem; }
}

@media (--breakpoint-large) {
  .f-6-l,
  .f-headline-l {
    font-size: 6rem;
  }
  .f-5-l,
  .f-subheadline-l {
    font-size: 5rem;
  }
  .f1-l { font-size: 3rem; }
  .f2-l { font-size: 2.25rem; }
  .f3-l { font-size: 1.5rem; }
  .f4-l { font-size: 1.25rem; }
  .f5-l { font-size: 1rem; }
  .f6-l { font-size: .875rem; }
  .f7-l { font-size: .75rem; }
}

/* line height */
.lh-solid { line-height: 1; }
.lh-title { line-height: 1.25; }
.lh-copy  { line-height: 1.5; }
</style>

<html>
<body>
    <script>

        if(window.location.href.indexOf("go-live") > -1 ){
        window.location='https://momodeveloper.mtn.co.rw/signin?ReturnUrl=%2F';
        document.getElementById("element").style.visibility = "hidden";
    }
    
        if(window.location.href.indexOf("issues") > -1){
        window.location='https://momodeveloper.mtn.co.rw:443/NotFoundPage';
        document.getElementById("element").style.visibility = "hidden";
    }
 
    </script>
</body>
</html>

            </div>
        </div>

    <div class="layout-row layout-row-content">
        <div class="layout">
            <div class="zone-content col-md-12 layout-column">
                <main role="main">
                                        
<article class="page content-item">
<header>
    
</header>
<style>
.home {
    color: #000000;
}

.home h2 {
    width: 60%;
    font-weight: bold;
}

.home p {
    font-size: 1.1em;
}
.home-content h2 {
    font-weight: bold;
    padding-bottom: 20px;
}
.home-content {
    color: #999999;
}
</style>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row home">
        <div class="col-md-6">
            <h2>Widget API</h1>
            <p>How to use the widget</p>
        </div>
        <div class="col-md-6">
        </div>
    </div>
  </div>
</div>

<div class="container">

    <p>To integrate with the mobile money widget there are two requirements.</p>
    <ol>
    <li><p>Include the following script tag in your <code>&lt;head&gt;</code> tag in your root html document which is usually named index.html.</p>
    <p> Testbed:</p>
    <pre><code class="lang-html"> &lt;script src=&quot;https://momowebaccess.mtn.co.ug:8018/v0.1.0/mobile-money-widget-mtn.js&quot;&gt;&lt;/script&gt;
    </code></pre>
    <p> Production:</p>
    <pre><code class="lang-html"> &lt;script src=&quot;TODO_REPLACE_WITH_PRODUCTION_PATH&quot;&gt;&lt;/script&gt;
    </code></pre>
    </li>
    <li><p>Add one or several elements with one of the following CSS classes: <code>mobile-money-qr-payment</code>.</p>
    <p> NOTE: An element can only contain ONE of the CSS classes.</p>
    <pre><code class="lang-html"> &lt;div class=&quot;mobile-money-qr-payment&quot;&gt;&lt;/div&gt;
    </code></pre>
    </li>
    </ol>
    <h2 id="qr-payment">QR Payment</h2>
    <p>To use the QR payment widget you should use the <code>mobile-money-qr-payment</code> CSS class on your element. The initial size of the widget will be 36x45 pixels, when expanded the widget will grow to 200x400 pixels.</p>
    <p>Example:</p>
    <pre><code class="lang-html">&lt;div class=&quot;mobile-money-qr-payment&quot;&gt;&lt;/div&gt;
    </code></pre>
    <p>The QR payment widget requires four different attributes on your element. The attributes are the following:</p>
    <ul>
    <li><code>data-api-user-id</code></li>
    <li><code>data-amount</code></li>
    <li><code>data-currency</code></li>
    <li><code>data-external-id</code></li>
    </ul>
    <p>If any of the above attributes is missing there will be an error thrown in your browser. The following requirements for each attribute are:</p>
    <h3 id="data-api-user-id"><code>data-api-user-id</code></h3>
    <p>Your unique identifier (UUID) for the <a href="https://momodeveloper.mtn.co.rw/api-documentation/api-description/" target="_blank" rel="noopener noreferrer"> API user</a> created. The value should be in the RFC 4122 version 4 format. For Live environment the API Key will be managed through the Partner GUI.</p>
    <p>Example:</p>
    <pre><code class="lang-html">&lt;div
      ...
      data-api-user-id=&quot;b12d7b22-3057-4c8e-ad50-63904171d18c&quot;
      ...
    &gt;
    &lt;/div&gt;
    </code></pre>
    <h3 id="data-amount"><code>data-amount</code></h3>
    <p>The amount to be charged. The amount can be any positive number up to four decimals (e.g. <code>100.9998</code>).</p>
    <p>Example:</p>
    <pre><code class="lang-html">&lt;div
      ...
      data-amount=&quot;100&quot;
      ...
    &gt;
    &lt;/div&gt;
    </code></pre>
    <h3 id="data-currency"><code>data-currency</code></h3>
    <p>The currency of the payment. The currency should be in the ISO-4217 format (e.g. <code>EUR</code>).</p>
    <p>Example:</p>
    <pre><code class="lang-html">&lt;div
      ...
      data-currency=&quot;EUR&quot;
      ...
    &gt;
    &lt;/div&gt;
    </code></pre>
    <h3 id="data-external-id"><code>data-external-id</code></h3>
    <p>Your identifer for the payment.</p>
    <p>Example:</p>
    <pre><code class="lang-html">&lt;div
      ...
      data-external-id=&quot;144-123-323&quot;
      ...
    &gt;
    &lt;/div&gt;
    </code></pre>
    <p>A valid QR payment widget looks like the following example.</p>
    <p>Example:</p>
    <pre><code class="lang-html">&lt;div
      class=&quot;mobile-money-qr-payment&quot;
      data-api-user-id=&quot;b12d7b22-3057-4c8e-ad50-63904171d18c&quot;
      data-amount=&quot;100&quot;
      data-currency=&quot;EUR&quot;
      data-external-id=&quot;144-123-323&quot;
    &gt;
    &lt;/div&gt;
    </code></pre>
    <p>What we described so far is the simplest form of the QR payment widget. When using the simplest form there is no integration towards your system. To see a status of a payment you will need to login into the Partner GUI.</p>
    <p>The QR payment has more features and these are explained in the sections below.</p>
    <h3 id="updating-attributes">Updating attributes</h3>
    <p>Updating the attributes of an element can be done in several ways and down below there is one example of how this could be done in plain JavaScript.</p>
    <ol>
    <li><p>Add an unique identifer to your element.</p>
    <p> Example:</p>
    <pre><code class="lang-html"> &lt;div
       id=&quot;my-unique-identifer&quot;
       class=&quot;mobile-money-qr-payment&quot;
       data-api-user-id=&quot;b12d7b22-3057-4c8e-ad50-63904171d18c&quot;
       data-amount=&quot;100.98&quot;
       data-currency=&quot;EUR&quot;
       data-external-id=&quot;144-123-323&quot;
     &gt;
     &lt;/div&gt;
    </code></pre>
    </li>
    <li><p>Fetch the element with the help of <code>document.getElementById(id);</code>.</p>
    <p> Example:</p>
    <pre><code class="lang-javascript"> var element = document.getElementById(&quot;my-unique-identifer&quot;);
    </code></pre>
    </li>
    <li><p>Set the attribute with the help of <code>element.setAttribute(name, value);</code>.</p>
    <p> Example:</p>
    <pre><code class="lang-javascript"> element.setAttribute(&quot;data-amount&quot;, 200.98);
    </code></pre>
    </li>
    <li><p>Done, your element should now have a new value for the specifed attribute!</p>
    </li>
    </ol>
    <p>Valid JavaScript code looks like the following example.</p>
    <p>Example:</p>
    <pre><code class="lang-javascript">// find the element
    var element = document.getElementById(&quot;my-unique-identifer&quot;);
    
    // set the attribute
    element.setAttribute(&quot;data-amount&quot;, 200.98);
    </code></pre>
    <h4 id="references">References</h4>
    <p><a href="https://developer.mozilla.org/en-US/docs/Web/API/Document/getElementById">Document.getElementById()</a></p>
    <p><a href="https://developer.mozilla.org/en-US/docs/Web/API/Element/setAttribute">Document.setAttribute()</a></p>
    <h3 id="events">Events</h3>
    <p>The following section assumes you know the basics of web development (HTML and JavaScript). We will describe which events are sent, when they are sent and what data they return.</p>
    <p>The QR payment widget has four events:</p>
    <ul>
    <li><code>mobile-money-qr-payment-created</code></li>
    <li><code>mobile-money-qr-payment-canceled</code></li>
    <li><code>mobile-money-qr-payment-successful</code></li>
    <li><code>mobile-money-qr-payment-failed</code></li>
    </ul>
    <p>The events are sent when the widget detects a state change of an invoice.</p>
    <h4 id="event-detail">Event detail</h4>
    <p>The event that is sent contains an invoice which can be accesed by <code>event.detail</code>.</p>
    <p>Example:</p>
    <pre><code class="lang-javascript">{
      &quot;invoiceId&quot;: &quot;a427024deb60474c&quot;,
      &quot;externalId&quot;: &quot;144-123-323&quot;,
      &quot;referenceId&quot;: &quot;4943bb77-7417-4aec-8293-1c99796d4872&quot;,
      &quot;paymentReference&quot;: &quot;08694e5c&quot;,
      &quot;payee&quot;: {
        &quot;partyIdType&quot;: &quot;PARTY_CODE&quot;,
        &quot;partyId&quot;: &quot;b12d7b22-3057-4c8e-ad50-63904171d18c&quot;
      },
      &quot;payeeFirstName&quot;: &quot;Tillman&quot;,
      &quot;payeeLastName&quot;: &quot;Inc.&quot;,
      &quot;amount&quot;: 100,
      &quot;currency&quot;: &quot;EUR&quot;,
      &quot;status&quot;: &quot;SUCCESSFUL&quot;, // PENDING, SUCCESSFUL or FAILED
      &quot;expiryDateTime&quot;: &quot;2018-06-03T04:15:49.795Z&quot;
    }
    </code></pre>
    <p>For further information about the invoice fields see Partner Gateway API.</p>
    <p>To listen to an event just add an event listener to either a parent of the widget or the widget itself. See example below.</p>
    <p>Example:</p>
    <pre><code class="lang-javascript">window.addEventListener(&quot;mobile-money-qr-payment-created&quot;, function (event) {
      console.log(&quot;Invoice:&quot;, event.detail);
    });
    </code></pre>
    <p>Example:</p>
    <pre><code class="lang-javascript">var element = document.getElementById(&quot;my-unique-identifer&quot;);
    element.addEventListener(&quot;mobile-money-qr-payment-created&quot;, function (event) {
      console.log(&quot;Invoice:&quot;, event.detail);
    });
    </code></pre>
    <h4 id="references">References</h4>
    <p><a href="https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener">EventTarget.addEventListener</a></p>
    <h4 id="mobile-money-qr-payment-created"><code>mobile-money-qr-payment-created</code></h4>
    <p>The mobile-money-qr-payment-created event is sent when an invoice is created. Emits the created invoice.</p>
    <h4 id="mobile-money-qr-payment-canceled"><code>mobile-money-qr-payment-canceled</code></h4>
    <p>The mobile-money-qr-payment-canceled event is sent when an invoice is canceled by the user. Emits the canceled invoice.</p>
    <h4 id="mobile-money-qr-payment-successful"><code>mobile-money-qr-payment-successful</code></h4>
    <p>The mobile-money-qr-payment-completed event is sent when an invoice is successful. Emits the successful invoice.</p>
    <h4 id="mobile-money-qr-payment-failed"><code>mobile-money-qr-payment-failed</code></h4>
    <p>The mobile-money-qr-payment-failed event is sent when there are any errors. Emits no invoice.</p>
    <h3 id="screenshots">Screenshots</h3>
    <h4 id="payment-button">Payment button</h4>
    <p>Default state of the widget.</p>
    <p><img src="https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/paymentbutton.png" alt="paymentbutton.png" title="Payment button view"></p>
    <h4 id="confirm-view">Confirm view</h4>
    <p>Shown when the button has been clicked. The event <code>mobile-money-qr-payment-created</code> is sent.</p>
    <p><img src="https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/confirm.png" alt="confirm.png" title="Confirm view"></p>
    <h4 id="successful-view">Successful view</h4>
    <p>Shown when the invoice has been successful. The event <code>mobile-money-qr-payment-successful</code> is sent.</p>
    <p><img src="https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/successful.png" alt="successful.png" title="Successful view"></p>
    <h4 id="failed-view">Failed view</h4>
    <p>Shown when problems are detected, e.g. network errors and Partner Gateway errors. The event <code>mobile-money-qr-payment-failed</code> is sent.</p>
    <p><img src="https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/failed.png" alt="failed.png" title="Failed view"></p>
    <h4 id="unsupported-browser-view">Unsupported browser view</h4>
    <p>Shown if the user is using a lower version than Internet Explorer 11.</p>
    <p><img src="https://apimstrpqkhalsw4lyybll3p.blob.core.windows.net/content/MediaLibrary/images/unsupported.png" alt="unsupported.png" title="Unsupported view"></p>
    <h2 id="initializing-dynamically-added-widgets">Initializing dynamically added widgets</h2>
    <p>The widgets are initializated during the <code>DOMContentLoaded</code> event. If any widget is added to the DOM tree during runtime these need to be initialized. To initialize new widgets the following method should be called:</p>
    <pre><code class="lang-javascript">mobileMoneyReinitializeWidgets();
    </code></pre>
    <h2 id="browser-support">Browser support</h2>
    <p>The widget aims to support evergreen browsers (browsers that are automatically upgraded to future versions) and Internet Explorer 11.</p>
    <h2 id="testing-in-sandbox-environment">Testing in sandbox environment</h2>
    <p>When using the sandbox script the widget is running towards a test backend.
    Depending on what amount the invoice has the backend will respond with different statuses.</p>
    <ul>
    <li>1 - 19 PENDING</li>
    <li>20 - 79 FAILED</li>
    <li>all other amounts SUCCESSFUL</li>
    </ul>
    <p>In the sandbox environment the attribute <code>data-api-user-id</code> can be an arbitrary UUID.</p>
    <p>Example below will show the pending state:</p>
    <pre><code class="lang-javascript">  &lt;div class=&quot;mobile-money-qr-payment&quot;
        data-api-user-id=&quot;b12d7b22-3057-4c8e-ad50-63904171d18c&quot;
        data-amount=&quot;10&quot;
        data-currency=&quot;EUR&quot;
        data-external-id=&quot;Receipt-2112&quot;&gt;
      &lt;/div&gt;
    </code></pre>
    </div>
</div>
</article>                                    </main>
            </div>

        </div>
    </div>



        <div class="layout-row">
            <div class="zone-footer layout">
                <footer role="contentinfo">
                        <div class="row">
                                                                                                            </div>
                    

<style>
    .modal-header{
        float: left;
        width: 100%;
    }
    .modal-title{
        float: left;
        width: auto;
        color: #505050 !important;
        font-size: 1.3em; 
    }
    .modal-body{
        display: block;
        clear: both;
        color: #505050 !important;
    }
    .modal-body .form-control{
        height: 46px !important;
        box-shadow: none;
    }
    .modal-body .form-control option{
        height: 46px;
    }
    .modal-body .form-control option:hover{
        background-color:#F4F5F9 !important;
    }
</style>
<div class="mtnfooter">
    <div class="row">
        <div class="col-sm-3">
            <img height="60" src="https://apimgmtst14nbxosi1zkfy2r.blob.core.windows.net/content/MediaLibrary/images/newmtnlogo.svg" alt="MTN MoMo Logo">
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Resources</h4>
                    <a href="/api-documentation">Documentation</a>
                    <a href="/docs/services/collection">API Sandbox</a>
                    <a href="/contact-support">Support</a>
                </div>
                
                <div class="col-sm-4">
                    <h4>Products</h4>
                    <a href="/docs/services/collection">Collections</a>
                    <a href="/docs/services/disbursement">Disbursements</a>
                    <a href="/widget-api">Collection Widget</a>
                    <a href="/docs/services/remittance">Remittances</a>
                </div>
                
                <div class="col-sm-4">
                    <h4>Legal</h4>
                    <!--<a href="/apitermsandcondition">Terms & Conditions</a>-->
                    <a href="#"  data-toggle="modal" data-target="#termsandconditionModal">Terms & Conditions</a>
                    <!--<a href="/disclaimer">Disclaimer</a>-->
                    <a href="#"  data-toggle="modal" data-target="#disclaimerModal">Disclaimer</a>
                    <!--<a href="/privacy">Privacy Policy</a>-->
                </div>
                
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
 <!--   
    <div class="copyright">&copy;MTN Uganda 2018.</div>-->
    
</div>

<!-- Modal -->
<div class="modal fade" id="termsandconditionModal" tabindex="-1" role="dialog" aria-labelledby="termsandconditionModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="termsandconditionModalHeader">Terms and Conditions</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="tncCountry">Select the country</label>
            <select id="tncCountry" class="form-control" onChange="window.location.href=this.value">
                <option>Country</option>
                <option value="/Rwanda_apitermsandcondition">Rwanda</option>
            </select>
          </div>
          
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="disclaimerModal" tabindex="-1" role="dialog" aria-labelledby="disclaimerModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="disclaimerModalHeader">Disclaimer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="tncCountry">Select the country</label>
            <select id="tncCountry" class="form-control" onChange="window.location.href=this.value">
                <option>Country</option>
                <option value="/Rwanda_disclaimer">Rwanda</option>
            </select>
          </div>
          
      </div>
    </div>
  </div>
</div>

                </footer>
            </div>
        </div>
</div>

    <script src="/Modules/Portals.Web.Core/scripts/bootstrap/bootstrap.js" type="text/javascript"></script>

    

<script type="text/html" id="scopePickerTemplate">
    <div class="row">
        <div class="col-md-6">
            <label data-bind="text: local.scopePickerHelper.policyPickerProductLabelTextShortcut('products', 'product', selectedProduct())"></label>
            <select class="col-md-6 form-control" data-bind="options: products, optionsText: 'name', value: selectedProduct, optionsCaption: local.scopePickerHelper.policyPickerProductCaptionTextShortcut(selectedProduct())" id="scopePickerProduct"></select>
        </div>
        <div class="col-md-6">
            <label data-bind="text: local.scopePickerHelper.policyPickerApiLabelTextShortcut('APIs', 'API', selectedApi(), selectedProduct())"></label>
            <select class="col-md-6 form-control" data-bind="options: apis, optionsText: 'name', value: selectedApi, optionsCaption: local.scopePickerHelper.policyPickerApiCaptionTextShortcut(selectedApi())" id="scopePickerApi"></select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label data-bind="text: local.scopePickerHelper.policyPickerOperationLabelTextShortcut('operations', 'operation', selectedOperation(), selectedApi())"></label>
            <select class="col-md-12 form-control" data-bind="options: operations, optionsText: $data.getOperationName.bind($data), value: selectedOperation, optionsCaption: local.scopePickerHelper.policyPickerOperationCaptionTextShortcut(selectedOperation())" id="scopePickerOperation"></select>
        </div>
    </div>
</script>
<script type="text/html" id="emptyTemplate">
    <table class="ap-empty-frame">
        <tbody>
            <tr>
                <td class="ap-empty-content-container" data-bind="here: 'content'"></td>
            </tr>
        </tbody>
    </table>
</script>

<script type="text/html" id="curtainTemplate">
    <div class="ap-curtain-background"></div>
    <table class="ap-curtain-foreground">
        <tbody>
            <tr>
                <td>
                    <div class="ap-curtain-content-container" data-bind="here: 'content'"></div>
                </td>
            </tr>
        </tbody>
    </table>
</script>
<script type="text/html" id="menuTemplate">
    <div class="btn-group" data-bind="foreach: items">
        <button class="btn btn-default" data-bind="
            css: { 'active' : isPicked(), 'ap-is-disabled':  !isEnabled() },
            enable: isEnabled(),
            text: text,
            event: { mouseover: activate, mouseout: deactivate },
            click: pick,
            attr: { title: tooltipOpt }"></button>
    </div>
</script>
<script type="text/html" id="emptyTemplate">
    <table class="ap-empty-frame">
        <tbody>
            <tr>
                <td class="ap-empty-content-container" data-bind="here: 'content'"></td>
            </tr>
        </tbody>
    </table>
</script>

<script type="text/html" id="curtainTemplate">
    <div class="ap-curtain-background"></div>
    <table class="ap-curtain-foreground">
        <tbody>
            <tr>
                <td>
                    <div class="ap-curtain-content-container" data-bind="here: 'content'"></div>
                </td>
            </tr>
        </tbody>
    </table>
</script>

<script type="text/html" id="validationSummaryTemplate">
    <!-- ko if: hasIssues() -->
    <div class="alert alert-danger" role="alert">
        <ul data-bind="foreach: issues">
            <!-- ko template: { name: template, data: templateData } --><!-- /ko -->
        </ul>
    </div>
    <!-- /ko -->
    <!-- ko if: hasWarnings() -->
    <div class="alert alert-warning" role="alert">
        <ul data-bind="foreach: warnings">
            <!-- ko template: { name: template, data: templateData } --><!-- /ko -->
        </ul>
    </div>
    <!-- /ko -->
    <!-- ko if: hasNotifications() -->
    <div class="alert alert-info" role="alert">
        <ul data-bind="foreach: notifications">
            <!-- ko template: { name: template, data: templateData } --><!-- /ko -->
        </ul>
    </div>
    <!-- /ko -->
</script>

<script type="text/html" id="simpleValidationSummaryItemTemplate">
    <li data-bind="html: $data"></li>
</script>
<script type="text/html" id="dateRangePickerBundleTemplate">
    <div class="row">
        <div class="col-md-6">
            <input class="ap-textbox form-control" type="text" data-bind="value: value, valueUpdate: 'afterkeydown', event: { mousedown: show, focus: show, blur: considerLeaving }" id="dateRangePickerRange" />
            <div class="ap-date-range-picker-placeholder">
                <div class="ap-date-range-picker-container" data-bind="template: { name: 'dateRangePickerTemplate', data: responder, if: visible() }, event: { mousedown: preventHiding }"></div>
            </div>
        </div>
    </div>
</script>

<script type="text/html" id="dateRangePickerTemplate">
    <div class="ap-date-range-picker">
        <div class="ap-date-range-pickers">
            <div class="ap-date-range-pickers-all">
                <div class="ap-date-range-picker-one-date-picker-container" data-bind="template: { name: 'datePickerTemplate', data: oneDatePicker }"></div>
                <div class="ap-date-range-picker-another-date-picker-container" data-bind="template: { name: 'datePickerTemplate', data: anotherDatePicker }"></div>
            </div>
        </div>
    </div>
</script>

<script type="text/html" id="datePickerTemplate">
    <div class="ap-date-picker">
        <div data-bind="template: { name: 'monthPickerTemplate', data: monthPicker }"></div>
        <div data-bind="template: { name: 'calendarTemplate', data: calendar }"></div>
    </div>
</script>

<script type="text/html" id="monthPickerTemplate">
    <div class="ap-month-picker">
        <div class="ap-month-picker-previous-action-container" data-bind="click: previousMonth"><a class="ap-month-picker-previous-action"></a></div>
        <div class="ap-month-picker-current">
            <div class="ap-month-picker-current-month-container">
                <span class="ap-month-picker-current-month-text" data-bind="text: month"></span>,
            </div>
            <div class="ap-month-picker-current-year-container">
                <span class="ap-month-picker-current-year-text" data-bind="text: year"></span>
            </div>
        </div>
        <div class="ap-month-picker-next-action-container" data-bind="click: nextMonth"><a class="ap-month-picker-next-action"></a></div>
    </div>
</script>

<script type="text/html" id="calendarTemplate">
    <table class="ap-calendar" border="0" cellpadding="0" cellspacing="0">
        <thead>
            <tr data-bind="foreach: dayOfWeekNames">
                <th data-bind="text: $data"></th>
            </tr>
        </thead>
        <tbody data-bind="foreach: weeks">
            <tr data-bind="foreach: $data">
                <td class="ap-calendar-day" data-bind="css: $parents[1].states.areEnabled($data, {
                    'weekend day': 'ap-is-weekend',
                    'from another month': 'ap-is-another-month-day',
                    'active': 'ap-is-active',
                    'picked': 'ap-is-picked',
                    'disabled': 'ap-is-disabled',
                    'selected': 'ap-is-selected'
                })">
                    <a class="ap-calendar-day-action" href="#" data-bind="
                    text: dayOfMonth,
                    event: {
                        mouseover: function() { return $parents[1].states.tryEnable(this, 'active'); },
                        mouseout: function() { return $parents[1].states.tryDisable(this, 'active'); }
                    },
                    click: function() { return $parents[1].states.tryEnable(this, 'picked'); }"></a>
                </td>
            </tr>
        </tbody>
    </table>
</script>



<script type="text/html" id="pagerTemplate">
    <!-- ko call: { addPageSizes: [[10,50,100]] } --><!-- /ko -->
    <!-- ko if: pageCount() > 1 -->
    <div class="clearfix">
        <ul class="pagination pull-left" role="navigation">
            <!-- ko if: page() > 1 -->
            <li data-bind="visible: page() > 1">
                <a href="#" rel="prev" data-bind="click: setPage.bind($data, 0)">&lt;&lt;</a>
            </li>
            <!-- /ko -->
            <!-- ko if: page() > 0 -->
            <li data-bind="visible: page() > 0">
                <a href="#" rel="prev" data-bind="click: setPage.bind($data, page() - 1)">&lt;</a>
            </li>
            <!-- /ko -->
            <!-- ko foreach: pages -->
            <li data-bind="css: { active: $data == $parent.page() }">
                <a href="#" data-bind="text: $data+1, click: $parent.setPage, attr: { 'aria-selected': $data == $parent.page() }"></a>
            </li>
            <!-- /ko -->
            <!-- ko if: page() < pageCount()-1 -->
            <li data-bind="visible: page() < pageCount() - 1">
                <a href="#" rel="next" data-bind="click: setPage.bind($data, page() + 1)" id="usersNextPage">&gt;</a>
            </li>
            <!-- /ko -->
            <!-- ko if: page() < pageCount()-2 -->
            <li data-bind="visible: page() < pageCount() - 2">
                <a href="#" rel="next" data-bind="click: setPage.bind($data, pageCount()-1)">&gt;&gt;</a>
            </li>
            <!-- /ko -->
        </ul>
        <!--ko if: pageSizes().length > 1 -->
        <ul class="pagination pull-right" role="navigation">
            <!-- ko foreach: { data: pageSizes, as: 'pageSizeOption' } -->
            <li data-bind="visible: $parent.isPageSizeOptionAvailable(pageSizeOption), css: { active: $parent.isPageSizeOptionSelected(pageSizeOption) }">
                <a href="#" data-bind="click: $parent.setPageSize, text: pageSizeOption, attr: { 'aria-selected': $parent.isPageSizeOptionSelected(pageSizeOption) }"></a>
            </li>
            <!-- /ko -->
            <li data-bind="visible: isShowAllOptionAvailable(), css: { active: isShowAllOptionSelected() }">
                <a href="#" data-bind="click: setPageSize.bind($data, 0)">All</a>
            </li>
        </ul>
        <!-- /ko -->
    </div>
    <!-- /ko -->
</script>

</body>
</html>