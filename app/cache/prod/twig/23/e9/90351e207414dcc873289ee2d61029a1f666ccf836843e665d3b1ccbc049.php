<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_23e990351e207414dcc873289ee2d61029a1f666ccf836843e665d3b1ccbc049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 27
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "              >
        ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
            // line 30
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            </div>
        ";
        }
        // line 34
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 40
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : null), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "</td>
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 49
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") . (isset($context["permission"]) ? $context["permission"] : null)), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        ";
        // line 58
        $this->displayBlock('formactions', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 58
    public function block_formactions($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  110 => 36,  96 => 19,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  319 => 124,  315 => 123,  301 => 117,  289 => 112,  277 => 109,  271 => 108,  265 => 106,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  213 => 82,  211 => 81,  148 => 60,  233 => 81,  202 => 77,  198 => 66,  180 => 56,  175 => 53,  172 => 51,  165 => 64,  137 => 37,  34 => 16,  52 => 20,  212 => 74,  124 => 49,  83 => 39,  215 => 160,  184 => 132,  113 => 46,  74 => 23,  210 => 73,  126 => 55,  20 => 1,  470 => 378,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  346 => 290,  333 => 280,  329 => 279,  286 => 242,  270 => 4,  70 => 29,  65 => 26,  152 => 63,  118 => 46,  76 => 32,  293 => 113,  262 => 105,  205 => 139,  174 => 67,  157 => 58,  127 => 54,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 125,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 71,  58 => 22,  299 => 116,  291 => 101,  284 => 100,  281 => 110,  274 => 236,  267 => 193,  260 => 104,  257 => 103,  250 => 84,  236 => 81,  234 => 169,  225 => 87,  197 => 74,  192 => 64,  188 => 65,  185 => 59,  181 => 63,  167 => 48,  160 => 59,  153 => 48,  146 => 47,  129 => 42,  97 => 31,  84 => 16,  37 => 19,  150 => 58,  139 => 59,  104 => 42,  90 => 20,  81 => 34,  77 => 36,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 76,  206 => 71,  190 => 131,  161 => 106,  134 => 56,  120 => 48,  100 => 41,  53 => 24,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 116,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 106,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 111,  283 => 203,  278 => 238,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 185,  177 => 54,  169 => 69,  140 => 53,  132 => 43,  128 => 93,  111 => 43,  107 => 52,  61 => 28,  273 => 96,  269 => 94,  254 => 102,  246 => 99,  243 => 98,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  131 => 55,  119 => 39,  108 => 42,  102 => 42,  71 => 32,  67 => 28,  63 => 27,  59 => 21,  47 => 19,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  79 => 35,  75 => 31,  68 => 31,  56 => 25,  50 => 23,  29 => 15,  87 => 38,  72 => 30,  55 => 21,  21 => 2,  26 => 14,  98 => 39,  93 => 21,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  40 => 20,  44 => 21,  35 => 15,  31 => 15,  43 => 21,  41 => 20,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 116,  166 => 85,  163 => 60,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 39,  101 => 40,  91 => 39,  69 => 32,  66 => 30,  62 => 25,  49 => 9,  24 => 13,  32 => 14,  25 => 12,  22 => 12,  19 => 11,  209 => 148,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 113,  164 => 115,  162 => 59,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 40,  122 => 74,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 40,  92 => 29,  86 => 17,  82 => 36,  80 => 37,  73 => 36,  64 => 28,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 21,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
