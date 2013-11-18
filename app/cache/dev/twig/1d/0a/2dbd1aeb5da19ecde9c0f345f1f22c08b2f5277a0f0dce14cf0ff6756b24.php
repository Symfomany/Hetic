<?php

/* HeticSiteBundle:Category:familles.html.twig */
class __TwigTemplate_1d0a2dbd1aeb5da19ecde9c0f345f1f22c08b2f5277a0f0dce14cf0ff6756b24 extends Twig_Template
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
        <h2><i class=\"glyphicon glyphicon-gift\"></i> Vos familles</h2>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familles"]) ? $context["familles"] : $this->getContext($context, "familles")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 8
            echo "            <div class=\"media\">
                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Action <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette catégory ?'));\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_famille", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Supprimer</a></li>
                        <li><a  href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_famille", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer</a></li>
                    </ul>
                </div>


                <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "name"), "html", null, true);
            echo "</a>
                        ";
            // line 22
            if ($this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "visible")) {
                // line 23
                echo "                            <span class=\"badge badge-success\">En ligne</span>
                        ";
            } else {
                // line 25
                echo "                                <span class=\"badge badge-danger\">Hors-Ligne</span>
                        ";
            }
            // line 27
            echo "                    </h4>
                    <p>";
            // line 28
            echo $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "cover");
            echo "</p>
                    <h4 class=\"pull-right\"><span class=\"label label-info\">";
            // line 29
            echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "produits")), "0"), "html", null, true);
            echo " produit(s)</span></h4>

                </div>
            </div>
            ";
            // line 33
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 34
                echo "                <hr class=\"clear fancy-line\"/>";
            }
            // line 35
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['famille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("hetic_site_add_famille");
        echo "\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter une famille</a>
        ";
        // line 38
        echo "            ";
        // line 39
        echo "            ";
        // line 40
        echo "            ";
        // line 41
        echo "            ";
        // line 42
        echo "            ";
        // line 43
        echo "        ";
        // line 44
        echo "        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Category:familles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  136 => 43,  134 => 42,  132 => 41,  130 => 40,  128 => 39,  126 => 38,  121 => 36,  107 => 35,  104 => 34,  102 => 33,  95 => 29,  91 => 28,  88 => 27,  84 => 25,  80 => 23,  78 => 22,  74 => 21,  65 => 15,  61 => 14,  53 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
