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
        $__internal_2e09227b6fc45ee65217282f339d1b86863324181ec2a509c032a3cac0b4d470 = $this->env->getExtension("native_profiler");
        $__internal_2e09227b6fc45ee65217282f339d1b86863324181ec2a509c032a3cac0b4d470->enter($__internal_2e09227b6fc45ee65217282f339d1b86863324181ec2a509c032a3cac0b4d470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:video.html.twig"));

        // line 1
        echo "

<iframe width=\"560\" height=\"315\" src=";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url", array()), "html", null, true);
        echo " frameborder=\"0\" allowfullscreen></iframe>

<h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "name", array()), "html", null, true);
        echo "</h3> par <a href=\"../userVideo/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "userId", array()), "html", null, true);
        echo "\"><span> ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</span></a>

<div class=\"videoDescription\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "description", array()), "html", null, true);
        echo "</div>";
        
        $__internal_2e09227b6fc45ee65217282f339d1b86863324181ec2a509c032a3cac0b4d470->leave($__internal_2e09227b6fc45ee65217282f339d1b86863324181ec2a509c032a3cac0b4d470_prof);

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
        return array (  40 => 7,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* */
/* */
/* <iframe width="560" height="315" src={{ video.url }} frameborder="0" allowfullscreen></iframe>*/
/* */
/* <h3>{{ video.name }}</h3> par <a href="../userVideo/{{ video.userId }}"><span> {{ name }}</span></a>*/
/* */
/* <div class="videoDescription">{{ video.description }}</div>*/
