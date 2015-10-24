<?php

/* ProjetGestionBundle:Default:bye.html.twig */
class __TwigTemplate_e4361d693d45b9b318660d3ce5c704a130cda0f706ef70b2680d85811f300ea0 extends Twig_Template
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
        echo "<body>
    bye ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " :)
</body>";
    }

    public function getTemplateName()
    {
        return "ProjetGestionBundle:Default:bye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
