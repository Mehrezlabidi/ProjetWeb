<?php

/* MyAppEspritBundle:Sousrubrique:send.html.twig */
class __TwigTemplate_5a2cd54b07b73b4954c5108e723c6ad174330454410b99322b6010c2cc5632de extends Twig_Template
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
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<title>Forms</title>
 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/style.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
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
<article>
    <div style=\"padding: 80px 50px 0 10px;\">
<h1>Nouvelle Sous Rubrique</h1>
<form role=\"form\" method=\"post\" action='";
        // line 26
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "'>
\t<ul>

         <li>
        \t<label for=\"name\">Position:</label>
                  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
        </li> 
        <li>
        \t<label for=\"name\">Title:</label>
                  ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
        </li>
             



        <li>\t  <input type=\"hidden\" name=\"name\" value=\"submit\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
         
                       ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       </li>
\t</ul>
    <p>
        <button type=\"submit\" class=\"action\">Submit</button>
        <button type=\"reset\" class=\"right\">Reset</button>
    </p>
</form>
    </div>
</article>
 
















 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Sousrubrique:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  77 => 42,  67 => 35,  60 => 31,  52 => 26,  32 => 9,  28 => 8,  19 => 1,);
    }
}
