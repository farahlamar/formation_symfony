<?php

/* formationAnnonceBundle:Default:index.html.twig */
class __TwigTemplate_fb950abf6b5a56f678bfbdeb46974996deb068d4c1d23071c54efd9dcd6a9796 extends Twig_Template
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
        echo "<html>
    <body>
        Hello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "formationAnnonceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
