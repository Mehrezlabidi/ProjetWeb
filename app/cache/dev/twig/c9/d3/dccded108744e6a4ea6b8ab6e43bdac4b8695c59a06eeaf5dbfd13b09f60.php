<?php

/* knp_menu.html.twig */
class __TwigTemplate_c9d3dccded108744e6a4ea6b8ab6e43bdac4b8695c59a06eeaf5dbfd13b09f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('children', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('item', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('linkElement', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('spanElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes");
        // line 17
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 22
            echo "    <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 23
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 28
    public function block_children($context, array $blocks = array())
    {
        // line 30
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 31
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 33
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")))) {
            // line 34
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth") - 1)));
        }
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 41
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        // line 45
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 47
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")) {
                // line 49
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor")) {
                // line 51
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 53
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 54
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 56
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 57
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 59
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 60
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 61
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 64
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
            echo ">";
            // line 65
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 66
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 68
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 71
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 72
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 73
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 74
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 81
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 83
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), "html", null, true);
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 1,  202 => 68,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  165 => 47,  160 => 44,  137 => 37,  97 => 47,  34 => 15,  212 => 74,  155 => 103,  129 => 59,  118 => 48,  114 => 71,  65 => 83,  152 => 100,  113 => 31,  84 => 16,  70 => 33,  58 => 29,  210 => 73,  126 => 76,  20 => 11,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  333 => 280,  286 => 242,  274 => 236,  167 => 48,  124 => 78,  76 => 35,  287 => 212,  256 => 184,  236 => 167,  215 => 149,  127 => 56,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 382,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 378,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 273,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 225,  289 => 207,  261 => 187,  259 => 186,  248 => 178,  213 => 155,  198 => 66,  148 => 102,  270 => 4,  262 => 92,  255 => 91,  233 => 81,  226 => 79,  205 => 71,  200 => 69,  192 => 64,  186 => 63,  170 => 59,  153 => 100,  110 => 50,  150 => 62,  104 => 47,  90 => 20,  81 => 15,  77 => 36,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 188,  206 => 71,  190 => 131,  161 => 111,  134 => 97,  100 => 23,  53 => 23,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 268,  368 => 112,  365 => 298,  362 => 110,  360 => 109,  355 => 106,  341 => 283,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 213,  294 => 245,  285 => 89,  283 => 88,  278 => 238,  268 => 3,  264 => 2,  258 => 81,  252 => 90,  247 => 86,  241 => 176,  229 => 73,  220 => 159,  214 => 185,  177 => 54,  169 => 49,  140 => 55,  132 => 83,  128 => 97,  107 => 52,  61 => 29,  273 => 197,  269 => 94,  254 => 92,  243 => 83,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 79,  219 => 76,  217 => 75,  208 => 72,  204 => 72,  179 => 69,  159 => 110,  143 => 56,  135 => 62,  119 => 53,  102 => 32,  71 => 20,  67 => 25,  63 => 31,  59 => 24,  38 => 6,  94 => 42,  89 => 43,  85 => 42,  75 => 37,  68 => 34,  56 => 23,  87 => 25,  21 => 2,  26 => 14,  93 => 21,  88 => 62,  78 => 21,  46 => 7,  27 => 8,  44 => 18,  31 => 14,  28 => 4,  201 => 92,  196 => 65,  183 => 62,  171 => 116,  166 => 71,  163 => 45,  158 => 55,  156 => 41,  151 => 96,  142 => 99,  138 => 98,  136 => 56,  121 => 56,  117 => 34,  105 => 51,  91 => 44,  62 => 82,  49 => 12,  24 => 4,  25 => 12,  19 => 1,  79 => 37,  72 => 10,  69 => 9,  47 => 43,  40 => 20,  37 => 19,  22 => 2,  246 => 209,  157 => 64,  145 => 46,  139 => 59,  131 => 52,  123 => 55,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 24,  96 => 44,  83 => 39,  74 => 11,  66 => 29,  55 => 79,  52 => 78,  50 => 44,  43 => 17,  41 => 18,  35 => 15,  32 => 14,  29 => 15,  209 => 148,  203 => 78,  199 => 136,  193 => 73,  189 => 61,  187 => 60,  182 => 57,  176 => 61,  173 => 65,  168 => 113,  164 => 57,  162 => 56,  154 => 40,  149 => 51,  147 => 50,  144 => 92,  141 => 89,  133 => 58,  130 => 81,  125 => 91,  122 => 74,  116 => 52,  112 => 49,  109 => 53,  106 => 48,  103 => 50,  99 => 35,  95 => 22,  92 => 42,  86 => 17,  82 => 39,  80 => 37,  73 => 36,  64 => 28,  60 => 81,  57 => 80,  54 => 23,  51 => 22,  48 => 21,  45 => 28,  42 => 27,  39 => 17,  36 => 16,  33 => 5,  30 => 9,);
    }
}
