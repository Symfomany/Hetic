<?php

/* HeticSiteBundle:Default:topmenu_logout.html.twig */
class __TwigTemplate_3f29ca24798a41cf19b6b5a48a104475c01a76bba795db85dbcb6f951401b9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topmenulogout' => array($this, 'block_topmenulogout'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('topmenulogout', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 1
    public function block_topmenulogout($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"../\" class=\"navbar-brand\">Horus CMF</a>
                <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\"><i class=\"glyphicon glyphicon-folder-open\"></i> Contact</a>
                    </li>
                    <li>
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\"><i class=\"glyphicon glyphicon-folder-open\"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:topmenu_logout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  27 => 1,  22 => 28,  20 => 1,  64 => 10,  59 => 6,  47 => 12,  44 => 11,  42 => 10,  35 => 7,  33 => 6,  23 => 1,  178 => 68,  164 => 66,  160 => 65,  148 => 57,  145 => 56,  141 => 39,  138 => 38,  123 => 42,  120 => 40,  118 => 38,  114 => 36,  112 => 35,  104 => 29,  102 => 28,  97 => 25,  94 => 24,  78 => 19,  74 => 18,  57 => 15,  53 => 5,  38 => 5,  81 => 21,  75 => 18,  71 => 17,  69 => 11,  63 => 13,  60 => 12,  55 => 8,  41 => 6,  37 => 5,  32 => 3,  29 => 5,);
    }
}
