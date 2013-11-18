<?php

/* ::base.html.twig */
class __TwigTemplate_a8e23d36853728057eed699636b5e09afcb52b5072ec0264360ba7a13283a4ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  59 => 6,  47 => 12,  44 => 11,  42 => 10,  35 => 7,  33 => 6,  23 => 1,  116 => 35,  113 => 34,  109 => 27,  106 => 26,  99 => 28,  96 => 26,  87 => 23,  84 => 22,  80 => 21,  75 => 18,  72 => 17,  69 => 11,  53 => 5,  49 => 10,  38 => 5,  340 => 137,  338 => 136,  336 => 135,  321 => 121,  308 => 114,  302 => 111,  294 => 106,  290 => 104,  282 => 100,  274 => 96,  272 => 95,  264 => 90,  256 => 85,  250 => 82,  246 => 81,  243 => 80,  233 => 75,  224 => 71,  220 => 70,  216 => 68,  211 => 67,  204 => 65,  197 => 63,  190 => 61,  187 => 60,  183 => 59,  169 => 47,  167 => 46,  165 => 45,  160 => 41,  154 => 40,  143 => 38,  138 => 37,  134 => 36,  128 => 32,  122 => 31,  118 => 29,  107 => 27,  103 => 26,  95 => 21,  90 => 19,  86 => 18,  81 => 15,  78 => 14,  62 => 10,  58 => 9,  55 => 8,  41 => 6,  37 => 5,  32 => 3,  29 => 5,);
    }
}
