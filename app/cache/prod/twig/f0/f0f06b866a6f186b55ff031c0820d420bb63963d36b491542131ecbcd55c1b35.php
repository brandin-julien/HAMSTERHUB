<?php

/* VideoBundle:Default:upload.html.twig */
class __TwigTemplate_f3d1502775ad758d89fff48f946b497690f37463bef490f636b866881bbceee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"post\">
    <input type=\"text\" name=\"title\" placeholder=\"title\"> <br>
    <input type=\"text\" name=\"link\" placeholder=\"lien de la video\"> <br>
    <textarea name=\"description\" placeholder=\"description\"></textarea> <br>
    <input type=\"text\" name=\"image\" placeholder=\"lien de l'image\"> <br>
    <input type=\"submit\" value=\"Envoyé la vidéo\">
</form>

";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/video.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:upload.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  36 => 10,  30 => 9,  20 => 1,);
    }
}
/* <form method="post">*/
/*     <input type="text" name="title" placeholder="title"> <br>*/
/*     <input type="text" name="link" placeholder="lien de la video"> <br>*/
/*     <textarea name="description" placeholder="description"></textarea> <br>*/
/*     <input type="text" name="image" placeholder="lien de l'image"> <br>*/
/*     <input type="submit" value="Envoyé la vidéo">*/
/* </form>*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/css/reset.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/framework/css/video.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
