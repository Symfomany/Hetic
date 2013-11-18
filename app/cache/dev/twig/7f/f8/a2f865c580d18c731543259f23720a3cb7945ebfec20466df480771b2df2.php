<?php

/* HeticSiteBundle:Product:visualizeproduct.html.twig */
class __TwigTemplate_7ff8a2f865c580d18c731543259f23720a3cb7945ebfec20466df480771b2df2 extends Twig_Template
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
    <div id=\"visualizeproduct\">
        <div class=\"well\">
            <a class=\"btn btn-danger pull-right\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("hetic_site_products");
        echo "\">&larr; Revenir à la liste de
                produit</a>

            <h1><i class=\"glyphicon glyphicon-search\"></i> \"";
        // line 18
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "title")), "html", null, true);
        echo "\"</h1>
            <hr class=\"clear fancy-line\">
            <h3>
                <strong>Titre:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "title"), "html", null, true);
        echo "
            </h3>
            ";
        // line 23
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "isVisible")) {
            // line 24
            echo "                <span class=\"label label-success\"><i class=\"glyphicon glyphicon-ok\"></i> Produit est en ligne</span>
            ";
        } else {
            // line 26
            echo "                <span class=\"label label-danger\"><i class=\"glyphicon glyphicon-remove\"></i> Hors-ligne</span>
            ";
        }
        // line 28
        echo "
            <p>
                <strong>Référence:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "reference", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "reference"), "Aucun pour le moment")) : ("Aucun pour le moment")), "html", null, true);
        echo "
            </p>

            <p>
                <strong>Prix HT: </strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixHT"), "html", null, true);
        echo "€
            </p>

            <p>
                <strong>Prix TTC: </strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixTTC"), "html", null, true);
        echo "€
            </p>

            <p>
                <strong>Quantité: </strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity"), "html", null, true);
        echo " produits
            </p>

            <p>
                <strong>Ean:</strong> ";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "ean", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "ean"), "Aucun pour le moment")) : ("Aucun pour le moment")), "html", null, true);
        echo "
            </p>

            <p>
                <strong>Service:</strong> ";
        // line 50
        echo twig_escape_filter($this->env, _twig_default_filter($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "service"), "Aucun pour le moment"), "html", null, true);
        echo "
            </p>

            <p>
                ";
        // line 54
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "etat") == 1)) {
            // line 55
            echo "                    <strong>Etat: </strong> Neuf
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "etat") == 2)) {
            // line 57
            echo "                    <strong>Etat: </strong> Occasion
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "etat") == 3)) {
            // line 59
            echo "                    <strong>Etat: </strong> Reconditionné
                ";
        }
        // line 61
        echo "            </p>

            <p>
                ";
        // line 64
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "status") == 1)) {
            // line 65
            echo "                    <strong>Status: </strong> Disponible à la vente
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "status") == 2)) {
            // line 67
            echo "                    <strong>Status: </strong> Juste afficher le prix
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "status") == 3)) {
            // line 69
            echo "                    <strong>Status: </strong> Gratuit
                ";
        }
        // line 71
        echo "            </p>

            <p>
                ";
        // line 74
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva") == 1)) {
            // line 75
            echo "                    <strong>TVA: </strong> 19.6%
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva") == 2)) {
            // line 77
            echo "                    <strong>TVA: </strong> 20%
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva") == 3)) {
            // line 79
            echo "                    <strong>TVA: </strong> 7%
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva") == 4)) {
            // line 81
            echo "                    <strong>TVA: </strong> 10%
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva") == 5)) {
            // line 83
            echo "                    <strong>TVA: </strong> 5.5%
                ";
        } elseif (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva") == 6)) {
            // line 85
            echo "                    <strong>TVA: </strong> 2.1%
                ";
        }
        // line 87
        echo "            </p>

            ";
        // line 89
        if ($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prodparent", array(), "any", false, true), "title", array(), "any", true, true)) {
            // line 90
            echo "                <p>
                    <strong>Produit parent: </strong> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prodparent"), "title"), "html", null, true);
            echo " <a
                            href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_visualize_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prodparent"), "id"))), "html", null, true);
            echo "\">Voir le
                        produit</a>
                </p>
            ";
        }
        // line 96
        echo "            <p>
                <strong>Accroche: </strong> ";
        // line 97
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "accroche", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "accroche"), "Aucun pour le moment")) : ("Aucun pour le moment")), "html", null, true);
        echo "
            </p>


            <hr class=\"fancy-line\" />
            <h3>Résumé</h3>
            <p>
                ";
        // line 104
        echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "cover");
        echo "
            </p>
            <h3>Description</h3>
            <p>
                 ";
        // line 108
        echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "content");
        echo "
            </p>
            <hr class=\"fancy-line\" />
            <h3>Images</h3>
            ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "images"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 113
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "title"), "html", null, true);
            echo "
                <a onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette photo?'));\"  href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_remove_image_product", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                <a onclick=\"return(confirm('Etes-vous sûr de vouloir mettre en avant cette photo?'));\"  href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_cover_image_product", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-heart\"></i></a>
                <img class=\"img-thumbnail\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, ((((isset($context["imgproducts"]) ? $context["imgproducts"] : $this->getContext($context, "imgproducts")) . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . "/") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path")), "html", null, true);
            echo "\">

                ";
            // line 118
            if ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "cover")) {
                // line 119
                echo "                    <span class=\"label label-success\">Cette photo a été mise en avant</span>
                ";
            }
            // line 121
            echo "
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune image pour le moment
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            <hr class=\"fancy-line\" />
            <h3>Accessoires</h3>
            ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "accesories"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["accessoire"]) {
            // line 131
            echo "                <div class=\"media\">
                    <a class=\"pull-left\" href=\"#\">
                        ";
            // line 133
            if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "starPicture")) {
                // line 134
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, ((((isset($context["imgproducts"]) ? $context["imgproducts"] : $this->getContext($context, "imgproducts")) . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "starPicture"), "path")), "html", null, true);
                echo " \" />
                        ";
            } else {
                // line 136
                echo "                            <img class=\"media-object img-thumbnail\" src=\"http://placehold.it/150x75\" alt=\"...\">
                        ";
            }
            // line 138
            echo "                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\"><a href=\"\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "title"), "html", null, true);
            echo "</a></h4>
                        <p>";
            // line 141
            echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "cover");
            echo "</p>
                        ";
            // line 142
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity") > 0)) {
                // line 143
                echo "                            <span class=\"badge badge-success pull-left\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantity"), "html", null, true);
                echo " en stock</span>
                        ";
            } else {
                // line 145
                echo "                            <span class=\"badge badge-danger pull-left\">Rupture de stock</span>
                        ";
            }
            // line 147
            echo "                        <p>
                            <a href=\"\" class=\"btn-xs btn btn-warning pull-right\"><i class=\"glyphicon glyphicon-search\"></i> Voir le produit</a>
                        </p>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 153
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune image pour le moment
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accessoire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "            <hr class=\"fancy-line\" />
            <h3>Articles relatifs</h3>
            ";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "articles"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 161
            echo "                <div class=\"media\">
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\"><a href=\"\">";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a></h4>
                        <p>";
            // line 164
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "cover");
            echo "</p>
                        <p>
                            <a href=\"\" class=\"btn-xs btn btn-warning pull-right\"><i class=\"glyphicon glyphicon-search\"></i> Voir le produit</a>
                        </p>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 171
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune articles pour le moment
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "
            <hr class=\"fancy-line\" />
            <h3>Catégorie</h3>
            <p>Catégorie principale : <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_category", array("id" => $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "category"), "id"))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "category"), "name"), "html", null, true);
        echo "</a></p>
            <p>Catégories secondaire: </p>
            <ul>
            ";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "cates"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 183
            echo "                   <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</a></li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 185
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune catégorie secondaire pour le moment
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "            </ul>
            <p>Familles: </p>
            <ul>
            ";
        // line 193
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "familles"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 194
            echo "                   <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_famille", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</a></li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 196
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune famille pour le moment
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "            </ul>

            <p>Mots clefs: </p>
            ";
        // line 204
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tags"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 205
            echo "            <h4><span class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "word"), "html", null, true);
            echo "</span></h4>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 207
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune tag pour le moment
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "

            <hr class=\"fancy-line\" />
            <h3>Fiches Techniques</h3>

            <table class=\"table-hover table table-bordered\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 226
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "metas"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 227
            echo "                        <tr>
                            <td>";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title"), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "content"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
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
            // line 233
            echo "                        <tr>
                            <div class=\"alert alert-dismissable alert-warning\">
                                <i class=\"glyphicon glyphicon-warning-sign\"></i> Aucune fiche pour le moment
                            </div>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                </tbody>
            </table>

            <a href=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i
                        class=\"glyphicon glyphicon-pencil\"></i> Editer ce produit</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Product:visualizeproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 242,  570 => 239,  559 => 233,  543 => 230,  539 => 229,  535 => 228,  532 => 227,  514 => 226,  498 => 212,  488 => 207,  480 => 205,  475 => 204,  470 => 201,  460 => 196,  450 => 194,  445 => 193,  440 => 190,  430 => 185,  420 => 183,  415 => 182,  407 => 179,  402 => 176,  392 => 171,  380 => 164,  376 => 163,  372 => 161,  367 => 160,  363 => 158,  353 => 153,  343 => 147,  339 => 145,  333 => 143,  331 => 142,  327 => 141,  323 => 140,  319 => 138,  315 => 136,  309 => 134,  307 => 133,  303 => 131,  298 => 130,  294 => 128,  284 => 123,  278 => 121,  274 => 119,  272 => 118,  267 => 116,  263 => 115,  259 => 114,  254 => 113,  249 => 112,  242 => 108,  235 => 104,  225 => 97,  222 => 96,  215 => 92,  211 => 91,  208 => 90,  206 => 89,  202 => 87,  198 => 85,  194 => 83,  190 => 81,  186 => 79,  182 => 77,  178 => 75,  176 => 74,  171 => 71,  167 => 69,  163 => 67,  159 => 65,  157 => 64,  152 => 61,  148 => 59,  144 => 57,  140 => 55,  138 => 54,  131 => 50,  124 => 46,  117 => 42,  110 => 38,  103 => 34,  96 => 30,  92 => 28,  88 => 26,  84 => 24,  82 => 23,  77 => 21,  71 => 18,  65 => 15,  60 => 12,  57 => 11,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
