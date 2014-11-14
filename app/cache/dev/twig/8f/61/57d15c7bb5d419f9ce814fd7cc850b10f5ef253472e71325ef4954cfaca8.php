<?php

/* RMSPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_8f6157d15c7bb5d419f9ce814fd7cc850b10f5ef253472e71325ef4954cfaca8 extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Add Adverts</title>
    </head>
    <body>
        <h1>Welcome on the \"Add\" adverts page !</h1>
        
        <p>          
            ";
        // line 14
        if (((isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")) < 18)) {
            echo " 
            vous êtes mineur
            ";
        } else {
            // line 17
            echo "            vous êtes majeur
            ";
        }
        // line 19
        echo "           
        <footer>
            Votre webmaster ";
        // line 21
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster"))), "html", null, true);
        echo ".
        </footer>
        </p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RMSPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 21,  44 => 19,  40 => 17,  34 => 14,  22 => 4,  19 => 2,);
    }
}
