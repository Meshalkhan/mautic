<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/PageBundle/DataFixtures/ORM/fakepagehitdata.csv */
class __TwigTemplate_1cd927308795c9c94e68c02f36a0da34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "page,ipAddress,dateHit,dateLeft,code,referer,url,userAgent,pageLanguage,browserLanguages,trackingId
3,1,8/9/14 19:00,8/9/14 19:01,200,http://localhost/mautic/pages/view/3,http://localhost/mautic/p/page/es_MX/3:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,es_MX,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",H764T844
1,38,8/10/14 0:22,8/10/14 0:22,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",5KPMMUCC
1,36,8/10/14 0:22,8/10/14 0:22,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",5KPMMUCC
1,15,8/10/14 0:22,8/10/14 0:22,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",E2Q6OBTT
1,18,8/10/14 0:23,8/10/14 0:23,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",RZT87U00
1,42,8/10/14 0:23,8/10/14 0:23,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",RZT87U00
1,5,8/10/14 0:23,8/10/14 0:23,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",YOQLXM44
1,1,8/10/14 0:23,8/10/14 0:23,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",OBKQCCRR
1,39,8/10/14 0:23,8/10/14 0:23,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",OBKQCCRR
1,42,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",SUDI7EZZ
1,42,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",6QM3ZGEE
1,32,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",JBW4CYRR
1,37,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",IYPAQXX
1,35,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",RDDQEK44
1,14,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",3GLTTX00
1,15,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",Z7H6S6CC
1,32,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",ZIPRWGMM
1,15,8/10/14 0:24,8/10/14 0:24,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",9WOPU3WW
1,30,8/10/14 0:26,8/10/14 0:26,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",9QW2PE44
1,2,8/10/14 0:26,8/10/14 0:26,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",KT7FHXSS
1,20,8/10/14 0:26,8/10/14 0:26,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",D3O0F7NN
1,43,8/10/14 0:27,8/10/14 0:27,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",QRT1O6VV
1,4,8/10/14 0:27,8/10/14 0:27,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",CLRK3CMM
1,43,8/10/14 0:27,8/10/14 0:27,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",4H7BVT22
1,2,8/10/14 0:27,8/10/14 0:28,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",6F8ZXEE
1,31,8/10/14 0:30,8/10/14 0:30,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",WYY3KF66
2,46,8/10/14 0:30,8/10/14 0:30,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",HSZ4NWKK
2,36,8/10/14 0:30,8/10/14 0:30,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",4M9RF144
2,45,8/10/14 0:30,8/10/14 0:30,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",GIYIEJ22
2,14,8/10/14 0:30,8/10/14 0:30,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",OPAIDMM
2,35,8/10/14 0:30,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",P9JOSSVV
2,33,8/10/14 0:30,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",Q8SLO5YY
2,8,8/10/14 0:30,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",OGRXTRQQ
2,42,8/10/14 0:30,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",1R45QTUU
2,35,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",OB1QZ144
2,47,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",UZ00ZR66
2,31,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",KRQ2F4FF
2,15,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",NVN2JEFF
2,28,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",UJFR71NN
2,47,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",CZ69ZOUU
2,2,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",Z03WC1OO
2,15,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",YLUNOS33
2,21,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",4Q4L3EDD
2,9,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",F73DD644
2,33,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",RVOJXM00
2,36,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",WYRHCFF
2,30,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",PX57555
2,44,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",0IBIS0GG
2,28,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",LFOHPMNN
2,9,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",74CM5J99
2,9,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",4EZBX0GG
2,19,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",MKEVKDZZ
2,19,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",99LNEEKK
2,35,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",QDPXP9
2,18,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",ICW7BS77
2,36,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",EFAHDC99
2,24,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",LM4J9PII
2,11,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",2S3J1K66
2,34,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",3EXUCLEE
2,37,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",W5TR0BRR
2,31,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",3I4TC288
2,44,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",IQLVMMUU
2,25,8/10/14 0:31,8/10/14 0:31,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",XC5ZPDXX
2,43,8/10/14 0:32,8/10/14 0:32,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",WNOL0UZZ
2,39,8/10/14 0:32,8/10/14 0:32,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",KOFQ3044
2,17,8/10/14 0:32,8/10/14 0:32,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",GI26RS66
2,17,8/10/14 0:32,8/10/14 0:32,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",GQEN0GEE
2,33,8/10/14 0:40,8/10/14 0:40,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",ONZRBVGG
2,14,8/10/14 0:40,8/10/14 0:41,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",N4MLY555
1,22,8/10/14 0:47,8/10/14 0:47,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",AGEYKUYY
2,15,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",TOWNL9UU
2,10,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",3SN3WPJJ
2,4,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",RQY64ZHH
2,41,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",O3BDIVWW
2,40,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",G2JULRR
2,27,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",9Q4LJOWW
2,14,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",ZKDZ9N00
2,37,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",JLPUNPII
2,46,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",ATVT2KUU
2,16,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",6L5GEWII
2,43,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",C0EX4933
2,17,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",1JWEEY
2,6,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",HMN1FZ77
2,29,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",4V37K977
2,24,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",GBDDG0JJ
2,35,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",8EJ7OW99
2,1,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",Y21VCNLL
2,1,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",4OOI0C66
2,2,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",3XQD0E33
2,6,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",W5PNQ9CC
2,25,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",11BBNP
2,5,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",3QVAHF11
2,49,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",4DCW3PVV
2,28,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",0EZB9OCC
2,46,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",ODB8SKHH
2,44,8/10/14 0:47,8/10/14 0:47,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",F744CMII
1,32,8/10/14 1:08,8/10/14 1:08,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",ZGWS2Z33
2,26,8/10/14 1:08,8/10/14 1:08,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",95XW2JVV
2,34,8/10/14 1:11,8/10/14 1:11,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",C7EYGG66
2,41,8/10/14 1:11,8/10/14 1:11,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",J6C2KJJ
2,2,8/10/14 1:11,8/10/14 1:11,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",1US5SPBB
2,39,8/10/14 1:12,8/10/14 1:12,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",CW6YD533
2,38,8/10/14 1:12,8/10/14 1:12,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",FY9FEAWW
2,24,8/10/14 1:12,8/10/14 1:12,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",Z4LXDL66
2,3,8/10/14 1:12,8/10/14 1:12,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",IJPE4Z33
2,45,8/10/14 1:12,8/10/14 1:12,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",3L76FSS
2,13,8/10/14 1:12,8/10/14 1:12,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",UD2OGC44
2,31,8/10/14 1:12,8/10/14 1:13,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",Z36Y96YY
2,17,8/10/14 1:12,8/10/14 1:13,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",IX3S9766
2,38,8/10/14 1:13,8/10/14 1:13,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",OFX17FUU
2,42,8/10/14 1:13,8/10/14 1:13,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",7259A4YY
2,10,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",TK9649UU
2,25,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",9NZ8HLWW
2,31,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",8N6RW177
2,45,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",OC6LS7RR
2,26,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",QTZ8XMM
2,1,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",RC7GLHQQ
2,16,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",MPFEO811
2,29,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",PSOP6XOO
2,36,8/10/14 1:15,8/10/14 1:15,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",7K6Z7LXX
2,41,8/10/14 1:17,8/10/14 1:18,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",53e6bd3323eb9
2,48,8/10/14 1:18,8/10/14 1:18,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",53e6bd3323eb9
1,50,8/10/14 1:20,8/10/14 1:21,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53e6bb48e5053
1,18,8/10/14 1:20,8/10/14 1:20,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53e6bb48e5053
2,5,8/10/14 1:48,8/10/14 1:48,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) Version/7.0.5 Safari/537.77.4\",en,\"a:1:{i:0;s:5:\\\"en-US\\\";}\",53e6bd3323eb9
1,14,8/12/14 19:51,8/12/14 19:51,200,http://localhost/mautic/pages/view/1,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53ea6d090aab5
2,9,8/12/14 19:51,8/12/14 19:51,200,NULL,http://localhost/mautic/p/page/2:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53ea6d090aab5
2,7,8/12/14 20:02,8/12/14 20:02,200,NULL,http://localhost/mautic/p/page/2:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53ea72c1c0232
1,19,8/12/14 20:02,8/12/14 20:02,200,NULL,http://localhost/mautic/p/page/1:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53ea72c1c0232
2,35,8/12/14 20:02,8/12/14 20:02,200,NULL,http://localhost/mautic/p/page/2:kaleidoscope-conference-2014,Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:31.0) Gecko/20100101 Firefox/31.0,en,\"a:2:{i:0;s:5:\\\"en-US\\\";i:1;s:8:\\\"en;q=0.5\\\";}\",53ea72c1c0232";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/DataFixtures/ORM/fakepagehitdata.csv";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/fakepagehitdata.csv", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\DataFixtures\\ORM\\fakepagehitdata.csv");
    }
}
