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

/* C:\xampp\htdocs\daigakudori/themes/zanor-zanor-mdb-loaded/layouts/fullImageBg.htm */
class __TwigTemplate_09e727b9ff3ddf3f35c8f3aa6a69a638c249685bb7f364b2b6ae2010daa60219 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scrollingNavbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "








";
        // line 12
        $context["bg"] = ($context["bgImage"] ?? null);
        // line 13
        echo "<!--Mask-->
<div class=\"view hm-black-light\"
     style=\"background: url(";
        // line 15
        if ((($context["bg"] ?? null) == "")) {
            echo "'https://mdbootstrap.com/img/Photos/Others/images/79.jpg'";
        } else {
            echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["bgImage"] ?? null));
        }
        echo ")
             no-repeat center center fixed;\">
    <div class=\"full-bg-img flex-center\">
        <ul class=\"animated fadeInUp\">
            <li>
                <h1 class=\"display-3 mb-4 font-bold\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["introTitle"] ?? null), "html", null, true);
        echo "</h1></li>
            <li>
                <h3 class=\"mb-5\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["tagline"] ?? null), "html", null, true);
        echo "</h3>
            </li>
            <li>
                <a target=\"_blank\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["btn1Link"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">";
        echo twig_escape_filter($this->env, ($context["btn1Text"] ?? null), "html", null, true);
        echo "</a>
                <a target=\"_blank\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["btn2Link"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-outline-white btn-lg\" rel=\"nofollow\">";
        echo twig_escape_filter($this->env, ($context["btn2Text"] ?? null), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->

";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/layouts/fullImageBg.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  89 => 26,  83 => 25,  77 => 22,  72 => 20,  60 => 15,  56 => 13,  54 => 12,  43 => 3,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}









{% set bg = bgImage %}
<!--Mask-->
<div class=\"view hm-black-light\"
     style=\"background: url({% if bg == '' %}'https://mdbootstrap.com/img/Photos/Others/images/79.jpg'{% else %}{{ bgImage|media }}{% endif %})
             no-repeat center center fixed;\">
    <div class=\"full-bg-img flex-center\">
        <ul class=\"animated fadeInUp\">
            <li>
                <h1 class=\"display-3 mb-4 font-bold\">{{ introTitle }}</h1></li>
            <li>
                <h3 class=\"mb-5\">{{ tagline }}</h3>
            </li>
            <li>
                <a target=\"_blank\" href=\"{{ btn1Link }}\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">{{ btn1Text }}</a>
                <a target=\"_blank\" href=\"{{ btn2Link }}\" class=\"btn btn-outline-white btn-lg\" rel=\"nofollow\">{{ btn2Text }}</a>
            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/layouts/fullImageBg.htm", "");
    }
}
