<?php

/* HeticSiteBundle:Pagination:sliding.html.twig */
class __TwigTemplate_17840a991ed8f2ce95b69a7f8143f2c8fd05494279b7b1734b30485c08a54878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 19
        echo "
";
        // line 20
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 21
            echo "    <div class=\"pagination\">
        <ul>

            ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "                <li>
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 29
                echo "                <li class=\"disabled\">
                    <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 33
            echo "
            ";
            // line 34
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 35
                echo "                <li>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 38
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 39
                    echo "                    <li>
                        <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 43
                    echo "                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                }
                // line 47
                echo "            ";
            }
            // line 48
            echo "
            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "                ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 51
                    echo "                    <li>
                        <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 55
                    echo "                    <li class=\"active\">
                        <span>";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 59
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
            ";
            // line 62
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 63
                echo "                ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 64
                    echo "                    ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 65
                        echo "                        <li class=\"disabled\">
                            <span>&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 69
                        echo "                        <li>
                            <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 73
                    echo "                ";
                }
                // line 74
                echo "                <li>
                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "                <li>
                    <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 84
                echo "                <li class=\"disabled\">
                    <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 88
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "HeticSiteBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 88,  155 => 75,  152 => 74,  1237 => 333,  1231 => 332,  1225 => 331,  1219 => 330,  1213 => 329,  1207 => 328,  1201 => 327,  1195 => 326,  1189 => 325,  1184 => 320,  1171 => 319,  1164 => 318,  1161 => 317,  1158 => 316,  1153 => 313,  1133 => 312,  1108 => 311,  1105 => 310,  1102 => 309,  1097 => 306,  1088 => 304,  1083 => 303,  1080 => 302,  1077 => 301,  1072 => 296,  1066 => 295,  1060 => 293,  1057 => 292,  1052 => 291,  1049 => 290,  1046 => 289,  1041 => 286,  1037 => 284,  1030 => 282,  1027 => 278,  1023 => 277,  1018 => 274,  1015 => 273,  1012 => 272,  1009 => 271,  1004 => 268,  999 => 267,  996 => 266,  993 => 265,  986 => 260,  983 => 259,  975 => 254,  971 => 253,  967 => 252,  964 => 251,  961 => 250,  958 => 249,  950 => 245,  948 => 241,  945 => 240,  942 => 239,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  903 => 227,  900 => 226,  897 => 225,  894 => 224,  891 => 223,  888 => 222,  880 => 216,  877 => 215,  874 => 214,  871 => 213,  863 => 209,  860 => 208,  857 => 207,  854 => 206,  846 => 202,  843 => 201,  840 => 200,  837 => 199,  829 => 195,  826 => 194,  823 => 193,  820 => 192,  812 => 188,  809 => 187,  806 => 186,  803 => 185,  795 => 181,  792 => 180,  789 => 179,  786 => 178,  778 => 174,  775 => 173,  772 => 172,  764 => 168,  761 => 167,  758 => 166,  755 => 165,  747 => 161,  744 => 160,  742 => 159,  739 => 158,  736 => 157,  731 => 154,  727 => 152,  719 => 151,  714 => 150,  711 => 149,  705 => 147,  702 => 146,  699 => 145,  696 => 144,  691 => 141,  686 => 138,  684 => 137,  683 => 136,  682 => 135,  681 => 134,  676 => 133,  670 => 131,  667 => 130,  664 => 129,  661 => 128,  656 => 125,  650 => 122,  646 => 121,  642 => 120,  638 => 119,  633 => 118,  627 => 116,  624 => 115,  621 => 114,  618 => 113,  602 => 109,  599 => 108,  596 => 107,  580 => 103,  577 => 102,  574 => 101,  569 => 98,  555 => 97,  543 => 95,  536 => 92,  534 => 91,  529 => 90,  526 => 89,  508 => 88,  505 => 87,  502 => 86,  493 => 81,  490 => 80,  487 => 79,  481 => 77,  479 => 76,  471 => 74,  468 => 73,  462 => 71,  460 => 70,  452 => 69,  449 => 68,  446 => 67,  432 => 61,  418 => 58,  415 => 57,  412 => 56,  401 => 51,  395 => 49,  392 => 48,  389 => 47,  386 => 46,  376 => 42,  373 => 41,  370 => 40,  359 => 35,  356 => 34,  353 => 33,  350 => 32,  347 => 31,  339 => 26,  334 => 25,  328 => 23,  326 => 22,  321 => 21,  318 => 20,  315 => 19,  299 => 15,  293 => 13,  290 => 12,  279 => 7,  270 => 4,  267 => 3,  260 => 333,  256 => 331,  250 => 328,  244 => 325,  236 => 316,  231 => 309,  228 => 308,  223 => 300,  215 => 288,  210 => 270,  202 => 262,  200 => 259,  197 => 258,  195 => 249,  190 => 239,  184 => 236,  174 => 213,  161 => 198,  134 => 157,  129 => 64,  104 => 86,  76 => 30,  65 => 12,  239 => 81,  233 => 315,  225 => 73,  205 => 264,  191 => 56,  181 => 51,  146 => 177,  126 => 63,  118 => 24,  127 => 28,  110 => 22,  90 => 17,  77 => 12,  20 => 1,  137 => 33,  114 => 59,  34 => 26,  23 => 1,  113 => 23,  84 => 48,  53 => 5,  342 => 139,  340 => 138,  338 => 137,  323 => 123,  310 => 116,  304 => 113,  296 => 14,  292 => 106,  284 => 102,  276 => 98,  274 => 97,  266 => 92,  248 => 327,  245 => 82,  226 => 301,  222 => 72,  218 => 289,  213 => 271,  206 => 67,  192 => 248,  185 => 61,  167 => 42,  124 => 62,  97 => 52,  81 => 47,  58 => 9,  480 => 162,  474 => 75,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 63,  437 => 147,  435 => 146,  430 => 144,  427 => 60,  423 => 59,  413 => 134,  409 => 132,  407 => 53,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 36,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 9,  283 => 88,  278 => 86,  268 => 85,  264 => 2,  258 => 332,  252 => 329,  247 => 78,  241 => 324,  229 => 73,  220 => 298,  214 => 69,  177 => 65,  169 => 206,  140 => 39,  132 => 65,  128 => 30,  107 => 21,  61 => 1,  273 => 5,  269 => 94,  254 => 330,  243 => 88,  240 => 86,  238 => 322,  235 => 77,  230 => 82,  227 => 81,  224 => 71,  221 => 71,  219 => 76,  217 => 75,  208 => 265,  204 => 72,  179 => 84,  159 => 192,  143 => 56,  135 => 29,  119 => 113,  102 => 32,  71 => 18,  67 => 15,  63 => 10,  59 => 36,  38 => 6,  94 => 51,  89 => 46,  85 => 16,  75 => 43,  68 => 14,  56 => 35,  87 => 49,  21 => 2,  26 => 3,  93 => 28,  88 => 20,  78 => 12,  46 => 8,  27 => 1,  44 => 11,  31 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 52,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 191,  151 => 184,  142 => 34,  138 => 69,  136 => 164,  121 => 61,  117 => 26,  105 => 55,  91 => 50,  62 => 10,  49 => 10,  24 => 21,  25 => 3,  19 => 19,  79 => 31,  72 => 16,  69 => 40,  47 => 12,  40 => 10,  37 => 5,  22 => 20,  246 => 326,  157 => 37,  145 => 40,  139 => 165,  131 => 156,  123 => 27,  120 => 31,  115 => 43,  111 => 106,  108 => 56,  101 => 85,  98 => 31,  96 => 66,  83 => 15,  74 => 19,  66 => 39,  55 => 8,  52 => 21,  50 => 10,  43 => 6,  41 => 6,  35 => 7,  32 => 4,  29 => 24,  209 => 82,  203 => 62,  199 => 60,  193 => 73,  189 => 62,  187 => 238,  182 => 85,  176 => 219,  173 => 46,  168 => 80,  164 => 199,  162 => 43,  154 => 185,  149 => 73,  147 => 58,  144 => 172,  141 => 70,  133 => 55,  130 => 34,  125 => 29,  122 => 25,  116 => 112,  112 => 42,  109 => 101,  106 => 100,  103 => 32,  99 => 67,  95 => 24,  92 => 21,  86 => 45,  82 => 15,  80 => 19,  73 => 19,  64 => 38,  60 => 11,  57 => 10,  54 => 34,  51 => 33,  48 => 13,  45 => 30,  42 => 29,  39 => 5,  36 => 5,  33 => 4,  30 => 4,);
    }
}
