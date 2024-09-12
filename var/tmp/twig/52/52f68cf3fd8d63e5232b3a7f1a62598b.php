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

/* @MauticCore/Helper/pagination.html.twig */
class __TwigTemplate_6b0bb96c6a0ebb5988460c7ec6410dae extends Template
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
        $context["target"] = ((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 1, $this->source); })()), ".page-list")) : (".page-list"));
        // line 2
        $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (_twig_default_filter((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()), "list")) : ("list"));
        // line 3
        echo "
";
        // line 4
        if (( !array_key_exists("fixedPages", $context) || twig_test_empty((isset($context["fixedPages"]) || array_key_exists("fixedPages", $context) ? $context["fixedPages"] : (function () { throw new RuntimeError('Variable "fixedPages" does not exist.', 4, $this->source); })())))) {
            // line 5
            echo "    ";
            $context["limit"] = (( !array_key_exists("limit", $context)) ? (30) : ($this->env->getFilter('int')->getCallable()((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 5, $this->source); })()))));
            // line 6
            echo "    ";
            $context["totalPages"] = (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 6, $this->source); })())) ? (twig_round(((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 6, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 6, $this->source); })())), 0, "ceil")) : (1));
            // line 7
            echo "    ";
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 7, $this->source); })()) == 0)) {
                // line 8
                echo "      ";
                $context["totalPages"] = 1;
                // line 9
                echo "    ";
            }
        } else {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["limit"] = 1;
            // line 13
            echo "    ";
            $context["totalPages"] = (isset($context["fixedPages"]) || array_key_exists("fixedPages", $context) ? $context["fixedPages"] : (function () { throw new RuntimeError('Variable "fixedPages" does not exist.', 13, $this->source); })());
        }
        // line 15
        echo "
