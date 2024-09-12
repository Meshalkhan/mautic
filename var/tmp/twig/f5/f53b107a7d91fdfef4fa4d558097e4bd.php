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

/* @MauticUser/User/recent_activity.html.twig */
class __TwigTemplate_a847dd8dc43b8c962036fdb6548e464b extends Template
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
        echo "<!-- Recent activity block(audit_log table) -->
<div class=\"col-md-3 height-auto\">
\t";
        // line 3
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.top", $context);
        echo "
\t<div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
\t\t<div class=\"panel-heading\">
\t\t\t<div class=\"panel-title\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.recent.activity", [], "messages");
        echo "</div>
\t\t</div>
\t\t<div class=\"panel-body pt-xs\">
\t\t\t";
        // line 9
        if ((array_key_exists("logs", $context) &&  !twig_test_empty((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "\t\t\t\t<ul class=\"media-list media-list-feed\">
\t\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 12
                echo "
\t\t\t\t\t\t";
                // line 13
                if (((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 13) == "create") && (twig_get_attribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 13) == "user"))) {
                    // line 14
                    echo "
\t\t\t\t\t\t\t";
                    // line 15
                    $context["userPath"] = [];
                    // line 16
                    echo "\t\t\t\t\t\t\t";
                    $context["user_id"] = "1";
                    // line 17
                    echo "\t\t\t\t\t\t\t";
                    $context["usersEmail"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 17), "email", [], "array", false, false, false, 17), 1, [], "array", false, false, false, 17);
                    // line 18
                    echo "\t\t\t\t\t\t\t";
                    $context["emailIsMatch"] = false;
                    // line 19
                    echo "\t\t\t\t\t\t\t";
                    $context["usernameIsMatch"] = false;
                    // line 20
                    echo "
\t\t\t\t\t\t\t";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t";
                        if (((array_key_exists("usersEmail", $context) &&  !twig_test_empty((isset($context["usersEmail"]) || array_key_exists("usersEmail", $context) ? $context["usersEmail"] : (function () { throw new RuntimeError('Variable "usersEmail" does not exist.', 22, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 22) == (isset($context["usersEmail"]) || array_key_exists("usersEmail", $context) ? $context["usersEmail"] : (function () { throw new RuntimeError('Variable "usersEmail" does not exist.', 22, $this->source); })())))) {
                            // line 23
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["emailIsMatch"] = true;
                            // line 24
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["user_id"] = twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24);
                            // line 25
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usernameIsMatch"] = true;
                            // line 27
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["user_id"] = twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27);
                            // line 28
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, true, false, 30), "username", [], "array", false, true, false, 30), 1, [], "array", true, true, false, 30) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 30), "username", [], "array", false, false, false, 30), 1, [], "array", false, false, false, 30)))) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t";
                        if (((isset($context["emailIsMatch"]) || array_key_exists("emailIsMatch", $context) ? $context["emailIsMatch"] : (function () { throw new RuntimeError('Variable "emailIsMatch" does not exist.', 31, $this->source); })()) == true)) {
                            // line 32
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["userPath"] = twig_array_merge((isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 32, $this->source); })()), [(isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 32, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 32), "username", [], "array", false, false, false, 32), 1, [], "array", false, false, false, 32)]);
                            // line 33
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 34
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 35
                    echo "
