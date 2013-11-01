<?php

/* HeticSiteBundle:Default:edit.html.twig */
class __TwigTemplate_c9293a785325bf23313943e9e152db59b68ea964eff3f3e93083ae1d72f77915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSiteBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'citation' => array($this, 'block_citation'),
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
        // line 12
        echo "
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cf7b8d6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cf7b8d6_index_1.js");
            // line 18
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

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayBlock('citation', $context, $blocks);
        // line 26
        echo "        <div class=\"row-fluid\">
            <div class=\"span7\">
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                    <div class=\"flash-notice alert alert-block\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </form>
            </div><!--/span-->
        </div><!--/row-->
";
    }

    // line 23
    public function block_citation($context, array $blocks = array())
    {
        // line 24
        echo "        <h1>Editer mon article</h1>
    ";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  114 => 23,  34 => 4,  23 => 1,  113 => 34,  84 => 22,  53 => 5,  340 => 137,  338 => 136,  336 => 135,  321 => 121,  308 => 114,  302 => 111,  290 => 104,  282 => 100,  274 => 96,  272 => 95,  256 => 85,  250 => 82,  233 => 75,  216 => 68,  211 => 67,  197 => 63,  190 => 61,  167 => 46,  165 => 45,  160 => 41,  134 => 36,  118 => 29,  90 => 19,  81 => 15,  58 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 106,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 90,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 47,  140 => 55,  132 => 51,  128 => 30,  107 => 27,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 65,  179 => 69,  159 => 61,  143 => 38,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 6,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 18,  68 => 14,  56 => 9,  87 => 23,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 12,  46 => 7,  27 => 4,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 23,  142 => 34,  138 => 37,  136 => 56,  121 => 28,  117 => 26,  105 => 40,  91 => 17,  62 => 10,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 11,  47 => 12,  40 => 8,  37 => 5,  22 => 2,  246 => 81,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 22,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 15,  74 => 14,  66 => 15,  55 => 8,  52 => 21,  50 => 10,  43 => 6,  41 => 6,  35 => 7,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 24,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 29,  122 => 31,  116 => 35,  112 => 42,  109 => 27,  106 => 26,  103 => 26,  99 => 28,  95 => 18,  92 => 21,  86 => 16,  82 => 22,  80 => 21,  73 => 19,  64 => 10,  60 => 9,  57 => 8,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 5,  36 => 5,  33 => 6,  30 => 7,);
    }
}
