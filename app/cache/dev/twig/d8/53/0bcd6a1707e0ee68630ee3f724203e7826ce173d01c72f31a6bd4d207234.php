<?php

/* RMSPlatformBundle::layout.html.twig */
class __TwigTemplate_d8530bcd6a1707e0ee68630ee3f724203e7826ce173d01c72f31a6bd4d207234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'rmsplatform_body' => array($this, 'block_rmsplatform_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur\">
          Qu'est ce que le MVC ? »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("rms_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("rms_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RMSPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-M-D-H"), "html", null, true);
        echo "h and beyond.</p>
    </footer>
  </div>

  ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "RMS Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        $this->displayBlock('rmsplatform_body', $context, $blocks);
        // line 46
        echo "        ";
    }

    // line 44
    public function block_rmsplatform_body($context, array $blocks = array())
    {
        // line 45
        echo "        ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "RMSPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  141 => 59,  138 => 58,  134 => 45,  131 => 44,  127 => 46,  124 => 44,  121 => 43,  116 => 13,  114 => 12,  111 => 11,  105 => 9,  99 => 63,  97 => 58,  90 => 54,  81 => 47,  79 => 43,  73 => 40,  66 => 36,  62 => 35,  40 => 15,  38 => 11,  33 => 9,  24 => 2,);
    }
}
