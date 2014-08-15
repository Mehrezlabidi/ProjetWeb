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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
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
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  533 => 169,  528 => 167,  525 => 166,  512 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  371 => 113,  349 => 103,  339 => 100,  336 => 99,  326 => 93,  311 => 89,  297 => 84,  263 => 71,  191 => 50,  344 => 97,  335 => 93,  321 => 91,  295 => 88,  259 => 70,  178 => 45,  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 170,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  324 => 92,  300 => 113,  288 => 85,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  367 => 131,  352 => 121,  340 => 95,  332 => 97,  320 => 84,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  287 => 72,  280 => 82,  249 => 67,  223 => 58,  216 => 25,  23 => 13,  12 => 34,  145 => 53,  110 => 25,  96 => 40,  358 => 106,  351 => 135,  347 => 102,  343 => 91,  338 => 94,  327 => 86,  319 => 90,  315 => 90,  301 => 117,  289 => 81,  277 => 78,  271 => 66,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 59,  213 => 82,  211 => 81,  148 => 44,  233 => 62,  202 => 77,  198 => 66,  180 => 104,  175 => 43,  172 => 52,  165 => 64,  137 => 27,  34 => 53,  52 => 23,  212 => 74,  124 => 23,  83 => 32,  215 => 54,  184 => 47,  113 => 46,  74 => 29,  210 => 73,  126 => 55,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  346 => 92,  333 => 117,  329 => 95,  286 => 80,  270 => 4,  70 => 23,  65 => 5,  152 => 38,  118 => 28,  76 => 13,  293 => 75,  262 => 63,  205 => 59,  174 => 53,  157 => 41,  127 => 34,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 205,  664 => 467,  655 => 194,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 168,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 143,  446 => 139,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 101,  331 => 239,  323 => 125,  307 => 87,  292 => 87,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 55,  155 => 103,  114 => 50,  58 => 25,  299 => 116,  291 => 82,  284 => 100,  281 => 110,  274 => 77,  267 => 193,  260 => 62,  257 => 61,  250 => 67,  236 => 63,  234 => 169,  225 => 87,  197 => 54,  192 => 55,  188 => 21,  185 => 20,  181 => 47,  167 => 48,  160 => 48,  153 => 35,  146 => 34,  129 => 24,  97 => 41,  84 => 16,  37 => 54,  150 => 58,  139 => 31,  104 => 23,  90 => 34,  81 => 15,  77 => 8,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 158,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 107,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 76,  206 => 71,  190 => 50,  161 => 38,  134 => 56,  120 => 46,  100 => 43,  53 => 80,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 339,  423 => 128,  413 => 328,  409 => 124,  407 => 95,  402 => 323,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 310,  379 => 119,  374 => 114,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 105,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 89,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 84,  283 => 70,  278 => 238,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 54,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 68,  246 => 69,  243 => 65,  240 => 176,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  131 => 25,  119 => 44,  108 => 45,  102 => 17,  71 => 29,  67 => 185,  63 => 27,  59 => 165,  47 => 75,  38 => 7,  94 => 40,  89 => 34,  85 => 32,  79 => 31,  75 => 31,  68 => 6,  56 => 81,  50 => 78,  29 => 16,  87 => 17,  72 => 199,  55 => 25,  21 => 11,  26 => 14,  98 => 36,  93 => 39,  88 => 33,  78 => 36,  46 => 19,  27 => 3,  40 => 44,  44 => 21,  35 => 20,  31 => 17,  43 => 20,  41 => 20,  28 => 14,  201 => 57,  196 => 52,  183 => 82,  171 => 116,  166 => 50,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  123 => 30,  121 => 29,  117 => 45,  115 => 27,  105 => 44,  101 => 37,  91 => 39,  69 => 198,  66 => 26,  62 => 166,  49 => 112,  24 => 3,  32 => 5,  25 => 13,  22 => 2,  19 => 11,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 42,  168 => 113,  164 => 54,  162 => 59,  154 => 46,  149 => 36,  147 => 46,  144 => 33,  141 => 48,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 41,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 23,  48 => 67,  45 => 66,  42 => 20,  39 => 19,  36 => 17,  33 => 16,  30 => 15,);
    }
}
