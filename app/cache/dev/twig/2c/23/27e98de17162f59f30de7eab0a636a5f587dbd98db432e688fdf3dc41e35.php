<?php

/* UsersManagementBundle:Account:registration.html.twig */
class __TwigTemplate_2c2327e98de17162f59f30de7eab0a636a5f587dbd98db432e688fdf3dc41e35 extends Twig_Template
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
            <h1>Register Account</h1>
        </div>

        <div class=\"form-group";
        // line 9
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
          ";
        // line 10
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors')) {
            // line 11
            echo "            <h4><span class = \"label label-danger\"> - Please provide first name</span></h4>
          ";
        }
        // line 13
        echo "        </div>
        <div class=\"form-group";
        // line 14
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
          ";
        // line 15
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors')) {
            // line 16
            echo "            <h4><span class = \"label label-danger\"> - Please provide last name</span></h4>
          ";
        }
        // line 18
        echo "        </div>
        <div class=\"form-group";
        // line 19
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
          ";
        // line 20
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            // line 21
            echo "            <h4><span class = \"label label-danger\"> - The email address provided is invalid.</span></h4>
          ";
        }
        // line 23
        echo "        </div>
        <div class=\"form-group";
        // line 24
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "password"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
          ";
        // line 25
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "password"), 'errors')) {
            // line 26
            echo "            <h4><span class = \"label label-danger\"> - Please check password. It has to be 6 characters and above.</span></h4>
          ";
        }
        // line 28
        echo "        </div>
        <div class=\"form-group";
        // line 29
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'errors')) {
            echo " has-error";
        } else {
            echo " has-success";
        }
        echo " has-feedback\" style = \"width: 337px\">
          ";
        // line 30
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'errors')) {
            // line 31
            echo "            <h4><span class = \"label label-danger\"> - Password did not match</span></h4>
          ";
        }
        // line 33
        echo "        </div>

        

        <div style = \"width: 300px; margin-left: 30px\">
        \t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t\t</div> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'label');
        echo " 
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'label');
        echo " 
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo " 
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "password"), 'label');
        echo " 
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'label');
        echo " 
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            <div style = \"margin-top: 4px; width: 300px;\">
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget');
        echo "
            </div>
        </div>
        
    ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <p class=\"space\">
\t    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\"><span class=\"back\">&laquo; Back to login page</span></a>
\t</p>

";
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
        return array (  204 => 62,  199 => 60,  192 => 56,  186 => 53,  182 => 52,  178 => 51,  174 => 50,  170 => 49,  166 => 48,  162 => 47,  158 => 46,  154 => 45,  150 => 44,  147 => 43,  138 => 40,  135 => 39,  131 => 38,  124 => 33,  120 => 31,  118 => 30,  110 => 29,  107 => 28,  103 => 26,  101 => 25,  93 => 24,  90 => 23,  86 => 21,  84 => 20,  76 => 19,  73 => 18,  69 => 16,  67 => 15,  59 => 14,  56 => 13,  52 => 11,  50 => 10,  42 => 9,  34 => 4,  31 => 3,  28 => 2,);
    }
}
