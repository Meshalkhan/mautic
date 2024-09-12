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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/colors.min.js */
class __TwigTemplate_8dc67e91e6f4372c5c9c0fc0c3bec595 extends Template
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
        echo "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.POPUP_TEMPLATES,{\"colors.picker\":\"[_BUTTONS_][_TEXT_COLORS_][_BACKGROUND_COLORS_]\"}),a.extend(a.FE.DEFAULTS,{colorsText:[\"#61BD6D\",\"#1ABC9C\",\"#54ACD2\",\"#2C82C9\",\"#9365B8\",\"#475577\",\"#CCCCCC\",\"#41A85F\",\"#00A885\",\"#3D8EB9\",\"#2969B0\",\"#553982\",\"#28324E\",\"#000000\",\"#F7DA64\",\"#FBA026\",\"#EB6B56\",\"#E25041\",\"#A38F84\",\"#EFEFEF\",\"#FFFFFF\",\"#FAC51C\",\"#F37934\",\"#D14841\",\"#B8312F\",\"#7C706B\",\"#D1D5D8\",\"REMOVE\"],colorsBackground:[\"#61BD6D\",\"#1ABC9C\",\"#54ACD2\",\"#2C82C9\",\"#9365B8\",\"#475577\",\"#CCCCCC\",\"#41A85F\",\"#00A885\",\"#3D8EB9\",\"#2969B0\",\"#553982\",\"#28324E\",\"#000000\",\"#F7DA64\",\"#FBA026\",\"#EB6B56\",\"#E25041\",\"#A38F84\",\"#EFEFEF\",\"#FFFFFF\",\"#FAC51C\",\"#F37934\",\"#D14841\",\"#B8312F\",\"#7C706B\",\"#D1D5D8\",\"REMOVE\"],colorsStep:7,colorsDefaultTab:\"text\",colorsButtons:[\"colorsBack\",\"|\",\"-\"]}),a.FE.PLUGINS.colors=function(b){function c(){var a=b.\$tb.find('.fr-command[data-cmd=\"color\"]'),c=b.popups.get(\"colors.picker\");if(c||(c=e()),!c.hasClass(\"fr-active\"))if(b.popups.setContainer(\"colors.picker\",b.\$tb),i(c.find(\".fr-selected-tab\").attr(\"data-param1\")),a.is(\":visible\")){var d=a.offset().left+a.outerWidth()/2,f=a.offset().top+(b.opts.toolbarBottom?10:a.outerHeight()-10);b.popups.show(\"colors.picker\",d,f,a.outerHeight())}else b.position.forSelection(c),b.popups.show(\"colors.picker\")}function d(){b.popups.hide(\"colors.picker\")}function e(){var a='<div class=\"fr-buttons fr-colors-buttons\">';b.opts.toolbarInline&&b.opts.colorsButtons.length>0&&(a+=b.button.buildList(b.opts.colorsButtons)),a+=f()+\"</div>\";var c={buttons:a,text_colors:g(\"text\"),background_colors:g(\"background\")},d=b.popups.create(\"colors.picker\",c);return h(d),d}function f(){var a='<div class=\"fr-colors-tabs fr-group\">';return a+='<span class=\"fr-colors-tab '+(\"background\"==b.opts.colorsDefaultTab?\"\":\"fr-selected-tab \")+'fr-command\" tabIndex=\"-1\" role=\"button\" aria-pressed=\"'+(\"background\"!=b.opts.colorsDefaultTab)+'\" data-param1=\"text\" data-cmd=\"colorChangeSet\" title=\"'+b.language.translate(\"Text\")+'\">'+b.language.translate(\"Text\")+\"</span>\",a+='<span class=\"fr-colors-tab '+(\"background\"==b.opts.colorsDefaultTab?\"fr-selected-tab \":\"\")+'fr-command\" tabIndex=\"-1\" role=\"button\" aria-pressed=\"'+(\"background\"==b.opts.colorsDefaultTab)+'\" data-param1=\"background\" data-cmd=\"colorChangeSet\" title=\"'+b.language.translate(\"Background\")+'\">'+b.language.translate(\"Background\")+\"</span>\",a+\"</div>\"}function g(a){for(var c=\"text\"==a?b.opts.colorsText:b.opts.colorsBackground,d='<div class=\"fr-color-set fr-'+a+\"-color\"+(b.opts.colorsDefaultTab==a||\"text\"!=b.opts.colorsDefaultTab&&\"background\"!=b.opts.colorsDefaultTab&&\"text\"==a?\" fr-selected-set\":\"\")+'\">',e=0;e<c.length;e++)0!==e&&e%b.opts.colorsStep===0&&(d+=\"<br>\"),d+=\"REMOVE\"!=c[e]?'<span class=\"fr-command fr-select-color\" style=\"background: '+c[e]+';\" tabIndex=\"-1\" aria-selected=\"false\" role=\"button\" data-cmd=\"'+a+'Color\" data-param1=\"'+c[e]+'\"><span class=\"fr-sr-only\">'+b.language.translate(\"Color\")+\" \"+c[e]+\"&nbsp;&nbsp;&nbsp;</span></span>\":'<span class=\"fr-command fr-select-color\" data-cmd=\"'+a+'Color\" tabIndex=\"-1\" role=\"button\" data-param1=\"REMOVE\" title=\"'+b.language.translate(\"Clear Formatting\")+'\">'+b.icon.create(\"remove\")+'<span class=\"fr-sr-only\">'+b.language.translate(\"Clear Formatting\")+\"</span></span>\";return d+\"</div>\"}function h(c){b.events.on(\"popup.tab\",function(d){var e=a(d.currentTarget);if(!b.popups.isVisible(\"colors.picker\")||!e.is(\"span\"))return!0;var f=d.which,g=!0;if(a.FE.KEYCODE.TAB==f){var h=c.find(\".fr-buttons\");g=!b.accessibility.focusToolbar(h,!!d.shiftKey)}else if(a.FE.KEYCODE.ARROW_UP==f||a.FE.KEYCODE.ARROW_DOWN==f||a.FE.KEYCODE.ARROW_LEFT==f||a.FE.KEYCODE.ARROW_RIGHT==f){if(e.is(\"span.fr-select-color\")){var i=e.parent().find(\"span.fr-select-color\"),j=i.index(e),k=b.opts.colorsStep,l=Math.floor(i.length/k),m=j%k,n=Math.floor(j/k),o=n*k+m,p=l*k;a.FE.KEYCODE.ARROW_UP==f?o=((o-k)%p+p)%p:a.FE.KEYCODE.ARROW_DOWN==f?o=(o+k)%p:a.FE.KEYCODE.ARROW_LEFT==f?o=((o-1)%p+p)%p:a.FE.KEYCODE.ARROW_RIGHT==f&&(o=(o+1)%p);var q=a(i.get(o));b.events.disableBlur(),q.focus(),g=!1}}else a.FE.KEYCODE.ENTER==f&&(b.button.exec(e),g=!1);return g===!1&&(d.preventDefault(),d.stopPropagation()),g},!0)}function i(c){var d,e=b.popups.get(\"colors.picker\"),f=a(b.selection.element());d=\"background\"==c?\"background-color\":\"color\";var g=e.find(\".fr-\"+c+\"-color .fr-select-color\");for(g.find(\".fr-selected-color\").remove(),g.removeClass(\"fr-active-item\"),g.not('[data-param1=\"REMOVE\"]').attr(\"aria-selected\",!1);f.get(0)!=b.el;){if(\"transparent\"!=f.css(d)&&\"rgba(0, 0, 0, 0)\"!=f.css(d)){var h=e.find(\".fr-\"+c+'-color .fr-select-color[data-param1=\"'+b.helpers.RGBToHex(f.css(d))+'\"]');h.append('<span class=\"fr-selected-color\" aria-hidden=\"true\">\\uf00c</span>'),h.addClass(\"fr-active-item\").attr(\"aria-selected\",!0);break}f=f.parent()}}function j(a,c){a.hasClass(\"fr-selected-tab\")||(a.siblings().removeClass(\"fr-selected-tab\").attr(\"aria-pressed\",!1),a.addClass(\"fr-selected-tab\").attr(\"aria-pressed\",!0),a.parents(\".fr-popup\").find(\".fr-color-set\").removeClass(\"fr-selected-set\"),a.parents(\".fr-popup\").find(\".fr-color-set.fr-\"+c+\"-color\").addClass(\"fr-selected-set\"),i(c)),b.accessibility.focusPopup(a.parents(\".fr-popup\"))}function k(a){\"REMOVE\"!=a?b.format.applyStyle(\"background-color\",b.helpers.HEXtoRGB(a)):b.format.removeStyle(\"background-color\"),d()}function l(a){\"REMOVE\"!=a?b.format.applyStyle(\"color\",b.helpers.HEXtoRGB(a)):b.format.removeStyle(\"color\"),d()}function m(){b.popups.hide(\"colors.picker\"),b.toolbar.showInline()}return{showColorsPopup:c,hideColorsPopup:d,changeSet:j,background:k,text:l,back:m}},a.FE.DefineIcon(\"colors\",{NAME:\"tint\"}),a.FE.RegisterCommand(\"color\",{title:\"Colors\",undo:!1,focus:!0,refreshOnCallback:!1,popup:!0,callback:function(){this.popups.isVisible(\"colors.picker\")?(this.\$el.find(\".fr-marker\").length&&(this.events.disableBlur(),this.selection.restore()),this.popups.hide(\"colors.picker\")):this.colors.showColorsPopup()},plugin:\"colors\"}),a.FE.RegisterCommand(\"textColor\",{undo:!0,callback:function(a,b){this.colors.text(b)}}),a.FE.RegisterCommand(\"backgroundColor\",{undo:!0,callback:function(a,b){this.colors.background(b)}}),a.FE.RegisterCommand(\"colorChangeSet\",{undo:!1,focus:!1,callback:function(a,b){var c=this.popups.get(\"colors.picker\").find('.fr-command[data-cmd=\"'+a+'\"][data-param1=\"'+b+'\"]');this.colors.changeSet(c,b)}}),a.FE.DefineIcon(\"colorsBack\",{NAME:\"arrow-left\"}),a.FE.RegisterCommand(\"colorsBack\",{title:\"Back\",undo:!1,focus:!1,back:!0,refreshAfterCallback:!1,callback:function(){this.colors.back()}}),a.FE.DefineIcon(\"remove\",{NAME:\"eraser\"})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/colors.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/colors.min.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\plugins\\colors.min.js");
    }
}
