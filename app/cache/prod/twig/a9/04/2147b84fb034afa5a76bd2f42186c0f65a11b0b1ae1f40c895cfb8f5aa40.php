<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_a9042147b84fb034afa5a76bd2f42186c0f65a11b0b1ae1f40c895cfb8f5aa40 extends Twig_Template
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
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : null) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo " %
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 154,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  324 => 116,  300 => 113,  288 => 108,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  367 => 131,  352 => 121,  340 => 90,  332 => 88,  320 => 84,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  287 => 72,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  23 => 11,  12 => 34,  145 => 53,  110 => 41,  96 => 44,  358 => 139,  351 => 135,  347 => 118,  343 => 91,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  301 => 117,  289 => 112,  277 => 68,  271 => 66,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  213 => 82,  211 => 81,  148 => 44,  233 => 81,  202 => 77,  198 => 66,  180 => 104,  175 => 53,  172 => 52,  165 => 64,  137 => 47,  34 => 16,  52 => 23,  212 => 74,  124 => 43,  83 => 32,  215 => 160,  184 => 132,  113 => 42,  74 => 29,  210 => 73,  126 => 55,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  346 => 92,  333 => 117,  329 => 279,  286 => 242,  270 => 4,  70 => 23,  65 => 29,  152 => 63,  118 => 46,  76 => 35,  293 => 75,  262 => 63,  205 => 59,  174 => 53,  157 => 47,  127 => 34,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 165,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 122,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 125,  307 => 115,  292 => 209,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 50,  58 => 25,  299 => 116,  291 => 109,  284 => 100,  281 => 110,  274 => 236,  267 => 193,  260 => 62,  257 => 61,  250 => 84,  236 => 81,  234 => 169,  225 => 87,  197 => 56,  192 => 55,  188 => 21,  185 => 20,  181 => 63,  167 => 48,  160 => 48,  153 => 48,  146 => 47,  129 => 56,  97 => 41,  84 => 34,  37 => 17,  150 => 58,  139 => 51,  104 => 42,  90 => 36,  81 => 33,  77 => 30,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 158,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 127,  354 => 293,  330 => 87,  290 => 244,  282 => 80,  222 => 76,  206 => 71,  190 => 131,  161 => 106,  134 => 56,  120 => 46,  100 => 43,  53 => 18,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 95,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 81,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 122,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 81,  283 => 70,  278 => 238,  268 => 107,  264 => 72,  258 => 81,  252 => 80,  247 => 179,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  111 => 43,  107 => 40,  61 => 26,  273 => 96,  269 => 75,  254 => 60,  246 => 69,  243 => 68,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 28,  67 => 19,  63 => 25,  59 => 27,  47 => 20,  38 => 18,  94 => 40,  89 => 34,  85 => 37,  79 => 34,  75 => 31,  68 => 27,  56 => 27,  50 => 21,  29 => 15,  87 => 35,  72 => 30,  55 => 21,  21 => 11,  26 => 14,  98 => 36,  93 => 40,  88 => 38,  78 => 36,  46 => 22,  27 => 14,  40 => 19,  44 => 19,  35 => 20,  31 => 15,  43 => 21,  41 => 20,  28 => 14,  201 => 57,  196 => 65,  183 => 82,  171 => 116,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  123 => 47,  121 => 52,  117 => 45,  115 => 40,  105 => 44,  101 => 37,  91 => 39,  69 => 33,  66 => 26,  62 => 28,  49 => 23,  24 => 13,  32 => 14,  25 => 13,  22 => 12,  19 => 11,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 113,  164 => 54,  162 => 59,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 45,  95 => 19,  92 => 35,  86 => 33,  82 => 38,  80 => 31,  73 => 34,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 24,  48 => 22,  45 => 21,  42 => 18,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
