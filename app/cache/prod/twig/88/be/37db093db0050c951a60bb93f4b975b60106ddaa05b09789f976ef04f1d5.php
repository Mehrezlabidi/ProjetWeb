<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_88be37db093db0050c951a60bb93f4b975b60106ddaa05b09789f976ef04f1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        echo " cms-container";
        if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "hasParent", array(), "method"))) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class"), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "pre");
        }
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "post");
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : null)));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 151,  124 => 78,  83 => 39,  215 => 160,  184 => 132,  113 => 49,  74 => 24,  210 => 148,  126 => 76,  20 => 11,  470 => 378,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  346 => 290,  333 => 280,  329 => 279,  286 => 242,  270 => 235,  70 => 33,  65 => 31,  152 => 100,  118 => 48,  76 => 35,  293 => 215,  262 => 187,  205 => 139,  174 => 113,  157 => 99,  127 => 56,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 182,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 71,  58 => 29,  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 236,  267 => 193,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 169,  225 => 78,  197 => 70,  192 => 134,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 100,  146 => 47,  129 => 57,  97 => 52,  84 => 39,  37 => 5,  150 => 65,  139 => 56,  104 => 31,  90 => 53,  81 => 40,  77 => 27,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 82,  120 => 54,  100 => 43,  53 => 19,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 116,  368 => 264,  365 => 298,  362 => 110,  360 => 259,  355 => 106,  341 => 283,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 203,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 185,  177 => 114,  169 => 113,  140 => 44,  132 => 83,  128 => 93,  111 => 46,  107 => 45,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 179,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 152,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 97,  135 => 62,  131 => 52,  119 => 87,  108 => 70,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 21,  47 => 9,  38 => 6,  94 => 42,  89 => 44,  85 => 42,  79 => 39,  75 => 17,  68 => 34,  56 => 23,  50 => 18,  29 => 15,  87 => 41,  72 => 34,  55 => 16,  21 => 2,  26 => 6,  98 => 24,  93 => 46,  88 => 6,  78 => 21,  46 => 9,  27 => 13,  40 => 14,  44 => 8,  35 => 10,  31 => 8,  43 => 17,  41 => 10,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 116,  166 => 85,  163 => 62,  158 => 67,  156 => 77,  151 => 63,  142 => 98,  138 => 72,  136 => 95,  123 => 55,  121 => 56,  117 => 44,  115 => 72,  105 => 65,  101 => 25,  91 => 28,  69 => 35,  66 => 32,  62 => 30,  49 => 19,  24 => 4,  32 => 12,  25 => 12,  22 => 2,  19 => 1,  209 => 148,  203 => 78,  199 => 67,  193 => 73,  189 => 131,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 113,  164 => 115,  162 => 59,  154 => 58,  149 => 75,  147 => 92,  144 => 92,  141 => 48,  133 => 55,  130 => 81,  125 => 39,  122 => 74,  116 => 41,  112 => 49,  109 => 51,  106 => 48,  103 => 50,  99 => 31,  95 => 45,  92 => 29,  86 => 62,  82 => 22,  80 => 37,  73 => 36,  64 => 32,  60 => 31,  57 => 28,  54 => 10,  51 => 22,  48 => 21,  45 => 18,  42 => 18,  39 => 11,  36 => 10,  33 => 5,  30 => 7,);
    }
}
