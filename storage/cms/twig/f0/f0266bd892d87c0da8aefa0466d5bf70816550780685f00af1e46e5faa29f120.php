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

/* C:\xampp\htdocs\daigakudori/themes/jtherczeg-multi/partials/cta2.htm */
class __TwigTemplate_75581c53878b0993d70b73189c178c201ba2f718aba9fd1c6cf58bbcdabd9b45 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cta2/cta2-img.png");
        echo "\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/cta2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"{{ 'assets/images/cta2/cta2-img.png'|theme }}\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">", "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/cta2.htm", "");
    }
}
