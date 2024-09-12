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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/code_view.min.js */
class __TwigTemplate_4d52fc7ea1d20afdaa933dab9308a42a extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{codeMirror:!0,codeMirrorOptions:{lineNumbers:!0,tabMode:\"indent\",indentWithTabs:!0,lineWrapping:!0,mode:\"text/html\",tabSize:2},codeBeautifierOptions:{end_with_newline:!0,indent_inner_html:!0,extra_liners:[\"p\",\"h1\",\"h2\",\"h3\",\"h4\",\"h5\",\"h6\",\"blockquote\",\"pre\",\"ul\",\"ol\",\"table\",\"dl\"],brace_style:\"expand\",indent_char:\"\\t\",indent_size:1,wrap_line_length:0},codeViewKeepActiveButtons:[\"fullscreen\"]}),a.FE.PLUGINS.codeView=function(b){function c(){return b.\$box.hasClass(\"fr-code-view\")}function d(){return l?l.getValue():k.val()}function e(a){var c=d();b.html.set(c),b.\$el.blur(),b.\$tb.find(\" > .fr-command\").not(a).removeClass(\"fr-disabled\").attr(\"aria-disabled\",!1),a.removeClass(\"fr-active\").attr(\"aria-pressed\",!1),b.events.focus(!0),b.placeholder.refresh(),b.undo.saveStep()}function f(c){k||(i(),!l&&b.opts.codeMirror&&\"undefined\"!=typeof CodeMirror?l=CodeMirror.fromTextArea(k.get(0),b.opts.codeMirrorOptions):b.events.\$on(k,\"keydown keyup change input\",function(){if(b.opts.height)this.removeAttribute(\"rows\");else if(this.rows||(this.rows=1),0===this.value.length)this.rows=1;else{for(this.style.height=\"auto\";this.rows>1&&this.scrollHeight<=this.offsetHeight;)this.rows-=1;for(;this.scrollHeight>this.offsetHeight&&(!b.opts.heightMax||this.offsetHeight<b.opts.heightMax);)this.rows+=1}})),b.undo.saveStep(),b.html.cleanEmptyTags(),b.html.cleanWhiteTags(!0),b.core.hasFocus()&&(b.core.isEmpty()||(b.selection.save(),b.\$el.find('.fr-marker[data-type=\"true\"]:first').replaceWith('<span class=\"fr-tmp fr-sm\">F</span>'),b.\$el.find('.fr-marker[data-type=\"false\"]:last').replaceWith('<span class=\"fr-tmp fr-em\">F</span>')));var d=b.html.get(!1,!0);b.\$el.find(\"span.fr-tmp\").remove(),b.\$box.toggleClass(\"fr-code-view\",!0),b.core.hasFocus()&&b.\$el.blur(),d=d.replace(/<span class=\"fr-tmp fr-sm\">F<\\/span>/,\"FROALA-SM\"),d=d.replace(/<span class=\"fr-tmp fr-em\">F<\\/span>/,\"FROALA-EM\"),b.codeBeautifier&&(d=b.codeBeautifier.run(d,b.opts.codeBeautifierOptions));var e,f;if(l){e=d.indexOf(\"FROALA-SM\"),f=d.indexOf(\"FROALA-EM\"),e>f?e=f:f-=9,d=d.replace(/FROALA-SM/g,\"\").replace(/FROALA-EM/g,\"\");var g=d.substring(0,e).length-d.substring(0,e).replace(/\\n/g,\"\").length,h=d.substring(0,f).length-d.substring(0,f).replace(/\\n/g,\"\").length;e=d.substring(0,e).length-d.substring(0,d.substring(0,e).lastIndexOf(\"\\n\")+1).length,f=d.substring(0,f).length-d.substring(0,d.substring(0,f).lastIndexOf(\"\\n\")+1).length,l.setSize(null,b.opts.height?b.opts.height:\"auto\"),b.opts.heightMin&&b.\$box.find(\".CodeMirror-scroll\").css(\"min-height\",b.opts.heightMin),l.setValue(d),l.focus(),l.setSelection({line:g,ch:e},{line:h,ch:f}),l.refresh(),l.clearHistory()}else{e=d.indexOf(\"FROALA-SM\"),f=d.indexOf(\"FROALA-EM\")-9,b.opts.heightMin&&k.css(\"min-height\",b.opts.heightMin),b.opts.height&&k.css(\"height\",b.opts.height),b.opts.heightMax&&k.css(\"max-height\",b.opts.height||b.opts.heightMax),k.val(d.replace(/FROALA-SM/g,\"\").replace(/FROALA-EM/g,\"\")).trigger(\"change\");var j=a(b.o_doc).scrollTop();k.focus(),k.get(0).setSelectionRange(e,f),a(b.o_doc).scrollTop(j)}b.\$tb.find(\" > .fr-command\").not(c).filter(function(){return b.opts.codeViewKeepActiveButtons.indexOf(a(this).data(\"cmd\"))<0}).addClass(\"fr-disabled\").attr(\"aria-disabled\",!0),c.addClass(\"fr-active\").attr(\"aria-pressed\",!0),!b.helpers.isMobile()&&b.opts.toolbarInline&&b.toolbar.hide()}function g(a){\"undefined\"==typeof a&&(a=!c());var d=b.\$tb.find('.fr-command[data-cmd=\"html\"]');a?(b.popups.hideAll(),f(d)):(b.\$box.toggleClass(\"fr-code-view\",!1),e(d))}function h(){c()&&g(b.\$tb.find('button[data-cmd=\"html\"]')),l&&l.toTextArea(),k.val(\"\").removeData().remove(),k=null,m&&(m.remove(),m=null)}function i(){k=a('<textarea class=\"fr-code\" tabIndex=\"-1\">'),b.\$wp.append(k),k.attr(\"dir\",b.opts.direction),b.\$box.hasClass(\"fr-basic\")||(m=a('<a data-cmd=\"html\" title=\"Code View\" class=\"fr-command fr-btn html-switch'+(b.helpers.isMobile()?\"\":\" fr-desktop\")+'\" role=\"button\" tabIndex=\"-1\"><i class=\"fa fa-code\"></i></button>'),b.\$box.append(m),b.events.bindClick(b.\$box,\"a.html-switch\",function(){g(!1)}));var e=function(){return!c()};b.events.on(\"buttons.refresh\",e),b.events.on(\"copy\",e,!0),b.events.on(\"cut\",e,!0),b.events.on(\"paste\",e,!0),b.events.on(\"destroy\",h,!0),b.events.on(\"html.set\",function(){c()&&g(!0)}),b.events.on(\"form.submit\",function(){c()&&(b.html.set(d()),b.events.trigger(\"contentChanged\",[],!0))},!0)}function j(){if(!b.\$wp)return!1}var k,l,m;return{_init:j,toggle:g,isActive:c,get:d}},a.FE.RegisterCommand(\"html\",{title:\"Code View\",undo:!1,focus:!1,forcedRefresh:!0,toggle:!0,callback:function(){this.codeView.toggle()},plugin:\"codeView\"}),a.FE.DefineIcon(\"html\",{NAME:\"code\"})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/code_view.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/code_view.min.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\plugins\\code_view.min.js");
    }
}
