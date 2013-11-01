<?php

/* HeticSiteBundle:Default:detail.html.twig */
class __TwigTemplate_1fd965622e009f47c63deb097dd1648df30a75976a359d73257fab2af80bb959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSiteBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78712cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78712cb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/78712cb_index_1.css");
            // line 6
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "78712cb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78712cb") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/78712cb.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4dbc7ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4dbc7ea_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4dbc7ea_test_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "4dbc7ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4dbc7ea") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4dbc7ea.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cf7b8d6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cf7b8d6_index_1.js");
            // line 17
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

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "        <img src=\"https://evbdn.eventbrite.com/s3-s3/eventlogos/29348387/hetic.png\" width=\"250\" />
        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/heticsite/images/nouvelle_equipe.jpg"), "html", null, true);
        echo "\" width=\"250\" class=\"img-polaroid\" />
        <div class=\"row-fluid\">
        <div class=\"span8\">
            <h3>Détail de l'article ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h3>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 28
            echo "                <div class=\"badge badge-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "word"), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <hr />
            <p>";
        // line 31
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content");
        echo "</p>

        </div>

";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  90 => 17,  77 => 12,  20 => 1,  137 => 33,  114 => 23,  34 => 4,  23 => 1,  113 => 23,  84 => 22,  53 => 5,  342 => 139,  340 => 138,  338 => 137,  323 => 123,  310 => 116,  304 => 113,  296 => 108,  292 => 106,  284 => 102,  276 => 98,  274 => 97,  266 => 92,  248 => 83,  245 => 82,  226 => 73,  222 => 72,  218 => 70,  213 => 69,  206 => 67,  192 => 63,  185 => 61,  167 => 47,  124 => 33,  97 => 23,  81 => 15,  58 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 87,  252 => 84,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 48,  140 => 39,  132 => 51,  128 => 30,  107 => 21,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 77,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 26,  102 => 32,  71 => 19,  67 => 15,  63 => 10,  59 => 9,  38 => 5,  94 => 18,  89 => 20,  85 => 16,  75 => 18,  68 => 14,  56 => 8,  87 => 16,  21 => 2,  26 => 6,  93 => 28,  88 => 20,  78 => 12,  46 => 7,  27 => 1,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 49,  166 => 71,  163 => 62,  158 => 67,  156 => 42,  151 => 23,  142 => 34,  138 => 54,  136 => 30,  121 => 28,  117 => 26,  105 => 28,  91 => 17,  62 => 10,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 14,  72 => 17,  69 => 11,  47 => 12,  40 => 10,  37 => 5,  22 => 27,  246 => 90,  157 => 56,  145 => 40,  139 => 31,  131 => 52,  123 => 27,  120 => 31,  115 => 43,  111 => 22,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 15,  74 => 14,  66 => 15,  55 => 8,  52 => 21,  50 => 10,  43 => 6,  41 => 6,  35 => 7,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 65,  193 => 73,  189 => 62,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 43,  154 => 24,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 34,  125 => 29,  122 => 43,  116 => 35,  112 => 42,  109 => 27,  106 => 26,  103 => 32,  99 => 28,  95 => 18,  92 => 21,  86 => 16,  82 => 15,  80 => 21,  73 => 19,  64 => 10,  60 => 9,  57 => 8,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 6,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}
