<?php

/* HeticSiteBundle:Default:topmenu.html.twig */
class __TwigTemplate_fa9fe303ddaa13d4a56436cc8ba116f9052ecf42706fdf92853c8833392f58a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topmenu' => array($this, 'block_topmenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('topmenu', $context, $blocks);
        // line 27
        echo "
";
    }

    // line 1
    public function block_topmenu($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("hetic_site_hello");
        echo "\">Hetic</a>
                <div class=\"nav-collapse collapse\">
                    <p class=\"navbar-text pull-right\">
                       Copyrights @Hetic Symfony 2
                    </p>
                    <ul class=\"nav\">
                        <li ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_hello")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("hetic_site_hello");
        echo "\"><i class=\"icon-home\"></i> Home</a></li>
                        <li ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("hetic_about");
        echo "\"><i class=\"icon-question-sign\"></i> About</a></li>
                        <li ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_contact")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("hetic_contact");
        echo "\"><i class=\"icon-envelope\"></i> Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <br /><br />
    <br /><br />
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:topmenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  57 => 17,  49 => 16,  40 => 10,  30 => 2,  27 => 1,  22 => 27,  20 => 1,);
    }
}
