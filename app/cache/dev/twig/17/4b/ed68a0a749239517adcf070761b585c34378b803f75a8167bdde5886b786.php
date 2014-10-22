<?php

/* UsersManagementBundle::layout.html.twig */
class __TwigTemplate_174bed68a0a749239517adcf070761b585c34378b803f75a8167bdde5886b786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"../../favicon.ico\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>                   

        <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body style = \"background-color: #CCCCCC\">
        <div class = \"container\" style = \"margin-left: 600px\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsersManagementBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  54 => 16,  48 => 22,  46 => 21,  38 => 16,  21 => 1,);
    }
}
