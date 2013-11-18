<?php

/* HeticSiteBundle:Category:categories.html.twig */
class __TwigTemplate_c3fa16de649d7f026705978cc7a7e184058417f1f2d553912ae4fbc1604d8998 extends Twig_Template
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
        <h2><i class=\"glyphicon glyphicon-gift\"></i> Vos catégories</h2>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "            <div class=\"media\">
                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Action <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        ";
            // line 14
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "visible")) {
                // line 15
                echo "                            <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir désactiver cette catégory ?'));\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_desactive_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-minus-sign\"></i> Désactiver</a></li>
                        ";
            } else {
                // line 17
                echo "                            <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir activer cette catégory ?'));\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_active_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-ok\"></i> Activer</a></li>
                        ";
            }
            // line 19
            echo "                        <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette catégory ?'));\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Supprimer</a></li>
                        <li><a  href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer</a></li>
                        <li><a  href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_image_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-camera\"></i> Photos</a></li>
                        <li><a  href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-search\"></i> Voir</a></li>
                    </ul>
                </div>
                <a class=\"pull-left\" href=\"#\">
                    ";
            // line 26
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "starPicture")) {
                // line 27
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, ((((isset($context["imgcategories"]) ? $context["imgcategories"] : $this->getContext($context, "imgcategories")) . $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "starPicture"), "path")), "html", null, true);
                echo " \" />
                    ";
            } else {
                // line 29
                echo "                        <img class=\"media-object img-thumbnail\" src=\"http://placehold.it/150x75\" alt=\"...\">
                    ";
            }
            // line 31
            echo "                </a>

                <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a>
                        ";
            // line 35
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "visible")) {
                // line 36
                echo "                            <span class=\"badge badge-success\">En ligne</span>
                        ";
            } else {
                // line 38
                echo "                                <span class=\"badge badge-danger\">Hors-Ligne</span>
                        ";
            }
            // line 40
            echo "                    </h4>
                    <p>";
            // line 41
            echo $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "cover");
            echo "</p>
                </div>
            </div>
            ";
            // line 44
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 45
                echo "                <hr class=\"clear fancy-line\"/>";
            }
            // line 46
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("hetic_site_add_category");
        echo "\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter une catégorie</a>
        ";
        // line 49
        echo "            ";
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        // line 53
        echo "            ";
        // line 54
        echo "        ";
        // line 55
        echo "        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Category:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  171 => 54,  169 => 53,  167 => 52,  165 => 51,  163 => 50,  161 => 49,  156 => 47,  142 => 46,  139 => 45,  137 => 44,  131 => 41,  128 => 40,  124 => 38,  120 => 36,  118 => 35,  112 => 34,  107 => 31,  103 => 29,  97 => 27,  95 => 26,  88 => 22,  84 => 21,  80 => 20,  75 => 19,  69 => 17,  63 => 15,  61 => 14,  53 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
