<?php

/* UsersManagementBundle:Account:login.html.twig */
class __TwigTemplate_c0400408e937492896758af26eca1900d19649f879caff3469974c7a8f0205ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UsersManagementBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "User Login";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-header\" style = \"width: 400px\">
        <h1>User Login</h1>
    </div>

\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t<div style = \"width: 300px; margin-left: 30px\">

\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t\t</div> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t\t</div> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t\t\t";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "\t\t    \t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 25
        echo "
\t\t    <label for=\"username\">Username:</label>
\t\t    <input class = \"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t\t    <label for=\"password\">Password:</label>
\t\t    <input class = \"form-control\" type=\"password\" id=\"password\" name=\"_password\" />

\t\t    <div style = \"margin-top: 4px; width: 300px;\">
\t\t    \t<button type=\"submit\" class = \"btn btn-lg btn-primary btn-block\">Login</button>
\t\t    </div>
\t    </div>
\t</form>

    <p class=\"space\">
    \t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("account_register");
        echo "\"><span class=\"login-link f-left\">New here? Sign Up Now!</span></a> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
\t    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("forgot_password");
        echo "\"><span class=\"back\">Forgot Password</span></a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle:Account:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  113 => 39,  98 => 27,  94 => 25,  88 => 23,  86 => 22,  83 => 21,  74 => 18,  71 => 17,  66 => 16,  57 => 13,  54 => 12,  50 => 11,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
