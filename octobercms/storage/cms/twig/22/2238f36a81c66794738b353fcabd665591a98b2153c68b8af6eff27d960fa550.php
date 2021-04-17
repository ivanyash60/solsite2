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

/* /var/www/html/octobercms/themes/jtherczeg-corlate/partials/works.htm */
class __TwigTemplate_da211ae01128c1d813cfe43bf540f72fc52ecf6e93d80d74004427eb8a53c575 extends \Twig\Template
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
        echo "<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Recent Works</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item1.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item1.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item2.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item2.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item3.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item3.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item4.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item4.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item5.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item5.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item6.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item6.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item7.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item7.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/item8.png");
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full/item8.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/jtherczeg-corlate/partials/works.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 106,  183 => 101,  172 => 93,  164 => 88,  153 => 80,  145 => 75,  134 => 67,  126 => 62,  115 => 54,  107 => 49,  96 => 41,  88 => 36,  77 => 28,  69 => 23,  58 => 15,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/jtherczeg-corlate/partials/works.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 10);
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
