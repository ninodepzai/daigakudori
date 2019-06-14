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

/* C:\xampp\htdocs\daigakudori/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm */
class __TwigTemplate_0087e54141e921d145ab07aea831647694a1791a4d00b6a433572f9b7119837a extends \Twig\Template
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
        echo "<!--Footer-->
<footer class=\"page-footer center-on-small-only\">

    <!--Footer links-->
    <div class=\"container-fluid\">
        <div class=\"row mt-3\">
            <!--First column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">
                ";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "            </div>
            <!--/.First column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Second column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "            </div>
            <!--/.Second column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Third column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                ";
        // line 21
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 22
        echo "            </div>
            <!--/.Third column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Fourth column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                ";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/column4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 28
        echo "            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->

    <hr>

    ";
        // line 36
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/CTA.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 37
        echo "
    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright: <a href=\"https://www.MDBootstrap.com/?utm_source=4e323a&utm_id=4e323a\"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  96 => 37,  92 => 36,  82 => 28,  78 => 27,  71 => 22,  67 => 21,  60 => 16,  56 => 15,  49 => 10,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Footer-->
<footer class=\"page-footer center-on-small-only\">

    <!--Footer links-->
    <div class=\"container-fluid\">
        <div class=\"row mt-3\">
            <!--First column-->
            <div class=\"col-lg-3 col-md-6 ml-auto\">
                {% content 'footer/column1.htm' %}
            </div>
            <!--/.First column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Second column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                {% content 'footer/column2.htm' %}
            </div>
            <!--/.Second column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Third column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                {% content 'footer/column3.htm' %}
            </div>
            <!--/.Third column-->
            <hr class=\"w-100 clearfix d-sm-none\">
            <!--Fourth column-->
            <div class=\"col-lg-2 col-md-6 ml-auto\">
                {% content 'footer/column4.htm' %}
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->

    <hr>

    {% content 'footer/CTA.htm' %}

    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © {{ 'now'|date('Y') }} Copyright: <a href=\"https://www.MDBootstrap.com/?utm_source=4e323a&utm_id=4e323a\"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->", "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm", "");
    }
}
