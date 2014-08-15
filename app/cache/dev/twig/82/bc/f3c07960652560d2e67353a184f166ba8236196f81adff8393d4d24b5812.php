<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_82bcf3c07960652560d2e67353a184f166ba8236196f81adff8393d4d24b5812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  811 => 256,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  578 => 196,  569 => 183,  548 => 165,  523 => 156,  506 => 151,  491 => 147,  481 => 143,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 127,  417 => 126,  408 => 124,  396 => 159,  376 => 119,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  231 => 33,  194 => 177,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  635 => 191,  618 => 190,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 145,  483 => 144,  473 => 150,  465 => 139,  456 => 143,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  400 => 161,  371 => 113,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  326 => 93,  311 => 89,  297 => 84,  263 => 71,  250 => 67,  191 => 50,  146 => 34,  344 => 97,  335 => 93,  321 => 91,  295 => 88,  292 => 87,  184 => 47,  181 => 47,  178 => 119,  572 => 193,  561 => 174,  557 => 169,  549 => 174,  544 => 172,  538 => 170,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  380 => 83,  369 => 115,  324 => 92,  307 => 66,  300 => 113,  291 => 82,  288 => 85,  275 => 57,  272 => 76,  367 => 131,  352 => 121,  340 => 95,  332 => 75,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  280 => 82,  249 => 67,  223 => 58,  216 => 28,  188 => 174,  23 => 13,  12 => 34,  358 => 113,  351 => 135,  347 => 102,  343 => 91,  338 => 76,  327 => 86,  323 => 125,  319 => 71,  315 => 90,  301 => 117,  299 => 64,  293 => 61,  281 => 110,  277 => 78,  271 => 55,  265 => 64,  260 => 62,  257 => 49,  251 => 101,  239 => 97,  228 => 59,  225 => 87,  211 => 81,  197 => 54,  174 => 53,  253 => 47,  202 => 77,  185 => 173,  180 => 120,  175 => 118,  172 => 52,  165 => 64,  160 => 48,  137 => 27,  97 => 87,  34 => 53,  212 => 74,  155 => 103,  129 => 24,  118 => 28,  114 => 88,  65 => 5,  152 => 99,  113 => 46,  84 => 16,  70 => 23,  58 => 22,  210 => 22,  126 => 55,  20 => 11,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  353 => 294,  346 => 92,  333 => 117,  286 => 80,  274 => 77,  167 => 48,  124 => 23,  76 => 13,  287 => 72,  256 => 184,  236 => 35,  215 => 54,  127 => 34,  826 => 533,  820 => 437,  815 => 258,  809 => 255,  803 => 73,  797 => 18,  793 => 17,  789 => 248,  785 => 15,  781 => 14,  777 => 13,  773 => 242,  767 => 240,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 184,  692 => 490,  670 => 471,  661 => 465,  652 => 214,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 204,  610 => 435,  600 => 428,  590 => 178,  584 => 199,  562 => 402,  554 => 397,  536 => 161,  526 => 157,  509 => 361,  495 => 148,  485 => 343,  470 => 135,  462 => 138,  452 => 322,  429 => 305,  403 => 121,  397 => 282,  390 => 125,  382 => 93,  366 => 263,  359 => 259,  348 => 251,  329 => 95,  313 => 82,  289 => 59,  261 => 50,  259 => 70,  248 => 100,  213 => 82,  198 => 66,  148 => 97,  270 => 4,  262 => 63,  255 => 91,  233 => 62,  226 => 67,  205 => 59,  200 => 55,  192 => 55,  186 => 54,  170 => 59,  153 => 35,  110 => 25,  150 => 58,  104 => 23,  90 => 27,  81 => 26,  77 => 27,  591 => 407,  586 => 406,  581 => 405,  576 => 195,  571 => 403,  566 => 182,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 158,  488 => 388,  478 => 142,  438 => 344,  434 => 130,  389 => 313,  385 => 312,  378 => 308,  361 => 107,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 30,  206 => 71,  190 => 175,  161 => 38,  134 => 56,  100 => 43,  53 => 20,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 146,  430 => 137,  427 => 339,  423 => 128,  413 => 292,  409 => 124,  407 => 95,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 112,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 68,  309 => 120,  305 => 119,  298 => 213,  294 => 245,  285 => 84,  283 => 58,  278 => 238,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 54,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 197,  269 => 75,  254 => 68,  243 => 65,  240 => 176,  238 => 36,  235 => 74,  230 => 166,  227 => 32,  224 => 71,  221 => 79,  219 => 29,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 44,  102 => 17,  71 => 29,  67 => 28,  63 => 22,  59 => 23,  38 => 17,  94 => 86,  89 => 34,  85 => 30,  75 => 31,  68 => 6,  56 => 81,  87 => 17,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 80,  46 => 19,  27 => 16,  44 => 21,  31 => 14,  28 => 13,  201 => 182,  196 => 52,  183 => 121,  171 => 116,  166 => 110,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 91,  117 => 89,  105 => 44,  91 => 85,  62 => 24,  49 => 18,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 54,  69 => 53,  47 => 17,  40 => 44,  37 => 12,  22 => 11,  246 => 69,  157 => 41,  145 => 53,  139 => 31,  131 => 25,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 82,  74 => 78,  66 => 23,  55 => 22,  52 => 17,  50 => 78,  43 => 15,  41 => 14,  35 => 11,  32 => 21,  29 => 16,  209 => 24,  203 => 278,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 112,  168 => 113,  164 => 109,  162 => 56,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 24,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
