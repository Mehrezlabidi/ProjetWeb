<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2b86e009b4d19ac7339989db2e59b7748cb5aa64f039e6eda93da153ea3cec67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  710 => 475,  698 => 471,  682 => 467,  679 => 466,  660 => 464,  649 => 462,  634 => 456,  625 => 453,  622 => 452,  606 => 449,  601 => 446,  532 => 410,  529 => 409,  527 => 408,  334 => 141,  276 => 111,  431 => 189,  207 => 75,  306 => 107,  406 => 158,  373 => 156,  364 => 139,  244 => 85,  234 => 80,  195 => 68,  318 => 111,  316 => 121,  284 => 106,  279 => 104,  237 => 86,  694 => 470,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  577 => 341,  567 => 414,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  466 => 280,  445 => 267,  443 => 261,  439 => 195,  424 => 254,  422 => 184,  383 => 224,  331 => 140,  267 => 101,  242 => 113,  232 => 88,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  811 => 256,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 479,  740 => 188,  735 => 187,  730 => 186,  727 => 476,  719 => 183,  715 => 277,  708 => 267,  706 => 473,  699 => 235,  693 => 232,  690 => 469,  688 => 230,  683 => 227,  677 => 465,  674 => 223,  672 => 222,  664 => 218,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  578 => 196,  569 => 183,  548 => 165,  523 => 156,  506 => 151,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 249,  417 => 126,  408 => 176,  396 => 234,  376 => 119,  363 => 153,  345 => 147,  328 => 139,  325 => 129,  317 => 70,  303 => 106,  231 => 83,  194 => 68,  713 => 270,  707 => 211,  704 => 210,  702 => 472,  696 => 206,  686 => 468,  681 => 203,  669 => 221,  666 => 200,  663 => 393,  655 => 215,  635 => 191,  618 => 190,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 351,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  400 => 161,  371 => 156,  349 => 133,  342 => 137,  339 => 100,  336 => 126,  326 => 138,  311 => 89,  297 => 104,  263 => 95,  250 => 93,  191 => 67,  146 => 49,  344 => 119,  335 => 134,  321 => 135,  295 => 88,  292 => 135,  184 => 63,  181 => 65,  178 => 59,  572 => 193,  561 => 174,  557 => 330,  549 => 411,  544 => 172,  538 => 319,  530 => 158,  521 => 162,  517 => 404,  511 => 160,  508 => 159,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  415 => 180,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 159,  380 => 158,  369 => 141,  324 => 113,  307 => 128,  300 => 105,  291 => 102,  288 => 118,  275 => 105,  272 => 158,  367 => 155,  352 => 135,  340 => 145,  332 => 116,  320 => 127,  310 => 81,  304 => 174,  302 => 125,  296 => 121,  280 => 131,  249 => 67,  223 => 58,  216 => 79,  188 => 90,  23 => 3,  12 => 34,  358 => 151,  351 => 120,  347 => 102,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 71,  315 => 131,  301 => 111,  299 => 112,  293 => 120,  281 => 114,  277 => 100,  271 => 55,  265 => 105,  260 => 124,  257 => 149,  251 => 101,  239 => 83,  228 => 78,  225 => 77,  211 => 81,  197 => 69,  174 => 65,  253 => 100,  202 => 94,  185 => 74,  180 => 62,  175 => 58,  172 => 57,  165 => 83,  160 => 76,  137 => 46,  97 => 41,  34 => 5,  212 => 78,  155 => 47,  129 => 57,  118 => 49,  114 => 71,  65 => 11,  152 => 46,  113 => 48,  84 => 40,  70 => 15,  58 => 25,  210 => 77,  126 => 42,  20 => 1,  426 => 102,  419 => 98,  405 => 325,  401 => 172,  394 => 168,  377 => 115,  370 => 100,  357 => 123,  353 => 149,  346 => 196,  333 => 117,  286 => 112,  274 => 110,  167 => 71,  124 => 31,  76 => 34,  287 => 72,  256 => 96,  236 => 109,  215 => 74,  127 => 35,  826 => 533,  820 => 437,  815 => 258,  809 => 255,  803 => 73,  797 => 18,  793 => 17,  789 => 248,  785 => 15,  781 => 14,  777 => 13,  773 => 242,  767 => 240,  763 => 7,  760 => 6,  746 => 478,  744 => 533,  729 => 521,  722 => 184,  692 => 490,  670 => 471,  661 => 465,  652 => 214,  645 => 455,  637 => 378,  629 => 454,  620 => 451,  616 => 437,  613 => 204,  610 => 435,  600 => 428,  590 => 178,  584 => 199,  562 => 402,  554 => 397,  536 => 161,  526 => 310,  509 => 304,  495 => 148,  485 => 343,  470 => 135,  462 => 202,  452 => 272,  429 => 188,  403 => 157,  397 => 282,  390 => 150,  382 => 93,  366 => 140,  359 => 138,  348 => 140,  329 => 131,  313 => 82,  289 => 113,  261 => 91,  259 => 103,  248 => 97,  213 => 78,  198 => 69,  148 => 64,  270 => 102,  262 => 98,  255 => 101,  233 => 87,  226 => 84,  205 => 59,  200 => 72,  192 => 88,  186 => 82,  170 => 84,  153 => 77,  110 => 22,  150 => 55,  104 => 32,  90 => 42,  81 => 23,  77 => 27,  591 => 407,  586 => 406,  581 => 345,  576 => 195,  571 => 338,  566 => 182,  522 => 406,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 302,  488 => 388,  478 => 142,  438 => 344,  434 => 130,  389 => 160,  385 => 312,  378 => 157,  361 => 152,  354 => 293,  330 => 87,  290 => 119,  282 => 79,  222 => 83,  206 => 71,  190 => 76,  161 => 63,  134 => 39,  100 => 36,  53 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 339,  423 => 128,  413 => 292,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 164,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 243,  322 => 275,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 245,  285 => 84,  283 => 115,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 88,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 12,  273 => 197,  269 => 107,  254 => 68,  243 => 92,  240 => 176,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 75,  219 => 101,  217 => 79,  208 => 76,  204 => 78,  179 => 66,  159 => 70,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 33,  85 => 23,  75 => 19,  68 => 12,  56 => 16,  87 => 41,  21 => 11,  26 => 9,  93 => 34,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 72,  196 => 92,  183 => 121,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 45,  142 => 61,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 6,  22 => 1,  246 => 136,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 67,  149 => 50,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 46,  99 => 23,  95 => 43,  92 => 28,  86 => 43,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 22,  57 => 39,  54 => 14,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
