<?php

/* UsersManagementBundle:Account:changePassword.html.twig */
class __TwigTemplate_7d644394c369235c07ecc52d3f37256f155e757bbfa9861b35a4df2350d24c73 extends Twig_Template
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
        echo "    <div class=\"page-header\" style = \"width: 400px\">
        <h1>Edit Account</h1>
    </div>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t<div style = \"width: 300px; margin-left: 30px\">

\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t\t</div> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo " 
\t\t    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword"), "NewPassword"), 'label');
        echo " 
\t\t    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword"), "NewPassword"), 'widget');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword"), "ConfirmPassword"), 'label');
        echo " 
\t\t    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword"), "ConfirmPassword"), 'widget');
        echo "

\t\t    <div style = \"margin-top: 4px; width: 300px;\">
\t\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget');
        echo "
\t\t    </div>
\t\t</div>
\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<p class=\"space\">
\t    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\"><span class=\"back\">&laquo; Back to dashboard</span></a>
\t</p>

";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  94 => 27,  88 => 24,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  50 => 12,  47 => 11,  43 => 10,  37 => 7,  31 => 3,  28 => 2,);
    }
}
