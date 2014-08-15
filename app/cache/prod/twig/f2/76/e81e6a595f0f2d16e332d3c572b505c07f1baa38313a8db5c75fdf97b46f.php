<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_f276e81e6a595f0f2d16e332d3c572b505c07f1baa38313a8db5c75fdf97b46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 15,  52 => 23,  212 => 151,  124 => 78,  83 => 39,  215 => 160,  184 => 132,  113 => 49,  74 => 34,  210 => 148,  126 => 76,  20 => 11,  470 => 378,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  346 => 290,  333 => 280,  329 => 279,  286 => 242,  270 => 235,  70 => 33,  65 => 31,  152 => 100,  118 => 48,  76 => 35,  293 => 215,  262 => 187,  205 => 139,  174 => 113,  157 => 99,  127 => 56,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 182,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 71,  58 => 29,  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 236,  267 => 193,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 169,  225 => 78,  197 => 70,  192 => 134,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 100,  146 => 47,  129 => 59,  97 => 47,  84 => 40,  37 => 18,  150 => 65,  139 => 56,  104 => 31,  90 => 53,  81 => 40,  77 => 36,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 82,  120 => 54,  100 => 43,  53 => 23,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 116,  368 => 264,  365 => 298,  362 => 110,  360 => 259,  355 => 106,  341 => 283,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 203,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 185,  177 => 114,  169 => 113,  140 => 44,  132 => 83,  128 => 93,  111 => 46,  107 => 52,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 179,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 152,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 97,  135 => 62,  131 => 52,  119 => 87,  108 => 70,  102 => 32,  71 => 19,  67 => 25,  63 => 15,  59 => 21,  47 => 9,  38 => 6,  94 => 42,  89 => 43,  85 => 42,  79 => 37,  75 => 17,  68 => 34,  56 => 23,  50 => 22,  29 => 15,  87 => 41,  72 => 33,  55 => 24,  21 => 2,  26 => 14,  98 => 24,  93 => 45,  88 => 6,  78 => 21,  46 => 9,  27 => 13,  40 => 19,  44 => 18,  35 => 10,  31 => 14,  43 => 17,  41 => 18,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 116,  166 => 85,  163 => 62,  158 => 67,  156 => 77,  151 => 63,  142 => 98,  138 => 72,  136 => 95,  123 => 55,  121 => 56,  117 => 57,  115 => 72,  105 => 51,  101 => 49,  91 => 44,  69 => 31,  66 => 29,  62 => 27,  49 => 19,  24 => 4,  32 => 16,  25 => 12,  22 => 2,  19 => 1,  209 => 148,  203 => 78,  199 => 67,  193 => 73,  189 => 131,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 113,  164 => 115,  162 => 59,  154 => 58,  149 => 75,  147 => 92,  144 => 92,  141 => 48,  133 => 55,  130 => 81,  125 => 39,  122 => 74,  116 => 41,  112 => 49,  109 => 53,  106 => 48,  103 => 50,  99 => 31,  95 => 45,  92 => 29,  86 => 41,  82 => 39,  80 => 37,  73 => 36,  64 => 28,  60 => 26,  57 => 25,  54 => 10,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 5,  30 => 7,);
    }
}
