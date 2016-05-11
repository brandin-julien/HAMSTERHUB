<?php

/* VideoBundle:Default:video.html.twig */
class __TwigTemplate_466259336e0194e857351f6e7a08b786eace2e57f9e96740ec83e3918db05d81 extends Twig_Template
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
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("head.html.twig", "VideoBundle:Default:video.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"video\">
    <iframe src=";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array()), "html", null, true);
        echo " frameborder=\"0\" allowfullscreen></iframe>

    <div class=\"userVideo\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "name", array()), "html", null, true);
        echo "</div> <a class=\"userName\" href=\"../userVideo/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "userId", array()), "html", null, true);
        echo "\">par ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</a>

    <div class=\"videoDescription\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "description", array()), "html", null, true);
        echo "</div>
</div>

";
        // line 13
        $this->loadTemplate("footer.html.twig", "VideoBundle:Default:video.html.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  41 => 10,  32 => 8,  27 => 6,  24 => 5,  22 => 4,  19 => 3,);
    }
}
/* {# app/Resources/views/head.html.twig #}*/
/* {# app/Resources/views/footer.html.twig #}*/
/* */
/* {% include 'head.html.twig' %}*/
/* <div class="video">*/
/*     <iframe src={{ video.url }} frameborder="0" allowfullscreen></iframe>*/
/* */
/*     <div class="userVideo">{{ video.name }}</div> <a class="userName" href="../userVideo/{{ video.userId }}">par {{ name }}</a>*/
/* */
/*     <div class="videoDescription">{{ video.description }}</div>*/
/* </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
