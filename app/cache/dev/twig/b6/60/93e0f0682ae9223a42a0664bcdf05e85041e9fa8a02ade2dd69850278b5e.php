<?php

/* HeticSiteBundle:Category:famille.html.twig */
class __TwigTemplate_b66093e0f0682ae9223a42a0664bcdf05e85041e9fa8a02ade2dd69850278b5e extends Twig_Template
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
        <h2><i class=\"glyphicon glyphicon-gift\"></i> Famille \"";
        // line 6
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name")), "html", null, true);
        echo "\"</h2>

        <div class=\"btn-group pull-right\">
            <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                <i class=\"glyphicon glyphicon-plus\"></i> Action <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                ";
        // line 13
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "visible")) {
            // line 14
            echo "                    <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir désactiver cette catégory ?'));\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_desactive_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-minus-sign\"></i> Désactiver</a></li>
                ";
        } else {
            // line 16
            echo "                    <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir activer cette catégory ?'));\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_active_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-ok\"></i> Activer</a></li>
                ";
        }
        // line 18
        echo "                <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette catégory ?'));\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Supprimer</a></li>
                <li><a  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer</a></li>
                <li><a  href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_image_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-camera\"></i> Photos</a></li>
            </ul>
        </div>
        <h3>La description</h3>
        <p>
            ";
        // line 25
        echo $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "description");
        echo "
        </p>

        <h3>Les produits</h3>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "produits"));
        $context['_iterated'] = false;
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
            // line 30
            echo "            <div class=\"media\">
                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Action <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        ";
            // line 36
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "isVisible")) {
                // line 37
                echo "                            <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir désactiver cet article?'));\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_desactive_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-minus-sign\"></i> Désactiver</a></li>
                        ";
            } else {
                // line 39
                echo "                            <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir activer cet article?'));\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_active_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-ok\"></i> Activer</a></li>
                        ";
            }
            // line 41
            echo "                        <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Supprimer</a></li>
                        <li><a  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer</a></li>
                        <li><a  href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_pictures_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-camera\"></i> Photos</a></li>
                        <li><a  href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visualize_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-search\"></i> Voir</a></li>

                    </ul>
                </div>
                <a class=\"pull-left\" href=\"#\">
                    ";
            // line 49
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "starPicture")) {
                // line 50
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, ((((isset($context["imgproducts"]) ? $context["imgproducts"] : $this->getContext($context, "imgproducts")) . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "starPicture"), "path")), "html", null, true);
                echo " \" />
                    ";
            } else {
                // line 52
                echo "                        <img class=\"media-object img-thumbnail\" src=\"http://placehold.it/150x75\" alt=\"...\">
                    ";
            }
            // line 54
            echo "                </a>

                <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "title"), "html", null, true);
            echo "</a>
                        ";
            // line 58
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "isVisible")) {
                // line 59
                echo "                            <span class=\"badge badge-success\">En ligne</span>
                        ";
            } else {
                // line 61
                echo "                            <span class=\"badge badge-danger\">Hors-Ligne</span>
                        ";
            }
            // line 63
            echo "                    </h4>

                    <p>";
            // line 65
            echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "cover");
            echo "</p>
                    <h3>
                        ";
            // line 67
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity") > 0)) {
                // line 68
                echo "                            <span class=\"label label-success pull-left\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity"), "html", null, true);
                echo " en stock</span>
                        ";
            } else {
                // line 70
                echo "                            <span class=\"label label-danger pull-left\">Rupture de stock</span>
                        ";
            }
            // line 72
            echo "                    </h3>
                    <p>
                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visualize_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" class=\"btn-xs btn btn-warning pull-right\"><i class=\"glyphicon glyphicon-search\"></i> Voir le produit</a>
                    </p>
                </div>
            </div>
            ";
            // line 78
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 79
                echo "                <hr class=\"clear fancy-line\"/>";
            }
            // line 80
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 81
            echo "            <div class=\"alert alert-dismissable alert-warning\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune produits pour le moment
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "

        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Category:famille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 86,  225 => 81,  212 => 80,  209 => 79,  207 => 78,  200 => 74,  196 => 72,  192 => 70,  186 => 68,  184 => 67,  179 => 65,  175 => 63,  171 => 61,  167 => 59,  165 => 58,  161 => 57,  156 => 54,  152 => 52,  146 => 50,  144 => 49,  136 => 44,  132 => 43,  128 => 42,  123 => 41,  117 => 39,  111 => 37,  109 => 36,  101 => 30,  83 => 29,  76 => 25,  68 => 20,  64 => 19,  59 => 18,  53 => 16,  47 => 14,  45 => 13,  35 => 6,  31 => 4,  28 => 3,);
    }
}
