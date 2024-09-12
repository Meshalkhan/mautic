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

/* @MauticFocus/Builder/generate.js.twig */
class __TwigTemplate_87e7e21475064f460f66856e8e123e3e extends Template
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
        // line 7
        $context["style"] = twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 7, $this->source); })()), "style", [], "any", false, false, false, 7);
        // line 8
        $context["props"] = twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 8, $this->source); })()), "properties", [], "any", false, false, false, 8);
        // line 9
        $context["useScrollEvent"] = twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 9, $this->source); })()), "when", [], "any", false, false, false, 9), ["scroll_slight", "scroll_middle", "scroll_bottom"]);
        // line 10
        $context["useUnloadEvent"] = ("leave" == twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 10, $this->source); })()), "when", [], "any", false, false, false, 10));
        // line 11
        $context["useTimeout"] = ((twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "timeout", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "timeout", [], "any", false, false, false, 11), 0)) : (0));
        // line 12
        $context["animate"] = ( !twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "animate", [], "any", true, true, false, 12) || (twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "animate", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 12, $this->source); })()), "animate", [], "any", false, false, false, 12))));
        // line 13
        $context["linkActivation"] = ( !twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "link_activation", [], "any", true, true, false, 13) || (twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "link_activation", [], "any", true, true, false, 13) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 13, $this->source); })()), "link_activation", [], "any", false, false, false, 13))));
        // line 14
        $context["clickUrl"] = ((array_key_exists("clickUrl", $context)) ? (_twig_default_filter((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 14, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), "link_url", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), "link_url", [], "any", false, false, false, 14)));
        // line 16
        if (("5seconds" == twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 16, $this->source); })()), "when", [], "any", false, false, false, 16))) {
            // line 17
            $context["useTimeout"] = 5;
        } elseif (("minute" == twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 18, $this->source); })()), "when", [], "any", false, false, false, 18))) {
            // line 19
            $context["useTimeout"] = 60;
        }
        // line 22
        if (((isset($context["useTimeout"]) || array_key_exists("useTimeout", $context) ? $context["useTimeout"] : (function () { throw new RuntimeError('Variable "useTimeout" does not exist.', 22, $this->source); })()) > 0)) {
            // line 23
            $context["timeout"] = ((isset($context["useTimeout"]) || array_key_exists("useTimeout", $context) ? $context["useTimeout"] : (function () { throw new RuntimeError('Variable "useTimeout" does not exist.', 23, $this->source); })()) * 1000);
        }
        // line 26
        $context["cssContent"] = twig_include($this->env, $context, "@MauticFocus/Builder/style.less.twig", ["preview" =>         // line 27
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 27, $this->source); })()), "focus" =>         // line 28
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 28, $this->source); })())], false);
        // line 31
        $context["parentCssContent"] = twig_include($this->env, $context, "@MauticFocus/Builder/parent.less.twig", ["preview" =>         // line 32
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 32, $this->source); })())], false);
        // line 35
        if (("bar" === (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 35, $this->source); })()))) {
            // line 36
            $context["iframeClass"] = ((("mf-bar-iframe mf-bar-iframe-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 36, $this->source); })()), "bar", [], "any", false, false, false, 36), "placement", [], "any", false, false, false, 36)) . " mf-bar-iframe-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 36, $this->source); })()), "bar", [], "any", false, false, false, 36), "size", [], "any", false, false, false, 36));
            // line 37
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 37, $this->source); })()), "bar", [], "any", false, false, false, 37), "sticky", [], "any", false, false, false, 37)) {
                // line 38
                $context["iframeClass"] = ((isset($context["iframeClass"]) || array_key_exists("iframeClass", $context) ? $context["iframeClass"] : (function () { throw new RuntimeError('Variable "iframeClass" does not exist.', 38, $this->source); })()) . " mf-bar-iframe-sticky");
            }
        } elseif ((("modal" ===         // line 40
(isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 40, $this->source); })())) || ("notification" === (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 40, $this->source); })())))) {
            // line 41
            $context["iframeClass"] = ((((("mf-" . (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 41, $this->source); })())) . "-iframe mf-") . (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 41, $this->source); })())) . "-iframe-") . twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 41, $this->source); })()), (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 41, $this->source); })()), [], "array", false, false, false, 41), "placement", [], "any", false, false, false, 41), ["_" => "-"]));
        } else {
            // line 43
            $context["iframeClass"] = (("mf-" . (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 43, $this->source); })())) . "-iframe");
        }
        // line 45
        echo "(function (window) {
    if (typeof window.MauticFocusParentHeadStyleInserted == 'undefined') {
        window.MauticFocusParentHeadStyleInserted = false;
    }

    window.MauticFocus";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "js", null, true);
        echo " = function () {
        var Focus = {
            debug: ";
        // line 52
        echo ((("dev" == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "environment", [], "any", false, false, false, 52))) ? ("true") : ("false"));
        echo ",
            modalsDismissed: {},
            ignoreConverted: ";
        // line 54
        if ((( !("notification" === twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54)) && twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "stop_after_conversion", [], "any", true, true, false, 54)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 54, $this->source); })()), "stop_after_conversion", [], "any", false, false, false, 54)))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            ignoreClosed: ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "stop_after_close", [], "any", true, true, false, 55) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 55, $this->source); })()), "stop_after_close", [], "any", false, false, false, 55)))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",

            // Initialize the focus
            initialize: function () {
                if (Focus.debug)
                    console.log('initialize()');

                Focus.insertStyleIntoHead();
                Focus.registerFocusEvent();

                // Add class to body
                Focus.addClass(document.getElementsByTagName('body')[0], 'MauticFocus";
        // line 66
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 66, $this->source); })())), "js", null, true);
        echo "');
            },

            // Register click events for toggling bar, closing windows, etc
            registerClickEvents: function () {
                ";
        // line 71
        if (("bar" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 71, $this->source); })()))) {
            // line 72
            echo "                var isTop = Focus.hasClass(Focus.iframeFocus, 'mf-bar-top');
                Focus.setDefaultBarPosition(isTop);

                var collapser = document.getElementsByClassName('mf-bar-collapser-";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75), "js", null, true);
            echo "');

                if (collapser[0]) {
                    collapser[0].addEventListener('click', function () {
                        Focus.toggleBarCollapse(collapser[0], false);
                    });
                }
                ";
        } else {
            // line 83
            echo "                var closer = Focus.iframeDoc.getElementsByClassName('mf-";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 83, $this->source); })()), "js", null, true);
            echo "-close');
                var aTag = closer[0].getElementsByTagName('a');
                var container = Focus.iframeDoc.getElementsByClassName('mf-";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 85, $this->source); })()), "js", null, true);
            echo "');

                container.onclick = function(e) {
                    if (e) { e.stopPropagation(); }
                    else { window.event.cancelBubble = true; }
                };

                aTag[0].addEventListener('click', function (event) {
                    if (typeof Focus.modalsDismissed[\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93), "js", null, true);
            echo "\"] == 'undefined') {
                        Focus.incrementCloseCount();
                    }
                    document.dispatchEvent(new CustomEvent(\"focus_";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "js", null, true);
            echo "_close\"));
                });

                document.addEventListener(\"focus_";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99), "js", null, true);
            echo "_close\", function (event) {
                    // Prevent multiple engagements for link clicks on exit intent
                    Focus.modalsDismissed[\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101), "js", null, true);
            echo "\"] = true;

                    // Remove iframe
                    if (Focus.iframe.parentNode) {
                        Focus.iframe.parentNode.removeChild(Focus.iframe);
                    }

                    var overlays = document.getElementsByClassName('mf-modal-overlay-";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108), "js", null, true);
            echo "');
                    if (overlays.length) {
                        overlays[0].parentNode.removeChild(overlays[0]);
                    }
                });
                ";
        }
        // line 114
        echo "
                ";
        // line 115
        if (("link" == twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 115, $this->source); })()), "type", [], "any", false, false, false, 115))) {
            // line 116
            echo "                var links = Focus.iframeDoc.getElementsByClassName('mf-link');
                if (links.length) {
                    links[0].addEventListener('click', function (event) {
                        Focus.convertVisitor();
                    });
                }
                ";
        } elseif (("form" == twig_get_attribute($this->env, $this->source,         // line 122
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 122, $this->source); })()), "type", [], "any", false, false, false, 122))) {
            // line 123
            echo "                var buttons = Focus.iframeDoc.getElementsByClassName('mauticform-button');
                if (buttons.length) {
                    buttons[0].addEventListener('click', function (event) {
                        Focus.convertVisitor();
                    });
                }
                ";
        }
        // line 130
        echo "            },
            setDefaultBarPosition: function (isTop) {
                if (isTop) {
                    Focus.iframe.style.marginTop = 0;
                }else {
                    Focus.iframe.style.marginBottom = 0;
                }
            },
            toggleBarCollapse: function (collapser, useCookie) {
                var svg = collapser.getElementsByTagName('svg');
                var g = svg[0].getElementsByTagName('g');
                var currentSize = svg[0].getAttribute('data-transform-size');
                var currentDirection = svg[0].getAttribute('data-transform-direction');
                var currentScale = svg[0].getAttribute('data-transform-scale');

                if (useCookie) {
                    if (Focus.cookies.hasItem('mf-bar-collapser-";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146), "js", null, true);
        echo "')) {
                        var newDirection = Focus.cookies.getItem('mf-bar-collapser-";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147), "js", null, true);
        echo "');
                        if (isNaN(newDirection)) {
                            var newDirection = currentDirection;
                        }
                    } else {
                        // Set cookie with current direction
                        var newDirection = currentDirection;
                    }
                } else {
                    var newDirection = (parseInt(currentDirection) * -1);
                    Focus.cookies.setItem('mf-bar-collapser-";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157), "js", null, true);
        echo "', newDirection);
                }

                setTimeout(function () {
                    g[0].setAttribute('transform', 'scale(' + currentScale + ') rotate(' + newDirection + ' ' + currentSize + ' ' + currentSize + ')');
                    svg[0].setAttribute('data-transform-direction', newDirection);
                }, 500);

                var isTop = Focus.hasClass(Focus.iframeFocus, 'mf-bar-top');
                if ((!isTop && newDirection == 90) || (isTop && newDirection == -90)) {
                    // Open it up
                    Focus.setDefaultBarPosition(isTop);
                    Focus.removeClass(collapser, 'mf-bar-collapsed');
                    Focus.enableIframeResizer();

                } else {
                    // Collapse it
                    var iframeHeight = Focus.iframe.style.height;

                    iframeHeight.replace('px', '');
                    var newMargin = (parseInt(iframeHeight) * -1) + 'px';
                    if (isTop) {
                        Focus.iframe.style.marginTop = newMargin;
                    } else {
                        Focus.iframe.style.marginBottom = newMargin;
                    }

                    Focus.addClass(collapser, 'mf-bar-collapsed');
                    Focus.disableIFrameResizer();
                }
            },

            // Register scroll events, etc
            registerFocusEvent: function () {

                window.addEventListener('resize', function () {
                    Focus.disableIFrameResizer();
                    Focus.enableIframeResizer();
                });

                if (Focus.debug)
                    console.log('registerFocusEvent()');

                ";
        // line 200
        if ((isset($context["useScrollEvent"]) || array_key_exists("useScrollEvent", $context) ? $context["useScrollEvent"] : (function () { throw new RuntimeError('Variable "useScrollEvent" does not exist.', 200, $this->source); })())) {
            // line 201
            echo "                if (Focus.debug)
                    console.log('scroll event registered');

                ";
            // line 204
            if ((isset($context["useTimeout"]) || array_key_exists("useTimeout", $context) ? $context["useTimeout"] : (function () { throw new RuntimeError('Variable "useTimeout" does not exist.', 204, $this->source); })())) {
                // line 205
                echo "                if (Focus.debug)
                    console.log('timeout event registered');

                setTimeout(function () {
                    window.addEventListener('scroll', Focus.engageVisitorAtScrollPosition);
                }, ";
                // line 210
                echo twig_escape_filter($this->env, (isset($context["timeout"]) || array_key_exists("timeout", $context) ? $context["timeout"] : (function () { throw new RuntimeError('Variable "timeout" does not exist.', 210, $this->source); })()), "js", null, true);
                echo ");

                ";
            } else {
                // line 213
                echo "
                window.addEventListener('scroll', Focus.engageVisitorAtScrollPosition);

                ";
            }
            // line 217
            echo "
                ";
        } elseif (        // line 218
(isset($context["useUnloadEvent"]) || array_key_exists("useUnloadEvent", $context) ? $context["useUnloadEvent"] : (function () { throw new RuntimeError('Variable "useUnloadEvent" does not exist.', 218, $this->source); })())) {
            // line 219
            echo "                if (Focus.debug)
                    console.log('show when visitor leaves');

                ";
            // line 222
            if ((isset($context["useTimeout"]) || array_key_exists("useTimeout", $context) ? $context["useTimeout"] : (function () { throw new RuntimeError('Variable "useTimeout" does not exist.', 222, $this->source); })())) {
                // line 223
                echo "                if (Focus.debug)
                    console.log('timeout event registered');

                setTimeout(function () {
                    document.documentElement.addEventListener('mouseleave', Focus.engageVisitor);
                }, ";
                // line 228
                echo twig_escape_filter($this->env, (isset($context["timeout"]) || array_key_exists("timeout", $context) ? $context["timeout"] : (function () { throw new RuntimeError('Variable "timeout" does not exist.', 228, $this->source); })()), "js", null, true);
                echo ");

                ";
            } else {
                // line 231
                echo "
                document.documentElement.addEventListener('mouseleave', Focus.engageVisitor);

                ";
            }
            // line 235
            echo "
                // Add a listener to every link
                ";
            // line 237
            if ((isset($context["linkActivation"]) || array_key_exists("linkActivation", $context) ? $context["linkActivation"] : (function () { throw new RuntimeError('Variable "linkActivation" does not exist.', 237, $this->source); })())) {
                // line 238
                echo "
                var elements = document.getElementsByTagName('a');

                for (var i = 0, len = elements.length; i < len; i++) {
                    var href = elements[i].getAttribute('href');
                    if (href && href.indexOf('#') != 0 && href.indexOf('javascript:') != 0) {
                        elements[i].onclick = function (event) {
                            if (typeof Focus.modalsDismissed[\"";
                // line 245
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 245, $this->source); })()), "id", [], "any", false, false, false, 245), "js", null, true);
                echo "\"] == 'undefined') {
                                if (Focus.engageVisitor()) {
                                    event.preventDefault();
                                }
                            }
                        }
                    }
                }
                ";
            }
            // line 254
            echo "
                ";
        } else {
            // line 256
            echo "                if (Focus.debug)
                    console.log('show immediately');

                ";
            // line 259
            if ((isset($context["useTimeout"]) || array_key_exists("useTimeout", $context) ? $context["useTimeout"] : (function () { throw new RuntimeError('Variable "useTimeout" does not exist.', 259, $this->source); })())) {
                // line 260
                echo "                if (Focus.debug)
                    console.log('timeout event registered');

                setTimeout(function () {
                    // Give a slight delay to allow browser to process style injection into header
                    Focus.engageVisitor();
                }, ";
                // line 266
                echo twig_escape_filter($this->env, (isset($context["timeout"]) || array_key_exists("timeout", $context) ? $context["timeout"] : (function () { throw new RuntimeError('Variable "timeout" does not exist.', 266, $this->source); })()), "js", null, true);
                echo ");

                ";
            } else {
                // line 269
                echo "
                // Give a slight delay to allow browser to process style injection into header
                Focus.engageVisitor();

                ";
            }
            // line 274
            echo "
                ";
        }
        // line 276
        echo "            },

            // Insert global style into page head
            insertStyleIntoHead: function () {
                if (!window.MauticFocusParentHeadStyleInserted) {
                    if (Focus.debug)
                        console.log('insertStyleIntoHead()');

                    var css = \"";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["parentCssContent"]) || array_key_exists("parentCssContent", $context) ? $context["parentCssContent"] : (function () { throw new RuntimeError('Variable "parentCssContent" does not exist.', 284, $this->source); })()), "js");
        echo "\",
                        head = document.head || document.getElementsByTagName('head')[0],
                        style = document.createElement('style');

                    head.appendChild(style);
                    style.type = 'text/css';
                    if (style.styleSheet) {
                        style.styleSheet.cssText = css;
                    } else {
                        style.appendChild(document.createTextNode(css));
                    }
                } else if (Focus.debug) {
                    console.log('Shared style already inserted into head');
                }
            },

            // Inserts styling into the iframe's head
            insertFocusStyleIntoIframeHead: function () {
                // Insert style into iframe header
                var frameDoc = Focus.iframe.contentDocument;
                var frameHead = frameDoc.getElementsByTagName('head').item(0);

                var css = \"";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["cssContent"]) || array_key_exists("cssContent", $context) ? $context["cssContent"] : (function () { throw new RuntimeError('Variable "cssContent" does not exist.', 306, $this->source); })()), "js");
        echo "\";
                var style = frameDoc.createElement('style');

                style.type = 'text/css';
                if (style.styleSheet) {
                    style.styleSheet.cssText = css;
                } else {
                    style.appendChild(frameDoc.createTextNode(css));
                }
                frameHead.appendChild(style);

                var metaTag = frameDoc.createElement('meta');
                metaTag.name = \"viewport\"
                metaTag.content = \"width=device-width,initial-scale=1,minimum-scale=1.0 maximum-scale=1.0\"
                frameHead.appendChild(metaTag);
            },

            // Generates the focus HTML
            engageVisitor: function () {
                var now = Math.floor(Date.now() / 1000);

                if (Focus.cookies.hasItem('mautic_focus_";
        // line 327
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 327, $this->source); })()), "id", [], "any", false, false, false, 327), "js", null, true);
        echo "')) {
                    if (Focus.debug)
                        console.log('Cookie exists thus checking frequency');

                    var lastEngaged = parseInt(Focus.cookies.getItem('mautic_focus_";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 331, $this->source); })()), "id", [], "any", false, false, false, 331), "js", null, true);
        echo "')),
                        frequency = '";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 332, $this->source); })()), "frequency", [], "any", false, false, false, 332), "js", null, true);
        echo "',
                        engage;

                    if (Focus.ignoreConverted && lastEngaged == -1) {
                        if (Focus.debug)
                            console.log('Visitor converted; abort');

                        return false;
                    }

                    switch (frequency) {
                        case 'once':
                            engage = false;
                            if (Focus.debug)
                                console.log('Engage once, abort');

                            break;
                        case 'everypage':
                            engage = true;
                            if (Focus.debug)
                                console.log('Engage on every page, continue');

                            break;
                        case 'q2min':
                            engage = (now - lastEngaged) >= 120;
                            if (Focus.debug) {
                                var debugMsg = 'Engage q2 minute, ';
                                if (engage) {
                                    debugMsg += 'continue';
                                } else {
                                    debugMsg += 'engage in ' + (120 - (now - lastEngaged)) + ' seconds';
                                }
                                console.log(debugMsg);
                            }

                            break;
                        case 'q15min':
                            engage = (now - lastEngaged) >= 900;
                            if (Focus.debug) {
                                var debugMsg = 'Engage q15 minute, ';
                                if (engage) {
                                    debugMsg += 'continue';
                                } else {
                                    debugMsg += 'engage in ' + (120 - (now - lastEngaged)) + ' seconds';
                                }
                                console.log(debugMsg);
                            }

                            break;
                        case 'hourly':
                            engage = (now - lastEngaged) >= 3600;
                            if (Focus.debug) {
                                var debugMsg = 'Engage hourly, ';
                                if (engage) {
                                    debugMsg += 'continue';
                                } else {
                                    debugMsg += 'engage in ' + (120 - (now - lastEngaged)) + ' seconds';
                                }
                                console.log(debugMsg);
                            }

                            break;
                        case 'daily':
                            engage = (now - lastEngaged) >= 86400;
                            if (Focus.debug) {
                                var debugMsg = 'Engage daily, ';
                                if (engage) {
                                    debugMsg += 'continue';
                                } else {
                                    debugMsg += 'engage in ' + (120 - (now - lastEngaged)) + ' seconds';
                                }
                                console.log(debugMsg);
                            }

                            break;
                    }

                    if (!engage) {

                        return false;
                    }
                }

                if (Focus.ignoreClosed && Focus.getCloseCount() > 0) {
                    if (Focus.debug)
                        console.log('Visitor has closed the focus; abort');

                    return false;
                }

                if (Focus.debug)
                    console.log('engageVisitor()');

                // Inject iframe
                Focus.createIframe();

                // Inject content into iframe
                Focus.iframeDoc.open();
                Focus.iframeDoc.write(\"{focus_content}\");
                Focus.iframeDoc.close();

                var animate = ";
        // line 433
        if ((isset($context["animate"]) || array_key_exists("animate", $context) ? $context["animate"] : (function () { throw new RuntimeError('Variable "animate" does not exist.', 433, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";

                Focus.iframe.onload = function() {
                    if (Focus.debug)
                        console.log('iframe loaded for '+Focus.iframe.getAttribute('src'));

                    // Resize iframe
                    if (Focus.enableIframeResizer()) {
                        // Give iframe chance to resize
                        setTimeout(function () {
                            if (animate) {
                                Focus.addClass(Focus.iframe, \"mf-animate\");
                            }
                            Focus.addClass(Focus.iframe, \"mf-loaded\");
                        }, 35);
                    } else {
                        if (animate) {
                            Focus.addClass(Focus.iframe, \"mf-animate\");
                        }
                        Focus.addClass(Focus.iframe, \"mf-loaded\");
                    }
                }

                // Set body margin to 0
                Focus.iframeDoc.getElementsByTagName('body')[0].style.margin = 0;
                Focus.iframeDoc.getElementsByTagName('body')[0].style.overflowX = 'hidden';

                // Find elements that should be moved to parent
                var move = Focus.iframeDoc.getElementsByClassName('mf-move-to-parent');
                for (var i = 0; i < move.length; i++) {
                    var bodyFirstChild = document.body.firstChild;
                    Focus.addClass(move[i], 'mf-moved-";
        // line 464
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 464, $this->source); })()), "id", [], "any", false, false, false, 464), "js", null, true);
        echo "');
                    bodyFirstChild.parentNode.insertBefore(move[i], Focus.iframe);
                }

                // Find elements that should be copied to parent
                var copy = Focus.iframeDoc.getElementsByClassName('mf-copy-to-parent');
                for (var i = 0; i < copy.length; i++) {
                    var bodyFirstChild = document.body.firstChild;
                    var clone = copy[i].cloneNode(true);
                    Focus.addClass(clone, 'mf-moved-";
        // line 473
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 473, $this->source); })()), "id", [], "any", false, false, false, 473), "js", null, true);
        echo "');
                    bodyFirstChild.parentNode.insertBefore(clone, Focus.iframe);
                }

                // Get the main focus element
                var focus = Focus.iframeDoc.getElementsByClassName('mautic-focus');
                Focus.iframeFocus = focus[0];

                // Insert style into iframe head
                Focus.insertFocusStyleIntoIframeHead();

                // Register events
                Focus.registerClickEvents();

                ";
        // line 487
        if (("leave" == twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 487, $this->source); })()), "when", [], "any", false, false, false, 487))) {
            // line 488
            echo "                // Ensure user can leave
                document.documentElement.removeEventListener('mouseleave', Focus.engageVisitor);
                ";
        }
        // line 491
        echo "
                // Add cookie of last engagement
                if (Focus.debug)
                    console.log('mautic_focus_";
        // line 494
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 494, $this->source); })()), "id", [], "any", false, false, false, 494), "js", null, true);
        echo " cookie set for ' + now);

                Focus.cookies.removeItem('mautic_focus_";
        // line 496
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 496, $this->source); })()), "id", [], "any", false, false, false, 496), "js", null, true);
        echo "');
                Focus.cookies.setItem('mautic_focus_";
        // line 497
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 497, $this->source); })()), "id", [], "any", false, false, false, 497), "js", null, true);
        echo "', now, Infinity, '/');

                ";
        // line 499
        if (("bar" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 499, $this->source); })()))) {
            // line 500
            echo "                var collapser = document.getElementsByClassName('mf-bar-collapser-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 500, $this->source); })()), "id", [], "any", false, false, false, 500), "js", null, true);
            echo "');

                if (animate) {
                    // Give iframe chance to resize
                    setTimeout(function () {
                        Focus.toggleBarCollapse(collapser[0], true);
                    }, 35);
                } else {
                    Focus.toggleBarCollapse(collapser[0], true);
                }
                ";
        }
        // line 511
        echo "
                return true;
            },

            // Enable iframe resizer
            enableIframeResizer: function () {
                if (typeof Focus.iframeResizerEnabled !== 'undefined') {
                    return true;
                }

                ";
        // line 521
        if (twig_in_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 521, $this->source); })()), ["modal", "notification", "bar"])) {
            // line 522
            echo "                Focus.iframeHeight = 0;
                Focus.iframeWidth = 0;
                Focus.iframeResizeInterval = setInterval(function () {
                    if (Focus.iframeHeight !== Focus.iframe.style.height) {
                        var useHeight = ((window.innerHeight < Focus.iframeFocus.offsetHeight) ?
                            window.innerHeight : Focus.iframeFocus.offsetHeight);

                        useHeight += 10;
                        useHeight = useHeight + 'px';

                        if (Focus.debug) {
                            console.log('window inner height = ' + window.innerHeight);
                            console.log('iframe offset height = ' + Focus.iframeFocus.offsetHeight);
                            console.log('iframe height set to ' + useHeight)
                        }

                        Focus.iframe.style.height = useHeight;
                        Focus.iframeHeight = useHeight;
                    }

                    ";
            // line 542
            if (twig_in_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 542, $this->source); })()), ["modal", "notification"])) {
                // line 543
                echo "                    if (Focus.iframeWidth !== Focus.iframe.style.width) {
                        if (Focus.debug) {
                            console.log('window inner width = ' + window.innerWidth);
                            console.log('iframe offset width = ' +  Focus.iframeFocus.offsetWidth);
                        }

                        if (window.innerWidth <  Focus.iframeFocus.offsetWidth) {
                            // Responsive iframe
                            Focus.addClass(Focus.iframeFocus, 'mf-responsive');
                            Focus.addClass(Focus.iframe, 'mf-responsive');
                            Focus.iframe.style.width = window.innerWidth + 'px';
                            Focus.iframe.width = window.innerWidth;
                            if (Focus.debug)
                                console.log('iframe set to responsive width: ');

                        } else {
                            Focus.iframe.style.width =  Focus.iframeFocus.offsetWidth + 'px';
                            Focus.iframe.width =  Focus.iframeFocus.offsetWidth + 'px';
                            Focus.removeClass(Focus.iframeFocus, 'mf-responsive');
                            Focus.removeClass(Focus.iframe, 'mf-responsive');

                            if (Focus.debug)
                                console.log('iframe not a responsive width');
                        }

                        Focus.iframeWidth = Focus.iframe.style.width;
                    }
                    ";
            }
            // line 571
            echo "                }, 35);

                Focus.iframeResizerEnabled = true;

                return true;
                ";
        } else {
            // line 577
            echo "
                return false;
                ";
        }
        // line 580
        echo "            },

            // Disable iframe resizer
            disableIFrameResizer: function () {
                if (typeof Focus.iframeResizerEnabled !== 'undefined') {
                    delete(Focus.iframeResizerEnabled);
                }

                ";
        // line 588
        if (twig_in_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 588, $this->source); })()), ["modal", "notification", "bar"])) {
            // line 589
            echo "                clearInterval(Focus.iframeResizeInterval);
                ";
        }
        // line 591
        echo "            },

            // Create iframe to load into body
            createIframe: function () {
                if (Focus.debug)
                    console.log('createIframe()');

                Focus.iframe = document.createElement('iframe');
                Focus.iframe.style.border = 0;
                Focus.iframe.style.width = \"100%\";
                Focus.iframe.style.height = \"100%\";
                Focus.iframe.src = \"about:blank\";
                Focus.iframe.scrolling = \"auto\";
                Focus.iframe.className = \"";
        // line 604
        echo (isset($context["iframeClass"]) || array_key_exists("iframeClass", $context) ? $context["iframeClass"] : (function () { throw new RuntimeError('Variable "iframeClass" does not exist.', 604, $this->source); })());
        echo "\";

                var bodyFirstChild = document.body.firstChild;
                bodyFirstChild.parentNode.insertBefore(Focus.iframe, bodyFirstChild);

                Focus.iframeDoc = Focus.iframe.contentWindow.document;
            },

            // Execute event at current position
            engageVisitorAtScrollPosition: function (event) {
                var visualHeight = \"innerHeight\" in window
                    ? window.innerHeight
                    : document.documentElement.offsetHeight;

                var scrollPos = window.pageYOffset,
                    atPos = 0;

                ";
        // line 621
        if (("scroll_slight" === twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 621, $this->source); })()), "when", [], "any", false, false, false, 621))) {
            // line 622
            echo "                atPos = 10;
                ";
        } elseif (("scroll_middle" === twig_get_attribute($this->env, $this->source,         // line 623
(isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 623, $this->source); })()), "when", [], "any", false, false, false, 623))) {
            // line 624
            echo "                scrollPos += (visualHeight / 2);
                atPos = (document.body.scrollHeight / 2);
                ";
        } elseif (("scroll_bottom" === twig_get_attribute($this->env, $this->source,         // line 626
(isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 626, $this->source); })()), "when", [], "any", false, false, false, 626))) {
            // line 627
            echo "                scrollPos += visualHeight;
                atPos = document.body.scrollHeight;
                ";
        }
        // line 630
        echo "
                if (Focus.debug)
                    console.log('scrolling: ' + scrollPos + ' >= ' + atPos);

                if (scrollPos >= atPos) {
                    window.removeEventListener('scroll', Focus.engageVisitorAtScrollPosition);
                    Focus.engageVisitor();
                }
            },

            // Create cookie noting visitor has been converted if applicable
            convertVisitor: function () {
                if (Focus.ignoreConverted) {
                    if (Focus.debug)
                        console.log('Visitor converted');

                    Focus.cookies.setItem('mautic_focus_";
        // line 646
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 646, $this->source); })()), "id", [], "any", false, false, false, 646), "js", null, true);
        echo "', -1, Infinity, '/');
                } else if (Focus.debug) {
                    console.log('Visitor converted but ignoreConverted not enabled');
                }
            },

            // Element has class
            hasClass: function (element, hasClass) {
                return ( (\" \" + element.className + \" \").replace(/[\\n\\t]/g, \" \").indexOf(\" \" + hasClass + \" \") > -1 );
            },

            // Add class to element
            addClass: function (element, addClass) {
                if (!Focus.hasClass(element, addClass)) {
                    element.className += \" \" + addClass;
                }
            },

            // Remove class from element
            removeClass: function (element, removeClass) {
                element.className = element.className.replace(new RegExp('\\\\b' + removeClass + '\\\\b'), '');
            },

            getCloseCount() {
                if (Focus.cookies.hasItem('mautic_focus_";
        // line 670
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 670, $this->source); })()), "id", [], "any", false, false, false, 670), "js", null, true);
        echo "_closed')) {
                    return parseInt(Focus.cookies.getItem('mautic_focus_";
        // line 671
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 671, $this->source); })()), "id", [], "any", false, false, false, 671), "js", null, true);
        echo "_closed'))
                } else {
                    return 0;
                }
            },

            incrementCloseCount() {
                var closeCount = Focus.getCloseCount();
                Focus.cookies.setItem('mautic_focus_";
        // line 679
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 679, $this->source); })()), "id", [], "any", false, false, false, 679), "js", null, true);
        echo "_closed', ++closeCount);
            },

            // Cookie handling
            cookies: {
                /**
                 * :: cookies.js ::
                 * https://developer.mozilla.org/en-US/docs/Web/API/document.cookie
                 * http://www.gnu.org/licenses/gpl-3.0-standalone.html
                 */
                getItem: function (sKey) {
                    if (!sKey) {
                        return null;
                    }
                    return decodeURIComponent(document.cookie.replace(new RegExp(\"(?:(?:^|.*;)\\\\s*\" + encodeURIComponent(sKey).replace(/[\\-\\.\\+\\*]/g, \"\\\\\$&\") + \"\\\\s*\\\\=\\\\s*([^;]*).*\$)|^.*\$\"), \"\$1\")) || null;
                },
                setItem: function (sKey, sValue, vEnd, sPath, sDomain) {
                    if (!sKey || /^(?:expires|max\\-age|path|domain|secure)\$/i.test(sKey)) {
                        return false;
                    }

                    this.removeItem(sKey);

                    var sExpires = \"\";
                    if (vEnd) {
                        switch (vEnd.constructor) {
                            case Number:
                                sExpires = vEnd === Infinity ? \"; expires=Fri, 31 Dec 9999 23:59:59 GMT\" : \"; max-age=\" + vEnd;
                                break;
                            case String:
                                sExpires = \"; expires=\" + vEnd;
                                break;
                            case Date:
                                sExpires = \"; expires=\" + vEnd.toUTCString();
                                break;
                        }
                    }
                    document.cookie = encodeURIComponent(sKey) + \"=\" + encodeURIComponent(sValue) + sExpires + (sDomain ? \"; domain=\" + sDomain : \"\") + (sPath ? \"; path=\" + sPath : \"\") + \"; secure\";
                    return true;
                },
                removeItem: function (sKey, sPath, sDomain) {
                    if (!this.hasItem(sKey)) {
                        return false;
                    }
                    document.cookie = encodeURIComponent(sKey) + \"=; expires=Thu, 01 Jan 1970 00:00:00 GMT\" + (sDomain ? \"; domain=\" + sDomain : \"\") + (sPath ? \"; path=\" + sPath : \"\");
                    return true;
                },
                hasItem: function (sKey) {
                    if (!sKey) {
                        return false;
                    }
                    return (new RegExp(\"(?:^|;\\\\s*)\" + encodeURIComponent(sKey).replace(/[\\-\\.\\+\\*]/g, \"\\\\\$&\") + \"\\\\s*\\\\=\")).test(document.cookie);
                },
                keys: function () {
                    var aKeys = document.cookie.replace(/((?:^|\\s*;)[^\\=]+)(?=;|\$)|^\\s*|\\s*(?:\\=[^;]*)?(?:\\1|\$)/g, \"\").split(/\\s*(?:\\=[^;]*)?;\\s*/);
                    for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) {
                        aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]);
                    }
                    return aKeys;
                }
            }
        };

        return Focus;
    }

    // Initialize
    MauticFocus";
        // line 746
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 746, $this->source); })()), "id", [], "any", false, false, false, 746), "js", null, true);
        echo "().initialize();
})(window);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/generate.js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1004 => 746,  934 => 679,  923 => 671,  919 => 670,  892 => 646,  874 => 630,  869 => 627,  867 => 626,  863 => 624,  861 => 623,  858 => 622,  856 => 621,  836 => 604,  821 => 591,  817 => 589,  815 => 588,  805 => 580,  800 => 577,  792 => 571,  762 => 543,  760 => 542,  738 => 522,  736 => 521,  724 => 511,  709 => 500,  707 => 499,  702 => 497,  698 => 496,  693 => 494,  688 => 491,  683 => 488,  681 => 487,  664 => 473,  652 => 464,  614 => 433,  510 => 332,  506 => 331,  499 => 327,  475 => 306,  450 => 284,  440 => 276,  436 => 274,  429 => 269,  423 => 266,  415 => 260,  413 => 259,  408 => 256,  404 => 254,  392 => 245,  383 => 238,  381 => 237,  377 => 235,  371 => 231,  365 => 228,  358 => 223,  356 => 222,  351 => 219,  349 => 218,  346 => 217,  340 => 213,  334 => 210,  327 => 205,  325 => 204,  320 => 201,  318 => 200,  272 => 157,  259 => 147,  255 => 146,  237 => 130,  228 => 123,  226 => 122,  218 => 116,  216 => 115,  213 => 114,  204 => 108,  194 => 101,  189 => 99,  183 => 96,  177 => 93,  166 => 85,  160 => 83,  149 => 75,  144 => 72,  142 => 71,  134 => 66,  116 => 55,  108 => 54,  103 => 52,  98 => 50,  91 => 45,  88 => 43,  85 => 41,  83 => 40,  80 => 38,  78 => 37,  76 => 36,  74 => 35,  72 => 32,  71 => 31,  69 => 28,  68 => 27,  67 => 26,  64 => 23,  62 => 22,  59 => 19,  57 => 18,  55 => 17,  53 => 16,  51 => 14,  49 => 13,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/generate.js.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\generate.js.twig");
    }
}
