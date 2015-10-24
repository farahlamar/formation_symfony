<?php

/* formationAnnonceBundle:Annonce:formulaire.html.twig */
class __TwigTemplate_d0b2adfb3cd6ce2d5cf0c6020bd50c8086f52d73745cc9e7ce93adb50416cb73 extends Twig_Template
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
        echo "<h1>Ajouter un annonce </h1>
";
        // line 2
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 3
            echo "    <p> ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 5
        echo "
<form action=\"\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo "> ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "</form>
<p><a href =\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("formation_annonce_form");
        echo "\">Retour à la liste des annonces </a></p>
";
    }

    public function getTemplateName()
    {
        return "formationAnnonceBundle:Annonce:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
