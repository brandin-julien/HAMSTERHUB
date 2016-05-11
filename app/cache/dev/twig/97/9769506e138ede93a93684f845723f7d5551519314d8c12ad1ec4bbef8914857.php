<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a536523e89d8087d6fd6612b0f6dabb99b8ddf279e5f1d3ac4b721965b1d3869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43f0e9ca901ff2eb8cf40b3d2e7b84b9e24f4cce4135d73ebd3573fbd6a42aeb = $this->env->getExtension("native_profiler");
        $__internal_43f0e9ca901ff2eb8cf40b3d2e7b84b9e24f4cce4135d73ebd3573fbd6a42aeb->enter($__internal_43f0e9ca901ff2eb8cf40b3d2e7b84b9e24f4cce4135d73ebd3573fbd6a42aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f0e9ca901ff2eb8cf40b3d2e7b84b9e24f4cce4135d73ebd3573fbd6a42aeb->leave($__internal_43f0e9ca901ff2eb8cf40b3d2e7b84b9e24f4cce4135d73ebd3573fbd6a42aeb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2292786e9c4871cce8117bc7f1022e52bb756460e1be390400011a71c85418c5 = $this->env->getExtension("native_profiler");
        $__internal_2292786e9c4871cce8117bc7f1022e52bb756460e1be390400011a71c85418c5->enter($__internal_2292786e9c4871cce8117bc7f1022e52bb756460e1be390400011a71c85418c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2292786e9c4871cce8117bc7f1022e52bb756460e1be390400011a71c85418c5->leave($__internal_2292786e9c4871cce8117bc7f1022e52bb756460e1be390400011a71c85418c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3e98d807649234cbf77ed0d443dfab149ae8eb82b4707a08836503773ddc38c = $this->env->getExtension("native_profiler");
        $__internal_b3e98d807649234cbf77ed0d443dfab149ae8eb82b4707a08836503773ddc38c->enter($__internal_b3e98d807649234cbf77ed0d443dfab149ae8eb82b4707a08836503773ddc38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3e98d807649234cbf77ed0d443dfab149ae8eb82b4707a08836503773ddc38c->leave($__internal_b3e98d807649234cbf77ed0d443dfab149ae8eb82b4707a08836503773ddc38c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dbff1410a5959e09c2fa4c26755d0efc3d3762dc98fc7aee5065c8e45e9ed08 = $this->env->getExtension("native_profiler");
        $__internal_4dbff1410a5959e09c2fa4c26755d0efc3d3762dc98fc7aee5065c8e45e9ed08->enter($__internal_4dbff1410a5959e09c2fa4c26755d0efc3d3762dc98fc7aee5065c8e45e9ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4dbff1410a5959e09c2fa4c26755d0efc3d3762dc98fc7aee5065c8e45e9ed08->leave($__internal_4dbff1410a5959e09c2fa4c26755d0efc3d3762dc98fc7aee5065c8e45e9ed08_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
