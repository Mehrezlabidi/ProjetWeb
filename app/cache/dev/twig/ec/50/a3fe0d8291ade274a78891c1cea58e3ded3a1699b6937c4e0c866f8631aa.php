<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_ec50a3fe0d8291ade274a78891c1cea58e3ded3a1699b6937c4e0c866f8631aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <i class=\"icon-ok-circle\"></i>";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        } else {
            // line 20
            echo "        <i class=\"icon-ban-circle\"></i>";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  530 => 165,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 154,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  380 => 83,  369 => 136,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  275 => 77,  272 => 76,  367 => 131,  352 => 121,  340 => 90,  332 => 88,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  188 => 21,  23 => 11,  12 => 34,  358 => 139,  351 => 135,  347 => 118,  343 => 91,  338 => 130,  327 => 86,  323 => 125,  319 => 124,  315 => 83,  301 => 117,  299 => 116,  293 => 75,  281 => 110,  277 => 68,  271 => 66,  265 => 64,  260 => 62,  257 => 61,  251 => 101,  239 => 97,  228 => 88,  225 => 87,  211 => 81,  197 => 56,  174 => 53,  253 => 1,  202 => 77,  185 => 20,  180 => 104,  175 => 53,  172 => 52,  165 => 64,  160 => 48,  137 => 47,  97 => 41,  34 => 17,  212 => 74,  155 => 103,  129 => 56,  118 => 46,  114 => 50,  65 => 29,  152 => 63,  113 => 48,  84 => 34,  70 => 23,  58 => 25,  210 => 73,  126 => 55,  20 => 11,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  353 => 294,  346 => 92,  333 => 117,  286 => 242,  274 => 236,  167 => 48,  124 => 43,  76 => 35,  287 => 72,  256 => 184,  236 => 167,  215 => 149,  127 => 34,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 169,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 135,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 93,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 82,  289 => 112,  261 => 187,  259 => 186,  248 => 100,  213 => 82,  198 => 66,  148 => 44,  270 => 4,  262 => 63,  255 => 91,  233 => 81,  226 => 67,  205 => 59,  200 => 69,  192 => 55,  186 => 54,  170 => 59,  153 => 48,  110 => 36,  150 => 58,  104 => 42,  90 => 36,  81 => 33,  77 => 34,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 158,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 127,  354 => 293,  330 => 87,  290 => 244,  282 => 80,  222 => 188,  206 => 71,  190 => 131,  161 => 111,  134 => 56,  100 => 43,  53 => 18,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 95,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 81,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 122,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 213,  294 => 245,  285 => 81,  283 => 70,  278 => 238,  268 => 107,  264 => 72,  258 => 81,  252 => 90,  247 => 86,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 57,  128 => 44,  107 => 48,  61 => 26,  273 => 197,  269 => 75,  254 => 60,  243 => 68,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 43,  71 => 32,  67 => 19,  63 => 31,  59 => 27,  38 => 18,  94 => 40,  89 => 42,  85 => 37,  75 => 31,  68 => 30,  56 => 27,  87 => 35,  21 => 11,  26 => 14,  93 => 40,  88 => 38,  78 => 36,  46 => 22,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 57,  196 => 65,  183 => 62,  171 => 116,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 52,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 33,  47 => 19,  40 => 19,  37 => 17,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 45,  101 => 46,  98 => 42,  96 => 44,  83 => 36,  74 => 33,  66 => 32,  55 => 21,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 20,  32 => 14,  29 => 15,  209 => 24,  203 => 78,  199 => 136,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 113,  164 => 54,  162 => 56,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 89,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 45,  95 => 19,  92 => 43,  86 => 37,  82 => 38,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 22,  45 => 21,  42 => 20,  39 => 17,  36 => 17,  33 => 16,  30 => 15,);
    }
}
