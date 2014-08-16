<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_8ed73efaa6ad6f852023c1b3de4120f3ffd09dc9212ca486ba74324e4f136fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_batch_confirmation", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

        ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "all_elements")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "idx"))), "SonataAdminBundle");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\" />
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                <div style=\"display: none\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-th-list icon-white\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 52
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 154,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  324 => 116,  300 => 113,  288 => 108,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  367 => 131,  352 => 121,  340 => 90,  332 => 88,  320 => 84,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  287 => 72,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  23 => 11,  12 => 34,  145 => 43,  110 => 36,  96 => 139,  358 => 139,  351 => 135,  347 => 118,  343 => 91,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  301 => 117,  289 => 112,  277 => 68,  271 => 66,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  213 => 82,  211 => 81,  148 => 44,  233 => 81,  202 => 77,  198 => 66,  180 => 104,  175 => 53,  172 => 52,  165 => 64,  137 => 47,  34 => 16,  52 => 24,  212 => 74,  124 => 43,  83 => 15,  215 => 160,  184 => 132,  113 => 48,  74 => 19,  210 => 73,  126 => 55,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  346 => 92,  333 => 117,  329 => 279,  286 => 242,  270 => 4,  70 => 23,  65 => 25,  152 => 63,  118 => 46,  76 => 32,  293 => 75,  262 => 63,  205 => 59,  174 => 53,  157 => 47,  127 => 34,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 165,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 122,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 125,  307 => 115,  292 => 209,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 46,  58 => 22,  299 => 116,  291 => 109,  284 => 100,  281 => 110,  274 => 236,  267 => 193,  260 => 62,  257 => 61,  250 => 84,  236 => 81,  234 => 169,  225 => 87,  197 => 56,  192 => 55,  188 => 21,  185 => 20,  181 => 63,  167 => 48,  160 => 48,  153 => 48,  146 => 47,  129 => 42,  97 => 31,  84 => 36,  37 => 18,  150 => 58,  139 => 59,  104 => 42,  90 => 20,  81 => 30,  77 => 13,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 158,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 127,  354 => 293,  330 => 87,  290 => 244,  282 => 80,  222 => 76,  206 => 71,  190 => 131,  161 => 106,  134 => 56,  120 => 48,  100 => 43,  53 => 24,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 95,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 81,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 122,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 81,  283 => 70,  278 => 238,  268 => 107,  264 => 72,  258 => 81,  252 => 80,  247 => 179,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  111 => 30,  107 => 46,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  246 => 69,  243 => 68,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 45,  119 => 31,  108 => 144,  102 => 142,  71 => 30,  67 => 30,  63 => 28,  59 => 26,  47 => 22,  38 => 14,  94 => 40,  89 => 17,  85 => 37,  79 => 34,  75 => 32,  68 => 26,  56 => 25,  50 => 23,  29 => 14,  87 => 29,  72 => 31,  55 => 25,  21 => 11,  26 => 12,  98 => 140,  93 => 138,  88 => 37,  78 => 29,  46 => 9,  27 => 14,  40 => 13,  44 => 21,  35 => 20,  31 => 15,  43 => 20,  41 => 19,  28 => 14,  201 => 57,  196 => 65,  183 => 82,  171 => 116,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  123 => 52,  121 => 42,  117 => 49,  115 => 40,  105 => 45,  101 => 37,  91 => 75,  69 => 30,  66 => 28,  62 => 27,  49 => 23,  24 => 12,  32 => 3,  25 => 13,  22 => 12,  19 => 11,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 113,  164 => 54,  162 => 59,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 23,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 14,  73 => 27,  64 => 28,  60 => 19,  57 => 26,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
