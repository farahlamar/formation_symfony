<?php

/* formationAnnonceBundle:Annonce:lister.html.twig */
class __TwigTemplate_6af2eb37ba9672a83c3923a1bb88ccb0f0731997fab8ddf4cff7ed3b9958be6c extends Twig_Template
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
    <head><link rel =\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/></head>
    <body>
        <h1>Liste des catégories</h1>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "nom", array()), "html", null, true);
            echo "</p>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "                <p>Aucune catégorie n'a été trouvée .</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "formationAnnonceBundle:Annonce:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  41 => 8,  33 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
