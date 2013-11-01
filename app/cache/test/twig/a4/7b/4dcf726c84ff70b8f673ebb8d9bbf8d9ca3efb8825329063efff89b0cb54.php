<?php

/* HeticSiteBundle:Default:categorydetail.html.twig */
class __TwigTemplate_a47b4dcf726c84ff70b8f673ebb8d9bbf8d9ca3efb8825329063efff89b0cb54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSiteBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cf7b8d6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cf7b8d6_index_1.js");
            // line 6
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "cf7b8d6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cf7b8d6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "</h3>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "description"), "html", null, true);
        echo "</p>
        <hr class=\"clear\" />
        <h4>Les articles liés à ma catégorie:</h4>
        <ul>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "                <div class=\"alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <i class=\"icon-book\"></i> <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>

        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" class=\"btn\"><i class=\"icon-pencil\"></i> Editer cette catégory</a>

";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:categorydetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  65 => 12,  239 => 81,  225 => 73,  213 => 67,  205 => 63,  191 => 56,  181 => 51,  146 => 31,  126 => 26,  127 => 28,  110 => 22,  77 => 12,  20 => 1,  137 => 33,  114 => 23,  34 => 4,  23 => 1,  113 => 23,  84 => 22,  53 => 5,  340 => 137,  338 => 136,  336 => 135,  321 => 121,  308 => 114,  302 => 111,  290 => 104,  282 => 100,  274 => 96,  272 => 95,  256 => 85,  250 => 82,  233 => 78,  216 => 68,  211 => 67,  197 => 63,  190 => 61,  167 => 42,  165 => 45,  160 => 41,  134 => 36,  118 => 24,  90 => 17,  81 => 15,  58 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 106,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 90,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 47,  140 => 55,  132 => 51,  128 => 30,  107 => 21,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 71,  219 => 76,  217 => 75,  208 => 68,  204 => 65,  179 => 69,  159 => 38,  143 => 38,  135 => 29,  119 => 26,  102 => 32,  71 => 19,  67 => 15,  63 => 10,  59 => 9,  38 => 5,  94 => 18,  89 => 20,  85 => 16,  75 => 18,  68 => 14,  56 => 8,  87 => 16,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 12,  46 => 7,  27 => 1,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 52,  171 => 61,  166 => 71,  163 => 40,  158 => 67,  156 => 66,  151 => 34,  142 => 34,  138 => 37,  136 => 30,  121 => 28,  117 => 26,  105 => 40,  91 => 22,  62 => 10,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 14,  72 => 16,  69 => 11,  47 => 12,  40 => 10,  37 => 5,  22 => 27,  246 => 81,  157 => 37,  145 => 46,  139 => 31,  131 => 28,  123 => 27,  120 => 40,  115 => 43,  111 => 22,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 15,  74 => 14,  66 => 15,  55 => 8,  52 => 21,  50 => 10,  43 => 6,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 62,  199 => 60,  193 => 73,  189 => 71,  187 => 60,  182 => 66,  176 => 64,  173 => 46,  168 => 72,  164 => 59,  162 => 57,  154 => 24,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 29,  122 => 25,  116 => 35,  112 => 42,  109 => 27,  106 => 26,  103 => 26,  99 => 28,  95 => 24,  92 => 21,  86 => 16,  82 => 15,  80 => 19,  73 => 19,  64 => 10,  60 => 11,  57 => 10,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 6,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}
