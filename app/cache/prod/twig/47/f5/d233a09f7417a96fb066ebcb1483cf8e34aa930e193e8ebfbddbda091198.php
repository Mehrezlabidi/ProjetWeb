<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_47f5d233a09f7417a96fb066ebcb1483cf8e34aa930e193e8ebfbddbda091198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span3";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            // line 34
            echo "            <div class=\"span4\">
                ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span4";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  110 => 36,  96 => 19,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  319 => 124,  315 => 123,  301 => 117,  289 => 112,  277 => 109,  271 => 108,  265 => 106,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  213 => 82,  211 => 81,  148 => 60,  233 => 81,  202 => 77,  198 => 66,  180 => 56,  175 => 53,  172 => 51,  165 => 64,  137 => 37,  34 => 15,  52 => 20,  212 => 74,  124 => 52,  83 => 39,  215 => 160,  184 => 132,  113 => 37,  74 => 23,  210 => 73,  126 => 45,  20 => 11,  470 => 378,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  346 => 290,  333 => 280,  329 => 279,  286 => 242,  270 => 4,  70 => 25,  65 => 26,  152 => 100,  118 => 48,  76 => 32,  293 => 113,  262 => 105,  205 => 139,  174 => 67,  157 => 64,  127 => 54,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 125,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 71,  58 => 22,  299 => 116,  291 => 101,  284 => 100,  281 => 110,  274 => 236,  267 => 193,  260 => 104,  257 => 103,  250 => 84,  236 => 81,  234 => 169,  225 => 87,  197 => 74,  192 => 64,  188 => 65,  185 => 59,  181 => 63,  167 => 48,  160 => 44,  153 => 48,  146 => 47,  129 => 42,  97 => 31,  84 => 16,  37 => 19,  150 => 65,  139 => 57,  104 => 40,  90 => 20,  81 => 16,  77 => 36,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 76,  206 => 71,  190 => 131,  161 => 106,  134 => 56,  120 => 36,  100 => 41,  53 => 24,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 116,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 106,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 111,  283 => 203,  278 => 238,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 185,  177 => 54,  169 => 69,  140 => 44,  132 => 43,  128 => 93,  111 => 30,  107 => 52,  61 => 23,  273 => 96,  269 => 94,  254 => 102,  246 => 99,  243 => 98,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  131 => 55,  119 => 39,  108 => 28,  102 => 42,  71 => 29,  67 => 24,  63 => 15,  59 => 21,  47 => 19,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  79 => 37,  75 => 33,  68 => 30,  56 => 21,  50 => 25,  29 => 15,  87 => 41,  72 => 10,  55 => 21,  21 => 2,  26 => 14,  98 => 38,  93 => 21,  88 => 36,  78 => 26,  46 => 9,  27 => 14,  40 => 20,  44 => 21,  35 => 15,  31 => 3,  43 => 21,  41 => 20,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 116,  166 => 85,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 95,  123 => 55,  121 => 51,  117 => 50,  115 => 33,  105 => 39,  101 => 33,  91 => 30,  69 => 32,  66 => 29,  62 => 25,  49 => 9,  24 => 13,  32 => 14,  25 => 12,  22 => 12,  19 => 11,  209 => 148,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 113,  164 => 115,  162 => 59,  154 => 40,  149 => 75,  147 => 46,  144 => 45,  141 => 48,  133 => 55,  130 => 81,  125 => 40,  122 => 74,  116 => 43,  112 => 47,  109 => 53,  106 => 35,  103 => 34,  99 => 31,  95 => 22,  92 => 29,  86 => 17,  82 => 27,  80 => 37,  73 => 36,  64 => 28,  60 => 24,  57 => 27,  54 => 26,  51 => 22,  48 => 21,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
