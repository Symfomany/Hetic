<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_4853c653931598cdc24d0372669d1993e8a07e4e0120b5d235e21d5b463baaf8 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  188 => 88,  155 => 75,  152 => 74,  97 => 52,  1237 => 333,  1231 => 332,  1225 => 331,  1219 => 330,  1213 => 329,  1207 => 328,  1201 => 327,  1195 => 326,  1189 => 325,  1184 => 320,  1171 => 319,  1164 => 318,  1161 => 317,  1158 => 316,  1153 => 313,  1133 => 312,  1108 => 311,  1105 => 310,  1102 => 309,  1097 => 306,  1088 => 304,  1083 => 303,  1080 => 302,  1077 => 301,  1072 => 296,  1066 => 295,  1060 => 293,  1057 => 292,  1052 => 291,  1049 => 290,  1046 => 289,  1041 => 286,  1037 => 284,  1030 => 282,  1027 => 278,  1023 => 277,  1018 => 274,  1015 => 273,  1012 => 272,  1009 => 271,  1004 => 268,  999 => 267,  996 => 266,  993 => 265,  986 => 260,  983 => 259,  975 => 254,  971 => 253,  967 => 252,  964 => 251,  961 => 250,  958 => 249,  950 => 245,  948 => 241,  945 => 240,  942 => 239,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  903 => 227,  900 => 226,  897 => 225,  894 => 224,  891 => 223,  888 => 222,  880 => 216,  877 => 215,  874 => 214,  871 => 213,  863 => 209,  860 => 208,  857 => 207,  854 => 206,  846 => 202,  843 => 201,  840 => 200,  837 => 199,  829 => 195,  826 => 194,  823 => 193,  820 => 192,  812 => 188,  809 => 187,  806 => 186,  803 => 185,  795 => 181,  792 => 180,  789 => 179,  786 => 178,  778 => 174,  775 => 173,  772 => 172,  764 => 168,  761 => 167,  758 => 166,  755 => 165,  747 => 161,  744 => 160,  742 => 159,  739 => 158,  736 => 157,  731 => 154,  727 => 152,  719 => 151,  714 => 150,  711 => 149,  705 => 147,  702 => 146,  699 => 145,  696 => 144,  691 => 141,  686 => 138,  684 => 137,  683 => 136,  682 => 135,  681 => 134,  676 => 133,  670 => 131,  667 => 130,  664 => 129,  661 => 128,  656 => 125,  650 => 122,  646 => 121,  642 => 120,  638 => 119,  633 => 118,  627 => 116,  624 => 115,  621 => 114,  618 => 113,  602 => 109,  599 => 108,  596 => 107,  580 => 103,  577 => 102,  574 => 101,  569 => 98,  555 => 97,  543 => 95,  536 => 92,  534 => 91,  529 => 90,  526 => 89,  508 => 88,  505 => 87,  502 => 86,  493 => 81,  490 => 80,  487 => 79,  481 => 77,  479 => 76,  471 => 74,  468 => 73,  462 => 71,  460 => 70,  452 => 69,  449 => 68,  446 => 67,  432 => 61,  418 => 58,  415 => 57,  412 => 56,  401 => 51,  395 => 49,  392 => 48,  389 => 47,  386 => 46,  376 => 42,  373 => 41,  370 => 40,  359 => 35,  356 => 34,  353 => 33,  350 => 32,  347 => 31,  339 => 26,  334 => 25,  328 => 23,  326 => 22,  318 => 20,  315 => 19,  299 => 15,  296 => 14,  293 => 13,  279 => 7,  270 => 4,  267 => 3,  260 => 333,  248 => 327,  244 => 325,  236 => 316,  231 => 309,  228 => 308,  226 => 301,  223 => 300,  218 => 289,  215 => 288,  210 => 270,  202 => 262,  200 => 259,  195 => 249,  192 => 248,  184 => 236,  174 => 213,  161 => 198,  129 => 64,  124 => 62,  104 => 86,  76 => 30,  65 => 20,  239 => 81,  225 => 73,  213 => 271,  205 => 264,  191 => 56,  181 => 51,  146 => 177,  126 => 63,  127 => 28,  110 => 22,  77 => 12,  20 => 1,  137 => 33,  114 => 39,  34 => 26,  23 => 1,  113 => 23,  84 => 48,  53 => 5,  340 => 137,  338 => 136,  336 => 135,  321 => 21,  308 => 114,  302 => 111,  290 => 12,  282 => 100,  274 => 96,  272 => 95,  256 => 331,  250 => 328,  233 => 315,  216 => 68,  211 => 67,  197 => 258,  190 => 239,  167 => 42,  165 => 45,  160 => 41,  134 => 157,  118 => 24,  90 => 17,  81 => 47,  58 => 9,  480 => 162,  474 => 75,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 63,  437 => 147,  435 => 146,  430 => 144,  427 => 60,  423 => 59,  413 => 134,  409 => 132,  407 => 53,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 36,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 106,  285 => 9,  283 => 88,  278 => 86,  268 => 85,  264 => 2,  258 => 332,  252 => 329,  247 => 78,  241 => 324,  229 => 73,  220 => 298,  214 => 69,  177 => 65,  169 => 206,  140 => 55,  132 => 65,  128 => 30,  107 => 21,  61 => 1,  273 => 5,  269 => 94,  254 => 330,  243 => 80,  240 => 86,  238 => 322,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 71,  219 => 76,  217 => 75,  208 => 265,  204 => 65,  179 => 84,  159 => 192,  143 => 38,  135 => 29,  119 => 113,  102 => 32,  71 => 18,  67 => 15,  63 => 10,  59 => 18,  38 => 10,  94 => 30,  89 => 28,  85 => 16,  75 => 43,  68 => 14,  56 => 35,  87 => 49,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 12,  46 => 13,  27 => 5,  44 => 11,  31 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 52,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 191,  151 => 184,  142 => 34,  138 => 69,  136 => 164,  121 => 61,  117 => 26,  105 => 35,  91 => 29,  62 => 19,  49 => 10,  24 => 4,  25 => 3,  19 => 2,  79 => 25,  72 => 16,  69 => 40,  47 => 12,  40 => 10,  37 => 5,  22 => 3,  246 => 326,  157 => 37,  145 => 46,  139 => 165,  131 => 156,  123 => 27,  120 => 40,  115 => 43,  111 => 106,  108 => 36,  101 => 85,  98 => 31,  96 => 66,  83 => 15,  74 => 19,  66 => 39,  55 => 17,  52 => 16,  50 => 10,  43 => 12,  41 => 11,  35 => 7,  32 => 7,  29 => 6,  209 => 82,  203 => 62,  199 => 60,  193 => 73,  189 => 71,  187 => 238,  182 => 85,  176 => 219,  173 => 46,  168 => 80,  164 => 199,  162 => 57,  154 => 185,  149 => 73,  147 => 58,  144 => 172,  141 => 70,  133 => 55,  130 => 41,  125 => 29,  122 => 25,  116 => 112,  112 => 42,  109 => 101,  106 => 100,  103 => 34,  99 => 67,  95 => 24,  92 => 21,  86 => 27,  82 => 15,  80 => 19,  73 => 23,  64 => 38,  60 => 11,  57 => 10,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 5,  36 => 5,  33 => 5,  30 => 4,);
    }
}