";
        // line 16
        $context["range"] = ((array_key_exists("range", $context)) ? ((isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 16, $this->source); })())) : (5));
        // line 17
        $context["page"] = ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()) <= 0)) ? (1) : ($this->env->getFilter('int')->getCallable()((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()))));
        // line 18
        $context["linkType"] = (((array_key_exists("inModal", $context) &&  !twig_test_empty((isset($context["inModal"]) || array_key_exists("inModal", $context) ? $context["inModal"] : (function () { throw new RuntimeError('Variable "inModal" does not exist.', 18, $this->source); })())))) ? ("ajaxmodal") : ("ajax"));
        // line 19
        $context["pageClass"] = ((array_key_exists("paginationClass", $context)) ? ((" pagination-" . (isset($context["paginationClass"]) || array_key_exists("paginationClass", $context) ? $context["paginationClass"] : (function () { throw new RuntimeError('Variable "paginationClass" does not exist.', 19, $this->source); })()))) : (""));
        // line 20
        $context["menuLink"] = (((array_key_exists("menuLinkId", $context) &&  !twig_test_empty((isset($context["menuLinkId"]) || array_key_exists("menuLinkId", $context) ? $context["menuLinkId"] : (function () { throw new RuntimeError('Variable "menuLinkId" does not exist.', 20, $this->source); })())))) ? (((" data-menu-link=\"" . (isset($context["menuLinkId"]) || array_key_exists("menuLinkId", $context) ? $context["menuLinkId"] : (function () { throw new RuntimeError('Variable "menuLinkId" does not exist.', 20, $this->source); })())) . "\"")) : (""));
        // line 21
        $context["paginationWrapper"] = ((array_key_exists("paginationWrapper", $context)) ? ((isset($context["paginationWrapper"]) || array_key_exists("paginationWrapper", $context) ? $context["paginationWrapper"] : (function () { throw new RuntimeError('Variable "paginationWrapper" does not exist.', 21, $this->source); })())) : ("pagination-wrapper ml-md mr-md"));
        // line 22
        $context["queryString"] = (("?tmpl=" . (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 22, $this->source); })())) . ((array_key_exists("queryString", $context)) ? ((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 22, $this->source); })())) : ("")));
        // line 23
        $context["formExit"] = (((array_key_exists("ignoreFormExit", $context) &&  !twig_test_empty((isset($context["ignoreFormExit"]) || array_key_exists("ignoreFormExit", $context) ? $context["ignoreFormExit"] : (function () { throw new RuntimeError('Variable "ignoreFormExit" does not exist.', 23, $this->source); })())))) ? (" data-ignore-formexit=\"true\"") : (""));
        // line 24
        $context["responsiveViewports"] = ["desktop", "mobile"];
        // line 25
        $context["limitOptions"] = [5 => "5", 10 => "10", 15 => "15", 20 => "20", 25 => "25", 30 => "30", 50 => "50", 100 => "100"];
        // line 35
        $context["jsCallback"] = ((array_key_exists("jsCallback", $context)) ? ((isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 35, $this->source); })())) : (""));
        // line 36
        $context["jsArguments"] = ((array_key_exists("jsArguments", $context)) ? ($this->env->getFilter('array')->getCallable()((isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 36, $this->source); })()))) : ([]));
        // line 37
        $context["baseUrl"] = ((array_key_exists("baseUrl", $context)) ? ((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 37, $this->source); })())) : (null));
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsiveViewports"]) || array_key_exists("responsiveViewports", $context) ? $context["responsiveViewports"] : (function () { throw new RuntimeError('Variable "responsiveViewports" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["viewport"]) {
            // line 40
            echo "    ";
            if (($context["viewport"] == "mobile")) {
                // line 41
                echo "        ";
                $context["paginationClass"] = "sm";
                // line 42
                echo "        ";
                $context["pageClass"] = "pagination-sm";
                // line 43
                echo "        ";
                $context["responsiveClass"] = "visible-xs hidden-sm hidden-md hidden-lg";
                // line 44
                echo "        ";
                $context["paginationWrapper"] = "pagination-wrapper pull-left nm";
                // line 45
                echo "    ";
            } else {
                // line 46
                echo "        ";
                $context["responsiveClass"] = "hidden-xs visible-sm visible-md visible-lg";
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    <div class=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["responsiveClass"]) || array_key_exists("responsiveClass", $context) ? $context["responsiveClass"] : (function () { throw new RuntimeError('Variable "responsiveClass" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 50
            if (( !array_key_exists("fixedLimit", $context) || twig_test_empty((isset($context["fixedLimit"]) || array_key_exists("fixedLimit", $context) ? $context["fixedLimit"] : (function () { throw new RuntimeError('Variable "fixedLimit" does not exist.', 50, $this->source); })())))) {
                // line 51
                echo "            <div class=\"pull-right\">
                <select
                    autocomplete=\"false\"
                    class=\"form-control not-chosen pagination-limit";
                // line 54
                if ((array_key_exists("paginationClass", $context) &&  !twig_test_empty((isset($context["paginationClass"]) || array_key_exists("paginationClass", $context) ? $context["paginationClass"] : (function () { throw new RuntimeError('Variable "paginationClass" does not exist.', 54, $this->source); })())))) {
                    echo " input-";
                    echo twig_escape_filter($this->env, (isset($context["paginationClass"]) || array_key_exists("paginationClass", $context) ? $context["paginationClass"] : (function () { throw new RuntimeError('Variable "paginationClass" does not exist.', 54, $this->source); })()), "html", null, true);
                }
                echo "\"
                    onchange=\"Mautic.limitTableData('";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "',this.value,'";
                echo twig_escape_filter($this->env, (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "'";
                if ((array_key_exists("baseUrl", $context) &&  !twig_test_empty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 55, $this->source); })())))) {
                    echo ", '";
                    echo twig_escape_filter($this->env, ((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 55, $this->source); })()) . (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 55, $this->source); })())), "html", null, true);
                    echo "'";
                }
                echo ");\"
                >
                    ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["limitOptions"]) || array_key_exists("limitOptions", $context) ? $context["limitOptions"] : (function () { throw new RuntimeError('Variable "limitOptions" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                    // line 58
                    echo "                        <option";
                    if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()) == $context["value"])) {
                        echo " selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\">
                            ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.pagination." . $context["label"])), "html", null, true);
                    echo "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                </select>
            </div>
        ";
            }
            // line 65
            echo "
        <div class=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["paginationWrapper"]) || array_key_exists("paginationWrapper", $context) ? $context["paginationWrapper"] : (function () { throw new RuntimeError('Variable "paginationWrapper" does not exist.', 66, $this->source); })()), "html", null, true);
            echo " text-center\">
            <ul class=\"pagination np nm ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["pageClass"]) || array_key_exists("pageClass", $context) ? $context["pageClass"] : (function () { throw new RuntimeError('Variable "pageClass" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 68
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction(1, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 68, $this->source); })()) > 1), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 68, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 68, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 68, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 68, $this->source); })()));
            // line 69
            echo "                ";
            $context["data"] = ((twig_in_filter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 69, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 69, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 69, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 69, $this->source); })()))));
            // line 70
            echo "                <li";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 70, $this->source); })()) <= 1)) {
                echo " class=\"disabled\"";
            }
            echo ">
                    <a ";
            // line 71
            echo (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 71, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 71, $this->source); })()));
            echo ">
                        <i class=\"fa fa-angle-double-left\"></i>
                    </a>
                </li>

                ";
            // line 76
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()) - 1), (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()) - 1) >= 1), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 76, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 76, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 76, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 76, $this->source); })()));
            // line 77
            echo "                ";
            $context["data"] = ((twig_in_filter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 77, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 77, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 77, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 77, $this->source); })()))));
            // line 78
            echo "                <li";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 78, $this->source); })()) - 1) <= 0)) {
                echo " class=\"disabled\"";
            }
            echo ">
                    <a ";
            // line 79
            echo (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 79, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 79, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 79, $this->source); })()));
            echo ">
                        <i class=\"fa fa-angle-left\"></i>
                    </a>
                </li>

                ";
            // line 84
            $context["startPage"] = (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()) - twig_round(((isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 84, $this->source); })()) / 2), 0, "ceil")) + 1);
            // line 85
            echo "                ";
            $context["startPage"] = ((((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 85, $this->source); })()) <= 0)) ? (1) : ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 85, $this->source); })())));
            // line 86
            echo "                ";
            $context["lastPage"] = (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 86, $this->source); })()) + (isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 86, $this->source); })())) - 1);
            // line 87
            echo "                ";
            $context["lastPage"] = ((((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 87, $this->source); })()) > (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 87, $this->source); })()))) ? ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 87, $this->source); })())) : ((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 87, $this->source); })())));
            // line 88
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 88, $this->source); })()), (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 88, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "                    ";
                $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction($context["i"], ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 89, $this->source); })()) != $this->env->getFilter('int')->getCallable()($context["i"])), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 89, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 89, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 89, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 89, $this->source); })()));
                // line 90
                echo "                    ";
                $context["data"] = ((twig_in_filter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 90, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 90, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 90, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 90, $this->source); })()))));
                // line 91
                echo "
                    <li";
                // line 92
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()) == $this->env->getFilter('int')->getCallable()($context["i"]))) {
                    echo " class=\"active\"";
                }
                echo ">
                        <a ";
                // line 93
                echo (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 93, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 93, $this->source); })()));
                echo ">
                            <span>";
                // line 94
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
                ";
            // line 99
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()) + 1), (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()) + 1) <= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 99, $this->source); })())), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 99, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 99, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 99, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 99, $this->source); })()));
            // line 100
            echo "                ";
            $context["data"] = ((twig_in_filter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 100, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 100, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 100, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 100, $this->source); })()))));
            // line 101
            echo "                <li";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 101, $this->source); })()) + 1) > (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 101, $this->source); })()))) {
                echo " class=\"disabled\"";
            }
            echo ">
                    <a ";
            // line 102
            echo (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 102, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 102, $this->source); })()));
            echo ">
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>

                ";
            // line 107
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 107, $this->source); })()), ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 107, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 107, $this->source); })())), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 107, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 107, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 107, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 107, $this->source); })()));
            // line 108
            echo "                ";
            $context["data"] = ((twig_in_filter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 108, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 108, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 108, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 108, $this->source); })()))));
            // line 109
            echo "
                <li";
            // line 110
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 110, $this->source); })()))) {
                echo " class=\"disabled\"";
            }
            echo ">
                    <a ";
            // line 111
            echo (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 111, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 111, $this->source); })()));
            echo ">
                        <i class=\"fa fa-angle-double-right\"></i>
                    </a>
                </li>
            </ul>
            <div class=\"clearfix\"></div>
            <small class=\"text-muted\">
                ";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.pagination.items", ["%count%" => (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 118, $this->source); })())], "messages");
            echo ",
                ";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.pagination.pages", ["%count%" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 119, $this->source); })())], "messages");
            // line 120
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.pagination.total", [], "messages");
            // line 121
            echo "            </small>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/pagination.html.twig";
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
        return array (  346 => 121,  343 => 120,  341 => 119,  337 => 118,  327 => 111,  321 => 110,  318 => 109,  315 => 108,  313 => 107,  305 => 102,  298 => 101,  295 => 100,  293 => 99,  290 => 98,  280 => 94,  276 => 93,  270 => 92,  267 => 91,  264 => 90,  261 => 89,  256 => 88,  253 => 87,  250 => 86,  247 => 85,  245 => 84,  237 => 79,  230 => 78,  227 => 77,  225 => 76,  217 => 71,  210 => 70,  207 => 69,  205 => 68,  201 => 67,  197 => 66,  194 => 65,  189 => 62,  180 => 59,  171 => 58,  167 => 57,  152 => 55,  145 => 54,  140 => 51,  138 => 50,  134 => 49,  131 => 48,  128 => 47,  125 => 46,  122 => 45,  119 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  103 => 39,  100 => 38,  98 => 37,  96 => 36,  94 => 35,  92 => 25,  90 => 24,  88 => 23,  86 => 22,  84 => 21,  82 => 20,  80 => 19,  78 => 18,  76 => 17,  74 => 16,  71 => 15,  67 => 13,  64 => 12,  62 => 11,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/pagination.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\pagination.html.twig");
    }
}
