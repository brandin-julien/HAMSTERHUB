<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7d35c487affcd4d769fbf558ba152269e5046ce38d74ffd692d935b27b67ac41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d71ec70c39ceed24c795356296f3b2297dba430b6412637bba0389d66bad3718 = $this->env->getExtension("native_profiler");
        $__internal_d71ec70c39ceed24c795356296f3b2297dba430b6412637bba0389d66bad3718->enter($__internal_d71ec70c39ceed24c795356296f3b2297dba430b6412637bba0389d66bad3718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d71ec70c39ceed24c795356296f3b2297dba430b6412637bba0389d66bad3718->leave($__internal_d71ec70c39ceed24c795356296f3b2297dba430b6412637bba0389d66bad3718_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33f9a53b958aec6e31759990e734a3f2788b1e8d16a5495e36ce640f0dc35abe = $this->env->getExtension("native_profiler");
        $__internal_33f9a53b958aec6e31759990e734a3f2788b1e8d16a5495e36ce640f0dc35abe->enter($__internal_33f9a53b958aec6e31759990e734a3f2788b1e8d16a5495e36ce640f0dc35abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33f9a53b958aec6e31759990e734a3f2788b1e8d16a5495e36ce640f0dc35abe->leave($__internal_33f9a53b958aec6e31759990e734a3f2788b1e8d16a5495e36ce640f0dc35abe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a27bf33627de24c20ff1aaa0edb24678f40dc555585f4de1a89766c5136164cc = $this->env->getExtension("native_profiler");
        $__internal_a27bf33627de24c20ff1aaa0edb24678f40dc555585f4de1a89766c5136164cc->enter($__internal_a27bf33627de24c20ff1aaa0edb24678f40dc555585f4de1a89766c5136164cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a27bf33627de24c20ff1aaa0edb24678f40dc555585f4de1a89766c5136164cc->leave($__internal_a27bf33627de24c20ff1aaa0edb24678f40dc555585f4de1a89766c5136164cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e608b0b5a1332ebaa76f63069aab7a63de64efc9f4866e586ac96fe334525c3 = $this->env->getExtension("native_profiler");
        $__internal_0e608b0b5a1332ebaa76f63069aab7a63de64efc9f4866e586ac96fe334525c3->enter($__internal_0e608b0b5a1332ebaa76f63069aab7a63de64efc9f4866e586ac96fe334525c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e608b0b5a1332ebaa76f63069aab7a63de64efc9f4866e586ac96fe334525c3->leave($__internal_0e608b0b5a1332ebaa76f63069aab7a63de64efc9f4866e586ac96fe334525c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
