<?php

/* formationAnnonceBundle::Layout.html.twig */
class __TwigTemplate_445194778021150e8fa83b502ac008f5eee1bc554b4fbab4cc75c75770a7a195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title> ";
        // line 3
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <!-- annonnce|, si on veut afficher ce msg on fait appel à parent()  -->
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\"/>
        <link rel =\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    </head>
    <body>
       
        <div id=\"page\">
            <div id=\"header\">
                <ul id=\"menu\">
                    <li> <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("condidature");
        echo "\">Candidature</a></li>
                    <li> <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("formation_annonce_listeAnnonce");
        echo "\">Annoncess</a></li>
                </ul>
            </div>
                <div id=\"content\">
                    ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "                </div>
                <div id=\"footer\">
                    <p>Tous droits réservés 2015 </p>
                </div>
            
        </div>
    </body>
</html>";
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " Annonces|";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "formationAnnonceBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  71 => 18,  65 => 3,  54 => 20,  52 => 18,  45 => 14,  41 => 13,  31 => 6,  25 => 3,  21 => 1,);
    }
}
