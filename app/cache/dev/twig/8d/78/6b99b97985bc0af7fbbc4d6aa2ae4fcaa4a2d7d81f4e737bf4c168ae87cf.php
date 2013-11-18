<?php

/* HeticSiteBundle::layout_simple.html.twig */
class __TwigTemplate_8d786b99b97985bc0af7fbbc4d6aa2ae4fcaa4a2d7d81f4e737bf4c168ae87cf extends Twig_Template
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
        echo "Source de Symfony 2 à Hetic";
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
        $this->env->loadTemplate("HeticSiteBundle:Default:topmenu_logout.html.twig")->display($context);
        // line 29
        echo "    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <div class=\"container\">
                    <div class=\"row-fluid\">
                        <div class=\"span12\">
                            ";
        // line 35
        $this->env->loadTemplate("HeticSiteBundle:Default:flashdatas.html.twig")->display($context);
        // line 36
        echo "
                            <div class=\"maincontent\">
                                ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                            </div>
                            ";
        // line 42
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"footer\">
        <div class=\"container\">
            <p class=\"muted credit\">Example courtesy <a href=\"http://martinbean.co.uk\">Martin Bean</a> and <a href=\"http://ryanfait.com/sticky-footer/\">Ryan Fait</a>.</p>
        </div>
    </div>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                                ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js\"></script>
    <script src=\"http://damirfoy.com/iCheck/jquery.icheck.min.js?v=0.9.1\"></script>
    <script src=\"http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js\"></script>
    <script src=\"/js/ckeditor/ckeditor.js\"></script>


    ";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef57c59_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef57c59_0") : $this->env->getExtension('assets')->getAssetUrl("js/ef57c59_main_1.js");
            // line 66
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
        // line 68
        echo "
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle::layout_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 68,  164 => 66,  160 => 65,  148 => 57,  145 => 56,  141 => 39,  138 => 38,  123 => 42,  120 => 40,  118 => 38,  114 => 36,  112 => 35,  104 => 29,  102 => 28,  97 => 25,  94 => 24,  78 => 19,  74 => 18,  57 => 15,  53 => 14,  38 => 5,  81 => 21,  75 => 18,  71 => 17,  69 => 15,  63 => 13,  60 => 12,  55 => 8,  41 => 6,  37 => 5,  32 => 3,  29 => 3,);
    }
}
