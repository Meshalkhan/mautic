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

/* @bundles/UserBundle/Assets/js/user.js */
class __TwigTemplate_18e9aed46499cfc855633192ba72163e extends Template
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
        yield "//UserBundle
Mautic.userOnLoad = function (container) {
    if (mQuery(container + ' form[name=\"user\"]').length) {
        if (mQuery('#user_position').length) {
            Mautic.activateTypeahead('#user_position', {displayKey: 'position'});
        }
    } else {
        if (mQuery(container + ' #list-search').length) {
            Mautic.activateSearchAutocomplete('list-search', 'user.user');
        }
    }
};

Mautic.roleOnLoad = function (container, response) {
    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'user.role');
    }

    if (response && response.permissionList) {
        MauticVars.permissionList = response.permissionList;
    }
};

/**
 * Toggles permission panel visibility for roles
 */
Mautic.togglePermissionVisibility = function () {
    //add a very slight delay in order for the clicked on checkbox to be selected since the onclick action
    //is set to the parent div
    setTimeout(function () {
        if (mQuery('#role_isAdmin_0').prop('checked')) {
            mQuery('#rolePermissions').removeClass('hide');
            mQuery('#isAdminMessage').addClass('hide');
        } else {
            mQuery('#rolePermissions').addClass('hide');
            mQuery('#isAdminMessage').removeClass('hide');
        }
    }, 10);
};

/**
 * Toggle permissions, update ratio, etc
 *
 * @param changedPermission
 * @param bundle
 */
Mautic.onPermissionChange = function (changedPermission, bundle) {
    var granted = 0;

    if (mQuery(changedPermission).prop('checked')) {
        if (mQuery(changedPermission).val() == 'full') {
            //uncheck all of the others
            mQuery(changedPermission).closest('.choice-wrapper').find(\"label input:checkbox:checked\").map(function () {
                if (mQuery(this).val() != 'full') {
                    mQuery(this).prop('checked', false);
                    mQuery(this).parent().toggleClass('active');
                }
            })
        } else {
            //uncheck full
            mQuery(changedPermission).closest('.choice-wrapper').find(\"label input:checkbox:checked\").map(function () {
                if (mQuery(this).val() == 'full') {
                    granted = granted - 1;
                    mQuery(this).prop('checked', false);
                    mQuery(this).parent().toggleClass('active');
                }
            })
        }
    }

    //update granted numbers
    if (mQuery('.' + bundle + '_granted').length) {
        var granted = 0;
        var levelPerms = MauticVars.permissionList[bundle];
        mQuery.each(levelPerms, function(level, perms) {
            mQuery.each(perms, function(index, perm) {
                var isChecked = mQuery('input[data-permission=\"' + bundle + ':' + level + ':' + perm + '\"]').prop('checked');
                if (perm == 'full') {
                    if (isChecked) {
                        if (perms.length === 1) {
                            granted++;
                        } else {
                            granted += perms.length - 1;
                        }
                    }
                } else if (isChecked) {
                    granted++;
                }
            });
        });
        mQuery('.' + bundle + '_granted').html(granted);
    }
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Assets/js/user.js";
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
        return new Source("", "@bundles/UserBundle/Assets/js/user.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Assets\\js\\user.js");
    }
}
