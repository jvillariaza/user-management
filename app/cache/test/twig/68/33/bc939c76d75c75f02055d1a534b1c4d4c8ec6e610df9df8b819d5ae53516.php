<?php

/* UsersManagementBundle:Account:dashboard.html.twig */
class __TwigTemplate_6833bc939c76d75c75f02055d1a534b1c4d4c8ec6e610df9df8b819d5ae53516 extends Twig_Template
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
        echo "Welcome Back, 

";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "
<small>(";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo ")</small> &nbsp; | &nbsp; 
<a href = '";
        // line 5
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "'>Logout</a>
<br /><br />
<a href = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_account", array("id" => (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), 1)) : (1)))), "html", null, true);
        echo "'>Edit Account</a> | <a href = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_password", array("id" => (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "1")) : ("1")))), "html", null, true);
        echo "'>Change Password</a>";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
