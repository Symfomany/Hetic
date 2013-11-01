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
        echo "Source de Symfony 2 à Hetic";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://getbootstrap.com/2.3.2/assets/css/bootstrap.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css\" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic' rel='stylesheet' type='text/css'>    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:400\" />
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "446f6d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_446f6d5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/446f6d5_main_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "446f6d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_446f6d5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/446f6d5.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("HeticSiteBundle:Default:topmenu.html.twig")->display($context);
        // line 18
        echo "    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                    <div class=\"flash-notice alert alert-block\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "                ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
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
        return array (  116 => 35,  113 => 34,  109 => 27,  106 => 26,  99 => 28,  96 => 26,  87 => 23,  84 => 22,  80 => 21,  75 => 18,  72 => 17,  69 => 16,  53 => 11,  49 => 10,  41 => 6,  38 => 5,  32 => 3,);
    }
}
