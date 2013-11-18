<?php

/* HeticSiteBundle:Default:search_partial.html.twig */
class __TwigTemplate_09ab551e65f84949c24fb589409f9462088e0161f42899b26d08b2c24dbe35b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'search' => array($this, 'block_search'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('search', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 1
    public function block_search($context, array $blocks = array())
    {
        // line 2
        echo "        <h2>Rechercher un article</h2>
        <form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("hetic_search");
        echo "\" method=\"post\" id=\"addarticle\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'widget');
        echo "
            <button class=\"btn btn-primary\" type=\"submit\">Rechercher un article</button>
        </form>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:search_partial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  30 => 2,  27 => 1,  22 => 8,  20 => 1,  364 => 146,  362 => 145,  360 => 144,  345 => 130,  332 => 123,  326 => 120,  318 => 115,  314 => 113,  306 => 109,  298 => 105,  296 => 104,  292 => 102,  284 => 98,  276 => 94,  274 => 93,  266 => 88,  260 => 85,  256 => 84,  253 => 83,  243 => 78,  234 => 74,  230 => 73,  226 => 71,  221 => 70,  214 => 68,  203 => 66,  196 => 64,  193 => 63,  189 => 62,  175 => 50,  173 => 49,  171 => 48,  166 => 44,  160 => 43,  149 => 41,  144 => 40,  140 => 39,  134 => 35,  128 => 34,  123 => 31,  112 => 29,  108 => 28,  100 => 23,  95 => 21,  91 => 20,  86 => 17,  84 => 16,  81 => 15,  78 => 14,  62 => 10,  58 => 9,  55 => 8,  41 => 6,  37 => 4,  32 => 4,  29 => 3,);
    }
}
