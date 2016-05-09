<?php

/* VideoBundle:Default:upload.html.twig */
class __TwigTemplate_8e54bbb43d465569f5c57d26c261656300aa40dd5eb696a46546ac9fc5772cea extends Twig_Template
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
        $__internal_5a467a52c50df925431d94e298534997a9d0e00d029bcd940b052388b37cd2cd = $this->env->getExtension("native_profiler");
        $__internal_5a467a52c50df925431d94e298534997a9d0e00d029bcd940b052388b37cd2cd->enter($__internal_5a467a52c50df925431d94e298534997a9d0e00d029bcd940b052388b37cd2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:upload.html.twig"));

        // line 1
        echo "<form method=\"post\">
    <input type=\"text\" name=\"title\" placeholder=\"title\"> <br>
    <input type=\"text\" name=\"link\" placeholder=\"lien de la video\"> <br>
    <textarea name=\"description\" placeholder=\"description\"></textarea> <br>
    <input type=\"text\" name=\"image\" placeholder=\"lien de l'image\"> <br>
    <input type=\"submit\" value=\"Envoyé la vidéo\">
</form>";
        
        $__internal_5a467a52c50df925431d94e298534997a9d0e00d029bcd940b052388b37cd2cd->leave($__internal_5a467a52c50df925431d94e298534997a9d0e00d029bcd940b052388b37cd2cd_prof);

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
