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
            <h1>Forgot Password</h1>
        </div>

        <div class=\"form-group";
        // line 9
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\">
          ";
        // line 10
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 11
            echo "            <span class=\"alert alert-danger\" style = \"margin-left: 30px\">The email address provided is not valid.</span>
          ";
        }
        // line 13
        echo "        </div>

        <div style = \"width: 300px; margin-left: 30px\">

            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo " 
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
            <div style = \"margin-top: 4px; width: 300px;\">
                <button type = \"submit\" class = \"btn btn-lg btn-primary btn-block\">Forgot Password</button>
            </div>
        </div>
        
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <p class=\"space\">
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\"><span class=\"back\">&laquo; Back to login page</span></a>
    </p>

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
        return array (  100 => 33,  94 => 30,  85 => 24,  81 => 23,  78 => 22,  69 => 19,  66 => 18,  62 => 17,  56 => 13,  52 => 11,  50 => 10,  42 => 9,  34 => 4,  31 => 3,  28 => 2,);
    }
}
