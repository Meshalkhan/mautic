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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/file.min.js */
class __TwigTemplate_02385c22d17e9031ac2a51981ee84cc5 extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.POPUP_TEMPLATES,{\"file.insert\":\"[_BUTTONS_][_UPLOAD_LAYER_][_PROGRESS_BAR_]\"}),a.extend(a.FE.DEFAULTS,{fileUploadURL:\"https://i.froala.com/upload\",fileUploadParam:\"file\",fileUploadParams:{},fileUploadToS3:!1,fileUploadMethod:\"POST\",fileMaxSize:10485760,fileAllowedTypes:[\"*\"],fileInsertButtons:[\"fileBack\",\"|\"],fileUseSelectedText:!1}),a.FE.PLUGINS.file=function(b){function c(){var a=b.\$tb.find('.fr-command[data-cmd=\"insertFile\"]'),c=b.popups.get(\"file.insert\");if(c||(c=s()),e(),!c.hasClass(\"fr-active\")){b.popups.refresh(\"file.insert\"),b.popups.setContainer(\"file.insert\",b.\$tb);var d=a.offset().left+a.outerWidth()/2,f=a.offset().top+(b.opts.toolbarBottom?0:a.outerHeight());b.popups.show(\"file.insert\",d,f,a.outerHeight())}}function d(){var a=b.popups.get(\"file.insert\");a||(a=s()),a.find(\".fr-layer.fr-active\").removeClass(\"fr-active\").addClass(\"fr-pactive\"),a.find(\".fr-file-progress-bar-layer\").addClass(\"fr-active\"),a.find(\".fr-buttons\").hide(),f(\"Uploading\",0)}function e(a){var c=b.popups.get(\"file.insert\");c&&(c.find(\".fr-layer.fr-pactive\").addClass(\"fr-active\").removeClass(\"fr-pactive\"),c.find(\".fr-file-progress-bar-layer\").removeClass(\"fr-active\"),c.find(\".fr-buttons\").show(),a&&(b.events.focus(),b.popups.hide(\"file.insert\")))}function f(a,c){var d=b.popups.get(\"file.insert\");if(d){var e=d.find(\".fr-file-progress-bar-layer\");e.find(\"h3\").text(a+(c?\" \"+c+\"%\":\"\")),e.removeClass(\"fr-error\"),c?(e.find(\"div\").removeClass(\"fr-indeterminate\"),e.find(\"div > span\").css(\"width\",c+\"%\")):e.find(\"div\").addClass(\"fr-indeterminate\")}}function g(a){d();var c=b.popups.get(\"file.insert\"),e=c.find(\".fr-file-progress-bar-layer\");e.addClass(\"fr-error\");var f=e.find(\"h3\");f.text(a),b.events.disableBlur(),f.focus()}function h(a,c,d){b.edit.on(),b.events.focus(!0),b.selection.restore(),b.opts.fileUseSelectedText&&b.selection.text().length&&(c=b.selection.text()),b.html.insert('<a href=\"'+a+'\" id=\"fr-inserted-file\" class=\"fr-file\">'+c+\"</a>\");var e=b.\$el.find(\"#fr-inserted-file\");e.removeAttr(\"id\"),b.popups.hide(\"file.insert\"),b.undo.saveStep(),x(),b.events.trigger(\"file.inserted\",[e,d])}function i(c){try{if(b.events.trigger(\"file.uploaded\",[c],!0)===!1)return b.edit.on(),!1;var d=JSON.parse(c);return d.link?d:(n(A,c),!1)}catch(e){return n(C,c),!1}}function j(c){try{var d=a(c).find(\"Location\").text(),e=a(c).find(\"Key\").text();return b.events.trigger(\"file.uploadedToS3\",[d,e,c],!0)===!1?(b.edit.on(),!1):d}catch(f){return n(C,c),!1}}function k(a){var c=this.status,d=this.response,e=this.responseXML,f=this.responseText;try{if(b.opts.fileUploadToS3)if(201==c){var g=j(e);g&&h(g,a,d||e)}else n(C,d||e);else if(c>=200&&c<300){var k=i(f);k&&h(k.link,a,d||f)}else n(B,d||f)}catch(l){n(C,d||f)}}function l(){n(C,this.response||this.responseText||this.responseXML)}function m(a){if(a.lengthComputable){var b=a.loaded/a.total*100|0;f(\"Uploading\",b)}}function n(a,c){b.edit.on(),g(b.language.translate(\"Something went wrong. Please try again.\")),b.events.trigger(\"file.error\",[{code:a,message:G[a]},c])}function o(){b.edit.on(),e(!0)}function p(a){if(\"undefined\"!=typeof a&&a.length>0){if(b.events.trigger(\"file.beforeUpload\",[a])===!1)return!1;var c=a[0];if(c.size>b.opts.fileMaxSize)return n(D),!1;if(b.opts.fileAllowedTypes.indexOf(\"*\")<0&&b.opts.fileAllowedTypes.indexOf(c.type.replace(/file\\//g,\"\"))<0)return n(E),!1;var e;if(b.drag_support.formdata&&(e=b.drag_support.formdata?new FormData:null),e){var f;if(b.opts.fileUploadToS3!==!1){e.append(\"key\",b.opts.fileUploadToS3.keyStart+(new Date).getTime()+\"-\"+(c.name||\"untitled\")),e.append(\"success_action_status\",\"201\"),e.append(\"X-Requested-With\",\"xhr\"),e.append(\"Content-Type\",c.type);for(f in b.opts.fileUploadToS3.params)b.opts.fileUploadToS3.params.hasOwnProperty(f)&&e.append(f,b.opts.fileUploadToS3.params[f])}for(f in b.opts.fileUploadParams)b.opts.fileUploadParams.hasOwnProperty(f)&&e.append(f,b.opts.fileUploadParams[f]);e.append(b.opts.fileUploadParam,c);var g=b.opts.fileUploadURL;b.opts.fileUploadToS3&&(g=b.opts.fileUploadToS3.uploadURL?b.opts.fileUploadToS3.uploadURL:\"https://\"+b.opts.fileUploadToS3.region+\".amazonaws.com/\"+b.opts.fileUploadToS3.bucket);var h=b.core.getXHR(g,b.opts.fileUploadMethod);h.onload=function(){k.call(h,c.name)},h.onerror=l,h.upload.onprogress=m,h.onabort=o,d(),b.edit.off();var i=b.popups.get(\"file.insert\");i&&i.off(\"abortUpload\").on(\"abortUpload\",function(){4!=h.readyState&&h.abort()}),h.send(e)}}}function q(c){b.events.\$on(c,\"dragover dragenter\",\".fr-file-upload-layer\",function(){return a(this).addClass(\"fr-drop\"),!1},!0),b.events.\$on(c,\"dragleave dragend\",\".fr-file-upload-layer\",function(){return a(this).removeClass(\"fr-drop\"),!1},!0),b.events.\$on(c,\"drop\",\".fr-file-upload-layer\",function(d){d.preventDefault(),d.stopPropagation(),a(this).removeClass(\"fr-drop\");var e=d.originalEvent.dataTransfer;if(e&&e.files){var f=c.data(\"instance\")||b;f.file.upload(e.files)}},!0),b.events.\$on(c,\"change\",'.fr-file-upload-layer input[type=\"file\"]',function(){if(this.files){var d=c.data(\"instance\")||b;d.file.upload(this.files)}a(this).val(\"\")},!0)}function r(){e()}function s(a){if(a)return b.popups.onHide(\"file.insert\",r),!0;var c=\"\";c='<div class=\"fr-buttons\">'+b.button.buildList(b.opts.fileInsertButtons)+\"</div>\";var d=\"\";d='<div class=\"fr-file-upload-layer fr-layer fr-active\" id=\"fr-file-upload-layer-'+b.id+'\"><strong>'+b.language.translate(\"Drop file\")+\"</strong><br>(\"+b.language.translate(\"or click\")+')<div class=\"fr-form\"><input type=\"file\" name=\"'+b.opts.fileUploadParam+'\" accept=\"/*\" tabIndex=\"-1\" aria-labelledby=\"fr-file-upload-layer-'+b.id+'\" role=\"button\"></div></div>';var e='<div class=\"fr-file-progress-bar-layer fr-layer\"><h3 tabIndex=\"-1\" class=\"fr-message\">Uploading</h3><div class=\"fr-loader\"><span class=\"fr-progress\"></span></div><div class=\"fr-action-buttons\"><button type=\"button\" class=\"fr-command fr-dismiss\" data-cmd=\"fileDismissError\" tabIndex=\"2\" role=\"button\">OK</button></div></div>',f={buttons:c,upload_layer:d,progress_bar:e},g=b.popups.create(\"file.insert\",f);return q(g),g}function t(a){if(b.node.hasClass(a,\"fr-file\"))return b.events.trigger(\"file.unlink\",[a])}function u(c){var e=c.originalEvent.dataTransfer;if(e&&e.files&&e.files.length){var f=e.files[0];if(f&&\"undefined\"!=typeof f.type&&f.type.indexOf(\"image\")<0&&(b.opts.fileAllowedTypes.indexOf(f.type)>=0||b.opts.fileAllowedTypes.indexOf(\"*\")>=0)){b.markers.remove(),b.markers.insertAtPoint(c.originalEvent),b.\$el.find(\".fr-marker\").replaceWith(a.FE.MARKERS),b.popups.hideAll();var g=b.popups.get(\"file.insert\");return g||(g=s()),b.popups.setContainer(\"file.insert\",b.\$sc),b.popups.show(\"file.insert\",c.originalEvent.pageX,c.originalEvent.pageY),d(),p(e.files),c.preventDefault(),c.stopPropagation(),!1}}}function v(){b.events.on(\"drop\",u),b.events.\$on(b.\$win,\"keydown\",function(c){var d=c.which,e=b.popups.get(\"file.insert\");e&&d==a.FE.KEYCODE.ESC&&e.trigger(\"abortUpload\")}),b.events.on(\"destroy\",function(){var a=b.popups.get(\"file.insert\");a&&a.trigger(\"abortUpload\")})}function w(){b.events.disableBlur(),b.selection.restore(),b.events.enableBlur(),b.popups.hide(\"file.insert\"),b.toolbar.showInline()}function x(){var a,c=Array.prototype.slice.call(b.el.querySelectorAll(\"a.fr-file\")),d=[];for(a=0;a<c.length;a++)d.push(c[a].getAttribute(\"href\"));if(H)for(a=0;a<H.length;a++)d.indexOf(H[a].getAttribute(\"href\"))<0&&b.events.trigger(\"file.unlink\",[H[a]]);H=c}function y(){v(),b.events.on(\"link.beforeRemove\",t),b.\$wp&&(x(),b.events.on(\"contentChanged\",x)),s(!0)}var z=1,A=2,B=3,C=4,D=5,E=6,F=7,G={};G[z]=\"File cannot be loaded from the passed link.\",G[A]=\"No link in upload response.\",G[B]=\"Error during file upload.\",G[C]=\"Parsing response failed.\",G[D]=\"File is too large.\",G[E]=\"File file type is invalid.\",G[F]=\"Files can be uploaded only to same domain in IE 8 and IE 9.\";var H;return{_init:y,showInsertPopup:c,upload:p,insert:h,back:w,hideProgressBar:e}},a.FE.DefineIcon(\"insertFile\",{NAME:\"file-o\"}),a.FE.RegisterCommand(\"insertFile\",{title:\"Upload File\",undo:!1,focus:!0,refreshAfterCallback:!1,popup:!0,callback:function(){this.popups.isVisible(\"file.insert\")?(this.\$el.find(\".fr-marker\").length&&(this.events.disableBlur(),this.selection.restore()),this.popups.hide(\"file.insert\")):this.file.showInsertPopup()},plugin:\"file\"}),a.FE.DefineIcon(\"fileBack\",{NAME:\"arrow-left\"}),a.FE.RegisterCommand(\"fileBack\",{title:\"Back\",undo:!1,focus:!1,back:!0,refreshAfterCallback:!1,callback:function(){this.file.back()},refresh:function(a){this.opts.toolbarInline?(a.removeClass(\"fr-hidden\"),a.next(\".fr-separator\").removeClass(\"fr-hidden\")):(a.addClass(\"fr-hidden\"),a.next(\".fr-separator\").addClass(\"fr-hidden\"))}}),a.FE.RegisterCommand(\"fileDismissError\",{title:\"OK\",callback:function(){this.file.hideProgressBar(!0)}})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/file.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/file.min.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\plugins\\file.min.js");
    }
}
