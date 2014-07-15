<?php

/* MyAppEspritBundle:Menu:send.html.twig */
class __TwigTemplate_ee0c9ee907f57262c4e3fc3ae46ded66d2cce25176ad28cb28f51d5131a41a10 extends Twig_Template
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
<h1>Nouveau Menu</h1>
<form role=\"form\" method=\"post\" action='";
        // line 26
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "'>
\t<ul>
        <li>
        \t<label for=\"name\">Title:</label>
                  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
        </li>
        <li>
        \t<label for=\"Position\">Position:</label>
                   ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
                
                   
        </li>
        <li>\t  <input type=\"hidden\" name=\"name\" value=\"submit\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
         
                       ";
        // line 41
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
<footer>
<p> </p>
</footer>

















<!--
<form role=\"form\" method=\"post\" action='";
        // line 72
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "'>
        <ul>
        
        <li>
                <label for=\"Position\">Position:</label>
                 ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
        </li>
         <li>
                <label for=\"name\">Title:</label>
                 ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
        </li>
         
             <input type=\"hidden\" name=\"name\" value=\"submit\">
                 ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
       
       
        
     
          
               <button type=\"submit\" class=\"action\">Submit</button>   
                 <button type=\"reset\" class=\"right\">Reset</button> 
                
         
          </ul>
</form>


-->
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 85,  128 => 81,  121 => 77,  113 => 72,  79 => 41,  74 => 39,  66 => 34,  59 => 30,  52 => 26,  32 => 9,  28 => 8,  19 => 1,);
    }
}
