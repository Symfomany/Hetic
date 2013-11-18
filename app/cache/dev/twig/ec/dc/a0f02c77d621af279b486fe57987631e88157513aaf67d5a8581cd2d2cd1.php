<?php

/* HeticSiteBundle:Product:products.html.twig */
class __TwigTemplate_ecdca0f02c77d621af279b486fe57987631e88157513aaf67d5a8581cd2d2cd1 extends Twig_Template
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
        echo "
    <div class=\"\" id=\"products\">
        <h2><i class=\"glyphicon glyphicon-gift\"></i> Vos produits</h2>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            echo "            <div class=\"media\">
                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Action <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        ";
            // line 14
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "isVisible")) {
                // line 15
                echo "                            <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir désactiver cet article?'));\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_desactive_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-minus-sign\"></i> Désactiver</a></li>
                        ";
            } else {
                // line 17
                echo "                            <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir activer cet article?'));\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_active_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-ok\"></i> Activer</a></li>
                        ";
            }
            // line 19
            echo "                        <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Supprimer</a></li>
                        <li><a  href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer</a></li>
                        <li><a  href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_pictures_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-camera\"></i> Photos</a></li>
                        <li><a  href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visualize_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-search\"></i> Voir</a></li>

                    </ul>
                </div>
                <a class=\"pull-left\" href=\"#\">
                    ";
            // line 27
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "starPicture")) {
                // line 28
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, ((((isset($context["imgproducts"]) ? $context["imgproducts"] : $this->getContext($context, "imgproducts")) . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "starPicture"), "path")), "html", null, true);
                echo " \" />
                    ";
            } else {
                // line 30
                echo "                        <img class=\"media-object img-thumbnail\" src=\"http://placehold.it/150x75\" alt=\"...\">
                    ";
            }
            // line 32
            echo "                </a>

                <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visualize_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "title"), "html", null, true);
            echo "</a> de <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_category", array("id" => $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "category"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "category"), "name"), "html", null, true);
            echo "</a>
                        ";
            // line 36
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "isVisible")) {
                // line 37
                echo "                            <span class=\"badge badge-success\">En ligne</span>
                        ";
            } else {
                // line 39
                echo "                                <span class=\"badge badge-danger\">Hors-Ligne</span>
                        ";
            }
            // line 41
            echo "                    </h4>

                    <p>";
            // line 43
            echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "cover");
            echo "</p>
                    <h3>
                        ";
            // line 45
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity") > 0)) {
                // line 46
                echo "                            <span class=\"label label-success pull-left\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity"), "html", null, true);
                echo " en stock</span>
                        ";
            } else {
                // line 48
                echo "                            <span class=\"label label-danger pull-left\">Rupture de stock</span>
                        ";
            }
            // line 50
            echo "                    </h3>
                    <p>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visualize_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" class=\"btn-xs btn btn-warning pull-right\"><i class=\"glyphicon glyphicon-search\"></i> Voir le produit</a>
                    </p>
                </div>
            </div>
            ";
            // line 56
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 57
                echo "                <hr class=\"clear fancy-line\"/>";
            }
            // line 58
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("hetic_site_create_product");
        echo "\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un produit</a>
        ";
        // line 61
        echo "            ";
        // line 62
        echo "            ";
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        // line 66
        echo "        ";
        // line 67
        echo "        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Product:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 67,  199 => 66,  197 => 65,  195 => 64,  193 => 63,  191 => 62,  189 => 61,  184 => 59,  170 => 58,  167 => 57,  165 => 56,  158 => 52,  154 => 50,  150 => 48,  144 => 46,  142 => 45,  137 => 43,  133 => 41,  129 => 39,  125 => 37,  123 => 36,  113 => 35,  108 => 32,  104 => 30,  98 => 28,  96 => 27,  88 => 22,  84 => 21,  80 => 20,  75 => 19,  69 => 17,  63 => 15,  61 => 14,  53 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
