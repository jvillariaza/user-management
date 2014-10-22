<?php

/* UsersManagementBundle:Account:dashboard.html.twig */
class __TwigTemplate_6833bc939c76d75c75f02055d1a534b1c4d4c8ec6e610df9df8b819d5ae53516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UsersManagementBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UsersManagementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"page-header\" style = \"width: 700px\">
        <span style = \"font-size: 24pt\">Welcome Back, ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "</span> &nbsp; | &nbsp; <small>(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo ")</small>  &nbsp; | &nbsp; <a href = '";
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "'>Logout</a>
    </div>
\t<div>
\t\t<a href = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_account", array("id" => (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), 1)) : (1)))), "html", null, true);
        echo "'>Edit Account</a> &nbsp; | &nbsp; <a href = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_password", array("id" => (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "1")) : ("1")))), "html", null, true);
        echo "'>Change Password</a>
\t</div>

";
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
        return array (  44 => 7,  34 => 4,  31 => 3,  28 => 2,);
    }
}
