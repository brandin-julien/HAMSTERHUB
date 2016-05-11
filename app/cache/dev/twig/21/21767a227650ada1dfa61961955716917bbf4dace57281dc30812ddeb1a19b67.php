<?php

/* VideoBundle:Default:video.html.twig */
class __TwigTemplate_cc1f70124a05c3e9bb44113c40f32c8ccb7b33f4cfe89a66e67feb1f139eac72 extends Twig_Template
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
        $__internal_296186227efc7c710aed4800ba229fdc446d36b138e56473832726d91558fb41 = $this->env->getExtension("native_profiler");
        $__internal_296186227efc7c710aed4800ba229fdc446d36b138e56473832726d91558fb41->enter($__internal_296186227efc7c710aed4800ba229fdc446d36b138e56473832726d91558fb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:video.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("head.html.twig", "VideoBundle:Default:video.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"video\">
    <iframe src=";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url", array()), "html", null, true);
        echo " frameborder=\"0\" allowfullscreen></iframe>
    <br>
    <div class=\"userVideo\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "name", array()), "html", null, true);
        echo "</div>
    <br>
    <a class=\"userName\" href=\"../userVideo/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "userId", array()), "html", null, true);
        echo "\">par ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <br>
    <div class=\"videoDescription\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "description", array()), "html", null, true);
        echo "</div>
</div>

";
        // line 15
        $this->loadTemplate("footer.html.twig", "VideoBundle:Default:video.html.twig", 15)->display($context);
        
        $__internal_296186227efc7c710aed4800ba229fdc446d36b138e56473832726d91558fb41->leave($__internal_296186227efc7c710aed4800ba229fdc446d36b138e56473832726d91558fb41_prof);

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
        return array (  53 => 15,  47 => 12,  40 => 10,  35 => 8,  30 => 6,  27 => 5,  25 => 4,  22 => 3,);
    }
}
/* {# app/Resources/views/head.html.twig #}*/
/* {# app/Resources/views/footer.html.twig #}*/
/* */
/* {% include 'head.html.twig' %}*/
/* <div class="video">*/
/*     <iframe src={{ video.url }} frameborder="0" allowfullscreen></iframe>*/
/*     <br>*/
/*     <div class="userVideo">{{ video.name }}</div>*/
/*     <br>*/
/*     <a class="userName" href="../userVideo/{{ video.userId }}">par {{ name }}</a>*/
/*     <br>*/
/*     <div class="videoDescription">{{ video.description }}</div>*/
/* </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