\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 36
$context["log"], "action", [], "any", false, false, false, 36) == "create") && (twig_get_attribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 36) == "role"))) {
                    // line 37
                    echo "
\t\t\t\t\t\t\t";
                    // line 38
                    $context["role_id"] = "1";
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    $context["roleName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 39), "name", [], "array", false, false, false, 39), 1, [], "array", false, false, false, 39);
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                    $context["roleIsMatch"] = false;
                    // line 41
                    echo "
\t\t\t\t\t\t\t";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 42, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 43) == (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 43, $this->source); })()))) {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["roleIsMatch"] = true;
                            // line 45
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["role_id"] = twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 45);
                            // line 46
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["roleIsMatch"]) || array_key_exists("roleIsMatch", $context) ? $context["roleIsMatch"] : (function () { throw new RuntimeError('Variable "roleIsMatch" does not exist.', 48, $this->source); })()) == true)) {
                        // line 49
                        echo "\t\t\t\t\t\t\t\t";
                        $context["rolePath"] = twig_array_merge([], [(isset($context["role_id"]) || array_key_exists("role_id", $context) ? $context["role_id"] : (function () { throw new RuntimeError('Variable "role_id" does not exist.', 49, $this->source); })()), (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 49, $this->source); })())]);
                        // line 50
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "
\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 52
$context["log"], "action", [], "any", false, false, false, 52) == "update") && (twig_get_attribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 52) == "user"))) {
                    // line 53
                    echo "
\t\t\t\t\t\t\t";
                    // line 54
                    $context["userPath"] = [];
                    // line 55
                    echo "\t\t\t\t\t\t\t";
                    list($context["usersUsername"], $context["usersEmail"], $context["usersFirstName"], $context["usersLastName"], $context["usersRole"], $context["usersPosition"], $context["usersSignature"]) =                     ["", "", "", "", "", "", ""];
                    // line 56
                    echo "\t\t\t\t\t\t\t";
                    $context["user_id"] = "1";
                    // line 57
                    echo "\t\t\t\t\t\t\t";
                    $context["user_username"] = "admin";
                    // line 58
                    echo "\t\t\t\t\t\t\t";
                    $context["isMatch"] = false;
                    // line 59
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        if (($context["detail"] == "username")) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersUsername"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 61);
                            // line 62
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 63
$context["detail"] == "email")) {
                            // line 64
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersEmail"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 64);
                            // line 65
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 66
$context["detail"] == "firstname")) {
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersFirstName"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 67);
                            // line 68
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 69
$context["detail"] == "lastName")) {
                            // line 70
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersLastName"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 70);
                            // line 71
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 72
$context["detail"] == "role")) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersRole"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 73);
                            // line 74
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 75
$context["detail"] == "position")) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersPosition"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 76);
                            // line 77
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 78
$context["detail"] == "signature")) {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["usersSignature"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 79);
                            // line 80
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "
\t\t\t\t\t\t\t";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 83, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t";
                        if ((((((((twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 84) == (isset($context["usersEmail"]) || array_key_exists("usersEmail", $context) ? $context["usersEmail"] : (function () { throw new RuntimeError('Variable "usersEmail" does not exist.', 84, $this->source); })())) || (twig_get_attribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 84) == (isset($context["usersUsername"]) || array_key_exists("usersUsername", $context) ? $context["usersUsername"] : (function () { throw new RuntimeError('Variable "usersUsername" does not exist.', 84, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 84) == (isset($context["usersFirstName"]) || array_key_exists("usersFirstName", $context) ? $context["usersFirstName"] : (function () { throw new RuntimeError('Variable "usersFirstName" does not exist.', 84, $this->source); })()))) || (twig_get_attribute($this->env, $this->source,                         // line 85
$context["user"], "lastName", [], "any", false, false, false, 85) == (isset($context["usersLastName"]) || array_key_exists("usersLastName", $context) ? $context["usersLastName"] : (function () { throw new RuntimeError('Variable "usersLastName" does not exist.', 85, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 85) == (isset($context["usersRole"]) || array_key_exists("usersRole", $context) ? $context["usersRole"] : (function () { throw new RuntimeError('Variable "usersRole" does not exist.', 85, $this->source); })()))) || (twig_get_attribute($this->env, $this->source,                         // line 86
$context["user"], "position", [], "any", false, false, false, 86) == (isset($context["usersPosition"]) || array_key_exists("usersPosition", $context) ? $context["usersPosition"] : (function () { throw new RuntimeError('Variable "usersPosition" does not exist.', 86, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["user"], "signature", [], "any", false, false, false, 86) == (isset($context["usersSignature"]) || array_key_exists("usersSignature", $context) ? $context["usersSignature"] : (function () { throw new RuntimeError('Variable "usersSignature" does not exist.', 86, $this->source); })())))) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["isMatch"] = true;
                            // line 88
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["user_id"] = twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88);
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["user_username"] = twig_get_attribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 89);
                            // line 90
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 91
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["isMatch"]) || array_key_exists("isMatch", $context) ? $context["isMatch"] : (function () { throw new RuntimeError('Variable "isMatch" does not exist.', 92, $this->source); })()) == true)) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t";
                        $context["userPath"] = twig_array_merge((isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 93, $this->source); })()), [(isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 93, $this->source); })()), (isset($context["user_username"]) || array_key_exists("user_username", $context) ? $context["user_username"] : (function () { throw new RuntimeError('Variable "user_username" does not exist.', 93, $this->source); })())]);
                        // line 94
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "
\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 96
$context["log"], "action", [], "any", false, false, false, 96) == "update") && (twig_get_attribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 96) == "role"))) {
                    // line 97
                    echo "\t\t\t\t\t\t\t";
                    list($context["name"], $context["description"], $context["rowPermissions"]) =                     ["", "", ""];
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                    $context["role_id"] = "1";
                    // line 99
                    echo "\t\t\t\t\t\t\t";
                    $context["roleName"] = "Admininstrator";
                    // line 100
                    echo "\t\t\t\t\t\t\t";
                    $context["isMatch"] = false;
                    // line 101
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t";
                        if (($context["detail"] == "name")) {
                            // line 103
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["name"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 103);
                            // line 104
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 105
$context["detail"] == "description")) {
                            // line 106
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["description"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 106);
                            // line 107
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 108
$context["detail"] == "rawPermissions")) {
                            // line 109
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["rowPermissions"] = twig_get_attribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 109);
                            // line 110
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 111
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "
\t\t\t\t\t\t\t";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 113, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t";
                        if ((((twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 114) == (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 114, $this->source); })())) || (twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 114) == (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 114, $this->source); })()))) || (twig_get_attribute($this->env, $this->source,                         // line 115
$context["role"], "rawPermissions", [], "any", false, false, false, 115) == (isset($context["rowPermissions"]) || array_key_exists("rowPermissions", $context) ? $context["rowPermissions"] : (function () { throw new RuntimeError('Variable "rowPermissions" does not exist.', 115, $this->source); })())))) {
                            // line 116
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["isMatch"] = true;
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["role_id"] = twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 117);
                            // line 118
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["roleName"] = twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 118);
                            // line 119
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["isMatch"]) || array_key_exists("isMatch", $context) ? $context["isMatch"] : (function () { throw new RuntimeError('Variable "isMatch" does not exist.', 121, $this->source); })()) == true)) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t";
                        $context["rolePath"] = twig_array_merge([], [(isset($context["role_id"]) || array_key_exists("role_id", $context) ? $context["role_id"] : (function () { throw new RuntimeError('Variable "role_id" does not exist.', 122, $this->source); })()), (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 122, $this->source); })())]);
                        // line 123
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 124
                    echo "\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t<div class=\"media-object pull-left\">
