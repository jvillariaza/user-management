<?php

/* UsersManagementBundle:Email:confirmation.html.twig */
class __TwigTemplate_e98fe55da7a09b3b5ec765bed7cbac9171c52a61583319a8e8f338af3396b56f extends Twig_Template
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

Thank you for signing up to our website. 

Before you will officially part of the team, you still have to confirm your email by following the link below.

";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["confirmationLink"]) ? $context["confirmationLink"] : $this->getContext($context, "confirmationLink")), "html", null, true);
        echo "

Cheers!";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Email:confirmation.html.twig";
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
