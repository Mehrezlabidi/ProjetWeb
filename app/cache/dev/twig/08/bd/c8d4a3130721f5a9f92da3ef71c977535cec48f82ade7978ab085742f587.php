<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_08bdc8d4a3130721f5a9f92da3ef71c977535cec48f82ade7978ab085742f587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 


<!--
<div class=\"fos_user_user_show\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p> 
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
-->


";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "
    
<div id=\"container\">
<form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                 
<label for=\"name\">Username:</label>
\t\t
 <input type=\"name\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "\" required=\"required\" />
\t\t
<label for=\"username\">Email:</label>
\t\t
<!--<p><a href=\"#\">Forgot your password?</a> -->
\t\t
<input type=\"name\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\" required=\"required\" />
\t\t
<div id=\"lower\">
\t\t
 
\t\t
 <!-- <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo "\" /> -->
\t\t
</div>
\t\t
</form>
    
</div>  
 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  71 => 27,  62 => 21,  54 => 16,  49 => 13,  43 => 12,  33 => 7,  27 => 6,  20 => 1,  31 => 4,  28 => 3,);
    }
}
