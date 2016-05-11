<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_da73a3d594fff3b8705b54e36d997f0f9e93c4727373493b808ad4e361454317 extends Twig_Template
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
        $__internal_e97f32b7a27584f7588e24ff8e83ce1001535b600c663d77481bcaeeef628db6 = $this->env->getExtension("native_profiler");
        $__internal_e97f32b7a27584f7588e24ff8e83ce1001535b600c663d77481bcaeeef628db6->enter($__internal_e97f32b7a27584f7588e24ff8e83ce1001535b600c663d77481bcaeeef628db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <a href='edit'><button id='editButton'>Modifier</button></a>
</div>
";
        
        $__internal_e97f32b7a27584f7588e24ff8e83ce1001535b600c663d77481bcaeeef628db6->leave($__internal_e97f32b7a27584f7588e24ff8e83ce1001535b600c663d77481bcaeeef628db6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*     <a href='edit'><button id='editButton'>Modifier</button></a>*/
/* </div>*/
/* */
