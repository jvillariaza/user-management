<?php

/* UsersManagementBundle:Account:forgotPassword.html.twig */
class __TwigTemplate_c463bcd2b35bece129106eec89185eb0ebe3d8f4c0c78352283cee86cad97c4e extends Twig_Template
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
        echo "
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"page-header\" style = \"width: 400px\">
            <h1>Change Password</h1>
        </div>
        <div class=\"form-group";
        // line 8
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
          ";
        // line 9
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 10
            echo "            <span class=\"glyphicon glyphicon-remove form-control-feedback\"></span>
          ";
        }
        // line 12
        echo "        </div>

        <div style = \"width: 300px; margin-left: 30px\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo " 
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
            <div style = \"margin-top: 4px; width: 300px;\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget');
        echo "
            </div>
        </div>
        
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  69 => 18,  64 => 16,  60 => 15,  55 => 12,  51 => 10,  49 => 9,  41 => 8,  34 => 4,  31 => 3,  28 => 2,);
    }
}
