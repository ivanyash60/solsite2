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

/* /var/www/html/octobercms/themes/jtherczeg-corlate/partials/accordion.htm */
class __TwigTemplate_e0ba2cc112d8fd9bbdef10961d97fb58cdde6bcaa7dc59ee12413e98514f6963 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Why People like us?</h2>
                        <div class=\"panel-group\" id=\"accordion1\">
                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading active\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseOne1\">
                                  Lorem ipsum dolor sit amet
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>

                            <div id=\"collapseOne1\" class=\"panel-collapse collapse in\">
                              <div class=\"panel-body\">
                                  <div class=\"media accordion-inner\">
                                        <div class=\"pull-left\">
                                            <img class=\"img-responsive\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/accordion1.png");
        echo "\">
                                        </div>
                                        <div class=\"media-body\">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseTwo1\">
                                  Lorem ipsum dolor sit amet
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseTwo1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseThree1\">
                                  Lorem ipsum dolor sit amet
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseThree1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseFour1\">
                                  Lorem ipsum dolor sit amet
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseFour1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/jtherczeg-corlate/partials/accordion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/jtherczeg-corlate/partials/accordion.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
