<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e288491b53e1ac4cc6b729dd9a741f2fe11781e53432f7435da06b4fcc327bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "    
<div id=\"container\">
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                 
<label for=\"name\">Username:</label>
\t\t
 <input type=\"name\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t
<label for=\"username\">Password:</label>
\t\t
<!--<p><a href=\"#\">Forgot your password?</a> -->
\t\t
<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t
<div id=\"lower\">
\t\t
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
<label class=\"check\" for=\"checkbox\">Keep me logged in</label>
\t\t
 <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t
</div>
\t\t
</form>
    
</div>  
 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  54 => 14,  47 => 10,  43 => 9,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
