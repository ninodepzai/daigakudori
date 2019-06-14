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

/* C:\xampp\htdocs\daigakudori/themes/jtherczeg-multi/partials/features.htm */
class __TwigTemplate_8092dbfecb3aa196f469c878e26accdfcc67f4024b98107e1ec2f97542020726 extends \Twig\Template
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
                <h2 class=\"section-title text-center wow fadeInDown\">Awesome Features</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    <img class=\"img-responsive\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-feature.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-line-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UX design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-cubes\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Awesome Features</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    <img class=\"img-responsive\" src=\"{{ 'assets/images/main-feature.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-line-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UX design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-cubes\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/features.htm", "");
    }
}
