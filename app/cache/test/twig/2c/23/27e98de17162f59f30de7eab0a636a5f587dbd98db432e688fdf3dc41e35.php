<?php

/* UsersManagementBundle:Account:registration.html.twig */
class __TwigTemplate_2c2327e98de17162f59f30de7eab0a636a5f587dbd98db432e688fdf3dc41e35 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
