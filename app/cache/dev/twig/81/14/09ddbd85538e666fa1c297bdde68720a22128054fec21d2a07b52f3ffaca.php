<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_811409ddbd85538e666fa1c297bdde68720a22128054fec21d2a07b52f3ffaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : $this->getContext($context, "view_group")), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  530 => 165,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 154,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  380 => 83,  369 => 136,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  275 => 77,  272 => 76,  367 => 131,  352 => 121,  340 => 90,  332 => 88,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  188 => 21,  23 => 12,  12 => 34,  358 => 139,  351 => 135,  347 => 118,  343 => 91,  338 => 130,  327 => 86,  323 => 125,  319 => 124,  315 => 83,  301 => 117,  299 => 116,  293 => 75,  281 => 110,  277 => 68,  271 => 66,  265 => 64,  260 => 62,  257 => 61,  251 => 101,  239 => 97,  228 => 88,  225 => 87,  211 => 81,  197 => 56,  174 => 53,  253 => 1,  202 => 77,  185 => 20,  180 => 104,  175 => 53,  172 => 52,  165 => 64,  160 => 48,  137 => 47,  97 => 31,  34 => 16,  212 => 74,  155 => 103,  129 => 42,  118 => 46,  114 => 46,  65 => 25,  152 => 63,  113 => 39,  84 => 28,  70 => 23,  58 => 22,  210 => 73,  126 => 55,  20 => 11,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  353 => 294,  346 => 92,  333 => 117,  286 => 242,  274 => 236,  167 => 48,  124 => 43,  76 => 32,  287 => 72,  256 => 184,  236 => 167,  215 => 149,  127 => 34,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 169,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 135,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 93,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 82,  289 => 112,  261 => 187,  259 => 186,  248 => 100,  213 => 82,  198 => 66,  148 => 44,  270 => 4,  262 => 63,  255 => 91,  233 => 81,  226 => 67,  205 => 59,  200 => 69,  192 => 55,  186 => 54,  170 => 59,  153 => 48,  110 => 36,  150 => 58,  104 => 42,  90 => 20,  81 => 30,  77 => 20,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 158,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 127,  354 => 293,  330 => 87,  290 => 244,  282 => 80,  222 => 188,  206 => 71,  190 => 131,  161 => 111,  134 => 56,  100 => 42,  53 => 16,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 95,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 81,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 122,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 213,  294 => 245,  285 => 81,  283 => 70,  278 => 238,  268 => 107,  264 => 72,  258 => 81,  252 => 90,  247 => 86,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 44,  61 => 28,  273 => 197,  269 => 75,  254 => 60,  243 => 68,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 30,  67 => 31,  63 => 16,  59 => 26,  38 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 32,  68 => 26,  56 => 25,  87 => 29,  21 => 11,  26 => 13,  93 => 138,  88 => 74,  78 => 29,  46 => 9,  27 => 14,  44 => 20,  31 => 15,  28 => 14,  201 => 57,  196 => 65,  183 => 62,  171 => 116,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 42,  117 => 50,  105 => 143,  91 => 75,  62 => 27,  49 => 23,  24 => 13,  25 => 13,  19 => 11,  79 => 33,  72 => 19,  69 => 29,  47 => 22,  40 => 15,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 33,  120 => 48,  115 => 40,  111 => 41,  108 => 144,  101 => 37,  98 => 140,  96 => 139,  83 => 64,  74 => 19,  66 => 28,  55 => 24,  52 => 24,  50 => 23,  43 => 20,  41 => 19,  35 => 20,  32 => 3,  29 => 14,  209 => 24,  203 => 78,  199 => 136,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 113,  164 => 54,  162 => 56,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 89,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 35,  95 => 37,  92 => 39,  86 => 65,  82 => 36,  80 => 37,  73 => 27,  64 => 28,  60 => 19,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
