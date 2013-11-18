<?php

/* HeticSiteBundle:Category:picturecategory.html.twig */
class __TwigTemplate_5841d6180190d65cce0b066aa540360d145dce239782e89d86dffc73179368c3 extends Twig_Template
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
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
    <div id=\"createproduct\">
    <a class=\"btn btn-danger pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hetic_site_categories");
        echo "\">&larr; Revenir à la liste de
        catégories</a>

    <h1><i class=\"glyphicon glyphicon-camera\"></i> Photos \"";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name")), "html", null, true);
        echo "\"</h1>
    <hr class=\"clear fancy-line\">
    <h3>Les photos</h3>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "images"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "title"), "html", null, true);
            echo "
            <a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette photo?'));\"  href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_image_category", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\"></i></a>
            <a onclick=\"return(confirm('Etes-vous sûr de vouloir mettre en avant cette photo?'));\"  href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_cover_image_category", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-heart\"></i></a>
            <img class=\"img-thumbnail\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, ((((isset($context["imgcategories"]) ? $context["imgcategories"] : $this->getContext($context, "imgcategories")) . $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id")) . "/") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path")), "html", null, true);
            echo "\">

            ";
            // line 23
            if ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "cover")) {
                // line 24
                echo "                <span class=\"label label-success\">Cette photo a été mise en avant</span>
            ";
            }
            // line 26
            echo "
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "            <div class=\"alert alert-dismissable alert-warning\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune accessoires pour le moment
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    <h3>Ajouter une photo</h3>
    <form enctype='multipart/form-data' action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_image_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" method=\"post\">
    <label for=\"title\">Légende</label>
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
    <label for=\"file\">Fichier</label>
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
    <button class=\"btn btn-primary btn-large\" type=\"submit\"><i class=\"glyphicon glyphicon-ok\"></i> Valider
    </button>
    </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Category:picturecategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  111 => 36,  106 => 34,  103 => 33,  93 => 28,  87 => 26,  83 => 24,  81 => 23,  76 => 21,  72 => 20,  68 => 19,  63 => 18,  58 => 17,  52 => 14,  46 => 11,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
