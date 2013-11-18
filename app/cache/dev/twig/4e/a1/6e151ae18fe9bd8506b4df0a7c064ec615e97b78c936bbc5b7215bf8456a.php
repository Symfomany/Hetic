<?php

/* HeticSiteBundle::layout.html.twig */
class __TwigTemplate_4ea16e151ae18fe9bd8506b4df0a7c064ec615e97b78c936bbc5b7215bf8456a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Horus Shop CMF";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://bootswatch.com/amelia/bootstrap.min.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css\"/>

    ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3bb152f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3bb152f_0") : $this->env->getExtension('assets')->getAssetUrl("css/3bb152f_green_1.css");
            // line 15
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "3bb152f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3bb152f") : $this->env->getExtension('assets')->getAssetUrl("css/3bb152f.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
    ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e95eeb8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e95eeb8_0") : $this->env->getExtension('assets')->getAssetUrl("css/e95eeb8_main_1.css");
            // line 19
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "e95eeb8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e95eeb8") : $this->env->getExtension('assets')->getAssetUrl("css/e95eeb8.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    <a href=\"https://github.com/you\"><img style=\"z-index: 50000;position: absolute; top: 0; right: 0; border: 0;\"
                                          src=\"https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png\"
                                          alt=\"Fork me on GitHub\"></a>
    ";
        // line 28
        $this->env->loadTemplate("HeticSiteBundle:Default:topmenu.html.twig")->display($context);
        // line 29
        echo "    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <div class=\"container\">
                    <div class=\"row-fluid\">
                        <div class=\"span3\">
                            <button id=\"closepanel\" type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"glyphicon glyphicon-remove-circle\"></i> </button>
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-list-alt\"></i> Menu</h4>
                                </div>
                                <div class=\"panel-body\">
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a><i class=\"glyphicon glyphicon-home\"></i> Home</a></li>
                                        <li><a><i class=\"glyphicon glyphicon-shopping-cart\"></i> Gérer mes produits<span
                                                        class=\"badge\">10</span></a></li>
                                        <li><a><i class=\"glyphicon glyphicon-ok\"></i> Gérer mes commandes<span
                                                        class=\"badge\">42</span></a></li>
                                        <li><a><i class=\"glyphicon glyphicon-cog\"></i> Configuration</a></li>
                                    </ul>
                                </div>
                                <div class=\"panel-heading\"></div>
                            </div>
                        </div>

                        <div class=\"span9\">
                            ";
        // line 55
        echo "                            ";
        $this->env->loadTemplate("HeticSiteBundle:Default:flashdatas.html.twig")->display($context);
        // line 56
        echo "
                            <nav class=\"navbar navbar-default\" role=\"navigation\">
                                <button id=\"closesearch\" type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"glyphicon glyphicon-remove-circle\"></i> </button>
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                            data-target=\"#bs-example-navbar-collapse-2\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a class=\"navbar-brand\" href=\"#\"><i class=\"glyphicon glyphicon-search\"></i> Rechercher un produit</a>
                                </div>
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                                    <form action=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("hetic_search");
        echo "\" class=\"span12\" role=\"search\">
                                        <div class=\"form-group\">
                                            <div class=\"col-xs-8\">
                                                <input type=\"text\" class=\"form-control\"
                                                       placeholder=\"Mots-clefs: Nom, Référence, Description, Catégorie...\">
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-primary\"><i
                                                        class=\"glyphicon glyphicon-search\"></i></button>
                                            <a id=\"moresearch\" class=\"btn btn-primary\"><i
                                                        class=\"glyphicon glyphicon-plus-sign\"></i> </a>

                                        </div>
                                    </form>
                                </div>
                                <div class=\"hide\" id=\"advancedsearch\">
                                    <form action=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("hetic_search_avanced");
        echo "\" class=\"form-inline\" role=\"form\">
                                        <div class=\"form-group\">
                                            <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\"
                                                   placeholder=\"Enter email\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\"
                                                   placeholder=\"Password\">
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\"> Remember me
                                            </label>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                                    </form>
                                </div>
                            </nav>
                            <div class=\"maincontent\">
                                ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 108
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"scrollup\">Scroll</a>
        </div>
    </div>
    <div id=\"footer\">
        <div class=\"container text-center\">
            <p class=\"muted credit\">Example courtesy <a href=\"http://martinbean.co.uk\">Martin Bean</a> and <a href=\"http://ryanfait.com/sticky-footer/\">Ryan Fait</a>.</p>
        </div>
    </div>
";
    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        // line 107
        echo "                                ";
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js\"></script>
    <script src=\"http://damirfoy.com/iCheck/jquery.icheck.min.js?v=0.9.1\"></script>
    <script src=\"http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js\"></script>
    <script src=\"/js/ckeditor/ckeditor.js\"></script>


    ";
        // line 133
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef57c59_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef57c59_0") : $this->env->getExtension('assets')->getAssetUrl("js/ef57c59_main_1.js");
            // line 134
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ef57c59"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef57c59") : $this->env->getExtension('assets')->getAssetUrl("js/ef57c59.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 136
        echo "
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 136,  237 => 134,  233 => 133,  221 => 125,  218 => 124,  214 => 107,  211 => 106,  194 => 108,  192 => 106,  168 => 85,  150 => 70,  134 => 56,  131 => 55,  104 => 29,  102 => 28,  97 => 25,  94 => 24,  78 => 19,  74 => 18,  71 => 17,  57 => 15,  53 => 14,  41 => 6,  38 => 5,  32 => 3,);
    }
}