\t\t\t\t\t\t\t\t";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 127) == "login")) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"figure featured bg-success\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ri-check-line\"></span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 131
$context["log"], "action", [], "any", false, false, false, 131) == "update")) {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"figure\"></span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"figure\"></span>
\t\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 138) == "user")) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 139) == "update")) {
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.user"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 141
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 141, $this->source); })()), 0, [], "array", false, false, false, 141)]), "html", null, true);
                        echo "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 142, $this->source); })()), 1, [], "array", false, false, false, 142), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 143
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.form.updated_by"), "html", null, true);
                        echo "

\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 145
$context["log"], "action", [], "any", false, false, false, 145) == "create")) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 146, $this->source); })()), 0, [], "array", false, false, false, 146)]), "html", null, true);
                        echo "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 147
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 147, $this->source); })()), 1, [], "array", false, false, false, 147), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 148
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.created_by"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 150
                    echo "
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 151
$context["log"], "object", [], "any", false, false, false, 151) == "role")) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 152) == "create")) {
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.role.role"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 154
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 154, $this->source); })()), 0, [], "array", false, false, false, 154)]), "html", null, true);
                        echo "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 155, $this->source); })()), 1, [], "array", false, false, false, 155), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 156
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.created_by"), "html", null, true);
                        echo "

