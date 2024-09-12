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

/* @themes/fresh-left/html/page.html.twig */
class __TwigTemplate_b9ac1f01deab24d3c5869b9e62566d41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/fresh-left/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<header data-section-wrapper=\"1\" id=\"top\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <img class=\"logo\" src=\"";
        // line 7
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 7, $this->source); })())) . "/assets/logo_white.svg"));
        echo "\">
      </div>
    </div>
  </div>
</header>
<section data-section-wrapper=\"1\" class=\"hero\" style=\"background-color: #00bf9a;\">
  <div data-section=\"1\">
    <div class=\"background\">
      <div data-slot-container=\"1\">
        <div data-slot=\"text\">
        <img class=\"background-image\" src=\"";
        // line 17
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 17, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
        </div>
      </div>
    </div>
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"c6 form-container\">
          <div class=\"form white\">
            <h2>H2 Call-To-Action</h2>
            <div>
              <img src=\"";
        // line 27
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 27, $this->source); })())) . "/assets/img_form-demo.jpg"));
        echo "\" style=\"margin: 0 auto;\">
              <!-- PLACE FORM HERE -->
            </div>
          </div>
        </div>
        <div class=\"c6 hero-details-container\">
          <div class=\"hero-details\">
            <h1>H1 Header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
            <h2>H2 Customers</h2>
            <div class=\"customers\">
              <div class=\"logos\">
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 40
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 40, $this->source); })())) . "/assets/logo_demo-company-i.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 43
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 43, $this->source); })())) . "/assets/logo_demo-company-ii.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 46
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 46, $this->source); })())) . "/assets/logo_demo-company-iii.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 49
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 49, $this->source); })())) . "/assets/logo_demo-company-iv.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 52
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 52, $this->source); })())) . "/assets/logo_demo-company-v.svg"));
        echo "\">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"details\" style=\"background-color: #f5f5f5;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Details</h2>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"speakers\" style=\"background-color: #f5f5f5;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Speakers</h2>
        <div class=\"speakers-container\">
          <div class=\"speaker\">
            <div class=\"speaker-image\">
              <img src=\"";
        // line 103
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 103, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
            </div>
            <div class=\"speaker-details\">
              <h3>H3 Name</h3>
              <p>Details about speaker</p>
              <p>More details about speaker</p>
            </div>
          </div>
          <div class=\"speaker\">
            <div class=\"speaker-image\">
              <img src=\"";
        // line 113
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 113, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
            </div>
            <div class=\"speaker-details\">
              <h3>H3 Name</h3>
              <p>Details about speaker</p>
              <p>More details about speaker</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"grid\" style=\"background-color: #00bf9a;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Grid</h2>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 133
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 133, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 134
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 134, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 139
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 139, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 146
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 146, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 151
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 151, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 156
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 156, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 157
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 157, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 162
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 162, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 163
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 163, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 170
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 170, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 171
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 171, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 176
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 176, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 181
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 181, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" style=\"background-color: #3f3f45;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2 class=\"green\">H2 About Company</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"testimonials\" style=\"background-color: #3f3f45;\">
  <div data-slot=\"text\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"testimonials-container\">
          <div class=\"testimonial\">
            <div class=\"c12 testimonial-quote\">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula.”</p>
            </div>
            <div class=\"testimonial-details\">
              <div class=\"c5\">
                  <div class=\"speaker-image\">
                      <img src=\"";
        // line 212
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 212, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
                  </div>
              </div>
              <div class=\"c7 details\">
                <h3>H3 Name</h3>
                <p>Details about speaker</p>
                <p>More details about speaker</p>
              </div>
            </div>
          </div>
          <div class=\"testimonial\">
            <div class=\"c12 testimonial-quote\">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula.”</p>
            </div>
            <div class=\"testimonial-details\">
              <div class=\"c5\">
                  <div class=\"speaker-image\">
                      <img src=\"";
        // line 229
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 229, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
                  </div>
              </div>
              <div class=\"c7 details\">
                <h3>H3 Name</h3>
                <p>Details about speaker</p>
                <p>More details about speaker</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" style=\"background-color: #00bf9a;\" class=\"thank-you\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h1>H1 Thank You</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
        <a class=\"button\">Get Your Asset</a>
      </div>
    </div>
  </div>
</section>
<footer data-section-wrapper=\"1\" id=\"bottom\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"c6 logo-container\">
          <img class=\"logo\" src=\"";
        // line 260
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 260, $this->source); })())) . "/assets/logo_white.svg"));
        echo "\">
        </div>
        <div class=\"c6\">
          <p class=\"copyright\">&copy; Mautic 2017</p>
        </div>
      </div>
    </div>
  </div>
</footer>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/fresh-left/html/page.html.twig";
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
        return array (  383 => 260,  349 => 229,  329 => 212,  295 => 181,  287 => 176,  279 => 171,  275 => 170,  265 => 163,  261 => 162,  253 => 157,  249 => 156,  241 => 151,  233 => 146,  223 => 139,  215 => 134,  211 => 133,  188 => 113,  175 => 103,  121 => 52,  115 => 49,  109 => 46,  103 => 43,  97 => 40,  81 => 27,  68 => 17,  55 => 7,  49 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/fresh-left/html/page.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-left\\html\\page.html.twig");
    }
}
