<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_31056bf212e25eb3918ae1fa5a1c2c002a55361cb688d05af954b212a8e1073e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  635 => 191,  618 => 190,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  533 => 169,  528 => 167,  525 => 166,  512 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  456 => 143,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  371 => 113,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  326 => 93,  311 => 89,  297 => 84,  263 => 71,  250 => 67,  191 => 50,  146 => 34,  344 => 97,  335 => 93,  321 => 91,  295 => 88,  292 => 87,  184 => 47,  181 => 47,  178 => 45,  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  530 => 168,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  380 => 83,  369 => 136,  324 => 92,  307 => 87,  300 => 113,  291 => 82,  288 => 85,  275 => 77,  272 => 76,  367 => 131,  352 => 121,  340 => 95,  332 => 97,  320 => 84,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  280 => 82,  249 => 67,  223 => 58,  216 => 25,  188 => 21,  23 => 13,  12 => 34,  358 => 106,  351 => 135,  347 => 102,  343 => 91,  338 => 94,  327 => 86,  323 => 125,  319 => 90,  315 => 90,  301 => 117,  299 => 116,  293 => 75,  281 => 110,  277 => 78,  271 => 66,  265 => 64,  260 => 62,  257 => 61,  251 => 101,  239 => 97,  228 => 59,  225 => 87,  211 => 81,  197 => 54,  174 => 53,  253 => 1,  202 => 77,  185 => 20,  180 => 104,  175 => 43,  172 => 52,  165 => 64,  160 => 48,  137 => 27,  97 => 41,  34 => 53,  212 => 74,  155 => 103,  129 => 24,  118 => 28,  114 => 50,  65 => 5,  152 => 38,  113 => 46,  84 => 16,  70 => 23,  58 => 25,  210 => 73,  126 => 55,  20 => 11,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  353 => 294,  346 => 92,  333 => 117,  286 => 80,  274 => 77,  167 => 48,  124 => 23,  76 => 13,  287 => 72,  256 => 184,  236 => 63,  215 => 54,  127 => 34,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 193,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 188,  610 => 435,  600 => 428,  590 => 178,  584 => 418,  562 => 402,  554 => 397,  536 => 170,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 135,  462 => 146,  452 => 322,  429 => 305,  403 => 121,  397 => 282,  390 => 278,  382 => 93,  366 => 263,  359 => 259,  348 => 251,  329 => 95,  313 => 82,  289 => 81,  261 => 187,  259 => 70,  248 => 100,  213 => 82,  198 => 66,  148 => 44,  270 => 4,  262 => 63,  255 => 91,  233 => 62,  226 => 67,  205 => 59,  200 => 55,  192 => 55,  186 => 54,  170 => 59,  153 => 35,  110 => 25,  150 => 58,  104 => 23,  90 => 34,  81 => 15,  77 => 8,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 158,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 107,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 188,  206 => 71,  190 => 50,  161 => 38,  134 => 56,  100 => 43,  53 => 80,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 339,  423 => 128,  413 => 292,  409 => 124,  407 => 95,  402 => 323,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 310,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 89,  309 => 120,  305 => 119,  298 => 213,  294 => 245,  285 => 84,  283 => 70,  278 => 238,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 54,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 197,  269 => 75,  254 => 68,  243 => 65,  240 => 176,  238 => 64,  235 => 74,  230 => 166,  227 => 60,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 44,  102 => 17,  71 => 29,  67 => 185,  63 => 27,  59 => 165,  38 => 7,  94 => 40,  89 => 34,  85 => 32,  75 => 31,  68 => 6,  56 => 81,  87 => 17,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 36,  46 => 19,  27 => 3,  44 => 21,  31 => 17,  28 => 14,  201 => 57,  196 => 52,  183 => 62,  171 => 116,  166 => 50,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 29,  117 => 45,  105 => 44,  91 => 39,  62 => 166,  49 => 112,  24 => 3,  25 => 13,  19 => 11,  79 => 31,  72 => 199,  69 => 198,  47 => 75,  40 => 44,  37 => 54,  22 => 2,  246 => 69,  157 => 41,  145 => 53,  139 => 31,  131 => 25,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 25,  52 => 23,  50 => 78,  43 => 20,  41 => 20,  35 => 20,  32 => 5,  29 => 16,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 42,  168 => 113,  164 => 54,  162 => 56,  154 => 46,  149 => 36,  147 => 46,  144 => 33,  141 => 89,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 41,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 23,  48 => 67,  45 => 66,  42 => 20,  39 => 19,  36 => 17,  33 => 16,  30 => 15,);
    }
}
