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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cf7b8d6_index_1.js");
            // line 6
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
        // line 8
        echo "
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aee4d46_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aee4d46_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/aee4d46_index_1.js");
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "aee4d46"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aee4d46") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/aee4d46.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        <div class=\"row-fluid\">
            ";
        // line 16
        $this->env->loadTemplate("HeticSiteBundle:Default:search_partial.html.twig")->display($context);
        // line 17
        echo "
            <div class=\"span4\">
                <h2>Ajout d'un article</h2>
                    <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("hetic_site_hello");
        echo "\" method=\"post\" id=\"addarticle\">
                        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                    </form>
                ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HeticSiteBundle:Default:categorycreate"));
        echo "
            </div><!--/span-->
            <div class=\"span8\">
                <h2>Liste des Catégories</h2>
                <div id=\"action_cates\">
                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "                    <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_category_sorted", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name")), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
                <hr class=\"clear\"/>
                <h2>Liste des Articles par popularité</h2>
                ";
        // line 34
        if (array_key_exists("category", $context)) {
            echo "<h3>Catégory courante: ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name")), "html", null, true);
            echo "</h3>";
        }
        // line 35
        echo "                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <h4>Tags</h4>
                        <ul class=\"nav\">
                            ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 41
                echo "                                    <li> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_articles_by_tags", array("tag" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "word"))), "html", null, true);
                echo "\"><i class=\"icon-comment\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "word"), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </ul>
                    </div>
                </div>
                ";
        // line 48
        echo "                    ";
        // line 49
        echo "                ";
        // line 50
        echo "                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th><a href=\"\">#</a></th>
                            <th>Titre</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Contenu</th>
                            <th>Point</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 63
            echo "                        <tr>
                            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "</a></td>
                            <td><h5>
                                 <a ";
            // line 66
            if (twig_in_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "stars"), "method"))) {
                echo "class=\"text-success\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title")), "html", null, true);
            echo "</a>
                                </h5></td>
                            <td><h5><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_category_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"), "name")), "html", null, true);
            echo "</a></h5></td>
                            <td>
                                ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 71
                echo "                                    <div class=\"btn btn-small\">
                                        <i class=\"icon-tags\"></i>
                                        <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_articles_by_cat", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"), "id"))), "html", null, true);
                echo "\">
                                            ";
                // line 74
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "word")), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 78
                echo "                                    <div class=\"alerting\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        <strong>Attention</strong> Aucun tags pour le moment
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                            </td>
                            <td><p class=\"content\" style=\"font-size: 11px\">";
            // line 84
            echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), 200, "...");
            echo "</p></td>
                            <td><span class=\"badge badge-info\">";
            // line 85
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "point", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "point"), 0)) : (0)), "html", null, true);
            echo "</span></td>
                            <td>
                                <p class=\"\">
                                    <a class=\"remove\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                                        <i class=\"icon-remove\"></i>
                                    </a>
                                </p>
                                <p class=\"\">
                                    ";
            // line 93
            if (!twig_in_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "stars"), "method"))) {
                // line 94
                echo "                                        <a class=\"star\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_add_star", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">
                                            <i class=\"icon-star\"></i>
                                        </a>
                                    ";
            } else {
                // line 98
                echo "                                        <a class=\"star\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_star", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">
                                            <i class=\"icon-star-empty\"></i>
                                        </a>
                                    ";
            }
            // line 102
            echo "                                </p>
                                <p class=\"\">
                                    ";
            // line 104
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "isVisible") == false)) {
                // line 105
                echo "                                        <a class=\"visible\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visible", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">
                                            <i class=\"icon-ok\"></i>
                                        </a>
                                    ";
            } else {
                // line 109
                echo "                                        <a class=\"visible\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_invisible", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">
                                            <i class=\"icon-ban-circle\"></i>
                                        </a>
                                    ";
            }
            // line 113
            echo "                                </p>
                                <p class=\"\">
                                    <a class=\"edit\"  href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                                        <i class=\"icon-pencil\"></i>
                                    </a>
                                </p>
                                <p class=\"\">
                                    <a class=\"plus\"  href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_more", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                                        <i class=\"icon-plus\"></i>
                                    </a>
                                    <a class=\"less\" href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_article_less", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">
                                        <i class=\"icon-minus\"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                    <tfoot>
                    <tr>
                        <th><a href=\"\">#</a></th>
                        <th>Titre</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Contenu</th>
                        <th>Point</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
                ";
        // line 144
        echo "                    ";
        // line 145
        echo "                ";
        // line 146
        echo "            </div>
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
        return array (  364 => 146,  362 => 145,  360 => 144,  345 => 130,  332 => 123,  326 => 120,  318 => 115,  314 => 113,  306 => 109,  298 => 105,  296 => 104,  292 => 102,  284 => 98,  276 => 94,  274 => 93,  266 => 88,  260 => 85,  256 => 84,  253 => 83,  243 => 78,  234 => 74,  230 => 73,  226 => 71,  221 => 70,  214 => 68,  203 => 66,  196 => 64,  193 => 63,  189 => 62,  175 => 50,  173 => 49,  171 => 48,  166 => 44,  160 => 43,  149 => 41,  144 => 40,  140 => 39,  134 => 35,  128 => 34,  123 => 31,  112 => 29,  108 => 28,  100 => 23,  95 => 21,  91 => 20,  86 => 17,  84 => 16,  81 => 15,  78 => 14,  62 => 10,  58 => 9,  55 => 8,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
