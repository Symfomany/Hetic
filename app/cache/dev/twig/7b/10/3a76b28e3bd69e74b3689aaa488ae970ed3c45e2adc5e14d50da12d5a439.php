<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_7b103a76b28e3bd69e74b3689aaa488ae970ed3c45e2adc5e14d50da12d5a439 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file")) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "'); switchIcons('icon-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "-open', 'icon-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "-close'); return false;\">
        <img class=\"toggle\" id=\"icon-";
            // line 15
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("inline") : ("none"));
            echo "\" />
        <img class=\"toggle\" id=\"icon-";
            // line 16
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("none") : ("inline"));
            echo "\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  31 => 5,  25 => 4,  21 => 2,  92 => 21,  85 => 19,  68 => 14,  56 => 9,  50 => 8,  24 => 3,  201 => 92,  196 => 90,  183 => 82,  173 => 74,  168 => 72,  163 => 70,  158 => 67,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  62 => 23,  51 => 12,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  36 => 7,  57 => 14,  54 => 21,  43 => 8,  26 => 3,  19 => 1,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1024 => 280,  1016 => 276,  1014 => 272,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  955 => 252,  952 => 251,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  769 => 171,  767 => 170,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  288 => 4,  281 => 411,  278 => 410,  276 => 395,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  255 => 353,  253 => 342,  245 => 335,  243 => 327,  240 => 326,  235 => 311,  230 => 303,  227 => 301,  225 => 298,  222 => 297,  217 => 289,  212 => 279,  207 => 269,  204 => 267,  199 => 91,  194 => 248,  191 => 246,  189 => 240,  186 => 239,  181 => 232,  1237 => 360,  1231 => 358,  1225 => 331,  1219 => 330,  1213 => 329,  1207 => 328,  1201 => 327,  1195 => 345,  1189 => 325,  1184 => 320,  1171 => 319,  1164 => 318,  1161 => 317,  1158 => 316,  1153 => 313,  1133 => 312,  1108 => 311,  1105 => 310,  1102 => 309,  1097 => 306,  1088 => 308,  1083 => 303,  1080 => 302,  1077 => 305,  1072 => 296,  1066 => 295,  1060 => 293,  1057 => 292,  1052 => 291,  1049 => 290,  1046 => 289,  1041 => 286,  1037 => 284,  1030 => 282,  1027 => 281,  1023 => 277,  1018 => 274,  1015 => 273,  1012 => 271,  1009 => 270,  1004 => 266,  999 => 267,  996 => 266,  993 => 265,  986 => 260,  983 => 259,  975 => 254,  971 => 253,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 250,  948 => 241,  945 => 240,  942 => 239,  921 => 233,  918 => 234,  915 => 233,  912 => 230,  909 => 229,  906 => 228,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 223,  888 => 222,  880 => 216,  877 => 215,  874 => 214,  871 => 213,  863 => 209,  860 => 211,  857 => 210,  854 => 206,  846 => 205,  843 => 201,  840 => 200,  837 => 199,  829 => 195,  826 => 194,  823 => 193,  820 => 192,  812 => 190,  809 => 189,  806 => 186,  803 => 185,  795 => 181,  792 => 180,  789 => 179,  786 => 178,  778 => 174,  775 => 173,  772 => 172,  764 => 169,  761 => 167,  758 => 166,  755 => 165,  747 => 161,  744 => 160,  742 => 159,  739 => 156,  736 => 157,  731 => 154,  727 => 152,  719 => 151,  714 => 150,  711 => 149,  705 => 147,  702 => 146,  699 => 142,  696 => 140,  691 => 141,  686 => 138,  684 => 137,  683 => 135,  682 => 135,  681 => 134,  676 => 133,  670 => 131,  667 => 130,  664 => 129,  661 => 128,  656 => 125,  650 => 122,  646 => 121,  642 => 120,  638 => 118,  633 => 118,  627 => 116,  624 => 115,  621 => 114,  618 => 113,  602 => 109,  599 => 108,  596 => 106,  580 => 103,  577 => 102,  574 => 101,  569 => 98,  555 => 95,  543 => 95,  536 => 92,  534 => 91,  529 => 92,  526 => 89,  508 => 88,  505 => 87,  502 => 86,  493 => 78,  490 => 77,  487 => 79,  481 => 77,  479 => 76,  474 => 75,  471 => 74,  468 => 73,  462 => 71,  460 => 70,  452 => 69,  449 => 68,  446 => 67,  440 => 63,  432 => 61,  427 => 60,  423 => 57,  418 => 58,  415 => 57,  412 => 56,  407 => 53,  401 => 51,  395 => 49,  392 => 48,  389 => 47,  386 => 46,  376 => 42,  373 => 41,  370 => 40,  362 => 36,  359 => 35,  356 => 34,  353 => 33,  350 => 26,  347 => 31,  339 => 26,  334 => 25,  328 => 23,  326 => 22,  321 => 21,  318 => 20,  315 => 19,  299 => 8,  296 => 14,  293 => 6,  290 => 5,  285 => 3,  279 => 7,  273 => 394,  270 => 4,  267 => 3,  264 => 2,  260 => 363,  258 => 354,  256 => 331,  254 => 330,  252 => 329,  250 => 341,  248 => 336,  246 => 326,  244 => 325,  241 => 324,  238 => 312,  236 => 316,  233 => 304,  231 => 309,  228 => 308,  226 => 301,  223 => 300,  220 => 290,  218 => 289,  215 => 280,  213 => 271,  210 => 270,  208 => 265,  205 => 264,  202 => 266,  200 => 259,  197 => 249,  195 => 249,  192 => 248,  190 => 239,  187 => 84,  184 => 233,  182 => 222,  179 => 224,  176 => 223,  174 => 217,  171 => 73,  169 => 210,  166 => 71,  164 => 203,  161 => 202,  159 => 196,  156 => 66,  154 => 189,  151 => 63,  149 => 182,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  136 => 56,  134 => 161,  131 => 160,  129 => 148,  126 => 147,  124 => 132,  121 => 46,  119 => 117,  114 => 111,  111 => 110,  104 => 90,  101 => 24,  94 => 22,  91 => 31,  89 => 20,  86 => 28,  81 => 40,  79 => 18,  76 => 31,  74 => 20,  71 => 19,  66 => 15,  61 => 2,  40 => 8,  30 => 3,  27 => 4,  22 => 2,  20 => 1,  64 => 12,  59 => 6,  47 => 12,  44 => 10,  42 => 10,  35 => 7,  33 => 5,  29 => 5,  23 => 1,  116 => 116,  113 => 34,  109 => 105,  106 => 104,  99 => 68,  96 => 67,  87 => 20,  84 => 41,  80 => 19,  75 => 17,  72 => 16,  69 => 25,  53 => 5,  49 => 19,  41 => 9,  38 => 5,  32 => 12,);
    }
}
