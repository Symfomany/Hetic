<?php

/* HeticSiteBundle:Category:editfamille.html.twig */
class __TwigTemplate_5a4f4dc1e2abd7d6c35cc0789fc62544c8c13cc7700717c0ed7a3088ff0b5c6e extends Twig_Template
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
            // asset "4c2c099_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c2c099_0") : $this->env->getExtension('assets')->getAssetUrl("js/4c2c099_product_1.js");
            // line 6
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "4c2c099"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c2c099") : $this->env->getExtension('assets')->getAssetUrl("js/4c2c099.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    <div id=\"createfamille\">
        <a class=\"btn btn-danger pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("hetic_site_familles");
        echo "\">&larr; Revenir à la liste des
            familles</a>

        <h1><i class=\"glyphicon glyphicon-pencil\"></i> Editer une famille</h1>
        <hr class=\"clear fancy-line\">

        <form novalidate=\"novalidate\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_famille", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id"))), "html", null, true);
        echo "\" method=\"post\">

            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <label for=\"title\">Titre</label>
                    <div class=\"input-group\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                        <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>

                    </div>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <label for=\"title\">Résumé</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'widget');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <label for=\"title\">Description</label>
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <label for=\"title\">Produits</label>
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "produits"), 'widget');
        echo "
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "produits"), 'errors');
        echo "
                </div>
            </div>
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <button class=\"btn btn-primary btn-large\" type=\"submit\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer
                cette famille
            </button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Category:editfamille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  133 => 56,  129 => 55,  119 => 48,  115 => 47,  106 => 41,  102 => 40,  92 => 33,  82 => 26,  73 => 20,  64 => 14,  60 => 12,  57 => 11,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
