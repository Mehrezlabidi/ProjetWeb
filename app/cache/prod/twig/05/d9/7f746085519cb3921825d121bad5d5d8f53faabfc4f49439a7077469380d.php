<?php

/* SonataIntlBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_05d97f746085519cb3921825d121bad5d5d8f53faabfc4f49439a7077469380d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if ((null === (isset($context["value"]) ? $context["value"] : null))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["currency"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "currency");
            // line 19
            echo "        ";
            $context["attributes"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attributes"), array())) : (array()));
            // line 20
            echo "        ";
            $context["textAttributes"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "textAttributes"), array())) : (array()));
            // line 21
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "locale"), null)) : (null));
            // line 22
            echo "
        ";
            // line 23
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency((isset($context["value"]) ? $context["value"] : null), (isset($context["currency"]) ? $context["currency"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["textAttributes"]) ? $context["textAttributes"] : null), (isset($context["locale"]) ? $context["locale"] : null));
        }
    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  170 => 79,  406 => 158,  373 => 142,  364 => 139,  359 => 138,  244 => 85,  195 => 68,  318 => 145,  316 => 121,  279 => 104,  256 => 121,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  232 => 84,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  798 => 251,  795 => 250,  789 => 248,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  569 => 183,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 249,  417 => 126,  408 => 124,  396 => 234,  390 => 150,  363 => 114,  345 => 97,  328 => 124,  325 => 73,  317 => 70,  303 => 140,  261 => 91,  231 => 33,  194 => 87,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  681 => 203,  669 => 221,  666 => 200,  663 => 393,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 351,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 157,  400 => 161,  371 => 113,  349 => 133,  339 => 100,  336 => 126,  326 => 185,  311 => 89,  297 => 84,  263 => 125,  191 => 69,  344 => 97,  335 => 188,  321 => 123,  295 => 88,  259 => 70,  178 => 119,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 247,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  369 => 141,  324 => 92,  300 => 139,  288 => 107,  275 => 103,  272 => 158,  226 => 67,  186 => 82,  367 => 131,  352 => 135,  340 => 95,  332 => 125,  320 => 84,  313 => 82,  310 => 81,  304 => 174,  302 => 114,  296 => 109,  287 => 72,  280 => 131,  249 => 67,  223 => 58,  216 => 100,  23 => 18,  12 => 34,  145 => 52,  110 => 51,  96 => 40,  358 => 113,  351 => 135,  347 => 102,  343 => 91,  338 => 76,  327 => 86,  319 => 71,  315 => 118,  301 => 111,  289 => 59,  277 => 100,  271 => 55,  265 => 126,  251 => 101,  248 => 116,  239 => 83,  228 => 78,  213 => 126,  211 => 81,  148 => 64,  233 => 62,  202 => 77,  198 => 69,  180 => 62,  175 => 77,  172 => 52,  165 => 77,  137 => 46,  34 => 18,  52 => 20,  212 => 74,  124 => 31,  83 => 82,  215 => 74,  184 => 63,  113 => 41,  74 => 34,  210 => 75,  126 => 42,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 156,  394 => 152,  377 => 115,  370 => 100,  357 => 125,  346 => 196,  333 => 117,  329 => 95,  286 => 133,  270 => 4,  70 => 33,  65 => 30,  152 => 92,  118 => 28,  76 => 57,  293 => 109,  262 => 63,  205 => 59,  174 => 60,  157 => 41,  127 => 32,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 254,  800 => 252,  796 => 17,  791 => 15,  787 => 247,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 240,  761 => 6,  757 => 4,  754 => 3,  740 => 188,  738 => 529,  723 => 517,  716 => 513,  686 => 205,  664 => 218,  655 => 215,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 199,  578 => 196,  570 => 409,  556 => 398,  548 => 165,  530 => 158,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 273,  446 => 139,  397 => 281,  391 => 278,  376 => 119,  353 => 294,  342 => 129,  331 => 187,  323 => 125,  307 => 66,  292 => 135,  276 => 199,  255 => 183,  253 => 95,  242 => 113,  207 => 151,  200 => 70,  155 => 53,  114 => 71,  58 => 23,  299 => 112,  291 => 169,  284 => 106,  281 => 105,  274 => 129,  267 => 94,  260 => 124,  257 => 149,  250 => 93,  236 => 109,  234 => 80,  225 => 77,  197 => 90,  192 => 88,  188 => 174,  185 => 86,  181 => 80,  167 => 48,  160 => 76,  153 => 72,  146 => 49,  129 => 57,  97 => 63,  84 => 39,  37 => 17,  150 => 65,  139 => 60,  104 => 49,  90 => 27,  81 => 25,  77 => 27,  591 => 407,  586 => 406,  581 => 345,  576 => 195,  571 => 338,  566 => 182,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 302,  488 => 388,  478 => 142,  438 => 313,  434 => 130,  389 => 313,  385 => 312,  378 => 144,  361 => 208,  354 => 293,  330 => 87,  290 => 106,  282 => 79,  222 => 81,  206 => 71,  190 => 175,  161 => 71,  134 => 59,  120 => 56,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 339,  423 => 128,  413 => 328,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 136,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 245,  285 => 84,  283 => 102,  278 => 238,  268 => 127,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  111 => 40,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 68,  246 => 86,  243 => 89,  240 => 176,  238 => 139,  235 => 74,  230 => 106,  227 => 134,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  131 => 48,  119 => 28,  108 => 48,  102 => 38,  71 => 29,  67 => 32,  63 => 24,  59 => 28,  47 => 19,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  79 => 31,  75 => 39,  68 => 31,  56 => 24,  50 => 20,  29 => 15,  87 => 33,  72 => 37,  55 => 21,  21 => 12,  26 => 14,  98 => 47,  93 => 34,  88 => 60,  78 => 40,  46 => 21,  27 => 16,  40 => 18,  44 => 19,  35 => 16,  31 => 16,  43 => 20,  41 => 18,  28 => 14,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 75,  156 => 68,  151 => 45,  142 => 61,  138 => 61,  136 => 60,  123 => 57,  121 => 53,  117 => 51,  115 => 50,  105 => 27,  101 => 73,  91 => 85,  69 => 24,  66 => 25,  62 => 29,  49 => 21,  24 => 13,  32 => 16,  25 => 12,  22 => 12,  19 => 11,  209 => 96,  203 => 93,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 82,  173 => 112,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 69,  144 => 68,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 52,  109 => 40,  106 => 35,  103 => 46,  99 => 26,  95 => 43,  92 => 45,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 25,  51 => 24,  48 => 23,  45 => 22,  42 => 21,  39 => 20,  36 => 19,  33 => 16,  30 => 15,);
    }
}
