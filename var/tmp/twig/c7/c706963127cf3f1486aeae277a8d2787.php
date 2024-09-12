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

/* @bundles/PageBundle/Assets/builder/pick-a-color.css */
class __TwigTemplate_89d471e9114350947c36bc76b619943f extends Template
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
        echo "
.pick-a-color-markup *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
.pick-a-color-markup .hex-pound{padding-left:8px;padding-right:8px}@media screen and (max-width:991px){.pick-a-color-markup .hex-pound{padding:3px 5px 0px 5px;min-height:30px}}
.pick-a-color-markup .pick-a-color{padding:5px}@media screen and (max-width:991px){.pick-a-color-markup .pick-a-color{width:100%;font-size:18px;padding:9px;min-width:222px;height:47px}}
.pick-a-color-markup .input-group-btn .color-dropdown{padding:6px 5px}.pick-a-color-markup .input-group-btn .color-dropdown.no-hex{border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .input-group-btn .color-dropdown:focus{background-color:#fff}
@media screen and (max-width:991px){.pick-a-color-markup .input-group-btn .color-dropdown{height:47px}}
.pick-a-color-markup .color-preview{border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 0 2px 2px rgba(0,0,0,0.075);box-shadow:inset 0 0 2px 2px rgba(0,0,0,0.075);height:1.429em;width:1.429em;display:inline-block;cursor:pointer;margin-right:5px}.pick-a-color-markup .color-preview.current-color{margin-bottom:-5px}
@media screen and (max-width:991px){.pick-a-color-markup .color-preview{height:1.875em;width:1.875em}}
.pick-a-color-markup .color-menu{text-align:left;padding:5px 0px;width:330px;font-size:14px;left:auto;}.pick-a-color-markup .color-menu.color-menu--inline{left:-285px}@media screen and (max-width:991px){.pick-a-color-markup .color-menu.color-menu--inline{left:-242px}}
@media screen and (max-width:991px){.pick-a-color-markup .color-menu{left:-242px;width:293px}}.pick-a-color-markup .color-menu.small{width:100px}@media screen and (max-width:991px){.pick-a-color-markup .color-menu.small{left:-105px}}
.pick-a-color-markup .color-menu.no-hex{left:0px}
.pick-a-color-markup .color-menu ul{padding:0px;margin:0px}
.pick-a-color-markup .color-menu li{list-style-type:none;padding:5px 0px;margin:0px}
.pick-a-color-markup .color-menu .color-preview{vertical-align:middle;margin:0px}@media screen and (max-width:991px){.pick-a-color-markup .color-menu .color-preview{height:35px;width:35px}}.pick-a-color-markup .color-menu .color-preview.current-color,.pick-a-color-markup .color-menu .color-preview.white{background-color:#fff}
.pick-a-color-markup .color-menu .color-preview.red{background-color:#f00}
.pick-a-color-markup .color-menu .color-preview.orange{background-color:#f60}
.pick-a-color-markup .color-menu .color-preview.yellow{background-color:#ff0}
.pick-a-color-markup .color-menu .color-preview.green{background-color:#008000}
.pick-a-color-markup .color-menu .color-preview.blue{background-color:#00f}
.pick-a-color-markup .color-menu .color-preview.indigo{background-color:#4a0080}
.pick-a-color-markup .color-menu .color-preview.violet{background-color:#ee81ee}
.pick-a-color-markup .color-menu .color-preview.purple{background-color:#80007f}
.pick-a-color-markup .color-menu .color-preview.black{background-color:#000}
.pick-a-color-markup .color-menu .basicColors-content li>a,.pick-a-color-markup .color-menu .savedColors-content li>a{padding:5px 15px 3px 15px;cursor:default;min-height:25px;color:#333}.pick-a-color-markup .color-menu .basicColors-content li>a:hover,.pick-a-color-markup .color-menu .savedColors-content li>a:hover{background-color:#fff}
@media screen and (max-width:991px){.pick-a-color-markup .color-menu .basicColors-content li>a,.pick-a-color-markup .color-menu .savedColors-content li>a{min-height:40px}}
.pick-a-color-markup .color-menu .basicColors-content li:hover a,.pick-a-color-markup .color-menu .savedColors-content li:hover a{color:#333;background-image:none;filter:none;text-decoration:none;font-weight:bold}@media screen and (max-width:991px){.pick-a-color-markup .color-menu .basicColors-content li:hover a,.pick-a-color-markup .color-menu .savedColors-content li:hover a{background-color:#fff;font-weight:normal}}
.pick-a-color-markup .color-menu .btn.color-select{margin:0px 5px;height:20px;padding:0px 5px;margin-top:0px;line-height:1.5px;border-radius:4px}@media screen and (max-width:991px){.pick-a-color-markup .color-menu .btn.color-select{height:35px}}
.pick-a-color-markup .caret{margin-bottom:3px}
.pick-a-color-markup .color-menu-instructions,.pick-a-color-markup .advanced-instructions{text-align:center;padding:0px 6px;margin:0px;font-size:14px;font-weight:normal}@media screen and (min-width:992px){.pick-a-color-markup .color-menu-instructions,.pick-a-color-markup .advanced-instructions{display:none}}
.pick-a-color-markup .color-label{vertical-align:middle;margin:0px;margin-left:10px;cursor:pointer}@media screen and (max-width:991px){.pick-a-color-markup .color-label{margin-left:8px}}
.pick-a-color-markup .color-box{height:20px;width:200px;position:absolute;left:115px;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 0 2px 2px rgba(0,0,0,0.075);box-shadow:inset 0 0 2px 2px rgba(0,0,0,0.075);cursor:pointer}@media screen and (max-width:991px){.pick-a-color-markup .color-box{width:160px;height:35px}}
.pick-a-color-markup .black .highlight-band-stripe{background-color:#fff}
.pick-a-color-markup .spectrum-white{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#fff), to(#808080));background-image:-webkit-linear-gradient(left, color-stop(#fff 0), color-stop(#808080 100%));background-image:-moz-linear-gradient(left, #fff 0, #808080 100%);background-image:linear-gradient(to right, #fff 0, #808080 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ff808080', GradientType=1)}.pick-a-color-markup .spectrum-white .highlight-band{left:0px}
.pick-a-color-markup .spectrum-red{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #fff), color-stop(.5, #f00), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #fff 0, #f00 50%, #000 100%);background-image:-webkit-linear-gradient(left, #fff 0, #f00 50%, #000 100%);background-image:-o-linear-gradient(left, #fff 0, #f00 50%, #000 100%);background-image:linear-gradient(to right, #fff 0, #f00 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .spectrum-orange{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #fff), color-stop(.5, #f60), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #fff 0, #f60 50%, #000 100%);background-image:-webkit-linear-gradient(left, #fff 0, #f60 50%, #000 100%);background-image:-o-linear-gradient(left, #fff 0, #f60 50%, #000 100%);background-image:linear-gradient(to right, #fff 0, #f60 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .spectrum-yellow{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #fff), color-stop(.5, #ff0), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #fff 0, #ff0 50%, #000 100%);background-image:-webkit-linear-gradient(left, #fff 0, #ff0 50%, #000 100%);background-image:-o-linear-gradient(left, #fff 0, #ff0 50%, #000 100%);background-image:linear-gradient(to right, #fff 0, #ff0 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .spectrum-green{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #80ff80), color-stop(.5, #008000), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #80ff80 0, #008000 50%, #000 100%);background-image:-webkit-linear-gradient(left, #80ff80 0, #008000 50%, #000 100%);background-image:-o-linear-gradient(left, #80ff80 0, #008000 50%, #000 100%);background-image:linear-gradient(to right, #80ff80 0, #008000 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .spectrum-blue{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #fff), color-stop(.5, #00f), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #fff 0, #00f 50%, #000 100%);background-image:-webkit-linear-gradient(left, #fff 0, #00f 50%, #000 100%);background-image:-o-linear-gradient(left, #fff 0, #00f 50%, #000 100%);background-image:linear-gradient(to right, #fff 0, #00f 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .spectrum-purple{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #ff80ff), color-stop(.5, #80007f), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #ff80ff 0, #80007f 50%, #000 100%);background-image:-webkit-linear-gradient(left, #ff80ff 0, #80007f 50%, #000 100%);background-image:-o-linear-gradient(left, #ff80ff 0, #80007f 50%, #000 100%);background-image:linear-gradient(to right, #ff80ff 0, #80007f 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .spectrum-black{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#000), to(#808080));background-image:-webkit-linear-gradient(left, color-stop(#000 0), color-stop(#808080 100%));background-image:-moz-linear-gradient(left, #000 0, #808080 100%);background-image:linear-gradient(to right, #000 0, #808080 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff000000', endColorstr='#ff808080', GradientType=1)}.pick-a-color-markup .spectrum-black .highlight-band{left:0px;border:1px solid #808080}
.pick-a-color-markup .ie-spectrum{height:20px;width:100px;display:inline-block;top:-1}.pick-a-color-markup .ie-spectrum.hue{width:50.5px}@media screen and (max-width:991px){.pick-a-color-markup .ie-spectrum.hue{width:45.5px}}
@media screen and (max-width:991px){.pick-a-color-markup .ie-spectrum{width:80px;height:35px}}
.pick-a-color-markup .red-spectrum-0,.pick-a-color-markup .lightness-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#fff), to(#f00));background-image:-webkit-linear-gradient(left, color-stop(#fff 0), color-stop(#f00 100%));background-image:-moz-linear-gradient(left, #fff 0, #f00 100%);background-image:linear-gradient(to right, #fff 0, #f00 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffff0000', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .red-spectrum-1,.pick-a-color-markup .lightness-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#f00), to(#000));background-image:-webkit-linear-gradient(left, color-stop(#f00 0), color-stop(#000 100%));background-image:-moz-linear-gradient(left, #f00 0, #000 100%);background-image:linear-gradient(to right, #f00 0, #000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff0000', endColorstr='#ff000000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px}
.pick-a-color-markup .lightness-spectrum-0,.pick-a-color-markup .lightness-spectrum-1{width:150px}@media screen and (max-width:991px){.pick-a-color-markup .lightness-spectrum-0,.pick-a-color-markup .lightness-spectrum-1{width:135px}}
.pick-a-color-markup .orange-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#fff), to(#f60));background-image:-webkit-linear-gradient(left, color-stop(#fff 0), color-stop(#f60 100%));background-image:-moz-linear-gradient(left, #fff 0, #f60 100%);background-image:linear-gradient(to right, #fff 0, #f60 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffff6600', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .orange-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#f60), to(#000));background-image:-webkit-linear-gradient(left, color-stop(#f60 0), color-stop(#000 100%));background-image:-moz-linear-gradient(left, #f60 0, #000 100%);background-image:linear-gradient(to right, #f60 0, #000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff6600', endColorstr='#ff000000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px}
.pick-a-color-markup .yellow-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#fff), to(#ff0));background-image:-webkit-linear-gradient(left, color-stop(#fff 0), color-stop(#ff0 100%));background-image:-moz-linear-gradient(left, #fff 0, #ff0 100%);background-image:linear-gradient(to right, #fff 0, #ff0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffffff00', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .yellow-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#ff0), to(#000));background-image:-webkit-linear-gradient(left, color-stop(#ff0 0), color-stop(#000 100%));background-image:-moz-linear-gradient(left, #ff0 0, #000 100%);background-image:linear-gradient(to right, #ff0 0, #000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff00', endColorstr='#ff000000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px}
.pick-a-color-markup .green-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#80ff80), to(#008000));background-image:-webkit-linear-gradient(left, color-stop(#80ff80 0), color-stop(#008000 100%));background-image:-moz-linear-gradient(left, #80ff80 0, #008000 100%);background-image:linear-gradient(to right, #80ff80 0, #008000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff80ff80', endColorstr='#ff008000', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .green-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#008000), to(#000));background-image:-webkit-linear-gradient(left, color-stop(#008000 0), color-stop(#000 100%));background-image:-moz-linear-gradient(left, #008000 0, #000 100%);background-image:linear-gradient(to right, #008000 0, #000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff008000', endColorstr='#ff000000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px}
.pick-a-color-markup .blue-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#fff), to(#00f));background-image:-webkit-linear-gradient(left, color-stop(#fff 0), color-stop(#00f 100%));background-image:-moz-linear-gradient(left, #fff 0, #00f 100%);background-image:linear-gradient(to right, #fff 0, #00f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ff0000ff', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .blue-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#00f), to(#000));background-image:-webkit-linear-gradient(left, color-stop(#00f 0), color-stop(#000 100%));background-image:-moz-linear-gradient(left, #00f 0, #000 100%);background-image:linear-gradient(to right, #00f 0, #000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0000ff', endColorstr='#ff000000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px}
.pick-a-color-markup .purple-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#ff80ff), to(#80007f));background-image:-webkit-linear-gradient(left, color-stop(#ff80ff 0), color-stop(#80007f 100%));background-image:-moz-linear-gradient(left, #ff80ff 0, #80007f 100%);background-image:linear-gradient(to right, #ff80ff 0, #80007f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff80ff', endColorstr='#ff80007f', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .purple-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#80007f), to(#000));background-image:-webkit-linear-gradient(left, color-stop(#80007f 0), color-stop(#000 100%));background-image:-moz-linear-gradient(left, #80007f 0, #000 100%);background-image:linear-gradient(to right, #80007f 0, #000 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff80007f', endColorstr='#ff000000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px}
.pick-a-color-markup .saturation-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#808080), to(#bf4040));background-image:-webkit-linear-gradient(left, color-stop(#808080 0), color-stop(#bf4040 100%));background-image:-moz-linear-gradient(left, #808080 0, #bf4040 100%);background-image:linear-gradient(to right, #808080 0, #bf4040 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff808080', endColorstr='#ffbf4040', GradientType=1);border-bottom-left-radius:4px;border-top-left-radius:4px;width:150px}@media screen and (max-width:991px){.pick-a-color-markup .saturation-spectrum-0{width:135px}}
.pick-a-color-markup .saturation-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#bf4040), to(#f00));background-image:-webkit-linear-gradient(left, color-stop(#bf4040 0), color-stop(#f00 100%));background-image:-moz-linear-gradient(left, #bf4040 0, #f00 100%);background-image:linear-gradient(to right, #bf4040 0, #f00 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffbf4040', endColorstr='#ffff0000', GradientType=1);border-bottom-right-radius:4px;border-top-right-radius:4px;width:150px}@media screen and (max-width:991px){.pick-a-color-markup .saturation-spectrum-1{width:135px}}
.pick-a-color-markup .hue-spectrum-0{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#f00), to(#ff0));background-image:-webkit-linear-gradient(left, color-stop(#f00 0), color-stop(#ff0 100%));background-image:-moz-linear-gradient(left, #f00 0, #ff0 100%);background-image:linear-gradient(to right, #f00 0, #ff0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff0000', endColorstr='#ffffff00', GradientType=1)}
.pick-a-color-markup .hue-spectrum-1{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#ff0), to(#0f0));background-image:-webkit-linear-gradient(left, color-stop(#ff0 0), color-stop(#0f0 100%));background-image:-moz-linear-gradient(left, #ff0 0, #0f0 100%);background-image:linear-gradient(to right, #ff0 0, #0f0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff00', endColorstr='#ff00ff00', GradientType=1)}
.pick-a-color-markup .hue-spectrum-2{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#0f0), to(#0ff));background-image:-webkit-linear-gradient(left, color-stop(#0f0 0), color-stop(#0ff 100%));background-image:-moz-linear-gradient(left, #0f0 0, #0ff 100%);background-image:linear-gradient(to right, #0f0 0, #0ff 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff00ff00', endColorstr='#ff00ffff', GradientType=1);left:-1px;position:relative}
.pick-a-color-markup .hue-spectrum-3{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#0ff), to(#00f));background-image:-webkit-linear-gradient(left, color-stop(#0ff 0), color-stop(#00f 100%));background-image:-moz-linear-gradient(left, #0ff 0, #00f 100%);background-image:linear-gradient(to right, #0ff 0, #00f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff00ffff', endColorstr='#ff0000ff', GradientType=1);left:-1px;position:relative}
.pick-a-color-markup .hue-spectrum-4{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#00f), to(#f0f));background-image:-webkit-linear-gradient(left, color-stop(#00f 0), color-stop(#f0f 100%));background-image:-moz-linear-gradient(left, #00f 0, #f0f 100%);background-image:linear-gradient(to right, #00f 0, #f0f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0000ff', endColorstr='#ffff00ff', GradientType=1);left:-1px;position:relative}
.pick-a-color-markup .hue-spectrum-5{background-image:-webkit-gradient(linear, 0 top, 100% top, from(#f0f), to(#f00));background-image:-webkit-linear-gradient(left, color-stop(#f0f 0), color-stop(#f00 100%));background-image:-moz-linear-gradient(left, #f0f 0, #f00 100%);background-image:linear-gradient(to right, #f0f 0, #f00 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff00ff', endColorstr='#ffff0000', GradientType=1);left:-2px;position:relative}
.pick-a-color-markup .highlight-band{border:1px solid #222;border-radius:2px;-webkit-box-shadow:1px 1px 1px #333;box-shadow:1px 1px 1px #333;height:19px;width:11px;display:inline-block;cursor:pointer;cursor:-webkit-grab;cursor:-moz-grab;position:absolute;top:-1px;left:94.5px;text-align:center}@media screen and (max-width:991px){.pick-a-color-markup .highlight-band{width:21px;left:69.5px;height:34px}}
.pick-a-color-markup .highlight-band-stripe{min-height:80%;min-width:1px;background-color:#000;opacity:0.40;margin:2px 1px;display:inline-block;-webkit-box-shadow:1px 0 2px 0 #fff;box-shadow:1px 0 2px 0 #fff}@media screen and (max-width:991px){.pick-a-color-markup .highlight-band-stripe{margin:4px 2px}}
.pick-a-color-markup .color-menu-tabs{padding:5px 3px 3px 10px;font-size:12px;color:#333;border-bottom:1px solid #ccc;margin-bottom:5px}.pick-a-color-markup .color-menu-tabs .tab{padding:4px 5px;margin:5px;border-left:1px solid #fff;border-right:1px solid #fff;cursor:pointer;background-color:#fff}.pick-a-color-markup .color-menu-tabs .tab:hover{padding-bottom:6px;border-top:1px solid #ccc;border-right:1px solid #ccc;border-left:1px solid #ccc;border-top-right-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .color-menu-tabs a{color:#333;text-decoration:none}
.pick-a-color-markup .color-menu-tabs .tab-active{border-bottom:3px solid #fff;padding-bottom:5px;border-top:1px solid #ccc;border-right:1px solid #ccc;border-left:1px solid #ccc;border-top-right-radius:4px;border-top-left-radius:4px}
.pick-a-color-markup .active-content{display:block}
.pick-a-color-markup .inactive-content{display:none}
.pick-a-color-markup .savedColors-content{padding:5px 15px;white-space:normal}.pick-a-color-markup .savedColors-content li.color-item>a{margin-left:7px;padding-left:8px;border-radius:4px}
.pick-a-color-markup .saved-color-col{position:relative;left:-15px;float:left;width:149px}@media screen and (max-width:991px){.pick-a-color-markup .saved-color-col{width:130px}}
.pick-a-color-markup .advanced-content ul{margin-top:10px}
.pick-a-color-markup .advanced-content li{padding:5px 15px 3px 15px;cursor:default;min-height:25px;height:50px;position:relative}@media screen and (max-width:991px){.pick-a-color-markup .advanced-content li{min-height:70px}}
.pick-a-color-markup .advanced-content .color-preview{height:50px;width:300px;float:left;margin:0px 0px 10px 0px;background-color:#f00;text-align:center}.pick-a-color-markup .advanced-content .color-preview .color-select.btn.advanced{margin-top:15px;display:none}@media screen and (max-width:991px){.pick-a-color-markup .advanced-content .color-preview .color-select.btn.advanced{display:inline;margin-top:7px}}
.pick-a-color-markup .advanced-content .color-preview:hover .color-select.btn.advanced{display:inline}
@media screen and (max-width:991px){.pick-a-color-markup .advanced-content .color-preview{width:270px;margin-left:-10px}}
.pick-a-color-markup .advanced-content .spectrum-hue{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #f00), color-stop(17%, #ff0), color-stop(34%, #0f0), color-stop(51%, #0ff), color-stop(68%, #00f), color-stop(85%, #f0f), color-stop(100%, #f00));background-image:-moz-linear-gradient(left center, #f00 0, #ff0 17%, #0f0 24%, #0ff 51%, #00f 68%, #f0f 85%, #f00 100%);background-image:-webkit-linear-gradient(left, #f00 0, #ff0 17%, #0f0 24%, #0ff 51%, #00f 68%, #f0f 85%, #f00 100%);background-image:-o-linear-gradient(left, #f00 0, #ff0 17%, #0f0 24%, #0ff 51%, #00f 68%, #f0f 85%, #f00 100%);background-image:linear-gradient(to right, #f00 0, #ff0 17%, #0f0 24%, #0ff 51%, #00f 68%, #f0f 85%, #f00 100%);background-repeat:repeat-x}.pick-a-color-markup .advanced-content .spectrum-hue .highlight-band{left:0px}
.pick-a-color-markup .advanced-content .spectrum-lightness{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #fff), color-stop(.5, #f00), color-stop(1, #000));background-image:-moz-linear-gradient(left center, #fff 0, #f00 50%, #000 100%);background-image:-webkit-linear-gradient(left, #fff 0, #f00 50%, #000 100%);background-image:-o-linear-gradient(left, #fff 0, #f00 50%, #000 100%);background-image:linear-gradient(to right, #fff 0, #f00 50%, #000 100%);background-repeat:repeat-x}
.pick-a-color-markup .advanced-content .spectrum-saturation{background-image:-webkit-gradient(linear, left top, right top, color-stop(0, #808080), color-stop(.5, #f00), color-stop(1, #f00));background-image:-moz-linear-gradient(left center, #808080 0, #f00 50%, #f00 100%);background-image:-webkit-linear-gradient(left, #808080 0, #f00 50%, #f00 100%);background-image:-o-linear-gradient(left, #808080 0, #f00 50%, #f00 100%);background-image:linear-gradient(to right, #808080 0, #f00 50%, #f00 100%);background-repeat:repeat-x}.pick-a-color-markup .advanced-content .spectrum-saturation .highlight-band{left:287px}@media screen and (max-width:991px){.pick-a-color-markup .advanced-content .spectrum-saturation .highlight-band{left:247px}}
.pick-a-color-markup .advanced-content .spectrum-lightness .highlight-band{left:143.5px}@media screen and (max-width:991px){.pick-a-color-markup .advanced-content .spectrum-lightness .highlight-band{left:123.5px}}
.pick-a-color-markup .advanced-content .lightness-text,.pick-a-color-markup .advanced-content .hue-text,.pick-a-color-markup .advanced-content .saturation-text,.pick-a-color-markup .advanced-content .preview-text{vertical-align:middle;text-align:center;display:block}
.pick-a-color-markup .advanced-content .color-box{left:15px;top:25px;width:300px}@media screen and (max-width:991px){.pick-a-color-markup .advanced-content .color-box{width:270px;left:10px}}
.pick-a-color-markup .advanced-content .preview-item{height:80px}
@-moz-document url-prefix(){@media screen and (max-width:991px){div.pick-a-color-markup .color-menu{left:0px}}}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Assets/builder/pick-a-color.css";
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
        return new Source("", "@bundles/PageBundle/Assets/builder/pick-a-color.css", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Assets\\builder\\pick-a-color.css");
    }
}
