<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_3f77809de9562fdb16cd5768822b10a1131910f7ea6f632f224488c6b5be5c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 99,  352 => 94,  340 => 90,  332 => 88,  320 => 84,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  280 => 69,  249 => 55,  223 => 27,  216 => 25,  188 => 21,  23 => 1,  12 => 34,  358 => 139,  351 => 135,  347 => 134,  343 => 91,  338 => 130,  327 => 86,  323 => 125,  319 => 124,  315 => 83,  301 => 117,  299 => 116,  293 => 75,  281 => 110,  277 => 68,  271 => 66,  265 => 64,  260 => 62,  257 => 61,  251 => 101,  239 => 97,  228 => 88,  225 => 87,  211 => 81,  197 => 74,  174 => 60,  253 => 1,  202 => 77,  185 => 20,  180 => 104,  175 => 53,  172 => 51,  165 => 64,  160 => 52,  137 => 47,  97 => 31,  34 => 16,  212 => 74,  155 => 103,  129 => 42,  118 => 46,  114 => 71,  65 => 15,  152 => 63,  113 => 39,  84 => 28,  70 => 23,  58 => 22,  210 => 73,  126 => 55,  20 => 1,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 100,  357 => 295,  353 => 294,  346 => 92,  333 => 280,  286 => 242,  274 => 236,  167 => 48,  124 => 43,  76 => 32,  287 => 72,  256 => 184,  236 => 167,  215 => 149,  127 => 54,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 382,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 378,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 273,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 82,  289 => 112,  261 => 187,  259 => 186,  248 => 100,  213 => 82,  198 => 66,  148 => 60,  270 => 4,  262 => 63,  255 => 91,  233 => 81,  226 => 79,  205 => 71,  200 => 69,  192 => 23,  186 => 63,  170 => 59,  153 => 48,  110 => 36,  150 => 58,  104 => 42,  90 => 20,  81 => 27,  77 => 20,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 97,  354 => 293,  330 => 87,  290 => 244,  282 => 241,  222 => 188,  206 => 71,  190 => 131,  161 => 111,  134 => 56,  100 => 36,  53 => 16,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 268,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 95,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 213,  294 => 245,  285 => 111,  283 => 70,  278 => 238,  268 => 107,  264 => 2,  258 => 81,  252 => 90,  247 => 86,  241 => 31,  229 => 73,  220 => 159,  214 => 185,  177 => 54,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 197,  269 => 94,  254 => 60,  243 => 98,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 39,  71 => 32,  67 => 31,  63 => 16,  59 => 29,  38 => 14,  94 => 39,  89 => 37,  85 => 28,  75 => 25,  68 => 24,  56 => 12,  87 => 29,  21 => 11,  26 => 14,  93 => 21,  88 => 37,  78 => 21,  46 => 9,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 92,  196 => 65,  183 => 62,  171 => 116,  166 => 57,  163 => 60,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 42,  117 => 50,  105 => 39,  91 => 39,  62 => 25,  49 => 28,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 19,  69 => 32,  47 => 14,  40 => 24,  37 => 24,  22 => 11,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 41,  108 => 42,  101 => 37,  98 => 38,  96 => 19,  83 => 35,  74 => 19,  66 => 17,  55 => 24,  52 => 24,  50 => 15,  43 => 25,  41 => 19,  35 => 17,  32 => 3,  29 => 2,  209 => 24,  203 => 78,  199 => 136,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 113,  164 => 54,  162 => 56,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 89,  133 => 51,  130 => 57,  125 => 40,  122 => 74,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 35,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 37,  73 => 24,  64 => 28,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
