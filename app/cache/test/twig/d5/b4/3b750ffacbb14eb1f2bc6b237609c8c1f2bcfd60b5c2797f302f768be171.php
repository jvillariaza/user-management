<?php

/* UsersManagementBundle:Account:editAccount.html.twig */
class __TwigTemplate_d5b43b750ffacbb14eb1f2bc6b237609c8c1f2bcfd60b5c2797f302f768be171 extends Twig_Template
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
        echo "Email<input type = 'text' disabled value = '";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "' />
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:editAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
