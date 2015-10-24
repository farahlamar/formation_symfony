<?php

/* formationAnnonceBundle:Annonce:listeAnnonce.html.twig */
class __TwigTemplate_f858f5ff750150dd628ff7b57557ee3acb373b25b7a816dbb15e921fc4f2b668 extends Twig_Template
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
        <h1>Liste des annonces</h1>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonces"]) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonces"], "titre", array()), "html", null, true);
            echo "        
           ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonces"], "contenu", array()), "html", null, true);
            echo "
           ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonces"], "date", array()), "Y-m-d"), "html", null, true);
            echo "
           ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonces"], "auteur", array()), "html", null, true);
            echo "
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonces"], "Categorie", array()), "html", null, true);
            echo "</p>
           
            <p>";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["annonces"], "condidatures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["condidature"]) {
                // line 13
                echo "                    <li>condidature</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </p>
           
            <a href =\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation_annonce_editer", array("id" => $this->getAttribute($context["annonces"], "id", array()))), "html", null, true);
            echo "\" >modifier </a> &nbsp;
            <a href =\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation_annonce_supprimer", array("id" => $this->getAttribute($context["annonces"], "id", array()))), "html", null, true);
            echo "\" >supprimer </a>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "                <p>Aucune annonce n'a été trouvée .</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonces'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "formationAnnonceBundle:Annonce:listeAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  81 => 20,  74 => 18,  70 => 17,  66 => 15,  59 => 13,  55 => 12,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  33 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
