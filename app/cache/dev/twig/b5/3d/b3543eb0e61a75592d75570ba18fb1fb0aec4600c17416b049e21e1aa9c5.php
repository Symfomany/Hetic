<?php

/* HeticSiteBundle:Default:login.html.twig */
class __TwigTemplate_b53db3543eb0e61a75592d75570ba18fb1fb0aec4600c17416b049e21e1aa9c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSiteBundle::layout_simple.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HeticSiteBundle::layout_simple.html.twig";
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6_0") : $this->env->getExtension('assets')->getAssetUrl("js/cf7b8d6_index_1.js");
            // line 6
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "cf7b8d6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cf7b8d6") : $this->env->getExtension('assets')->getAssetUrl("js/cf7b8d6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <h2 class=\"text-center form-signin-heading\"><i class=\"glyphicon glyphicon-off\"></i> Authentification</h2>
        ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "            <div class=\"alert alert-dismissable alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 21
        echo "
        <div class=\"input-group\">
            <input name=\"_username\" type=\"text\" class=\"form-control\" placeholder=\"Email address\" required=\"required\">
              <span class=\"input-group-btn\">
                  <button type=\"submit\" class=\"btn btn-search btn-primary\"><i class=\"glyphicon glyphicon-user\"></i> </button>
              </span>
        </div>
        <p></p>
        <div class=\"input-group\">
            <input name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"required\">
              <span class=\"input-group-btn\">
                  <button type=\"submit\" class=\"btn btn-search btn-primary\"><i class=\"glyphicon glyphicon-flash\"></i> </button>
              </span>
        </div>
        <label class=\"checkbox\">
            <input type=\"checkbox\" class=\"check pull-left\" value=\"remember-me\" id=\"remember\"> <label for=\"remember\" class=\"pull-left\">Se Souvenir de moi</label>
        </label>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"><i class=\"glyphicon glyphicon-lock\"></i> Connexion</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  75 => 18,  71 => 16,  69 => 15,  63 => 13,  60 => 12,  55 => 8,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
