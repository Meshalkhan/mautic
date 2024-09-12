<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/emoticons.min.js */
class __TwigTemplate_eea2ec720a2c68a9864f5190d5838d5f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.POPUP_TEMPLATES,{emoticons:\"[_BUTTONS_][_EMOTICONS_]\"}),a.extend(a.FE.DEFAULTS,{emoticonsStep:8,emoticonsSet:[{code:\"1f600\",desc:\"Grinning face\"},{code:\"1f601\",desc:\"Grinning face with smiling eyes\"},{code:\"1f602\",desc:\"Face with tears of joy\"},{code:\"1f603\",desc:\"Smiling face with open mouth\"},{code:\"1f604\",desc:\"Smiling face with open mouth and smiling eyes\"},{code:\"1f605\",desc:\"Smiling face with open mouth and cold sweat\"},{code:\"1f606\",desc:\"Smiling face with open mouth and tightly-closed eyes\"},{code:\"1f607\",desc:\"Smiling face with halo\"},{code:\"1f608\",desc:\"Smiling face with horns\"},{code:\"1f609\",desc:\"Winking face\"},{code:\"1f60a\",desc:\"Smiling face with smiling eyes\"},{code:\"1f60b\",desc:\"Face savoring delicious food\"},{code:\"1f60c\",desc:\"Relieved face\"},{code:\"1f60d\",desc:\"Smiling face with heart-shaped eyes\"},{code:\"1f60e\",desc:\"Smiling face with sunglasses\"},{code:\"1f60f\",desc:\"Smirking face\"},{code:\"1f610\",desc:\"Neutral face\"},{code:\"1f611\",desc:\"Expressionless face\"},{code:\"1f612\",desc:\"Unamused face\"},{code:\"1f613\",desc:\"Face with cold sweat\"},{code:\"1f614\",desc:\"Pensive face\"},{code:\"1f615\",desc:\"Confused face\"},{code:\"1f616\",desc:\"Confounded face\"},{code:\"1f617\",desc:\"Kissing face\"},{code:\"1f618\",desc:\"Face throwing a kiss\"},{code:\"1f619\",desc:\"Kissing face with smiling eyes\"},{code:\"1f61a\",desc:\"Kissing face with closed eyes\"},{code:\"1f61b\",desc:\"Face with stuck out tongue\"},{code:\"1f61c\",desc:\"Face with stuck out tongue and winking eye\"},{code:\"1f61d\",desc:\"Face with stuck out tongue and tightly-closed eyes\"},{code:\"1f61e\",desc:\"Disappointed face\"},{code:\"1f61f\",desc:\"Worried face\"},{code:\"1f620\",desc:\"Angry face\"},{code:\"1f621\",desc:\"Pouting face\"},{code:\"1f622\",desc:\"Crying face\"},{code:\"1f623\",desc:\"Persevering face\"},{code:\"1f624\",desc:\"Face with look of triumph\"},{code:\"1f625\",desc:\"Disappointed but relieved face\"},{code:\"1f626\",desc:\"Frowning face with open mouth\"},{code:\"1f627\",desc:\"Anguished face\"},{code:\"1f628\",desc:\"Fearful face\"},{code:\"1f629\",desc:\"Weary face\"},{code:\"1f62a\",desc:\"Sleepy face\"},{code:\"1f62b\",desc:\"Tired face\"},{code:\"1f62c\",desc:\"Grimacing face\"},{code:\"1f62d\",desc:\"Loudly crying face\"},{code:\"1f62e\",desc:\"Face with open mouth\"},{code:\"1f62f\",desc:\"Hushed face\"},{code:\"1f630\",desc:\"Face with open mouth and cold sweat\"},{code:\"1f631\",desc:\"Face screaming in fear\"},{code:\"1f632\",desc:\"Astonished face\"},{code:\"1f633\",desc:\"Flushed face\"},{code:\"1f634\",desc:\"Sleeping face\"},{code:\"1f635\",desc:\"Dizzy face\"},{code:\"1f636\",desc:\"Face without mouth\"},{code:\"1f637\",desc:\"Face with medical mask\"}],emoticonsButtons:[\"emoticonsBack\",\"|\"],emoticonsUseImage:!0}),a.FE.PLUGINS.emoticons=function(b){function c(){var a=b.\$tb.find('.fr-command[data-cmd=\"emoticons\"]'),c=b.popups.get(\"emoticons\");if(c||(c=e()),!c.hasClass(\"fr-active\")){b.popups.refresh(\"emoticons\"),b.popups.setContainer(\"emoticons\",b.\$tb);var d=a.offset().left+a.outerWidth()/2,f=a.offset().top+(b.opts.toolbarBottom?10:a.outerHeight()-10);b.popups.show(\"emoticons\",d,f,a.outerHeight())}}function d(){b.popups.hide(\"emoticons\")}function e(){var a=\"\";b.opts.toolbarInline&&b.opts.emoticonsButtons.length>0&&(a='<div class=\"fr-buttons fr-emoticons-buttons\">'+b.button.buildList(b.opts.emoticonsButtons)+\"</div>\");var c={buttons:a,emoticons:f()},d=b.popups.create(\"emoticons\",c);return b.tooltip.bind(d,\".fr-emoticon\"),g(d),d}function f(){for(var a='<div style=\"text-align: center\">',c=0;c<b.opts.emoticonsSet.length;c++)0!==c&&c%b.opts.emoticonsStep===0&&(a+=\"<br>\"),a+='<span class=\"fr-command fr-emoticon\" tabIndex=\"-1\" data-cmd=\"insertEmoticon\" title=\"'+b.language.translate(b.opts.emoticonsSet[c].desc)+'\" role=\"button\" data-param1=\"'+b.opts.emoticonsSet[c].code+'\">'+(b.opts.emoticonsUseImage?'<img src=\"https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/'+b.opts.emoticonsSet[c].code+'.svg\"/>':\"&#x\"+b.opts.emoticonsSet[c].code+\";\")+'<span class=\"fr-sr-only\">'+b.language.translate(b.opts.emoticonsSet[c].desc)+\"&nbsp;&nbsp;&nbsp;</span></span>\";return b.opts.emoticonsUseImage&&(a+='<p style=\"font-size: 12px; text-align: center; padding: 0 5px;\">Emoji free by <a class=\"fr-link\" tabIndex=\"-1\" href=\"http://emojione.com/\" target=\"_blank\" rel=\"nofollow\" role=\"link\" aria-label=\"Open Emoji One website.\">Emoji One</a></p>'),a+=\"</div>\"}function g(c){b.events.on(\"popup.tab\",function(d){var e=a(d.currentTarget);if(!b.popups.isVisible(\"emoticons\")||!e.is(\"span, a\"))return!0;var f,g,h,i=d.which;if(a.FE.KEYCODE.TAB==i){if(e.is(\"span.fr-emoticon\")&&d.shiftKey||e.is(\"a\")&&!d.shiftKey){var j=c.find(\".fr-buttons\");f=!b.accessibility.focusToolbar(j,!!d.shiftKey)}if(f!==!1){var k=c.find(\"span.fr-emoticon:focus:first, span.fr-emoticon:visible:first, a\");e.is(\"span.fr-emoticon\")&&(k=k.not(\"span.fr-emoticon:not(:focus)\")),g=k.index(e),g=d.shiftKey?((g-1)%k.length+k.length)%k.length:(g+1)%k.length,h=k.get(g),b.events.disableBlur(),h.focus(),f=!1}}else if(a.FE.KEYCODE.ARROW_UP==i||a.FE.KEYCODE.ARROW_DOWN==i||a.FE.KEYCODE.ARROW_LEFT==i||a.FE.KEYCODE.ARROW_RIGHT==i){if(e.is(\"span.fr-emoticon\")){var l=e.parent().find(\"span.fr-emoticon\");g=l.index(e);var m=b.opts.emoticonsStep,n=Math.floor(l.length/m),o=g%m,p=Math.floor(g/m),q=p*m+o,r=n*m;a.FE.KEYCODE.ARROW_UP==i?q=((q-m)%r+r)%r:a.FE.KEYCODE.ARROW_DOWN==i?q=(q+m)%r:a.FE.KEYCODE.ARROW_LEFT==i?q=((q-1)%r+r)%r:a.FE.KEYCODE.ARROW_RIGHT==i&&(q=(q+1)%r),h=a(l.get(q)),b.events.disableBlur(),h.focus(),f=!1}}else a.FE.KEYCODE.ENTER==i&&(e.is(\"a\")?e[0].click():b.button.exec(e),f=!1);return f===!1&&(d.preventDefault(),d.stopPropagation()),f},!0)}function h(c,d){b.html.insert('<span class=\"fr-emoticon fr-deletable'+(d?\" fr-emoticon-img\":\"\")+'\"'+(d?' style=\"background: url('+d+');\"':\"\")+\">\"+(d?\"&nbsp;\":c)+\"</span>&nbsp;\"+a.FE.MARKERS,!0)}function i(){b.popups.hide(\"emoticons\"),b.toolbar.showInline()}function j(){var c=function(){for(var a=b.el.querySelectorAll(\".fr-emoticon:not(.fr-deletable)\"),c=0;c<a.length;c++)a[c].className+=\" fr-deletable\"};c(),b.events.on(\"html.set\",c);var d=function(){if(!b.selection.isCollapsed())return!1;var a=b.selection.element(),c=b.selection.endElement();if(a&&b.node.hasClass(a,\"fr-emoticon\"))return a;if(c&&b.node.hasClass(c,\"fr-emoticon\"))return c;var d=b.selection.ranges(0),e=d.startContainer;if(e.nodeType==Node.ELEMENT_NODE&&e.childNodes.length>0&&d.startOffset>0){var f=e.childNodes[d.startOffset-1];if(b.node.hasClass(f,\"fr-emoticon\"))return f}return!1};b.events.on(\"keydown\",function(c){if(b.keys.isCharacter(c.which)&&b.selection.inEditor()){var e=b.selection.ranges(0),f=d();f&&(0===e.startOffset&&b.selection.element()===f?a(f).before(a.FE.MARKERS+a.FE.INVISIBLE_SPACE):a(f).after(a.FE.INVISIBLE_SPACE+a.FE.MARKERS),b.selection.restore())}}),b.events.on(\"keyup\",function(c){for(var e=b.el.querySelectorAll(\".fr-emoticon\"),f=0;f<e.length;f++)\"undefined\"!=typeof e[f].textContent&&0===e[f].textContent.replace(/\\u200B/gi,\"\").length&&a(e[f]).remove();if(!(c.which>=a.FE.KEYCODE.ARROW_LEFT&&c.which<=a.FE.KEYCODE.ARROW_DOWN)){var g=d();b.node.hasClass(g,\"fr-emoticon-img\")&&(a(g).append(a.FE.MARKERS),b.selection.restore())}})}return{_init:j,insert:h,showEmoticonsPopup:c,hideEmoticonsPopup:d,back:i}},a.FE.DefineIcon(\"emoticons\",{NAME:\"smile-o\"}),a.FE.RegisterCommand(\"emoticons\",{title:\"Emoticons\",undo:!1,focus:!0,refreshOnCallback:!1,popup:!0,callback:function(){this.popups.isVisible(\"emoticons\")?(this.\$el.find(\".fr-marker\").length&&(this.events.disableBlur(),this.selection.restore()),this.popups.hide(\"emoticons\")):this.emoticons.showEmoticonsPopup()},plugin:\"emoticons\"}),a.FE.RegisterCommand(\"insertEmoticon\",{callback:function(a,b){this.emoticons.insert(\"&#x\"+b+\";\",this.opts.emoticonsUseImage?\"https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/\"+b+\".svg\":null),this.emoticons.hideEmoticonsPopup()}}),a.FE.DefineIcon(\"emoticonsBack\",{NAME:\"arrow-left\"}),a.FE.RegisterCommand(\"emoticonsBack\",{title:\"Back\",undo:!1,focus:!1,back:!0,refreshAfterCallback:!1,callback:function(){this.emoticons.back()}})});";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/emoticons.min.js";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/emoticons.min.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\plugins\\emoticons.min.js");
    }
}
