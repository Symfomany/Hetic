<?php

/* HeticSiteBundle:Default:editcategory.html.twig */
class __TwigTemplate_9e1ac05a5fdea79f37d7f74e820928b24477512ae0772babe59434aab57eed69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSiteBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HeticSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Ajout d'une catégory</h2>
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name")), "html", null, true);
        echo "</h3>
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" method=\"post\" id=\"addarticle\">
        <div class=\"errors\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <button class=\"btn\" type=\"submit\">Enregistrer la category</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:editcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  65 => 12,  239 => 81,  233 => 78,  225 => 73,  205 => 63,  191 => 56,  181 => 51,  146 => 31,  126 => 26,  118 => 24,  127 => 28,  110 => 22,  90 => 17,  77 => 12,  20 => 1,  137 => 33,  114 => 23,  34 => 5,  23 => 1,  113 => 23,  84 => 22,  53 => 5,  342 => 139,  340 => 138,  338 => 137,  323 => 123,  310 => 116,  304 => 113,  296 => 108,  292 => 106,  284 => 102,  276 => 98,  274 => 97,  266 => 92,  248 => 83,  245 => 82,  226 => 73,  222 => 72,  218 => 70,  213 => 67,  206 => 67,  192 => 63,  185 => 61,  167 => 42,  124 => 33,  97 => 23,  81 => 15,  58 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 87,  252 => 84,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 48,  140 => 39,  132 => 51,  128 => 30,  107 => 21,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 77,  230 => 82,  227 => 81,  224 => 71,  221 => 71,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 38,  143 => 56,  135 => 29,  119 => 26,  102 => 32,  71 => 19,  67 => 15,  63 => 10,  59 => 9,  38 => 6,  94 => 18,  89 => 20,  85 => 16,  75 => 18,  68 => 14,  56 => 8,  87 => 16,  21 => 2,  26 => 3,  93 => 28,  88 => 20,  78 => 12,  46 => 8,  27 => 1,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 52,  171 => 49,  166 => 71,  163 => 40,  158 => 67,  156 => 42,  151 => 34,  142 => 34,  138 => 54,  136 => 30,  121 => 28,  117 => 26,  105 => 28,  91 => 22,  62 => 10,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 14,  72 => 16,  69 => 11,  47 => 12,  40 => 10,  37 => 5,  22 => 2,  246 => 90,  157 => 37,  145 => 40,  139 => 31,  131 => 28,  123 => 27,  120 => 31,  115 => 43,  111 => 22,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 15,  74 => 14,  66 => 15,  55 => 8,  52 => 21,  50 => 10,  43 => 6,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 62,  199 => 60,  193 => 73,  189 => 62,  187 => 84,  182 => 66,  176 => 64,  173 => 46,  168 => 72,  164 => 59,  162 => 43,  154 => 24,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 34,  125 => 29,  122 => 25,  116 => 35,  112 => 42,  109 => 27,  106 => 26,  103 => 32,  99 => 28,  95 => 24,  92 => 21,  86 => 16,  82 => 15,  80 => 19,  73 => 19,  64 => 10,  60 => 11,  57 => 10,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 4,);
    }
}
