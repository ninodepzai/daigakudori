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

/* C:\xampp\htdocs\daigakudori/themes/jtherczeg-multi/partials/about.htm */
class __TwigTemplate_e17acb751977620b3a01605f380d1421a10163c4e57cba058bf317d1f729825f extends \Twig\Template
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
        echo "<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/video.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    ";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/capabilities.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 15
        echo "                </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  50 => 11,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    {% content 'about/video.htm' %}
                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    {% content 'about/capabilities.htm' %}
                </div>
        </div>", "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/about.htm", "");
    }
}
