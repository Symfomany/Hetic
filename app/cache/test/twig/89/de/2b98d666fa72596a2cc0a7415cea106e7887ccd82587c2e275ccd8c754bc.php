<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_89de2b98d666fa72596a2cc0a7415cea106e7887ccd82587c2e275ccd8c754bc extends Twig_Template
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
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 484,  784 => 482,  771 => 481,  745 => 476,  723 => 473,  706 => 472,  698 => 469,  694 => 468,  690 => 467,  678 => 464,  675 => 463,  673 => 462,  645 => 460,  630 => 455,  625 => 453,  616 => 450,  565 => 414,  547 => 411,  530 => 410,  520 => 406,  378 => 157,  371 => 156,  358 => 151,  345 => 147,  343 => 146,  331 => 140,  307 => 128,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  363 => 153,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  306 => 107,  291 => 102,  265 => 105,  263 => 95,  255 => 101,  212 => 78,  672 => 345,  668 => 344,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 409,  525 => 408,  522 => 279,  519 => 278,  515 => 404,  509 => 272,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  473 => 254,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  367 => 155,  317 => 185,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 118,  175 => 58,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  408 => 176,  394 => 168,  380 => 158,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  262 => 98,  207 => 75,  194 => 68,  185 => 74,  172 => 57,  153 => 77,  150 => 55,  70 => 24,  178 => 59,  170 => 84,  148 => 69,  100 => 39,  188 => 90,  155 => 47,  152 => 46,  97 => 52,  1237 => 333,  1231 => 332,  1225 => 331,  1219 => 330,  1213 => 329,  1207 => 328,  1201 => 327,  1195 => 326,  1189 => 325,  1184 => 320,  1171 => 319,  1164 => 318,  1161 => 317,  1158 => 316,  1153 => 313,  1133 => 312,  1108 => 311,  1105 => 310,  1102 => 309,  1097 => 306,  1088 => 304,  1083 => 303,  1080 => 302,  1077 => 301,  1072 => 296,  1066 => 295,  1060 => 293,  1057 => 292,  1052 => 291,  1049 => 290,  1046 => 289,  1041 => 286,  1037 => 284,  1030 => 282,  1027 => 278,  1023 => 277,  1018 => 274,  1015 => 273,  1012 => 272,  1009 => 271,  1004 => 268,  999 => 267,  996 => 266,  993 => 265,  986 => 260,  983 => 259,  975 => 254,  971 => 253,  967 => 252,  964 => 251,  961 => 250,  958 => 249,  950 => 245,  948 => 241,  945 => 240,  942 => 239,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  903 => 227,  900 => 226,  897 => 225,  894 => 224,  891 => 223,  888 => 222,  880 => 216,  877 => 215,  874 => 214,  871 => 213,  863 => 209,  860 => 208,  857 => 207,  854 => 206,  846 => 202,  843 => 201,  840 => 200,  837 => 199,  829 => 195,  826 => 194,  823 => 193,  820 => 192,  812 => 188,  809 => 187,  806 => 488,  803 => 487,  795 => 181,  792 => 485,  789 => 179,  786 => 178,  778 => 174,  775 => 173,  772 => 172,  764 => 168,  761 => 167,  758 => 166,  755 => 165,  747 => 161,  744 => 160,  742 => 475,  739 => 158,  736 => 157,  731 => 154,  727 => 152,  719 => 151,  714 => 150,  711 => 149,  705 => 147,  702 => 470,  699 => 145,  696 => 144,  691 => 141,  686 => 466,  684 => 137,  683 => 136,  682 => 465,  681 => 134,  676 => 133,  670 => 131,  667 => 130,  664 => 342,  661 => 128,  656 => 461,  650 => 122,  646 => 121,  642 => 120,  638 => 119,  633 => 118,  627 => 116,  624 => 115,  621 => 452,  618 => 451,  602 => 449,  599 => 108,  596 => 107,  580 => 103,  577 => 303,  574 => 101,  569 => 300,  555 => 97,  543 => 95,  536 => 92,  534 => 91,  529 => 90,  526 => 89,  508 => 88,  505 => 270,  502 => 86,  493 => 81,  490 => 80,  487 => 79,  481 => 77,  479 => 256,  471 => 253,  468 => 73,  462 => 202,  460 => 70,  452 => 69,  449 => 198,  446 => 197,  432 => 61,  418 => 224,  415 => 180,  412 => 222,  401 => 172,  395 => 49,  392 => 48,  389 => 160,  386 => 159,  376 => 205,  373 => 156,  370 => 40,  359 => 35,  356 => 34,  353 => 149,  350 => 32,  347 => 191,  339 => 26,  334 => 141,  328 => 139,  326 => 138,  318 => 111,  315 => 131,  299 => 15,  296 => 121,  293 => 120,  279 => 7,  270 => 102,  267 => 101,  260 => 333,  248 => 97,  244 => 136,  236 => 316,  231 => 83,  228 => 308,  226 => 84,  223 => 300,  218 => 289,  215 => 288,  210 => 77,  202 => 77,  200 => 72,  195 => 249,  192 => 248,  184 => 63,  174 => 65,  161 => 63,  129 => 64,  124 => 62,  104 => 32,  76 => 27,  65 => 11,  239 => 81,  225 => 73,  213 => 78,  205 => 108,  191 => 67,  181 => 65,  146 => 177,  126 => 63,  127 => 35,  110 => 22,  77 => 20,  20 => 1,  137 => 65,  114 => 59,  34 => 5,  23 => 1,  113 => 48,  84 => 27,  53 => 15,  340 => 145,  338 => 135,  336 => 135,  321 => 135,  308 => 114,  302 => 125,  290 => 119,  282 => 100,  274 => 110,  272 => 95,  256 => 96,  250 => 328,  233 => 87,  216 => 79,  211 => 67,  197 => 69,  190 => 76,  167 => 76,  165 => 83,  160 => 41,  134 => 39,  118 => 49,  90 => 42,  81 => 23,  58 => 18,  480 => 162,  474 => 75,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 63,  437 => 147,  435 => 146,  430 => 144,  427 => 60,  423 => 59,  413 => 134,  409 => 132,  407 => 53,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 36,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 106,  285 => 175,  283 => 115,  278 => 98,  268 => 85,  264 => 2,  258 => 94,  252 => 329,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 65,  169 => 206,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  273 => 174,  269 => 107,  254 => 330,  243 => 92,  240 => 86,  238 => 322,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 71,  219 => 76,  217 => 75,  208 => 76,  204 => 65,  179 => 98,  159 => 90,  143 => 51,  135 => 29,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 6,  93 => 27,  88 => 25,  78 => 18,  46 => 13,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 52,  171 => 81,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 34,  138 => 69,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 10,  37 => 7,  22 => 17,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 56,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 39,  66 => 39,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 199,  162 => 59,  154 => 60,  149 => 73,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 34,  99 => 23,  95 => 34,  92 => 28,  86 => 45,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 11,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
