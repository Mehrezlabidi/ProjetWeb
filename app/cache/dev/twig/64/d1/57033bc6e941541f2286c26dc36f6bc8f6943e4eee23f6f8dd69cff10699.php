<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_64d157033bc6e941541f2286c26dc36f6bc8f6943e4eee23f6f8dd69cff10699 extends Twig_Template
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
        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  350 => 327,  308 => 287,  24 => 3,  19 => 1,  347 => 134,  319 => 124,  301 => 117,  299 => 116,  277 => 109,  271 => 108,  260 => 104,  257 => 103,  251 => 101,  239 => 97,  228 => 88,  225 => 87,  211 => 81,  148 => 60,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  337 => 103,  322 => 101,  314 => 99,  305 => 119,  294 => 90,  285 => 111,  268 => 107,  264 => 84,  252 => 80,  247 => 78,  214 => 69,  177 => 65,  169 => 66,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  93 => 38,  273 => 96,  254 => 102,  240 => 86,  238 => 85,  230 => 82,  221 => 77,  219 => 84,  217 => 75,  179 => 69,  159 => 61,  135 => 53,  78 => 21,  71 => 17,  209 => 82,  193 => 73,  154 => 58,  149 => 51,  133 => 42,  103 => 32,  95 => 39,  86 => 24,  57 => 11,  48 => 8,  51 => 10,  34 => 4,  31 => 3,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 67,  196 => 92,  182 => 69,  173 => 65,  158 => 62,  68 => 30,  62 => 27,  28 => 3,  357 => 123,  344 => 119,  341 => 131,  332 => 116,  327 => 126,  324 => 113,  318 => 111,  306 => 286,  297 => 104,  291 => 102,  263 => 95,  258 => 81,  243 => 98,  231 => 83,  224 => 71,  212 => 78,  202 => 77,  190 => 76,  187 => 70,  161 => 63,  143 => 59,  136 => 71,  122 => 43,  117 => 39,  112 => 35,  85 => 25,  75 => 19,  58 => 25,  44 => 10,  204 => 78,  188 => 90,  174 => 67,  171 => 61,  167 => 71,  138 => 57,  125 => 44,  121 => 50,  118 => 49,  104 => 32,  87 => 25,  49 => 9,  46 => 12,  27 => 3,  91 => 34,  88 => 25,  63 => 15,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 339,  363 => 126,  358 => 139,  353 => 328,  345 => 147,  343 => 132,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 120,  307 => 128,  302 => 125,  296 => 121,  293 => 113,  290 => 119,  288 => 101,  283 => 88,  281 => 110,  276 => 111,  274 => 97,  269 => 94,  265 => 106,  259 => 103,  255 => 93,  253 => 100,  235 => 74,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 68,  189 => 71,  184 => 63,  175 => 58,  170 => 84,  166 => 54,  163 => 62,  155 => 47,  152 => 46,  144 => 49,  127 => 54,  109 => 34,  94 => 35,  82 => 28,  76 => 28,  61 => 23,  39 => 6,  36 => 7,  79 => 21,  72 => 27,  69 => 26,  54 => 10,  47 => 9,  42 => 11,  40 => 8,  37 => 10,  22 => 2,  164 => 59,  157 => 56,  145 => 74,  139 => 49,  131 => 55,  120 => 31,  115 => 39,  111 => 37,  108 => 47,  106 => 33,  101 => 43,  98 => 37,  92 => 27,  83 => 35,  80 => 29,  74 => 23,  66 => 11,  60 => 15,  55 => 24,  52 => 12,  50 => 10,  41 => 19,  32 => 7,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 158,  373 => 156,  361 => 152,  355 => 329,  351 => 135,  348 => 140,  342 => 137,  338 => 130,  335 => 134,  329 => 131,  325 => 129,  323 => 125,  320 => 127,  315 => 123,  312 => 98,  303 => 106,  300 => 105,  298 => 91,  289 => 112,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 105,  256 => 96,  248 => 100,  246 => 99,  241 => 77,  233 => 87,  229 => 73,  226 => 84,  220 => 70,  216 => 79,  213 => 82,  207 => 75,  203 => 78,  200 => 72,  197 => 74,  194 => 68,  191 => 77,  185 => 74,  181 => 65,  178 => 59,  176 => 64,  172 => 57,  168 => 62,  165 => 64,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 58,  141 => 48,  134 => 56,  130 => 41,  123 => 61,  119 => 42,  116 => 45,  113 => 44,  105 => 39,  102 => 32,  99 => 31,  96 => 37,  90 => 37,  84 => 40,  81 => 23,  73 => 19,  70 => 15,  67 => 19,  64 => 24,  59 => 22,  53 => 10,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 6,  30 => 3,);
    }
}
