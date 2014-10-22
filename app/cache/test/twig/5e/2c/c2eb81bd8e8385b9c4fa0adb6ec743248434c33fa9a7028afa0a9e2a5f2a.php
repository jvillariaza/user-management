<?php

/* UsersManagementBundle:Email:forgotPassword.html.twig */
class __TwigTemplate_5e2cc2eb81bd8e8385b9c4fa0adb6ec743248434c33fa9a7028afa0a9e2a5f2a extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ",

It seems like you forgot your password.

Follow the link below to reset your password. If you think you receive this email by mistake, please disregard.

";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["confirmationLink"]) ? $context["confirmationLink"] : $this->getContext($context, "confirmationLink")), "html", null, true);
        echo "

Cheers!";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Email:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  19 => 1,);
    }
}
