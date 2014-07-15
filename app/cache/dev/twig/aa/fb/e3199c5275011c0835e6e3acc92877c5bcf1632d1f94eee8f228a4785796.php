<?php

/* MyAppEspritBundle:Menu:update.html.twig */
class __TwigTemplate_aafbe3199c5275011c0835e6e3acc92877c5bcf1632d1f94eee8f228a4785796 extends Twig_Template
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
<h1>Modifier Menu</h1>
<form role=\"form\" method=\"post\" action='";
        // line 25
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu");
        echo "'>
\t<ul>
        
                   
         
                  <li>
                      
                      
                      ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
                  </li>
       
\t</ul>
  
</form>
</article>
<footer>
<p> </p>
</footer>

















<!--
<form role=\"form\" method=\"post\" action=' '>
        <ul>
        
        <li>
                <label for=\"Position\">Position:</label>
                
        </li>
         <li>
                <label for=\"name\">Title:</label>
              
        </li>
         
             <input type=\"hidden\" name=\"name\" value=\"submit\">
              
       
       
        
     
          
               <button type=\"submit\" class=\"action\">Submit</button>   
                 <button type=\"reset\" class=\"right\">Reset</button> 
                
         
          </ul>
</form>


-->
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 33,  51 => 25,  32 => 9,  28 => 8,  19 => 1,);
    }
}
