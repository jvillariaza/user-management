<?php

/* UsersManagementBundle:Account:resetPassword.html.twig */
class __TwigTemplate_b500f92916c17bf9c48d935a40357f7b9a3b2bad8ebf858691c6e6717114652c extends Twig_Template
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
        <h1>Reset Password</h1>
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
        echo "
\t\t\t<div class=\"form-group";
        // line 16
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
\t          ";
        // line 17
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'errors')) {
            // line 18
            echo "\t            <h4><span class = \"label label-danger\"> - Password inputted is invalid. Please make sure they match and of at least 6 characters.</span></h4>
\t          ";
        }
        // line 20
        echo "\t        </div>


\t\t    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'label');
        echo " 
\t\t    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "NewPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "ConfirmPassword"), 'label');
        echo " 
\t\t    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "ConfirmPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t    <div style = \"margin-top: 4px; width: 300px;\">
\t\t        <button type = \"submit\" class = \"btn btn-lg btn-primary btn-block\">Register</button>
\t\t    </div>
\t\t</div>
\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<p class=\"space\">
\t    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\"><span class=\"back\">&laquo; Back to login page</span></a>
\t</p>

";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  102 => 32,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  76 => 20,  72 => 18,  70 => 17,  62 => 16,  59 => 15,  50 => 12,  47 => 11,  43 => 10,  37 => 7,  31 => 3,  28 => 2,);
    }
}
