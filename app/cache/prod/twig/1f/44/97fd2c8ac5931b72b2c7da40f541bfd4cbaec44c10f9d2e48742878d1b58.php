<?php

/* MyAppEspritBundle:Article:edit.html.twig */
class __TwigTemplate_1f4497fd2c8ac5931b72b2c7da40f541bfd4cbaec44c10f9d2e48742878d1b58 extends Twig_Template
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
        echo " 
<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<title>Forms</title>
 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/style.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Engagement"), "html", null, true);
        echo "\"/> 
 
<!--[if IE]>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"js/jquery.uniform.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">
      \$(function(){
        \$(\"input:checkbox, input:radio, input:file, select\").uniform();
      });
    </script>
</head>
<body>
      <div style=\"padding: 120px 50px 0 10px;\">
 
<h1>Modify Article</h1>
<form   action=\"\"   method=\"post\" ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t <ul>
                  <li>
                 ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                  </li>
\t </ul>                      
        <button type=\"submit\" class=\"action\">Submit</button>                       
</form>
 
      </div>
 
 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  139 => 56,  104 => 46,  90 => 41,  81 => 38,  77 => 37,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 239,  222 => 188,  206 => 144,  190 => 131,  161 => 106,  134 => 85,  120 => 74,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 339,  423 => 142,  413 => 328,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 298,  362 => 110,  360 => 109,  355 => 106,  341 => 283,  337 => 282,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 88,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 54,  128 => 97,  111 => 37,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  246 => 209,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  131 => 52,  119 => 42,  108 => 65,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  79 => 18,  75 => 17,  68 => 14,  56 => 27,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 14,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 10,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 51,  117 => 44,  115 => 50,  105 => 40,  101 => 45,  91 => 27,  69 => 35,  66 => 15,  62 => 30,  49 => 19,  24 => 4,  32 => 9,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 36,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 15,  39 => 11,  36 => 10,  33 => 8,  30 => 7,);
    }
}
