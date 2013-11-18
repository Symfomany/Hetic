<?php

/* HeticSiteBundle:Default:topmenu.html.twig */
class __TwigTemplate_fa9fe303ddaa13d4a56436cc8ba116f9052ecf42706fdf92853c8833392f58a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topmenu' => array($this, 'block_topmenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('topmenu', $context, $blocks);
        // line 76
        echo "
";
    }

    // line 1
    public function block_topmenu($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"../\" class=\"navbar-brand\">Horus CMF</a>
                <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown ";
        // line 14
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_products") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_create_product"))) {
            echo "active";
        }
        echo "\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\"><i class=\"glyphicon glyphicon-gift\"></i>  Produits <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"themes\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("hetic_site_products");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Mes produits</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("hetic_site_create_product");
        echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Créer un produit</a></li>
                         </ul>
                    </li>
                    <li class=\"dropdown ";
        // line 21
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_add_famille") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_familles")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_categories")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "hetic_site_add_category"))) {
            echo "active";
        }
        echo "\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\"><i class=\"glyphicon glyphicon-folder-open\"></i>  Catégories<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("hetic_site_categories");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Gérer les catégories</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("hetic_site_add_category");
        echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Créer une catégorie</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("hetic_site_familles");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Mes familles</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("hetic_site_add_famille");
        echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Créer une famille</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\"><i class=\"glyphicon glyphicon-list-alt\"></i>  Pages <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"themes\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("hetic_site_products");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Mes produits</a></li>
                            <li><a tabindex=\"-1\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("hetic_site_create_product");
        echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Créer un produit</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\"><i class=\"glyphicon glyphicon-shopping-cart\"></i>  Commandes<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                            <li><a tabindex=\"-1\" href=\"./bootstrap.min.css\"><i class=\"glyphicon glyphicon-list\"></i> Gérer les catégories</a></li>
                            <li><a tabindex=\"-1\" href=\"./bootstrap.min.css\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Créer une catégorie</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\"><i class=\"glyphicon glyphicon-picture\"></i> Medias<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                            <li><a tabindex=\"-1\" href=\"./bootstrap.min.css\"><i class=\"glyphicon glyphicon-list\"></i> Gérer les médias</a></li>
                            <li><a tabindex=\"-1\" href=\"./bootstrap.min.css\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Créer un média</a></li>
                        </ul>
                    </li>


                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"configuration\"><i class=\"glyphicon glyphicon-cog\"></i> Configuration<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                            <li><a tabindex=\"-1\" href=\"./bootstrap.min.css\">Ma Boutique</a></li>
                            <li><a tabindex=\"-1\" href=\"./bootstrap.css\">Mon Compte</a></li>
                            <li class=\"divider\"></li>
                            <li><a tabindex=\"-1\" href=\"./variables.less\">Mon Catalogue</a></li>
                            <li><a tabindex=\"-1\" href=\"./variables.less\">Mon Contrat VAD</a></li>
                        </ul>
                    </li>
                    <li>
                        <a  href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"customisation\"><i class=\"glyphicon glyphicon-off\"></i> Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:topmenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 68,  95 => 34,  91 => 33,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  62 => 21,  56 => 18,  52 => 17,  44 => 14,  30 => 2,  27 => 1,  22 => 76,  20 => 1,);
    }
}
