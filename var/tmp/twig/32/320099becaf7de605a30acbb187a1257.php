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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/filemanager.js */
class __TwigTemplate_458ee0dd97a2e049f521426bfd8fb600 extends Template
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
 * froala_editor v2.2.4 (https://www.froala.com/wysiwyg-editor)
 * License GPL v3
 * Copyright Mautic
 */

var FroalaEditorForFileManager = null;
var FroalaEditorForFileManagerCurrentImage = null;

// This method is called by the Filemanager after an image is selected
function SetUrl(url, width, height, alt) {
    if (!FroalaEditorForFileManager) {
        // This is not called from Froala, let's handle it elsewhere:
        Mautic.setFileUrl(url, width, height, alt);
        return;
    }
    if (typeof FroalaEditorForFileManagerCurrentImage !== 'undefined' && 
        FroalaEditorForFileManagerCurrentImage !== null && 
        FroalaEditorForFileManagerCurrentImage.length && 
        FroalaEditorForFileManagerCurrentImage.prop('tagName') === 'IMG') {
        // Copy additional image attributes.
        // data-url is set as src therefore not needed anymore.
        // data-tag is only used to sort images by tag in the image manager.
        var img_attributes = {};
        var img_data = FroalaEditorForFileManagerCurrentImage.data();

        for (var key in img_data) {
            if (img_data.hasOwnProperty(key)) {
                if (key != 'url' && key != 'tag') {
                    img_attributes[key] = img_data[key];
                }
            }
        }
        FroalaEditorForFileManager.image.insert(url, false, img_attributes, FroalaEditorForFileManagerCurrentImage);
        FroalaEditorForFileManagerCurrentImage = null;
    } else {
        FroalaEditorForFileManager.image.insert(url, false);
    }
    FroalaEditorForFileManagerCurrentImage = null;
    oWindow = null;
}

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = function( root, jQuery ) {
            if ( jQuery === undefined ) {
                // require('jQuery') returns a factory that requires window to
                // build a jQuery instance, we normalize how we use modules
                // that require this pattern but the window provided is a noop
                // if it's defined (how jquery works)
                if ( typeof window !== 'undefined' ) {
                    jQuery = require('jquery');
                }
                else {
                    jQuery = require('jquery')(root);
                }
            }
            factory(jQuery);
            return jQuery;
        };
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function (\$) {
  'use strict';

  \$.FE.PLUGINS.fileManager = function (editor) {
    var urlobj;

    /*
     * Show the file manager.
     */
    function show () {
      FroalaEditorForFileManagerCurrentImage = editor.image.get();
      FroalaEditorForFileManager = editor;
      Mautic.openMediaManager();
    }

    return {
      require: ['image'],
      show: show
    }
  };

  if (!\$.FE.PLUGINS.image) {
    throw new Error('File manager plugin requires image plugin.');
  }

  \$.FE.DEFAULTS.imageInsertButtons.push('fileManager');

  \$.FE.RegisterCommand('fileManager', {
    title: 'Browse',
    undo: false,
    focus: false,
    callback: function () {
      this.fileManager.show();
    },
    plugin: 'fileManager'
  })

  // Add the font size icon.
  \$.FE.DefineIcon('fileManager', {
    NAME: 'folder'
  });

}));
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/filemanager.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/filemanager.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\plugins\\filemanager.js");
    }
}
