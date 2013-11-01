<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_a4c574782ac42c80513cc79b8a1b0bf304d9d60db368b75f1fbd5901196df5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1024 => 280,  1016 => 276,  1014 => 272,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  955 => 252,  952 => 251,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  769 => 171,  767 => 170,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  697 => 141,  695 => 139,  689 => 137,  680 => 134,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  564 => 99,  550 => 94,  524 => 90,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  316 => 16,  311 => 14,  271 => 374,  266 => 366,  245 => 335,  186 => 239,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  723 => 473,  706 => 472,  698 => 469,  694 => 138,  690 => 467,  678 => 133,  675 => 132,  673 => 462,  645 => 460,  630 => 455,  625 => 453,  616 => 450,  565 => 414,  547 => 93,  530 => 410,  520 => 406,  378 => 157,  371 => 35,  358 => 151,  345 => 147,  343 => 146,  331 => 140,  307 => 128,  281 => 411,  276 => 395,  259 => 103,  253 => 342,  232 => 88,  222 => 297,  363 => 32,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  306 => 107,  291 => 102,  265 => 105,  263 => 365,  255 => 353,  212 => 279,  672 => 345,  668 => 344,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  593 => 105,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  563 => 298,  559 => 296,  557 => 96,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  525 => 408,  522 => 279,  519 => 278,  515 => 85,  509 => 83,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  473 => 254,  465 => 249,  463 => 248,  459 => 69,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 59,  410 => 221,  400 => 47,  397 => 213,  383 => 207,  367 => 155,  317 => 185,  313 => 15,  304 => 181,  297 => 276,  295 => 275,  288 => 4,  175 => 58,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  408 => 50,  394 => 168,  380 => 158,  361 => 152,  351 => 120,  348 => 140,  342 => 23,  335 => 21,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  262 => 98,  207 => 269,  194 => 248,  185 => 74,  172 => 57,  153 => 77,  150 => 55,  70 => 19,  178 => 59,  170 => 84,  148 => 69,  100 => 36,  188 => 90,  155 => 47,  152 => 46,  97 => 52,  1237 => 360,  1231 => 358,  1225 => 331,  1219 => 330,  1213 => 329,  1207 => 328,  1201 => 327,  1195 => 345,  1189 => 325,  1184 => 320,  1171 => 319,  1164 => 318,  1161 => 317,  1158 => 316,  1153 => 313,  1133 => 312,  1108 => 311,  1105 => 310,  1102 => 309,  1097 => 306,  1088 => 308,  1083 => 303,  1080 => 302,  1077 => 305,  1072 => 296,  1066 => 295,  1060 => 293,  1057 => 292,  1052 => 291,  1049 => 290,  1046 => 289,  1041 => 286,  1037 => 284,  1030 => 282,  1027 => 281,  1023 => 277,  1018 => 274,  1015 => 273,  1012 => 271,  1009 => 270,  1004 => 266,  999 => 267,  996 => 266,  993 => 265,  986 => 260,  983 => 259,  975 => 254,  971 => 253,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 250,  948 => 241,  945 => 240,  942 => 239,  921 => 233,  918 => 234,  915 => 233,  912 => 230,  909 => 229,  906 => 228,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 223,  888 => 222,  880 => 216,  877 => 215,  874 => 214,  871 => 213,  863 => 209,  860 => 211,  857 => 210,  854 => 206,  846 => 205,  843 => 201,  840 => 200,  837 => 199,  829 => 195,  826 => 194,  823 => 193,  820 => 192,  812 => 190,  809 => 189,  806 => 488,  803 => 487,  795 => 181,  792 => 485,  789 => 179,  786 => 178,  778 => 174,  775 => 173,  772 => 172,  764 => 169,  761 => 167,  758 => 166,  755 => 165,  747 => 161,  744 => 160,  742 => 475,  739 => 156,  736 => 157,  731 => 154,  727 => 152,  719 => 151,  714 => 150,  711 => 149,  705 => 147,  702 => 470,  699 => 142,  696 => 140,  691 => 141,  686 => 466,  684 => 137,  683 => 135,  682 => 465,  681 => 134,  676 => 133,  670 => 131,  667 => 130,  664 => 342,  661 => 128,  656 => 461,  650 => 122,  646 => 121,  642 => 120,  638 => 118,  633 => 118,  627 => 116,  624 => 115,  621 => 452,  618 => 451,  602 => 449,  599 => 108,  596 => 106,  580 => 103,  577 => 303,  574 => 101,  569 => 300,  555 => 95,  543 => 95,  536 => 92,  534 => 91,  529 => 92,  526 => 89,  508 => 88,  505 => 270,  502 => 86,  493 => 78,  490 => 77,  487 => 79,  481 => 77,  479 => 256,  471 => 253,  468 => 73,  462 => 202,  460 => 70,  452 => 69,  449 => 198,  446 => 197,  432 => 61,  418 => 224,  415 => 180,  412 => 222,  401 => 172,  395 => 49,  392 => 48,  389 => 160,  386 => 159,  376 => 205,  373 => 156,  370 => 40,  359 => 35,  356 => 328,  353 => 149,  350 => 26,  347 => 191,  339 => 316,  334 => 141,  328 => 139,  326 => 138,  318 => 111,  315 => 131,  299 => 8,  296 => 121,  293 => 6,  279 => 7,  270 => 102,  267 => 101,  260 => 363,  248 => 336,  244 => 136,  236 => 316,  231 => 83,  228 => 308,  226 => 84,  223 => 300,  218 => 289,  215 => 280,  210 => 270,  202 => 266,  200 => 72,  195 => 249,  192 => 248,  184 => 233,  174 => 217,  161 => 202,  129 => 148,  124 => 132,  104 => 90,  76 => 31,  65 => 17,  239 => 81,  225 => 298,  213 => 78,  205 => 108,  191 => 246,  181 => 232,  146 => 181,  126 => 147,  127 => 35,  110 => 38,  77 => 25,  20 => 1,  137 => 65,  114 => 111,  34 => 4,  23 => 1,  113 => 40,  84 => 41,  53 => 11,  340 => 145,  338 => 135,  336 => 135,  321 => 135,  308 => 13,  302 => 125,  290 => 5,  282 => 100,  274 => 110,  272 => 95,  256 => 96,  250 => 341,  233 => 304,  216 => 79,  211 => 67,  197 => 249,  190 => 76,  167 => 76,  165 => 83,  160 => 41,  134 => 161,  118 => 49,  90 => 27,  81 => 30,  58 => 15,  480 => 75,  474 => 75,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 63,  437 => 61,  435 => 146,  430 => 144,  427 => 60,  423 => 57,  413 => 134,  409 => 132,  407 => 53,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 36,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 106,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 2,  258 => 354,  252 => 329,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 58,  132 => 65,  128 => 60,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 330,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 71,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 29,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 106,  196 => 92,  183 => 52,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 34,  138 => 69,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 34,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}