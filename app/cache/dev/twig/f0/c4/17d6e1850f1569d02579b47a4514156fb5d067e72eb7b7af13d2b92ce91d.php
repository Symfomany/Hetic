<?php

/* HeticSiteBundle:Product:createproduct.html.twig */
class __TwigTemplate_f0c417d6e1850f1569d02579b47a4514156fb5d067e72eb7b7af13d2b92ce91d extends Twig_Template
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
        echo "\">&larr; Revenir à la liste de produit</a>

    <h1><i class=\"glyphicon glyphicon-plus\"></i> Créer un produit</h1>
    <hr class=\"clear fancy-line\">

    ";
        // line 19
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 20
            echo "        <div class=\"alert alert-dismissable alert-warning\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <strong><i class=\"glyphicon glyphicon-exclamation-sign\"></i> Attention!</strong> il y a des erreurs dans votre création de produit
        </div>
    ";
        }
        // line 25
        echo "
    <form novalidate=\"novalidate\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("hetic_site_create_product");
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
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "    </ul>
    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane fade active in\" id=\"presentation\">
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <label for=\"title\">Titre</label>

                <div class=\"input-group\">
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>

                </div>
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
            </div>
            <div class=\"span6\">
                <label for=\"accroche\">Accroche</label>

                <div class=\"input-group\">
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accroche"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>
                </div>
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accroche"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <label for=\"reference\">Référence</label>

                <div class=\"input-group\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>
                </div>
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference"), 'errors');
        echo "


            </div>
            <div class=\"span6\">
                <label for=\"ean\">EAN</label>

                <div class=\"input-group\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean"), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                                          <button class=\"btn btn-search btn-primary\"><i
                                                      class=\"glyphicon glyphicon-pencil\"></i></button>
                                      </span>
                </div>
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ean"), 'errors');
        echo "

            </div>
        </div>

        <label for=\"cover\">Résumé</label>
        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'errors');
        echo "
        <label for=\"content\">Description</label>
        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'errors');
        echo "
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVisible"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
        <p><label for=\"isVisible\" class=\"pull-left\">Ce produit est ligne</label></p>

        <div class=\"clear\"></div>
    </div>
    <div class=\"tab-pane fade\" id=\"prix\">
        <div class=\"row-fluid\">
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixHT"), 'errors');
        echo "
            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTTC"), 'errors');
        echo "
            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva"), 'errors');
        echo "

            <div class=\"span2\">
                <label for=\"prixHT\">Prix HT (€)</label>

                <div class=\"input-group\">
                    ";
        // line 125
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
        // line 136
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
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva"), 'widget');
        echo "
            </div>
        </div>
    </div>

    <div class=\"tab-pane fade\" id=\"status\">
        <div class=\"row-fluid\">
            ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'errors');
        echo "
            ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication"), 'errors');
        echo "

            <div class=\"span3\">
                ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 0, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"etat_0\" class=\"pull-left\">Neuf</label>
            </div>
            <div class=\"span3\">
                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 1, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"etat_1\" class=\"pull-left\">Occasion</label>
            </div>
            <div class=\"span3\">
                ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 2, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"etat_2\" class=\"pull-left\">Reconditionné</label>
            </div>
            <div class=\"span3\">
                <label for=\"quantity\" class=\"pull-left\">Quantité (nombre)</label>
                ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'widget', array("attr" => array("class" => "pull-left")));
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\">
                ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 0, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"status_0\" class=\"pull-left\">Disponible à la vente</label>
            </div>
            <div class=\"span3\">
                ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 1, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"status_1\" class=\"pull-left\">Juste afficher le prix</label>
            </div>
            <div class=\"span3\">
                ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 2, array(), "array"), 'widget', array("attr" => array("class" => "rad pull-left")));
        echo "
                <label for=\"status_2\" class=\"pull-left\">Gratuit</label>
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span3\">
                <label for=\"datePublication\" class=\"pull-left\">Date de disponibilité</label>
                ";
        // line 189
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
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget', array("attr" => array("class" => "rad")));
        echo "
            </div>
            <div class=\"span4\">
                <label for=\"prodparent\">Produit parent</label>
                ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prodparent"), 'widget');
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"status_0\">Catégorie secondaires</label>
                ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cates"), 'widget', array("attr" => array("class" => "rad")));
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"accesories\">Produit accessoires</label>
                ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accesories"), 'widget');
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"tags\">Mot-Clefs</label>
                ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags"), 'widget', array("attr" => array("class" => "rad")));
        echo "
            </div>
        </div>
        <p></p>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"tags\">Famille</label>
                ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "familles"), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"referencement\">
        <div class=\"row-fluid\">
            <div class=\"span10\">
                <label for=\"\">Titre</label>

                <div class=\"input-group\">
                    ";
        // line 239
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
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seo"), 0, array(), "array"), "keywords"), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
                <label for=\"\">Description</label>

                <div class=\"input-group\">
                    ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seo"), 0, array(), "array"), "description"), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"caracteristiques\">
        <div class=\"row-fluid\">
            <div class=\"span10\">
                <div class=\"metas\" data-prototype=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metas"), "vars"), "prototype"), 'widget'));
        echo "\">
                    ";
        // line 262
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metas"));
        foreach ($context['_seq'] as $context["_key"] => $context["metas"]) {
            // line 263
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "title"), 'row');
            echo "
                            ";
            // line 264
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "content"), 'row');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                </div>

            </div>
        </div>
    </div>
    <div class=\"tab-pane fade\" id=\"extras\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"service\">Service inclus</label>
                ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service"), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <label for=\"video\">Vidéo de présentation</label>
                ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video"), 'widget', array("attr" => array("class" => "")));
        echo "
                ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video"), 'errors');
        echo "

            </div>
            <div class=\"span6\">
                <label for=\"extras\">Commentaire</label>
                ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "extras"), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <label for=\"articles\">Articles associés</label>
                ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articles"), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>

    </div>

    </div>
    </div>
    </div>


    <button class=\"btn btn-primary btn-large\" type=\"submit\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter ce
        produit
    </button>
    </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Product:createproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 293,  496 => 287,  488 => 282,  484 => 281,  475 => 275,  464 => 266,  456 => 264,  451 => 263,  447 => 262,  443 => 261,  432 => 253,  424 => 248,  412 => 239,  399 => 229,  389 => 222,  379 => 215,  369 => 208,  359 => 201,  352 => 197,  341 => 189,  331 => 182,  324 => 178,  317 => 174,  309 => 169,  301 => 164,  294 => 160,  287 => 156,  281 => 153,  277 => 152,  267 => 145,  255 => 136,  241 => 125,  232 => 119,  228 => 118,  224 => 117,  214 => 110,  210 => 109,  206 => 108,  201 => 106,  197 => 105,  188 => 99,  179 => 93,  168 => 85,  159 => 79,  148 => 71,  139 => 65,  130 => 59,  120 => 52,  110 => 44,  108 => 43,  106 => 42,  104 => 41,  102 => 40,  100 => 39,  98 => 38,  84 => 26,  81 => 25,  74 => 20,  72 => 19,  64 => 14,  60 => 12,  57 => 11,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