\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 158
$context["log"], "action", [], "any", false, false, false, 158) == "update")) {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.role.role"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 160
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 160, $this->source); })()), 0, [], "array", false, false, false, 160)]), "html", null, true);
                        echo "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 161, $this->source); })()), 1, [], "array", false, false, false, 161), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 162
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.form.updated_by"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 164
                    echo "
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 165
$context["log"], "object", [], "any", false, false, false, 165) == "security")) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 166) == "login")) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.user"), "html", null, true);
                        echo "

\t\t\t\t\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 169
$context["log"], "action", [], "any", false, false, false, 169) == "update")) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.updated_by"), "html", null, true);
                        echo "

\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 174
                echo "
\t\t\t\t\t\t\t\t";
                // line 175
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 175) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 175)))) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 176)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 176), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                    // line 177
                    if ((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 177) == "login")) {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.login_by"), "html", null, true);
                    }
                    // line 178
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 180), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t<p class=\"fs-12 dark-sm\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
                // line 184
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 184));
                echo "</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 191
        echo "\t\t</div>
\t</div>
\t";
        // line 193
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.bottom", $context);
        echo "
</div>
<!-- Recent activity block(audit_log table) -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/User/recent_activity.html.twig";
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
        return array (  591 => 193,  587 => 191,  583 => 189,  572 => 184,  568 => 182,  562 => 180,  558 => 178,  554 => 177,  547 => 176,  545 => 175,  542 => 174,  539 => 173,  532 => 170,  530 => 169,  524 => 167,  521 => 166,  519 => 165,  516 => 164,  511 => 162,  507 => 161,  503 => 160,  498 => 159,  496 => 158,  491 => 156,  487 => 155,  483 => 154,  478 => 153,  475 => 152,  473 => 151,  470 => 150,  465 => 148,  461 => 147,  456 => 146,  454 => 145,  449 => 143,  445 => 142,  441 => 141,  436 => 140,  433 => 139,  431 => 138,  427 => 136,  423 => 134,  419 => 132,  417 => 131,  412 => 128,  410 => 127,  406 => 125,  403 => 124,  400 => 123,  397 => 122,  394 => 121,  388 => 120,  385 => 119,  382 => 118,  379 => 117,  376 => 116,  374 => 115,  372 => 114,  368 => 113,  365 => 112,  359 => 111,  356 => 110,  353 => 109,  351 => 108,  348 => 107,  345 => 106,  343 => 105,  340 => 104,  337 => 103,  334 => 102,  329 => 101,  326 => 100,  323 => 99,  320 => 98,  317 => 97,  315 => 96,  312 => 95,  309 => 94,  306 => 93,  303 => 92,  297 => 91,  294 => 90,  291 => 89,  288 => 88,  285 => 87,  283 => 86,  282 => 85,  280 => 84,  276 => 83,  273 => 82,  267 => 81,  264 => 80,  261 => 79,  259 => 78,  256 => 77,  253 => 76,  251 => 75,  248 => 74,  245 => 73,  243 => 72,  240 => 71,  237 => 70,  235 => 69,  232 => 68,  229 => 67,  227 => 66,  224 => 65,  221 => 64,  219 => 63,  216 => 62,  213 => 61,  210 => 60,  205 => 59,  202 => 58,  199 => 57,  196 => 56,  193 => 55,  191 => 54,  188 => 53,  186 => 52,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  168 => 47,  165 => 46,  162 => 45,  159 => 44,  156 => 43,  152 => 42,  149 => 41,  146 => 40,  143 => 39,  141 => 38,  138 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  118 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  58 => 11,  55 => 10,  53 => 9,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/User/recent_activity.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\User\\recent_activity.html.twig");
    }
}
