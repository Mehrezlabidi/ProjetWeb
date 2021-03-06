<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_1163d7cccd33f3f94f5911808be78040f9cbf0e92b6b5a2498918ba35b495490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 151,  155 => 103,  129 => 57,  118 => 48,  114 => 71,  65 => 31,  152 => 100,  113 => 49,  84 => 39,  70 => 33,  58 => 29,  210 => 148,  126 => 76,  20 => 11,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  333 => 280,  286 => 242,  274 => 236,  167 => 72,  124 => 78,  76 => 35,  287 => 212,  256 => 184,  236 => 167,  215 => 149,  127 => 56,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 382,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 378,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 273,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 225,  289 => 207,  261 => 187,  259 => 186,  248 => 178,  213 => 155,  198 => 146,  148 => 102,  270 => 235,  262 => 92,  255 => 91,  233 => 80,  226 => 79,  205 => 71,  200 => 69,  192 => 134,  186 => 63,  170 => 59,  153 => 100,  110 => 50,  150 => 62,  104 => 47,  90 => 41,  81 => 40,  77 => 27,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 188,  206 => 151,  190 => 131,  161 => 111,  134 => 97,  100 => 43,  53 => 19,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 268,  368 => 112,  365 => 298,  362 => 110,  360 => 109,  355 => 106,  341 => 283,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 213,  294 => 245,  285 => 89,  283 => 88,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 90,  247 => 86,  241 => 176,  229 => 73,  220 => 159,  214 => 185,  177 => 65,  169 => 113,  140 => 55,  132 => 83,  128 => 97,  107 => 45,  61 => 29,  273 => 197,  269 => 94,  254 => 92,  243 => 179,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 110,  143 => 56,  135 => 62,  119 => 53,  102 => 32,  71 => 20,  67 => 15,  63 => 31,  59 => 24,  38 => 6,  94 => 42,  89 => 44,  85 => 42,  75 => 37,  68 => 34,  56 => 23,  87 => 25,  21 => 2,  26 => 14,  93 => 46,  88 => 62,  78 => 21,  46 => 7,  27 => 13,  44 => 12,  31 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 62,  171 => 116,  166 => 71,  163 => 62,  158 => 55,  156 => 66,  151 => 96,  142 => 99,  138 => 98,  136 => 56,  121 => 56,  117 => 40,  105 => 37,  91 => 28,  62 => 30,  49 => 12,  24 => 4,  25 => 12,  19 => 1,  79 => 39,  72 => 34,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 209,  157 => 64,  145 => 46,  139 => 59,  131 => 52,  123 => 55,  120 => 54,  115 => 72,  111 => 46,  108 => 70,  101 => 25,  98 => 24,  96 => 44,  83 => 39,  74 => 24,  66 => 32,  55 => 15,  52 => 37,  50 => 10,  43 => 17,  41 => 10,  35 => 5,  32 => 12,  29 => 15,  209 => 148,  203 => 78,  199 => 136,  193 => 73,  189 => 131,  187 => 84,  182 => 66,  176 => 61,  173 => 65,  168 => 113,  164 => 57,  162 => 56,  154 => 58,  149 => 51,  147 => 50,  144 => 92,  141 => 89,  133 => 58,  130 => 81,  125 => 91,  122 => 74,  116 => 52,  112 => 49,  109 => 51,  106 => 48,  103 => 50,  99 => 35,  95 => 45,  92 => 42,  86 => 40,  82 => 22,  80 => 37,  73 => 36,  64 => 32,  60 => 31,  57 => 28,  54 => 23,  51 => 22,  48 => 21,  45 => 18,  42 => 18,  39 => 11,  36 => 10,  33 => 5,  30 => 7,);
    }
}
