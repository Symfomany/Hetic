<?php

/* HeticSiteBundle:Default:index.html.twig */
class __TwigTemplate_b5b5d4acc04eb27f81f935a3fd95fa94f45b88a2730e6e0381385b16b4c0e1bc extends Twig_Template
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
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cf7b8d6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6_0") : $this->env->getExtension('assets')->getAssetUrl("js/cf7b8d6_index_1.js");
            // line 6
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "cf7b8d6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6") : $this->env->getExtension('assets')->getAssetUrl("js/cf7b8d6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"\" id=\"orders\">
        <h2><i class=\"glyphicon glyphicon-th-large\"></i> Vos Dernières Commandes</h2>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            <div class=\"media\">
                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Action <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a>Traiter</a></li>
                        <li><a>Annuler</a></li>
                    </ul>
                </div>
                <a class=\"pull-left\" href=\"#\">
                    <img class=\"media-object\" src=\"http://placekitten.com/g/150/75\" alt=\"...\">
                </a>

                <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"\">Media heading</a></h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan est et sapien pretium
                        pretium. Pellentesque et faucibus eros. Vivamus ut sem turpis.</p>

                    <p>
                        <a href=\"\" class=\"btn-xs btn btn-danger pull-right\"><i
                                    class=\"glyphicon glyphicon-chevron-right\"></i> Voir la commande</a>
                    </p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  72 => 16,  68 => 15,  63 => 12,  60 => 11,  55 => 8,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
