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

/* @bundles/CoreBundle/Assets/js/13.versioning.js */
class __TwigTemplate_effa4b2b78d5ced64699ce2d62aa9940 extends Template
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
        yield "Mautic.contentVersions = {};
Mautic.versionNamespace = '';
Mautic.currentContentVersion = -1;

/**
 * Setup versioning for the given namespace
 *
 * @param undoCallback function
 * @param redoCallback function
 * @param namespace
 */
Mautic.prepareVersioning = function (undoCallback, redoCallback, namespace) {
    // Check if localStorage is supported and if not, disable undo/redo buttons
    if (!Mautic.isLocalStorageSupported()) {
        mQuery('.btn-undo').prop('disabled', true);
        mQuery('.btn-redo').prop('disabled', true);

        return;
    }

    mQuery('.btn-undo')
        .prop('disabled', false)
        .on('click', function() {
            Mautic.undoVersion(undoCallback);
        });

    mQuery('.btn-redo')
        .prop('disabled', false)
        .on('click', function() {
            Mautic.redoVersion(redoCallback);
        });

    Mautic.currentContentVersion = -1;

    if (!namespace) {
        namespace = window.location.href;
    }

    if (typeof Mautic.contentVersions[namespace] == 'undefined') {
        Mautic.contentVersions[namespace] = [];
    }

    Mautic.versionNamespace = namespace;

    console.log(namespace);
};

/**
 * Clear versioning
 *
 * @param namespace
 */
Mautic.clearVersioning = function () {
    if (!Mautic.versionNamespace) {
        throw 'Versioning not configured';
    }

    if (typeof Mautic.contentVersions[Mautic.versionNamespace] !== 'undefined') {
        delete Mautic.contentVersions[Mautic.versionNamespace];
    }

    Mautic.versionNamespace = '';
    Mautic.currentContentVersion = -1;
};

/**
 * Store a version
 *
 * @param content
 */
Mautic.storeVersion = function(content) {
    if (!Mautic.versionNamespace) {
        throw 'Versioning not configured';
    }

    // Store the content
    Mautic.contentVersions[Mautic.versionNamespace].push(content);

    // Set the current location to the latest spot
    Mautic.currentContentVersion = Mautic.contentVersions[Mautic.versionNamespace].length;
};

/**
 * Decrement a version
 *
 * @param callback
 */
Mautic.undoVersion = function(callback) {
    console.log('undo');
    if (!Mautic.versionNamespace) {
        throw 'Versioning not configured';
    }

    if (Mautic.currentContentVersion < 0) {
        // Nothing to undo

        return;
    }

    var version = Mautic.currentContentVersion - 1;
    if (Mautic.getVersion(version, callback)) {
        --Mautic.currentContentVersion;
    };
};

/**
 * Increment a version
 *
 * @param callback
 */
Mautic.redoVersion = function(callback) {
    console.log('redo');
    if (!Mautic.versionNamespace) {
        throw 'Versioning not configured';
    }

    if (Mautic.currentContentVersion < 0 || Mautic.contentVersions[Mautic.versionNamespace].length === Mautic.currentContentVersion) {
        // Nothing to redo

        return;
    }

    var version = Mautic.currentContentVersion + 1;
    if (Mautic.getVersion(version, callback)) {
        ++Mautic.currentContentVersion;
    };
};

/**
 * Check for a given version and execute callback
 *
 * @param version
 * @param command
 * @returns {boolean}
 */
Mautic.getVersion = function(version, callback) {
    var content = false;
    if (typeof Mautic.contentVersions[Mautic.versionNamespace][version] !== 'undefined') {
        content = Mautic.contentVersions[Mautic.versionNamespace][version];
    }

    if (false !== content && typeof callback == 'function') {
        callback(content);

        return true;
    }

    return false;
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/13.versioning.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/13.versioning.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\13.versioning.js");
    }
}
