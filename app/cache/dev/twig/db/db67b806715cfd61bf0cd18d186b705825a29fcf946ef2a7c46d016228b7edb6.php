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
        $__internal_25bc5c8b530f7cb51f7405d5257a8de2323bcd7f2da0f0d22d51be879a2ac7a2 = $this->env->getExtension("native_profiler");
        $__internal_25bc5c8b530f7cb51f7405d5257a8de2323bcd7f2da0f0d22d51be879a2ac7a2->enter($__internal_25bc5c8b530f7cb51f7405d5257a8de2323bcd7f2da0f0d22d51be879a2ac7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:upload.html.twig"));

        // line 1
        echo "<form method=\"post\">
    <input type=\"text\" name=\"title\" placeholder=\"title\"> <br>
    <input type=\"text\" name=\"link\" placeholder=\"lien de la video\"> <br>
    <textarea name=\"description\" placeholder=\"description\"></textarea> <br>
    <input type=\"text\" name=\"image\" placeholder=\"lien de l'image\"> <br>
    <input type=\"submit\" value=\"Envoyé la vidéo\">
</form>";
        
        $__internal_25bc5c8b530f7cb51f7405d5257a8de2323bcd7f2da0f0d22d51be879a2ac7a2->leave($__internal_25bc5c8b530f7cb51f7405d5257a8de2323bcd7f2da0f0d22d51be879a2ac7a2_prof);

    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:upload.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <form method="post">*/
/*     <input type="text" name="title" placeholder="title"> <br>*/
/*     <input type="text" name="link" placeholder="lien de la video"> <br>*/
/*     <textarea name="description" placeholder="description"></textarea> <br>*/
/*     <input type="text" name="image" placeholder="lien de l'image"> <br>*/
/*     <input type="submit" value="Envoyé la vidéo">*/
/* </form>*/
