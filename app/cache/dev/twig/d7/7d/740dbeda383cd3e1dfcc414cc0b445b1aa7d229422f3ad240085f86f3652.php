<?php

/* HeticSiteBundle:Category:editcategory.html.twig */
class __TwigTemplate_d77d740dbeda383cd3e1dfcc414cc0b445b1aa7d229422f3ad240085f86f3652 extends Twig_Template
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
    <div id=\"createcategory\">
        <a class=\"btn btn-danger pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("hetic_site_categories");
        echo "\">&larr; Revenir à la liste des
            catégories</a>

        <h1><i class=\"glyphicon glyphicon-pencil\"></i> Editer \"";
        // line 17
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name")), "html", null, true);
        echo "\"</h1>
        <hr class=\"clear fancy-line\">

        <form novalidate=\"novalidate\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
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
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
                </div>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <label for=\"title\">Articles</label>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articles"), 'widget');
        echo "
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articles"), 'errors');
        echo "
                </div>
            </div>
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <button class=\"btn btn-primary btn-large\" type=\"submit\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer
                cette catégorie
            </button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Category:editcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  137 => 57,  133 => 56,  123 => 49,  119 => 48,  109 => 41,  105 => 40,  95 => 33,  85 => 26,  76 => 20,  70 => 17,  64 => 14,  60 => 12,  57 => 11,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
