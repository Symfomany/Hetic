<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_db5fab654f7033baf6dcf894f800fcf4d8a38feffce39d815fb8a8d4a57376b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  408 => 176,  394 => 168,  380 => 160,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  262 => 98,  207 => 75,  194 => 70,  185 => 66,  172 => 64,  153 => 56,  150 => 55,  70 => 19,  178 => 66,  170 => 77,  148 => 69,  100 => 39,  188 => 88,  155 => 75,  152 => 74,  97 => 52,  1237 => 333,  1231 => 332,  1225 => 331,  1219 => 330,  1213 => 329,  1207 => 328,  1201 => 327,  1195 => 326,  1189 => 325,  1184 => 320,  1171 => 319,  1164 => 318,  1161 => 317,  1158 => 316,  1153 => 313,  1133 => 312,  1108 => 311,  1105 => 310,  1102 => 309,  1097 => 306,  1088 => 304,  1083 => 303,  1080 => 302,  1077 => 301,  1072 => 296,  1066 => 295,  1060 => 293,  1057 => 292,  1052 => 291,  1049 => 290,  1046 => 289,  1041 => 286,  1037 => 284,  1030 => 282,  1027 => 278,  1023 => 277,  1018 => 274,  1015 => 273,  1012 => 272,  1009 => 271,  1004 => 268,  999 => 267,  996 => 266,  993 => 265,  986 => 260,  983 => 259,  975 => 254,  971 => 253,  967 => 252,  964 => 251,  961 => 250,  958 => 249,  950 => 245,  948 => 241,  945 => 240,  942 => 239,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  903 => 227,  900 => 226,  897 => 225,  894 => 224,  891 => 223,  888 => 222,  880 => 216,  877 => 215,  874 => 214,  871 => 213,  863 => 209,  860 => 208,  857 => 207,  854 => 206,  846 => 202,  843 => 201,  840 => 200,  837 => 199,  829 => 195,  826 => 194,  823 => 193,  820 => 192,  812 => 188,  809 => 187,  806 => 186,  803 => 185,  795 => 181,  792 => 180,  789 => 179,  786 => 178,  778 => 174,  775 => 173,  772 => 172,  764 => 168,  761 => 167,  758 => 166,  755 => 165,  747 => 161,  744 => 160,  742 => 159,  739 => 158,  736 => 157,  731 => 154,  727 => 152,  719 => 151,  714 => 150,  711 => 149,  705 => 147,  702 => 146,  699 => 145,  696 => 144,  691 => 141,  686 => 138,  684 => 137,  683 => 136,  682 => 135,  681 => 134,  676 => 133,  670 => 131,  667 => 130,  664 => 129,  661 => 128,  656 => 125,  650 => 122,  646 => 121,  642 => 120,  638 => 119,  633 => 118,  627 => 116,  624 => 115,  621 => 114,  618 => 113,  602 => 109,  599 => 108,  596 => 107,  580 => 103,  577 => 102,  574 => 101,  569 => 98,  555 => 97,  543 => 95,  536 => 92,  534 => 91,  529 => 90,  526 => 89,  508 => 88,  505 => 87,  502 => 86,  493 => 81,  490 => 80,  487 => 79,  481 => 77,  479 => 76,  471 => 74,  468 => 73,  462 => 202,  460 => 70,  452 => 69,  449 => 198,  446 => 197,  432 => 61,  418 => 58,  415 => 180,  412 => 56,  401 => 172,  395 => 49,  392 => 48,  389 => 47,  386 => 46,  376 => 42,  373 => 156,  370 => 40,  359 => 35,  356 => 34,  353 => 33,  350 => 32,  347 => 31,  339 => 26,  334 => 25,  328 => 23,  326 => 22,  318 => 20,  315 => 125,  299 => 15,  296 => 14,  293 => 13,  279 => 7,  270 => 102,  267 => 101,  260 => 333,  248 => 94,  244 => 325,  236 => 316,  231 => 309,  228 => 308,  226 => 84,  223 => 300,  218 => 289,  215 => 288,  210 => 270,  202 => 262,  200 => 72,  195 => 249,  192 => 248,  184 => 236,  174 => 213,  161 => 63,  129 => 64,  124 => 62,  104 => 51,  76 => 25,  65 => 35,  239 => 81,  225 => 73,  213 => 78,  205 => 264,  191 => 67,  181 => 65,  146 => 177,  126 => 63,  127 => 28,  110 => 22,  77 => 12,  20 => 1,  137 => 65,  114 => 59,  34 => 26,  23 => 1,  113 => 48,  84 => 24,  53 => 12,  340 => 137,  338 => 135,  336 => 135,  321 => 21,  308 => 114,  302 => 111,  290 => 12,  282 => 100,  274 => 96,  272 => 95,  256 => 96,  250 => 328,  233 => 87,  216 => 79,  211 => 67,  197 => 71,  190 => 239,  167 => 76,  165 => 60,  160 => 41,  134 => 54,  118 => 49,  90 => 27,  81 => 23,  58 => 32,  480 => 162,  474 => 75,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 63,  437 => 147,  435 => 146,  430 => 144,  427 => 60,  423 => 59,  413 => 134,  409 => 132,  407 => 53,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 36,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 106,  285 => 9,  283 => 88,  278 => 106,  268 => 85,  264 => 2,  258 => 332,  252 => 329,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 206,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 17,  273 => 5,  269 => 94,  254 => 330,  243 => 80,  240 => 86,  238 => 322,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 71,  219 => 76,  217 => 75,  208 => 265,  204 => 65,  179 => 84,  159 => 192,  143 => 38,  135 => 29,  119 => 40,  102 => 40,  71 => 18,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 51,  89 => 28,  85 => 16,  75 => 43,  68 => 36,  56 => 35,  87 => 34,  21 => 2,  26 => 3,  93 => 47,  88 => 32,  78 => 12,  46 => 13,  27 => 3,  44 => 26,  31 => 25,  28 => 20,  201 => 92,  196 => 90,  183 => 52,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 58,  151 => 59,  142 => 34,  138 => 69,  136 => 164,  121 => 50,  117 => 26,  105 => 34,  91 => 33,  62 => 19,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 25,  72 => 16,  69 => 40,  47 => 12,  40 => 10,  37 => 5,  22 => 17,  246 => 93,  157 => 37,  145 => 46,  139 => 165,  131 => 61,  123 => 42,  120 => 57,  115 => 43,  111 => 47,  108 => 56,  101 => 85,  98 => 31,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 13,  52 => 12,  50 => 29,  43 => 12,  41 => 25,  35 => 6,  32 => 5,  29 => 24,  209 => 82,  203 => 73,  199 => 60,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 63,  173 => 46,  168 => 61,  164 => 199,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 172,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 25,  116 => 39,  112 => 42,  109 => 101,  106 => 100,  103 => 34,  99 => 31,  95 => 24,  92 => 21,  86 => 45,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 11,  57 => 10,  54 => 34,  51 => 33,  48 => 7,  45 => 9,  42 => 29,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
