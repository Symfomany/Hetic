<?php

/* HeticSiteBundle:Default:flashdatas.html.twig */
class __TwigTemplate_7f4eb63491fe750713e9da839d72cc268a374db070b5abb7962979bf32a422f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flashdatas' => array($this, 'block_flashdatas'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('flashdatas', $context, $blocks);
        // line 27
        echo "
";
    }

    // line 1
    public function block_flashdatas($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "        <div class=\"alert alert-dismissable alert-success\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <i class=\"glyphicon glyphicon-ok\"></i> ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-dismissable alert-success\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <i class=\"glyphicon glyphicon-info-sign\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"alert alert-dismissable alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <i class=\"glyphicon glyphicon-remove\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "        <div class=\"alert alert-dismissable alert-warning\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <i class=\"glyphicon glyphicon-warning-sign\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Default:flashdatas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  89 => 21,  84 => 20,  66 => 14,  48 => 8,  39 => 5,  30 => 2,  27 => 1,  22 => 27,  20 => 1,  64 => 10,  59 => 6,  47 => 12,  44 => 11,  42 => 10,  35 => 3,  33 => 6,  23 => 1,  178 => 68,  164 => 66,  160 => 65,  148 => 57,  145 => 56,  141 => 39,  138 => 38,  123 => 42,  120 => 40,  118 => 38,  114 => 36,  112 => 35,  104 => 29,  102 => 28,  97 => 25,  94 => 24,  78 => 19,  74 => 18,  57 => 11,  53 => 9,  38 => 5,  81 => 21,  75 => 17,  71 => 15,  69 => 11,  63 => 13,  60 => 12,  55 => 8,  41 => 6,  37 => 5,  32 => 3,  29 => 5,);
    }
}
