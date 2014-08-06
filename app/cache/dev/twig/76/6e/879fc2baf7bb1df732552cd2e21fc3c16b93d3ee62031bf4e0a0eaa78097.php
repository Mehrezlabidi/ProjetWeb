<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_766e879fc2baf7bb1df732552cd2e21fc3c16b93d3ee62031bf4e0a0eaa78097 extends Twig_Template
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
        echo "    <div class=\"span3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                echo "</a></li>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 38
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        } else {
            // line 42
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 43
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 45
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  260 => 104,  257 => 103,  251 => 101,  239 => 97,  228 => 88,  225 => 87,  211 => 81,  197 => 74,  174 => 67,  253 => 1,  202 => 77,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  165 => 64,  160 => 44,  137 => 37,  97 => 47,  34 => 18,  212 => 74,  155 => 103,  129 => 59,  118 => 48,  114 => 71,  65 => 26,  152 => 100,  113 => 42,  84 => 16,  70 => 33,  58 => 22,  210 => 73,  126 => 45,  20 => 11,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  333 => 280,  286 => 242,  274 => 236,  167 => 48,  124 => 52,  76 => 32,  287 => 212,  256 => 184,  236 => 167,  215 => 149,  127 => 54,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 382,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 378,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 273,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 225,  289 => 112,  261 => 187,  259 => 186,  248 => 100,  213 => 82,  198 => 66,  148 => 60,  270 => 4,  262 => 105,  255 => 91,  233 => 81,  226 => 79,  205 => 71,  200 => 69,  192 => 64,  186 => 63,  170 => 59,  153 => 62,  110 => 41,  150 => 62,  104 => 40,  90 => 20,  81 => 16,  77 => 36,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 188,  206 => 71,  190 => 131,  161 => 111,  134 => 56,  100 => 41,  53 => 24,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 268,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 213,  294 => 245,  285 => 111,  283 => 88,  278 => 238,  268 => 107,  264 => 2,  258 => 81,  252 => 90,  247 => 86,  241 => 176,  229 => 73,  220 => 159,  214 => 185,  177 => 54,  169 => 69,  140 => 55,  132 => 47,  128 => 97,  107 => 52,  61 => 27,  273 => 197,  269 => 94,  254 => 102,  243 => 98,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 110,  143 => 59,  135 => 48,  119 => 53,  102 => 42,  71 => 29,  67 => 31,  63 => 31,  59 => 24,  38 => 19,  94 => 39,  89 => 37,  85 => 35,  75 => 33,  68 => 34,  56 => 21,  87 => 25,  21 => 2,  26 => 14,  93 => 21,  88 => 36,  78 => 31,  46 => 7,  27 => 12,  44 => 21,  31 => 3,  28 => 4,  201 => 92,  196 => 65,  183 => 62,  171 => 116,  166 => 71,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 56,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  24 => 11,  25 => 12,  19 => 1,  79 => 37,  72 => 10,  69 => 32,  47 => 21,  40 => 20,  37 => 19,  22 => 2,  246 => 99,  157 => 64,  145 => 59,  139 => 57,  131 => 55,  123 => 55,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 38,  96 => 19,  83 => 39,  74 => 23,  66 => 29,  55 => 25,  52 => 78,  50 => 23,  43 => 17,  41 => 20,  35 => 15,  32 => 14,  29 => 15,  209 => 148,  203 => 78,  199 => 136,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 61,  173 => 71,  168 => 113,  164 => 57,  162 => 56,  154 => 40,  149 => 51,  147 => 50,  144 => 92,  141 => 89,  133 => 58,  130 => 81,  125 => 91,  122 => 74,  116 => 43,  112 => 47,  109 => 53,  106 => 44,  103 => 50,  99 => 35,  95 => 22,  92 => 42,  86 => 17,  82 => 33,  80 => 37,  73 => 36,  64 => 28,  60 => 24,  57 => 23,  54 => 23,  51 => 22,  48 => 21,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 13,  30 => 9,);
    }
}
