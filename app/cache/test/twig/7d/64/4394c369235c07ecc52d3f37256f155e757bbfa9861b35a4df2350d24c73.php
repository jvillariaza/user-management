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
        <h1>Change Password</h1>
    </div>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t<div style = \"width: 300px; margin-left: 30px\">
    \t\t<div class=\"form-group";
        // line 9
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curPassword"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
\t          ";
        // line 10
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curPassword"), 'errors')) {
            // line 11
            echo "\t            <h4><span class = \"label label-danger\"> - Password inputted is invalid. Please make sure that it's your current password.</span></h4>
\t          ";
        }
        // line 13
        echo "\t        </div>

\t        <div class=\"form-group";
        // line 15
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
\t          ";
        // line 16
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'errors')) {
            // line 17
            echo "\t            <h4><span class = \"label label-danger\"> - New Password inputted is invalid. Please make sure that they match or at least 6 characters.</span></h4>
\t          ";
        }
        // line 19
        echo "\t        </div>

\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t\t</div> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t\t</div> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curPassword"), 'label');
        echo " 
\t\t    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curPassword"), 'widget');
        echo "
\t\t    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'label');
        echo " 
\t\t    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "ConfirmPassword"), 'label');
        echo " 
\t\t    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "ConfirmPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t    <div style = \"margin-top: 4px; width: 300px;\">
\t\t        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget');
        echo "
\t\t    </div>
\t\t</div>
\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<p class=\"space\">
\t    <a href=\"";
        // line 45
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
        return array (  151 => 45,  146 => 43,  140 => 40,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  114 => 32,  111 => 31,  102 => 28,  99 => 27,  94 => 26,  85 => 23,  82 => 22,  78 => 21,  74 => 19,  70 => 17,  68 => 16,  60 => 15,  56 => 13,  52 => 11,  50 => 10,  42 => 9,  37 => 7,  31 => 3,  28 => 2,);
    }
}
