<?php

/* HeticSiteBundle:Product:editproduct.html.twig */
class __TwigTemplate_151062848e72a9e5b6caac3c9a5836a78d54efcc8c479009619a20b76a5de54d extends Twig_Template
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
    <div id=\"createproduct\">
    <a class=\"btn btn-danger pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("hetic_site_products");
        echo "\">&larr; Revenir à la liste de
        produit</a>

    <h1><i class=\"glyphicon glyphicon-pencil\"></i> Editer \"";
        // line 17
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "title")), "html", null, true);
        echo "\"</h1>
    <hr class=\"clear fancy-line\">

    ";
        // line 20
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 21
            echo "        <div class=\"alert alert-dismissable alert-warning\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <strong><i class=\"glyphicon glyphicon-exclamation-sign\"></i> Attention!</strong> il y a des erreurs dans
            votre création de produit
        </div>
    ";
        }
        // line 27
        echo "
    <form novalidate=\"novalidate\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_site_edit_product", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" method=\"post\">

    <div class=\"bs-example bs-example-tabs\">
    <ul id=\"myTab\" class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#presentation\" data-toggle=\"tab\">Présentation</a></li>
        <li><a href=\"#prix\" data-toggle=\"tab\">Prix</a></li>
        <li><a href=\"#status\" data-toggle=\"tab\">Status</a></li>
        <li><a href=\"#categorie\" data-toggle=\"tab\">Catégorie</a></li>
        <li><a href=\"#referencement\" data-toggle=\"tab\">Référencement</a></li>
        <li><a href=\"#caracteristiques\" data-toggle=\"tab\">Fiches techniques</a></li>
        <li><a href=\"#extras\" data-toggle=\"tab\">Extras</a></li>
        ";
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "        ";
        // line 45
        echo "        ";
        // line 46
        echo "    </ul>
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane fade active in\" id=\"presentation\">
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <label for=\"title\">Titre</label>

                <div class=\"input-group\">
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>

                </div>
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
            </div>
            <div class=\"span6\">
                <label for=\"accroche\">Accroche</label>

                <div class=\"input-group\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accroche"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>
                </div>
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accroche"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <label for=\"reference\">Référence</label>

                <div class=\"input-group\">
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>
                </div>
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference"), 'errors');
        echo "


            </div>
            <div class=\"span6\">
                <label for=\"ean\">EAN</label>

                <div class=\"input-group\">
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>
                </div>
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean"), 'errors');
        echo "

            </div>
        </div>

        <label for=\"cover\">Résumé</label>
        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'errors');
        echo "
        <label for=\"content\">Description</label>
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'errors');
        echo "
        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isShop"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
        <p><label for=\"isShop\" class=\"pull-left\">Ce produit est ligne</label></p>

        <div class=\"clear\"></div>
    </div>
    <div class=\"tab-pane fade\" id=\"prix\">
        <div class=\"row-fluid\">
            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixHT"), 'errors');
        echo "
            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTTC"), 'errors');
        echo "
            ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva"), 'errors');
        echo "

            <div class=\"span2\">
                <label for=\"prixHT\">Prix HT (€)</label>

                <div class=\"input-group\">
                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixHT"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-euro\"></i></button>
                                      </span>
                </div>
            </div>
            <div class=\"span2\">
                <label for=\"prixTTC\">Prix TTC (€)</label>

                <div class=\"input-group\">
                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTTC"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-euro\"></i></button>
                                      </span>
                </div>
            </div>
            <div class=\"span2\">
                <label for=\"tva\">TVA (%)</label>
                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva"), 'widget');
        echo "
            </div>
        </div>
    </div>

    <div class=\"tab-pane fade\" id=\"status\">
        <div class=\"row-fluid\">
            ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'errors');
        echo "
            ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication"), 'errors');
        echo "

            <div class=\"span3\">
                ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 0, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"etat_0\" class=\"pull-left\">Neuf</label>
            </div>
            <div class=\"span3\">
                ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 1, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"etat_1\" class=\"pull-left\">Occasion</label>
            </div>
            <div class=\"span3\">
                ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 2, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"etat_2\" class=\"pull-left\">Reconditionné</label>
            </div>
            <div class=\"span3\">
                <label for=\"quantity\" class=\"pull-left\">Quantité (nombre)</label>
                ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'widget', array("attr" => array("class" => "pull-left")));
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\">
                ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 0, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"status_0\" class=\"pull-left\">Disponible à la vente</label>
            </div>
            <div class=\"span3\">
                ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 1, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"status_1\" class=\"pull-left\">Juste afficher le prix</label>
            </div>
            <div class=\"span3\">
                ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 2, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"status_2\" class=\"pull-left\">Gratuit</label>
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\">
                <label for=\"datePublication\" class=\"pull-left\">Date de disponibilité</label>
                ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"categorie\">
        <div class=\"row-fluid\">
            <div class=\"span4\">
                <label for=\"category\">Catégorie principal</label>
                ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget', array("attr" => array("class" => "rad")));
        echo "
            </div>
            <div class=\"span4\">
                <label for=\"prodparent\">Produit parent</label>
                ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prodparent"), 'widget');
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"status_0\">Catégorie secondaires</label>
                ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cates"), 'widget', array("attr" => array("class" => "rad")));
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"accesories\">Produit accessoires</label>
                ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accesories"), 'widget');
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"tags\">Mot-Clefs</label>
                ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags"), 'widget', array("attr" => array("class" => "rad")));
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"tags\">Famille</label>
                ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familles"), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"referencement\">
        <div class=\"row-fluid\">
            <div class=\"span10\">
                ";
        // line 238
        if ((!twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seo")))) {
            // line 239
            echo "                    <label for=\"\">Titre</label>

                    <div class=\"input-group\">
                        ";
            // line 242
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seo"), 0, array(), "array"), "title"), 'widget', array("attr" => array("class" => "")));
            echo "
                                        <span class=\"input-group-btn\">
                                              <button class=\"btn btn-search btn-primary\"><i
                                                          class=\"glyphicon glyphicon-flash\"></i></button>
                                          </span>
                    </div>
                    <label for=\"\">Mot-Clefs (séparé par des virgules)</label>

                    <div class=\"input-group\">
                        ";
            // line 251
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seo"), 0, array(), "array"), "keywords"), 'widget', array("attr" => array("class" => "")));
            echo "
                    </div>
                    <label for=\"\">Description</label>

                    <div class=\"input-group\">
                        ";
            // line 256
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seo"), 0, array(), "array"), "description"), 'widget', array("attr" => array("class" => "")));
            echo "
                    </div>
                ";
        } else {
            // line 259
            echo "                    <div class=\"alert alert-dismissable alert-danger\">
                        <i class=\"glyphicon glyphicon-remove\"></i> Aucun SEO de prévu.
                    </div>
                ";
        }
        // line 263
        echo "            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"caracteristiques\">
        <div class=\"row-fluid\">
            <div class=\"span10\">
                <div class=\"metas\" data-prototype=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metas"), "vars"), "prototype"), 'widget'));
        echo "\">
                    ";
        // line 270
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metas"));
        foreach ($context['_seq'] as $context["_key"] => $context["metas"]) {
            // line 271
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "title"), 'row');
            echo "
                        ";
            // line 272
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "content"), 'row');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                </div>

            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"extras\">
        ";
        // line 280
        if (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "html"))))) {
            // line 281
            echo "            <h3>La vidéo de votre produit</h3>
            <div class=\"row-fluid well\">
                <div class=\"span12\">
                    ";
            // line 284
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "html");
            echo "
                </div>
            </div>

        ";
        }
        // line 289
        echo "
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"service\">Service inclus</label>
                ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service"), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <label for=\"video\">Vidéo de présentation</label>
                ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video"), 'widget', array("attr" => array("class" => "")));
        echo "
                ";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video"), 'errors');
        echo "
            </div>
            <div class=\"span6\">
                <label for=\"extras\">Commentaire</label>
                ";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "extras"), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"articles\">Articles associés</label>
                ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articles"), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>

    </div>

    </div>
    </div>
    </div>


    <button class=\"btn btn-primary btn-large\" type=\"submit\"><i class=\"glyphicon glyphicon-pencil\"></i> Editer ce produit
    </button>
    </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Product:editproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 310,  531 => 304,  524 => 300,  520 => 299,  511 => 293,  505 => 289,  497 => 284,  492 => 281,  490 => 280,  482 => 274,  474 => 272,  469 => 271,  465 => 270,  461 => 269,  453 => 263,  447 => 259,  441 => 256,  433 => 251,  421 => 242,  416 => 239,  414 => 238,  404 => 231,  394 => 224,  384 => 217,  374 => 210,  364 => 203,  357 => 199,  346 => 191,  336 => 184,  329 => 180,  322 => 176,  314 => 171,  306 => 166,  299 => 162,  292 => 158,  286 => 155,  282 => 154,  272 => 147,  260 => 138,  246 => 127,  237 => 121,  233 => 120,  229 => 119,  219 => 112,  215 => 111,  211 => 110,  206 => 108,  202 => 107,  193 => 101,  184 => 95,  173 => 87,  164 => 81,  153 => 73,  144 => 67,  135 => 61,  125 => 54,  115 => 46,  113 => 45,  111 => 44,  109 => 43,  107 => 42,  105 => 41,  103 => 40,  89 => 28,  86 => 27,  78 => 21,  76 => 20,  70 => 17,  64 => 14,  60 => 12,  57 => 11,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
