<?php

/* HeticSiteBundle:Default:articlesingle.html.twig */
class __TwigTemplate_5ac20a1a2183add240f4e4c423342bb84eda948da94b784c866b2e0d0be20c38 extends Twig_Template
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
        echo "    <h3 class=\"text-success\">Titre: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h3>
    <h4 class=\"text-warning\">Category: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"), "name"), "html", null, true);
        echo " </h4>
    <h5 class=\"text-info\">Date de publication de l'article: ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "datePublication"), "d-m-Y"), "html", null, true);
        echo "</h5>
    <h4>Description de Category: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"), "description"), "html", null, true);
        echo " </h4>
    <p class=\"text-success\">Tags associés:
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "            <div class=\"badge\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "word"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_tag_remove", array("id" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "id"), "aid" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></a> </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </p>
    <hr />
    <div class=\"hero-unit\">
        <p>Description: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 37
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "isVisible") == "true")) {
            // line 38
            echo "        <p class=\"text-success\">Cet article est visible</p>
    ";
        } else {
            // line 40
            echo "        <p class=\"text-error\">Cet article est invisible</p>
    ";
        }
        // line 42
        echo "

    <ul class=\"nav nav-pills span10\">
        <li class=\"active\">
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\">
                <i class=\"icon-remove\"></i>
            </a>
        </li>
        <li>
            ";
        // line 51
        if (!twig_in_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "stars"), "method"))) {
            // line 52
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_add_star", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                    <i class=\"icon-star\"></i>
                </a>
            ";
        } else {
            // line 56
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_star", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                    <i class=\"icon-star-empty\"></i>
                </a>
            ";
        }
        // line 60
        echo "        </li>
        <li>
            ";
        // line 62
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "isVisible") == false)) {
            // line 63
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visible", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                    <i class=\"icon-ok\"></i>
                </a>
            ";
        } else {
            // line 67
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_invisible", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                    <i class=\"icon-ban-circle\"></i>
                </a>
            ";
        }
        // line 71
        echo "        </li>
        <li>
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\">
                <i class=\"icon-pencil\"></i>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_more", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\">
                <i class=\"icon-plus\"></i>
            </a>
            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_less", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\">
                <i class=\"icon-minus\"></i>
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:articlesingle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 81,  233 => 78,  225 => 73,  221 => 71,  213 => 67,  205 => 63,  203 => 62,  199 => 60,  191 => 56,  183 => 52,  181 => 51,  173 => 46,  167 => 42,  163 => 40,  159 => 38,  157 => 37,  151 => 34,  146 => 31,  135 => 29,  131 => 28,  126 => 26,  122 => 25,  118 => 24,  113 => 23,  110 => 22,  94 => 18,  90 => 17,  85 => 16,  82 => 15,  77 => 12,  63 => 10,  59 => 9,  56 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
