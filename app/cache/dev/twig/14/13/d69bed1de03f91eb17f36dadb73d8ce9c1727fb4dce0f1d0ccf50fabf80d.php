<?php

/* RMSPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_1413d69bed1de03f91eb17f36dadb73d8ce9c1727fb4dce0f1d0ccf50fabf80d extends Twig_Template
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
<!DOCTYPE html>
<html>
    <head>
        <title>Adverts n°";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Cette page est une page de vue qui affiche l'annonce n°";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>

        <p>
        <div>
            <ul>
                Cette page est une page de vue dans le dossier src/PRS/PlatformBundle/Resources/views/Advert/ 
                
                <br>

                Elle affiche l'annonce n°";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
            </ul>


        </div>



    </p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RMSPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  31 => 9,  25 => 6,  19 => 2,);
    }
}
