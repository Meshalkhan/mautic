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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/quote.js */
class __TwigTemplate_bad5b5d6cc4cc5c26830f2bda479cbb2 extends Template
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

  

  \$.FE.PLUGINS.quote = function (editor) {
    function _deepestParent(node) {
      while (node.parentNode && node.parentNode != editor.el) {
        node = node.parentNode;
      }

      return node;
    }

    function _increase () {
      // Get blocks.
      var blocks = editor.selection.blocks();
      var i;

      // Normalize blocks.
      for (i = 0; i < blocks.length; i++) {
        blocks[i] = _deepestParent(blocks[i]);
      }

      // Save selection to restore it later.
      editor.selection.save();

      var \$quote = \$('<blockquote>');
      \$quote.insertBefore(blocks[0]);
      for (i = 0; i < blocks.length; i++) {
        \$quote.append(blocks[i]);
      }

      // Unwrap temp divs.
      editor.html.unwrap();

      editor.selection.restore();
    }

    function _decrease () {
      // Get blocks.
      var blocks = editor.selection.blocks();
      var i;

      for (i = 0; i < blocks.length; i++) {
        if (blocks[i].tagName != 'BLOCKQUOTE') {
          blocks[i] = \$(blocks[i]).parentsUntil(editor.\$el, 'BLOCKQUOTE').get(0);
        }
      }

      editor.selection.save();

      for (i = 0; i < blocks.length; i++) {
        if (blocks[i]) {
          \$(blocks[i]).replaceWith(blocks[i].innerHTML);
        }
      }

      // Unwrap temp divs.
      editor.html.unwrap();

      editor.selection.restore();
    }

    function apply (val) {
      // Wrap.
      editor.selection.save();
      editor.html.wrap(true, true, true, true);
      editor.selection.restore();

      if (val == 'increase') {
        _increase();
      }
      else if (val == 'decrease') {
        _decrease();
      }


    }

    return {
      apply: apply
    }
  }

  // Register the quote command.
  \$.FE.RegisterShortcut(\$.FE.KEYCODE.SINGLE_QUOTE, 'quote', 'increase', '\\'');
  \$.FE.RegisterShortcut(\$.FE.KEYCODE.SINGLE_QUOTE, 'quote', 'decrease', '\\'', true);
  \$.FE.RegisterCommand('quote', {
    title: 'Quote',
    type: 'dropdown',
    options: {
      increase: 'Increase',
      decrease: 'Decrease'
    },
    callback: function (cmd, val) {
      this.quote.apply(val);
    },
    plugin: 'quote'
  })

  // Add the quote icon.
  \$.FE.DefineIcon('quote', {
    NAME: 'quote-left'
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
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/quote.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/quote.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\plugins\\quote.js");
    }
}
