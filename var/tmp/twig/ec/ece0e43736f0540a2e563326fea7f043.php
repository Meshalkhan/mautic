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

/* @themes/fresh-wide/html/page.html.twig */
class __TwigTemplate_fe8bf6db4a8dcbbf7bd5aa0919a00505 extends Template
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
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/fresh-wide/html/page.html.twig", 1);
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
        <div class=\"c12 hero-details\">
          <h1>H1 Header</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"form-section\" style=\"background-color: #f5f5f5;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"c12 form-container\">
          <h2>H2 Call-To-Action</h2>
          <div class=\"form white\">
            <img src=\"";
        // line 38
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 38, $this->source); })())) . "/assets/img_form-demo.jpg"));
        echo "\" style=\"margin: 0 auto;\">
            <!-- PLACE FORM HERE -->
            <h2>H2 Customers</h2>
            <div class=\"c12 customers\">
              <div class=\"logos\">
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 44
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 44, $this->source); })())) . "/assets/logo_demo-company-i.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 47
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 47, $this->source); })())) . "/assets/logo_demo-company-ii.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 50
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 50, $this->source); })())) . "/assets/logo_demo-company-iii.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 53
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 53, $this->source); })())) . "/assets/logo_demo-company-iv.svg"));
        echo "\">
                </div>
                <div class=\"logo-container\">
                  <img class=\"logo\" src=\"";
        // line 56
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 56, $this->source); })())) . "/assets/logo_demo-company-v.svg"));
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
        // line 107
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 107, $this->source); })())) . "/assets/photo_man.jpg"));
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
        // line 117
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 117, $this->source); })())) . "/assets/photo_man.jpg"));
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
        // line 137
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 137, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 138
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 138, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 143
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 143, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 150
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 150, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 155
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 155, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 160
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 160, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 161
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 161, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 166
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 166, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 167
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 167, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 174
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 174, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
            <img class=\"icon\" src=\"";
        // line 175
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 175, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 180
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 180, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 185
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 185, $this->source); })())) . "/assets/icon_grid.svg"));
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
        // line 216
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 216, $this->source); })())) . "/assets/photo_man.jpg"));
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
        // line 233
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 233, $this->source); })())) . "/assets/photo_man.jpg"));
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
        // line 264
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 264, $this->source); })())) . "/assets/logo_white.svg"));
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
        return "@themes/fresh-wide/html/page.html.twig";
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
        return array (  387 => 264,  353 => 233,  333 => 216,  299 => 185,  291 => 180,  283 => 175,  279 => 174,  269 => 167,  265 => 166,  257 => 161,  253 => 160,  245 => 155,  237 => 150,  227 => 143,  219 => 138,  215 => 137,  192 => 117,  179 => 107,  125 => 56,  119 => 53,  113 => 50,  107 => 47,  101 => 44,  92 => 38,  68 => 17,  55 => 7,  49 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/fresh-wide/html/page.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-wide\\html\\page.html.twig");
    }
}
