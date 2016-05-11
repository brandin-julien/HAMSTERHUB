<?php

/* VideoBundle:Default:upload.html.twig */
class __TwigTemplate_342b6a523a3cc8bad5d3c500a3f78fe926d386dea9ef6c79abb39eba1856df75 extends Twig_Template
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
        $__internal_8072e4cf314412cd9ab8b92b6988fe5c7d2451b2d8ba1c384d65598b088b8504 = $this->env->getExtension("native_profiler");
        $__internal_8072e4cf314412cd9ab8b92b6988fe5c7d2451b2d8ba1c384d65598b088b8504->enter($__internal_8072e4cf314412cd9ab8b92b6988fe5c7d2451b2d8ba1c384d65598b088b8504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:upload.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("head.html.twig", "VideoBundle:Default:upload.html.twig", 4)->display($context);
        // line 5
        echo "<form method=\"post\">
    <input type=\"text\" name=\"title\" placeholder=\"title\"> <br>
    <input type=\"text\" name=\"link\" placeholder=\"lien de la video\"> <br>
    <textarea name=\"description\" placeholder=\"description\"></textarea> <br>
    <input type=\"text\" name=\"image\" placeholder=\"lien de l'image\"> <br>
    <input type=\"submit\" value=\"Envoyer la vidéo\">
</form>
";
        // line 12
        $this->loadTemplate("footer.html.twig", "VideoBundle:Default:upload.html.twig", 12)->display($context);
        
        $__internal_8072e4cf314412cd9ab8b92b6988fe5c7d2451b2d8ba1c384d65598b088b8504->leave($__internal_8072e4cf314412cd9ab8b92b6988fe5c7d2451b2d8ba1c384d65598b088b8504_prof);

    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  27 => 5,  25 => 4,  22 => 3,);
    }
}
/* {# app/Resources/views/head.html.twig #}*/
/* {# app/Resources/views/footer.html.twig #}*/
/* */
/* {% include 'head.html.twig' %}*/
/* <form method="post">*/
/*     <input type="text" name="title" placeholder="title"> <br>*/
/*     <input type="text" name="link" placeholder="lien de la video"> <br>*/
/*     <textarea name="description" placeholder="description"></textarea> <br>*/
/*     <input type="text" name="image" placeholder="lien de l'image"> <br>*/
/*     <input type="submit" value="Envoyer la vidéo">*/
/* </form>*/
/* {% include 'footer.html.twig' %}*/
